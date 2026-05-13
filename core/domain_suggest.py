from __future__ import annotations
from typing import List, Optional, Tuple
import re

from core.translit import slugify_brand


def _split_brand_words(brand: str) -> List[str]:
    brand = (brand or "").strip()
    if not brand:
        return []

    # якщо CapvexOne => Capvex + One
    parts = re.findall(r"[A-Z]?[a-z]+|[A-Z]+(?![a-z])|\d+", brand)
    if len(parts) >= 2 and "".join(parts).lower() == brand.lower():
        return [p.lower() for p in parts]

    # якщо є пробіли/дефіси
    brand2 = re.sub(r"[\s_]+", " ", brand)
    raw = re.split(r"[\s\-]+", brand2)
    raw = [r for r in raw if r]
    if len(raw) >= 2:
        return [r.lower() for r in raw]

    return [brand.lower()]


def _forms(words: List[str]) -> Tuple[str, str]:
    if not words:
        return "", ""
    if len(words) == 1:
        w = words[0]
        return w, w
    return "".join(words), "-".join(words)


def generate_domain_candidates(brand: str, ccTLD: Optional[str]) -> List[str]:
    """
    🔥 ПОВНА генерація УСІХ варіантів доменів

    Генерує:
    1️⃣  concat-форма: булькантай (для .com, .net, .org, .io, .pro, .online, .site, .info, .cfd, .website, .app)
    2️⃣  hyphen-форма: булк-кант-ай (для .com, .net, .org, .io, .pro, .online, .site, .info, .cfd, .website, .app)
    3️⃣  官方варіанти (concat-official.com, hyphen-official.com)
    4️⃣  Географічні (якщо ccTLD указаний)
    
    Приклад (BulkQuant AI + ccTLD=ua):
    ✅ bulkquantai.com
    ✅ bulkquantai.net
    ✅ bulkquantai.org
    ✅ bulkquantai.io
    ✅ bulkquantai.pro
    ✅ bulkquantai.online
    ✅ bulkquantai.site
    ✅ bulkquantai.info
    ✅ bulkquantai.cfd
    ✅ bulkquantai.website
    ✅ bulkquantai.app
    ✅ bulk-quant-ai.com
    ✅ bulk-quant-ai.net
    ... (усі TLD для гіфену)
    ✅ bulkquantai-official.com
    ✅ bulk-quant-ai-official.com
    ✅ bulkquantai.ua
    ✅ bulk-quant-ai.ua
    ✅ bulkquantai-ua.com
    ✅ bulk-quant-ai-ua.com
    """
    words = _split_brand_words(brand)
    base_raw_concat, base_raw_hyph = _forms(words)

    base_concat = slugify_brand(base_raw_concat)
    base_hyph = slugify_brand(base_raw_hyph)

    # якщо вийшло пусто — fallback
    if not base_concat:
        base_concat = "brand"
    if not base_hyph:
        base_hyph = base_concat

    # 🆕 УСІХ TLD (повна генерація)
    tlds = ["com", "net", "org", "io", "pro", "online", "site", "info", "cfd", "website", "app"]
    out = []

    def add(s: str):
        if s and s not in out:
            out.append(s)

    # ===== ФАЗА 1: ОСНОВНІ (concat + hyphen) + ВСІ TLD =====
    for b in [base_concat, base_hyph]:
        for t in tlds:
            add(f"{b}.{t}")

    # ===== ФАЗА 2: OFFICIAL =====
    for b in [base_concat, base_hyph]:
        add(f"{b}-official.com")

    # ===== ФАЗА 3: ГЕОГРАФІЧНІ (якщо ccTLD) =====
    if ccTLD:
        ccTLD_lower = ccTLD.lower().strip(".")
        
        # Базові + ccTLD
        add(f"{base_concat}.{ccTLD_lower}")
        add(f"{base_hyph}.{ccTLD_lower}")
        
        # geo in sld (brand-ua.com)
        add(f"{base_concat}-{ccTLD_lower}.com")
        add(f"{base_hyph}-{ccTLD_lower}.com")
        
        # geo in sld для інших базових TLD
        for t in ["net", "org"]:
            add(f"{base_concat}-{ccTLD_lower}.{t}")
            add(f"{base_hyph}-{ccTLD_lower}.{t}")

    return out
