<?php
if (strpos($_SERVER['HTTP_HOST'], 'www.') === 0) {
    $host = substr($_SERVER['HTTP_HOST'], 4);
    header("Location: https://" . $host . $_SERVER['REQUEST_URI'], true, 301);
    exit();
}

session_start();
if (empty($_SESSION['js_token'])) {
    $_SESSION['js_token'] = bin2hex(random_bytes(16));
}
$jsToken = $_SESSION['js_token'];

include_once 'indexnow.php';

require_once 'offer_seo.php';
include 'lang.php';

$host = $_SERVER['HTTP_HOST'];
$uri = strtok($_SERVER['REQUEST_URI'], '?'); 

if (strpos(strtolower($uri), '/lander/') !== false && basename($uri) === 'index.php') {
    $canonical = 'https://' . $host . '/';
}
else {
    $canonical = 'https://' . $host . $uri;
}
?>


<!DOCTYPE html>
<html lang="<?= $site_lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="<?= $canonical ?>">
    <title><?= $home_meta_title ?></title>
    <meta name="description" content="<?= $home_meta_description ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="./favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $site_name ?> | Advanced AI Trading Platform">
    <meta property="og:description" content="Access global cryptocurrency markets with institutional low-latency execution, automated AI trading models, and multi-tenant secure    core infrastructure.">
    <meta property="og:image" content="./app_cryptocurrency.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="480">
    <meta property="og:image:height" content="800">
    <meta property="og:site_name" content="<?= $site_name ?>">
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $site_name ?> | Advanced AI Trading Platform">
    <meta name="twitter:description" content="Access global cryptocurrency markets with institutional low-latency execution, automated AI trading models, and multi-tenant  secure core infrastructure.">
    <meta name="twitter:image" content="./app_cryptocurrency.png">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "@id": "<?= $site_url ?>/#organization",
          "name": "<?= $site_name ?>",
          "url": "<?= $site_url ?>"
        },
        {
          "@type": "WebSite",
          "@id": "<?= $site_url ?>/#website",
          "url": "<?= $site_url ?>",
          "name": "<?= $site_name ?>"
        }
      ]
    }
    </script>
    <script type="application/ld+json">
    {
    "@context": "https://schema.org/",
    "@type": "BreadcrumbList",
    "name": "<?= $site_name ?>",
    "itemListElement": [
        {
        "@type": "ListItem",
        "position": 1,
        "name": "<?= $site_name ?>",
        "item": "<?= $site_url ?>"
        },
        {
        "@type": "ListItem",
        "position": 2,
        "name": "🔥 <?= $site_name ?> 🔥",
        "item": "<?= $site_url ?>/#heading-style-h1"
        }
    ]
    }
    </script>
    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "SoftwareApplication",
    "name": "<?= $site_name ?>",
    "operatingSystem": "ANDROID, iOS",
    "applicationCategory": "FinanceApplication",
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "<?= $rating_value ?>",
        "ratingCount": "<?= $rating_count ?>"
    },
    "offers": {
        "@type": "Offer",
        "price": "<?= $app_price ?>",
        "priceCurrency": "<?= $app_currency ?>"
    }
    }
    </script>



    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./integration/default-integration.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/css/intlTelInput.css">
</head>
<body data-theme="dark">

