<?php

// Redirect if this folder's language already matches the root site's language (avoid duplicate content)
include '../lang.php';
$extractLang = str_replace('-', '', strtolower(explode('-', $site_lang)[0]));
$currentLang = 'nl';
if ($extractLang === $currentLang) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $site_url . "/lander/" . $site_domain . "/");
    exit();
}
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

$incomingClickId = $_GET['subid'] ?? $_GET['click_id'] ?? $_GET['clickid'] ?? $_GET['sub_id'] ?? null;
if (!empty($incomingClickId)) {
    $_SESSION['click_id'] = $incomingClickId;
    setcookie('_subid', $incomingClickId, time() + 86400 * 30, '/');
}

include_once '../indexnow.php';
require_once '../offer_seo.php';
include 'lang.php';

$host = $_SERVER['HTTP_HOST'];
$uri = strtok($_SERVER['REQUEST_URI'], '?');

// Note: unlike root index.php, this language-subfolder copy does NOT
// collapse its canonical to the bare domain root when served under /lander/ --
// doing so would point search engines at the English root page instead of
// this page, breaking the hreflang/canonical relationship for this language.
$canonical = 'https://' . $host . $uri;
?>
<!DOCTYPE html>
<html lang="<?= $site_lang ?>" data-theme="purple" class="">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>" />
<title><?= $home_meta_title ?></title>
<meta name="robots" content="INDEX, FOLLOW, MAX-IMAGE-PREVIEW:LARGE, MAX-SNIPPET:-1">
<meta name="description" content="<?= $home_meta_description ?>" />

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= $home_meta_title ?>">
<meta name="twitter:description" content="<?= $home_meta_description ?>">
<meta name="twitter:image" content="<?= $site_url ?>/lander/<?= $site_domain ?>/assets/img/meta/purple/img.png">

<!-- Open Graph Meta Tags (TZ Item 22) -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= $site_name ?>">
<meta property="og:url" content="<?= $canonical ?>">
<meta property="og:title" content="<?= $home_meta_title ?>">
<meta property="og:description" content="<?= $home_meta_description ?>">
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
<link rel="icon" type="image/png" href="../favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="../favicon.svg" />
<link rel="shortcut icon" href="../favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png" />
<?php endif; ?>
<link rel="manifest" href="../site.webmanifest" />

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
  "logo": {
    "@type": "ImageObject",
    "url": <?= json_encode($site_url . "/lander/" . $site_domain . "/favicon-96x96.png") ?>,
    "width": 96,
    "height": 96
  },
  "description": <?= json_encode($home_meta_description) ?>,
  "contactPoint": {
    "@type": "ContactPoint",
    "contactType": "customer service",
    "url": <?= json_encode($site_url . "/contacts.php") ?>,
    "availableLanguage": ["Bulgarian", "Czech", "Danish", "German", "Greek", "English", "Spanish", "Finnish", "French", "Croatian", "Hungarian", "Italian", "Japanese", "Malay", "Norwegian Bokmal", "Dutch", "Norwegian", "Polish", "Portuguese", "Romanian", "Slovak", "Swedish", "Turkish"]
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
  },
  "review": [
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": <?= json_encode($review_1_author) ?> },
      "reviewBody": <?= json_encode($review_1_text) ?>,
      "reviewRating": { "@type": "Rating", "ratingValue": 5, "bestRating": 5 }
    },
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": <?= json_encode($review_2_author) ?> },
      "reviewBody": <?= json_encode($review_2_text) ?>,
      "reviewRating": { "@type": "Rating", "ratingValue": 5, "bestRating": 5 }
    },
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": <?= json_encode($review_3_author) ?> },
      "reviewBody": <?= json_encode($review_3_text) ?>,
      "reviewRating": { "@type": "Rating", "ratingValue": 5, "bestRating": 5 }
    },
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": <?= json_encode($review_4_author) ?> },
      "reviewBody": <?= json_encode($review_4_text) ?>,
      "reviewRating": { "@type": "Rating", "ratingValue": 5, "bestRating": 5 }
    }
  ]
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

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": <?= json_encode($whatis_title) ?>,
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": <?= json_encode($whatis_icon_1_title) ?>, "description": <?= json_encode($whatis_icon_1_text) ?> },
    { "@type": "ListItem", "position": 2, "name": <?= json_encode($whatis_icon_2_title) ?>, "description": <?= json_encode($whatis_icon_2_text) ?> },
    { "@type": "ListItem", "position": 3, "name": <?= json_encode($whatis_icon_3_title) ?>, "description": <?= json_encode($whatis_icon_3_text) ?> },
    { "@type": "ListItem", "position": 4, "name": <?= json_encode($whatis_icon_4_title) ?>, "description": <?= json_encode($whatis_icon_4_text) ?> }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "HowTo",
  "name": <?= json_encode($how_title) ?>,
  "step": [
    {
      "@type": "HowToStep",
      "position": 1,
      "name": <?= json_encode($how_1_title) ?>,
      "text": <?= json_encode($how_1_text) ?>
    },
    {
      "@type": "HowToStep",
      "position": 2,
      "name": <?= json_encode($how_2_title) ?>,
      "text": <?= json_encode($how_2_text) ?>
    },
    {
      "@type": "HowToStep",
      "position": 3,
      "name": <?= json_encode($how_3_title) ?>,
      "text": <?= json_encode($how_3_text) ?>
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": <?= json_encode($benefits_title) ?>,
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": <?= json_encode($benefit_1_title) ?>, "description": <?= json_encode($benefit_1_text) ?> },
    { "@type": "ListItem", "position": 2, "name": <?= json_encode($benefit_2_title) ?>, "description": <?= json_encode($benefit_2_text) ?> },
    { "@type": "ListItem", "position": 3, "name": <?= json_encode($benefit_3_title) ?>, "description": <?= json_encode($benefit_3_text) ?> },
    { "@type": "ListItem", "position": 4, "name": <?= json_encode($benefit_4_title) ?>, "description": <?= json_encode($benefit_4_text) ?> },
    { "@type": "ListItem", "position": 5, "name": <?= json_encode($benefit_5_title) ?>, "description": <?= json_encode($benefit_5_text) ?> },
    { "@type": "ListItem", "position": 6, "name": <?= json_encode($benefit_6_title) ?>, "description": <?= json_encode($benefit_6_text) ?> }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": <?= json_encode($security_title) ?>,
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": <?= json_encode($security_1_title) ?>, "description": <?= json_encode($security_1_text) ?> },
    { "@type": "ListItem", "position": 2, "name": <?= json_encode($security_2_title) ?>, "description": <?= json_encode($security_2_text) ?> },
    { "@type": "ListItem", "position": 3, "name": <?= json_encode($security_3_title) ?>, "description": <?= json_encode($security_3_text) ?> },
    { "@type": "ListItem", "position": 4, "name": <?= json_encode($security_4_title) ?>, "description": <?= json_encode($security_4_text) ?> },
    { "@type": "ListItem", "position": 5, "name": <?= json_encode($security_5_title) ?>, "description": <?= json_encode($security_5_text) ?> },
    { "@type": "ListItem", "position": 6, "name": <?= json_encode($security_6_title) ?>, "description": <?= json_encode($security_6_text) ?> }
  ]
}
</script>

