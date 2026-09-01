<?php

// Redirect if this folder's language already matches the root site's language (avoid duplicate content)
include '../lang.php';
$extractLang = str_replace('-', '', strtolower(explode('-', $site_lang)[0]));
$currentLang = 'pl';
if ($extractLang === $currentLang) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $site_url . "/lander/" . $site_domain . "/product.php");
    exit();
}
session_start();
if (empty($_SESSION['js_token'])) {
    $_SESSION['js_token'] = bin2hex(random_bytes(16));
}
$jsToken = $_SESSION['js_token'];
require_once '../offer_seo.php';
include 'lang.php';
?>
<?php
if (strpos($_SERVER['HTTP_HOST'], 'www.') === 0) {
    $host = substr($_SERVER['HTTP_HOST'], 4);
    header("Location: https://" . $host . $_SERVER['REQUEST_URI'], true, 301);
    exit();
}
?>
<?php
$host = $_SERVER['HTTP_HOST'];
$uri = strtok($_SERVER['REQUEST_URI'], '?'); // без GET-параметрів
$canonical = 'https://' . $host . $uri;
?>
<!DOCTYPE html>
<html lang="<?= $site_lang ?>">
  <!-- head -->
  <head>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "BreadcrumbList",
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
      "name": "💸 <?= $analytics_heading ?> 💸",
      "item": <?= json_encode($canonical) ?>
    }
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": <?= json_encode($site_name) ?>,
  "url": <?= json_encode($site_url) ?>,
  "logo": {
    "@type": "ImageObject",
    "url": <?= json_encode($site_url . '/lander/' . $site_domain . '/favicon-96x96.png') ?>
  },
  "description": <?= json_encode($home_meta_description) ?>,
  "contactPoint": {
    "@type": "ContactPoint",
    "contactType": "customer support",
    "url": <?= json_encode($site_url . '/contacts.php') ?>
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "SoftwareApplication",
  "name": <?= json_encode($site_name) ?>,
  "url": <?= json_encode($site_url . '/') ?>,
  "logo": <?= json_encode($site_url . '/lander/' . $site_domain . '/favicon-96x96.png') ?>,
  "description": <?= json_encode($home_meta_description) ?>,
  "applicationCategory": "FinanceApplication",
  "operatingSystem": "Web Browser",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": <?= json_encode((float) $rating_value) ?>,
    "bestRating": 5,
    "worstRating": 1,
    "ratingCount": <?= json_encode((int) $rating_count) ?>,
    "reviewCount": <?= json_encode((int) $review_count) ?>
  },
  "offers": {
    "@type": "Offer",
    "price": <?= json_encode((string) $app_price) ?>,
    "priceCurrency": <?= json_encode($app_currency) ?>,
    "availability": "https://schema.org/InStock"
  },
  "author": {
    "@type": "Brand",
    "name": <?= json_encode($site_name) ?>
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": <?= json_encode($site_name) ?>,
  "url": <?= json_encode($site_url) ?>,
  "description": <?= json_encode($home_meta_description) ?>,
  "inLanguage": <?= json_encode($site_lang) ?>
}
</script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>" />
    <title><?= $product_meta_title ?></title>
    <meta name="robots" content="INDEX, FOLLOW, MAX-IMAGE-PREVIEW:LARGE, MAX-SNIPPET:-1">
    <meta name="description" content="<?= $product_meta_description ?>" />
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= $site_name ?>">
    <meta property="og:url" content="<?= $canonical ?>">
    <meta property="og:title" content="<?= $product_meta_title ?>">
    <meta property="og:description" content="<?= $product_meta_description ?>">
    <meta property="og:image" content="<?= $site_url ?>/lander/<?= $site_domain ?>/favicon-96x96.png">
    <meta property="og:image:width" content="96">
    <meta property="og:image:height" content="96">
    <meta property="og:image:alt" content="<?= $site_name ?> logo">
    <!-- Favicon -->
