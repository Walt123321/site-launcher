import requests
import urllib3
import base64
import copy
from concurrent.futures import ThreadPoolExecutor
import streamlit as st

from deploy_whitepage import build_whitepage_zip

urllib3.disable_warnings()

# =====================================================
# CONFIG
# =====================================================

API_KEY = st.secrets["KEITARO_API_KEY"]
BASE_URL = st.secrets["KEITARO_BASE_URL"].rstrip("/")

TIMEOUT = 120

BUYER_GROUPS = {
    "TNA": {"campaign": 2, "offer": 3, "domain": 2},
    "VVK": {"campaign": 6, "offer": 7, "domain": 8},
    "BAM": {"campaign": 11, "offer": 10, "domain": 9},
}
_DEFAULT_GROUPS = {"campaign": 2, "offer": 3, "domain": 2}

def _groups(buyer):
    return BUYER_GROUPS.get(buyer or "", _DEFAULT_GROUPS)

HEADERS = {
    "Api-Key": API_KEY,
    "Content-Type": "application/json"
}

# --- Adspect cloaking (optional) ---
# Every new launch also tries to wire up Adspect+Keitaro cloaking (white
# page for bots/moderators, real offer for genuine traffic) -- see
# setup_cloaking() below. This is best-effort: if these secrets aren't
# configured, cloaking is silently skipped and the launch proceeds as
# before (money page only). It never blocks or fails a launch.
ADSPECT_API_KEY = st.secrets.get("ADSPECT_API_KEY", "")
ADSPECT_BASE = "https://api.adspect.net/v1"
ADSPECT_TEMPLATE_STREAM_ID = st.secrets.get("ADSPECT_TEMPLATE_STREAM_ID", "")
ADSPECT_FILTER_NAME = st.secrets.get("ADSPECT_FILTER_NAME", "adspect")
PILOT_CAMPAIGN_ID = st.secrets.get("PILOT_CAMPAIGN_ID", "")

# Temporarily paused (2026-08-12): Adspect/Keitaro never see the visitor's
# real IP on this server -- it's behind Cloudflare + a second DDoS-Guard
# relay hop, and nginx's realip module only trusts the Cloudflare ranges,
# not the DDoS-Guard one, so it never kicks in. Result: every visitor looks
# like a Cloudflare datacenter IP and gets routed to the white page,
# including real traffic. Re-enable once realip.inc also trusts the
# DDoS-Guard relay ranges (AS59692) -- flip this back to True.
CLOAKING_AUTO_LAUNCH_ENABLED = False

CLOAKING_ENABLED = CLOAKING_AUTO_LAUNCH_ENABLED and bool(ADSPECT_API_KEY and ADSPECT_TEMPLATE_STREAM_ID and PILOT_CAMPAIGN_ID)

# =====================================================
# HELPERS
# =====================================================

def post(url, payload):
    return requests.post(
        url,
        headers=HEADERS,
        json=payload,
        timeout=TIMEOUT,
        verify=False
    )


def get(url):
    return requests.get(
        url,
        headers=HEADERS,
        timeout=TIMEOUT,
        verify=False
    )


def put(url, payload):
    return requests.put(
        url,
        headers=HEADERS,
        json=payload,
        timeout=TIMEOUT,
        verify=False
    )

# =====================================================
# FIND EXISTING
# =====================================================

def find_offer_by_name(domain):
    r = get(f"{BASE_URL}/offers")
    if r.status_code != 200:
        return None

    for row in r.json():
        if row.get("name") == domain:
            return row["id"]

    return None


def find_campaign_by_name(domain):
    r = get(f"{BASE_URL}/campaigns")
    if r.status_code != 200:
        return None

    for row in r.json():
        if row.get("name") == domain:
            return row["id"]

    return None


def find_domain_by_name(domain):
    r = get(f"{BASE_URL}/domains")
    if r.status_code != 200:
        return None

    for row in r.json():
        if row.get("name") == domain:
            return row["id"]

    return None


def find_stream_by_campaign(campaign_id, domain=None):
    r = get(f"{BASE_URL}/campaigns/{campaign_id}/streams")
    if r.status_code != 200:
        return None

    rows = r.json()
    if not rows:
        return None

    if domain:
        for row in rows:
            if row.get("name") == domain:
                return row["id"]

    # Fall back to whatever is already sitting at position 1 — a reused
    # campaign (see create_campaign's 422 branch) only ever gets one
    # stream from this pipeline, so this is safe to reuse either way.
    return rows[0]["id"]

