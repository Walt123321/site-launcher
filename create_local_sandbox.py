import os
import shutil
import json
from pathlib import Path

# Paths
root = Path("/Users/ripper/Documents/site-launcher-test")
local_test_dir = root / "local_test"
template_1_1 = root / "templates" / "template_1-1"
template_qoooqle = root / "templates" / "template_qoooqle"

# 1. Clean and create local_test directory
if local_test_dir.exists():
    shutil.rmtree(local_test_dir)
local_test_dir.mkdir(parents=True, exist_ok=True)

# 2. Read test data from last_local_test.json
test_data = {"brand": "Test", "lang": "pl", "domain": "test-official.com", "geo": "PL"}
test_file = template_qoooqle / "last_local_test.json"
if test_file.exists():
    with open(test_file, "r", encoding="utf-8") as f:
        test_data = json.load(f)

brand = test_data.get("brand", "Test")
lang = test_data.get("lang", "pl")
domain = test_data.get("domain", "test-official.com")
geo = test_data.get("geo", "PL")

# 3. Copy template_1-1
for item in template_1_1.rglob("*"):
    if item.is_dir() or item.name == "last_local_test.json":
        continue
    rel = item.relative_to(template_1_1)
    dest = local_test_dir / rel
    dest.parent.mkdir(parents=True, exist_ok=True)
    shutil.copy2(item, dest)

# 4. Copy template_qoooqle
# backfix.js is inlined into index.php below instead of copied as its own
# file, and backcount.php is retired entirely — both mirror build_domain_site_zip.
for item in template_qoooqle.rglob("*"):
    if item.is_dir() or item.name in ("last_local_test.json", "backfix.js", "backcount.php"):
        continue
    rel = item.relative_to(template_qoooqle)
    dest = local_test_dir / rel
    dest.parent.mkdir(parents=True, exist_ok=True)
    shutil.copy2(item, dest)

# 5. Inject backfix.js inline into index.php/index.html — not as a separate
# file, Keitaro never serves anything but the page itself on live domains.
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
        text = text.replace("{{DOMAIN}}", f"localhost:8000/local_test")
        text = text.replace("{{SITE_URL}}", f"http://localhost:8000/local_test")
        text = text.replace("{{LANG}}", lang)
        text = text.replace("{{BRAND}}", brand)
        text = text.replace("{{MIN_DEPOSIT}}", "250")
        text = text.replace("{{DEPOSIT_CURRENCY}}", "PLN" if geo == "PL" else "EUR")
        
        item.write_text(text, encoding="utf-8")

# 7. Duplicate config.php to each newsnik folder for parity with compiled zip
local_config = local_test_dir / "config.php"
if local_config.exists():
    shutil.copy2(local_config, local_test_dir / "newsnik1" / "config.php")
    shutil.copy2(local_config, local_test_dir / "newsnik2" / "config.php")
    shutil.copy2(local_config, local_test_dir / "newsnik3" / "config.php")

print(f"Local sandbox created successfully in {local_test_dir}!")
print(f"URL: http://localhost:8000/local_test/google.php?lang={lang}")
