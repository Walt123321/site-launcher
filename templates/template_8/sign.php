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

if (strpos(strtolower($uri), "/lander/") !== false && basename($uri) === "index.php") {
    $canonical = "https://" . $host . "/";
} else {
    $canonical = "https://" . $host . $uri;
}
?>
<!DOCTYPE html>
<html lang="<?= $site_lang ?>" data-theme="purple" class="">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>" />
<title><?= $sign_meta_title ?></title>
<meta name="robots" content="INDEX, FOLLOW, MAX-IMAGE-PREVIEW:LARGE, MAX-SNIPPET:-1">
<meta name="description" content="<?= $sign_meta_description ?>" />

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= $sign_meta_title ?>">
<meta name="twitter:description" content="<?= $sign_meta_description ?>">
<meta name="twitter:image" content="<?= $site_url ?>/lander/<?= $site_domain ?>/assets/img/meta/purple/img.png">

<!-- Open Graph Meta Tags (TZ Item 22) -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= $site_name ?>">
<meta property="og:url" content="<?= $canonical ?>">
<meta property="og:title" content="<?= $sign_meta_title ?>">
<meta property="og:description" content="<?= $sign_meta_description ?>">
<meta property="og:image" content="<?= $site_url ?>/lander/<?= $site_domain ?>/assets/img/meta/purple/img.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="<?= $site_name ?>">

<!-- Favicon (TZ Item 4) -->
<?php if (!empty($country_flag_code)): ?>
<link rel="icon" type="image/png" href="https://flagcdn.com/96x72/<?= $country_flag_code ?>.png" sizes="96x96" />
<link rel="shortcut icon" href="https://flagcdn.com/48x36/<?= $country_flag_code ?>.png" />
<link rel="apple-touch-icon" sizes="180x180" href="https://flagcdn.com/180x135/<?= $country_flag_code ?>.png" />
<?php else: ?>
<link rel="icon" type="image/png" href="./favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="./favicon.svg" />
<link rel="shortcut icon" href="./favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
<?php endif; ?>
<link rel="manifest" href="./site.webmanifest" />

<!-- Canonical & Hreflang (TZ Item 16) -->
<link rel="alternate" hreflang="x-default" href="<?= $site_url ?>/" />
<link rel="alternate" hreflang="en" href="<?= $site_url ?>/" />
<link rel="alternate" hreflang="de" href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/" />
<link rel="alternate" hreflang="fr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/" />
<link rel="alternate" hreflang="es" href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/" />
<link rel="alternate" hreflang="it" href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/" />
<link rel="alternate" hreflang="nl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nl/" />
<link rel="alternate" hreflang="pl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pl/" />
<link rel="alternate" hreflang="pt" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pt/" />
<link rel="alternate" hreflang="ro" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ro/" />
<link rel="alternate" hreflang="sv" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sv/" />
<link rel="alternate" hreflang="tr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/tr/" />
<link rel="alternate" hreflang="hr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hr/" />
<link rel="alternate" hreflang="no" href="<?= $site_url ?>/lander/<?= $site_domain ?>/no/" />
<link rel="alternate" hreflang="da" href="<?= $site_url ?>/lander/<?= $site_domain ?>/da/" />
<link rel="alternate" hreflang="fi" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fi/" />
<link rel="alternate" hreflang="hu" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hu/" />
<link rel="alternate" hreflang="sk" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sk/" />
<link rel="alternate" hreflang="bg" href="<?= $site_url ?>/lander/<?= $site_domain ?>/bg/" />
<link rel="alternate" hreflang="ms" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ms/" />
<link rel="alternate" hreflang="cs" href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/" />
<link rel="alternate" hreflang="nb" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nb/" />
<link rel="alternate" hreflang="el" href="<?= $site_url ?>/lander/<?= $site_domain ?>/el/" />
<link rel="alternate" hreflang="ja" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ja/" />

