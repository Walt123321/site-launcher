import argparse
import io
import zipfile
from pathlib import Path

# Builds standalone Keitaro-ready zips for the purchased newsnik domains.
# Each newsnik folder is self-contained (own index.php + lang.php) and only
# needs config.php alongside it — deployed once, then reused by every future
# offer launch (brand/lang/register-target arrive via ?brand=&lang=&host=).

ROOT = Path(__file__).resolve().parent
TEMPLATE_ROOT = ROOT / "templates" / "template_qoooqle"

NEWSNIK_DOMAINS = {
    1: "crypto-portal.net",
    2: "currentpulse.org",
    3: "cryptonewshubb.com",
}


def build_newsnik_zip(n: int, domain: str, flat: bool) -> bytes:
    newsnik_dir = TEMPLATE_ROOT / f"newsnik{n}"
    config_file = TEMPLATE_ROOT / "config.php"

    def arcname(rel: str) -> str:
        return rel if flat else f"{domain}/{rel}"

    buf = io.BytesIO()
    with zipfile.ZipFile(buf, "w", zipfile.ZIP_DEFLATED) as z:
        z.write(config_file, arcname("config.php"))
        for item in newsnik_dir.rglob("*"):
            if item.is_dir():
                continue
            rel = item.relative_to(newsnik_dir).as_posix()
            z.write(item, arcname(rel))
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

    zips = {}
    for n, domain in NEWSNIK_DOMAINS.items():
        zip_bytes = build_newsnik_zip(n, domain, args.flat)
        out_path = output_dir / f"{domain}.zip"
        out_path.write_bytes(zip_bytes)
        zips[domain] = zip_bytes
        print(f"Built {out_path} ({len(zip_bytes)} bytes)")

    secrets_file = ROOT / ".streamlit" / "secrets.toml"
    if not secrets_file.exists():
        print(f"\nNo .streamlit/secrets.toml found — skipping live Keitaro push.")
        print(f"Zips are ready in {output_dir}/. Upload each one manually as a")
        print("Keitaro local offer bound to its domain, or rerun this script once")
        print("KEITARO_API_KEY / KEITARO_BASE_URL are configured.")
        return

    if args.flat:
        print("\n--flat zips are for manual re-upload only; skipping live push")
        print("(the API path already uses the {domain}/ prefixed structure).")
        return

    from core.keitaro import create_full_project

    for domain, zip_bytes in zips.items():
        print(f"\nDeploying {domain} to Keitaro...")
        result = create_full_project(domain, zip_bytes, callback=print)
        print(result)


if __name__ == "__main__":
    main()