<!-- Fonts & Styles -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" /></noscript>

<link rel="preload" href="../assets/css/tailwind.min.css?v=<?= @filemtime(__DIR__ . '/../assets/css/tailwind.min.css') ?: time() ?>" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="../assets/css/tailwind.min.css" /></noscript>
<link rel="stylesheet" href="../assets/css/custom.css?v=<?= @filemtime(__DIR__ . '/../assets/css/custom.css') ?: time() ?>" />

<link rel="preload" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/css/intlTelInput.css" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/css/intlTelInput.css" /></noscript>

<link rel="preload" href="../assets/css/chat-quiz.css?v=<?= @filemtime(__DIR__ . '/../assets/css/chat-quiz.css') ?: time() ?>" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="../assets/css/chat-quiz.css" /></noscript>

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

<script src="../assets/js/lazyload.min.js" defer></script>
<script src="../assets/js/scripts.js" defer></script>
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
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico1"></use></svg>
          </span>
          <span class="menu-btn-icon opacity-100 group-data-active/menu-icon:opacity-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico2"></use></svg>
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
  <!-- main -->
  <main>
    <!-- hero (TZ Item 1, 5, 11) -->
    <div class="bg-surface-tertiary group/section relative">
      <div class="mirror-x absolute inset-0 overflow-hidden">
        <div class="bg-on-surface-tertiary-blur absolute top-[75%] left-[10%] h-[180px] w-[180px] -translate-1/2 rounded-full blur-[75px] md:top-[90%] md:h-[500px] md:w-[500px] md:blur-[150px]"></div>
        <div class="bg-on-surface-tertiary-blur absolute top-[15%] left-[90%] h-40 w-40 -translate-1/2 rounded-full blur-[75px] md:top-0 md:h-[400px] md:w-[400px] md:blur-[150px]"></div>
      </div>
      <div class="absolute inset-0 flex justify-center">
        <div class="container-whide relative w-screen">
          <div class="pointer-events-none absolute top-[-25px] left-[60%] z-3 w-20 -translate-x-1/2 rotate-10 md:top-[-15px] md:left-[8%] md:w-[150px]">
            <picture>
              <source type="image/webp" srcset="../assets/img/responsive/ethereum-f-320.png" sizes="(min-width: 768px) 150px, 80px">
              <img src="../assets/img/responsive/ethereum-f-320.png" width="320" height="320" alt="Ethereum coin" fetchpriority="high">
            </picture>
          </div>
          <div class="pointer-events-none absolute bottom-[340px] left-[30%] z-3 w-[150px] -translate-x-1/2 -rotate-10 md:top-[25px] md:left-[47%] md:w-[250px]">
            <picture>
              <source type="image/webp" srcset="../assets/img/responsive/bitcoin-r-320.png" sizes="(min-width: 768px) 250px, 150px">
              <img src="../assets/img/responsive/bitcoin-r-320.png" width="320" height="320" alt="Bitcoin coin" fetchpriority="high">
            </picture>
          </div>
          <div class="pointer-events-none absolute -bottom-[30px] left-[70%] z-7 w-[110px] -translate-x-1/2 md:bottom-[-70px] md:left-[92%] md:w-[200px]">
            <picture>
              <source type="image/webp" srcset="../assets/img/responsive/solana-l-320.png" sizes="(min-width: 768px) 200px, 110px">
              <img src="../assets/img/responsive/solana-l-320.png" width="320" height="320" alt="Solana coin" fetchpriority="high">
            </picture>
          </div>
        </div>
      </div>

      <div class="container-base gap-x-responsive-m32 gap-y-responsive-m120 py-responsive-vertical grid items-center md:grid-cols-2">
        <div class="gap-responsive-m24 text-on-surface-tertiary relative z-10 grid">
          <h1><?= $hero_h1 ?></h1>
          <p><?= $hero_text ?></p>
        </div>
        <div class="glass glass-blur px-responsive-p32 py-responsive-p48 rounded-responsive-30 relative z-5 overflow-hidden">
          <form id="hero-leadform" name="form" method="post" class="group rounded-responsive-30 -m-responsive-m8 p-responsive-p8 relative overflow-hidden leadform rf-form js-rf-form" action="../integration/send.php">
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
              <svg width="44" height="44" class="spinner" viewBox="0 0 50 50" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico3"></use></svg>
            </div>

            <div class="gap-responsive-m20 grid">
              <div class="gap-responsive-m12 grid">
                <input class="input" type="text" name="first_name" id="hero-first-name" placeholder="<?= $form_fname_placeholder ?>" required data-should-validate="">
                <input class="input" type="text" name="last_name" id="hero-last-name" placeholder="<?= $form_lname_placeholder ?>" required data-should-validate="">
                <input class="input" type="email" name="email" id="hero-email" placeholder="<?= $form_email_placeholder ?>" required data-should-validate="">
                <div class="relative w-full">
                  <input class="input iti__tel-input" type="tel" name="fullphone" id="hero-phone" placeholder="" required data-should-validate="" autocomplete="tel">
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
                  <img src="../assets/img/svg/visa-real.svg" alt="Visa" width="58" height="39" loading="lazy">
                  <img src="../assets/img/svg/mastercard-real.svg" alt="Mastercard" width="58" height="39" loading="lazy">
                  <img src="../assets/img/svg/maestro.svg" alt="Maestro" width="58" height="39" loading="lazy">
                  <img src="../assets/img/svg/sslsecure.svg" alt="Secure SSL Encryption" width="90" height="39" loading="lazy">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- partners (moved right after the hero form per client request) -->
    <div class="py-responsive-vertical">
      <div class="container-base gap-responsive-m32 grid">
        <p class="typography-b2 text-center uppercase tracking-widest opacity-60"><?= $partners_label ?></p>
        <div class="partners-grid">
          <img src="../assets/img/svg/partner-1.svg" alt="Partner 1" loading="lazy">
          <img src="../assets/img/svg/partner-2.svg" alt="Partner 2" loading="lazy">
          <img src="../assets/img/svg/partner-3.svg" alt="Partner 3" loading="lazy">
          <img src="../assets/img/svg/partner-4.svg" alt="Partner 4" loading="lazy">
          <img src="../assets/img/svg/partner-5.svg" alt="Partner 5" loading="lazy">
          <img src="../assets/img/svg/partner-6.svg" alt="Partner 6" loading="lazy">
          <img src="../assets/img/svg/partner-7.svg" alt="Partner 7" loading="lazy">
          <img src="../assets/img/svg/partner-8.svg" alt="Partner 8" loading="lazy">
        </div>
      </div>
    </div>

    <!-- stats (matches reference's "en chiffres" section) -->
    <div class="py-responsive-vertical">
      <div class="container-base gap-responsive-m32 grid">
        <div class="gap-responsive-m8 grid text-center">
          <p class="typography-b2 uppercase tracking-widest opacity-60"><?= $stats_label ?></p>
          <h2><?= $stats_title ?></h2>
        </div>
        <div class="stats-grid">
          <div class="stat-tile"><strong><?= $stat_1_value ?></strong><span><?= $stat_1_label ?></span></div>
          <div class="stat-tile"><strong><?= $stat_2_value ?></strong><span><?= $stat_2_label ?></span></div>
          <div class="stat-tile"><strong><?= $stat_3_value ?></strong><span><?= $stat_3_label ?></span></div>
          <div class="stat-tile"><strong><?= $stat_4_value ?></strong><span><?= $stat_4_label ?></span></div>
          <div class="stat-tile"><strong><?= $stat_5_value ?></strong><span><?= $stat_5_label ?></span></div>
          <div class="stat-tile"><strong><?= $stat_6_value ?></strong><span><?= $stat_6_label ?></span></div>
        </div>
      </div>
    </div>

    <!-- whatis (What is [brand]?) -->
    <div class="py-responsive-vertical">
      <div class="container-narrow gap-responsive-m32 grid">
        <div class="gap-responsive-m16 grid">
          <p class="typography-b2 uppercase tracking-widest opacity-60"><?= $whatis_label ?></p>
          <h2><?= $whatis_title ?></h2>
          <p class="typography-b1"><?= $whatis_intro ?></p>
        </div>
        <div class="whatis-grid">
          <div class="whatis-feature">
            <div class="card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico12"></use></svg>
            </div>
            <div class="gap-responsive-m8 grid">
              <p class="typography-h3"><?= $whatis_icon_1_title ?></p>
              <p><?= $whatis_icon_1_text ?></p>
            </div>
          </div>
          <div class="whatis-feature">
            <div class="card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico8"></use></svg>
            </div>
            <div class="gap-responsive-m8 grid">
              <p class="typography-h3"><?= $whatis_icon_2_title ?></p>
              <p><?= $whatis_icon_2_text ?></p>
            </div>
          </div>
          <div class="whatis-feature">
            <div class="card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico10"></use></svg>
            </div>
            <div class="gap-responsive-m8 grid">
              <p class="typography-h3"><?= $whatis_icon_3_title ?></p>
              <p><?= $whatis_icon_3_text ?></p>
            </div>
          </div>
          <div class="whatis-feature">
            <div class="card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico27"></use></svg>
            </div>
            <div class="gap-responsive-m8 grid">
              <p class="typography-h3"><?= $whatis_icon_4_title ?></p>
              <p><?= $whatis_icon_4_text ?></p>
            </div>
          </div>
        </div>
        <div class="whatis-process">
          <div class="whatis-process-step"><span class="step-num">1</span><?= $step_1 ?></div>
          <span class="whatis-process-arrow">&#8594;</span>
          <div class="whatis-process-step"><span class="step-num">2</span><?= $step_2 ?></div>
          <span class="whatis-process-arrow">&#8594;</span>
          <div class="whatis-process-step"><span class="step-num">3</span><?= $step_3 ?></div>
        </div>
        <div class="bg-surface-primary-card rounded-responsive-30 gap-responsive-m12 md:gap-responsive-m32 md:py-responsive-p32 md:px-responsive-p48 p-responsive-p20 flex items-center justify-between max-md:flex-col">
          <p class="typography-h3"><?= $whatis_cta_text ?></p>
          <a class="btn btn-secondary w-full max-w-[300px]" href="about.php"><?= $whatis_cta_link ?></a>
        </div>
      </div>
    </div>

    <!-- benefits (Principaux avantages, 6-card grid) -->
    <div class="py-responsive-vertical">
      <div class="container-base gap-responsive-m32 grid">
        <div class="gap-responsive-m8 grid">
          <p class="typography-b2 uppercase tracking-widest opacity-60"><?= $benefits_label ?></p>
          <h2><?= $benefits_title ?></h2>
        </div>
        <div class="benefits-grid">
          <div class="benefit-card">
            <div class="card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico10"></use></svg>
            </div>
            <h3 class="typography-h3"><?= $benefit_1_title ?></h3>
            <p><?= $benefit_1_text ?></p>
          </div>
          <div class="benefit-card">
            <div class="card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico17"></use></svg>
            </div>
            <h3 class="typography-h3"><?= $benefit_2_title ?></h3>
            <p><?= $benefit_2_text ?></p>
          </div>
          <div class="benefit-card">
            <div class="card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico27"></use></svg>
            </div>
            <h3 class="typography-h3"><?= $benefit_3_title ?></h3>
            <p><?= $benefit_3_text ?></p>
          </div>
          <div class="benefit-card">
            <div class="card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico8"></use></svg>
            </div>
            <h3 class="typography-h3"><?= $benefit_4_title ?></h3>
            <p><?= $benefit_4_text ?></p>
          </div>
          <div class="benefit-card">
            <div class="card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico2"></use></svg>
            </div>
            <h3 class="typography-h3"><?= $benefit_5_title ?></h3>
            <p><?= $benefit_5_text ?></p>
          </div>
          <div class="benefit-card">
            <div class="card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico27"></use></svg>
            </div>
            <h3 class="typography-h3"><?= $benefit_6_title ?></h3>
            <p><?= $benefit_6_text ?></p>
          </div>
        </div>
      </div>
    </div>

    <!-- safe funds section (matches reference's 6-item "Vos fonds sont en securite" list) -->
    <div class="py-responsive-vertical">
      <div class="container-narrow gap-responsive-m60 grid">
        <div class="gap-responsive-m16 grid text-center">
          <h2><?= $security_title ?></h2>
          <p class="typography-b1 text-left md:text-center"><?= $security_subtitle ?></p>
        </div>
        <div class="gap-responsive-m24 grid">
          <div class="gap-responsive-m16 grid md:grid-cols-[auto_1fr]">
            <div class="card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico7"></use></svg>
            </div>
            <div class="gap-responsive-m12 grid content-start">
              <div class="gap-responsive-m16 grid">
                <div class="gap-responsive-m8 grid">
                  <p class="typography-h3"><?= $security_1_title ?></p>
                  <p><?= $security_1_text ?></p>
                </div>
              </div>
            </div>
          </div>

          <div class="gap-responsive-m16 grid md:grid-cols-[auto_1fr]">
            <div class="card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico12"></use></svg>
            </div>
            <div class="gap-responsive-m12 grid content-start">
              <div class="gap-responsive-m16 grid">
                <div class="gap-responsive-m8 grid">
                  <p class="typography-h3"><?= $security_2_title ?></p>
                  <p><?= $security_2_text ?></p>
                </div>
              </div>
            </div>
          </div>

          <div class="gap-responsive-m16 grid md:grid-cols-[auto_1fr]">
            <div class="card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico10"></use></svg>
            </div>
            <div class="gap-responsive-m12 grid content-start">
              <div class="gap-responsive-m16 grid">
                <div class="gap-responsive-m8 grid">
                  <p class="typography-h3"><?= $security_3_title ?></p>
                  <p><?= $security_3_text ?></p>
                </div>
              </div>
            </div>
          </div>

          <div class="gap-responsive-m16 grid md:grid-cols-[auto_1fr]">
            <div class="card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico9"></use></svg>
            </div>
            <div class="gap-responsive-m12 grid content-start">
              <div class="gap-responsive-m16 grid">
                <div class="gap-responsive-m8 grid">
                  <p class="typography-h3"><?= $security_4_title ?></p>
                  <p><?= $security_4_text ?></p>
                </div>
              </div>
            </div>
          </div>

          <div class="gap-responsive-m16 grid md:grid-cols-[auto_1fr]">
            <div class="card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico29"></use></svg>
            </div>
            <div class="gap-responsive-m12 grid content-start">
              <div class="gap-responsive-m16 grid">
                <div class="gap-responsive-m8 grid">
                  <p class="typography-h3"><?= $security_5_title ?></p>
                  <p><?= $security_5_text ?></p>
                </div>
              </div>
            </div>
          </div>

          <div class="gap-responsive-m16 grid md:grid-cols-[auto_1fr]">
            <div class="card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico30"></use></svg>
            </div>
            <div class="gap-responsive-m12 grid content-start">
              <div class="gap-responsive-m16 grid">
                <div class="gap-responsive-m8 grid">
                  <p class="typography-h3"><?= $security_6_title ?></p>
                  <p><?= $security_6_text ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- cta2 (Free Guide Banner) -->
    <div class="bg-surface-tertiary max-md:pt-responsive-p160 relative">
      <div class="mirror-xy absolute inset-0 overflow-hidden">
        <div class="bg-surface-secondary absolute top-[75%] left-[10%] h-[180px] w-[180px] -translate-1/2 rounded-full blur-[75px] md:top-[90%] md:h-[500px] md:w-[500px] md:blur-[150px]"></div>
        <div class="bg-surface-secondary absolute top-[15%] left-[90%] h-40 w-40 -translate-1/2 rounded-full blur-[75px] md:top-0 md:h-[400px] md:w-[400px] md:blur-[150px]"></div>
      </div>
      <div class="absolute inset-0 flex justify-center">
        <div class="container-base relative w-screen">
          <div class="pointer-events-none absolute left-[25%] z-3 w-[120px] -translate-x-1/2 max-md:top-[41px] md:bottom-[-60px] md:left-[7%] md:w-[200px]">
            <picture>
              <source type="image/webp" srcset="../assets/img/responsive/tether-r-320.png" sizes="(min-width: 768px) 200px, 120px">
              <img src="../assets/img/responsive/tether-r-320.png" width="320" height="320" alt="Tether coin" loading="lazy">
            </picture>
          </div>
          <div class="pointer-events-none absolute top-[-66px] left-[65%] z-3 w-[200px] -translate-x-1/2 md:top-[-70px] md:left-[22%] md:w-[350px]">
            <picture>
              <source type="image/webp" srcset="../assets/img/responsive/bnb-l-320.png" sizes="(min-width: 768px) 350px, 200px">
              <img src="../assets/img/responsive/bnb-l-320.png" width="320" height="320" alt="BNB coin" loading="lazy">
            </picture>
          </div>
        </div>
      </div>
      <div class="container-base gap-responsive-m24 grid md:grid-cols-3">
        <div class="md:pl-responsive-horizontal gap-responsive-m32 py-responsive-p48 relative z-5 grid content-center md:col-span-2 md:col-start-2">
          <div class="bg-surface-secondary rounded-responsive-60 max-md:-left-responsive-horizontal absolute top-0 left-0 h-full w-screen max-md:rounded-b-none"></div>
          <div class="gap-responsive-m16 text-on-surface-secondary relative grid">
            <h2><?= $guide_cta_title ?></h2>
            <p class="typography-h3"><?= $guide_cta_subtitle ?></p>
          </div>
          <div class="gap-responsive-m20 relative grid">
            <a class="btn btn-primary w-full max-w-[400px]" href="sign.php"><?= $guide_cta_btn ?></a>
            <div class="gap-responsive-m12 flex flex-wrap">
              <div class="badge badge-outline badge-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico10"></use></svg>
                <?= $security_badge_1 ?>
              </div>
              <div class="badge badge-outline badge-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico7"></use></svg>
                <?= $security_badge_2 ?>
              </div>
              <div class="badge badge-outline badge-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico12"></use></svg>
                <?= $security_badge_3 ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- how it works (3-step registration guide) -->
    <div class="py-responsive-vertical">
      <div class="container-base gap-responsive-m32 grid">
        <div class="gap-responsive-m8 grid">
          <p class="typography-b2 uppercase tracking-widest opacity-60"><?= $how_label ?></p>
          <h2><?= $how_title ?></h2>
        </div>
        <div class="howit-grid">
          <div class="howit-step">
            <span class="step-num">1</span>
            <p class="typography-h3"><?= $how_1_title ?></p>
            <p><?= $how_1_text ?></p>
          </div>
          <div class="howit-step">
            <span class="step-num">2</span>
            <p class="typography-h3"><?= $how_2_title ?></p>
            <p><?= $how_2_text ?></p>
          </div>
          <div class="howit-step">
            <span class="step-num">3</span>
            <p class="typography-h3"><?= $how_3_title ?></p>
            <p><?= $how_3_text ?></p>
          </div>
        </div>
        <div class="bg-surface-primary-card rounded-responsive-30 gap-responsive-m12 md:gap-responsive-m32 md:py-responsive-p32 md:px-responsive-p48 p-responsive-p20 flex items-center justify-between max-md:flex-col">
          <p class="typography-h3"><?= $how_cta_text ?></p>
          <a class="btn btn-secondary w-full max-w-[300px]" href="product.php"><?= $how_cta_link ?></a>
        </div>
      </div>
    </div>

    <!-- approved by traders -->
    <div class="py-responsive-vertical">
      <div class="container-narrow gap-responsive-m60 grid">
        <div class="gap-responsive-m16 grid">
          <p class="typography-b2 uppercase tracking-widest opacity-60"><?= $trust_label ?></p>
          <h2><?= $trust_intro ?></h2>
        </div>
        <div class="gap-responsive-m24 grid">
          <div class="gap-responsive-m16 grid md:grid-cols-[auto_1fr]">
            <div class="card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico17"></use></svg>
            </div>
            <div class="gap-responsive-m8 grid content-start">
              <p class="typography-h3"><?= $trust_1_title ?></p>
              <p><?= $trust_1_text ?></p>
            </div>
          </div>
          <div class="gap-responsive-m16 grid md:grid-cols-[auto_1fr]">
            <div class="card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico12"></use></svg>
            </div>
            <div class="gap-responsive-m8 grid content-start">
              <p class="typography-h3"><?= $trust_2_title ?></p>
              <p><?= $trust_2_text ?></p>
            </div>
          </div>
          <div class="gap-responsive-m16 grid md:grid-cols-[auto_1fr]">
            <div class="card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico8"></use></svg>
            </div>
            <div class="gap-responsive-m8 grid content-start">
              <p class="typography-h3"><?= $trust_3_title ?></p>
              <p><?= $trust_3_text ?></p>
            </div>
          </div>
          <div class="gap-responsive-m16 grid md:grid-cols-[auto_1fr]">
            <div class="card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico16"></use></svg>
            </div>
            <div class="gap-responsive-m8 grid content-start">
              <p class="typography-h3"><?= $trust_4_title ?></p>
              <p><?= $trust_4_text ?></p>
            </div>
          </div>
        </div>
        <div class="bg-surface-primary-card rounded-responsive-30 gap-responsive-m12 md:gap-responsive-m32 md:py-responsive-p32 md:px-responsive-p48 p-responsive-p20 flex items-center justify-between max-md:flex-col">
          <p class="typography-h3"><?= $trust_cta_text ?></p>
          <a class="btn btn-secondary w-full max-w-[300px]" href="offer.php"><?= $trust_cta_link ?></a>
        </div>
      </div>
    </div>

    <!-- cta3 (Start trading with $250) -->
    <div class="bg-surface-tertiary max-md:pt-responsive-p160 relative">
      <div class="mirror-xy absolute inset-0 overflow-hidden">
        <div class="bg-surface-secondary absolute top-[75%] left-[10%] h-[180px] w-[180px] -translate-1/2 rounded-full blur-[75px] md:top-[90%] md:h-[500px] md:w-[500px] md:blur-[150px]"></div>
        <div class="bg-surface-secondary absolute top-[15%] left-[90%] h-40 w-40 -translate-1/2 rounded-full blur-[75px] md:top-0 md:h-[400px] md:w-[400px] md:blur-[150px]"></div>
      </div>
      <div class="absolute inset-0 flex justify-center">
        <div class="container-base relative w-screen">
          <div class="pointer-events-none absolute left-[25%] z-3 w-[120px] -translate-x-1/2 max-md:top-[41px] md:bottom-[-60px] md:left-[7%] md:w-[200px]">
            <picture>
              <source type="image/webp" srcset="../assets/img/responsive/tether-r-320.png" sizes="(min-width: 768px) 200px, 120px">
              <img src="../assets/img/responsive/tether-r-320.png" width="320" height="320" alt="Tether coin" loading="lazy">
            </picture>
          </div>
          <div class="pointer-events-none absolute top-[-66px] left-[65%] z-3 w-[200px] -translate-x-1/2 md:top-[-70px] md:left-[22%] md:w-[350px]">
            <picture>
              <source type="image/webp" srcset="../assets/img/responsive/bnb-l-320.png" sizes="(min-width: 768px) 350px, 200px">
              <img src="../assets/img/responsive/bnb-l-320.png" width="320" height="320" alt="BNB coin" loading="lazy">
            </picture>
          </div>
        </div>
      </div>
      <div class="container-base gap-responsive-m24 grid md:grid-cols-3">
        <div class="md:pl-responsive-horizontal gap-responsive-m32 py-responsive-p48 relative z-5 grid content-center md:col-span-2 md:col-start-2">
          <div class="bg-surface-secondary rounded-responsive-60 max-md:-left-responsive-horizontal absolute top-0 left-0 h-full w-screen max-md:rounded-b-none"></div>
          <div class="gap-responsive-m16 text-on-surface-secondary relative grid">
            <h2><?= $start_cta_title ?></h2>
            <p class="typography-h3"><?= $start_cta_desc ?></p>
          </div>
          <div class="gap-responsive-m20 relative grid">
            <a class="btn btn-primary w-full max-w-[400px]" href="sign.php"><?= $start_cta_btn ?></a>
            <div class="gap-responsive-m12 flex flex-wrap">
              <div class="badge badge-outline badge-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico12"></use></svg>
                <?= $badge_ssl ?>
              </div>
              <div class="badge badge-outline badge-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico17"></use></svg>
                <?= $badge_regulated ?>
              </div>
              <div class="badge badge-outline badge-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico18"></use></svg>
                <?= $badge_traders_trust ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- reviews (TZ Item 8: Exact 4 testimonials from TZ) -->
    <div class="py-responsive-vertical">
      <div class="container-base">
        <div class="gap-responsive-m20 relative grid">
          <div class="grid gap-1.5" data-slider="reviews" data-init="">
            <div class="-ml-responsive-m24 flex overflow-x-auto reviews-slider-container" data-slider-container="">
              <!-- Review 1 -->
              <div class="pl-responsive-m24 basis-4/5 md:basis-[480px] shrink-0" data-slider-item="">
                <div class="rounded-responsive-30 bg-surface-primary-card p-responsive-p24 gap-responsive-m16 flex h-full flex-col">
                  <div class="gap-responsive-m16 flex items-center">
                    <picture class="h-15 w-15 overflow-hidden rounded-full md:h-20 md:w-20 shrink-0">
                      <img src="../assets/img/responsive/review-1-80.jpg" width="80" height="80" class="w-full h-full object-cover" alt="<?= $review_1_author ?>" loading="lazy">
                    </picture>
                    <div class="gap-responsive-m8 grid grow justify-items-start">
                      <p class="typography-b1 font-semibold"><?= $review_1_author ?> – <?= $review_1_role ?></p>
                      <div class="badge badge-stroke text-on-surface-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico19"></use></svg>
                        <?= $review_verified_label ?>
                      </div>
                    </div>
                  </div>
                  <div class="gap-responsive-m8 text-on-surface-primary-accent flex text-amber-400">
                    <span>★★★★★</span>
                  </div>
                  <p class="typography-b1 grow"><?= $review_1_text ?></p>
                  <div class="badge badge-outline badge-primary w-fit">
                    <?= $review_1_badge ?>
                  </div>
                </div>
              </div>

              <!-- Review 2 -->
              <div class="pl-responsive-m24 basis-4/5 md:basis-[480px] shrink-0" data-slider-item="">
                <div class="rounded-responsive-30 bg-surface-primary-card p-responsive-p24 gap-responsive-m16 flex h-full flex-col">
                  <div class="gap-responsive-m16 flex items-center">
                    <picture class="h-15 w-15 overflow-hidden rounded-full md:h-20 md:w-20 shrink-0">
                      <img src="../assets/img/responsive/review-2-80.jpg" width="80" height="80" class="w-full h-full object-cover" alt="<?= $review_2_author ?>" loading="lazy">
                    </picture>
                    <div class="gap-responsive-m8 grid grow justify-items-start">
                      <p class="typography-b1 font-semibold"><?= $review_2_author ?> – <?= $review_2_role ?></p>
                      <div class="badge badge-stroke text-on-surface-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico19"></use></svg>
                        <?= $review_verified_label ?>
                      </div>
                    </div>
                  </div>
                  <div class="gap-responsive-m8 text-on-surface-primary-accent flex text-amber-400">
                    <span>★★★★★</span>
                  </div>
                  <p class="typography-b1 grow"><?= $review_2_text ?></p>
                  <div class="badge badge-outline badge-primary w-fit">
                    <?= $review_2_badge ?>
                  </div>
                </div>
              </div>

              <!-- Review 3 -->
              <div class="pl-responsive-m24 basis-4/5 md:basis-[480px] shrink-0" data-slider-item="">
                <div class="rounded-responsive-30 bg-surface-primary-card p-responsive-p24 gap-responsive-m16 flex h-full flex-col">
                  <div class="gap-responsive-m16 flex items-center">
                    <picture class="h-15 w-15 overflow-hidden rounded-full md:h-20 md:w-20 shrink-0">
                      <img src="../assets/img/responsive/review-3-80.jpg" width="80" height="80" class="w-full h-full object-cover" alt="<?= $review_3_author ?>" loading="lazy">
                    </picture>
                    <div class="gap-responsive-m8 grid grow justify-items-start">
                      <p class="typography-b1 font-semibold"><?= $review_3_author ?> – <?= $review_3_role ?></p>
                      <div class="badge badge-stroke text-on-surface-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico19"></use></svg>
                        <?= $review_verified_label ?>
                      </div>
                    </div>
                  </div>
                  <div class="gap-responsive-m8 text-on-surface-primary-accent flex text-amber-400">
                    <span>★★★★★</span>
                  </div>
                  <p class="typography-b1 grow"><?= $review_3_text ?></p>
                  <div class="badge badge-outline badge-primary w-fit">
                    <?= $review_3_badge ?>
                  </div>
                </div>
              </div>

              <!-- Review 4 -->
              <div class="pl-responsive-m24 basis-4/5 md:basis-[480px] shrink-0" data-slider-item="">
                <div class="rounded-responsive-30 bg-surface-primary-card p-responsive-p24 gap-responsive-m16 flex h-full flex-col">
                  <div class="gap-responsive-m16 flex items-center">
                    <picture class="h-15 w-15 overflow-hidden rounded-full md:h-20 md:w-20 shrink-0">
                      <img src="../assets/img/responsive/review-4-80.jpg" width="80" height="80" class="w-full h-full object-cover" alt="<?= $review_4_author ?>" loading="lazy">
                    </picture>
                    <div class="gap-responsive-m8 grid grow justify-items-start">
                      <p class="typography-b1 font-semibold"><?= $review_4_author ?> – <?= $review_4_role ?></p>
                      <div class="badge badge-stroke text-on-surface-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico19"></use></svg>
                        <?= $review_verified_label ?>
                      </div>
                    </div>
                  </div>
                  <div class="gap-responsive-m8 text-on-surface-primary-accent flex text-amber-400">
                    <span>★★★★★</span>
                  </div>
                  <p class="typography-b1 grow"><?= $review_4_text ?></p>
                  <div class="badge badge-outline badge-primary w-fit">
                    <?= $review_4_badge ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="reviews-nav">
            <button type="button" class="reviews-nav-btn" data-prev="reviews" aria-label="Previous reviews">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </button>
            <button type="button" class="reviews-nav-btn" data-next="reviews" aria-label="Next reviews">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- faq (TZ Item 17) -->
    <div class="py-responsive-vertical relative" id="faq">
      <div class="container-narrow gap-responsive-m60 grid">
        <h2 class="max-md:text-center"><?= $faq_title ?></h2>
        <div class="gap-responsive-m24 grid" data-accordion="">
          <div id="accordion-1" class="group/item rounded-responsive-30 border-button-secondary-default overflow-hidden border-2 transition-all">
            <h3><button class="bg-button-secondary-default group/button gap-responsive-m4 py-responsive-p12 px-responsive-p24 flex w-full cursor-pointer items-center justify-between" onclick="toggleAccordion(1)">
              <span class="typography-h3 text-left transition-colors"><?= $faq_q1 ?></span>
              <span class="accordion-icon"></span>
            </button></h3>
            <div id="content-1" class="max-h-0 overflow-hidden transition-all">
              <div class="gap-responsive-m2 py-responsive-p12 px-responsive-p24 grid">
                <p><?= $faq_a1 ?></p>
              </div>
            </div>
          </div>

          <div id="accordion-2" class="group/item rounded-responsive-30 border-button-secondary-default overflow-hidden border-2 transition-all">
            <h3><button class="bg-button-secondary-default group/button gap-responsive-m4 py-responsive-p12 px-responsive-p24 flex w-full cursor-pointer items-center justify-between" onclick="toggleAccordion(2)">
              <span class="typography-h3 text-left transition-colors"><?= $faq_q2 ?></span>
              <span class="accordion-icon"></span>
            </button></h3>
            <div id="content-2" class="max-h-0 overflow-hidden transition-all">
              <div class="gap-responsive-m2 py-responsive-p12 px-responsive-p24 grid">
                <p><?= $faq_a2 ?></p>
              </div>
            </div>
          </div>

          <div id="accordion-3" class="group/item rounded-responsive-30 border-button-secondary-default overflow-hidden border-2 transition-all">
            <h3><button class="bg-button-secondary-default group/button gap-responsive-m4 py-responsive-p12 px-responsive-p24 flex w-full cursor-pointer items-center justify-between" onclick="toggleAccordion(3)">
              <span class="typography-h3 text-left transition-colors"><?= $faq_q3 ?></span>
              <span class="accordion-icon"></span>
            </button></h3>
            <div id="content-3" class="max-h-0 overflow-hidden transition-all">
              <div class="gap-responsive-m2 py-responsive-p12 px-responsive-p24 grid">
                <p><?= $faq_a3 ?></p>
              </div>
            </div>
          </div>

          <div id="accordion-4" class="group/item rounded-responsive-30 border-button-secondary-default overflow-hidden border-2 transition-all">
            <h3><button class="bg-button-secondary-default group/button gap-responsive-m4 py-responsive-p12 px-responsive-p24 flex w-full cursor-pointer items-center justify-between" onclick="toggleAccordion(4)">
              <span class="typography-h3 text-left transition-colors"><?= $faq_q4 ?></span>
              <span class="accordion-icon"></span>
            </button></h3>
            <div id="content-4" class="max-h-0 overflow-hidden transition-all">
              <div class="gap-responsive-m2 py-responsive-p12 px-responsive-p24 grid">
                <p><?= $faq_a4 ?></p>
              </div>
            </div>
          </div>

          <div id="accordion-5" class="group/item rounded-responsive-30 border-button-secondary-default overflow-hidden border-2 transition-all">
            <h3><button class="bg-button-secondary-default group/button gap-responsive-m4 py-responsive-p12 px-responsive-p24 flex w-full cursor-pointer items-center justify-between" onclick="toggleAccordion(5)">
              <span class="typography-h3 text-left transition-colors"><?= $faq_q5 ?></span>
              <span class="accordion-icon"></span>
            </button></h3>
            <div id="content-5" class="max-h-0 overflow-hidden transition-all">
              <div class="gap-responsive-m2 py-responsive-p12 px-responsive-p24 grid">
                <p><?= $faq_a5 ?></p>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-surface-primary-card rounded-responsive-30 gap-responsive-m12 md:gap-responsive-m32 md:py-responsive-p32 md:px-responsive-p48 p-responsive-p20 grid items-center text-center">
          <p class="typography-h3"><?= $faq_cta_text ?></p>
          <div class="gap-responsive-m12 flex flex-wrap justify-center">
            <a class="btn btn-secondary w-full md:max-w-[300px]" href="faq.php"><?= $faq_cta_faq_btn ?></a>
            <a class="btn btn-secondary w-full md:max-w-[300px]" href="contacts.php"><?= $faq_cta_contact_btn ?></a>
          </div>
        </div>
      </div>
    </div>

    <!-- lead (Bottom lead form) -->
    <div class="bg-surface-tertiary relative">
      <div class="mirror-x absolute inset-0 overflow-hidden">
        <div class="bg-surface-secondary absolute top-[75%] left-[10%] h-[180px] w-[180px] -translate-1/2 rounded-full blur-[75px] md:top-[90%] md:h-[500px] md:w-[500px] md:blur-[150px]"></div>
        <div class="bg-surface-secondary absolute top-[15%] left-[90%] h-40 w-40 -translate-1/2 rounded-full blur-[75px] md:top-0 md:h-[400px] md:w-[400px] md:blur-[150px]"></div>
      </div>
      <div class="absolute inset-0 flex justify-center">
        <div class="container-whide relative w-screen">
          <div class="pointer-events-none absolute top-[-25px] left-[60%] z-3 w-20 -translate-x-1/2 rotate-10 md:top-[-15px] md:left-[8%] md:w-[150px]">
            <picture>
              <source type="image/webp" srcset="../assets/img/responsive/tether-f-320.png" sizes="(min-width: 768px) 150px, 80px">
              <img src="../assets/img/responsive/tether-f-320.png" width="320" height="320" alt="Tether" loading="lazy">
            </picture>
          </div>
          <div class="pointer-events-none absolute bottom-[405px] left-[30%] z-3 w-[150px] -translate-x-1/2 -rotate-10 md:top-[25px] md:left-[47%] md:w-[250px]">
            <picture>
              <source type="image/webp" srcset="../assets/img/responsive/bnb-r-320.png" sizes="(min-width: 768px) 250px, 150px">
              <img src="../assets/img/responsive/bnb-r-320.png" width="320" height="320" alt="BNB" loading="lazy">
            </picture>
          </div>
          <div class="pointer-events-none absolute -bottom-[30px] left-[70%] z-7 w-[110px] -translate-x-1/2 md:bottom-[-70px] md:left-[92%] md:w-[200px]">
            <picture>
              <source type="image/webp" srcset="../assets/img/responsive/xrp-l-320.png" sizes="(min-width: 768px) 200px, 120px">
              <img src="../assets/img/responsive/xrp-l-320.png" width="320" height="320" alt="XRP" loading="lazy">
            </picture>
          </div>
        </div>
      </div>

      <div class="container-base">
        <div class="py-responsive-vertical gap-responsive-m32 grid items-center md:min-h-[655px] md:grid-cols-2">
          <div class="gap-responsive-m32 relative z-10 grid">
            <h2 class="text-on-surface-secondary"><?= $lead_title ?></h2>
            <div class="text-on-surface-secondary gap-responsive-m32 grid">
              <p><?= $lead_p1 ?></p>
              <p><?= $lead_p2 ?></p>
            </div>
          </div>
          <div class="glass glass-blur rounded-responsive-30 py-responsive-m48 px-responsive-m32 gap-responsive-m24 relative z-5 grid overflow-hidden">
            <p class="typography-h3 text-on-surface-secondary text-center"><?= $lead_form_heading ?></p>
            <form id="bottom-leadform" name="form" method="post" class="group rounded-responsive-30 -m-responsive-m8 p-responsive-p8 relative overflow-hidden leadform rf-form js-rf-form" action="../integration/send.php">
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
                <svg width="44" height="44" class="spinner" viewBox="0 0 50 50" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico20"></use></svg>
              </div>

              <div class="gap-responsive-m20 grid">
                <div class="gap-responsive-m12 grid">
                  <input class="input" type="text" name="first_name" id="bottom-first-name" placeholder="<?= $form_fname_placeholder ?>" required data-should-validate="">
                  <input class="input" type="text" name="last_name" id="bottom-last-name" placeholder="<?= $form_lname_placeholder ?>" required data-should-validate="">
                  <input class="input" type="email" name="email" id="bottom-email" placeholder="<?= $form_email_placeholder ?>" required data-should-validate="">
                  <div class="relative w-full">
                    <input class="input iti__tel-input" type="tel" name="fullphone" id="bottom-phone" placeholder="" required data-should-validate="" autocomplete="tel">
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
                    <img src="../assets/img/svg/visa-real.svg" alt="Visa" width="58" height="39" loading="lazy">
                    <img src="../assets/img/svg/mastercard-real.svg" alt="Mastercard" width="58" height="39" loading="lazy">
                    <img src="../assets/img/svg/maestro.svg" alt="Maestro" width="58" height="39" loading="lazy">
                    <img src="../assets/img/svg/sslsecure.svg" alt="Secure SSL Encryption" width="90" height="39" loading="lazy">
                  </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>

    <!-- info (Key Features & Rating Table) -->
    <section class="py-responsive-vertical">
      <div class="container-base gap-responsive-m60 grid">
        <h2 class="text-center"><?= $features_title ?></h2>
        <table class="w-full border-collapse text-left">
          <tbody>
            <tr class="odd:bg-surface-primary-card">
              <th class="typography-b1 p-responsive-p16"><?= $feature_1_title ?></th>
              <td class="p-responsive-p16 pl-0"><?= $feature_1_val ?></td>
            </tr>
            <tr class="odd:bg-surface-primary-card">
              <th class="typography-b1 p-responsive-p16"><?= $feature_2_title ?></th>
              <td class="p-responsive-p16 pl-0"><?= $feature_2_val ?></td>
            </tr>
            <tr class="odd:bg-surface-primary-card">
              <th class="typography-b1 p-responsive-p16"><?= $feature_3_title ?></th>
              <td class="p-responsive-p16 pl-0"><?= $feature_3_val ?></td>
            </tr>
            <tr class="odd:bg-surface-primary-card">
              <th class="typography-b1 p-responsive-p16"><?= $feature_4_title ?></th>
              <td class="p-responsive-p16 pl-0"><?= $feature_4_val ?></td>
            </tr>
            <tr class="odd:bg-surface-primary-card">
              <th class="typography-b1 p-responsive-p16"><?= $feature_5_title ?></th>
              <td class="p-responsive-p16 pl-0"><?= $feature_5_val ?></td>
            </tr>
            <tr class="odd:bg-surface-primary-card">
              <th class="typography-b1 p-responsive-p16"><?= $feature_6_title ?></th>
              <td class="p-responsive-p16 pl-0"><?= $feature_6_val ?></td>
            </tr>
            <tr class="odd:bg-surface-primary-card">
              <th class="typography-b1 p-responsive-p16"><?= $feature_7_title ?></th>
              <td class="p-responsive-p16 pl-0"><?= $feature_7_val ?></td>
            </tr>
          </tbody>
        </table>

        <div class="md:border-surface-primary-card md:rounded-responsive-20 md:px-responsive-p80 md:py-responsive-p32 md:border">
          <div class="border-surface-primary-card gap-responsive-m24 rounded-responsive-20 px-responsive-p16 py-responsive-p20 md:gap-responsive-m16 md:px-responsive-p32 md:py-responsive-p24 grid justify-items-center border">
            <h2 class="typography-h3 gap-x-responsive-m16 gap-y-responsive-m20 flex flex-wrap items-center">
              <?= $reviews_section_title ?>
              <span class="text-on-surface-secondary bg-surface-secondary px-responsive-p8 pt-responsive-p8 pb-responsive-p2 typography-b3 inline-flex items-center justify-center rounded-full leading-none uppercase">
                <?= $reviews_badge_trustworthy ?>
              </span>
            </h2>
            <div class="gap-responsive-m12 flex flex-wrap items-center">
              <strong class="text-on-surface-primary-accent leading-none"><?= $reviews_summary_rating ?></strong>
              <span class="text-amber-400 leading-none" role="img" aria-label="4.7 out of 5 stars">
                ★★★★☆
              </span>
              <span class="gap-responsive-m4 typography-b3 text-gray-400 flex flex-wrap">
                <span><strong><?= $reviews_summary_count ?></strong> reviews ·</span>
                <span>Based on <strong><?= $rating_count ?></strong> ratings ·</span>
                <span>Rated out of <strong>5</strong></span>
              </span>
            </div>
            <p class="text-center"><?= $reviews_summary_desc ?></p>
          </div>
        </div>
      </div>
    </section>

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
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico21"></use></svg>
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
    <button id="chat-toggle-btn" class="cq-pulse-button cq-gen-2" aria-label="Open chat">
      <span id="chat-noti-dot" class="cq-gen-3">1</span>
      <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" id="cq-chat-icon" class="cq-gen-4" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico22"></use></svg>
    </button>

    <div id="chat-window" class="cq-gen-5">
      <div class="cq-gen-6">
        <div class="cq-gen-7">
          <div class="cq-gen-8">
            <img src="../consultant.webp" alt="<?= htmlspecialchars($quiz_consultant_name) ?>" loading="lazy" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';" class="cq-gen-9">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" class="cq-gen-10" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico23"></use></svg>
            <span class="cq-gen-11"></span>
          </div>
          <div class="cq-gen-12">
            <h4 class="cq-gen-13"><?= $quiz_consultant_name ?></h4>
            <p class="cq-gen-14"><?= $quiz_consultant_role ?></p>
          </div>
        </div>
        <button id="chat-close-btn" class="cq-gen-15" aria-label="Close chat">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" class="cq-gen-16" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico24"></use></svg>
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
    <form id="cq-isolated-form" class="leadform rf-form js-rf-form cq-pure-custom-form" method="post" action="../integration/send.php">
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
        <svg width="44" height="44" class="spinner" viewBox="0 0 50 50" aria-hidden="true"><use href="../assets/img/svg/sprite.svg#ico25"></use></svg>
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
  <script src="../integration/validation.js?v=<?= @filemtime(__DIR__ . '/../integration/validation.js') ?: time() ?>" defer></script>
  <script src="../assets/js/chat-quiz.js?v=<?= @filemtime(__DIR__ . '/../assets/js/chat-quiz.js') ?: time() ?>" defer></script>

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