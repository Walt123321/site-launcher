import requests
import urllib3
import base64
from concurrent.futures import ThreadPoolExecutor
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
        oid = r.json()["id"]

        if callback:
            callback(f"✅ {domain}: offer #{oid}")

        return oid

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
# PROJECT
# =====================================================

def create_full_project(domain, zip_bytes, callback=None):

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
        "domain_id": domain_id,
        "status": "success"
    }

# =====================================================
# MULTI
# =====================================================

def create_multiple_projects(domains, zip_map, callback=None, max_workers=1):

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
                callback
            )

            results.append(result)

        except Exception as e:
            results.append({
                "domain": domain,
                "error": str(e)
            })

    return results