<!-- Schema.org JSON-LD (TZ Item 17) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "BreadcrumbList",
  "name": <?= json_encode($site_name) ?>,
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": <?= json_encode($site_name) ?>,
      "item": "<?= $site_url ?>"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": <?= json_encode("💸 " . $site_name . " 💸") ?>,
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
  "logo": <?= json_encode($site_url . "/lander/" . $site_domain . "/favicon-96x96.png") ?>,
  "description": <?= json_encode($home_meta_description) ?>,
  "contactPoint": {
    "@type": "ContactPoint",
    "contactType": "customer service",
    "url": <?= json_encode($site_url . "/contacts.php") ?>
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "SoftwareApplication",
  "name": <?= json_encode($site_name) ?>,
  "url": "https://<?= $site_domain ?>/",
  "logo": "<?= $site_url ?>/lander/<?= $site_domain ?>/favicon-96x96.png",
  "description": <?= json_encode($home_meta_description) ?>,
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

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": <?= json_encode($faq_q1) ?>,
      "acceptedAnswer": {
        "@type": "Answer",
        "text": <?= json_encode($faq_a1) ?>
      }
    },
    {
      "@type": "Question",
      "name": <?= json_encode($faq_q2) ?>,
      "acceptedAnswer": {
        "@type": "Answer",
        "text": <?= json_encode($faq_a2) ?>
      }
    },
    {
      "@type": "Question",
      "name": <?= json_encode($faq_q3) ?>,
      "acceptedAnswer": {
        "@type": "Answer",
        "text": <?= json_encode($faq_a3) ?>
      }
    },
    {
      "@type": "Question",
      "name": <?= json_encode($faq_q4) ?>,
      "acceptedAnswer": {
        "@type": "Answer",
        "text": <?= json_encode($faq_a4) ?>
      }
    },
    {
      "@type": "Question",
      "name": <?= json_encode($faq_q5) ?>,
      "acceptedAnswer": {
        "@type": "Answer",
        "text": <?= json_encode($faq_a5) ?>
      }
    }
  ]
}
</script>

<!-- Fonts & Styles -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" /></noscript>

<link rel="preload" href="./assets/css/tailwind.min.css?v=<?= @filemtime(__DIR__ . '/./assets/css/tailwind.min.css') ?: time() ?>" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="./assets/css/tailwind.min.css" /></noscript>
<link rel="stylesheet" href="./assets/css/custom.css?v=<?= @filemtime(__DIR__ . '/./assets/css/custom.css') ?: time() ?>" />

<link rel="preload" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/css/intlTelInput.css" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/css/intlTelInput.css" /></noscript>

<link rel="preload" href="./assets/css/chat-quiz.css?v=<?= @filemtime(__DIR__ . '/./assets/css/chat-quiz.css') ?: time() ?>" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="./assets/css/chat-quiz.css" /></noscript>

