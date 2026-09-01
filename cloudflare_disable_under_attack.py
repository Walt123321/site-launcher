#!/usr/bin/env python3
"""
cloudflare_disable_under_attack.py
-----------------------------------
Проходит по списку Cloudflare API-ключей и выключает режим
"Under Attack" (I'm Under Attack) на всех зонах каждого аккаунта.

Использование:
  1. Заполни API_KEYS ниже (или передай через файл keys.txt)
  2. python3 cloudflare_disable_under_attack.py
     или
     python3 cloudflare_disable_under_attack.py --keys-file keys.txt

Формат keys.txt (одна запись на строку):
  EMAIL:GLOBAL_API_KEY
  или
  token:API_TOKEN

Типы ключей:
  - Global API Key: "user@example.com:глобальный_ключ"
  - API Token:      "token:ваш_токен"
"""

import argparse
import sys
import time
import warnings
warnings.filterwarnings("ignore")

import requests

# ─────────────────────────────────────────────────────────────
# Вписывай сюда свои ключи:
#   "email:global_api_key"
#   "token:api_token"
# ─────────────────────────────────────────────────────────────
API_KEYS = [
    # "user@example.com:abc123globalkey",
    # "token:abc123apitoken",
]

BASE_URL = "https://api.cloudflare.com/client/v4"


def make_headers(key_entry: str) -> dict:
    if key_entry.startswith("token:"):
        token = key_entry[len("token:"):]
        return {"Authorization": f"Bearer {token}", "Content-Type": "application/json"}
    elif ":" in key_entry:
        email, api_key = key_entry.split(":", 1)
        return {"X-Auth-Email": email, "X-Auth-Key": api_key, "Content-Type": "application/json"}
    else:
        return {"Authorization": f"Bearer {key_entry}", "Content-Type": "application/json"}


def get_zones(headers: dict) -> list:
    zones = []
    page = 1
    while True:
        resp = requests.get(
            f"{BASE_URL}/zones",
            headers=headers,
            params={"per_page": 50, "page": page},
            timeout=15,
        )
        data = resp.json()
        if not data.get("success"):
            raise RuntimeError(f"Ошибка получения зон: {data.get('errors', [])}")
        zones.extend(data["result"])
        info = data.get("result_info", {})
        if page >= info.get("total_pages", 1):
            break
        page += 1
    return zones


def get_security_level(zone_id: str, headers: dict) -> str:
    resp = requests.get(
        f"{BASE_URL}/zones/{zone_id}/settings/security_level",
        headers=headers,
        timeout=15,
    )
    data = resp.json()
    if data.get("success"):
        return data["result"]["value"]
    return "unknown"


def set_security_level(zone_id: str, level: str, headers: dict) -> bool:
    resp = requests.patch(
        f"{BASE_URL}/zones/{zone_id}/settings/security_level",
        headers=headers,
        json={"value": level},
        timeout=15,
    )
    data = resp.json()
    return data.get("success", False)


def process_key(key_entry: str, target_level: str = "medium"):
    label = key_entry[:35] + "..." if len(key_entry) > 35 else key_entry
    print(f"\n{'='*60}")
    print(f"KEY: {label}")
    print(f"{'='*60}")

    try:
        headers = make_headers(key_entry)
        zones = get_zones(headers)
        print(f"Зоны найдены: {len(zones)}")
    except Exception as e:
        print(f"ОШИБКА доступа к API: {e}")
        return {"changed": 0, "skipped": 0, "errors": 1}

    changed = 0
    skipped = 0
    errors = 0

    for zone in zones:
        zone_id = zone["id"]
        domain = zone["name"]
        status = zone.get("status", "?")

        try:
            current_level = get_security_level(zone_id, headers)
        except Exception as e:
            print(f"  WARN  {domain}: не удалось получить level — {e}")
            errors += 1
            continue

        if current_level == "under_attack":
            print(f"  [UNDER_ATTACK] {domain} [{status}] → {target_level}... ", end="", flush=True)
            try:
                ok = set_security_level(zone_id, target_level, headers)
                if ok:
                    print("OK — ВЫКЛЮЧЕНО")
                    changed += 1
                else:
                    print("FAIL")
                    errors += 1
            except Exception as e:
                print(f"ERROR: {e}")
                errors += 1
            time.sleep(0.3)
        else:
            print(f"  [OK]           {domain} [{status}]: {current_level}")
            skipped += 1

    print(f"\n  Изменено: {changed} | Уже ок: {skipped} | Ошибки: {errors}")
    return {"changed": changed, "skipped": skipped, "errors": errors}


def main():
    parser = argparse.ArgumentParser(description="Disable Cloudflare Under Attack mode")
    parser.add_argument("--keys-file", metavar="FILE", help="Файл с API-ключами (одна строка = один ключ)")
    parser.add_argument("--level", default="medium",
                        choices=["essentially_off", "low", "medium", "high"],
                        help="Целевой уровень защиты (default: medium)")
    args = parser.parse_args()

    keys = list(API_KEYS)

    if args.keys_file:
        try:
            with open(args.keys_file, "r", encoding="utf-8") as f:
                for line in f:
                    line = line.strip()
                    if line and not line.startswith("#"):
                        keys.append(line)
        except FileNotFoundError:
            print(f"Файл не найден: {args.keys_file}")
            sys.exit(1)

    if not keys:
        print("Нет ключей! Добавь их в API_KEYS[] или передай --keys-file keys.txt")
        print()
        print("Формат keys.txt:")
        print("  user@example.com:global_api_key")
        print("  token:api_token_here")
        sys.exit(1)

    print(f"Запуск: {len(keys)} ключ(ей), целевой уровень: {args.level}")

    total_changed = 0
    total_errors = 0

    for key in keys:
        result = process_key(key.strip(), target_level=args.level)
        if result:
            total_changed += result["changed"]
            total_errors += result["errors"]

    print(f"\n{'='*60}")
    print(f"ГОТОВО: изменено {total_changed} зон, ошибок {total_errors}")
    print(f"{'='*60}")


if __name__ == "__main__":
    main()
