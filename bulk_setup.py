#!/usr/bin/env python3
"""
Массовый rollout Adspect+Keitaro-фильтра на все существующие кампании
(офферы) в Keitaro — по образцу пилота (rontrix.org), настроенного и
подтверждённого руками.

Схема (Keitaro-фильтр, НЕ прямая/обратная PHP-интеграция):
  1. Собрать белую страницу под конкретный домен (как deploy_whitepage.py)
     и залить как отдельный "Local" Offer в Keitaro.
  2. Клонировать Adspect-поток (COPY от шаблонного) под этот оффер.
  3. Создать новый Flow в кампании: контент -> оффер из шага 1, фильтр
     "adspect" -> ID потока из шага 2, позиция -> выше существующего
     money-flow.

Список кампаний берётся напрямую из Keitaro (GET /campaigns), без CSV.
Структура нового Flow (schema/action_type/offers-формат) читается с
ПИЛОТНОЙ кампании через API — не угадывается, копируется с уже рабочего
примера.

ВАЖНО: положи этот файл в корень проекта site-launcher-test, рядом с
deploy_whitepage.py (он импортируется напрямую) — и запускай оттуда.

ПЕРЕД ЗАПУСКОМ:
  ADSPECT_API_KEY, ADSPECT_TEMPLATE_STREAM_ID   (Basic auth, см. доку Adspect)
  KEITARO_API_KEY, KEITARO_BASE_URL             (https://ваш-домен/admin_api/v1)
  PILOT_CAMPAIGN_ID                             (campaign_id кампании rontrix.org)
  ADSPECT_FILTER_NAME                           (имя фильтра из GET /stream_filters
                                                   Keitaro — обычно "adspect")
  BUYER_GROUP_ID                                (опционально: обрабатывать только
                                                   кампании из этой группы Keitaro)

Запуск (из корня проекта):
  python3 bulk_setup.py --dry-run       # список кампаний-кандидатов, без изменений
  python3 bulk_setup.py --limit 5        # реальный прогон на первых 5
  python3 bulk_setup.py                  # весь список, с resume по results.csv
"""

import argparse
import base64
import copy
import csv
import os
import sys
import time
import json
import ssl
import urllib.request
import urllib.error

# Keitaro на этом хостинге сидит на self-signed сертификате (тот же случай,
# что в AdspectFilter.php/старом s030qb.php — там verify тоже отключён).
# Ограничиваем обход только запросами к KEITARO_BASE_URL, не глобально.
_INSECURE_SSL_CONTEXT = ssl.create_default_context()
_INSECURE_SSL_CONTEXT.check_hostname = False
_INSECURE_SSL_CONTEXT.verify_mode = ssl.CERT_NONE

# Переиспользуем deploy_whitepage.py напрямую (должен лежать рядом, в корне
# проекта) — не дублируем логику сборки zip.
try:
    from deploy_whitepage import build_whitepage_zip
except ImportError:
    build_whitepage_zip = None  # проверим и явно упадём в main(), если не найдётся

ADSPECT_API_KEY = os.environ.get("ADSPECT_API_KEY", "")
ADSPECT_BASE = "https://api.adspect.net/v1"
ADSPECT_TEMPLATE_STREAM_ID = os.environ.get("ADSPECT_TEMPLATE_STREAM_ID", "")

KEITARO_API_KEY = os.environ.get("KEITARO_API_KEY", "")
KEITARO_BASE = os.environ.get("KEITARO_BASE_URL", "").rstrip("/")
PILOT_CAMPAIGN_ID = os.environ.get("PILOT_CAMPAIGN_ID", "")
ADSPECT_FILTER_NAME = os.environ.get("ADSPECT_FILTER_NAME", "adspect")
BUYER_GROUP_ID = os.environ.get("BUYER_GROUP_ID", "")

RESULTS_FILE = "results.csv"
RATE_LIMIT_SLEEP = 0.3

# Whitelist/blacklist-генерация для Adspect-потоков отключена (см. предыдущую
# сессию) — раскомментировать/включить, когда будет готов источник данных
# под индивидуальные списки на оффер.
APPLY_WHITELIST_BLACKLIST = False