<?php if (!empty($country_flag_code)): ?>
<link rel="icon" type="image/png" href="https://flagcdn.com/96x72/<?= $country_flag_code ?>.png" sizes="96x96" />
<link rel="shortcut icon" href="https://flagcdn.com/48x36/<?= $country_flag_code ?>.png" />
<link rel="apple-touch-icon" sizes="180x180" href="https://flagcdn.com/180x135/<?= $country_flag_code ?>.png" />
<?php else: ?>
<link rel="icon" type="image/png" href="../favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="../favicon.svg" />
<link rel="shortcut icon" href="../favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png" />
<?php endif; ?>
<link rel="manifest" href="../site.webmanifest" />
  <link rel="stylesheet" href="../integration/default-integration.css?v=<?= @filemtime(__DIR__ . '/../integration/default-integration.css') ?: time() ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" /></noscript>
    <link rel="preload" href="../assets/css/theme.css?v=<?= @filemtime(__DIR__ . '/../assets/css/theme.css') ?: time() ?>" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <noscript><link rel="stylesheet" href="../assets/css/theme.css?v=<?= @filemtime(__DIR__ . '/../assets/css/theme.css') ?: time() ?>" /></noscript>
<link rel="alternate" hreflang="x-default" href="<?= $site_url ?>/product.php" />
<link rel="alternate" hreflang="es" href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/product.php" />
<link rel="alternate" hreflang="cs" href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/product.php" />
<link rel="alternate" hreflang="de" href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/product.php" />
<link rel="alternate" hreflang="en" href="<?= $site_url ?>/lander/<?= $site_domain ?>/en/product.php" />
<link rel="alternate" hreflang="it" href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/product.php" />
<link rel="alternate" hreflang="fr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/product.php" />
<link rel="alternate" hreflang="nl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nl/product.php" />
<link rel="alternate" hreflang="pl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pl/product.php" />
<link rel="alternate" hreflang="pt" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pt/product.php" />
<link rel="alternate" hreflang="ro" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ro/product.php" />
<link rel="alternate" hreflang="sv" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sv/product.php" />
<link rel="alternate" hreflang="tr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/tr/product.php" />
<link rel="alternate" hreflang="hr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hr/product.php" />
<link rel="alternate" hreflang="no" href="<?= $site_url ?>/lander/<?= $site_domain ?>/no/product.php" />
<link rel="alternate" hreflang="da" href="<?= $site_url ?>/lander/<?= $site_domain ?>/da/product.php" />
<link rel="alternate" hreflang="fi" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fi/product.php" />
<link rel="alternate" hreflang="hu" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hu/product.php" />
<link rel="alternate" hreflang="sk" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sk/product.php" />
<link rel="alternate" hreflang="bg" href="<?= $site_url ?>/lander/<?= $site_domain ?>/bg/product.php" />
<link rel="alternate" hreflang="ms" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ms/product.php" />
<link rel="alternate" hreflang="nb" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nb/product.php" />
<link rel="alternate" hreflang="el" href="<?= $site_url ?>/lander/<?= $site_domain ?>/el/product.php" />
<link rel="alternate" hreflang="ja" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ja/product.php" /></head>
  <body class="flex min-h-screen flex-col">
