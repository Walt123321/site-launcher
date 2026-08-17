import argparse
import io
import zipfile
from pathlib import Path

# Builds flat, ready-to-upload zips of the 5 main site templates (as they
# currently sit on disk, placeholders and all — this is NOT a per-domain
# launch build like app.py's build_domain_site_zip(), just a portable
# snapshot of each template's raw source). Mirrors deploy_newsniks.py's
# --flat convention: files sit at the archive root, no wrapper folder,
# so a zip can be extracted directly wherever it's needed.

ROOT = Path(__file__).resolve().parent
TEMPLATES_ROOT = ROOT / "templates"

MAIN_TEMPLATES = {
    "template_1": "template_1-1",
    "template_3": "template_3",
    "template_4": "template_4",
    "template_5": "template_5",
    "template_6": "template_6",
}

# qoooqle.com is NOT a per-launch source template like the five above -- it's
# a single, standalone Keitaro "local_file" offer with a fixed real-world
# domain name already baked into that offer's own config
# (action_options.folder == "qoooqle.com", confirmed via the admin API).
# Keitaro expects the archive's files to sit INSIDE a "qoooqle.com/" folder,
# not at the archive root -- the generic --flat convention below (root, no
# wrapper) silently produced a zip Keitaro couldn't find google.php in,
# which is exactly what caused a live 500 on 2026-08-17/18. Always wrap this
# one with its real domain name, regardless of --flat.
QOOOQLE_DIR = "template_qoooqle"
QOOOQLE_DOMAIN = "qoooqle.com"


def build_template_zip(dir_name: str, flat: bool) -> bytes:
    template_dir = TEMPLATES_ROOT / dir_name

    def arcname(rel: str) -> str:
        return rel if flat else f"{dir_name}/{rel}"

    buf = io.BytesIO()
    with zipfile.ZipFile(buf, "w", zipfile.ZIP_DEFLATED) as z:
        for item in template_dir.rglob("*"):
            if item.is_dir():
                continue
            rel = item.relative_to(template_dir).as_posix()
            z.write(item, arcname(rel))
    buf.seek(0)
    return buf.getvalue()


def build_qoooqle_zip() -> bytes:
    template_dir = TEMPLATES_ROOT / QOOOQLE_DIR

    buf = io.BytesIO()
    with zipfile.ZipFile(buf, "w", zipfile.ZIP_DEFLATED) as z:
        for item in template_dir.rglob("*"):
            if item.is_dir():
                continue
            rel = item.relative_to(template_dir).as_posix()
            z.write(item, f"{QOOOQLE_DOMAIN}/{rel}")
    buf.seek(0)
    return buf.getvalue()


def main():
    parser = argparse.ArgumentParser()
    parser.add_argument(
        "--flat",
        action="store_true",
        help="Zip files at the archive root (no {template}/ wrapper folder).",
    )
    args = parser.parse_args()

    output_dir = ROOT / ("templates_deploy_flat" if args.flat else "templates_deploy")
    output_dir.mkdir(exist_ok=True)

    for key, dir_name in MAIN_TEMPLATES.items():
        zip_bytes = build_template_zip(dir_name, args.flat)
        out_path = output_dir / f"{dir_name}.zip"
        out_path.write_bytes(zip_bytes)
        print(f"Built {out_path} ({len(zip_bytes)} bytes)")

    # Always wrapped in a "qoooqle.com/" folder regardless of --flat -- see
    # the comment on QOOOQLE_DIR/QOOOQLE_DOMAIN above for why this one can't
    # use the generic flat convention.
    qoooqle_bytes = build_qoooqle_zip()
    qoooqle_path = output_dir / f"{QOOOQLE_DOMAIN}.zip"
    qoooqle_path.write_bytes(qoooqle_bytes)
    print(f"Built {qoooqle_path} ({len(qoooqle_bytes)} bytes, wrapped in {QOOOQLE_DOMAIN}/)")

    print(f"\nZips are ready in {output_dir}/.")


if __name__ == "__main__":
    main()