# =====================================================
# OFFER
# =====================================================

def create_offer(domain, zip_bytes, callback=None, buyer=None):

    if callback:
        callback(f"📦 {domain}: uploading ZIP")

    archive_b64 = base64.b64encode(zip_bytes).decode()

    payload = {
        "name": domain,
        "group_id": _groups(buyer)["offer"],
        "offer_type": "local",
        "state": "active",
        "archive": archive_b64
    }

    r = post(f"{BASE_URL}/offers", payload)

    if r.status_code == 200:
        oid = r.json()["id"]

        if callback:
            callback(f"✅ {domain}: offer #{oid}")

        return oid

    if r.status_code == 422:
        existing = find_offer_by_name(domain)

        if existing:
            if callback:
                callback(f"🔄 {domain}: offer exists, updating ZIP...")

            r2 = put(f"{BASE_URL}/offers/{existing}", {"archive": archive_b64})

            if r2.status_code == 200:
                if callback:
                    callback(f"✅ {domain}: offer #{existing} updated")
                return existing

            raise Exception(f"OFFER UPDATE ERROR {r2.status_code}: {r2.text}")

    raise Exception(f"OFFER ERROR {r.status_code}: {r.text}")

# =====================================================
# CAMPAIGN
# =====================================================

def create_campaign(domain, callback=None, buyer=None):
    campaign_name = domain

    payload = {
        "name": campaign_name,
        "alias": domain,
        "type": "position",
        "state": "active",
        "group_id": _groups(buyer)["campaign"]
    }

    r = post(f"{BASE_URL}/campaigns", payload)

    if r.status_code == 200:
        cid = r.json()["id"]

        if callback:
            callback(f"✅ {domain}: campaign #{cid}")

        return cid

    if r.status_code == 422:
        existing = find_campaign_by_name(campaign_name)

        if existing:
            if callback:
                callback(f"♻️ {domain}: campaign reused")

            return existing

    raise Exception(f"CAMPAIGN ERROR {r.status_code}: {r.text}")

# =====================================================
# FLOW
# =====================================================

def create_flow(domain, campaign_id, offer_id, callback=None):

    payload = {
        "campaign_id": campaign_id,
        "type": "forced",
        "name": domain,
        "position": 1,
        "weight": 100,
        "state": "active",
        "action_type": "http",
        "schema": "landings",
        "offers": [
            {
                "offer_id": offer_id,
                "share": 100,
                "state": "active"
            }
        ]
    }

    r = post(f"{BASE_URL}/streams", payload)

    if r.status_code == 200:
        fid = r.json()["id"]

        if callback:
            callback(f"✅ {domain}: flow #{fid}")

        return fid

    if r.status_code == 422:
        # Happens when create_campaign() above reused an existing campaign
        # (e.g. a retry after a prior partial launch) — that campaign
        # already has a stream at position 1, so Keitaro rejects a second
        # one with "position: Must be unique". Reuse it instead of failing.
        existing = find_stream_by_campaign(campaign_id, domain)

        if existing:
            if callback:
                callback(f"♻️ {domain}: flow reused")

            return existing

    raise Exception(f"FLOW ERROR {r.status_code}: {r.text}")

# =====================================================
# DOMAIN
# =====================================================

def create_domain(domain, campaign_id, callback=None, buyer=None):

    payload = {
        "name": domain,
        "default_campaign_id": campaign_id,
        "group_id": _groups(buyer)["domain"],
        "ssl_redirect": True,
        "allow_indexing": True
    }

    r = post(f"{BASE_URL}/domains", payload)

    if r.status_code == 200:
        data = r.json()

        did = data[0]["id"] if isinstance(data, list) else data["id"]

        if callback:
            callback(f"✅ {domain}: domain #{did}")

        return did

    if r.status_code == 422:
        existing = find_domain_by_name(domain)

        if existing:
            if callback:
                callback(f"♻️ {domain}: domain reused")

            return existing

    raise Exception(f"DOMAIN ERROR {r.status_code}: {r.text}")

# =====================================================
# CLOAKING (Adspect)
# =====================================================
# Rolled out to all 1800 existing campaigns via bulk_setup.py (a one-off,
# manually-run script). This is the same logic, wired directly into every
# new launch so future domains get cloaking automatically instead of
# needing a manual bulk_setup.py pass afterwards. The white-flow structure
# is cloned live from the pilot campaign (PILOT_CAMPAIGN_ID, rontrix.org)
# rather than hand-built here, so it always matches whatever filter/schema
# shape Keitaro actually accepted on the one flow that's confirmed working.