<!-- header -->
  <header class="site-header">
  <div class="inside-header">
    <div class="site-branding-container">
      <a class="site-logo" href="<?= $site_url ?>">
        <?php if (!empty($country_flag_code)): ?>
        <img src="https://flagcdn.com/48x36/<?= $country_flag_code ?>.png" srcset="https://flagcdn.com/96x72/<?= $country_flag_code ?>.png 2x" width="32" height="24" alt="<?= $country_name ?>" loading="eager" decoding="async">
        <?php else: ?>
        <img src="../favicon-96x96.png" alt="<?= $site_name ?>" width="32" height="32">
        <?php endif; ?>
      </a>
      <p class="main-title"><a href="<?= $site_url ?>"><?= $site_name ?></a></p>
    </div>
    <nav class="main-navigation">
      <div class="main-nav">
        <ul>
          <li><a href="<?= $site_url ?>/#why-us"><?= $mobnav_product ?></a></li>
          <li><a href="<?= $site_url ?>/#faq"><?= $mobnav_faq ?></a></li>
          <li><a href="<?= $site_url ?>/#about"><?= $footnav_about ?></a></li>
        </ul>
      </div>
    </nav>
    <div class="header-right">
      <a href="sign.php" class="btn"><?= $mobnav_signup ?></a>
      <button class="menu-toggle-ref" data-menu-icon aria-label="Menu">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M3 6h18M3 12h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
      </button>
    </div>
  </div>
  <nav class="mobile-nav-ref" data-mobile-menu>
    <a href="<?= $site_url ?>/#why-us"><?= $mobnav_product ?></a>
    <a href="<?= $site_url ?>/#faq"><?= $mobnav_faq ?></a>
    <a href="<?= $site_url ?>/#about"><?= $footnav_about ?></a>
    <a href="sign.php"><?= $mobnav_signup ?></a>
  </nav>
</header>
    <!-- main -->
    <main>
      <div class="container-ref content-page">
        <nav class="breadcrumb-ref" aria-label="breadcrumb">
          <a href="<?= $site_url ?>"><?= $breadcrumb_home ?></a>
          <span class="sep">/</span>
          <span class="current"><?= $breadcrumb_product ?></span>
        </nav>

        <h2><?= $app_main_heading ?></h2>
        <div class="info-cards">
          <div class="info-card">
            <h3><?= $app_feature_1_title ?></h3>
            <p><?= $app_feature_1_text ?></p>
          </div>
          <div class="info-card">
            <h3><?= $app_feature_2_title ?></h3>
            <p><?= $app_feature_2_text ?></p>
          </div>
          <div class="info-card">
            <h3><?= $app_feature_3_title ?></h3>
            <p><?= $app_feature_3_text ?></p>
          </div>
          <div class="info-card">
            <h3><?= $app_feature_4_title ?></h3>
            <p><?= $app_feature_4_text ?></p>
          </div>
        </div>
        <div class="stat-row">
          <div><dt><?= $products_stats_currencies_l ?></dt><dd><?= $products_stats_currencies_v ?></dd></div>
          <div><dt><?= $products_stats_users_l ?></dt><dd><?= $products_stats_users_v ?></dd></div>
          <div><dt><?= $products_stats_volume_l ?></dt><dd><?= $products_stats_volume_v ?></dd></div>
          <div><dt><?= $products_stats_countries_l ?></dt><dd><?= $products_stats_countries_v ?></dd></div>
        </div>

        <h2><?= $capabilities_main_title ?></h2>
        <div class="info-cards">
          <div class="info-card">
            <h3><?= $capabilities_feature_1_title ?></h3>
            <p><?= $capabilities_feature_1_text ?></p>
          </div>
          <div class="info-card">
            <h3><?= $capabilities_feature_2_title ?></h3>
            <p><?= $capabilities_feature_2_text ?></p>
          </div>
          <div class="info-card">
            <h3><?= $capabilities_feature_3_title ?></h3>
            <p><?= $capabilities_feature_3_text ?></p>
          </div>
          <div class="info-card">
            <h3><?= $capabilities_feature_4_title ?></h3>
            <p><?= $capabilities_feature_4_text ?></p>
          </div>
        </div>

        <div class="contact-grid">
          <div class="trust-banner">
            <h1><?= $analytics_heading ?></h1>
            <p><?= $analytics_description ?></p>
          </div>
          <form name="form" method="post" class="leadform rf-form js-rf-form form-ref" action="../integration/send.php" data-form>
            <input type="hidden" name="js_token" value="<?= $jsToken; ?>">
            <div style="position:absolute; left:-9999px; opacity:0; height:0; overflow:hidden;">
              <input type="text" name="website" tabindex="-1" autocomplete="off">
              <input type="text" name="company" autocomplete="off">
            </div>
            <input type="hidden" name="country" value="<?= $form_country; ?>">
            <input type="hidden" name="language" value="<?= $form_language; ?>">
            <input type="hidden" name="phone_country" value="<?= $form_phone_country; ?>">
            <input type="hidden" name="only_countries" value='<?= $form_only_countries; ?>'>
            <div class="form-preloader hidden">
              <svg class="spinner" viewBox="0 0 50 50"><circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle></svg>
            </div>
            <div class="input_group">
              <input type="text" name="fname" placeholder="<?= $form_name_placeholder ?>" aria-label="<?= $form_name_placeholder ?>" required />
            </div>
            <div class="input_group">
              <input type="text" name="lname" placeholder="<?= $form_surname_placeholder ?>" aria-label="<?= $form_surname_placeholder ?>" required />
            </div>
            <div class="input_group">
              <input type="email" name="email" placeholder="<?= $form_email_placeholder ?>" aria-label="<?= $form_email_placeholder ?>" required />
            </div>
            <div class="input_group">
              <input type="tel" name="fullphone" placeholder="" aria-label="Phone" required />
              <span class="error-msg hide"></span>
            </div>
            <div class="form-message" data-form-message role="alert">
              <p data-form-message-title></p>
              <div data-form-message-content></div>
            </div>
            <div class="input_group">
              <button type="submit" class="btn-submit-ref"><?= $form_submit ?></button>
            </div>
            <p class="form-disclaimer">
              <?= $form_text ?>
              <a href="privacy.php"><?= $form_text_privacy ?></a>
              <?= $form_text_privacy_and ?>
              <a href="conditions.php"><?= $form_text_conditions ?></a>
              <?= $form_text_conditions_of ?>
              <?= $form_text_risk_warning_note ?>
              <a href="risk-warning.php"><?= $footer_risk_warning ?></a>.
            </p>
            <div class="payment-badges">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 58 39" fill="none"><use href="../assets/img/sprite.svg#icon-sprite-3"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 58 39" fill="none"><use href="../assets/img/sprite.svg#icon-sprite-2"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 58 39" fill="none"><use href="../assets/img/sprite.svg#icon-sprite-1"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="86" height="32" viewBox="0 0 105 39" fill="none"><use href="../assets/img/sprite.svg#icon-sprite-0"></use></svg>
            </div>
          </form>
        </div>
      </div>
    </main>
    <!-- footer -->
