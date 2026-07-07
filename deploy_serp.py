import argparse
import io
import zipfile
from pathlib import Path

# Builds a standalone Keitaro-ready zip for the shared google.php SERP
# simulator, hosted once on its own domain (qoooqle.com) and reused by every
# future offer launch — brand/host/lang/geo/register_path/about_path all
# arrive via query params (see backfix.js), same pattern as the newsnik pages.

ROOT = Path(__file__).resolve().parent
TEMPLATE_ROOT = ROOT / "templates" / "template_qoooqle"

SERP_DOMAIN = "qoooqle.com"
SERP_FILES = [
    "google.php",
    "config.php",
    "translations.php",
    "random-ratings.js",
    "favicon-fetcher.js",
    "style.css",
]


def build_serp_zip(flat: bool) -> bytes:
    def arcname(rel: str) -> str:
        return rel if flat else f"{SERP_DOMAIN}/{rel}"

    buf = io.BytesIO()
    with zipfile.ZipFile(buf, "w", zipfile.ZIP_DEFLATED) as z:
        for name in SERP_FILES:
            src = TEMPLATE_ROOT / name
            if not src.exists():
                print(f"  (skipping {name} — not found)")
                continue
            z.write(src, arcname(name))
    buf.seek(0)
    return buf.getvalue()


def main():
    parser = argparse.ArgumentParser()
    parser.add_argument(
        "--flat",
        action="store_true",
        help="Zip files at the archive root (no {domain}/ wrapper folder). "
             "Try this if the {domain}/ prefixed archive 404s after manual "
             "upload through the Keitaro admin UI.",
    )
    args = parser.parse_args()

    output_dir = ROOT / ("newsnik_deploy_flat" if args.flat else "newsnik_deploy")
    output_dir.mkdir(exist_ok=True)

    zip_bytes = build_serp_zip(args.flat)
    out_path = output_dir / f"{SERP_DOMAIN}.zip"
    out_path.write_bytes(zip_bytes)
    print(f"Built {out_path} ({len(zip_bytes)} bytes)")

    secrets_file = ROOT / ".streamlit" / "secrets.toml"
    if not secrets_file.exists():
        print(f"\nNo .streamlit/secrets.toml found — skipping live Keitaro push.")
        print(f"Zip is ready in {output_dir}/. Upload it manually as a Keitaro")
        print("local offer bound to its domain, or rerun this script once")
        print("KEITARO_API_KEY / KEITARO_BASE_URL are configured.")
        return

    if args.flat:
        print("\n--flat zip is for manual re-upload only; skipping live push")
        print("(the API path already uses the {domain}/ prefixed structure).")
        return

    from core.keitaro import create_full_project

    print(f"\nDeploying {SERP_DOMAIN} to Keitaro...")
    result = create_full_project(SERP_DOMAIN, zip_bytes, callback=print)
    print(result)


if __name__ == "__main__":
    main()