def _adspect_headers():
    auth = base64.b64encode(f"{ADSPECT_API_KEY}:".encode()).decode()
    return {"Authorization": f"Basic {auth}", "Content-Type": "application/json"}


def _adspect_copy_stream(name):
    r = requests.request(
        "COPY",
        f"{ADSPECT_BASE}/streams/{ADSPECT_TEMPLATE_STREAM_ID}",
        headers=_adspect_headers(),
        json={"name": name},
        timeout=TIMEOUT,
    )
    if r.status_code not in (200, 201):
        raise Exception(f"ADSPECT COPY ERROR {r.status_code}: {r.text}")
    return r.json()["stream_id"]


def _adspect_set_countries(stream_id, countries):
    """Restrict a stream's money-page traffic to the given ISO 3166-1
    alpha-2 country codes (Adspect's own "countries" field on the stream
    -- confirmed empty by default on the template, i.e. no restriction).
    Everyone outside the list gets treated as unsafe, same as any other
    Adspect filter mismatch -- routed to the safe/white page."""
    r = requests.patch(
        f"{ADSPECT_BASE}/streams/{stream_id}",
        headers=_adspect_headers(),
        json={"countries": countries},
        timeout=TIMEOUT,
    )
    if r.status_code not in (200, 201):
        raise Exception(f"ADSPECT SET COUNTRIES ERROR {r.status_code}: {r.text}")


def _find_white_flow_template(streams):
    for s in streams:
        for f in (s.get("filters") or []):
            if f.get("name") == ADSPECT_FILTER_NAME:
                return s
    return None


def find_offer_by_name_exact(name):
    """Like find_offer_by_name(), but matches on an exact given name rather
    than assuming the offer name equals the bare domain (whitepage offers
    are named "<domain> - whitepage")."""
    r = get(f"{BASE_URL}/offers")
    if r.status_code != 200:
        return None
    for row in r.json():
        if row.get("name") == name:
            return row["id"]
    return None


def create_whitepage_offer(domain, group_id, callback=None):
    zip_bytes = build_whitepage_zip(domain, "en")
    archive_b64 = base64.b64encode(zip_bytes).decode()
    offer_name = f"{domain} - whitepage"

    payload = {
        "name": offer_name,
        "group_id": group_id,
        "offer_type": "local",
        "state": "active",
        "archive": archive_b64,
    }

    r = post(f"{BASE_URL}/offers", payload)

    if r.status_code == 200:
        oid = r.json()["id"]
        if callback:
            callback(f"🛡️ {domain}: whitepage-offer #{oid}")
        return oid

    if r.status_code == 422:
        existing = find_offer_by_name_exact(offer_name)
        if existing:
            r2 = put(f"{BASE_URL}/offers/{existing}", {"archive": archive_b64})
            if r2.status_code == 200:
                if callback:
                    callback(f"🛡️ {domain}: whitepage-offer #{existing} updated")
                return existing
            raise Exception(f"WHITEPAGE OFFER UPDATE ERROR {r2.status_code}: {r2.text}")

    raise Exception(f"WHITEPAGE OFFER ERROR {r.status_code}: {r.text}")