<footer class="footer-bg">
  <div class="container-ref">
    <div class="footer-grid">
      <div>
        <h3><?= $footnav_col_pages ?></h3>
        <ul>
          <li><a href="<?= $site_url ?>"><?= $footnav_home ?></a></li>
          <li><a href="product.php"><?= $footnav_product ?></a></li>
          <li><a href="offer.php"><?= $footnav_offer ?></a></li>
        </ul>
      </div>
      <div>
        <h3><?= $footnav_col_support ?></h3>
        <ul>
          <li><a href="contacts.php"><?= $footnav_contact ?></a></li>
          <li><a href="faq.php"><?= $footnav_faq ?></a></li>
          <li><a href="sitemap.php"><?= $footnav_sitemap ?></a></li>
        </ul>
      </div>
      <div>
        <h3><?= $footnav_col_legal ?></h3>
        <ul>
          <li><a href="privacy.php"><?= $footnav_privacy ?></a></li>
          <li><a href="conditions.php"><?= $footnav_conditions ?></a></li>
          <li><a href="risk-warning.php"><?= $footer_risk_warning ?></a></li>
        </ul>
      </div>
      <div>
        <h3><?= $footnav_col_company ?></h3>
        <ul>
          <li><a href="<?= $site_url ?>/#about"><?= $footnav_about ?></a></li>
          <li><a href="sign.php"><?= $footnav_signup ?></a></li>
        </ul>
      </div>
    </div>
    <div class="footer-brand">
      <img src="../favicon-96x96.png" alt="<?= $site_name ?>">
      <span><?= $site_name ?></span>
    </div>
    <div class="footer-legal">
      <p><?= $footer_disclaimer ?></p>
    </div>
    <div class="footer-copyright">
      <?= $footer_copyright ?>
      <details class="lang-switcher-ref" style="display:inline-block; margin-left:12px;">
        <summary>🌐</summary>
        <div class="lang-list">
          <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/product.php" hreflang="es" title="Español">🇪🇸</a>
          <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/product.php" hreflang="cs" title="Čeština">🇨🇿</a>
          <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/product.php" hreflang="de" title="Deutsch">🇩🇪</a>
          <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/en/product.php" hreflang="en" title="English">🇬🇧</a>
          <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/product.php" hreflang="it" title="Italiano">🇮🇹</a>
          <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/product.php" hreflang="fr" title="Français">🇫🇷</a>
          <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/nl/product.php" hreflang="nl" title="Nederlands">🇳🇱</a>
          <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/pl/product.php" hreflang="pl" title="Polski">🇵🇱</a>
          <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/pt/product.php" hreflang="pt" title="Português">🇵🇹</a>
          <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/ro/product.php" hreflang="ro" title="Română">🇷🇴</a>
          <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/sv/product.php" hreflang="sv" title="Svenska">🇸🇪</a>
          <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/tr/product.php" hreflang="tr" title="Türkçe">🇹🇷</a>
          <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/hr/product.php" hreflang="hr" title="Hrvatski">🇭🇷</a>
          <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/no/product.php" hreflang="no" title="Norsk">🇳🇴</a>
          <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/da/product.php" hreflang="da" title="Dansk">🇩🇰</a>
          <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/fi/product.php" hreflang="fi" title="Suomi">🇫🇮</a>
          <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/hu/product.php" hreflang="hu" title="Magyar">🇭🇺</a>
          <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/sk/product.php" hreflang="sk" title="Slovenčina">🇸🇰</a>
          <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/bg/product.php" hreflang="bg" title="Български">🇧🇬</a>
          <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/ms/product.php" hreflang="ms" title="Bahasa Melayu">🇲🇾</a>
          <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/nb/product.php" hreflang="nb" title="Norsk bokmål">🇳🇴</a>
          <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/el/product.php" hreflang="el" title="Ελληνικά">🇬🇷</a>
          <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/ja/product.php" hreflang="ja" title="日本語">🇯🇵</a>
        </div>
      </details>
    </div>
  </div>
