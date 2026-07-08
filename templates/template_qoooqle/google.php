<?php
// ============================================================
// QOOOQLE — Google SERP Simulator (main entry page)
// ============================================================

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/translations.php';

// When deployed standalone on the shared SERP domain (qoooqle.com), this one
// deployment is reused across every future offer — all offer context (brand,
// domain, language, geo, register/about paths) arrives via query params
// instead of a per-offer rendered config.php.
$_host_param = isset($_GET['host']) ? trim($_GET['host']) : '';
if ($_host_param !== '' && preg_match('/^[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $_host_param)) {
    $offer_domain = $_host_param;
    $offer_url = 'https://' . $_host_param;

    $_register_path = isset($_GET['register_path']) ? trim($_GET['register_path']) : 'register.php';
    $_about_path = isset($_GET['about_path']) ? trim($_GET['about_path']) : 'about.php';
    $offer_register_url = $offer_url . '/' . ltrim($_register_path, '/');
    $offer_about_url = $offer_url . '/' . ltrim($_about_path, '/');

    if (isset($_GET['brand']) && trim($_GET['brand']) !== '') {
        $brand_name = trim($_GET['brand']);
    }

    // Let ?lang= win over config's generic fallback language, same as newsnik.
    $offer_lang = '{{' . 'LANG}}';

    // config.php's "Local Raw Testing Fallback" (triggered above by the line
    // just above, and always true anyway on an unrendered standalone deploy)
    // resets these to relative newsnikN/index.php paths for local testing —
    // wrong here, since this google.php isn't sitting next to those folders.
    $newsnik1_url = 'https://' . $newsnik1_domain . '/index.php';
    $newsnik2_url = 'https://' . $newsnik2_domain . '/index.php';
    $newsnik3_url = 'https://' . $newsnik3_domain . '/index.php';
}

// --- Resolve active language ---
$lang_param = isset($_GET['lang']) ? $_GET['lang'] : null;
$lang = get_active_lang($offer_lang, $lang_param);
$t = isset($translations[$lang]) ? $translations[$lang] : $translations['en'];

// --- Resolve active search query ---
$q_param = isset($_GET['q']) ? $_GET['q'] : null;
$search_query = $q_param ?: $brand_name;

// --- HTML lang attribute (cz -> cs) ---
$html_lang = ($lang === 'cz') ? 'cs' : $lang;

// --- Replace {{BRAND}} placeholder helper ---
function q_rpl($val, $brand) {
    if (is_array($val)) {
        return array_map(function ($v) use ($brand) { return q_rpl($v, $brand); }, $val);
    }
    return str_replace('{{BRAND}}', $brand, $val);
}
$t = q_rpl($t, $brand_name);

// --- Dynamic Headquarters / Country based on active language and geo ---
$offer_geo_code = null;
if (isset($test_data['geo']) && is_string($test_data['geo'])) {
    $offer_geo_code = strtoupper(trim($test_data['geo']));
} elseif (isset($_GET['geo']) && is_string($_GET['geo'])) {
    $offer_geo_code = strtoupper(trim($_GET['geo']));
} elseif (!empty($offer_geo) && $offer_geo !== '{{' . 'GEO}}') {
    // Real GEO baked into config.php at build time for this offer.
    $offer_geo_code = strtoupper(trim($offer_geo));
} elseif (!empty($offer_lang)) {
    // Last-resort fallback only if nothing else is available.
    $offer_geo_code = 'IT';
}

$geo_city_map = [
    'IT' => ['en' => 'Rome', 'it' => 'Roma', 'es' => 'Roma', 'fr' => 'Rome', 'de' => 'Rom', 'pt' => 'Roma', 'nl' => 'Rome', 'tr' => 'Roma', 'cz' => 'Řím', 'pl' => 'Rzym', 'ro' => 'Roma', 'no' => 'Roma', 'sv' => 'Rom'],
    'ES' => ['en' => 'Madrid', 'it' => 'Madrid', 'es' => 'Madrid', 'fr' => 'Madrid', 'de' => 'Madrid', 'pt' => 'Madri', 'nl' => 'Madrid', 'tr' => 'Madrid', 'cz' => 'Madrid', 'pl' => 'Madryt', 'ro' => 'Madrid', 'no' => 'Madrid', 'sv' => 'Madrid'],
    'FR' => ['en' => 'Paris', 'it' => 'Parigi', 'es' => 'París', 'fr' => 'Paris', 'de' => 'Paris', 'pt' => 'Paris', 'nl' => 'Parijs', 'tr' => 'Paris', 'cz' => 'Paříž', 'pl' => 'Paryż', 'ro' => 'Paris', 'no' => 'Paris', 'sv' => 'Paris'],
    'DE' => ['en' => 'Berlin', 'it' => 'Berlino', 'es' => 'Berlín', 'fr' => 'Berlin', 'de' => 'Berlin', 'pt' => 'Berlim', 'nl' => 'Berlijn', 'tr' => 'Berlin', 'cz' => 'Berlín', 'pl' => 'Berlin', 'ro' => 'Berlin', 'no' => 'Berlin', 'sv' => 'Berlin'],
    'PT' => ['en' => 'Lisbon', 'it' => 'Lisbona', 'es' => 'Lisboa', 'fr' => 'Lisbonne', 'de' => 'Lissabon', 'pt' => 'Lisboa', 'nl' => 'Lissabon', 'tr' => 'Lizbon', 'cz' => 'Lisabon', 'pl' => 'Lizbona', 'ro' => 'Lisabona', 'no' => 'Lisboa', 'sv' => 'Lissabon'],
    'NL' => ['en' => 'Amsterdam', 'it' => 'Amsterdam', 'es' => 'Ámsterdam', 'fr' => 'Amsterdam', 'de' => 'Amsterdam', 'pt' => 'Amesterdão', 'nl' => 'Amsterdam', 'tr' => 'Amsterdam', 'cz' => 'Amsterdam', 'pl' => 'Amsterdam', 'ro' => 'Amsterdam', 'no' => 'Amsterdam', 'sv' => 'Amsterdam'],
    'TR' => ['en' => 'Istanbul', 'it' => 'Istanbul', 'es' => 'Estambul', 'fr' => 'Istanbul', 'de' => 'Istanbul', 'pt' => 'Istambul', 'nl' => 'Istanboel', 'tr' => 'İstanbul', 'cz' => 'Istanbul', 'pl' => 'Stambuł', 'ro' => 'Istanbul', 'no' => 'Istanbul', 'sv' => 'Istanbul'],
    'CZ' => ['en' => 'Prague', 'it' => 'Praga', 'es' => 'Praga', 'fr' => 'Prague', 'de' => 'Prag', 'pt' => 'Praga', 'nl' => 'Praag', 'tr' => 'Prag', 'cz' => 'Praha', 'pl' => 'Praga', 'ro' => 'Praga', 'no' => 'Praha', 'sv' => 'Prag'],
    'PL' => ['en' => 'Warsaw', 'it' => 'Varsavia', 'es' => 'Varsovia', 'fr' => 'Varsovie', 'de' => 'Warschau', 'pt' => 'Varsóvia', 'nl' => 'Warschau', 'tr' => 'Varşova', 'cz' => 'Varšava', 'pl' => 'Warszawa', 'ro' => 'Varșovia', 'no' => 'Warszawa', 'sv' => 'Warszawa'],
    'RO' => ['en' => 'Bucharest', 'it' => 'Bucarest', 'es' => 'Bucarest', 'fr' => 'Bucarest', 'de' => 'Bukarest', 'pt' => 'Bucareste', 'nl' => 'Boekarest', 'tr' => 'Bükreş', 'cz' => 'Bukurešť', 'pl' => 'Bukareszt', 'ro' => 'București', 'no' => 'București', 'sv' => 'Bukarest'],
    'NO' => ['en' => 'Oslo', 'it' => 'Oslo', 'es' => 'Oslo', 'fr' => 'Oslo', 'de' => 'Oslo', 'pt' => 'Oslo', 'nl' => 'Oslo', 'tr' => 'Oslo', 'cz' => 'Oslo', 'pl' => 'Oslo', 'ro' => 'Oslo', 'no' => 'Oslo', 'sv' => 'Oslo'],
    'SE' => ['en' => 'Stockholm', 'it' => 'Stoccolma', 'es' => 'Estocolmo', 'fr' => 'Stockholm', 'de' => 'Stockholm', 'pt' => 'Estocolmo', 'nl' => 'Stockholm', 'tr' => 'Stockholm', 'cz' => 'Stockholm', 'pl' => 'Sztokholm', 'ro' => 'Stockholm', 'no' => 'Stockholm', 'sv' => 'Stockholm'],
    'GB' => ['en' => 'London', 'it' => 'Londra', 'es' => 'Londres', 'fr' => 'Londres', 'de' => 'London', 'pt' => 'Londres', 'nl' => 'Londen', 'tr' => 'Londra', 'cz' => 'Londýn', 'pl' => 'Londyn', 'ro' => 'Londra', 'no' => 'London', 'sv' => 'London'],
    'US' => ['en' => 'New York', 'it' => 'New York', 'es' => 'Nueva York', 'fr' => 'New York', 'de' => 'New York', 'pt' => 'Nova Iorque', 'nl' => 'New York', 'tr' => 'New York', 'cz' => 'New York', 'pl' => 'Nowy Jork', 'ro' => 'New York', 'no' => 'New York', 'sv' => 'New York'],
];
$geo_country_map = [
    'IT' => ['en' => 'Italy', 'it' => 'Italia', 'es' => 'Italia', 'fr' => 'Italie', 'de' => 'Italien', 'pt' => 'Itália', 'nl' => 'Italië', 'tr' => 'İtalya', 'cz' => 'Itálie', 'pl' => 'Włochy', 'ro' => 'Italia', 'no' => 'Italia', 'sv' => 'Italien'],
    'ES' => ['en' => 'Spain', 'it' => 'Spagna', 'es' => 'España', 'fr' => 'Espagne', 'de' => 'Spanien', 'pt' => 'Espanha', 'nl' => 'Spanje', 'tr' => 'İspanya', 'cz' => 'Španělsko', 'pl' => 'Hiszpania', 'ro' => 'Spania', 'no' => 'Spania', 'sv' => 'Spanien'],
    'FR' => ['en' => 'France', 'it' => 'Francia', 'es' => 'Francia', 'fr' => 'France', 'de' => 'Frankreich', 'pt' => 'França', 'nl' => 'Frankrijk', 'tr' => 'Fransa', 'cz' => 'Francie', 'pl' => 'Francja', 'ro' => 'Franța', 'no' => 'Frankrike', 'sv' => 'Frankrike'],
    'DE' => ['en' => 'Germany', 'it' => 'Germania', 'es' => 'Alemania', 'fr' => 'Allemagne', 'de' => 'Deutschland', 'pt' => 'Alemanha', 'nl' => 'Duitsland', 'tr' => 'Almanya', 'cz' => 'Německo', 'pl' => 'Niemcy', 'ro' => 'Germania', 'no' => 'Tyskland', 'sv' => 'Tyskland'],
    'PT' => ['en' => 'Portugal', 'it' => 'Portogallo', 'es' => 'Portugal', 'fr' => 'Portugal', 'de' => 'Portugal', 'pt' => 'Portugal', 'nl' => 'Portugal', 'tr' => 'Portekiz', 'cz' => 'Portugalsko', 'pl' => 'Portugalia', 'ro' => 'Portugalia', 'no' => 'Portugal', 'sv' => 'Portugal'],
    'NL' => ['en' => 'Netherlands', 'it' => 'Paesi Bassi', 'es' => 'Países Bajos', 'fr' => 'Pays-Bas', 'de' => 'Niederlande', 'pt' => 'Países Baixos', 'nl' => 'Nederland', 'tr' => 'Hollanda', 'cz' => 'Nizozemsko', 'pl' => 'Holandia', 'ro' => 'Țările de Jos', 'no' => 'Nederland', 'sv' => 'Nederländerna'],
    'TR' => ['en' => 'Turkey', 'it' => 'Turchia', 'es' => 'Turquía', 'fr' => 'Turquie', 'de' => 'Türkei', 'pt' => 'Turquia', 'nl' => 'Turkije', 'tr' => 'Türkiye', 'cz' => 'Turecko', 'pl' => 'Turcja', 'ro' => 'Turcia', 'no' => 'Tyrkia', 'sv' => 'Turkiet'],
    'CZ' => ['en' => 'Czech Republic', 'it' => 'Repubblica Ceca', 'es' => 'República Checa', 'fr' => 'République tchèque', 'de' => 'Tschechien', 'pt' => 'República Checa', 'nl' => 'Tsjechië', 'tr' => 'Çek Cumhuriyeti', 'cz' => 'Česko', 'pl' => 'Czechy', 'ro' => 'Cehia', 'no' => 'Tsjekkia', 'sv' => 'Tjeckien'],
    'PL' => ['en' => 'Poland', 'it' => 'Polonia', 'es' => 'Polonia', 'fr' => 'Pologne', 'de' => 'Polen', 'pt' => 'Polónia', 'nl' => 'Polen', 'tr' => 'Polonya', 'cz' => 'Polsko', 'pl' => 'Polska', 'ro' => 'Polonia', 'no' => 'Polen', 'sv' => 'Polen'],
    'RO' => ['en' => 'Romania', 'it' => 'Romania', 'es' => 'Rumanía', 'fr' => 'Roumanie', 'de' => 'Rumänien', 'pt' => 'Roménia', 'nl' => 'Roemenië', 'tr' => 'Romanya', 'cz' => 'Rumunsko', 'pl' => 'Rumunia', 'ro' => 'România', 'no' => 'Romania', 'sv' => 'Rumänien'],
    'NO' => ['en' => 'Norway', 'it' => 'Norvegia', 'es' => 'Noruega', 'fr' => 'Norvège', 'de' => 'Norwegen', 'pt' => 'Noruega', 'nl' => 'Noorwegen', 'tr' => 'Norveç', 'cz' => 'Norsko', 'pl' => 'Norwegia', 'ro' => 'Norvegia', 'no' => 'Norge', 'sv' => 'Norge'],
    'SE' => ['en' => 'Sweden', 'it' => 'Svezia', 'es' => 'Suecia', 'fr' => 'Suède', 'de' => 'Schweden', 'pt' => 'Suécia', 'nl' => 'Zweden', 'tr' => 'İsveç', 'cz' => 'Švédsko', 'pl' => 'Szwecja', 'ro' => 'Suedia', 'no' => 'Sverige', 'sv' => 'Sverige'],
    'GB' => ['en' => 'United Kingdom', 'it' => 'Regno Unito', 'es' => 'Reino Unido', 'fr' => 'Royaume-Uni', 'de' => 'Vereinigtes Königreich', 'pt' => 'Reino Unido', 'nl' => 'Verenigd Koninkrijk', 'tr' => 'Birleşik Krallık', 'cz' => 'Spojené království', 'pl' => 'Wielka Brytania', 'ro' => 'Regatul Unit', 'no' => 'Storbritannia', 'sv' => 'Storbritannien'],
    'US' => ['en' => 'United States', 'it' => 'Stati Uniti', 'es' => 'Estados Unidos', 'fr' => 'États-Unis', 'de' => 'Vereinigte Staaten', 'pt' => 'Estados Unidos', 'nl' => 'Verenigde Staten', 'tr' => 'Amerika Birleşik Devletleri', 'cz' => 'Spojené státy', 'pl' => 'Stany Zjednoczone', 'ro' => 'Statele Unite', 'no' => 'USA', 'sv' => 'USA'],
];
$geo_code_key = $offer_geo_code ?: 'GB';
$city_value = $geo_city_map[$geo_code_key][$lang] ?? $geo_city_map[$geo_code_key]['en'] ?? 'London';
$country_value = $geo_country_map[$geo_code_key][$lang] ?? $geo_country_map[$geo_code_key]['en'] ?? 'United Kingdom';
$t['headquarters_val'] = $city_value . ', ' . $country_value;
$t['footer_country'] = $country_value;

// --- Extra tabs translations ---
$tab_ai_map = [
    'en' => 'AI Mode', 'es' => 'Modo IA', 'it' => 'Modalità IA', 'fr' => 'Mode IA',
    'de' => 'KI-Modus', 'pt' => 'Modo IA', 'nl' => 'AI-modus', 'tr' => 'Yapay Zeka',
    'cz' => 'Režim AI', 'pl' => 'Tryb AI', 'ro' => 'Mod AI', 'no' => 'AI-modus', 'sv' => 'AI-läge'
];
$tab_shopping_map = [
    'en' => 'Shopping', 'es' => 'Compras', 'it' => 'Shopping', 'fr' => 'Shopping',
    'de' => 'Shopping', 'pt' => 'Compras', 'nl' => 'Winkelen', 'tr' => 'Alışveriş',
    'cz' => 'Nákupy', 'pl' => 'Zakupy', 'ro' => 'Cumpărături', 'no' => 'Shopping', 'sv' => 'Shopping'
];
$tab_short_videos_map = [
    'en' => 'Short videos', 'es' => 'Vídeos cortos', 'it' => 'Video brevi', 'fr' => 'Vidéos courtes',
    'de' => 'Kurzvideos', 'pt' => 'Vídeos curtos', 'nl' => "Korte video's", 'tr' => 'Kısa videolar',
    'cz' => 'Krátká videa', 'pl' => 'Krótkie wideo', 'ro' => 'Videoclipuri scurte', 'no' => 'Korte videoer', 'sv' => 'Kortvideor'
];
$t['tab_ai'] = isset($tab_ai_map[$lang]) ? $tab_ai_map[$lang] : 'AI Mode';
$t['tab_shopping'] = isset($tab_shopping_map[$lang]) ? $tab_shopping_map[$lang] : 'Shopping';
$t['tab_short_videos'] = isset($tab_short_videos_map[$lang]) ? $tab_short_videos_map[$lang] : 'Short videos';

// Ensure all tab keys exist to avoid undefined array key warnings
$t['tab_all'] = $t['tab_all'] ?? 'All';
$t['tab_images'] = $t['tab_images'] ?? 'Images';
$t['tab_videos'] = $t['tab_videos'] ?? 'Videos';
$t['tab_shorts'] = $t['tab_shorts'] ?? 'Shorts';
$t['tab_news'] = $t['tab_news'] ?? 'News';
$t['tab_more'] = $t['tab_more'] ?? 'More';
$t['tab_tools'] = $t['tab_tools'] ?? 'Tools';

// --- Brand initials for favicon placeholder ---
$brand_initials_src = preg_split('/\s+/', trim($brand_name));
$brand_initials = '';
foreach (array_slice($brand_initials_src, 0, 2) as $word) {
    $brand_initials .= mb_strtoupper(mb_substr($word, 0, 1));
}
if ($brand_initials === '') $brand_initials = '?';

// --- Result definitions (source domain, target URL, avatar color) ---
function q_lang_qs($lang, $brand) {
    global $offer_domain, $offer_geo_code;
    $qs = '?lang=' . urlencode($lang) . '&brand=' . urlencode($brand) . '&host=' . urlencode($offer_domain);
    if (!empty($offer_geo_code)) {
        $qs .= '&geo=' . urlencode($offer_geo_code);
    }
    return $qs;
}

function q_resolve_offer_favicon_url($offer_favicon, $offer_domain) {
    // Explicit per-offer override always wins, if configured.
    if (!empty($offer_favicon)) {
        $candidate = trim($offer_favicon);
        if (preg_match('#^https?://#i', $candidate)) {
            return $candidate;
        }
        $candidate = ltrim($candidate, '/');
        if ($candidate !== '' && file_exists(__DIR__ . '/' . $candidate)) {
            return $candidate;
        }
    }

    // No override configured — fetch the offer domain's own real favicon
    // instead of falling back to the template's static favicon.svg (same
    // for every brand on that template, which made unrelated launches
    // look identical in search results).
    return 'https://www.google.com/s2/favicons?domain=' . urlencode($offer_domain) . '&sz=64';
}

// One shared set of gradient icon designs, picked deterministically by a
// hash of $seed (domain/brand) so every offer gets its own distinct look,
// while staying visually consistent with the "beautiful" style already
// used for the other result rows.
function q_brand_icon_svg($seed, $size = 26) {
    $hash = md5($seed);
    $idx = hexdec(substr($hash, 0, 2)) % 4;

    // Unique gradient IDs to prevent clashes when multiple svgs render on one page
    $grad_id = 'grad_' . substr($hash, 0, 8);

    if ($idx === 0) {
        // Newspaper (Media/News) - Deep Blue Gradient
        return '<svg viewBox="0 0 32 32" width="' . $size . '" height="' . $size . '" style="display:block; border-radius:50%; overflow:hidden;">
            <circle cx="16" cy="16" r="15" fill="url(#' . $grad_id . ')"/>
            <defs>
                <linearGradient id="' . $grad_id . '" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#1e3c72" />
                    <stop offset="100%" stop-color="#2a5298" />
                </linearGradient>
            </defs>
            <rect x="8" y="8" width="16" height="16" rx="2" fill="#fff" />
            <rect x="10" y="11" width="5" height="5" fill="#e53935" />
            <line x1="17" y1="11" x2="22" y2="11" stroke="#37474f" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="17" y1="14" x2="22" y2="14" stroke="#37474f" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="10" y1="19" x2="22" y2="19" stroke="#37474f" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="10" y1="21" x2="18" y2="21" stroke="#37474f" stroke-width="1.5" stroke-linecap="round"/>
        </svg>';
    } elseif ($idx === 1) {
        // Globe (Portal/Global) - Green/Teal Gradient
        return '<svg viewBox="0 0 32 32" width="' . $size . '" height="' . $size . '" style="display:block; border-radius:50%; overflow:hidden;">
            <circle cx="16" cy="16" r="15" fill="url(#' . $grad_id . ')"/>
            <defs>
                <linearGradient id="' . $grad_id . '" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#11998e" />
                    <stop offset="100%" stop-color="#38ef7d" />
                </linearGradient>
            </defs>
            <circle cx="16" cy="16" r="9" fill="none" stroke="#fff" stroke-width="1.8"/>
            <ellipse cx="16" cy="16" rx="4" ry="9" fill="none" stroke="#fff" stroke-width="1.5"/>
            <line x1="7" y1="16" x2="25" y2="16" stroke="#fff" stroke-width="1.5"/>
            <path d="M9 11.5c1.5 1.5 3 2.5 7 2.5s5.5-1 7-2.5" fill="none" stroke="#fff" stroke-width="1.2"/>
            <path d="M9 20.5c1.5-1.5 3-2.5 7-2.5s5.5 1 7 2.5" fill="none" stroke="#fff" stroke-width="1.2"/>
        </svg>';
    } elseif ($idx === 2) {
        // Shield (Security/Reviews) - Coral/Red Gradient
        return '<svg viewBox="0 0 32 32" width="' . $size . '" height="' . $size . '" style="display:block; border-radius:50%; overflow:hidden;">
            <circle cx="16" cy="16" r="15" fill="url(#' . $grad_id . ')"/>
            <defs>
                <linearGradient id="' . $grad_id . '" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#f857a6" />
                    <stop offset="100%" stop-color="#ff5858" />
                </linearGradient>
            </defs>
            <path d="M16 8l-6 2.1v4.9c0 3.7 2.6 7.2 6 8.5 3.4-1.3 6-4.8 6-8.5v-4.9L16 8z" fill="#fff"/>
            <path d="M13.5 15.5l2 2 4.5-4.5" fill="none" stroke="#ff5858" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>';
    } else {
        // Trend (Finance/Trading) - Purple/Pink Gradient
        return '<svg viewBox="0 0 32 32" width="' . $size . '" height="' . $size . '" style="display:block; border-radius:50%; overflow:hidden;">
            <circle cx="16" cy="16" r="15" fill="url(#' . $grad_id . ')"/>
            <defs>
                <linearGradient id="' . $grad_id . '" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#8a2387" />
                    <stop offset="50%" stop-color="#e94057" />
                    <stop offset="100%" stop-color="#f27121" />
                </linearGradient>
            </defs>
            <path d="M9 21l4.5-4.5 3 3L23 12.5" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <polyline points="19 12.5 23 12.5 23 16.5" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>';
    }
}

function q_get_favicon($domain, $brand_initials, $offer_favicon) {
    global $offer_domain;

    // The offer's own rows show its real favicon (or explicit override).
    if ($domain === $offer_domain) {
        $favicon_src = q_resolve_offer_favicon_url($offer_favicon, $offer_domain);
        return '<img src="' . htmlspecialchars($favicon_src) . '" style="width:100%; height:100%; border-radius:50%; object-fit:cover;" onerror="this.onerror=null; this.src=\'https://www.google.com/s2/favicons?domain=' . urlencode($offer_domain) . '&sz=64\';">';
    }

    // Other (decoy) result rows get a distinct generated icon per domain.
    return q_brand_icon_svg($domain, 26);
}

$results = [
    [
        'domain'  => $offer_domain,
        'url'     => $offer_url,
        'path'    => $offer_domain,
        'color'   => '#4285f4',
        'title'   => $t['r1_title'],
        'snippet' => $t['r1_snippet'],
        'rating'  => false,
    ],
    [
        'domain'  => $offer_domain,
        'url'     => $offer_register_url,
        'path'    => $offer_domain . ' › register',
        'color'   => '#34a853',
        'title'   => $t['r2_title'],
        'snippet' => $t['r2_snippet'],
        'rating'  => false,
    ],
    [
        'domain'  => $newsnik1_domain,
        'url'     => $newsnik1_url . q_lang_qs($lang, $brand_name),
        'path'    => $newsnik1_domain . ' › reviews',
        'color'   => '#ea4335',
        'title'   => $t['r3_title'],
        'snippet' => $t['r3_snippet'],
        'rating'  => true,
    ],
    [
        'domain'  => $newsnik2_domain,
        'url'     => $newsnik2_url . q_lang_qs($lang, $brand_name),
        'path'    => $newsnik2_domain . ' › review',
        'color'   => '#fbbc05',
        'title'   => $t['r4_title'],
        'snippet' => $t['r4_snippet'],
        'rating'  => true,
    ],
    [
        'domain'  => $newsnik3_domain,
        'url'     => $newsnik3_url . q_lang_qs($lang, $brand_name),
        'path'    => $newsnik3_domain . ' › trading-bot',
        'color'   => '#8ab4f8',
        'title'   => $t['r5_title'],
        'snippet' => $t['r5_snippet'],
        'rating'  => true,
    ],
    [
        'domain'  => $offer_domain,
        'url'     => $offer_about_url,
        'path'    => $offer_domain . ' › about',
        'color'   => '#a142f4',
        'title'   => $t['r6_title'],
        'snippet' => $t['r6_snippet'],
        'rating'  => false,
    ],
];

$related = [$t['related_1'], $t['related_2'], $t['related_3'], $t['related_4'], $t['related_5'], $t['related_6'], $t['related_7'], $t['related_8']];
$offer_favicon_url = q_resolve_offer_favicon_url($offer_favicon, $offer_domain);
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($html_lang); ?>">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($search_query . $t['search_title']); ?></title>
<meta name="robots" content="noindex, nofollow">
<link rel="icon" href="<?php echo htmlspecialchars($offer_favicon_url); ?>">
<link rel="shortcut icon" href="<?php echo htmlspecialchars($offer_favicon_url); ?>">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="qoooqle-config" data-offer-domain="<?php echo htmlspecialchars($offer_domain); ?>" style="display:none;"></div>

<script src="random-ratings.js"></script>
<script src="favicon-fetcher.js"></script>

<header class="google-header">
    <div class="header-main-row">
        <a href="#" onclick="return false;" class="logo-link">
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" class="google-logo">
        </a>
        <div class="search-bar">
            <input type="text" value="<?= htmlspecialchars($search_query) ?>" class="search-input" readonly>
            <div class="search-bar-buttons">
                <svg class="btn-clear" viewBox="0 0 24 24" width="20" height="20" fill="#bdc1c6"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
                <div class="search-divider"></div>
                <svg class="btn-kbd" viewBox="0 -960 960 960" width="20" height="20" fill="#bdc1c6" xmlns="http://www.w3.org/2000/svg"><path fill="#bdc1c6" d="M160-200q-33 0-56.5-23.5T80-280v-400q0-33 23.5-56.5T160-760h640q33 0 56.5 23.5T880-680v400q0 33-23.5 56.5T800-200H160Zm160-120h320v-80H320v80ZM200-440h80v-80h-80v80Zm120 0h80v-80h-80v80Zm120 0h80v-80h-80v80Zm120 0h80v-80h-80v80Zm120 0h80v-80h-80v80ZM200-560h80v-80h-80v80Zm120 0h80v-80h-80v80Zm120 0h80v-80h-80v80Zm120 0h80v-80h-80v80Zm120 0h80v-80h-80v80Z"/></svg>
                <svg class="btn-mic" viewBox="0 -960 960 960" width="20" height="20" fill="#bdc1c6" xmlns="http://www.w3.org/2000/svg"><path fill="#bdc1c6" d="M480-400q-50 0-85-35t-35-85v-240q0-50 35-85t85-35q50 0 85 35t35 85v240q0 50-35 85t-85 35Zm-40 280v-123q-104-14-172-93t-68-184h80q0 83 58.5 141.5T480-320q83 0 141.5-58.5T680-520h80q0 105-68 184t-172 93v123h-80Z"/></svg>
                <svg class="btn-lens" aria-hidden="true" focusable="false" viewBox="0 -960 960 960" width="20" height="20" fill="#bdc1c6" xmlns="http://www.w3.org/2000/svg"><path fill="#bdc1c6" d="M480-320q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35Zm240 160q-33 0-56.5-23.5T640-240q0-33 23.5-56.5T720-320q33 0 56.5 23.5T800-240q0 33-23.5 56.5T720-160Zm-440 40q-66 0-113-47t-47-113v-80h80v80q0 33 23.5 56.5T280-200h200v80H280Zm480-320v-160q0-33-23.5-56.5T680-680H280q-33 0-56.5 23.5T200-600v120h-80v-120q0-66 47-113t113-47h80l40-80h160l40 80h80q66 0 113 47t47 113v160h-80Z"></path></svg>
                <svg class="btn-search" viewBox="0 0 24 24" width="20" height="20" fill="#bdc1c6" xmlns="http://www.w3.org/2000/svg"><path fill="#bdc1c6" d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
            </div>
        </div>
        <div class="header-right">
            <a href="<?php echo htmlspecialchars($offer_url); ?>" class="icon-btn">
                <svg class="header-right-icon" viewBox="0 0 24 24" width="22" height="22" fill="#e8eaed" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#e8eaed" d="M16 5l-1.42 1.42-1.59-1.59V16h-1.98V4.83L9.42 6.42 8 5l4-4 4 4zm4 5v11c0 1.1-.9 2-2 2H6c-1.11 0-2-.9-2-2V10c0-1.11.89-2 2-2h3v2H6v11h12V10h-3V8h3c1.1 0 2 .89 2 2z"></path>
                </svg>
            </a>
            <a href="<?php echo htmlspecialchars($offer_url); ?>" class="icon-btn">
                <svg class="header-right-icon" viewBox="0 0 24 24" width="22" height="22" fill="#e8eaed" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#e8eaed" d="M6,8c1.1,0 2,-0.9 2,-2s-.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-.9-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-.9-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-.9-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-.9-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-.9-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-.9-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-.9-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z"></path>
                </svg>
            </a>
            <a href="<?php echo htmlspecialchars($offer_url); ?>" class="profile-avatar"><?= mb_strtoupper(mb_substr($brand_initials, 0, 1)) ?></a>
        </div>
    </div>
    
    <div class="header-tabs-row">
        <div class="tabs-scroll-container">
            <a href="#" onclick="return false;" class="tab-item ai-tab">
                <svg class="ai-star-icon" viewBox="0 0 24 24" width="16" height="16">
                    <path d="M12 2L14.85 8.15L21 9.24L16.5 13.97L17.85 20.3L12 17L6.15 20.3L7.5 13.97L3 9.24L9.15 8.15L12 2Z" />
                </svg>
                <span><?= htmlspecialchars($t['tab_ai']) ?></span>
            </a>
            <a href="#" onclick="return false;" class="tab-item active"><?= htmlspecialchars($t['tab_all']) ?></a>
            <a href="#" onclick="return false;" class="tab-item"><?= htmlspecialchars($t['tab_videos']) ?></a>
            <a href="#" onclick="return false;" class="tab-item"><?= htmlspecialchars($t['tab_images']) ?></a>
            <a href="#" onclick="return false;" class="tab-item"><?= htmlspecialchars($t['tab_shorts']) ?></a>
            <a href="#" onclick="return false;" class="tab-item"><?= htmlspecialchars($t['tab_news']) ?></a>
            <a href="#" onclick="return false;" class="tab-item"><?= htmlspecialchars($t['tab_shopping']) ?></a>
            <a href="#" onclick="return false;" class="tab-item"><?= htmlspecialchars($t['tab_more']) ?></a>
            <div class="tab-item-divider" style="display:none;"></div>
            <a href="#" onclick="return false;" class="tab-item tools-tab" style="display:none;"><?= htmlspecialchars($t['tab_tools']) ?></a>
        </div>
    </div>
</header>

<div class="page-content">
    <!-- Stats bar hidden -->
    <!-- <div class="stats-bar"><?php echo htmlspecialchars($t['stats_text']); ?></div> -->

    <div class="serp-layout">
        <div class="left-column">
            <?php foreach ($results as $r): ?>
            <div class="result-item">
                <a class="result-link" href="<?php echo htmlspecialchars($r['url']); ?>">
                    <div class="result-source">
                        <div class="icon-circle" style="background:#303134; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                            <?php echo q_get_favicon($r['domain'], $brand_initials, $offer_favicon); ?>
                        </div>
                        <div class="source-info">
                            <span class="source-name"><?php echo htmlspecialchars($r['domain']); ?></span>
                            <span class="source-url">
                                <?php echo htmlspecialchars($r['path']); ?>
                                <span class="translate-link"><?php echo htmlspecialchars($t['translate']); ?></span>
                            </span>
                        </div>
                        <div class="three-dots">⋮</div>
                    </div>
                    <span class="result-title"><?php echo htmlspecialchars($r['title']); ?></span>
                    <div class="result-snippet"><?php echo htmlspecialchars($r['snippet']); ?></div>
                    <?php if ($r['rating']): ?>
                    <div class="star-rating">
                        <span class="stars">★★★★★</span>
                        <span class="rating-score">4.9</span>
                        <span class="rating-count">(2,847)</span>
                    </div>
                    <?php endif; ?>
                </a>
            </div>
            <?php endforeach; ?>

            <div class="related-searches">
                <h3><?php echo htmlspecialchars($t['related_title']); ?></h3>
                <div class="related-pills">
                    <?php foreach ($related as $rel):
                        // Hardcoded, not derived from $_SERVER['SCRIPT_NAME'] — Keitaro's
                        // local_file routing doesn't reflect the real filename there, it
                        // reflects its own internal request path (e.g. "/testqoooqle-com"),
                        // which caused these links to 404.
                        $pill_url = 'index.php?q=' . urlencode($rel) . '&lang=' . urlencode($lang);
                        if (isset($_GET['host'])) $pill_url .= '&host=' . urlencode($_GET['host']);
                        if (isset($_GET['geo'])) $pill_url .= '&geo=' . urlencode($_GET['geo']);
                        if (isset($_GET['brand'])) $pill_url .= '&brand=' . urlencode($_GET['brand']);
                        if (isset($_GET['register_path'])) $pill_url .= '&register_path=' . urlencode($_GET['register_path']);
                        if (isset($_GET['about_path'])) $pill_url .= '&about_path=' . urlencode($_GET['about_path']);
                    ?>
                    <a href="<?php echo htmlspecialchars($pill_url); ?>" class="related-pill">
                        <svg viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 1 0-.7.7l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0A4.5 4.5 0 1 1 14 9.5 4.5 4.5 0 0 1 9.5 14z"/></svg>
                        <span><?php echo htmlspecialchars($rel); ?></span>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="right-column">
            <div class="knowledge-panel">
                <div class="panel-header-image">
                    <div class="panel-brand-logo">
                        <?php if (!empty($offer_favicon) && file_exists(__DIR__ . '/' . ltrim($offer_favicon, '/'))): ?>
                        <img src="<?php echo htmlspecialchars($offer_favicon); ?>" alt="<?php echo htmlspecialchars($brand_name); ?>" style="width:44px;height:44px;border-radius:8px;">
                        <?php else: ?>
                        <img src="<?php echo htmlspecialchars($offer_favicon_url); ?>" alt="<?php echo htmlspecialchars($brand_name); ?>" style="width:44px;height:44px;border-radius:8px; object-fit:cover;" onerror="this.style.display='none';">
                        <?php endif; ?>
                        <div class="panel-brand-name"><?php echo htmlspecialchars($brand_name); ?></div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="panel-official">
                        <svg viewBox="0 0 16 16" fill-rule="evenodd" clip-rule="evenodd"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.97 11.03a.75.75 0 0 0 1.07 0l3.992-3.992a.75.75 0 0 0-1.071-1.071L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.071 1.071L6.97 11.03z"/></svg>
                        <?php echo htmlspecialchars($t['official_badge']); ?>
                    </div>
                    <div class="panel-title"><?php echo htmlspecialchars($brand_name); ?></div>
                    <div class="panel-subtitle"><?php echo htmlspecialchars($t['panel_subtitle']); ?></div>
                    <div class="panel-desc"><?php echo htmlspecialchars($brand_name . $t['panel_desc']); ?></div>
                    <div class="panel-official-link">
                        <a href="<?php echo htmlspecialchars($offer_url); ?>" class="official-website-link">
                            <?php echo htmlspecialchars($brand_name); ?> Official website →
                        </a>
                    </div>
                    <div class="panel-info">
                        <div class="panel-info-row">
                            <span class="panel-info-label"><?php echo htmlspecialchars($t['founded_label']); ?></span>
                            <span class="panel-info-value"><?php echo htmlspecialchars($founded_year); ?></span>
                        </div>
                        <div class="panel-info-row">
                            <span class="panel-info-label"><?php echo htmlspecialchars($t['headquarters_label']); ?></span>
                            <span class="panel-info-value"><?php echo htmlspecialchars($t['headquarters_val']); ?></span>
                        </div>
                        <div class="panel-info-row">
                            <span class="panel-info-label"><?php echo htmlspecialchars($t['type_label']); ?></span>
                            <span class="panel-info-value"><?php echo htmlspecialchars($t['type_val']); ?></span>
                        </div>
                        <div class="panel-info-row">
                            <span class="panel-info-label"><?php echo htmlspecialchars($t['focus_label']); ?></span>
                            <span class="panel-info-value"><?php echo htmlspecialchars($t['focus_val']); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="google-footer">
        <div class="footer-country"><?php echo htmlspecialchars($t['footer_country']); ?></div>
        <div class="footer-links">
            <a href="<?php echo htmlspecialchars($offer_url); ?>"><?php echo htmlspecialchars($t['footer_privacy']); ?></a>
            <a href="<?php echo htmlspecialchars($offer_url); ?>"><?php echo htmlspecialchars($t['footer_terms']); ?></a>
            <a href="<?php echo htmlspecialchars($offer_url); ?>"><?php echo htmlspecialchars($t['footer_settings']); ?></a>
        </div>
    </footer>
</div>

</body>
</html>
