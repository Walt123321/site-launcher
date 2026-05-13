from __future__ import annotations
from typing import List, Optional, Tuple
import re

from core.translit import slugify_brand


def _split_brand_words(brand: str) -> List[str]:
    brand = (brand or "").strip()
    if not brand:
        return []

    # 1️⃣ Спробуємо розпізнати CamelCase БЕЗ розгляду пробілів
    # "BulkQuant AI" → видаляємо пробіли → "BulkQuantAI" → розбиваємо на ["bulk", "quant", "ai"]
    brand_no_space = re.sub(r"[\s_]+", "", brand)
    parts = re.findall(r"[A-Z]?[a-z]+|[A-Z]+(?![a-z])|\d+", brand_no_space)
    
    if len(parts) >= 2 and "".join(parts).lower() == brand_no_space.lower():
        # ✅ Успішно розпізнали CamelCase
        return [p.lower() for p in parts]

    # 2️⃣ Якщо CamelCase не знайдено — розбиваємо по пробілам/дефісам
    brand2 = re.sub(r"[\s_]+", " ", brand)
    raw = re.split(r"[\s\-]+", brand2)
    raw = [r for r in raw if r]
    
    if len(raw) >= 2:
        return [r.lower() for r in raw]

    return [brand.lower()]


def _forms(words: List[str]) -> Tuple[str, str]:
    """Генерує concat та hyphen форми з списку слів"""
    if not words:
        return "", ""
    if len(words) == 1:
        w = words[0]
        return w, w
    return "".join(words), "-".join(words)


def _get_all_possible_forms(brand: str) -> List[Tuple[str, str]]:
    """
    Генерує ВСІ можливі форми для бренду.
    
    Приклад "BulkQuant AI":
    1. bulkquantai + bulkquant-ai (з розпізнаного розділення)
    2. bulk-quant-ai + bulk-quant-ai (спробу розбити camelcase першої частини)
    """
    forms = []
    
    # Основні форми
    words = _split_brand_words(brand)
    if words:
        concat, hyph = _forms(words)
        forms.append((concat, hyph))
    
    # Додаткові форми: спробуємо розбити кожне слово на CamelCase
    # "BulkQuant AI" -> слово "BulkQuant" -> можна розбити на "Bulk" + "Quant"
    expanded_words = []
    for w in words:
        # Пробуємо розпізнати CamelCase в кожному слові
        parts = re.findall(r"[A-Z]?[a-z]+|[A-Z]+(?![a-z])|\d+", w)
        if len(parts) >= 2 and "".join(parts).lower() == w.lower():
            # Успішно розпізнали CamelCase
            expanded_words.extend(parts)
        else:
            expanded_words.append(w)
    
    # Якщо розширення змінило список — додаємо нові форми
    if len(expanded_words) > len(words) and len(expanded_words) >= 2:
        concat2, hyph2 = _forms(expanded_words)
        if (concat2, hyph2) not in forms:
            forms.append((concat2, hyph2))
    
    return forms


def generate_domain_candidates(brand: str, ccTLD: Optional[str]) -> List[str]:
    """
    🔥 МАКСИМАЛЬНА генерація УСІХ варіантів доменів

    Генерує:
    1️⃣  ВСІ можливі форми (concat + hyph для кожної)
    2️⃣  ДЛЯ КОЖНОЇ форми — усі TLD
    3️⃣  Official варіанти
    4️⃣  Географічні варіанти
    
    Приклад (BulkQuant AI):
    ✅ bulkquantai.com, bulkquantai.net, ...
    ✅ bulkquant-ai.com, bulkquant-ai.net, ...
    ✅ bulk-quant-ai.com, bulk-quant-ai.net, ...  ← НОВЕ!
    ✅ bulk-quant-ai-official.com
    ✅ bulkquantai.ua, bulk-quant-ai.ua, ...  (якщо ccTLD)
    """
    
    # Отримуємо ВСІ можливі форми
    all_forms = _get_all_possible_forms(brand)
    
    tlds = ["com", "net", "org", "io", "pro", "online", "site", "info", "cfd", "website", "app"]
    out = []

    def add(s: str):
        if s and s not in out:
            out.append(s)

    # ===== ФАЗА 1: ВСІ ФОРМИ + ВСІ TLD =====
    for concat, hyph in all_forms:
        concat_slug = slugify_brand(concat) or "brand"
        hyph_slug = slugify_brand(hyph) or concat_slug
        
        for base in [concat_slug, hyph_slug]:
            for t in tlds:
                add(f"{base}.{t}")

    # ===== ФАЗА 2: OFFICIAL =====
    for concat, hyph in all_forms:
        concat_slug = slugify_brand(concat) or "brand"
        hyph_slug = slugify_brand(hyph) or concat_slug
        
        for base in [concat_slug, hyph_slug]:
            add(f"{base}-official.com")

    # ===== ФАЗА 3: ГЕОГРАФІЧНІ (якщо ccTLD) =====
    if ccTLD:
        ccTLD_lower = ccTLD.lower().strip(".")
        
        for concat, hyph in all_forms:
            concat_slug = slugify_brand(concat) or "brand"
            hyph_slug = slugify_brand(hyph) or concat_slug
            
            for base in [concat_slug, hyph_slug]:
                # Базові + ccTLD
                add(f"{base}.{ccTLD_lower}")
                
                # geo in sld
                add(f"{base}-{ccTLD_lower}.com")
                add(f"{base}-{ccTLD_lower}.net")
                add(f"{base}-{ccTLD_lower}.org")

    return out