</footer>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/css/intlTelInput.css">
  <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js"></script>
  <script src="../integration/validation.js?v=<?= @filemtime(__DIR__ . '/../integration/validation.js') ?: time() ?>"></script>
  <script src="../assets/js/lazyload.min.js?v=<?= @filemtime(__DIR__ . '/../assets/js/lazyload.min.js') ?: time() ?>" defer></script>
  <script src="../assets/js/scripts.js?v=<?= @filemtime(__DIR__ . '/../assets/js/scripts.js') ?: time() ?>" defer></script>

<div id="cq-form-card" hidden aria-hidden="true" style="display: none !important;">
  <form id="cq-isolated-form" class="leadform rf-form js-rf-form cq-pure-custom-form" method="post" action="../integration/send.php">
    <input type="hidden" name="js_token" value="<?= $jsToken; ?>">
    <div style="position:absolute; left:-9999px; opacity:0; height:0; overflow:hidden;">
      <input type="text" name="website" tabindex="-1" autocomplete="off">
      <input type="text" name="company" style="position:absolute; left:-9999px;">
    </div>
    <input type="hidden" name="country" value="<?= $form_country; ?>">
    <input type="hidden" name="language" value="<?= $form_language; ?>">
    <input type="hidden" name="phone_country" value="<?= $form_phone_country; ?>">
    <input type="hidden" name="only_countries" value='<?= $form_only_countries; ?>'>
    <div class="form-preloader hidden">
      <svg width="50" height="50" class="spinner" viewBox="0 0 50 50">
        <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
      </svg>
    </div>
    <div class="absolute inset-0 z-20 hidden items-center justify-center bg-white/50 group-data-loading:flex">
      <svg class="text-primary animate-spin" width="76" height="75" viewBox="0 0 76 75" fill="none">
        <circle cx="38" cy="37.195" r="28" stroke="#E5E7EB" stroke-width="8" />
        <path d="M49.808 62.585a27.998 27.998 0 0 0 7.13-46.014 28 28 0 0 0-30.746-4.763" stroke="currentColor"
          stroke-width="8" stroke-linecap="round" />
      </svg>
    </div>
    <div class="cq-field-group">
      <input type="text" name="fname" id="cq-field-fname" placeholder="<?= htmlspecialchars($quiz_placeholder_fname) ?>" aria-label="<?= htmlspecialchars($quiz_placeholder_fname) ?>" required>
    </div>
    <div class="cq-field-group">
      <input type="text" name="lname" id="cq-field-lname" placeholder="<?= htmlspecialchars($quiz_placeholder_lname) ?>" aria-label="<?= htmlspecialchars($quiz_placeholder_lname) ?>" required>
    </div>
    <div class="cq-field-group">
      <input type="email" name="email" id="cq-field-email" placeholder="<?= htmlspecialchars($quiz_placeholder_email) ?>" aria-label="<?= htmlspecialchars($quiz_placeholder_email) ?>" required>
    </div>
    <div class="cq-field-group">
      <input type="tel" name="fullphone" id="cq-field-phone" placeholder="" aria-label="Phone" required>
      <span class="error-msg hide"></span>
    </div>
    <button type="submit" class="submit" id="cq-custom-submit-btn"><?= $quiz_btn_submit ?></button>
  </form>