<?php include 'includes/header.php'; ?>

    <section class="hero-section" id="signup">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content">
                    <h1><?= $hero_heading_before ?> <span class="text-accent"><?= $hero_heading_accent ?></span></h1>
    
                    <p class="hero-desc"><?= $hero_description ?></p>
    
                    <div class="hero-actions">
                        <a href="#signup-form-anchor" class="btn btn-primary">
                            <?= $hero_primary_button ?> — <?= $app_price ?> <?= $app_currency ?>
                        </a>
    
                        <a href="#features" class="btn btn-secondary">
                            <?= $hero_secondary_button ?>
                        </a>
                    </div>
    
                    <div class="trust-badges">
                        <div class="badge-item">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            </svg>
                            <?= $hero_badge_ssl ?>
                        </div>
    
                        <div class="badge-item">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <?= $hero_badge_guided ?>
                        </div>
                    </div>
                </div>
    
                <div class="hero-form-container" id="signup-form-anchor">
                    <div class="signup-card" id="mainSignupCard">
    
                        <h3 style="text-align:center;"><?= $signup_heading ?></h3>
    
                        <p class="form-subtitle">
                            <?= $signup_subtitle ?>
                        </p>
    
                        <form class="leadform rf-form js-rf-form" action="./integration/send.php" method="POST">

                            <input type="hidden" name="js_token" value="<?= $jsToken ?>">
                            <div style="position:absolute; left:-9999px; opacity:0; height:0; overflow:hidden;">
                                <input type="text" name="website" tabindex="-1" autocomplete="off">
                                <input type="text" name="company" style="position:absolute; left:-9999px;">
                            </div>
                            <input type="hidden" name="country" value="<?= $form_country ?>">
                            <input type="hidden" name="language" value="<?= $form_language ?>">
                            <input type="hidden" name="phone_country" value="<?= $form_phone_country ?>">
                            <input type="hidden" name="only_countries" value='<?= $form_only_countries ?>'>

                            <div class="form-preloader hidden">
                                <svg width="50" height="50" class="spinner" viewBox="0 0 50 50">
                                    <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
                                </svg>
                            </div>

                            <div class="form-grid">

                                <div class="form-group">
                                    <label for="fname"><?= $form_first_name_label ?></label>
                                    <input
                                        type="text"
                                        id="fname"
                                        name="fname"
                                        placeholder="<?= $form_first_name_placeholder ?>"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="lname"><?= $form_last_name_label ?></label>
                                    <input
                                        type="text"
                                        id="lname"
                                        name="lname"
                                        placeholder="<?= $form_last_name_placeholder ?>"
                                        required>
                                </div>

                            </div>

                            <div class="form-group form-group-full">
                                <label for="email"><?= $form_email_label ?></label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    placeholder="<?= $form_email_placeholder ?>"
                                    required>
                            </div>

                            <div class="form-group form-group-full">
                                <label for="phone"><?= $form_phone_label ?></label>

                                <input
                                    type="tel"
                                    id="phone"
                                    name="fullphone"
                                    placeholder="<?= $form_phone_placeholder ?>"
                                    required>
                                <span class="error-msg hide"></span>
                            </div>

                            <button type="submit" class="btn btn-primary form-btn">
                                <?= $form_submit_button ?>
                            </button>

                            <div class="trust-payment-icons">
                                <span class="trust-chip" style="background:#FFFFFF; display:inline-flex; align-items:center; justify-content:center; border-radius:6px; padding:5px 8px; box-shadow:0 1px 3px rgba(0,0,0,0.15);"><img src="./visa.png" alt="Visa" loading="lazy"></span>
                                <span class="trust-chip" style="background:#FFFFFF; display:inline-flex; align-items:center; justify-content:center; border-radius:6px; padding:5px 8px; box-shadow:0 1px 3px rgba(0,0,0,0.15);"><img src="./mastercard.png" alt="Mastercard" loading="lazy"></span>
                                <span class="trust-chip" style="background:#FFFFFF; display:inline-flex; align-items:center; justify-content:center; border-radius:6px; padding:5px 8px; box-shadow:0 1px 3px rgba(0,0,0,0.15);"><img src="./paypal.png" alt="PayPal" loading="lazy"></span>
                                <span class="trust-chip" style="background:#FFFFFF; display:inline-flex; align-items:center; justify-content:center; border-radius:6px; padding:5px 8px; box-shadow:0 1px 3px rgba(0,0,0,0.15);"><img src="./applepay.svg" alt="Apple Pay" loading="lazy"></span>
                                <span class="trust-chip" style="background:#FFFFFF; display:inline-flex; align-items:center; justify-content:center; border-radius:6px; padding:5px 8px; box-shadow:0 1px 3px rgba(0,0,0,0.15);"><img src="./googlepay.svg" alt="Google Pay" loading="lazy"></span>
                                <span class="trust-chip" style="background:#FFFFFF; display:inline-flex; align-items:center; justify-content:center; border-radius:6px; padding:5px 8px; box-shadow:0 1px 3px rgba(0,0,0,0.15);"><img src="./sepa.svg" alt="SEPA" loading="lazy"></span>
                            </div>

                            <p class="form-legal">
                                <?= $form_legal_before ?>
                                <a href="conditions.php">
                                    <?= $form_terms_text ?>
                                </a>.
                            </p>

                        </form>
    
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="stats-bar">
        <div class="container">
            <div class="stats-grid">
    
                <div class="stat-card">
                    <div class="stat-icon-box">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 3v18h18"/>
                            <path d="m18.7 8-5.1 5.2-2.8-2.7L7 14.3"/>
                        </svg>
                    </div>
                    <div>
                        <div class="stat-value"><?= $stats_value_assets ?></div>
                        <div class="stat-label"><?= $stats_label_assets ?></div>
                    </div>
                </div>
    
                <div class="stat-card">
                    <div class="stat-icon-box">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="stat-value"><?= $stats_value_setup ?></div>
                        <div class="stat-label"><?= $stats_label_setup ?></div>
                    </div>
                </div>
    
                <div class="stat-card">
                    <div class="stat-icon-box">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38    8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="stat-value"><?= $stats_value_support ?></div>
                        <div class="stat-label"><?= $stats_label_support ?></div>
                    </div>
                </div>
    
                <div class="stat-card">
                    <div class="stat-icon-box">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                        </svg>
                    </div>
                    <div>
                        <div class="stat-value"><?= $stats_value_security ?></div>
                        <div class="stat-label"><?= $stats_label_security ?></div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>

    <section class="section-soft" id="platform">
        <div class="container">
            <div class="product-grid">
                <div>
                    <div class="section-label"><?= $platform_section_label ?></div>
    
                    <h2 class="section-title">
                        <?= $platform_title_before ?><br>
                        <span class="text-accent"><?= $platform_title_accent ?></span>
                    </h2>
    
                    <p class="section-subtitle"><?= $platform_subtitle ?></p>
                    
                    <ul class="check-list">
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <?= $platform_check_1 ?>
                        </li>
    
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <?= $platform_check_2 ?>
                        </li>
                    </ul>
                    
                    <div class="platform-cta-wrap">
                        <a href="#features" class="btn btn-primary">
                            <?= $platform_cta_button ?>
                        </a>
                    </div>
                </div>
                
                <div>
                    <div class="mockup-container">
                        <div class="mockup-cta-overlay" id="mockupOverlay">
                            <div class="overlay-content">
                                <h4 id="overlayHeadline"><?= $mockup_overlay_headline ?></h4>
                                <p><?= $mockup_overlay_text ?></p>
                                <button class="btn btn-primary" onclick="redirectToForm()">
                                    <?= $mockup_overlay_button ?>
                                </button>
                            </div>
                        </div>
    
                        <div class="mockup-header">
                            <span class="mockup-title"><?= $mockup_dashboard_title ?></span>
                            <span style="display:inline-flex; align-items:center; gap:6px; font-size:12px; font-weight:700; color:var(--color-success);">
                                <span style="width:6px; height:6px; background-color:var(--color-success); border-radius:50%;"></span>
                                LIVE
                            </span>
                        </div>
    
                        <div class="mockup-asset-value" id="mockupPrice">$67,420.50</div>
    
                        <div id="mockupChange" style="color: var(--color-success); font-weight: 700; font-size: 15px; margin-top: 4px;">
                            +0.15% <?= $mockup_today ?>
                        </div>
                        
                        <div class="mockup-chart-placeholder" id="mockupChart">
                            <div class="chart-track" id="mockupChartTrack">
                                <div class="chart-bar" style="height: 60%;"></div>
                                <div class="chart-bar" style="height: 55%;"></div>
                                <div class="chart-bar" style="height: 65%;"></div>
                                <div class="chart-bar" style="height: 70%;"></div>
                                <div class="chart-bar" style="height: 85%;"></div>
                                <div class="chart-bar" style="height: 80%;"></div>
                                <div class="chart-bar" style="height: 75%;"></div>
                            </div>
                        </div>
                        
                        <div class="mockup-actions">
                            <button class="mockup-btn m-btn-sell" onclick="handleMockClick('<?= $mockup_sell_button ?>')">
                                <?= $mockup_sell_button ?>
                            </button>
    
                            <button class="mockup-btn m-btn-buy" onclick="handleMockClick('<?= $mockup_buy_button ?>')">
                                <?= $mockup_buy_button ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="features">
        <div class="container">
            <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
                <div class="section-label"><?= $features_section_label ?></div>
    
                <h2 class="section-title"><?= $features_title ?></h2>
    
                <p class="section-subtitle"><?= $features_subtitle ?></p>
            </div>
    
            <div class="features-grid">
                <div class="card">
                    <div class="feature-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                    <h3><?= $feature_1_title ?></h3>
                    <p><?= $feature_1_text ?></p>
                </div>
    
                <div class="card">
                    <div class="feature-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M12 16v-4"/>
                            <path d="M12 8h.01"/>
                        </svg>
                    </div>
                    <h3><?= $feature_2_title ?></h3>
                    <p><?= $feature_2_text ?></p>
                </div>
    
                <div class="card">
                    <div class="feature-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                        </svg>
                    </div>
                    <h3><?= $feature_3_title ?></h3>
                    <p><?= $feature_3_text ?></p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-soft" id="markets">
        <div class="container">
            <div class="markets-grid">
                <div>
                    <div class="section-label"><?= $markets_section_label ?></div>
    
                    <h2 class="section-title"><?= $markets_title ?></h2>
    
                    <p class="section-subtitle"><?= $markets_subtitle ?></p>
    
                    <div class="ai-explain-box">
                        <p>
                            <strong><?= $markets_ai_box_title ?></strong>
                            <?= $markets_ai_box_text ?>
                        </p>
                    </div>
    
                    <div class="markets-cta-wrap">
                        <a href="#signup" class="btn btn-primary">
                            <?= $markets_cta_button ?>
                        </a>
                    </div>
                </div>
    
                <div>
                    <div class="market-widget">
                        <div class="widget-header">
                            <span><?= $markets_table_asset ?></span>
                            <span style="text-align:right; padding-right:16px;"><?= $markets_table_price ?></span>
                            <span style="text-align:right;"><?= $markets_table_change ?></span>
                        </div>
    
                        <div class="market-row">
                            <div class="asset-info">
                                <span class="asset-ticker">BTC</span>
                                <span class="asset-fullname">Bitcoin</span>
                            </div>
                            <div class="asset-price" id="t-btc-p">$67,420.50</div>
                            <div class="asset-change trend-up" id="t-btc-c">+0.15%</div>
                        </div>
    
                        <div class="market-row">
                            <div class="asset-info">
                                <span class="asset-ticker">ETH</span>
                                <span class="asset-fullname">Ethereum</span>
                            </div>
                            <div class="asset-price" id="t-eth-p">$3,450.25</div>
                            <div class="asset-change trend-up" id="t-eth-c">+2.10%</div>
                        </div>
    
                        <div class="market-row">
                            <div class="asset-info">
                                <span class="asset-ticker">SOL</span>
                                <span class="asset-fullname">Solana</span>
                            </div>
                            <div class="asset-price" id="t-sol-p">$184.80</div>
                            <div class="asset-change trend-down" id="t-sol-c">-0.65%</div>
                        </div>
    
                        <div class="market-row">
                            <div class="asset-info">
                                <span class="asset-ticker">BNB</span>
                                <span class="asset-fullname">BNB Chain</span>
                            </div>
                            <div class="asset-price" id="t-bnb-p">$582.40</div>
                            <div class="asset-change trend-up" id="t-bnb-c">+1.05%</div>
                        </div>
    
                        <div class="market-row">
                            <div class="asset-info">
                                <span class="asset-ticker">XRP</span>
                                <span class="asset-fullname">Ripple</span>
                            </div>
                            <div class="asset-price" id="t-xrp-p">$0.5920</div>
                            <div class="asset-change trend-down" id="t-xrp-c">-1.42%</div>
                        </div>
    
                        <div class="market-row">
                            <div class="asset-info">
                                <span class="asset-ticker">ADA</span>
                                <span class="asset-fullname">Cardano</span>
                            </div>
                            <div class="asset-price" id="t-ada-p">$0.4850</div>
                            <div class="asset-change trend-up" id="t-ada-c">+0.88%</div>
                        </div>
    
                        <div class="market-row">
                            <div class="asset-info">
                                <span class="asset-ticker">DOT</span>
                                <span class="asset-fullname">Polkadot</span>
                            </div>
                            <div class="asset-price" id="t-dot-p">$6.75</div>
                            <div class="asset-change trend-down" id="t-dot-c">-0.12%</div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="onboarding">
        <div class="container">
            <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
                <div class="section-label"><?= $onboarding_section_label ?></div>
    
                <h2 class="section-title"><?= $onboarding_title ?></h2>
    
                <p class="section-subtitle"><?= $onboarding_subtitle ?></p>
            </div>
            
            <div class="steps-container">
                <div class="steps-connecting-line"></div>
    
                <div class="steps-grid">
    
                    <div class="step-card">
                        <div class="step-number">1</div>
                        <h3><?= $onboarding_step_1_title ?></h3>
                        <p><?= $onboarding_step_1_text ?></p>
                    </div>
    
                    <div class="step-card">
                        <div class="step-number">2</div>
                        <h3><?= $onboarding_step_2_title ?></h3>
                        <p><?= $onboarding_step_2_text ?></p>
                    </div>
    
                    <div class="step-card">
                        <div class="step-number">3</div>
                        <h3><?= $onboarding_step_3_title ?></h3>
                        <p><?= $onboarding_step_3_text ?></p>
                    </div>
    
                    <div class="step-card">
                        <div class="step-number">4</div>
                        <h3><?= $onboarding_step_4_title ?></h3>
                        <p><?= $onboarding_step_4_text ?></p>
                    </div>
    
                </div>
            </div>
        </div>
    </section>

    <section id="mobile-app">
        <div class="container">
            <div class="app-promo-grid">
                <div class="app-promo-visual">
                    <div class="app-glow"></div>
    
                    <img
                        src="./app_cryptocurrency.png"
                        alt="<?= $mobile_app_image_alt ?>"
                        class="app-phone-image"
                        width="320"
                        height="640"
                        loading="lazy"
                        decoding="async">
                </div>
    
                <div>
                    <div class="section-label"><?= $mobile_app_section_label ?></div>
    
                    <h2 class="section-title"><?= $mobile_app_title ?></h2>
    
                    <p class="section-subtitle"><?= $mobile_app_subtitle ?></p>
                    
                    <ul class="check-list">
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <?= $mobile_app_check_1 ?>
                        </li>
    
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <?= $mobile_app_check_2 ?>
                        </li>
    
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <?= $mobile_app_check_3 ?>
                        </li>
                    </ul>
                    
                    <div class="app-cta-wrap">
                        <a href="#signup" class="btn btn-primary">
                            <?= $mobile_app_cta_button ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-soft" id="security">
        <div class="container">
            <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
                <div class="section-label"><?= $security_section_label ?></div>
    
                <h2 class="section-title"><?= $security_title ?></h2>
    
                <p class="section-subtitle"><?= $security_subtitle ?></p>
            </div>
    
            <div class="comparison-grid">
    
                <div class="comp-card comp-card-our">
                    <div class="comp-card-badge"><?= $site_name ?></div>
    
                    <h3><?= $security_our_title ?></h3>
    
                    <ul class="comp-list">
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <?= $security_our_item_1 ?>
                        </li>
    
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <?= $security_our_item_2 ?>
                        </li>
    
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <?= $security_our_item_3 ?>
                        </li>
    
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <?= $security_our_item_4 ?>
                        </li>
    
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <?= $security_our_item_5 ?>
                        </li>
                    </ul>
                </div>
    
                <div class="comp-card comp-card-traditional">
                    <div class="comp-card-badge comp-card-badge-muted"><?= $security_other_badge ?></div>
    
                    <h3><?= $security_other_title ?></h3>
    
                    <ul class="comp-list">
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5">
                                <line x1="18" y1="6" x2="6" y2="18"/>
                                <line x1="6" y1="6" x2="18" y2="18"/>
                            </svg>
                            <?= $security_other_item_1 ?>
                        </li>
    
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5">
                                <line x1="18" y1="6" x2="6" y2="18"/>
                                <line x1="6" y1="6" x2="18" y2="18"/>
                            </svg>
                            <?= $security_other_item_2 ?>
                        </li>
    
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5">
                                <line x1="18" y1="6" x2="6" y2="18"/>
                                <line x1="6" y1="6" x2="18" y2="18"/>
                            </svg>
                            <?= $security_other_item_3 ?>
                        </li>
    
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5">
                                <line x1="18" y1="6" x2="6" y2="18"/>
                                <line x1="6" y1="6" x2="18" y2="18"/>
                            </svg>
                            <?= $security_other_item_4 ?>
                        </li>
    
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5">
                                <line x1="18" y1="6" x2="6" y2="18"/>
                                <line x1="6" y1="6" x2="18" y2="18"/>
                            </svg>
                            <?= $security_other_item_5 ?>
                        </li>
                    </ul>
                </div>
    
            </div>
    
            <p class="comp-disclaimer"><?= $security_disclaimer ?></p>
        </div>
    </section>
    <section>
        <div class="container">
            <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
                <h2 class="section-title"><?= $capabilities_title ?></h2>
                <p class="section-subtitle"><?= $capabilities_subtitle ?></p>
            </div>
            
            <div class="table-wrapper">
                <table class="cap-table">
                    <thead>
                        <tr>
                            <th><?= $capability_table_col_1 ?></th>
                            <th><?= $capability_table_col_2 ?></th>
                            <th class="cap-table-center"><?= $capability_table_col_3 ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong><?= $capability_1_title ?></strong></td>
                            <td><?= $capability_1_text ?></td>
                            <td class="cap-table-center"><span class="cap-check" aria-label="<?= $capability_check_aria ?>">✓</span></td>
                        </tr>
    
                        <tr>
                            <td><strong><?= $capability_2_title ?></strong></td>
                            <td><?= $capability_2_text ?></td>
                            <td class="cap-table-center"><span class="cap-check" aria-label="<?= $capability_check_aria ?>">✓</span></td>
                        </tr>
    
                        <tr>
                            <td><strong><?= $capability_3_title ?></strong></td>
                            <td><?= $capability_3_text ?></td>
                            <td class="cap-table-center"><span class="cap-check" aria-label="<?= $capability_check_aria ?>">✓</span></td>
                        </tr>
    
                        <tr>
                            <td><strong><?= $capability_4_title ?></strong></td>
                            <td><?= $capability_4_text ?></td>
                            <td class="cap-table-center"><span class="cap-check" aria-label="<?= $capability_check_aria ?>">✓</span></td>
                        </tr>
    
                        <tr>
                            <td><strong><?= $capability_5_title ?></strong></td>
                            <td><?= $capability_5_text ?></td>
                            <td class="cap-table-center"><span class="cap-check" aria-label="<?= $capability_check_aria ?>">✓</span></td>
                        </tr>
    
                        <tr>
                            <td><strong><?= $capability_6_title ?></strong></td>
                            <td><?= $capability_6_text ?></td>
                            <td class="cap-table-center"><span class="cap-check" aria-label="<?= $capability_check_aria ?>">✓</span></td>
                        </tr>
    
                        <tr class="highlighted-row">
                            <td><strong><?= $capability_7_title ?></strong></td>
                            <td><?= $capability_7_text ?></td>
                            <td class="cap-table-center"><span class="cap-check" aria-label="<?= $capability_check_aria ?>">✓</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    
    <section class="section-soft" id="payments">
        <div class="container payment-container">
            <div class="section-label" style="justify-content: center;"><?= $payments_section_label ?></div>
    
            <h2 class="section-title"><?= $payments_title ?></h2>
    
            <p class="section-subtitle" style="margin-left:auto; margin-right:auto;">
                <?= $payments_subtitle ?>
            </p>
    
            <ul class="payment-icons-list" role="list" aria-label="<?= $payments_aria_label ?>">
    
                <li class="payment-chip">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <rect x="2" y="5" width="20" height="14" rx="2.5"/>
                        <path d="M2 10h20"/>
                    </svg>
                    <span>Visa</span>
                </li>
    
                <li class="payment-chip">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <circle cx="9" cy="12" r="6"/>
                        <circle cx="15" cy="12" r="6"/>
                    </svg>
                    <span>Mastercard</span>
                </li>
    
                <li class="payment-chip">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M6 3h9a5 5 0 0 1 0 10H9l-1 8H4z"/>
                    </svg>
                    <span>PayPal</span>
                </li>
    
                <li class="payment-chip">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M12 2a5 5 0 0 0-5 5v3H5a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-8a2 2 0 0 0-2-2h-2V7a5 5 0 0 0-5-5z"/>
                    </svg>
                    <span>Apple Pay</span>
                </li>
    
                <li class="payment-chip">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <circle cx="12" cy="12" r="9"/>
                        <path d="M12 8v8M8 12h8"/>
                    </svg>
                    <span>Google Pay</span>
                </li>
    
                <li class="payment-chip">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <rect x="3" y="10" width="18" height="9" rx="1"/>
                        <path d="M3 10 12 4l9 6"/>
                        <path d="M7 10v9M12 10v9M17 10v9"/>
                    </svg>
                    <span><?= $payment_method_bank_transfer ?></span>
                </li>
    
                <li class="payment-chip">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M12 2s8-4 8 5c0 6-8 10-8 10s-8-4-8-10c0-9 8-5 8-5z"/>
                        <path d="M9.5 12l1.8 1.8L15 10"/>
                    </svg>
                    <span><?= $payment_method_ssl ?></span>
                </li>
    
            </ul>
        </div>
    </section>

    <section id="partners">
        <div class="container">
            <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
                <div class="section-label"><?= $partners_section_label ?></div>
                <h2 class="section-title"><?= $partners_title ?></h2>
            </div>
    
            <ul class="partners-grid" role="list" aria-label="<?= $partners_aria_label ?>">
                <li class="partner-chip"><img src="./coinbase.png" alt="Coinbase logo" class="partner-logo" loading="lazy" decoding="async"><span>Coinbase</span></li>
                <li class="partner-chip"><img src="./tradingview.png" alt="TradingView logo" class="partner-logo" loading="lazy" decoding="async"><span>TradingView</span></li>
                <li class="partner-chip"><img src="./metatrader.png" alt="MetaTrader logo" class="partner-logo" loading="lazy" decoding="async"><span>MetaTrader</span></li>
                <li class="partner-chip"><img src="./visa.png" alt="Visa logo" class="partner-logo" loading="lazy" decoding="async"><span>Visa</span></li>
                <li class="partner-chip"><img src="./mastercard.png" alt="Mastercard logo" class="partner-logo" loading="lazy" decoding="async"><span>Mastercard</span></li>
                <li class="partner-chip"><img src="./paypal.png" alt="PayPal logo" class="partner-logo" loading="lazy" decoding="async"><span>PayPal</span></li>
                <li class="partner-chip"><img src="./swift.png" alt="SWIFT Network logo" class="partner-logo" loading="lazy" decoding="async"><span>SWIFT Network</span></li>
                <li class="partner-chip"><img src="./cloudflare.png" alt="Cloudflare logo" class="partner-logo" loading="lazy" decoding="async"><span>Cloudflare</span></li>
            </ul>
        </div>
    </section>
    
    <section class="section-soft" id="reviews">
        <div class="container">
            <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
                <div class="section-label"><?= $reviews_section_label ?></div>
                <h2 class="section-title"><?= $reviews_title ?></h2>
                <p class="section-subtitle"><?= $reviews_subtitle ?></p>
            </div>
            
            <div class="reviews-grid">
                <div class="review-card">
                    <div>
                        <div class="stars-container" aria-label="5 out of 5 stars">★★★★★</div>
                        <p class="review-text"><?= $review_1_text ?></p>
                    </div>
                    <div class="reviewer-info">
                        <div class="reviewer-avatar">MT</div>
                        <div class="reviewer-meta">
                            <h4>Michael Turner</h4>
                            <p><?= $review_1_role ?> • UK 🇬🇧</p>
                        </div>
                    </div>
                </div>
                
                <div class="review-card">
                    <div>
                        <div class="stars-container" aria-label="5 out of 5 stars">★★★★★</div>
                        <p class="review-text"><?= $review_2_text ?></p>
                    </div>
                    <div class="reviewer-info">
                        <div class="reviewer-avatar">AM</div>
                        <div class="reviewer-meta">
                            <h4>Anna Mitchell</h4>
                            <p><?= $review_2_role ?>  • Canada 🇨🇦</p>
                        </div>
                    </div>
                </div>
    
                <div class="review-card">
                    <div>
                        <div class="stars-container" aria-label="5 out of 5 stars">★★★★★</div>
                        <p class="review-text"><?= $review_3_text ?></p>
                    </div>
                    <div class="reviewer-info">
                        <div class="reviewer-avatar">DK</div>
                        <div class="reviewer-meta">
                            <h4>David Kovacs</h4>
                            <p><?= $review_3_role ?> • Germany 🇩🇪</p>
                        </div>
                    </div>
                </div>
    
                <div class="review-card">
                    <div>
                        <div class="stars-container" aria-label="5 out of 5 stars">★★★★★</div>
                        <p class="review-text"><?= $review_4_text ?></p>
                    </div>
                    <div class="reviewer-info">
                        <div class="reviewer-avatar">EL</div>
                        <div class="reviewer-meta">
                            <h4>Elena Laurent</h4>
                            <p><?= $review_4_role ?>  • France 🇫🇷</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="seo-content">
                <h2 style="font-size: 38px; margin-bottom: 28px; font-weight: 800;">
                    <?= $seo_content_title ?>
                </h2>
    
                <p class="seo-intro">
                    <?= $seo_content_intro ?>
                </p>
                
                <div class="seo-text-grid">
    
                    <div class="seo-block">
                        <h3><?= $seo_block_1_title_before ?> <span><?= $seo_block_1_title_accent ?></span></h3>
    
                        <p><?= $seo_block_1_text_1 ?></p>
    
                        <p><?= $seo_block_1_text_2 ?></p>
                    </div>
    
                    <div class="seo-block">
                        <h3><?= $seo_block_2_title_before ?> <span><?= $seo_block_2_title_accent ?></span></h3>
    
                        <p><?= $seo_block_2_text_1 ?></p>
    
                        <p><?= $seo_block_2_text_2 ?></p>
                    </div>
    
                    <div class="seo-block">
                        <h3><?= $seo_block_3_title_before ?> <span><?= $seo_block_3_title_accent ?></span></h3>
    
                        <p><?= $seo_block_3_text_1 ?></p>
    
                        <p><?= $seo_block_3_text_2 ?></p>
                    </div>
    
                    <div class="seo-block">
                        <h3><?= $seo_block_4_title_before ?> <span><?= $seo_block_4_title_accent ?></span></h3>
    
                        <p><?= $seo_block_4_text_1 ?></p>
    
                        <p><?= $seo_block_4_text_2 ?></p>
                    </div>
    
                </div>
            </div>
        </div>
    </section>

    <section class="section-soft" id="faq">
        <div class="container">
            <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
                <div class="section-label"><?= $faq_section_label ?></div>
                <h2 class="section-title"><?= $faq_title ?></h2>
                <p class="section-subtitle"><?= $faq_subtitle ?></p>
            </div>
            
            <div class="faq-max-width">
                <div class="faq-item active">
                    <button class="faq-trigger">
                        <span><?= $faq_1_question ?></span>
                    <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18    9"/></svg>
                    </button>
                    <div class="faq-content" style="max-height: 200px;">
                        <p><?= $faq_1_answer ?></p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-trigger">
                        <span><?= $faq_2_question ?></span>
                    <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18    9"/></svg>
                    </button>
                    <div class="faq-content">
                        <p><?= $faq_2_answer ?></p>
                    </div>
                </div>
    
                <div class="faq-item">
                    <button class="faq-trigger">
                        <span><?= $faq_3_question ?></span>
                    <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18    9"/></svg>
                    </button>
                    <div class="faq-content">
                        <p><?= $faq_3_answer ?></p>
                    </div>
                </div>
    
                <div class="faq-item">
                    <button class="faq-trigger">
                        <span><?= $faq_4_question ?></span>
                    <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18    9"/></svg>
                    </button>
                    <div class="faq-content">
                        <p><?= $faq_4_answer ?></p>
                    </div>
                </div>
    
                <div class="faq-item">
                    <button class="faq-trigger">
                        <span><?= $faq_5_question ?></span>
                    <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18    9"/></svg>
                    </button>
                    <div class="faq-content">
                        <p><?= $faq_5_answer ?></p>
                    </div>
                </div>
    
                <div class="faq-item">
                    <button class="faq-trigger">
                        <span><?= $faq_6_question ?></span>
                    <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18    9"/></svg>
                    </button>
                    <div class="faq-content">
                        <p><?= $faq_6_answer ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section style="background-color: #0F172A;" id="final-cta">
        <div class="container">
            <div class="final-cta-grid" style="margin-bottom: 80px;">
                <div class="final-cta-content">
                    <h2><?= $final_cta_title ?></h2>
                    <p class="section-subtitle" style="color: var(--color-text-secondary);"><?= $final_cta_subtitle ?></p>
                </div>
                <div>
                    <div class="signup-card">
                        <h3 style="text-align:center;"><?= $signup_heading ?></h3>
                        <form class="leadform rf-form js-rf-form" action="./integration/send.php" method="POST">

                            <input type="hidden" name="js_token" value="<?= $jsToken ?>">
                            <div style="position:absolute; left:-9999px; opacity:0; height:0; overflow:hidden;">
                                <input type="text" name="website" tabindex="-1" autocomplete="off">
                                <input type="text" name="company" style="position:absolute; left:-9999px;">
                            </div>
                            <input type="hidden" name="country" value="<?= $form_country ?>">
                            <input type="hidden" name="language" value="<?= $form_language ?>">
                            <input type="hidden" name="phone_country" value="<?= $form_phone_country ?>">
                            <input type="hidden" name="only_countries" value='<?= $form_only_countries ?>'>

                            <div class="form-preloader hidden">
                                <svg width="50" height="50" class="spinner" viewBox="0 0 50 50">
                                    <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
                                </svg>
                            </div>

                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="fcta-fname"><?= $form_first_name_label ?></label>
                                    <input type="text" id="fcta-fname" name="fname" placeholder="<?= $form_first_name_placeholder ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="fcta-lname"><?= $form_last_name_label ?></label>
                                    <input type="text" id="fcta-lname" name="lname" placeholder="<?= $form_last_name_placeholder ?>" required>
                                </div>
                            </div>
                            <div class="form-group form-group-full">
                                <label for="fcta-email"><?= $form_email_label ?></label>
                                <input type="email" id="fcta-email" name="email" placeholder="<?= $form_email_placeholder ?>" required>
                            </div>
                            <div class="form-group form-group-full">
                                <label for="fcta-phone"><?= $form_phone_label ?></label>
                                <input type="tel" id="fcta-phone" name="fullphone" placeholder="<?= $form_phone_placeholder ?>" required>
                                <span class="error-msg hide"></span>
                            </div>
                            <button type="submit" class="btn btn-primary form-btn"><?= $form_submit_button ?></button>

                            <div class="trust-payment-icons">
                                <span class="trust-chip" style="background:#FFFFFF; display:inline-flex; align-items:center; justify-content:center; border-radius:6px; padding:5px 8px; box-shadow:0 1px 3px rgba(0,0,0,0.15);"><img src="./visa.png" alt="Visa" loading="lazy"></span>
                                <span class="trust-chip" style="background:#FFFFFF; display:inline-flex; align-items:center; justify-content:center; border-radius:6px; padding:5px 8px; box-shadow:0 1px 3px rgba(0,0,0,0.15);"><img src="./mastercard.png" alt="Mastercard" loading="lazy"></span>
                                <span class="trust-chip" style="background:#FFFFFF; display:inline-flex; align-items:center; justify-content:center; border-radius:6px; padding:5px 8px; box-shadow:0 1px 3px rgba(0,0,0,0.15);"><img src="./paypal.png" alt="PayPal" loading="lazy"></span>
                                <span class="trust-chip" style="background:#FFFFFF; display:inline-flex; align-items:center; justify-content:center; border-radius:6px; padding:5px 8px; box-shadow:0 1px 3px rgba(0,0,0,0.15);"><img src="./applepay.svg" alt="Apple Pay" loading="lazy"></span>
                                <span class="trust-chip" style="background:#FFFFFF; display:inline-flex; align-items:center; justify-content:center; border-radius:6px; padding:5px 8px; box-shadow:0 1px 3px rgba(0,0,0,0.15);"><img src="./googlepay.svg" alt="Google Pay" loading="lazy"></span>
                                <span class="trust-chip" style="background:#FFFFFF; display:inline-flex; align-items:center; justify-content:center; border-radius:6px; padding:5px 8px; box-shadow:0 1px 3px rgba(0,0,0,0.15);"><img src="./sepa.svg" alt="SEPA" loading="lazy"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js"></script>
<script src="./integration/validation.js"></script>

<?php include 'includes/footer.php'; ?>
<script>
window.APP_LANG = {
    themeToggleDarkText: <?= json_encode("🌙 " . $theme_toggle_text) ?>,
    themeToggleLightText: <?= json_encode("☀️ " . $theme_toggle_text_light) ?>,
    themeToggleDarkAria: <?= json_encode($theme_toggle_dark_aria_label) ?>,
    themeToggleLightAria: <?= json_encode($theme_toggle_light_aria_label) ?>,
    mockupToday: <?= json_encode($mockup_today) ?>,
    orderPendingAllocation: <?= json_encode($mockup_order_pending_text) ?>
};
</script>
<script src="./assets/js/app.js"></script>
</body>
</html>