<?php
// ============================================================
// QOOOQLE — Google SERP Simulator (main entry page)
// ============================================================

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

function qoooqle_get_context_value($key, $default = '') {
    if (isset($_GET[$key]) && trim((string) $_GET[$key]) !== '') {
        return trim((string) $_GET[$key]);
    }

    if (isset($_SESSION['qoooqle_offer_context'][$key]) && trim((string) $_SESSION['qoooqle_offer_context'][$key]) !== '') {
        return trim((string) $_SESSION['qoooqle_offer_context'][$key]);
    }

    return $default;
}

function qoooqle_store_context_if_needed() {
    $context_keys = ['lang', 'host', 'brand', 'geo', 'register_path', 'about_path'];
    $seen_context = false;

    foreach ($context_keys as $key) {
        if (isset($_GET[$key]) && trim((string) $_GET[$key]) !== '') {
            $seen_context = true;
            break;
        }
    }

    if (!$seen_context) {
        return;
    }

    // Merge into whatever's already stored — a link that only carries a
    // subset of the context keys (e.g. a related-search pill only passes
    // ?q=&lang=) must not wipe out host/brand/geo from an earlier visit.
    $context = isset($_SESSION['qoooqle_offer_context']) && is_array($_SESSION['qoooqle_offer_context'])
        ? $_SESSION['qoooqle_offer_context']
        : [];
    foreach ($context_keys as $key) {
        if (isset($_GET[$key]) && trim((string) $_GET[$key]) !== '') {
            $context[$key] = trim((string) $_GET[$key]);
        }
    }

    if (!empty($context)) {
        $_SESSION['qoooqle_offer_context'] = $context;
    }

    $path = isset($_SERVER['REQUEST_URI']) ? parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) : (isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : '/');
    $path = $path ?: '/';

    $keep_params = [];
    if (isset($_GET['q']) && trim((string) $_GET['q']) !== '') {
        $keep_params['q'] = trim((string) $_GET['q']);
    }

    $redirect_url = $path;
    if (!empty($keep_params)) {
        $redirect_url .= '?' . http_build_query($keep_params);
    }

    header('Location: ' . $redirect_url, true, 302);
    exit;
}

qoooqle_store_context_if_needed();

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/translations.php';