</div>




<div id="chat-quiz-root" style="position: fixed !important; bottom: 20px !important; right: 20px !important; z-index: 999999 !important; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif !important; box-sizing: border-box !important;">
    
    <button id="chat-toggle-btn" class="cq-pulse-button" style="position: relative !important; width: 62px !important; height: 62px !important; border-radius: 50% !important; background: linear-gradient(135deg, #7c5cff, #5b32e0) !important; color: #ffffff !important; border: none !important; outline: none !important; cursor: pointer !important; box-shadow: 0 8px 24px rgba(124, 92, 255, 0.5) !important; display: flex !important; align-items: center !important; justify-content: center !important; transition: transform 0.25s cubic-bezier(0.175, 0.885, 0.32, 1.275) !important;">
        <span id="chat-noti-dot" style="position: absolute !important; top: -1px !important; right: -1px !important; width: 18px !important; height: 18px !important; background-color: #10b981 !important; border-radius: 50% !important; border: 2px solid #121214 !important; color: white !important; font-size: 10px !important; font-weight: bold !important; display: flex !important; align-items: center !important; justify-content: center !important; transform: scale(0); transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275) !important; z-index: 10 !important;">1</span>
        <svg style="width: 26px !important; height: 26px !important; transition: transform 0.3s;" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="cq-chat-icon">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
        </svg>
    </button>

    <div id="chat-window" style="display: none; position: absolute !important; bottom: 0 !important; right: 0 !important; background-color: #121214 !important; border: 1px solid #27272a !important; border-radius: 20px !important; box-shadow: 0 25px 60px -10px rgba(0, 0, 0, 0.8) !important; flex-direction: column !important; overflow: hidden !important; transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1) !important; opacity: 0 !important; transform: translateY(20px) !important;">
        
        <div style="background-color: #1a1a1e !important; border-bottom: 1px solid #27272a !important; padding: 14px 18px !important; display: flex !important; align-items: center !important; justify-content: space-between !important; flex-direction: row !important;">
            <div style="display: flex !important; align-items: center !important; gap: 12px !important; flex-direction: row !important;">
                <div style="position: relative !important; width: 40px !important; height: 40px !important; border-radius: 50% !important; border: 2px solid #5b32e0 !important; background-color: #27272a !important; display: flex !important; align-items: center !important; justify-content: center !important; overflow: hidden !important; flex-shrink: 0 !important;">
                    <img src="../consultant.webp" alt="<?= htmlspecialchars($quiz_consultant_name) ?>" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';" style="width: 100% !important; height: 100% !important; object-fit: cover !important; display: block;">
                    <svg style="display: none; width: 22px; height: 22px; color: #a1a1aa;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    <span style="position: absolute !important; bottom: 0 !important; right: 0 !important; width: 9px !important; height: 9px !important; background-color: #10b981 !important; border: 1.5px solid #121214 !important; border-radius: 50% !important;"></span>
                </div>
                <div style="text-align: left !important;">
                    <h4 style="color: #ffffff !important; font-size: 14px !important; font-weight: 600 !important; margin: 0 !important; padding: 0 !important; line-height: 1.2 !important; letter-spacing: 0.3px !important;"><?= $quiz_consultant_name ?></h4>
                    <p style="color: #a1a1aa !important; font-size: 11px !important; margin: 0 !important; padding: 0 !important; opacity: 0.85;"><?= $quiz_consultant_role ?></p>
                </div>
            </div>
            <button id="chat-close-btn" style="color: #a1a1aa !important; background: transparent !important; border: none !important; cursor: pointer !important; padding: 6px !important; display: flex !important; align-items: center !important; transition: color 0.2s;">
                <svg style="width: 20px !important; height: 20px !important;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <div id="chat-messages" style="flex: 1 !important; overflow-y: auto !important; padding: 18px !important; display: flex !important; flex-direction: column !important; gap: 14px !important; scroll-behavior: smooth !important;">
            </div>

        <div id="typing-indicator" style="display: none; padding: 10px 18px !important; font-size: 12px !important; color: #71717a !important; font-style: italic !important; background-color: #121214 !important; text-align: left !important;">
            <?= $quiz_consultant_name ?> <?= $quiz_text_typing ?>
        </div>

        <div id="chat-controls" style="padding: 10px 18px !important; background-color: rgba(26, 26, 30, 0.5) !important; border-top: 1px solid #27272a !important; min-height: 20px !important; display: flex !important; align-items: center !important; justify-content: center !important;">
            </div>
    </div>
