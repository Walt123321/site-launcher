import os
import shutil
import json
import sys
from pathlib import Path

# Paths
root = Path("/Users/ripper/Documents/site-launcher-test")
local_test_dir = root / "local_test"

template_name = sys.argv[1] if len(sys.argv) > 1 else "template_8"
template_src = root / "templates" / template_name
template_qoooqle = root / "templates" / "template_qoooqle"

if not template_src.exists():
    print(f"Error: Template directory not found: {template_src}")
    sys.exit(1)

# 1. Clean and create local_test directory
if local_test_dir.exists():
    shutil.rmtree(local_test_dir)
local_test_dir.mkdir(parents=True, exist_ok=True)

# 2. Read or initialize test data
test_data = {"brand": "Ciel Cryptance", "lang": "en", "domain": "localhost:8000/local_test", "geo": "GB"}
test_file = template_qoooqle / "last_local_test.json"
if test_file.exists():
    try:
        with open(test_file, "r", encoding="utf-8") as f:
            test_data = json.load(f)
    except Exception:
        pass

brand = test_data.get("brand", "Ciel Cryptance")
lang = test_data.get("lang", "en")
domain = "localhost:8000/local_test"
geo = test_data.get("geo", "GB")

# Save updated test data
with open(template_qoooqle / "last_local_test.json", "w", encoding="utf-8") as f:
    json.dump({"brand": brand, "lang": lang, "domain": domain, "geo": geo}, f, indent=2)

# 3. Copy chosen template
for item in template_src.rglob("*"):
    if item.is_dir() or item.name == "last_local_test.json":
        continue
    rel = item.relative_to(template_src)
    dest = local_test_dir / rel
    dest.parent.mkdir(parents=True, exist_ok=True)
    shutil.copy2(item, dest)

# 4. Copy template_qoooqle
for item in template_qoooqle.rglob("*"):
    if item.is_dir() or item.name in ("last_local_test.json", "backfix.js", "backcount.php"):
        continue
    rel = item.relative_to(template_qoooqle)
    dest = local_test_dir / rel
    dest.parent.mkdir(parents=True, exist_ok=True)
    shutil.copy2(item, dest)

# 5. Inject backfix.js inline into index.php
index_file = local_test_dir / "index.php"
backfix_js_src = template_qoooqle / "backfix.js"
if index_file.exists() and backfix_js_src.exists():
    text = index_file.read_text(encoding="utf-8", errors="replace")
    inline_script = f"<script>\n{backfix_js_src.read_text(encoding='utf-8')}\n</script>"
    if "</body>" in text:
        text = text.replace("</body>", f'{inline_script}\n</body>')
    elif "</BODY>" in text:
        text = text.replace("</BODY>", f'{inline_script}\n</BODY>')
    else:
        text += f'\n{inline_script}'
    index_file.write_text(text, encoding="utf-8")

# 6. Replace placeholders in all text files
TEXT_EXTS = {".php", ".html", ".js", ".css", ".txt", ".xml", ".json"}
for item in local_test_dir.rglob("*"):
    if item.is_file() and item.suffix.lower() in TEXT_EXTS:
        text = item.read_text(encoding="utf-8", errors="replace")
        
        # Replace template placeholders
        text = text.replace("{{DOMAIN}}", "localhost:8000/local_test")
        text = text.replace("{{SITE_URL}}", "http://localhost:8000/local_test")
        text = text.replace("{{LANG}}", lang)
        text = text.replace("{{BRAND}}", brand)
        text = text.replace("{{MIN_DEPOSIT}}", "250")
        text = text.replace("{{DEPOSIT_CURRENCY}}", "PLN" if geo == "PL" else "EUR")
        text = text.replace("{{COUNTRY}}", geo)
        text = text.replace("{{PHONE_COUNTRY}}", geo)
        text = text.replace("{{ONLY_COUNTRIES}}", geo)
        
        item.write_text(text, encoding="utf-8")

# 7. In lang.php set realistic site_name + Keitaro form integration vars
#    (template_8's lang.php ships these as plain "gb"/"en"/"[]" fallback
#    defaults, not {{TOKEN}} placeholders -- the real pipeline overwrites
#    them per-launch via _set_php_var(); mirror that here for local testing)
lang_file = local_test_dir / "lang.php"
if lang_file.exists():
    geo_lower = geo.lower()
    lang_short = lang.split("-")[0].lower()
    lt = lang_file.read_text(encoding="utf-8", errors="replace")
    lt = lt.replace('$site_name = "Test";', f'$site_name = "{brand}";')
    lt = lt.replace('$site_domain = "{{DOMAIN}}";', '$site_domain = "localhost:8000/local_test";')
    lt = lt.replace('$site_url = "https://$site_domain";', '$site_url = "http://localhost:8000/local_test";')
    lt = lt.replace('$form_country = "gb";', f'$form_country = "{geo_lower}";')
    lt = lt.replace('$form_language = "en";', f'$form_language = "{lang_short}";')
    lt = lt.replace('$form_phone_country = "gb";', f'$form_phone_country = "{geo_lower}";')
    lt = lt.replace('$form_only_countries = "[]";', f'$form_only_countries = \'{json.dumps([geo_lower])}\';')
    lang_file.write_text(lt, encoding="utf-8")

# 8. Duplicate config.php to each newsnik folder for parity with compiled zip
local_config = local_test_dir / "config.php"
if local_config.exists():
    shutil.copy2(local_config, local_test_dir / "newsnik1" / "config.php")
    shutil.copy2(local_config, local_test_dir / "newsnik2" / "config.php")
    shutil.copy2(local_config, local_test_dir / "newsnik3" / "config.php")

# Copy last_local_test.json to local_test_dir
with open(local_test_dir / "last_local_test.json", "w", encoding="utf-8") as f:
    json.dump({"brand": brand, "lang": lang, "domain": domain, "geo": geo}, f, indent=2)

print(f"Local sandbox ({template_name}) created successfully in {local_test_dir}!")
print(f"-> Landing Page: http://localhost:8000/local_test/index.php")
print(f"-> Google SERP:   http://localhost:8000/local_test/google.php?lang={lang}")

