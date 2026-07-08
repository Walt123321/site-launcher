from __future__ import annotations
import copy
import json
import re
import subprocess
from pathlib import Path
from typing import Dict

from core.lang_pipeline import (
    _get_openai_client,
    _llm_batch_transform,
    DEFAULT_MODEL,
)

# _llm_batch_transform only protects $var-style placeholders, not the
# {{TOKEN}} convention newsnik content uses (matches config.php's own
# {{LANG}}/{{BRAND}} style). Swap to a $-style stand-in before translation
# so it rides through _llm_batch_transform's own protection untouched, then
# swap back — otherwise the LLM is free to translate/mangle "BRAND" itself.
_DOUBLE_BRACE_RE = re.compile(r"\{\{([A-Z_]+)\}\}")


def _guard_double_braces(s: str) -> str:
    return _DOUBLE_BRACE_RE.sub(lambda m: f"$DBRACE_{m.group(1)}", s)


def _unguard_double_braces(s: str) -> str:
    return re.sub(r"\$DBRACE_([A-Z_]+)", lambda m: "{{" + m.group(1) + "}}", s)

NEWSNIK_IDS = [1, 2, 3]
TEMPLATE_ROOT = Path(__file__).resolve().parent.parent / "templates" / "template_qoooqle"
BASE_LANG = "en"


def _extract_base_content(newsnik_id: int) -> dict:
    """Reads newsnikN/lang.php's English $content entry as JSON, using PHP itself
    to parse its own array syntax (far more reliable than reimplementing a PHP
    array-literal parser in Python)."""
    lang_php = TEMPLATE_ROOT / f"newsnik{newsnik_id}" / "lang.php"
    # Note: `php -r` code must NOT include the <?php opening tag.
    php_code = (
        "require '" + str(lang_php.resolve()) + "'; "
        f"echo json_encode($content['{BASE_LANG}']);"
    )
    result = subprocess.run(
        ["php", "-r", php_code], capture_output=True, text=True, timeout=30
    )
    if result.returncode != 0 or not result.stdout.strip():
        raise RuntimeError(
            f"Failed to extract newsnik{newsnik_id} base content: {result.stderr}"
        )
    return json.loads(result.stdout)


def _collect_strings(node, path, out_strings, out_paths):
    if isinstance(node, dict):
        for k, v in node.items():
            _collect_strings(v, path + [k], out_strings, out_paths)
    elif isinstance(node, list):
        for i, v in enumerate(node):
            _collect_strings(v, path + [i], out_strings, out_paths)
    elif isinstance(node, str):
        out_strings.append(node)
        out_paths.append(list(path))


def _set_at_path(root, path, value):
    cur = root
    for p in path[:-1]:
        cur = cur[p]
    cur[path[-1]] = value


def _translate_content_tree(client, model: str, node: dict, target_lang: str) -> dict:
    """Translates (or, for English, lightly uniquifies) every string leaf in the
    content tree in one batched, placeholder-safe LLM call. {{BRAND}},
    {{MIN_DEPOSIT}}, {{DEPOSIT_CURRENCY}} tokens are preserved untouched — they
    still get substituted at request time by the existing PHP rendering code."""
    strings: list = []
    paths: list = []
    _collect_strings(node, [], strings, paths)

    guarded = [_guard_double_braces(s) for s in strings]
    translated = _llm_batch_transform(client, model, guarded, target_lang)
    translated = [_unguard_double_braces(s) for s in translated]

    result = copy.deepcopy(node)
    for path, value in zip(paths, translated):
        _set_at_path(result, path, value)
    return result


def generate_newsnik_content(target_lang: str, model: str = DEFAULT_MODEL) -> Dict[int, dict]:
    """Generates per-launch newsnik content (all 3 variants), translated/uniquified
    for this specific offer's target_lang. Returns {1: {...}, 2: {...}, 3: {...}}.
    Raises on failure — callers should catch and fall back to the static,
    pre-baked translations shipped in each newsnikN/lang.php.
    """
    client = _get_openai_client()
    base_lang = (target_lang or "en").split("-")[0].lower()

    result: Dict[int, dict] = {}
    for nid in NEWSNIK_IDS:
        base = _extract_base_content(nid)
        result[nid] = _translate_content_tree(client, model, base, target_lang)
    return result
