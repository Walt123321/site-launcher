<?php
if (strpos($_SERVER["HTTP_HOST"], "www.") === 0) {
    $host = substr($_SERVER["HTTP_HOST"], 4);
    header("Location: https://" . $host . $_SERVER["REQUEST_URI"], true, 301);
    exit();
}

session_start();
if (empty($_SESSION["js_token"])) {
    $_SESSION["js_token"] = bin2hex(random_bytes(16));
}
$jsToken = $_SESSION["js_token"];

$incomingClickId = $_GET["subid"] ?? $_GET["click_id"] ?? $_GET["clickid"] ?? $_GET["sub_id"] ?? null;
if (!empty($incomingClickId)) {
    $_SESSION["click_id"] = $incomingClickId;
    setcookie("_subid", $incomingClickId, time() + 86400 * 30, "/");
}

include_once "indexnow.php";
require_once "offer_seo.php";
include "lang.php";

$host = $_SERVER["HTTP_HOST"];
$uri = strtok($_SERVER["REQUEST_URI"], "?");
$canonical = "https://" . $host . $uri;
?>
<!DOCTYPE html>
<html lang="<?= $site_lang ?>" class="scroll-smooth">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>" />
<title><?= $product_meta_title ?></title>
<meta name="robots" content="INDEX, FOLLOW, MAX-IMAGE-PREVIEW:LARGE, MAX-SNIPPET:-1">
<meta name="description" content="<?= $product_meta_description ?>" />

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= $product_meta_title ?>">
<meta name="twitter:description" content="<?= $product_meta_description ?>">
<meta name="twitter:image" content="<?= $site_url ?>/lander/<?= $site_domain ?>/assets/img/responsive/hero-bg-320.png">

<!-- Open Graph Meta Tags (TZ Item 19) -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= $site_name ?>">
<meta property="og:url" content="<?= $canonical ?>">
<meta property="og:title" content="<?= $product_meta_title ?>">
<meta property="og:description" content="<?= $product_meta_description ?>">
<meta property="og:image" content="<?= $site_url ?>/lander/<?= $site_domain ?>/assets/img/responsive/hero-bg-320.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="<?= $site_name ?>">

<!-- Favicon (TZ Item 7) -->
<link rel="icon" type="image/png" href="./favicon-96x96.png" sizes="96x96" />
<link rel="shortcut icon" href="./favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
<link rel="manifest" href="./site.webmanifest" />

<!-- Canonical & Hreflang (TZ Item 13) -->
<link rel="alternate" hreflang="x-default" href="<?= $site_url ?>/product.php" />
<link rel="alternate" hreflang="en" href="<?= $site_url ?>/product.php" />
<link rel="alternate" hreflang="de" href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/product.php" />
<link rel="alternate" hreflang="fr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/product.php" />
<link rel="alternate" hreflang="es" href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/product.php" />
<link rel="alternate" hreflang="it" href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/product.php" />
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
<link rel="alternate" hreflang="cs" href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/product.php" />
<link rel="alternate" hreflang="nb" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nb/product.php" />
<link rel="alternate" hreflang="el" href="<?= $site_url ?>/lander/<?= $site_domain ?>/el/product.php" />
<link rel="alternate" hreflang="ja" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ja/product.php" />

<!-- Schema.org JSON-LD (TZ Item 21) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": <?= json_encode($bc_home) ?>, "item": "<?= $site_url ?>/" },
    { "@type": "ListItem", "position": 2, "name": <?= json_encode($bc_product) ?>, "item": <?= json_encode($canonical) ?> }
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": <?= json_encode($site_name) ?>,
  "url": <?= json_encode($site_url . "/") ?>,
  "logo": <?= json_encode($site_url . "/favicon.ico") ?>,
  "description": <?= json_encode($home_meta_description) ?>
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "SoftwareApplication",
    "name": "<?= $site_name ?>",
    "url": "https://<?= $site_domain ?>/",
    "logo": "<?= $site_url ?>/favicon.ico",
    "description": "<?= $home_meta_description ?>",
    "applicationCategory": "FinanceApplication",
    "operatingSystem": "Web Browser",
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": <?= $rating_value ?>,
        "bestRating": 5,
        "worstRating": 1,
        "ratingCount": <?= $rating_count ?>,
        "reviewCount": <?= $review_count ?>
    },
    "offers": {
        "@type": "Offer",
        "price": "<?= $app_price ?>",
        "priceCurrency": "<?= $app_currency ?>",
        "availability": "https://schema.org/InStock"
    },
    "author": { "@type": "Brand", "name": "<?= $site_name ?>" }
}
</script>