def setup_cloaking(domain, campaign_id, money_flow_id, offer_group_id, callback=None, geo_code=None):
    """Best-effort: whitepage offer + Adspect stream + Keitaro white-flow,
    routing bots/moderators to the white page and everyone else to the
    money page. Never raises -- cloaking is an enhancement on top of the
    launch, not a requirement for it to succeed. Returns a status dict that
    ends up in create_full_project()'s result under "cloaking".

    geo_code: the offer's target country (same value already used for
    currency/language on the page itself), e.g. "US" or "DE". When set to
    a real country (not None/"" /"UNKNOWN"), the Adspect stream is
    restricted to that country -- visitors from anywhere else are treated
    the same as a failed cloaking check and see the white page."""

    if not CLOAKING_ENABLED:
        return {"status": "skipped", "reason": "Adspect secrets not configured"}

    try:
        streams = get(f"{BASE_URL}/campaigns/{campaign_id}/streams").json()

        if _find_white_flow_template(streams):
            if callback:
                callback(f"🛡️ {domain}: cloaking already set up, skipping")
            return {"status": "skipped", "reason": "already set up"}

        money_flow = next((s for s in streams if s.get("id") == money_flow_id), None)
        if not money_flow:
            raise Exception(f"money flow #{money_flow_id} not found on campaign #{campaign_id}")

        pilot_streams = get(f"{BASE_URL}/campaigns/{PILOT_CAMPAIGN_ID}/streams").json()
        template_flow = _find_white_flow_template(pilot_streams)
        if not template_flow:
            raise Exception(
                f"pilot campaign {PILOT_CAMPAIGN_ID} has no flow with the "
                f"'{ADSPECT_FILTER_NAME}' filter to clone"
            )

        wp_offer_id = create_whitepage_offer(domain, offer_group_id, callback)
        adspect_stream_id = _adspect_copy_stream(f"AS - {domain}")

        geo_normalized = (geo_code or "").strip().upper()
        if geo_normalized and geo_normalized != "UNKNOWN":
            _adspect_set_countries(adspect_stream_id, [geo_normalized])
            if callback:
                callback(f"🌍 {domain}: Adspect restricted to {geo_normalized}")

        # Free up the money-flow's position for the white-flow, same as the
        # pilot (white=1, money=2) -- see bulk_setup.py's create_white_flow
        # for why this is a bump-then-reuse rather than position-1 maths.
        old_money_position = money_flow.get("position", 1)
        bump = put(f"{BASE_URL}/streams/{money_flow['id']}", {"position": old_money_position + 1})
        if bump.status_code not in (200, 201):
            raise Exception(f"failed to bump money flow position: {bump.status_code} {bump.text}")

        payload = copy.deepcopy(template_flow)
        for key in ("id", "created_at", "updated_at", "hash", "state"):
            payload.pop(key, None)

        payload["campaign_id"] = int(campaign_id)
        payload["name"] = f"White page - {domain}"
        payload["position"] = old_money_position
        payload["type"] = "forced"

        found_filter = False
        for f in payload.get("filters") or []:
            if f.get("name") == ADSPECT_FILTER_NAME:
                f["payload"] = str(adspect_stream_id)
                f.pop("id", None)
                found_filter = True
        if not found_filter:
            raise Exception("adspect filter missing on cloned pilot template")

        found_offer = False
        for o in payload.get("offers") or []:
            o["offer_id"] = wp_offer_id
            o.pop("id", None)
            found_offer = True
        if not found_offer:
            payload["offers"] = [{"offer_id": wp_offer_id, "share": 100, "state": "active"}]

        r = post(f"{BASE_URL}/streams", payload)
        if r.status_code not in (200, 201):
            raise Exception(f"white-flow create failed {r.status_code}: {r.text}")
        white_flow_id = r.json()["id"]

        if callback:
            callback(f"✅ {domain}: cloaking wired (white-flow #{white_flow_id})")

        return {
            "status": "ok",
            "whitepage_offer_id": wp_offer_id,
            "adspect_stream_id": adspect_stream_id,
            "white_flow_id": white_flow_id,
        }

    except Exception as e:
        if callback:
            callback(f"⚠️ {domain}: cloaking setup failed — {e}")
        return {"status": "error", "error": str(e)}

# =====================================================
# PROJECT
# =====================================================

def create_full_project(domain, zip_bytes, callback=None, buyer=None, geo_code=None):

    if callback:
        callback(f"🚀 {domain}: START")

    offer_id = create_offer(domain, zip_bytes, callback, buyer=buyer)
    campaign_id = create_campaign(domain, callback, buyer=buyer)
    flow_id = create_flow(domain, campaign_id, offer_id, callback)
    domain_id = create_domain(domain, campaign_id, callback, buyer=buyer)

    cloaking = setup_cloaking(
        domain, campaign_id, flow_id, _groups(buyer)["offer"], callback, geo_code=geo_code
    )

    return {
        "domain": domain,
        "offer_id": offer_id,
        "campaign_id": campaign_id,
        "flow_id": flow_id,
        "domain_id": domain_id,
        "cloaking": cloaking,
        "status": "success"
    }

# =====================================================
# MULTI
# =====================================================

def create_multiple_projects(domains, zip_map, callback=None, max_workers=1, buyer=None, geo_code=None):

    results = []

    for domain in domains:

        try:
            if domain not in zip_map:
                results.append({
                    "domain": domain,
                    "error": "ZIP missing"
                })
                continue

            result = create_full_project(
                domain,
                zip_map[domain],
                callback,
                buyer=buyer,
                geo_code=geo_code,
            )

            results.append(result)

        except Exception as e:
            results.append({
                "domain": domain,
                "error": str(e)
            })

    return results
