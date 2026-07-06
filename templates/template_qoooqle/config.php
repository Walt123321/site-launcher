<?php
// ============================================================
// QOOOQLE — Central Configuration (Template Version)
// ============================================================
// Placeholders are replaced dynamically during site generation.

// --- Brand / Offer ---
$brand_name       = "{{BRAND}}";                              // Brand name (replaced dynamically)
$offer_url        = "{{SITE_URL}}";                           // Main offer homepage (replaced dynamically)
$offer_register_url = "{{SITE_URL}}/register.php";             // Registration page
$offer_about_url  = "{{SITE_URL}}/about.php";                  // About Us page
$offer_domain     = "{{DOMAIN}}";                             // Offer domain (replaced dynamically)
$offer_favicon    = "";                                       // Path to brand favicon (optional)
$min_deposit      = "{{MIN_DEPOSIT}}";                        // Minimum deposit amount
$deposit_currency = "{{DEPOSIT_CURRENCY}}";                  // Deposit currency
$founded_year     = "2021";                                   // Knowledge panel "Founded" value

// --- Offer language ---
$offer_lang       = "{{LANG}}";                               // Offer language (replaced dynamically)

// --- Newsnik domains (purchased) ---
$newsnik1_domain  = "crypto-portal.net";
$newsnik2_domain  = "currentpulse.org";
$newsnik3_domain  = "cryptonewshubb.com";

// --- Production absolute URLs to newsniks ---
$newsnik1_url     = "https://" . $newsnik1_domain . "/index.php";
$newsnik2_url     = "https://" . $newsnik2_domain . "/index.php";
$newsnik3_url     = "https://" . $newsnik3_domain . "/index.php";

// --- Local Raw Testing Fallback ---
if ($brand_name === '{{' . 'BRAND}}' || $offer_lang === '{{' . 'LANG}}') {
    $test_file = __DIR__ . '/last_local_test.json';
    if (file_exists($test_file)) {
        $test_data = json_decode(file_get_contents($test_file), true);
        if ($test_data) {
            $brand_name = $test_data['brand'] ?? 'Test';
            $offer_lang = $test_data['lang'] ?? 'en';
            $offer_domain = $test_data['domain'] ?? 'test-official.com';
            $offer_url = "https://" . $offer_domain;
            $offer_register_url = $offer_url . "/register.php";
            $offer_about_url = $offer_url . "/about.php";
        }
    } else {
        $brand_name = 'Test';
        $offer_lang = 'en';
        $offer_domain = 'test-official.com';
        $offer_url = 'https://test-official.com';
        $offer_register_url = 'https://test-official.com/register.php';
        $offer_about_url = 'https://test-official.com/about.php';
    }

    // For local raw testing, override absolute URLs with relative paths
    $newsnik1_url     = "newsnik1/index.php";
    $newsnik2_url     = "newsnik2/index.php";
    $newsnik3_url     = "newsnik3/index.php";
}

// Standalone newsnik deployments ship this config.php unrendered (no specific
// offer to bind to), so MIN_DEPOSIT/DEPOSIT_CURRENCY need a generic fallback
// instead of leaking the literal placeholder text into the page.
if ($min_deposit === '{{' . 'MIN_DEPOSIT}}') {
    $min_deposit = '250';
}
if ($deposit_currency === '{{' . 'DEPOSIT_CURRENCY}}') {
    $deposit_currency = 'USD';
}

// ============================================================
// LANGUAGE VALIDATION
// ============================================================
$supported_langs = ['en','es','it','fr','de','pt','nl','tr','cz','pl','ro','no','sv'];

function get_active_lang($config_lang, $query_lang = null) {
    global $supported_langs;
    // Prioritize the template config language over query parameters to prevent Keitaro overrides
    $lang = ($config_lang && $config_lang !== '{{' . 'LANG}}') ? $config_lang : ($query_lang ?: 'en');
    $lang = strtolower(trim($lang));
    if ($lang === 'cs') $lang = 'cz';
    $lang = preg_split('/[-–—_\s]+/u', $lang)[0];
    return in_array($lang, $supported_langs) ? $lang : 'en';
}
