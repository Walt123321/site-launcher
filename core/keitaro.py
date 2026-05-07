import requests
import urllib3
import base64
import time
from concurrent.futures import ThreadPoolExecutor, as_completed
import streamlit as st

urllib3.disable_warnings()

# =====================================================
# CONFIG
# =====================================================

API_KEY = st.secrets["KEITARO_API_KEY"]
BASE_URL = st.secrets["KEITARO_BASE_URL"].rstrip("/")

TIMEOUT = 120

CAMPAIGN_GROUP_ID = 2
OFFER_GROUP_ID = 3
DOMAIN_GROUP_ID = 2

HEADERS = {
    "Api-Key": API_KEY,
    "Content-Type": "application/json"
}


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


# =====================================================
# OFFER
# =====================================================

def create_offer(domain, zip_bytes, callback=None):

    if callback:
        callback(f"📦 {domain}: uploading ZIP")

    archive_b64 = base64.b64encode(zip_bytes).decode()

    payload = {
        "name": domain,
        "group_id": OFFER_GROUP_ID,
        "offer_type": "local",
        "state": "active",
        "archive": archive_b64
    }

    r = post(f"{BASE_URL}/offers", payload)

    if r.status_code == 200:
        return r.json()["id"]

    if r.status_code == 422:
        existing = find_offer_by_name(domain)
        if existing:
            if callback:
                callback(f"♻️ {domain}: offer reused")
            return existing

    raise Exception(f"OFFER ERROR {r.status_code}: {r.text}")


# =====================================================
# CAMPAIGN
# =====================================================

def create_campaign(domain, callback=None):

    payload = {
        "name": domain,
        "alias": domain,
        "type": "position",
        "state": "active",
        "group_id": CAMPAIGN_GROUP_ID
    }

    r = post(f"{BASE_URL}/campaigns", payload)

    if r.status_code == 200:
        cid = r.json()["id"]
        if callback:
            callback(f"✅ {domain}: campaign #{cid}")
        return cid

    if r.status_code == 422:
        existing = find_campaign_by_name(domain)
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

    if r.status_code != 200:
        raise Exception(f"FLOW ERROR {r.status_code}: {r.text}")

    fid = r.json()["id"]

    if callback:
        callback(f"✅ {domain}: flow #{fid}")

    return fid


# =====================================================
# DOMAIN
# =====================================================

def create_domain(domain, campaign_id, callback=None):

    payload = {
        "name": domain,
        "default_campaign_id": campaign_id,
        "group_id": DOMAIN_GROUP_ID,
        "ssl_redirect": True,
        "allow_indexing": True
    }

    r = post(f"{BASE_URL}/domains", payload)

    if r.status_code == 200:
        data = r.json()

        if isinstance(data, list):
            did = data[0]["id"]
        else:
            did = data["id"]

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
# HTTPS CHECK
# =====================================================

def check_https(domain, callback=None, max_checks=600):
    url = f"https://{domain}"

    for i in range(max_checks):

        try:
            r = requests.get(
                url,
                timeout=30,
                verify=False,
                allow_redirects=True
            )

            html = r.text.lower()

            code_ok = r.status_code == 200

            breadcrumb_ok = (
                "breadcrumblist" in html
                and "application/ld+json" in html
            )

            if code_ok and breadcrumb_ok:
                if callback:
                    callback(f"✅ {domain}: FULL READY")
                return True, True

            if code_ok:
                if callback:
                    callback(f"🟡 {domain}: waiting breadcrumbs")

            else:
                if callback:
                    callback(f"🟡 {domain}: waiting HTTPS")

        except Exception:
            if callback:
                callback(f"🟡 {domain}: DNS / SSL pending")

        time.sleep(30)

    if callback:
        callback(f"⚠️ {domain}: timeout")

    return False, False


# =====================================================
# PROJECT
# =====================================================

def prepare_project(domain, zip_bytes, callback=None):

    if callback:
        callback(f"🚀 {domain}: START")

    offer_id = create_offer(domain, zip_bytes, callback)
    campaign_id = create_campaign(domain, callback)
    flow_id = create_flow(domain, campaign_id, offer_id, callback)
    domain_id = create_domain(domain, campaign_id, callback)

    return {
        "domain": domain,
        "offer_id": offer_id,
        "campaign_id": campaign_id,
        "flow_id": flow_id,
        "domain_id": domain_id
    }


def finalize_project(project, callback=None):

    if callback:
        callback("WAIT_SSL")

    https_ok, breadcrumb_ok = check_https(
        project["domain"],
        callback
    )

    project["https"] = https_ok
    project["breadcrumb"] = breadcrumb_ok

    return project


def create_full_project(domain, zip_bytes, callback=None):
    p = prepare_project(domain, zip_bytes, callback)
    return finalize_project(p, callback)


# =====================================================
# MULTI
# =====================================================

def create_multiple_projects(domains, zip_map, callback=None, max_workers=3):

    results = []

    # -------------------------------------------------
    # SINGLE
    # -------------------------------------------------
    if len(domains) == 1:

        domain = domains[0]

        try:
            return [
                create_full_project(
                    domain,
                    zip_map[domain],
                    callback
                )
            ]

        except Exception as e:
            return [{
                "domain": domain,
                "error": str(e)
            }]

    # -------------------------------------------------
    # MULTI STAGE 1
    # -------------------------------------------------
    prepared = []

    if callback:
        callback("🚀 Stage 1: Keitaro create")

    # sequential safer than threads for Keitaro
    for domain in domains:

        try:
            if domain not in zip_map:
                results.append({
                    "domain": domain,
                    "error": "ZIP missing"
                })
                continue

            obj = prepare_project(
                domain,
                zip_map[domain],
                callback
            )

            prepared.append(obj)

        except Exception as e:
            results.append({
                "domain": domain,
                "error": str(e)
            })

    # -------------------------------------------------
    # MULTI STAGE 2
    # -------------------------------------------------
    if callback:
        callback("🌐 Stage 2: SSL waiting")

    with ThreadPoolExecutor(max_workers=max_workers) as executor:

        futures = {
            executor.submit(
                finalize_project,
                p,
                callback
            ): p["domain"]
            for p in prepared
        }

        for future in as_completed(futures):

            domain = futures[future]

            try:
                results.append(future.result())

            except Exception as e:
                results.append({
                    "domain": domain,
                    "error": str(e)
                })

    return results
