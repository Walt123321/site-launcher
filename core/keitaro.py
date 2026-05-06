import requests
import urllib3
import base64
import time
from concurrent.futures import ThreadPoolExecutor, as_completed

urllib3.disable_warnings()
import streamlit as st


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

def set_config(
    api_key: str,
    base_url: str,
    campaign_group_id: int = 2,
    offer_group_id: int = 3,
    domain_group_id: int = 2
):
    global API_KEY, BASE_URL
    global CAMPAIGN_GROUP_ID, OFFER_GROUP_ID, DOMAIN_GROUP_ID
    global HEADERS

    API_KEY = api_key
    BASE_URL = base_url.rstrip("/")

    CAMPAIGN_GROUP_ID = campaign_group_id
    OFFER_GROUP_ID = offer_group_id
    DOMAIN_GROUP_ID = domain_group_id

    HEADERS = {
        "Api-Key": API_KEY,
        "Content-Type": "application/json"
    }


def post(url, payload):
    return requests.post(
        url,
        headers=HEADERS,
        json=payload,
        timeout=TIMEOUT,
        verify=False
    )


# =====================================================
# OFFER
# =====================================================

def create_offer(domain: str, zip_bytes, callback=None):

    if callback:
        callback(f"📦 {domain}: uploading ZIP...")

    archive_b64 = base64.b64encode(zip_bytes).decode()

    payload = {
        "name": domain,
        "group_id": OFFER_GROUP_ID,
        "offer_type": "local",
        "state": "active",
        "archive": archive_b64
    }

    r = post(f"{BASE_URL}/offers", payload)
    
    if callback:
        callback(f"📨 offer response: {r.status_code}")
    
    # якщо офер уже існує
    if r.status_code == 422 and "Name has already used" in r.text:
        if callback:
            callback(f"♻️ {domain}: offer already exists, trying reuse...")
    
        existing_id = find_offer_by_name(domain)
    
        if existing_id:
            return existing_id
    
        raise Exception("Offer exists but ID not found")
    
    if r.status_code != 200:
        raise Exception(r.text)
    
    data = r.json()
    return data["id"]
# =====================================================
# CAMPAIGN
# =====================================================

def create_campaign(domain: str, callback=None):
    payload = {
        "name": domain,
        "alias": domain,
        "type": "position",
        "state": "active",
        "group_id": CAMPAIGN_GROUP_ID
    }

    r = post(f"{BASE_URL}/campaigns", payload)

    if r.status_code != 200:
        raise Exception(f"Campaign error {r.status_code}: {r.text}")

    data = r.json()

    if callback:
        callback(f"✅ {domain}: campaign #{data['id']}")

    return data["id"]


def find_offer_by_name(domain):
    r = requests.get(
        f"{BASE_URL}/offers",
        headers=HEADERS,
        timeout=TIMEOUT,
        verify=False
    )

    if r.status_code != 200:
        return None

    data = r.json()

    for row in data:
        if row.get("name") == domain:
            return row.get("id")

    return None


# =====================================================
# FLOW
# =====================================================

def create_flow(domain: str, campaign_id: int, offer_id: int, callback=None):
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
        raise Exception(f"Flow error {r.status_code}: {r.text}")

    data = r.json()

    if callback:
        callback(f"✅ {domain}: flow #{data['id']}")

    return data["id"]


# =====================================================
# DOMAIN
# =====================================================

def create_domain(domain: str, campaign_id: int, callback=None):
    payload = {
        "name": domain,
        "default_campaign_id": campaign_id,
        "group_id": DOMAIN_GROUP_ID,
        "catch_not_found": False,
        "notes": "",
        "ssl_redirect": True,
        "allow_indexing": True,
        "admin_dashboard": False
    }

    r = post(f"{BASE_URL}/domains", payload)

    if r.status_code != 200:
        raise Exception(f"Domain error {r.status_code}: {r.text}")

    data = r.json()

    if isinstance(data, list):
        domain_id = data[0]["id"]
    else:
        domain_id = data["id"]

    if callback:
        callback(f"✅ {domain}: domain #{domain_id}")

    return domain_id


# =====================================================
# HTTPS CHECK
# =====================================================

def check_https(domain: str, callback=None, max_checks=60):
    url = f"https://{domain}"

    for i in range(max_checks):

        try:
            if callback:
                callback(f"🌐 {domain}: checking site...")

            r = requests.get(
                url,
                timeout=20,
                verify=False,
                allow_redirects=True
            )

            html = r.text.lower()

            code_ok = r.status_code == 200

            breadcrumb_ok = (
                "breadcrumblist" in html
                and "application/ld+json" in html
            )

            # ГОТОВО
            if code_ok and breadcrumb_ok:
                if callback:
                    callback(f"✅ {domain}: FULL READY")
                return True, True

            # сайт є, але не готовий
            if code_ok:
                if callback:
                    callback(f"🟡 {domain}: code 200, waiting breadcrumbs...")

        except Exception:
            pass

        time.sleep(30)

    if callback:
        callback(f"⚠️ {domain}: timeout")

    return False, False


# =====================================================
# CREATE FULL PROJECT
# =====================================================

def prepare_project(domain: str, zip_bytes: bytes, callback=None):

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


def finalize_project(project: dict, callback=None):
    if callback:
        callback("WAIT_SSL")
    domain = project["domain"]

    https_ok, breadcrumb_ok = check_https(domain, callback)

    project["https"] = https_ok
    project["breadcrumb"] = breadcrumb_ok

    return project


def create_full_project(domain: str, zip_bytes: bytes, callback=None):
    project = prepare_project(domain, zip_bytes, callback)
    project = finalize_project(project, callback)
    return project


# =====================================================
# MULTI PROJECTS
# =====================================================

def create_multiple_projects(domains, zip_map, callback=None, max_workers=5):

    final_results = []

    # ==========================================
    # SINGLE DOMAIN MODE
    # ==========================================
    if len(domains) == 1:
        domain = domains[0]

        try:
            if callback:
                callback(f"🚀 Single mode: {domain}")

            if domain not in zip_map:
                return [{
                    "domain": domain,
                    "error": "ZIP not found"
                }]

            result = create_full_project(
                domain,
                zip_map[domain],
                callback
            )

            return [result]

        except Exception as e:
            return [{
                "domain": domain,
                "error": str(e)
            }]

    # ==========================================
    # MULTI DOMAIN MODE
    # ==========================================
    prepared = []

    if callback:
        callback("🚀 Stage 1: creating projects...")

    with ThreadPoolExecutor(max_workers=max_workers) as executor:

        futures = {}

        for domain in domains:

            if domain not in zip_map:
                final_results.append({
                    "domain": domain,
                    "error": "ZIP not found"
                })
                continue

            futures[
                executor.submit(
                    prepare_project,
                    domain,
                    zip_map[domain],
                    callback
                )
            ] = domain

        for future in as_completed(futures):
            domain = futures[future]

            try:
                prepared.append(future.result())

            except Exception as e:
                final_results.append({
                    "domain": domain,
                    "error": str(e)
                })

    # ==========================================
    # HTTPS CHECK
    # ==========================================
    if callback:
        callback("🌐 Stage 2: waiting HTTPS...")

    with ThreadPoolExecutor(max_workers=max_workers) as executor:

        futures = {
            executor.submit(
                finalize_project,
                project,
                callback
            ): project["domain"]
            for project in prepared
        }

        for future in as_completed(futures):
            domain = futures[future]

            try:
                final_results.append(future.result())

            except Exception as e:
                final_results.append({
                    "domain": domain,
                    "error": str(e)
                })

    return final_results