def http(method, url, headers, body=None, retries=3):
    data = json.dumps(body).encode() if body is not None else None
    req = urllib.request.Request(url, data=data, method=method, headers=headers)
    ssl_context = _INSECURE_SSL_CONTEXT if url.startswith(KEITARO_BASE) else None
    for attempt in range(retries):
        try:
            with urllib.request.urlopen(req, timeout=60, context=ssl_context) as resp:
                raw = resp.read()
                return resp.status, (json.loads(raw) if raw else {})
        except urllib.error.HTTPError as e:
            if e.code == 429 and attempt < retries - 1:
                time.sleep(2 ** attempt)
                continue
            raw = e.read()
            return e.code, (json.loads(raw) if raw else {})
        except urllib.error.URLError:
            if attempt < retries - 1:
                time.sleep(2 ** attempt)
                continue
            raise
    raise RuntimeError("unreachable")


def adspect_headers():
    auth = base64.b64encode(f"{ADSPECT_API_KEY}:".encode()).decode()
    return {"Authorization": f"Basic {auth}", "Content-Type": "application/json"}


def keitaro_headers():
    return {"Api-Key": KEITARO_API_KEY, "Content-Type": "application/json"}


# =====================================================
# KEITARO: campaigns / streams / offers
# =====================================================

def list_campaigns(max_fetch=None):
    """GET /campaigns с пагинацией. Возвращает список {id, name, alias, group_id}.
    max_fetch: остановиться, как только набрано столько кампаний (после
    фильтра по BUYER_GROUP_ID) — чтобы --limit не тянул все 1800+ штук
    только для того, чтобы обрезать их потом."""
    campaigns = []
    page = 1
    per_page = min(100, max_fetch) if max_fetch else 100
    while True:
        status, body = http(
            "GET",
            f"{KEITARO_BASE}/campaigns?page={page}&per-page={per_page}",
            keitaro_headers(),
        )
        if status != 200:
            raise RuntimeError(f"GET /campaigns failed: {status} {body}")
        rows = body if isinstance(body, list) else body.get("items", body)
        if not rows:
            break
        raw_count = len(rows)
        if BUYER_GROUP_ID:
            rows = [c for c in rows if str(c.get("group_id")) == str(BUYER_GROUP_ID)]
        campaigns.extend(rows)
        if max_fetch and len(campaigns) >= max_fetch:
            return campaigns[:max_fetch]
        if raw_count < per_page:
            break
        page += 1
    return campaigns


def get_campaign_streams(campaign_id):
    status, body = http(
        "GET", f"{KEITARO_BASE}/campaigns/{campaign_id}/streams", keitaro_headers()
    )
    if status != 200:
        raise RuntimeError(f"GET /campaigns/{campaign_id}/streams failed: {status} {body}")
    return body


def find_white_flow_template(streams):
    for s in streams:
        for f in s.get("filters") or []:
            if f.get("name") == ADSPECT_FILTER_NAME:
                return s
    return None


def find_money_flow(streams, template_white_flow_id=None):
    for s in streams:
        if template_white_flow_id and s.get("id") == template_white_flow_id:
            continue
        has_adspect = any(
            f.get("name") == ADSPECT_FILTER_NAME for f in (s.get("filters") or [])
        )
        if not has_adspect:
            return s
    return None


def find_offer_by_name(name):
    status, body = http("GET", f"{KEITARO_BASE}/offers?per-page=100", keitaro_headers())
    if status != 200:
        return None
    rows = body if isinstance(body, list) else body.get("items", body)
    for row in rows or []:
        if row.get("name") == name:
            return row["id"]
    return None


def create_whitepage_offer(domain, group_id, callback=None):
    if build_whitepage_zip is None:
        raise RuntimeError("Не найден deploy_whitepage.build_whitepage_zip — проверь путь импорта")

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
    status, body = http("POST", f"{KEITARO_BASE}/offers", keitaro_headers(), payload)
    if status == 200:
        oid = body["id"]
        if callback:
            callback(f"  whitepage-offer #{oid} создан")
        return oid

    if status == 422:
        existing = find_offer_by_name(offer_name)
        if existing:
            http("PUT", f"{KEITARO_BASE}/offers/{existing}", keitaro_headers(),
                 {"archive": archive_b64})
            if callback:
                callback(f"  whitepage-offer #{existing} обновлён")
            return existing

    raise RuntimeError(f"whitepage offer error {status}: {body}")


# =====================================================
# ADSPECT: клонирование потока
# =====================================================