</div>

<script>
window.quizLang = {
        welcome: `<?= addslashes($quiz_text_welcome) ?>`,
        q1: `<?= addslashes($quiz_text_q1) ?>`,
        a1_yes: `<?= addslashes($quiz_text_a1_yes) ?>`,
        a1_no: `<?= addslashes($quiz_text_a1_no) ?>`,
        q2: `<?= addslashes($quiz_text_q2) ?>`,
        q3: `<?= addslashes($quiz_text_q3) ?>`,
        a3_yes: `<?= addslashes($quiz_text_a3_yes) ?>`,
        a3_no: `<?= addslashes($quiz_text_a3_no) ?>`,
        q4: `<?= addslashes($quiz_text_q4) ?>`,
        a4_1: `<?= addslashes($quiz_text_a4_1) ?>`,
        a4_2: `<?= addslashes($quiz_text_a4_2) ?>`,
        a4_3: `<?= addslashes($quiz_text_a4_3) ?>`,
        q5: `<?= addslashes($quiz_text_q5) ?>`,
        a5_yes: `<?= addslashes($quiz_text_a5_yes) ?>`,
        a5_no: `<?= addslashes($quiz_text_a5_no) ?>`,
        loaderText: `<?= addslashes($quiz_text_loader) ?>`,
        finalTitle: `<?= addslashes($quiz_text_final_ttl) ?>`,
        processing: `<?= addslashes($quiz_text_processing) ?>`
    };
</script>
<script src="../assets/js/chat-quiz.js?v=<?= @filemtime(__DIR__ . '/../assets/js/chat-quiz.js') ?: time() ?>" defer></script>

<link rel="preload" href="../assets/css/chat-quiz.css?v=<?= @filemtime(__DIR__ . '/../assets/css/chat-quiz.css') ?: time() ?>" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="../assets/css/chat-quiz.css?v=<?= @filemtime(__DIR__ . '/../assets/css/chat-quiz.css') ?: time() ?>" /></noscript>

      
  </body>
</html>
