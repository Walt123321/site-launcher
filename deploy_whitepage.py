import argparse
import io
import zipfile
from datetime import datetime
from pathlib import Path

# Builds a ready-to-upload white-page zip for one domain, to use as the
# "Local files" content source on the new white-page Keitaro stream (see
# the Adspect/Keitaro pilot setup). Unlike deploy_templates.py (raw
# template source, placeholders untouched, meant as a portable snapshot),
# this substitutes real {{DOMAIN}}/{{SITE_URL}}/{{LANG}}/{{LASTMOD}}
# values and writes files at the archive root (flat) -- that's what a
# Keitaro stream expects as its content root (index.php at the top).

ROOT = Path(__file__).resolve().parent
TEMPLATE_DIR = ROOT / "templates" / "template_whitepage"
OUTPUT_DIR = ROOT / "whitepage_deploy"

TEXT_EXTS = {".txt", ".xml", ".html", ".htm", ".php", ".css", ".js", ".json", ".md"}


def render_placeholders(text: str, domain: str, target_lang: str) -> str:
    lastmod = datetime.now().strftime("%Y-%m-%d")
    return (
        text.replace("{{DOMAIN}}", domain)
            .replace("{{SITE_URL}}", f"https://{domain}")
            .replace("{{LANG}}", target_lang)
            .replace("{{LASTMOD}}", lastmod)
    )


def build_whitepage_zip(domain: str, target_lang: str) -> bytes:
    buf = io.BytesIO()
    with zipfile.ZipFile(buf, "w", zipfile.ZIP_DEFLATED) as z:
        for item in TEMPLATE_DIR.rglob("*"):
            if item.is_dir():
                continue
            rel = item.relative_to(TEMPLATE_DIR).as_posix()
            raw_bytes = item.read_bytes()

            if item.suffix.lower() in TEXT_EXTS:
                raw_text = raw_bytes.decode("utf-8", errors="replace")
                out_bytes = render_placeholders(raw_text, domain, target_lang).encode("utf-8")
            else:
                out_bytes = raw_bytes

            z.writestr(rel, out_bytes)
    buf.seek(0)
    return buf.getvalue()


def main():
    parser = argparse.ArgumentParser(description="Build a ready-to-upload white-page zip for one domain.")
    parser.add_argument("--domain", required=True, help="Target domain, e.g. example-corp.com")
    parser.add_argument("--lang", default="en", help="Language code for html lang= / {{LANG}} (default: en)")
    args = parser.parse_args()

    OUTPUT_DIR.mkdir(exist_ok=True)
    zip_bytes = build_whitepage_zip(args.domain, args.lang)
    out_path = OUTPUT_DIR / f"whitepage_{args.domain}.zip"
    out_path.write_bytes(zip_bytes)

    print(f"Built {out_path} ({len(zip_bytes)} bytes)")
    print("Upload this zip as the 'Local files' content source on the white-page stream in Keitaro.")


if __name__ == "__main__":
    main()