def create_adspect_stream(offer_name, filter_level=""):
    status, body = http(
        "COPY",
        f"{ADSPECT_BASE}/streams/{ADSPECT_TEMPLATE_STREAM_ID}",
        adspect_headers(),
        {"name": f"AS - {offer_name}"},
    )
    if status not in (200, 201):
        raise RuntimeError(f"adspect copy failed: {status} {body}")
    stream_id = body["stream_id"]

    if filter_level:
        status, body = http(
            "PATCH", f"{ADSPECT_BASE}/streams/{stream_id}", adspect_headers(),
            {"filter_level": filter_level},
        )
        if status not in (200, 201):
            raise RuntimeError(f"adspect patch filter_level failed: {status} {body}")

    return stream_id


# =====================================================
# KEITARO: создание white-flow по шаблону пилота
# =====================================================

def bump_flow_position(flow_id, new_position):
    """Обновляет позицию существующего flow (используем, чтобы освободить
    место под новый white-flow — см. комментарий в create_white_flow).
    Keitaro /streams/<id> поддерживает GET/PUT/DELETE, PATCH там нет
    (в отличие от Adspect API) -- отсюда именно PUT."""
    status, body = http(
        "PUT", f"{KEITARO_BASE}/streams/{flow_id}", keitaro_headers(),
        {"position": new_position},
    )
    if status not in (200, 201):
        raise RuntimeError(f"failed to bump flow {flow_id} to position {new_position}: {status} {body}")


def create_white_flow(template_flow, campaign_id, domain, adspect_stream_id, whitepage_offer_id, money_flow):
    # На пилоте (rontrix.org) white-flow реально стоит НИЖЕ по числу, чем
    # money (white=1, money=2) -- то есть "выше" в списке = меньший номер,
    # но место под него нужно освободить, а не просто вычесть 1 (позиция
    # 0 у Keitaro визуально не встаёт наверх). Поэтому: money-flow сдвигаем
    # на +1, а white-flow ставим на его СТАРУЮ позицию.
    old_money_position = money_flow.get("position", 1)
    bump_flow_position(money_flow["id"], old_money_position + 1)

    payload = copy.deepcopy(template_flow)
    for key in ("id", "created_at", "updated_at", "hash", "state"):
        payload.pop(key, None)

    payload["campaign_id"] = int(campaign_id)
    payload["name"] = f"White page - {domain}"
    payload["position"] = old_money_position
    # "Forced" -- срабатывает детерминированно при совпадении фильтра, без
    # веса/ротации среди Regular-потоков (money-flow в Keitaro тоже forced).
    # Шаблон с пилота почему-то был "regular" -- переопределяем явно.
    payload["type"] = "forced"

    found_filter = False
    for f in payload.get("filters") or []:
        if f.get("name") == ADSPECT_FILTER_NAME:
            f["payload"] = str(adspect_stream_id)
            f.pop("id", None)
            found_filter = True
    if not found_filter:
        raise RuntimeError("adspect filter not found in cloned template payload")

    found_offer = False
    for o in payload.get("offers") or []:
        o["offer_id"] = whitepage_offer_id
        o.pop("id", None)
        found_offer = True
    if not found_offer:
        payload["offers"] = [{"offer_id": whitepage_offer_id, "share": 100, "state": "active"}]

    status, body = http("POST", f"{KEITARO_BASE}/streams", keitaro_headers(), payload)
    if status not in (200, 201):
        raise RuntimeError(f"keitaro white-flow create failed: {status} {body}")
    return body["id"]


# =====================================================
# MAIN
# =====================================================

def load_done_campaigns():
    if not os.path.exists(RESULTS_FILE):
        return set()
    done = set()
    with open(RESULTS_FILE, newline="", encoding="utf-8") as f:
        for row in csv.DictReader(f):
            if row.get("status") == "ok":
                done.add(str(row["campaign_id"]))
    return done