<!-- Fonts & Styles -->
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" /></noscript>

<link rel="preload" href="./assets/css/tailwind.min.css?v=<?= @filemtime(__DIR__ . '/./assets/css/tailwind.min.css') ?: time() ?>" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="./assets/css/tailwind.min.css" /></noscript>
<link rel="stylesheet" href="./assets/css/custom.css?v=<?= @filemtime(__DIR__ . '/./assets/css/custom.css') ?: time() ?>" />
<link rel="stylesheet" href="./assets/css/intlTelInput.css?v=<?= @filemtime(__DIR__ . '/./assets/css/intlTelInput.css') ?: time() ?>" />
<link rel="preload" href="./assets/css/chat-quiz.css?v=<?= @filemtime(__DIR__ . '/./assets/css/chat-quiz.css') ?: time() ?>" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="./assets/css/chat-quiz.css" /></noscript>

<script src="./assets/js/scripts.js?v=<?= @filemtime(__DIR__ . '/./assets/js/scripts.js') ?: time() ?>" defer></script>
</head>

<body class="flex min-h-screen flex-col">
  <!-- header (TZ Item 2: language removed from desktop & mobile header) -->
  <header class="site-header-inner">
    <div class="container-base header-container">
      <div class="flex items-center justify-between gap-8 py-3">
        <a class="text-[25px] md:text-[32px] font-bold bg-linear-to-r from-brand-start to-brand-end bg-clip-text text-transparent" href="<?= $site_url ?>/"><?= $site_name ?></a>
        <nav class="inner-nav">
          <a href="product.php"><?= $footnav_product ?></a>
          <a href="offer.php"><?= $footnav_offer ?></a>
          <a href="faq.php"><?= $footnav_faq ?></a>
          <a href="contacts.php"><?= $footnav_contacts ?></a>
        </nav>
        <div class="ml-auto flex items-center gap-4 lg:ml-0">
          <a class="flex min-w-[100px] items-center justify-center rounded-full text-center border py-4 font-medium text-[12px] md:text-[18px] text-black md:min-w-40 bg-linear-to-r from-brand-start to-brand-end" href="sign.php"><?= $form_btn_submit ?></a>
        </div>
        <button class="menu-icon" data-menu-icon="" aria-label="open menu">
          <svg width="24" height="24"><use href="./assets/img/svg/sprite.svg#menu"></use></svg>
        </button>
      </div>
    </div>
    <nav class="mobile-menu" data-mobile-menu="">
      <ul class="flex flex-col flex-wrap items-center justify-center gap-y-8">
        <li><a class="text-xl" href="product.php"><?= $footnav_product ?></a></li>
        <li><a class="text-xl" href="offer.php"><?= $footnav_offer ?></a></li>
        <li><a class="text-xl" href="contacts.php"><?= $footnav_contacts ?></a></li>
        <li><a class="text-xl" href="faq.php"><?= $footnav_faq ?></a></li>
        <li><a class="text-xl" href="privacy.php"><?= $footnav_privacy ?></a></li>
        <li><a class="text-xl" href="conditions.php"><?= $footnav_conditions ?></a></li>
      </ul>
    </nav>
  </header>

  <main class="flex grow flex-col">
    <section class="page-hero">
      <div class="container-base">
        <div class="page-hero__eyebrow">
          <a href="<?= $site_url ?>/"><?= $bc_home ?></a>
          <span class="sep">/</span>
          <span class="current"><?= $bc_product ?></span>
        </div>
        <h1><?= $product_h1 ?></h1>
        <p><?= $product_lead ?></p>
      </div>
    </section>

    <section class="inner-content">
      <div class="container-base">
        <div class="info-grid cols-3">
          <div class="info-card">
            <div class="m-auto md:m-0 max-w-[52px] mb-4"><svg width="52" height="52" viewBox="0 0 52 52"><use href="./assets/img/svg/sprite.svg#feat1"></use></svg></div>
            <h3><?= $feature_1_title ?></h3>
            <p><?= $feature_1_text ?></p>
          </div>
          <div class="info-card">
            <div class="m-auto md:m-0 max-w-[52px] mb-4"><svg width="52" height="52" viewBox="0 0 52 52"><use href="./assets/img/svg/sprite.svg#feat2"></use></svg></div>
            <h3><?= $feature_2_title ?></h3>
            <p><?= $feature_2_text ?></p>
          </div>
          <div class="info-card">
            <div class="m-auto md:m-0 max-w-[52px] mb-4"><svg width="52" height="52" viewBox="0 0 52 52"><use href="./assets/img/svg/sprite.svg#feat3"></use></svg></div>
            <h3><?= $feature_3_title ?></h3>
            <p><?= $feature_3_text ?></p>
          </div>
          <div class="info-card">
            <div class="m-auto md:m-0 max-w-[52px] mb-4"><svg width="52" height="52" viewBox="0 0 52 52"><use href="./assets/img/svg/sprite.svg#feat4"></use></svg></div>
            <h3><?= $feature_4_title ?></h3>
            <p><?= $feature_4_text ?></p>
          </div>
          <div class="info-card">
            <div class="m-auto md:m-0 max-w-[52px] mb-4"><svg width="52" height="52" viewBox="0 0 52 52"><use href="./assets/img/svg/sprite.svg#feat5"></use></svg></div>
            <h3><?= $feature_5_title ?></h3>
            <p><?= $feature_5_text ?></p>
          </div>
          <div class="info-card">
            <div class="m-auto md:m-0 max-w-[52px] mb-4"><svg width="52" height="52" viewBox="0 0 52 52"><use href="./assets/img/svg/sprite.svg#feat6"></use></svg></div>
            <h3><?= $feature_6_title ?></h3>
            <p><?= $feature_6_text ?></p>
          </div>
        </div>

        <div class="mt-20">
          <h2 class="text-center md:text-left mb-6"><?= $table_title ?></h2>
          <table class="w-full border-collapse text-left">
            <tbody>
              <tr class="odd:bg-primary odd:text-black"><th class="h4 py-3 pl-3 md:pl-5"><?= $table_1_label ?></th><td class="px-3 py-3 md:px-5 md:text-base"><?= $table_1_val ?></td></tr>
              <tr class="odd:bg-primary odd:text-black"><th class="h4 py-3 pl-3 md:pl-5"><?= $table_2_label ?></th><td class="px-3 py-3 md:px-5 md:text-base"><?= $table_2_val ?></td></tr>
              <tr class="odd:bg-primary odd:text-black"><th class="h4 py-3 pl-3 md:pl-5"><?= $table_3_label ?></th><td class="px-3 py-3 md:px-5 md:text-base"><?= $table_3_val ?></td></tr>
              <tr class="odd:bg-primary odd:text-black"><th class="h4 py-3 pl-3 md:pl-5"><?= $table_4_label ?></th><td class="px-3 py-3 md:px-5 md:text-base"><?= $table_4_val ?></td></tr>
              <tr class="odd:bg-primary odd:text-black"><th class="h4 py-3 pl-3 md:pl-5"><?= $table_5_label ?></th><td class="px-3 py-3 md:px-5 md:text-base"><?= $table_5_val ?></td></tr>
              <tr class="odd:bg-primary odd:text-black"><th class="h4 py-3 pl-3 md:pl-5"><?= $table_6_label ?></th><td class="px-3 py-3 md:px-5 md:text-base"><?= $table_6_val ?></td></tr>
              <tr class="odd:bg-primary odd:text-black"><th class="h4 py-3 pl-3 md:pl-5"><?= $table_7_label ?></th><td class="px-3 py-3 md:px-5 md:text-base"><?= $table_7_val ?></td></tr>
            </tbody>
          </table>
        </div>

        <div class="py-[60px] px-8 mt-20 flex flex-col lg:flex-row items-center justify-between bg-linear-to-r from-brand-start to-brand-end rounded-3xl text-black gap-[30px] text-center lg:text-left">
          <div class="flex flex-col gap-4">
            <p class="font-black text-[32px] md:text-[40px]"><?= $cta_title ?></p>
            <p class="font-medium text-[16px] lg:text-[20px]"><?= $cta_desc ?></p>
          </div>
          <a class="flex max-w-full md:max-w-48 w-full items-center justify-center rounded-full border py-6 px-6 font-medium text-[18px] bg-black text-white" href="sign.php"><?= $cta_btn ?></a>
        </div>
      </div>
    </section>
  </main>

  <!-- footer (TZ Item 14/13: subpages + hreflang footer dropdown, TZ Item 18: disclaimer) -->
  <footer class="py-[30px] lg:pt-[100px] bg-[rgba(255,255,255,0.05)]">
    <div class="container-base">
      <div class="flex flex-col md:flex-row items-center justify-between gap-8">
        <div class="flex flex-col items-center md:items-start gap-6">
          <a class="text-[42px] lg:text-[62px] font-bold bg-linear-to-r from-brand-start to-brand-end bg-clip-text text-transparent" href="<?= $site_url ?>/"><?= $site_name ?></a>
          <p class="text-[20px] lg:text-[24px] text-grey-light"><?= $footer_tagline ?></p>
        </div>

        <ul class="flex flex-wrap items-center justify-center gap-8 text-grey-light">
          <li><a href="product.php"><?= $footnav_product ?></a></li>
          <li><a href="offer.php"><?= $footnav_offer ?></a></li>
          <li><a href="contacts.php"><?= $footnav_contacts ?></a></li>
          <li><a href="faq.php"><?= $footnav_faq ?></a></li>
          <li><a href="privacy.php"><?= $footnav_privacy ?></a></li>
          <li><a href="conditions.php"><?= $footnav_conditions ?></a></li>
          <li><a href="risk-warning.php"><?= $footnav_risk ?></a></li>
        </ul>

        <div class="flex flex-col gap-6 items-center">
          <p class="text-[20px] lg:text-[24px] text-grey-light font-bold"><?= $footer_community_label ?></p>
          <ul class="footer-social">
            <li><a href="https://facebook.com" target="_blank" rel="noopener"><svg width="30" height="30"><use href="./assets/img/svg/sprite.svg#fb"></use></svg></a></li>
            <li><a href="https://x.com" target="_blank" rel="noopener"><svg width="30" height="30"><use href="./assets/img/svg/sprite.svg#xtw"></use></svg></a></li>
          </ul>

          <!-- Language dropdown (TZ Item 13: footer switcher) -->
          <div class="footer-lang" data-connect-parent="">
            <button class="footer-lang-btn" data-connector="lang-menu">
              <span aria-hidden="true">🌐</span>
              <span class="uppercase">EN</span>
              <svg width="14" height="14" viewBox="0 0 20 20"><use href="./assets/img/svg/sprite.svg#dropchevron"></use></svg>
            </button>
            <nav class="footer-lang-menu" data-connect="lang-menu">
              <a href="<?= $site_url ?>/" data-active=""><span aria-hidden="true">🇬🇧</span><span class="uppercase">EN</span></a>
              <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/"><span aria-hidden="true">🇩🇪</span><span class="uppercase">DE</span></a>
              <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/"><span aria-hidden="true">🇫🇷</span><span class="uppercase">FR</span></a>
              <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/"><span aria-hidden="true">🇪🇸</span><span class="uppercase">ES</span></a>
              <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/"><span aria-hidden="true">🇮🇹</span><span class="uppercase">IT</span></a>
              <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/nl/"><span aria-hidden="true">🇳🇱</span><span class="uppercase">NL</span></a>
              <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/pl/"><span aria-hidden="true">🇵🇱</span><span class="uppercase">PL</span></a>
              <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/pt/"><span aria-hidden="true">🇵🇹</span><span class="uppercase">PT</span></a>
              <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/ro/"><span aria-hidden="true">🇷🇴</span><span class="uppercase">RO</span></a>
              <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/sv/"><span aria-hidden="true">🇸🇪</span><span class="uppercase">SV</span></a>
              <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/tr/"><span aria-hidden="true">🇹🇷</span><span class="uppercase">TR</span></a>
              <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/hr/"><span aria-hidden="true">🇭🇷</span><span class="uppercase">HR</span></a>
              <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/no/"><span aria-hidden="true">🇳🇴</span><span class="uppercase">NO</span></a>
              <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/nb/"><span aria-hidden="true">🇳🇴</span><span class="uppercase">NB</span></a>
              <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/da/"><span aria-hidden="true">🇩🇰</span><span class="uppercase">DA</span></a>
              <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/fi/"><span aria-hidden="true">🇫🇮</span><span class="uppercase">FI</span></a>
              <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/hu/"><span aria-hidden="true">🇭🇺</span><span class="uppercase">HU</span></a>
              <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/sk/"><span aria-hidden="true">🇸🇰</span><span class="uppercase">SK</span></a>
              <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/bg/"><span aria-hidden="true">🇧🇬</span><span class="uppercase">BG</span></a>
              <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/ms/"><span aria-hidden="true">🇲🇾</span><span class="uppercase">MS</span></a>
              <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/"><span aria-hidden="true">🇨🇿</span><span class="uppercase">CS</span></a>
              <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/el/"><span aria-hidden="true">🇬🇷</span><span class="uppercase">EL</span></a>
              <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/ja/"><span aria-hidden="true">🇯🇵</span><span class="uppercase">JA</span></a>
            </nav>
          </div>
        </div>
      </div>

      <div class="pt-5 lg:pt-10 pb-6 flex flex-col gap-4 md:gap-0 md:flex-row items-center justify-between">
        <p class="text-grey"><?= $footer_copyright ?></p>
        <ul class="flex items-center gap-6 text-grey">
          <li><a href="privacy.php"><?= $footnav_privacy ?></a></li>
          <li><a href="conditions.php"><?= $footnav_conditions ?></a></li>
          <li><a href="risk-warning.php"><?= $footnav_risk ?></a></li>
        </ul>
      </div>

      <p class="text-grey text-[12px] md:text-[14px] text-center md:text-left"><?= $footer_disclaimer ?></p>
    </div>
  </footer>

  <!-- Chat Quiz Assistant Widget (TZ Item 10) -->
  <div id="chat-quiz-root" class="cq-gen-1">
    <button id="chat-toggle-btn" class="cq-pulse-button cq-gen-2">
      <span id="chat-noti-dot" class="cq-gen-3">1</span>
      <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" id="cq-chat-icon" class="cq-gen-4"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.86 9.86 0 0 1-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </button>
    <div id="chat-window" class="cq-gen-5">
      <div class="cq-gen-6">
        <div class="cq-gen-7">
          <div class="cq-gen-8">
            <img src="./consultant.webp" alt="<?= htmlspecialchars($quiz_consultant_name) ?>" loading="lazy" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';" class="cq-gen-9">
            <svg style="display: none; width: 22px; height: 22px; color: #a1a1aa;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M16 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0ZM12 14a7 7 0 0 0-7 7h14a7 7 0 0 0-7-7Z" stroke-width="2"/></svg>
            <span class="cq-gen-11"></span>
          </div>
          <div class="cq-gen-12">
            <h4 class="cq-gen-13"><?= $quiz_consultant_name ?></h4>
            <p class="cq-gen-14"><?= $quiz_consultant_role ?></p>
          </div>
        </div>
        <button id="chat-close-btn" class="cq-gen-15">
          <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><use href="./assets/img/svg/sprite.svg#close"></use></svg>
        </button>
      </div>
      <div id="chat-messages" class="cq-gen-17"></div>
      <div id="typing-indicator" class="cq-gen-18"><?= $quiz_consultant_name ?> <?= $quiz_text_typing ?></div>
      <div id="chat-controls" class="cq-gen-19"></div>
    </div>
  </div>

  <div id="cq-form-card" hidden aria-hidden="true" style="display: none !important;">
    <form id="cq-isolated-form" class="leadform rf-form js-rf-form cq-pure-custom-form" method="post" action="./integration/send.php">
      <input type="hidden" name="js_token" value="<?= $jsToken; ?>">
      <div style="position:absolute; left:-9999px; opacity:0; height:0; overflow:hidden;">
        <input type="text" name="website" tabindex="-1" autocomplete="off">
        <input type="text" name="company" class="u-abs1">
      </div>
      <input type="hidden" name="country" value="<?= $form_country; ?>">
      <input type="hidden" name="language" value="<?= $form_language; ?>">
      <input type="hidden" name="phone_country" value="<?= $form_phone_country; ?>">
      <input type="hidden" name="only_countries" value="<?= htmlspecialchars($form_only_countries, ENT_QUOTES, 'UTF-8') ?>">
      <div class="form-preloader hidden"><svg width="44" height="44" class="spinner" viewBox="0 0 50 50"><use href="./assets/img/svg/sprite.svg#spinner"></use></svg></div>
      <div class="cq-field-group"><input type="text" name="fname" id="cq-field-fname" placeholder="<?= htmlspecialchars($quiz_placeholder_fname) ?>" required></div>
      <div class="cq-field-group"><input type="text" name="lname" id="cq-field-lname" placeholder="<?= htmlspecialchars($quiz_placeholder_lname) ?>" required></div>
      <div class="cq-field-group"><input type="email" name="email" id="cq-field-email" placeholder="<?= htmlspecialchars($quiz_placeholder_email) ?>" required></div>
      <div class="cq-field-group"><input type="tel" name="fullphone" id="cq-field-phone" placeholder="" required><span class="error-msg hide"></span></div>
      <button type="submit" class="submit" id="cq-custom-submit-btn"><?= $quiz_btn_submit ?></button>
    </form>
  </div>

  <script>
    window.quizLang = {
      welcome: "<?= addslashes($quiz_text_welcome) ?>",
      q1: "<?= addslashes($quiz_text_q1) ?>",
      a1_yes: "<?= addslashes($quiz_text_a1_yes) ?>",
      a1_no: "<?= addslashes($quiz_text_a1_no) ?>",
      q2: "<?= addslashes($quiz_text_q2) ?>",
      q3: "<?= addslashes($quiz_text_q3) ?>",
      a3_yes: "<?= addslashes($quiz_text_a3_yes) ?>",
      a3_no: "<?= addslashes($quiz_text_a3_no) ?>",
      q4: "<?= addslashes($quiz_text_q4) ?>",
      a4_1: "<?= addslashes($quiz_text_a4_1) ?>",
      a4_2: "<?= addslashes($quiz_text_a4_2) ?>",
      a4_3: "<?= addslashes($quiz_text_a4_3) ?>",
      q5: "<?= addslashes($quiz_text_q5) ?>",
      a5_yes: "<?= addslashes($quiz_text_a5_yes) ?>",
      a5_no: "<?= addslashes($quiz_text_a5_no) ?>",
      loaderText: "<?= addslashes($quiz_text_loader) ?>",
      finalTitle: "<?= addslashes($quiz_text_final_ttl) ?>",
      processing: "<?= addslashes($quiz_text_processing) ?>"
    };
  </script>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js" defer></script>
  <script src="./integration/validation.js?v=<?= @filemtime(__DIR__ . '/./integration/validation.js') ?: time() ?>" defer></script>
  <script src="./assets/js/chat-quiz.js?v=<?= @filemtime(__DIR__ . '/./assets/js/chat-quiz.js') ?: time() ?>" defer></script>
</body>
</html>