// When deployed standalone on the shared SERP domain (qoooqle.com), this one
// deployment is reused across every future offer — all offer context (brand,
// domain, language, geo, register/about paths) arrives via query params
// instead of a per-offer rendered config.php.
$_host_param = qoooqle_get_context_value('host', '');
if ($_host_param !== '' && preg_match('/^[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $_host_param)) {
    $offer_domain = $_host_param;
    $offer_url = 'https://' . $_host_param;

    $_register_path = qoooqle_get_context_value('register_path', 'register.php');
    $_about_path = qoooqle_get_context_value('about_path', 'about.php');
    // The offer's other pages (anything besides its own index.php) are only
    // reachable through Keitaro's /lander/{domain}/ campaign path — a flat
    // https://domain/register.php request 404s even though the file exists.
    $offer_register_url = $offer_url . '/lander/' . $_host_param . '/' . ltrim($_register_path, '/');
    $offer_about_url = $offer_url . '/lander/' . $_host_param . '/' . ltrim($_about_path, '/');

    $brand_context = qoooqle_get_context_value('brand', '');
    if ($brand_context !== '') {
        $brand_name = trim($brand_context);
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
// Same session fallback as host/brand/geo/register_path/about_path above —
// the post-storage redirect strips ?lang= from the URL, so without this a
// reloaded/related-search page silently drops back to English.
$lang_param = qoooqle_get_context_value('lang', '');
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
} elseif (($geo_context = qoooqle_get_context_value('geo', '')) !== '') {
    $offer_geo_code = strtoupper(trim($geo_context));
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
    // Remaining geos supported by core/geo_defaults.json but not otherwise
    // covered above — only 'en' is provided; the lookup at $geo_code_key
    // already falls back to ['en'] for any language not listed per-country,
    // so these display correctly (in English) instead of silently dropping
    // to the London/GB default.
    'BE' => ['en' => 'Brussels'],
    'HR' => ['en' => 'Zagreb'],
    'FI' => ['en' => 'Helsinki'],
    'AU' => ['en' => 'Canberra'],
    'NZ' => ['en' => 'Wellington'],
    'DK' => ['en' => 'Copenhagen'],
    'GR' => ['en' => 'Athens'],
    'CR' => ['en' => 'San José'],
    'CA' => ['en' => 'Ottawa'],
    'CH' => ['en' => 'Bern'],
    'HK' => ['en' => 'Hong Kong'],
    'LV' => ['en' => 'Riga'],
    'AT' => ['en' => 'Vienna'],
    'IE' => ['en' => 'Dublin'],
    'IS' => ['en' => 'Reykjavik'],
    'LU' => ['en' => 'Luxembourg'],
    'LI' => ['en' => 'Vaduz'],
    'MT' => ['en' => 'Valletta'],
    'CY' => ['en' => 'Nicosia'],
    'EE' => ['en' => 'Tallinn'],
    'LT' => ['en' => 'Vilnius'],
    'SI' => ['en' => 'Ljubljana'],
    'SK' => ['en' => 'Bratislava'],
    'HU' => ['en' => 'Budapest'],
    'BG' => ['en' => 'Sofia'],
    'RS' => ['en' => 'Belgrade'],
    'BA' => ['en' => 'Sarajevo'],
    'ME' => ['en' => 'Podgorica'],
    'AL' => ['en' => 'Tirana'],
    'MK' => ['en' => 'Skopje'],
    'MD' => ['en' => 'Chisinau'],
    'UA' => ['en' => 'Kyiv'],
    'MX' => ['en' => 'Mexico City'],
    'BR' => ['en' => 'Brasília'],
    'AR' => ['en' => 'Buenos Aires'],
    'CL' => ['en' => 'Santiago'],
    'CO' => ['en' => 'Bogotá'],
    'PE' => ['en' => 'Lima'],
    'EC' => ['en' => 'Quito'],
    'UY' => ['en' => 'Montevideo'],
    'PY' => ['en' => 'Asunción'],
    'BO' => ['en' => 'La Paz'],
    'PA' => ['en' => 'Panama City'],
    'GT' => ['en' => 'Guatemala City'],
    'HN' => ['en' => 'Tegucigalpa'],
    'SV' => ['en' => 'San Salvador'],
    'DO' => ['en' => 'Santo Domingo'],
    'JM' => ['en' => 'Kingston'],
    'TT' => ['en' => 'Port of Spain'],
    'JP' => ['en' => 'Tokyo'],
    'KR' => ['en' => 'Seoul'],
    'TW' => ['en' => 'Taipei'],
    'CN' => ['en' => 'Beijing'],
    'SG' => ['en' => 'Singapore'],
    'MY' => ['en' => 'Kuala Lumpur'],
    'PH' => ['en' => 'Manila'],
    'ID' => ['en' => 'Jakarta'],
    'TH' => ['en' => 'Bangkok'],
    'VN' => ['en' => 'Hanoi'],
    'IN' => ['en' => 'New Delhi'],
    'PK' => ['en' => 'Islamabad'],
    'BD' => ['en' => 'Dhaka'],
    'LK' => ['en' => 'Colombo'],
    'NP' => ['en' => 'Kathmandu'],
    'AE' => ['en' => 'Abu Dhabi'],
    'SA' => ['en' => 'Riyadh'],
    'QA' => ['en' => 'Doha'],
    'KW' => ['en' => 'Kuwait City'],
    'IL' => ['en' => 'Tel Aviv'],
    'EG' => ['en' => 'Cairo'],
    'MA' => ['en' => 'Rabat'],
    'TN' => ['en' => 'Tunis'],
    'DZ' => ['en' => 'Algiers'],
    'ZA' => ['en' => 'Pretoria'],
    'NG' => ['en' => 'Abuja'],
    'KE' => ['en' => 'Nairobi'],
    'GH' => ['en' => 'Accra'],
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
    // Same remaining-geos set as $geo_city_map above — 'en' only, relies on
    // the same ['en'] fallback in the lookup.
    'BE' => ['en' => 'Belgium'],
    'HR' => ['en' => 'Croatia'],
    'FI' => ['en' => 'Finland'],
    'AU' => ['en' => 'Australia'],
    'NZ' => ['en' => 'New Zealand'],
    'DK' => ['en' => 'Denmark'],
    'GR' => ['en' => 'Greece'],
    'CR' => ['en' => 'Costa Rica'],
    'CA' => ['en' => 'Canada'],
    'CH' => ['en' => 'Switzerland'],
    'HK' => ['en' => 'Hong Kong'],
    'LV' => ['en' => 'Latvia'],
    'AT' => ['en' => 'Austria'],
    'IE' => ['en' => 'Ireland'],
    'IS' => ['en' => 'Iceland'],
    'LU' => ['en' => 'Luxembourg'],
    'LI' => ['en' => 'Liechtenstein'],
    'MT' => ['en' => 'Malta'],
    'CY' => ['en' => 'Cyprus'],
    'EE' => ['en' => 'Estonia'],
    'LT' => ['en' => 'Lithuania'],
    'SI' => ['en' => 'Slovenia'],
    'SK' => ['en' => 'Slovakia'],
    'HU' => ['en' => 'Hungary'],
    'BG' => ['en' => 'Bulgaria'],
    'RS' => ['en' => 'Serbia'],
    'BA' => ['en' => 'Bosnia and Herzegovina'],
    'ME' => ['en' => 'Montenegro'],
    'AL' => ['en' => 'Albania'],
    'MK' => ['en' => 'North Macedonia'],
    'MD' => ['en' => 'Moldova'],
    'UA' => ['en' => 'Ukraine'],
    'MX' => ['en' => 'Mexico'],
    'BR' => ['en' => 'Brazil'],
    'AR' => ['en' => 'Argentina'],
    'CL' => ['en' => 'Chile'],
    'CO' => ['en' => 'Colombia'],
    'PE' => ['en' => 'Peru'],
    'EC' => ['en' => 'Ecuador'],
    'UY' => ['en' => 'Uruguay'],
    'PY' => ['en' => 'Paraguay'],
    'BO' => ['en' => 'Bolivia'],
    'PA' => ['en' => 'Panama'],
    'GT' => ['en' => 'Guatemala'],
    'HN' => ['en' => 'Honduras'],
    'SV' => ['en' => 'El Salvador'],
    'DO' => ['en' => 'Dominican Republic'],
    'JM' => ['en' => 'Jamaica'],
    'TT' => ['en' => 'Trinidad and Tobago'],
    'JP' => ['en' => 'Japan'],
    'KR' => ['en' => 'South Korea'],
    'TW' => ['en' => 'Taiwan'],
    'CN' => ['en' => 'China'],
    'SG' => ['en' => 'Singapore'],
    'MY' => ['en' => 'Malaysia'],
    'PH' => ['en' => 'Philippines'],
    'ID' => ['en' => 'Indonesia'],
    'TH' => ['en' => 'Thailand'],
    'VN' => ['en' => 'Vietnam'],
    'IN' => ['en' => 'India'],
    'PK' => ['en' => 'Pakistan'],
    'BD' => ['en' => 'Bangladesh'],
    'LK' => ['en' => 'Sri Lanka'],
    'NP' => ['en' => 'Nepal'],
    'AE' => ['en' => 'United Arab Emirates'],
    'SA' => ['en' => 'Saudi Arabia'],
    'QA' => ['en' => 'Qatar'],
    'KW' => ['en' => 'Kuwait'],
    'IL' => ['en' => 'Israel'],
    'EG' => ['en' => 'Egypt'],
    'MA' => ['en' => 'Morocco'],
    'TN' => ['en' => 'Tunisia'],
    'DZ' => ['en' => 'Algeria'],
    'ZA' => ['en' => 'South Africa'],
    'NG' => ['en' => 'Nigeria'],
    'KE' => ['en' => 'Kenya'],
    'GH' => ['en' => 'Ghana'],
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
    global $offer_domain, $offer_geo_code, $_register_path, $_about_path;
    $qs = '?lang=' . urlencode($lang) . '&brand=' . urlencode($brand) . '&host=' . urlencode($offer_domain);
    if (!empty($offer_geo_code)) {
        $qs .= '&geo=' . urlencode($offer_geo_code);
    }
    // Forward the offer's real register/about page filenames so the newsnik
    // page's own CTA doesn't fall back to a hardcoded (possibly 404) path.
    if (!empty($_register_path)) {
        $qs .= '&register_path=' . urlencode($_register_path);
    }
    if (!empty($_about_path)) {
        $qs .= '&about_path=' . urlencode($_about_path);
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

    // No override configured — try the offer domain's own real favicon.ico
    // first (reachable at Keitaro's /lander/{domain}/ campaign path, same
    // convention already used for the register/about links above). Google's
    // favicon-fetching proxy (used as an <img onerror> fallback wherever
    // this URL is rendered) only has an icon cached once it has actually
    // crawled the domain — a brand new offer domain shows Google's generic
    // placeholder globe instead of the real icon until that happens, which
    // could be days. Fetching the real file directly works immediately.
    return 'https://' . $offer_domain . '/lander/' . $offer_domain . '/favicon.ico';
}

function q_offer_favicon_google_fallback_url($offer_domain) {
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

// The 3 newsnik domains are fixed, known constants (not arbitrary decoy
// rows), so they get a fixed, brand-matching icon instead of a random hash
// pick — filled icons on a muted solid-color circle (an award/medal for the
// review site, a presentation chart for the trading-pulse site, an article
// for the news hub) so the SERP row icon always matches the page you land on.
function q_newsnik_icon_svg($domain, $size = 26) {
    global $newsnik1_domain, $newsnik2_domain, $newsnik3_domain;

    if ($domain === $newsnik1_domain) {
        // Award/medal (Reviews) - dark navy
        return '<svg viewBox="0 0 32 32" width="' . $size . '" height="' . $size . '" style="display:block; border-radius:50%; overflow:hidden;">
            <circle cx="16" cy="16" r="15" fill="#1e3a5f"/>
            <g transform="translate(7,7) scale(0.75)" fill="#fff">
            <path d="M19.496 13.983l1.966 3.406a1.001 1.001 0 0 1 -.705 1.488l-.113 .011l-.112 -.001l-2.933 -.19l-1.303 2.636a1.001 1.001 0 0 1 -1.608 .26l-.082 -.094l-.072 -.11l-1.968 -3.407a8.994 8.994 0 0 0 6.93 -3.999z"/>
            <path d="M11.43 17.982l-1.966 3.408a1.001 1.001 0 0 1 -1.622 .157l-.076 -.1l-.064 -.114l-1.304 -2.635l-2.931 .19a1.001 1.001 0 0 1 -1.022 -1.29l.04 -.107l.05 -.1l1.968 -3.409a8.994 8.994 0 0 0 6.927 4.001z"/>
            <path d="M12 2l.24 .004a7 7 0 0 1 6.76 6.996l-.003 .193l-.007 .192l-.018 .245l-.026 .242l-.024 .178a6.985 6.985 0 0 1 -.317 1.268l-.116 .308l-.153 .348a7.001 7.001 0 0 1 -12.688 -.028l-.13 -.297l-.052 -.133l-.08 -.217l-.095 -.294a6.96 6.96 0 0 1 -.093 -.344l-.06 -.271l-.049 -.271l-.02 -.139l-.039 -.323l-.024 -.365l-.006 -.292a7 7 0 0 1 6.76 -6.996l.24 -.004z"/>
            </g>
        </svg>';
    }

    if ($domain === $newsnik2_domain) {
        // Presentation/analytics chart (Trading pulse) - forest green
        return '<svg viewBox="0 0 32 32" width="' . $size . '" height="' . $size . '" style="display:block; border-radius:50%; overflow:hidden;">
            <circle cx="16" cy="16" r="15" fill="#166534"/>
            <g transform="translate(7,7) scale(0.75)" fill="#fff">
            <path d="M21 3a1 1 0 0 1 0 2v9a3 3 0 0 1 -3 3h-5v2h2a1 1 0 0 1 0 2h-6a1 1 0 0 1 0 -2h2v-2h-5a3 3 0 0 1 -3 -3v-9a1 1 0 1 1 0 -2zm-12 4a1 1 0 0 0 -1 1v4a1 1 0 0 0 2 0v-4a1 1 0 0 0 -1 -1m6 2a1 1 0 0 0 -1 1v2a1 1 0 0 0 2 0v-2a1 1 0 0 0 -1 -1m-3 1a1 1 0 0 0 -1 1v1a1 1 0 0 0 2 0v-1a1 1 0 0 0 -1 -1"/>
            </g>
        </svg>';
    }

    if ($domain === $newsnik3_domain) {
        // Article (News hub) - deep purple
        return '<svg viewBox="0 0 32 32" width="' . $size . '" height="' . $size . '" style="display:block; border-radius:50%; overflow:hidden;">
            <circle cx="16" cy="16" r="15" fill="#581c87"/>
            <g transform="translate(7,7) scale(0.75)" fill="#fff">
            <path d="M19 3a3 3 0 0 1 2.995 2.824l.005 .176v12a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-12a3 3 0 0 1 2.824 -2.995l.176 -.005h14zm-2 12h-10l-.117 .007a1 1 0 0 0 0 1.986l.117 .007h10l.117 -.007a1 1 0 0 0 0 -1.986l-.117 -.007zm0 -4h-10l-.117 .007a1 1 0 0 0 0 1.986l.117 .007h10l.117 -.007a1 1 0 0 0 0 -1.986l-.117 -.007zm0 -4h-10l-.117 .007a1 1 0 0 0 0 1.986l.117 .007h10l.117 -.007a1 1 0 0 0 0 -1.986l-.117 -.007z"/>
            </g>
        </svg>';
    }

    return null;
}

// Hardcoded (not read from disk, not fetched cross-domain) -- Keitaro
// 404s every path but "/" on the newsnik domains, so both the deploy-zip
// bundled file and the cross-domain fetch fallback were fragile (broke
// silently whenever a zip got rebuilt without them). These 3 domains are
// fixed constants, so their icons are baked into the template instead.
define('NEWSNIK1_FAVICON_DATA_URI', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAFhElEQVR42u2aW2xUVRSGv7XPtGWGmYIFRMEiiJrGiAo2agQT0RgiCYkaIRptRR80YgJiDCaaaPXBB4w3IKDGEGnxRqOJadSoBDCEiKYKEUgU0dICrYhMO5fOpXPOXj4UEwY6bWfs2CFhPZ7sOfN/Z/9n77XWPnA+RjekmDcPflV3IUB8QdMJQM8NgC2L/YFA4Coj8rJgbgMVhe3W02cTUn6ARe8kShPg7UfLQtPcG/G0DuFeoCp7gHYj0ozVzbFj5bt57J1MaQA0NJhQbftNGJ5GueWUcJNjtAXCwC6U1bHWS3fT0GD/XwBtMBds7Qyp23dBxpN5RngcuBFw8ryTh/KDiG4whp2k6Om5a3oUyQ9oaIDtDb5AunOSL5OqxpjLrVIjRmYDc1CmjJCRO1HZo6J7jXIAa353K/Roos13YiirDQhQ2VJ/A45Th1KjMAUIAAFEAqgdC1Kk1UsVMb2oJoAEkBDoBP0Vaxujixp/GBxgy2InFAgtBX0DIVhSC74SB10RS/RuYkmz9+/lrJfN7/dfhNhVJSe+/1EHEVnl9/svOv1yFkCZY6pBLi/hjfeKfo05ABC8QZbAUgiDi5cTQK2NgKRLGCCtjo3kBDC+8gyq8RIGiBlfeSYnQF/Sc0U0Wrr6NdaX9NycAOJlXIVYKc+AeJncAE55IAOm6ACTykPMHjcdnzh5A/RrzAXg9rlQPAsZEa4fN4Nv577A1puf46mZC/GJyWczi/RrzAHQE/AyqhopFsB1ldNZM2spU/1V+MRhmn8iPuMbvn6Rnp6AlzUD2b/2xrsi8aIAzApNo2nOMi7xT0CAo8kw77ZvI+1l8phBInjjc88A8T8LslClz09NcAqTK8Zhzsjz/rXNx7XLqfZPAOBI8iT3ta5hb7QdzaPSVNVIv8ZcAEuaPYSeU4XHsH39Us1ids17kebaJ5ldOT2nbRTYF+2g7qf1/BzryPc5WZDo6YkcA6UNoiYCuMPf24Ubxs+kzDhcO+5SGucs45rQtCzbXF1ZjQDHkmFW7NvE3ujhQlzoDvR+ngXgGQ0j0jf8u1pWHmjiz3QPAlT7J/BR7XIemDp3QNv8GGnDagENCpE+HMJDAoirXaB55UPfdx/i4T1v8Uu8E4Cp/irWXvNwlm3qC7PNaQbSNCpdQwI45V679ldDecV33b+xcn8jx0/NhE9Mlm32FGab05ZQEo7rdgwJEPnuyBGx2pX/A1J2hQ/y4E/r6Up146ql47/aJrt07IykUmcBnL2X7zhsKx6cXQXcUcgfHUuF2RU+yB+9x3nlUAv7Y0dGqlxe13f3BzuHVdT7W+qnOo7TJkpZSeSgQsbzvBnJRY3HhrQQQP9A+aRkclArnwwknsHKR4N9E7S7BOSHPdE3cuvMEVHH26fKFyVgoM+TPnd/3gAsaOoV42wA6Ro98dKF6NssaOrNHwCIxaO7EX0NxY5CI8sCr8fiid2DpzKDxZJmL3Zc1yFsHIVG1sbYX3btmclbQd3p0Kf1E6gwm0HuKKALTd5da/iatFcXu6fx5NDJ5HAK0XsaT4JdAfJN0Z2jbAXfk8MRn/f5QKjl/omYMatBHgId4Q6eWNBN2NSq2KIP/y7eAcf2pWNCCVmJsgJh8gipP47lzVhQX2f+e6niHzFtv9UXTM6Ya5AnFL0TLbCbrcQF/dJiN8THduxk/g73fz0jm/jZI6F0mb0dlVeBy/JU34Y4T5WR2hZe+H50VE8pJ39VNzbh+p4HHgImDX7IJyfANo4JBF46MX/9f+7DjsiS2Lv550zfleN3VFxcuRNjyoArgPIzh4FswfJ0bGxbU2J+c6pUD7qDwWDwelFdDVJ7yi6tankmnuxtZUlz/Nz41GDLYqeismIGZY6mTyYOD7Wjno9zNf4Bk7RZKCvu+RwAAAAASUVORK5CYII=');
define('NEWSNIK2_FAVICON_DATA_URI', 'data:image/png;base64,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');
define('NEWSNIK3_FAVICON_DATA_URI', 'data:image/png;base64,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');

function q_get_favicon($domain, $brand_initials, $offer_favicon) {
    global $offer_domain, $newsnik1_domain, $newsnik2_domain, $newsnik3_domain;

    // The offer's own rows show its real favicon (or explicit override).
    if ($domain === $offer_domain) {
        $favicon_src = q_resolve_offer_favicon_url($offer_favicon, $offer_domain);
        return '<img src="' . htmlspecialchars($favicon_src) . '" style="width:100%; height:100%; border-radius:50%; object-fit:cover;" onerror="this.onerror=null; this.src=\'https://www.google.com/s2/favicons?domain=' . urlencode($offer_domain) . '&sz=64\';">';
    }

    if ($domain === $newsnik1_domain) {
        return '<img src="' . NEWSNIK1_FAVICON_DATA_URI . '" style="width:100%; height:100%; border-radius:50%; object-fit:cover;">';
    }
    if ($domain === $newsnik2_domain) {
        return '<img src="' . NEWSNIK2_FAVICON_DATA_URI . '" style="width:100%; height:100%; border-radius:50%; object-fit:cover;">';
    }
    if ($domain === $newsnik3_domain) {
        return '<img src="' . NEWSNIK3_FAVICON_DATA_URI . '" style="width:100%; height:100%; border-radius:50%; object-fit:cover;">';
    }

    $newsnik_icon = q_newsnik_icon_svg($domain, 26);
    if ($newsnik_icon !== null) {
        return $newsnik_icon;
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
$offer_favicon_google_fallback_url = q_offer_favicon_google_fallback_url($offer_domain);
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($html_lang); ?>">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($search_query . $t['search_title']); ?></title>
<meta name="robots" content="noindex, nofollow">
<link rel="icon" href="https://www.google.com/favicon.ico">
<link rel="shortcut icon" href="https://www.google.com/favicon.ico">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="qoooqle-config" data-offer-domain="<?php echo htmlspecialchars($offer_domain); ?>" style="display:none;"></div>

<script src="random-ratings.js"></script>

<header class="google-header">
    <div class="header-main-row">
        <a href="#" onclick="return false;" class="logo-link">
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" class="google-logo">
        </a>
        <div class="search-bar">
            <input type="text" value="<?= htmlspecialchars($search_query) ?>" class="search-input" readonly>
            <div class="search-bar-buttons">
                <svg class="btn-clear" viewBox="0 0 24 24" width="20" height="20" fill="#000000"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
                <div class="search-divider"></div>
                <svg class="btn-kbd" viewBox="0 -960 960 960" width="20" height="20" fill="#000000" xmlns="http://www.w3.org/2000/svg"><path fill="#000000" d="M160-200q-33 0-56.5-23.5T80-280v-400q0-33 23.5-56.5T160-760h640q33 0 56.5 23.5T880-680v400q0 33-23.5 56.5T800-200H160Zm160-120h320v-80H320v80ZM200-440h80v-80h-80v80Zm120 0h80v-80h-80v80Zm120 0h80v-80h-80v80Zm120 0h80v-80h-80v80Zm120 0h80v-80h-80v80ZM200-560h80v-80h-80v80Zm120 0h80v-80h-80v80Zm120 0h80v-80h-80v80Zm120 0h80v-80h-80v80Zm120 0h80v-80h-80v80Z"/></svg>
                <svg class="btn-mic" viewBox="0 -960 960 960" width="20" height="20" fill="#000000" xmlns="http://www.w3.org/2000/svg"><path fill="#000000" d="M480-400q-50 0-85-35t-35-85v-240q0-50 35-85t85-35q50 0 85 35t35 85v240q0 50-35 85t-85 35Zm-40 280v-123q-104-14-172-93t-68-184h80q0 83 58.5 141.5T480-320q83 0 141.5-58.5T680-520h80q0 105-68 184t-172 93v123h-80Z"/></svg>
                <svg class="btn-lens" aria-hidden="true" focusable="false" viewBox="0 -960 960 960" width="20" height="20" fill="#000000" xmlns="http://www.w3.org/2000/svg"><path fill="#000000" d="M480-320q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35Zm240 160q-33 0-56.5-23.5T640-240q0-33 23.5-56.5T720-320q33 0 56.5 23.5T800-240q0 33-23.5 56.5T720-160Zm-440 40q-66 0-113-47t-47-113v-80h80v80q0 33 23.5 56.5T280-200h200v80H280Zm480-320v-160q0-33-23.5-56.5T680-680H280q-33 0-56.5 23.5T200-600v120h-80v-120q0-66 47-113t113-47h80l40-80h160l40 80h80q66 0 113 47t47 113v160h-80Z"></path></svg>
                <svg class="btn-search" viewBox="0 0 24 24" width="20" height="20" fill="#000000" xmlns="http://www.w3.org/2000/svg"><path fill="#000000" d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
            </div>
        </div>
        <div class="header-right">
            <a href="<?php echo htmlspecialchars($offer_url); ?>" class="icon-btn">
                <svg class="header-right-icon" viewBox="0 0 24 24" width="22" height="22" fill="#000000" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#000000" d="M16 5l-1.42 1.42-1.59-1.59V16h-1.98V4.83L9.42 6.42 8 5l4-4 4 4zm4 5v11c0 1.1-.9 2-2 2H6c-1.11 0-2-.9-2-2V10c0-1.11.89-2 2-2h3v2H6v11h12V10h-3V8h3c1.1 0 2 .89 2 2z"></path>
                </svg>
            </a>
            <a href="<?php echo htmlspecialchars($offer_url); ?>" class="icon-btn">
                <svg class="header-right-icon" viewBox="0 0 24 24" width="22" height="22" fill="#000000" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#000000" d="M6,8c1.1,0 2,-0.9 2,-2s-.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-.9-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-.9-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-.9-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-.9-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-.9-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-.9-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-.9-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z"></path>
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

    <?php
    ob_start();
    ?>
    <div class="panel-header-image">
        <div class="panel-brand-logo">
            <?php if (!empty($offer_favicon) && file_exists(__DIR__ . '/' . ltrim($offer_favicon, '/'))): ?>
            <img src="<?php echo htmlspecialchars($offer_favicon); ?>" alt="<?php echo htmlspecialchars($brand_name); ?>" style="width:44px;height:44px;border-radius:8px;">
            <?php else: ?>
            <img src="<?php echo htmlspecialchars($offer_favicon_url); ?>" alt="<?php echo htmlspecialchars($brand_name); ?>" style="width:44px;height:44px;border-radius:8px; object-fit:cover;" onerror="this.onerror=null; this.src='<?php echo htmlspecialchars($offer_favicon_google_fallback_url, ENT_QUOTES); ?>';">
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
                <?php echo htmlspecialchars($t['official_website_label']); ?> → <?php echo htmlspecialchars($offer_domain); ?>
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
    <?php
    $knowledge_panel_inner = ob_get_clean();
    ?>

    <div class="serp-layout">
        <div class="left-column">
            <?php foreach ($results as $r_index => $r): ?>
            <div class="result-item">
                <a class="result-link" href="<?php echo htmlspecialchars($r['url']); ?>">
                    <div class="result-source">
                        <div class="icon-circle" style="background:#ffffff; border:1px solid var(--border-color); display:flex; align-items:center; justify-content:center; flex-shrink:0;">
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
            <?php if ($r_index === 0): ?>
            <div class="knowledge-panel knowledge-panel-mobile">
                <?php echo $knowledge_panel_inner; ?>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>

            <div class="related-searches">
                <h3><?php echo htmlspecialchars($t['related_title']); ?></h3>
                <div class="related-pills">
                    <?php foreach ($related as $rel):
                        // Hardcoded, not derived from $_SERVER['SCRIPT_NAME'] — Keitaro's
                        // local_file routing doesn't reflect the real filename there, it
                        // reflects its own internal request path (e.g. "/testqoooqle-com"),
                        // which caused these links to 404.
                        // Pull from the session-aware helper (not raw $_GET) — by the time
                        // these pills render, the page's own URL only ever has ?q= (the
                        // context-storage redirect above strips everything else), so a
                        // plain isset($_GET[...]) check here was always false and the
                        // pills silently dropped host/brand/geo on every click.
                        $pill_url = 'index.php?q=' . urlencode($rel) . '&lang=' . urlencode($lang);
                        $pill_host = qoooqle_get_context_value('host', '');
                        $pill_geo = qoooqle_get_context_value('geo', '');
                        $pill_brand = qoooqle_get_context_value('brand', '');
                        $pill_register_path = qoooqle_get_context_value('register_path', '');
                        $pill_about_path = qoooqle_get_context_value('about_path', '');
                        if ($pill_host !== '') $pill_url .= '&host=' . urlencode($pill_host);
                        if ($pill_geo !== '') $pill_url .= '&geo=' . urlencode($pill_geo);
                        if ($pill_brand !== '') $pill_url .= '&brand=' . urlencode($pill_brand);
                        if ($pill_register_path !== '') $pill_url .= '&register_path=' . urlencode($pill_register_path);
                        if ($pill_about_path !== '') $pill_url .= '&about_path=' . urlencode($pill_about_path);
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
            <div class="knowledge-panel knowledge-panel-desktop">
                <?php echo $knowledge_panel_inner; ?>
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