def main():
    ap = argparse.ArgumentParser()
    ap.add_argument("--dry-run", action="store_true")
    ap.add_argument("--limit", type=int, default=None)
    args = ap.parse_args()

    missing = [
        name for name, val in [
            ("ADSPECT_API_KEY", ADSPECT_API_KEY),
            ("ADSPECT_TEMPLATE_STREAM_ID", ADSPECT_TEMPLATE_STREAM_ID),
            ("KEITARO_API_KEY", KEITARO_API_KEY),
            ("KEITARO_BASE_URL", KEITARO_BASE),
            ("PILOT_CAMPAIGN_ID", PILOT_CAMPAIGN_ID),
        ] if not val
    ]
    if missing:
        sys.exit(f"Не заданы переменные окружения: {', '.join(missing)}")
    if build_whitepage_zip is None:
        sys.exit("Не найден deploy_whitepage.py рядом со скриптом сайт-лаунчера")

    print("Читаю шаблон white-flow с пилотной кампании...")
    pilot_streams = get_campaign_streams(PILOT_CAMPAIGN_ID)
    template_flow = find_white_flow_template(pilot_streams)
    if not template_flow:
        sys.exit(
            f"На пилотной кампании {PILOT_CAMPAIGN_ID} не найден поток с фильтром "
            f"'{ADSPECT_FILTER_NAME}'. Сначала настрой пилот руками (уже сделано на "
            f"rontrix.org — проверь, что PILOT_CAMPAIGN_ID указывает именно на неё)."
        )
    print(f"Шаблон найден: schema={template_flow.get('schema')} "
          f"action_type={template_flow.get('action_type')} "
          f"offers={template_flow.get('offers')}")

    done = load_done_campaigns()

    print("Получаю список кампаний из Keitaro...")
    # Запас сверх --limit: +1 на пилот и +len(done) на уже обработанные --
    # оба потом отфильтруются, но должны быть учтены в запасе, иначе
    # --limit N после resume может недобрать N новых кампаний.
    fetch_cap = (args.limit + 1 + len(done)) if args.limit else None
    campaigns = list_campaigns(max_fetch=fetch_cap)
    campaigns = [c for c in campaigns if str(c["id"]) != str(PILOT_CAMPAIGN_ID)]
    campaigns = [c for c in campaigns if str(c["id"]) not in done]
    if args.limit:
        campaigns = campaigns[: args.limit]
    print(f"Найдено кампаний-кандидатов: {len(campaigns)}"
          + (f" (группа {BUYER_GROUP_ID})" if BUYER_GROUP_ID else ""))

    write_header = not os.path.exists(RESULTS_FILE)

    with open(RESULTS_FILE, "a", newline="", encoding="utf-8") as fout:
        writer = csv.writer(fout)
        if write_header:
            writer.writerow(["campaign_id", "domain", "whitepage_offer_id",
                              "adspect_stream_id", "white_flow_id", "status", "error"])

        for i, camp in enumerate(campaigns, 1):
            cid = str(camp["id"])
            # "name" -- реальный домен с точкой (souverainnoyavex.com),
            # "alias" -- служебный слаг с дефисом (souverainnoyavex-com),
            # не резолвится в DNS. Раньше было перепутано местами.
            domain = camp.get("name") or camp.get("alias")

            if cid in done:
                print(f"[{i}/{len(campaigns)}] campaign {cid} ({domain}) уже сделан, пропуск")
                continue

            print(f"[{i}/{len(campaigns)}] campaign {cid} ({domain})")

            if args.dry_run:
                print("  dry-run: пропускаю реальные вызовы API")
                continue

            try:
                streams = get_campaign_streams(cid)
                if find_white_flow_template(streams):
                    print("  уже есть white-flow с adspect-фильтром, пропуск")
                    writer.writerow([cid, domain, "", "", "", "skipped_already_done", ""])
                    fout.flush()
                    continue

                money_flow = find_money_flow(streams)
                if not money_flow:
                    raise RuntimeError("не найден money-flow (без adspect-фильтра) для расчёта позиции")

                wp_offer_id = create_whitepage_offer(domain, camp.get("group_id"))
                time.sleep(RATE_LIMIT_SLEEP)

                adspect_id = create_adspect_stream(domain)
                time.sleep(RATE_LIMIT_SLEEP)

                flow_id = create_white_flow(
                    template_flow, cid, domain, adspect_id, wp_offer_id, money_flow
                )

                writer.writerow([cid, domain, wp_offer_id, adspect_id, flow_id, "ok", ""])
                print(f"  OK: whitepage-offer={wp_offer_id} adspect-stream={adspect_id} flow={flow_id}")

            except Exception as e:
                writer.writerow([cid, domain, "", "", "", "error", str(e)])
                print(f"  ОШИБКА: {e}")

            fout.flush()
            time.sleep(RATE_LIMIT_SLEEP)


if __name__ == "__main__":
    main()