<style>
  html.loading body > *:not(#skeleton) { visibility: hidden !important; }
  html.loading body *, html.loading body *::before, html.loading body *::after { animation: none !important; transition: none !important; }
  #skeleton { background: #020618; min-height: 100vh; position: fixed; top: 0; left: 0; width: 100%; z-index: 999; }
  #sk-container { max-width: 1224px; margin-left: auto; margin-right: auto; padding-left: 1rem; padding-right: 1rem; height: 100%; }
  #sk-header { position: relative; z-index: 10; height: 4rem; background-color: #1e1a4d; height: 100%; }
  #sk-body { display: flex; align-items: center; height: 100%; font-size: 18px; color: #f8fafc; }
  @media (min-width: 768px) { #sk-header { height: 5rem; } }
  .iti.iti--allow-dropdown { width: 100%; }
  .error-msg { padding-top: 6px; color: #ff6467; font-size: 13px; text-align: left; }
  .hide, .hidden { display: none !important; }
  .form-preloader { position: absolute; inset: 0; background: rgba(2,6,24,.85); z-index: 20; display: flex; align-items: center; justify-content: center; border-radius: var(--radius-responsive-30); }
  .spinner { animation: rotate 2s linear infinite; width: 44px; height: 44px; }
  .spinner .path { stroke: #5ee9b5; stroke-linecap: round; animation: dash 1.5s ease-in-out infinite; }
  @keyframes rotate { 100% { transform: rotate(360deg); } }
  @keyframes dash { 0% { stroke-dasharray: 1, 150; stroke-dashoffset: 0; } 50% { stroke-dasharray: 90, 150; stroke-dashoffset: -35; } 100% { stroke-dasharray: 90, 150; stroke-dashoffset: -124; } }
</style>

<script>
  document.documentElement.classList.add("loading");
  const waitForStylesheet = (href, cb) => {
    const id = setInterval(() => {
      if ([...document.styleSheets].some((s) => s.href && s.href.includes(href))) {
        clearInterval(id);
        cb();
      }
    }, 10);
  };
  waitForStylesheet("tailwind.min.css", () => {
    document.documentElement.classList.remove("loading");
    document.getElementById("skeleton")?.remove();
  });
</script>

<script src="./assets/js/lazyload.min.js" defer></script>
<script src="./assets/js/scripts.js" defer></script>
</head>

<body>
  <!-- Skeleton placeholder -->
  <div id="skeleton">
    <div id="sk-header">
      <div id="sk-container">
        <div id="sk-body"><?= $site_name ?></div>
      </div>
    </div>
  </div>

  <!-- header (TZ Item 3: Language removed from desktop & mobile header) -->
  <header class="bg-surface-tertiary">
    <div class="container-base">
      <div class="py-responsive-p12 gap-responsive-m32 flex items-center justify-between">
        <div class="navbar_logo-wrapper">
          <a class="typography-h3 link link-white inline-flex translate-y-1 leading-none uppercase" href="<?= $site_url ?>">
            <?= $site_name ?>
          </a>
        </div>
        <nav class="flex grow justify-center max-xl:hidden">
          <ul class="gap-x-responsive-m24 flex flex-wrap justify-center">
            <li><a class="btn-link" href="about.php"><?= $nav_about ?></a></li>
            <li><a class="btn-link" href="product.php"><?= $mobnav_product ?></a></li>
            <li><a class="btn-link" href="offer.php"><?= $mobnav_offer ?></a></li>
            <li><a class="btn-link" href="faq.php"><?= $nav_faq ?></a></li>
            <li><a class="btn-link" href="contacts.php"><?= $nav_contacts ?></a></li>
          </ul>
        </nav>
        <div class="flex shrink-0 items-center gap-4 max-md:hidden">
          <a class="btn btn-secondary btn-small" href="sign.php"><?= $nav_signup ?></a>
        </div>
        <button class="btn btn-secondary btn-small btn-circle group/menu-icon relative xl:hidden" data-menu-icon="" aria-label="Menu">
          <span class="menu-btn-icon opacity-0 group-data-active/menu-icon:opacity-100">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><use href="./assets/img/svg/sprite.svg#ico1"></use></svg>
          </span>
          <span class="menu-btn-icon opacity-100 group-data-active/menu-icon:opacity-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><use href="./assets/img/svg/sprite.svg#ico2"></use></svg>
          </span>
        </button>
      </div>
    </div>
    <!-- Mobile nav -->
    <nav class="mobile-menu" data-mobile-menu="">
      <ul class="flex flex-col items-center justify-center gap-responsive-m24">
        <li><a class="btn-link" href="about.php"><?= $nav_about ?></a></li>
        <li><a class="btn-link" href="product.php"><?= $mobnav_product ?></a></li>
        <li><a class="btn-link" href="offer.php"><?= $mobnav_offer ?></a></li>
        <li><a class="btn-link" href="faq.php"><?= $nav_faq ?></a></li>
        <li><a class="btn-link" href="contacts.php"><?= $nav_contacts ?></a></li>
      </ul>
      <a class="btn btn-primary w-full" href="sign.php"><?= $nav_signup ?></a>
    </nav>
  </header>
  <main>

    <div class="py-responsive-vertical container-base flex justify-center">
      <div class="w-full max-w-md glass glass-blur px-responsive-p32 py-responsive-p48 rounded-responsive-30 relative z-5 overflow-hidden">
        <div class="text-center mb-6">
          <h1 class="typography-h2 mb-2"><?= $sign_h1 ?></h1>
          <p class="typography-b2 text-on-surface-primary-light"><?= $sign_lead ?></p>
        </div>
        <form id="sign-leadform" name="form" method="post" class="group rounded-responsive-30 relative overflow-hidden leadform rf-form js-rf-form" action="./integration/send.php">
          <input type="hidden" name="js_token" value="<?= $jsToken ?>">
          <input type="hidden" name="country" value="<?= $form_country ?>">
          <input type="hidden" name="language" value="<?= $form_language ?>">
          <input type="hidden" name="phone_country" value="<?= $form_phone_country ?>">
          <input type="hidden" name="only_countries" value='<?= $form_only_countries ?>'>
          <div style="position:absolute; left:-9999px; opacity:0; height:0; overflow:hidden;">
            <input type="text" name="website" tabindex="-1" autocomplete="off">
            <input type="text" name="company" class="u-abs1">
          </div>

          <div class="form-preloader hidden">
            <svg width="44" height="44" class="spinner" viewBox="0 0 50 50"><use href="./assets/img/svg/sprite.svg#ico26"></use></svg>
          </div>

          <div class="gap-responsive-m20 grid">
            <div class="gap-responsive-m12 grid">
              <input class="input" type="text" name="first_name" placeholder="<?= $form_fname_placeholder ?>" required data-should-validate="">
              <input class="input" type="text" name="last_name" placeholder="<?= $form_lname_placeholder ?>" required data-should-validate="">
              <input class="input" type="email" name="email" placeholder="<?= $form_email_placeholder ?>" required data-should-validate="">
              <div class="relative w-full">
                <input class="input iti__tel-input" type="tel" name="fullphone" placeholder="" required data-should-validate="" autocomplete="tel">
                <span class="error-msg hide"></span>
              </div>
            </div>
            <div class="gap-responsive-m16 grid justify-items-center">
              <button class="btn btn-primary w-full" type="submit">
                <?= $form_btn_submit ?>
              </button>
              <p class="typography-b4 text-on-surface-tertiary text-center">
                <?= $form_disclaimer_text ?>
              </p>
              <!-- Trust Badges (TZ Item 5) -->
              <div class="pay-badges">
                <img src="./assets/img/svg/visa-real.svg" alt="Visa" width="58" height="39" loading="lazy">
                <img src="./assets/img/svg/mastercard-real.svg" alt="Mastercard" width="58" height="39" loading="lazy">
                <img src="./assets/img/svg/maestro.svg" alt="Maestro" width="58" height="39" loading="lazy">
                <img src="./assets/img/svg/sslsecure.svg" alt="Secure SSL Encryption" width="90" height="39" loading="lazy">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

  </main>
  <!-- footer (TZ Item 12, 16, 18, 21) -->
  <footer class="bg-surface-tertiary py-responsive-vertical relative overflow-hidden max-md:text-center">
    <div class="bg-on-surface-tertiary-blur absolute top-1/2 left-full h-[564px] w-[93px] -translate-1/2 rounded-[789px] blur-[150px] md:top-full md:left-[60%] md:h-[789px] md:-rotate-90"></div>
    <div class="container-base gap-responsive-m24 relative grid">
      <div class="gap-responsive-m32 flex items-center justify-between max-md:flex-col">
        <div class="gap-responsive-p20 grid md:justify-items-start">
          <a class="typography-h3 link link-white inline-flex translate-y-1 leading-none uppercase" href="<?= $site_url ?>">
            <?= $site_name ?>
          </a>
          <!-- Language dropdown (TZ Item 16: In footer) -->
          <div class="relative" data-connect-parent="">
            <button class="btn btn-outline btn-small group" data-connector="lang-menu" aria-label="Change language">
              <span class="inline-flex aspect-25/20 min-w-[25px] items-center justify-center text-lg" aria-hidden="true">
                🌐
              </span>
              <span class="uppercase">EN</span>
              <span class="transition-transform group-data-active:rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><use href="./assets/img/svg/sprite.svg#ico21"></use></svg>
              </span>
            </button>
            <nav class="lang-menu" data-connect="lang-menu">
              <ul class="p-responsive-p12 grid gap-responsive-m8 max-h-[320px] overflow-y-auto">
                <li><a class="btn-link w-full px-responsive-p12 gap-responsive-m8 flex items-center" href="<?= $site_url ?>/" data-active=""><span aria-hidden="true">🇬🇧</span><span class="uppercase">EN</span></a></li>
                <li><a class="btn-link w-full px-responsive-p12 gap-responsive-m8 flex items-center" href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/"><span aria-hidden="true">🇩🇪</span><span class="uppercase">de</span></a></li>
                <li><a class="btn-link w-full px-responsive-p12 gap-responsive-m8 flex items-center" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/"><span aria-hidden="true">🇫🇷</span><span class="uppercase">fr</span></a></li>
                <li><a class="btn-link w-full px-responsive-p12 gap-responsive-m8 flex items-center" href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/"><span aria-hidden="true">🇪🇸</span><span class="uppercase">es</span></a></li>
                <li><a class="btn-link w-full px-responsive-p12 gap-responsive-m8 flex items-center" href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/"><span aria-hidden="true">🇮🇹</span><span class="uppercase">it</span></a></li>
                <li><a class="btn-link w-full px-responsive-p12 gap-responsive-m8 flex items-center" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nl/"><span aria-hidden="true">🇳🇱</span><span class="uppercase">nl</span></a></li>
                <li><a class="btn-link w-full px-responsive-p12 gap-responsive-m8 flex items-center" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pl/"><span aria-hidden="true">🇵🇱</span><span class="uppercase">pl</span></a></li>
                <li><a class="btn-link w-full px-responsive-p12 gap-responsive-m8 flex items-center" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pt/"><span aria-hidden="true">🇵🇹</span><span class="uppercase">pt</span></a></li>
                <li><a class="btn-link w-full px-responsive-p12 gap-responsive-m8 flex items-center" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ro/"><span aria-hidden="true">🇷🇴</span><span class="uppercase">ro</span></a></li>
                <li><a class="btn-link w-full px-responsive-p12 gap-responsive-m8 flex items-center" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sv/"><span aria-hidden="true">🇸🇪</span><span class="uppercase">sv</span></a></li>
                <li><a class="btn-link w-full px-responsive-p12 gap-responsive-m8 flex items-center" href="<?= $site_url ?>/lander/<?= $site_domain ?>/tr/"><span aria-hidden="true">🇹🇷</span><span class="uppercase">tr</span></a></li>
                <li><a class="btn-link w-full px-responsive-p12 gap-responsive-m8 flex items-center" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hr/"><span aria-hidden="true">🇭🇷</span><span class="uppercase">hr</span></a></li>
                <li><a class="btn-link w-full px-responsive-p12 gap-responsive-m8 flex items-center" href="<?= $site_url ?>/lander/<?= $site_domain ?>/no/"><span aria-hidden="true">🇳🇴</span><span class="uppercase">no</span></a></li>
                <li><a class="btn-link w-full px-responsive-p12 gap-responsive-m8 flex items-center" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nb/"><span aria-hidden="true">🇳🇴</span><span class="uppercase">nb</span></a></li>
                <li><a class="btn-link w-full px-responsive-p12 gap-responsive-m8 flex items-center" href="<?= $site_url ?>/lander/<?= $site_domain ?>/da/"><span aria-hidden="true">🇩🇰</span><span class="uppercase">da</span></a></li>
                <li><a class="btn-link w-full px-responsive-p12 gap-responsive-m8 flex items-center" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fi/"><span aria-hidden="true">🇫🇮</span><span class="uppercase">fi</span></a></li>
                <li><a class="btn-link w-full px-responsive-p12 gap-responsive-m8 flex items-center" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hu/"><span aria-hidden="true">🇭🇺</span><span class="uppercase">hu</span></a></li>
                <li><a class="btn-link w-full px-responsive-p12 gap-responsive-m8 flex items-center" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sk/"><span aria-hidden="true">🇸🇰</span><span class="uppercase">sk</span></a></li>
                <li><a class="btn-link w-full px-responsive-p12 gap-responsive-m8 flex items-center" href="<?= $site_url ?>/lander/<?= $site_domain ?>/bg/"><span aria-hidden="true">🇧🇬</span><span class="uppercase">bg</span></a></li>
                <li><a class="btn-link w-full px-responsive-p12 gap-responsive-m8 flex items-center" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ms/"><span aria-hidden="true">🇲🇾</span><span class="uppercase">ms</span></a></li>
                <li><a class="btn-link w-full px-responsive-p12 gap-responsive-m8 flex items-center" href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/"><span aria-hidden="true">🇨🇿</span><span class="uppercase">cs</span></a></li>
                <li><a class="btn-link w-full px-responsive-p12 gap-responsive-m8 flex items-center" href="<?= $site_url ?>/lander/<?= $site_domain ?>/el/"><span aria-hidden="true">🇬🇷</span><span class="uppercase">el</span></a></li>
                <li><a class="btn-link w-full px-responsive-p12 gap-responsive-m8 flex items-center" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ja/"><span aria-hidden="true">🇯🇵</span><span class="uppercase">ja</span></a></li>
              </ul>
            </nav>
          </div>
        </div>
        <ul class="gap-x-responsive-m24 flex flex-col flex-wrap justify-center md:flex-row">
          <li><a class="menu-link" href="about.php"><?= $footnav_about ?></a></li>
          <li><a class="menu-link" href="product.php"><?= $footnav_product ?></a></li>
          <li><a class="menu-link" href="offer.php"><?= $footnav_offer ?></a></li>
          <li><a class="menu-link" href="faq.php"><?= $footnav_faq ?></a></li>
          <li><a class="menu-link" href="contacts.php"><?= $footnav_contacts ?></a></li>
          <li><a class="menu-link" href="privacy.php"><?= $footnav_privacy ?></a></li>
          <li><a class="menu-link" href="conditions.php"><?= $footnav_terms ?></a></li>
          <li><a class="menu-link" href="risk-warning.php"><?= $footnav_risk ?></a></li>
        </ul>
        <a class="menu-link" href="mailto:info@<?= $site_domain ?>">info@<?= $site_domain ?></a>
      </div>
      <hr class="text-on-surface-tertiary opacity-30">
      <!-- Footer disclaimer text (TZ Item 21) -->
      <div class="text-on-surface-tertiary">
        <p><?= $footer_disclaimer_p1 ?></p>
        <p class="mt-3"><?= $footer_disclaimer_p2 ?></p>
      </div>
      <div class="gap-responsive-m32 flex flex-wrap items-center justify-between max-md:flex-col-reverse">
        <p class="text-on-surface-tertiary"><?= $footer_copyright ?></p>
        <ul class="gap-x-responsive-m24 flex flex-wrap md:flex-row">
          <li><a class="menu-link" href="privacy.php"><?= $footnav_privacy ?></a></li>
          <li><a class="menu-link" href="risk-warning.php"><?= $footnav_risk ?></a></li>
          <li><a class="menu-link" href="conditions.php"><?= $footnav_terms ?></a></li>
        </ul>
      </div>
    </div>
  </footer>

  <!-- Chat Quiz Assistant Widget (TZ Item 13: Adapted to purple theme) -->
  <div id="chat-quiz-root" class="cq-gen-1">
    <button id="chat-toggle-btn" class="cq-pulse-button cq-gen-2">
      <span id="chat-noti-dot" class="cq-gen-3">1</span>
      <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" id="cq-chat-icon" class="cq-gen-4"><use href="./assets/img/svg/sprite.svg#ico22"></use></svg>
    </button>

    <div id="chat-window" class="cq-gen-5">
      <div class="cq-gen-6">
        <div class="cq-gen-7">
          <div class="cq-gen-8">
            <img src="./consultant.webp" alt="<?= htmlspecialchars($quiz_consultant_name) ?>" loading="lazy" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';" class="cq-gen-9">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" class="cq-gen-10"><use href="./assets/img/svg/sprite.svg#ico23"></use></svg>
            <span class="cq-gen-11"></span>
          </div>
          <div class="cq-gen-12">
            <h4 class="cq-gen-13"><?= $quiz_consultant_name ?></h4>
            <p class="cq-gen-14"><?= $quiz_consultant_role ?></p>
          </div>
        </div>
        <button id="chat-close-btn" class="cq-gen-15">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" class="cq-gen-16"><use href="./assets/img/svg/sprite.svg#ico24"></use></svg>
        </button>
      </div>

      <div id="chat-messages" class="cq-gen-17"></div>

      <div id="typing-indicator" class="cq-gen-18">
        <?= $quiz_consultant_name ?> <?= $quiz_text_typing ?>
      </div>

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
      <div class="form-preloader hidden">
        <svg width="44" height="44" class="spinner" viewBox="0 0 50 50"><use href="./assets/img/svg/sprite.svg#ico25"></use></svg>
      </div>
      <div class="cq-field-group">
        <input type="text" name="fname" id="cq-field-fname" placeholder="<?= htmlspecialchars($quiz_placeholder_fname) ?>" required>
      </div>
      <div class="cq-field-group">
        <input type="text" name="lname" id="cq-field-lname" placeholder="<?= htmlspecialchars($quiz_placeholder_lname) ?>" required>
      </div>
      <div class="cq-field-group">
        <input type="email" name="email" id="cq-field-email" placeholder="<?= htmlspecialchars($quiz_placeholder_email) ?>" required>
      </div>
      <div class="cq-field-group">
        <input type="tel" name="fullphone" id="cq-field-phone" placeholder="" required>
        <span class="error-msg hide"></span>
      </div>
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

  <script>
    function toggleAccordion(id) {
      const content = document.getElementById("content-" + id);
      const item = document.getElementById("accordion-" + id);
      const isOpen = content.style.maxHeight && content.style.maxHeight !== "0px";
      
      document.querySelectorAll("[data-accordion] [id^='content-']").forEach(c => c.style.maxHeight = null);
      document.querySelectorAll("[data-accordion] [id^='accordion-']").forEach(i => i.removeAttribute("data-active"));
      
      if (!isOpen) {
        content.style.maxHeight = content.scrollHeight + "px";
        item.setAttribute("data-active", "");
      }
    }
  </script>
</body>
</html>