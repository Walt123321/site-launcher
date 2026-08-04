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

    print(f"\nZips are ready in {output_dir}/.")


if __name__ == "__main__":
    main()
