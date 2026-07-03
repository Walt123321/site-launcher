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
}

// --- Newsnik domains (placeholders — real domains TBD) ---
$newsnik1_domain  = "newsnik1-placeholder.com";
$newsnik2_domain  = "newsnik2-placeholder.com";
$newsnik3_domain  = "newsnik3-placeholder.com";

// --- For local testing / standard deployment: relative paths to newsnik pages ---
$newsnik1_url     = "newsnik1/index.php";
$newsnik2_url     = "newsnik2/index.php";
$newsnik3_url     = "newsnik3/index.php";

// ============================================================
// LANGUAGE VALIDATION
// ============================================================
$supported_langs = ['en','es','it','fr','de','pt','nl','tr','cz','pl','ro','no','sv'];

function get_active_lang($config_lang, $query_lang = null) {
    global $supported_langs;
    $lang = $query_lang ?: $config_lang;
    $lang = strtolower(trim($lang));
    if ($lang === 'cs') $lang = 'cz';
    $lang = preg_split('/[-–—_\s]+/u', $lang)[0];
    return in_array($lang, $supported_langs) ? $lang : 'en';
}
