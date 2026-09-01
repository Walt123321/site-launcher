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
<html lang="<?= $site_lang ?>" class="scroll-smooth">
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
<meta name="twitter:image" content="<?= $site_url ?>/lander/<?= $site_domain ?>/assets/img/responsive/hero-bg-320.png">

<!-- Open Graph Meta Tags (TZ Item 19) -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= $site_name ?>">
<meta property="og:url" content="<?= $canonical ?>">
<meta property="og:title" content="<?= $home_meta_title ?>">
<meta property="og:description" content="<?= $home_meta_description ?>">
<meta property="og:image" content="<?= $site_url ?>/lander/<?= $site_domain ?>/assets/img/responsive/hero-bg-320.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="<?= $site_name ?>">

<!-- Favicon (TZ Item 7) -->
<?php if (!empty($country_flag_code)): ?>
<link rel="icon" type="image/png" href="https://flagcdn.com/96x72/<?= $country_flag_code ?>.png" sizes="96x96" />
<link rel="shortcut icon" href="https://flagcdn.com/48x36/<?= $country_flag_code ?>.png" />
<link rel="apple-touch-icon" sizes="180x180" href="https://flagcdn.com/180x135/<?= $country_flag_code ?>.png" />
<?php else: ?>
<link rel="icon" type="image/png" href="./favicon-96x96.png" sizes="96x96" />
<link rel="shortcut icon" href="./favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
<?php endif; ?>
<link rel="manifest" href="./site.webmanifest" />

<!-- Canonical & Hreflang (TZ Item 13) -->
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

<!-- Schema.org JSON-LD (TZ Item 21) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Home", "item": "<?= $site_url ?>/" }
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": <?= json_encode($site_name) ?>,
  "url": <?= json_encode($site_url . "/") ?>,
  "description": <?= json_encode($home_meta_description) ?>,
  "inLanguage": <?= json_encode($site_lang) ?>
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": <?= json_encode($site_name) ?>,
  "url": <?= json_encode($site_url . "/") ?>,
  "logo": <?= json_encode($site_url . "/favicon.ico") ?>,
  "description": <?= json_encode($home_meta_description) ?>,
  "contactPoint": {
    "@type": "ContactPoint",
    "email": <?= json_encode("info@" . $site_domain) ?>,
    "contactType": "customer support",
    "availableLanguage": "English"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    { "@type": "Question", "name": <?= json_encode($faq_q1) ?>, "acceptedAnswer": { "@type": "Answer", "text": <?= json_encode($faq_a1) ?> } },
    { "@type": "Question", "name": <?= json_encode($faq_q2) ?>, "acceptedAnswer": { "@type": "Answer", "text": <?= json_encode($faq_a2) ?> } },
    { "@type": "Question", "name": <?= json_encode($faq_q3) ?>, "acceptedAnswer": { "@type": "Answer", "text": <?= json_encode($faq_a3) ?> } },
    { "@type": "Question", "name": <?= json_encode($faq_q4) ?>, "acceptedAnswer": { "@type": "Answer", "text": <?= json_encode($faq_a4) ?> } },
    { "@type": "Question", "name": <?= json_encode($faq_q5) ?>, "acceptedAnswer": { "@type": "Answer", "text": <?= json_encode($faq_a5) ?> } }
  ]
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
    "author": {
        "@type": "Brand",
        "name": "<?= $site_name ?>"
    }
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
<link rel="preload" href="./assets/css/calculator.css?v=<?= @filemtime(__DIR__ . '/./assets/css/calculator.css') ?: time() ?>" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="./assets/css/calculator.css" /></noscript>
<link rel="preload" href="./assets/css/chat-quiz.css?v=<?= @filemtime(__DIR__ . '/./assets/css/chat-quiz.css') ?: time() ?>" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="./assets/css/chat-quiz.css" /></noscript>

<script src="./assets/js/scripts.js?v=<?= @filemtime(__DIR__ . '/./assets/js/scripts.js') ?: time() ?>" defer></script>
<script src="./assets/js/calculator.js?v=<?= @filemtime(__DIR__ . '/./assets/js/calculator.js') ?: time() ?>" defer></script>
</head>

<body class="flex min-h-screen flex-col">
  <!-- header (TZ Item 2: language removed from desktop & mobile header) -->
  <header class="z-11 min-h-16 py-3 md:min-h-20 md:py-5 absolute w-full">
    <div class="container-base header-container">
      <div class="flex items-center justify-between gap-8 pt-2">
        <a class="text-[25px] md:text-[42px] lg:text-[62px] font-bold bg-linear-to-r from-brand-start to-brand-end bg-clip-text text-transparent" href="<?= $site_url ?>/"><?= $site_name ?></a>
        <div class="ml-auto flex items-center gap-4 lg:ml-0">
          <a class="flex min-w-[100px] items-center justify-center rounded-full text-center border py-4 font-medium text-[12px] md:text-[18px] text-black md:min-w-40 bg-linear-to-r from-brand-start to-brand-end" href="#trading"><?= $form_btn_submit ?></a>
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

  <!-- main -->
  <main class="flex grow flex-col overflow-hidden">

    <!-- hero -->
    <section class="relative min-h-[1080px]">
      <div class="absolute inset-0">
        <picture class="object-cover object-top">
          <source type="image/avif" srcset="./assets/img/responsive/hero-bg-640.avif 640w, ./assets/img/responsive/hero-bg-1280.avif 1280w, ./assets/img/responsive/hero-bg-1920.avif 1920w" sizes="100vw">
          <source type="image/webp" srcset="./assets/img/responsive/hero-bg-640.webp 640w, ./assets/img/responsive/hero-bg-1280.webp 1280w, ./assets/img/responsive/hero-bg-1920.webp 1920w" sizes="100vw">
          <img src="./assets/img/responsive/hero-bg-1280.png" srcset="./assets/img/responsive/hero-bg-640.png 640w, ./assets/img/responsive/hero-bg-1280.png 1280w, ./assets/img/responsive/hero-bg-1920.png 1920w" sizes="100vw" alt="<?= $site_name ?> background" width="1920" height="2145" class="w-full h-auto" fetchpriority="high">
        </picture>
      </div>
      <div class="container-base relative z-10">
        <h1 class="max-w-[980px] mx-auto pt-40 text-center mb-8">
          <mark><?= $site_name ?></mark> Platform
        </h1>
        <p class="font-medium text-[16px] md:text-[18px] text-grey-light text-center mb-14"><?= $hero_subtitle ?></p>

        <div class="flex flex-col md:flex-row items-center justify-center gap-14 mb-[60px] md:mb-[100px]">
          <div class="flex items-center">
            <picture class="max-w-[48px] w-full shrink-0">
              <source type="image/avif" srcset="./assets/img/responsive/ava-1-106.avif">
              <source type="image/webp" srcset="./assets/img/responsive/ava-1-106.webp">
              <img src="./assets/img/responsive/ava-1-106.png" alt="member" width="106" height="106" loading="lazy">
            </picture>
            <picture class="max-w-[48px] w-full ml-[-10px] shrink-0">
              <source type="image/avif" srcset="./assets/img/responsive/ava-2-108.avif">
              <source type="image/webp" srcset="./assets/img/responsive/ava-2-108.webp">
              <img src="./assets/img/responsive/ava-2-108.png" alt="member" width="108" height="108" loading="lazy">
            </picture>
            <picture class="max-w-[48px] w-full ml-[-10px] shrink-0">
              <source type="image/avif" srcset="./assets/img/responsive/ava-3-108.avif">
              <source type="image/webp" srcset="./assets/img/responsive/ava-3-108.webp">
              <img src="./assets/img/responsive/ava-3-108.png" alt="member" width="108" height="108" loading="lazy">
            </picture>
            <picture class="max-w-[48px] w-full ml-[-10px] shrink-0">
              <source type="image/avif" srcset="./assets/img/responsive/add-108.avif">
              <source type="image/webp" srcset="./assets/img/responsive/add-108.webp">
              <img src="./assets/img/responsive/add-108.png" alt="and more members" width="108" height="108" loading="lazy">
            </picture>
            <div class="flex flex-col gap-2 ml-4 shrink-0">
              <p class="font-bold text-[16px] md:text-[18px]"><?= $hero_badge_title ?></p>
              <p class="text-[16px] text-grey-light"><?= $hero_badge_subtitle ?></p>
            </div>
          </div>

          <div class="bg-[rgba(255,255,255,0.10)] rounded-[18px] py-4 px-5">
            <div class="flex items-center gap-4">
              <p class="text-[26px] md:text-[36px] font-bold"><?= $hero_rating_value ?></p>
              <div class="flex flex-col gap-1">
                <span class="text-amber-400 text-lg leading-none" aria-hidden="true">★★★★★</span>
                <p class="text-grey-light text-[15px]">Based on <?= $hero_rating_count ?> reviews</p>
              </div>
            </div>
          </div>
        </div>

        <div class="box mask-[linear-gradient(to_bottom,black_10%,transparent_90%)]">
          <picture class="flex justify-center items-center">
            <source type="image/avif" srcset="./assets/img/responsive/laptop-2-640.avif 640w, ./assets/img/responsive/laptop-2-1280.avif 1280w" sizes="(min-width: 930px) 930px, 100vw">
            <source type="image/webp" srcset="./assets/img/responsive/laptop-2-640.webp 640w, ./assets/img/responsive/laptop-2-1280.webp 1280w" sizes="(min-width: 930px) 930px, 100vw">
            <img src="./assets/img/responsive/laptop-2-1280.png" srcset="./assets/img/responsive/laptop-2-640.png 640w, ./assets/img/responsive/laptop-2-1280.png 1280w" sizes="(min-width: 930px) 930px, 100vw" alt="<?= $site_name ?> trading dashboard" width="1280" height="813" loading="lazy" class="w-full h-auto max-w-[930px]">
          </picture>
        </div>

        <div class="py-[60px] px-8 flex flex-col lg:flex-row items-center justify-between bg-linear-to-r from-brand-start to-brand-end rounded-3xl text-black gap-[30px]" id="trading">
          <div class="flex flex-col gap-6 max-w-[460px] text-center lg:text-left">
            <p class="font-black text-[36px] md:text-[48px]"><?= $form_title ?></p>
            <p class="font-medium text-[16px] lg:text-[24px]"><?= $form_desc ?></p>
          </div>
          <div class="max-w-[500px] w-full">
            <form name="form" method="post" class="flex flex-col gap-5 leadform rf-form js-rf-form" action="./integration/send.php">
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
                <svg width="44" height="44" class="spinner" viewBox="0 0 50 50"><use href="./assets/img/svg/sprite.svg#spinner"></use></svg>
              </div>

              <div class="flex w-full flex-col items-stretch gap-4">
                <div class="flex gap-4 flex-col md:flex-row">
                  <input class="input focus:outline-primary-dark min-h-[60px] w-full min-w-[186px] bg-white p-[18px_36px]" type="text" name="fname" placeholder="<?= $form_fname_placeholder ?>" required data-should-validate="">
                  <input class="input focus:outline-primary-dark min-h-[60px] w-full min-w-[186px] bg-white p-[18px_36px]" type="text" name="lname" placeholder="<?= $form_lname_placeholder ?>" required data-should-validate="">
                </div>
                <input class="input focus:outline-primary-dark min-h-[60px] w-full min-w-[186px] bg-white p-[18px_36px]" type="email" name="email" placeholder="<?= $form_email_placeholder ?>" required data-should-validate="">
                <div class="relative w-full">
                  <input class="input focus:outline-primary-dark min-h-[60px] w-full min-w-[186px] bg-white p-[18px_36px] iti__tel-input" type="tel" name="fullphone" placeholder="" required data-should-validate="" autocomplete="tel">
                  <span class="error-msg hide"></span>
                </div>
                <button class="flex items-center justify-center rounded-full py-5 font-bold text-black bg-linear-to-r from-brand-start to-brand-end" type="submit"><?= $form_btn_submit ?></button>
                <p class="text-[13px]"><?= $form_disclaimer_text ?></p>

                <!-- Payment badges (TZ Item 3) -->
                <div class="pay-badges">
                  <img src="./assets/img/svg/visa-real.svg" alt="Visa" width="58" height="39" loading="lazy">
                  <img src="./assets/img/svg/mastercard-real.svg" alt="Mastercard" width="58" height="39" loading="lazy">
                  <img src="./assets/img/svg/maestro.svg" alt="Maestro" width="58" height="39" loading="lazy">
                  <img src="./assets/img/svg/sslsecure.svg" alt="Secure SSL Encryption" width="90" height="39" loading="lazy">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- stats ("Get to Know the Platform" -- TZ Item 4: video block removed, kept the intro + stats) -->
    <section class="section">
      <div class="container-base">
        <h2 class="mb-4 text-center"><?= $stats_label ?></h2>
        <p class="mb-4 text-center"><?= $stats_title ?></p>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-[30px] mt-[60px]">
          <div class="bg-gradient-primary p-[30px] rounded-2xl flex flex-col gap-4 min-w-[270px]">
            <p class="text-[26px] md:text-[36px] font-bold"><?= $stat_1_value ?></p>
            <p class="text-[16px] md:text-[18px] font-medium"><?= $stat_1_label ?></p>
          </div>
          <div class="bg-gradient-primary p-[30px] rounded-2xl flex flex-col gap-4 min-w-[270px]">
            <p class="text-[26px] md:text-[36px] font-bold"><?= $stat_2_value ?></p>
            <p class="text-[16px] md:text-[18px] font-medium"><?= $stat_2_label ?></p>
          </div>
          <div class="bg-gradient-primary p-[30px] rounded-2xl flex flex-col gap-4 min-w-[270px]">
            <p class="text-[26px] md:text-[36px] font-bold"><?= $stat_3_value ?></p>
            <p class="text-[16px] md:text-[18px] font-medium"><?= $stat_3_label ?></p>
          </div>
          <div class="bg-gradient-primary p-[30px] rounded-2xl flex flex-col gap-4 min-w-[270px]">
            <p class="text-[26px] md:text-[36px] font-bold"><?= $stat_4_value ?></p>
            <p class="text-[16px] md:text-[18px] font-medium"><?= $stat_4_label ?></p>
          </div>
        </div>
      </div>
    </section>

    <!-- why choose us (TZ Item 22: H3, TZ Item 23: alt = H3 text) -->
    <section class="section">
      <div class="container-base">
        <div class="border-gradient mb-14">
          <p class="text-[24px] font-bold text-grey-light mb-4"><?= $why_label ?></p>
          <h2><?= $why_title ?></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-[30px]">
          <div class="p-px rounded-2xl bg-[linear-gradient(90deg,rgba(43,253,243,0.36),rgba(218,254,51,0.36))]">
            <div class="flex flex-col md:flex-row items-center rounded-2xl bg-black px-4 pb-8 md:py-2 h-full">
              <picture class="max-w-[120px] md:max-w-[190px] w-full ml-[-10px]"><img src="./assets/img/responsive/why-1-320.png" alt="<?= $why_1_title ?>" width="320" height="287" loading="lazy"></picture>
              <div class="flex flex-col gap-2 text-center md:text-left">
                <h3 class="text-[24px] md:text-[28px] font-bold"><?= $why_1_title ?></h3>
                <p class="text-[16px] md:text-[18px] text-grey-light"><?= $why_1_text ?></p>
              </div>
            </div>
          </div>
          <div class="p-px rounded-2xl bg-[linear-gradient(90deg,rgba(43,253,243,0.36),rgba(218,254,51,0.36))]">
            <div class="flex flex-col md:flex-row items-center rounded-2xl bg-black px-4 pb-8 md:py-2 h-full">
              <picture class="max-w-[120px] md:max-w-[190px] w-full ml-[-10px]"><img src="./assets/img/responsive/why-2-320.png" alt="<?= $why_2_title ?>" width="320" height="287" loading="lazy"></picture>
              <div class="flex flex-col gap-2 text-center md:text-left">
                <h3 class="text-[24px] md:text-[28px] font-bold"><?= $why_2_title ?></h3>
                <p class="text-[16px] md:text-[18px] text-grey-light"><?= $why_2_text ?></p>
              </div>
            </div>
          </div>
          <div class="p-px rounded-2xl bg-[linear-gradient(90deg,rgba(43,253,243,0.36),rgba(218,254,51,0.36))]">
            <div class="flex flex-col md:flex-row items-center rounded-2xl bg-black px-4 pb-8 md:py-2 h-full">
              <picture class="max-w-[120px] md:max-w-[190px] w-full ml-[-10px]"><img src="./assets/img/responsive/why-3-320.png" alt="<?= $why_3_title ?>" width="320" height="287" loading="lazy"></picture>
              <div class="flex flex-col gap-2 text-center md:text-left">
                <h3 class="text-[24px] md:text-[28px] font-bold"><?= $why_3_title ?></h3>
                <p class="text-[16px] md:text-[18px] text-grey-light"><?= $why_3_text ?></p>
              </div>
            </div>
          </div>
          <div class="p-px rounded-2xl bg-[linear-gradient(90deg,rgba(43,253,243,0.36),rgba(218,254,51,0.36))]">
            <div class="flex flex-col md:flex-row items-center rounded-2xl bg-black px-4 pb-8 md:py-2 h-full">
              <picture class="max-w-[120px] md:max-w-[190px] w-full ml-[-10px]"><img src="./assets/img/responsive/why-4-320.png" alt="<?= $why_4_title ?>" width="320" height="287" loading="lazy"></picture>
              <div class="flex flex-col gap-2 text-center md:text-left">
                <h3 class="text-[24px] md:text-[28px] font-bold"><?= $why_4_title ?></h3>
                <p class="text-[16px] md:text-[18px] text-grey-light"><?= $why_4_text ?></p>
              </div>
            </div>
          </div>
          <div class="p-px rounded-2xl bg-[linear-gradient(90deg,rgba(43,253,243,0.36),rgba(218,254,51,0.36))]">
            <div class="flex flex-col md:flex-row items-center rounded-2xl bg-black px-4 pb-8 md:py-2 h-full">
              <picture class="max-w-[120px] md:max-w-[190px] w-full ml-[-10px]"><img src="./assets/img/responsive/why-5-320.png" alt="<?= $why_5_title ?>" width="320" height="287" loading="lazy"></picture>
              <div class="flex flex-col gap-2 text-center md:text-left">
                <h3 class="text-[24px] md:text-[28px] font-bold"><?= $why_5_title ?></h3>
                <p class="text-[16px] md:text-[18px] text-grey-light"><?= $why_5_text ?></p>
              </div>
            </div>
          </div>
          <div class="p-px rounded-2xl bg-[linear-gradient(90deg,rgba(43,253,243,0.36),rgba(218,254,51,0.36))]">
            <div class="flex flex-col md:flex-row items-center rounded-2xl bg-black px-4 pb-8 md:py-2 h-full">
              <picture class="max-w-[120px] md:max-w-[190px] w-full ml-[-10px]"><img src="./assets/img/responsive/why-6-320.png" alt="<?= $why_6_title ?>" width="320" height="287" loading="lazy"></picture>
              <div class="flex flex-col gap-2 text-center md:text-left">
                <h3 class="text-[24px] md:text-[28px] font-bold"><?= $why_6_title ?></h3>
                <p class="text-[16px] md:text-[18px] text-grey-light"><?= $why_6_text ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- how it works -->
    <section class="section">
      <div class="container-base">
        <div class="border-gradient mb-14">
          <p class="text-[24px] font-bold text-grey-light mb-4"><?= $how_label ?></p>
          <h2><?= $how_title ?></h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-[30px] bg-dark rounded-[18px]">
          <div class="pt-8 px-8 pb-16 bg-primary-light rounded-3xl scale-[1] xl:scale-[1.1] text-black">
            <div class="bg-white flex items-center justify-center w-16 h-16 rounded-full text-black text-[24px] md:text-[28px] font-bold mb-6">01</div>
            <p class="mb-4 text-[24px] md:text-[28px] font-bold"><?= $how_1_title ?></p>
            <p class="mb-[30px]"><?= $how_1_text ?></p>
            <a class="flex max-w-full md:max-w-[170px] w-full items-center justify-center p-3 min-h-[61px] rounded-[58px] font-medium bg-secondary-lighter" href="#trading"><?= $how_1_btn ?></a>
          </div>
          <div class="p-[30px]">
            <div class="bg-gradient-step flex items-center justify-center w-16 h-16 rounded-full text-[24px] md:text-[28px] font-bold mb-6">
              <div class="bg-linear-to-r from-brand-start to-brand-end bg-clip-text text-transparent">02</div>
            </div>
            <p class="mb-4 text-[24px] md:text-[28px] font-bold"><?= $how_2_title ?></p>
            <p class="mb-[30px]"><?= $how_2_text ?></p>
            <div class="bg-gradient-soft p-3 rounded-xl text-grey-light"><?= $how_2_note ?></div>
          </div>
          <div class="p-[30px]">
            <div class="bg-gradient-step flex items-center justify-center w-16 h-16 rounded-full text-[24px] md:text-[28px] font-bold mb-6">
              <div class="bg-linear-to-r from-brand-start to-brand-end bg-clip-text text-transparent">03</div>
            </div>
            <p class="mb-4 text-[24px] md:text-[28px] font-bold"><?= $how_3_title ?></p>
            <p class="mb-[30px]"><?= $how_3_text ?></p>
            <div class="bg-gradient-soft p-3 rounded-xl text-grey-light"><?= $how_3_note ?></div>
          </div>
        </div>
      </div>
    </section>

    <!-- calculator (TZ Item 24, adapted from template_4) -->
    <section class="calculator-section" id="calculator" aria-labelledby="calculator-title" data-currency="<?= $app_currency ?>">
      <div class="calculator__main container">
        <header class="subtitle">
          <span class="subtitle__badge"><?= $calc_badge ?></span>
          <h2 class="subtitle-h2 max-w-600" id="calculator-title"><?= $calc_title ?></h2>
        </header>
        <div class="calculator__card">
          <div class="calculator__grid">
            <div class="calculator__controls">
              <div class="calculator__group">
                <div class="calculator__label-row">
                  <label for="calc-volume-slider"><?= $calc_volume_label ?></label>
                  <div class="calculator__value-badge"><span id="calc-volume-value">--</span></div>
                </div>
                <input type="range" id="calc-volume-slider" class="calculator__slider" min="<?= $app_price ?>" value="<?= $app_price ?>">
                <div class="calculator__range-labels"><span id="calc-min-volume">--</span><span id="calc-max-volume">--</span></div>
              </div>
              <div class="calculator__group">
                <div class="calculator__label-row">
                  <label for="calc-trades-slider"><?= $calc_trades_label ?></label>
                  <div class="calculator__value-badge"><span id="calc-trades-value">--</span></div>
                </div>
                <input type="range" id="calc-trades-slider" class="calculator__slider" min="5" max="150" step="5" value="30">
                <div class="calculator__range-labels"><span>5 trades</span><span>150+ trades</span></div>
              </div>
            </div>
            <div class="calculator__results">
              <div class="calculator__results-inner">
                <div class="calculator__res-item">
                  <span class="calculator__res-label"><?= $calc_time_label ?></span>
                  <span class="calculator__res-value highlight" id="calc-time-value">--</span>
                </div>
                <div class="calculator__divider"></div>
                <div class="calculator__res-item">
                  <span class="calculator__res-label"><?= $calc_boost_label ?></span>
                  <span class="calculator__res-value" id="calc-boost-value">--</span>
                </div>
                <a href="sign.php" class="calculator__btn"><?= $calc_btn ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- features (TZ Item 22: H3, TZ Item 23: alt) -->
    <section class="section">
      <div class="container-base">
        <div class="border-gradient mb-14">
          <p class="text-[24px] font-bold text-grey-light mb-4"><?= $features_label ?></p>
          <h2><?= $features_title ?></h2>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-[30px]">
          <div class="bg-[rgba(35,38,47,0.6)] p-[30px] rounded-2xl text-center md:text-left">
            <div class="m-auto md:m-0 max-w-[65px]"><svg width="52" height="52" viewBox="0 0 52 52" role="img" aria-label="<?= $feature_1_title ?>"><use href="./assets/img/svg/sprite.svg#feat1"></use></svg></div>
            <h3 class="mt-6 mb-4 text-[24px] md:text-[28px] font-bold"><?= $feature_1_title ?></h3>
            <p class="text-grey-light"><?= $feature_1_text ?></p>
          </div>
          <div class="bg-[rgba(35,38,47,0.6)] p-[30px] rounded-2xl text-center md:text-left">
            <div class="m-auto md:m-0 max-w-[65px]"><svg width="52" height="52" viewBox="0 0 52 52" role="img" aria-label="<?= $feature_2_title ?>"><use href="./assets/img/svg/sprite.svg#feat2"></use></svg></div>
            <h3 class="mt-6 mb-4 text-[24px] md:text-[28px] font-bold"><?= $feature_2_title ?></h3>
            <p class="text-grey-light"><?= $feature_2_text ?></p>
          </div>
          <div class="bg-[rgba(35,38,47,0.6)] p-[30px] rounded-2xl text-center md:text-left">
            <div class="m-auto md:m-0 max-w-[65px]"><svg width="52" height="52" viewBox="0 0 52 52" role="img" aria-label="<?= $feature_3_title ?>"><use href="./assets/img/svg/sprite.svg#feat3"></use></svg></div>
            <h3 class="mt-6 mb-4 text-[24px] md:text-[28px] font-bold"><?= $feature_3_title ?></h3>
            <p class="text-grey-light"><?= $feature_3_text ?></p>
          </div>
          <div class="bg-[rgba(35,38,47,0.6)] p-[30px] rounded-2xl text-center md:text-left">
            <div class="m-auto md:m-0 max-w-[65px]"><svg width="52" height="52" viewBox="0 0 52 52" role="img" aria-label="<?= $feature_4_title ?>"><use href="./assets/img/svg/sprite.svg#feat4"></use></svg></div>
            <h3 class="mt-6 mb-4 text-[24px] md:text-[28px] font-bold"><?= $feature_4_title ?></h3>
            <p class="text-grey-light"><?= $feature_4_text ?></p>
          </div>
          <div class="bg-[rgba(35,38,47,0.6)] p-[30px] rounded-2xl text-center md:text-left">
            <div class="m-auto md:m-0 max-w-[65px]"><svg width="52" height="52" viewBox="0 0 52 52" role="img" aria-label="<?= $feature_5_title ?>"><use href="./assets/img/svg/sprite.svg#feat5"></use></svg></div>
            <h3 class="mt-6 mb-4 text-[24px] md:text-[28px] font-bold"><?= $feature_5_title ?></h3>
            <p class="text-grey-light"><?= $feature_5_text ?></p>
          </div>
          <div class="bg-[rgba(35,38,47,0.6)] p-[30px] rounded-2xl text-center md:text-left">
            <div class="m-auto md:m-0 max-w-[65px]"><svg width="52" height="52" viewBox="0 0 52 52" role="img" aria-label="<?= $feature_6_title ?>"><use href="./assets/img/svg/sprite.svg#feat6"></use></svg></div>
            <h3 class="mt-6 mb-4 text-[24px] md:text-[28px] font-bold"><?= $feature_6_title ?></h3>
            <p class="text-grey-light"><?= $feature_6_text ?></p>
          </div>
        </div>
      </div>
    </section>

    <!-- testimonials -->
    <section class="section">
      <div class="container-base">
        <div class="border-gradient mb-14"><h2><?= $reviews_title ?></h2></div>

        <div class="grid gap-2 overflow-hidden md:gap-6" data-slider="reviews">
          <div class="-ml-4 flex md:-ml-8 reviews-slider-container" data-slider-container="">
            <div class="basis-4/5 pl-4 md:pl-8 lg:basis-1/2" data-slider-item="">
              <div class="relative h-full flex flex-col justify-between rounded-[18px] border-2 border-transparent bg-white/10 p-6 md:p-8 md:pl-[45px] transition-all duration-300 hover:border-[#DAFE33B3]">
                <div><p class="mb-9 text-base md:text-lg"><?= $review_1_text ?></p></div>
                <div class="flex items-center gap-4">
                  <picture class="block max-w-[32px] h-[32px] shrink-0 md:max-w-[64px] md:h-[64px]"><source type="image/avif" srcset="./assets/img/responsive/review-1-64.avif 1x, ./assets/img/responsive/review-1-128.avif 2x"><source type="image/webp" srcset="./assets/img/responsive/review-1-64.webp 1x, ./assets/img/responsive/review-1-128.webp 2x"><img src="./assets/img/responsive/review-1-64.png" srcset="./assets/img/responsive/review-1-64.png 1x, ./assets/img/responsive/review-1-128.png 2x" alt="<?= $review_1_author ?>" width="64" height="64" loading="lazy"></picture>
                  <div class="flex flex-col gap-1">
                    <p class="text-[16px] md:text-[20px] lg:text-[24px] font-bold"><?= $review_1_author ?></p>
                    <p class="text-[14px] md:text-[16px] font-bold text-gray-400">- <?= $review_1_role ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="basis-4/5 pl-4 md:pl-8 lg:basis-1/2" data-slider-item="">
              <div class="relative h-full flex flex-col justify-between rounded-[18px] border-2 border-transparent bg-white/10 p-6 md:p-8 md:pl-[45px] transition-all duration-300 hover:border-[#DAFE33B3]">
                <div><p class="mb-9 text-base md:text-lg"><?= $review_2_text ?></p></div>
                <div class="flex items-center gap-4">
                  <picture class="block max-w-[32px] h-[32px] shrink-0 md:max-w-[64px] md:h-[64px]"><source type="image/avif" srcset="./assets/img/responsive/review-2-64.avif 1x, ./assets/img/responsive/review-2-128.avif 2x"><source type="image/webp" srcset="./assets/img/responsive/review-2-64.webp 1x, ./assets/img/responsive/review-2-128.webp 2x"><img src="./assets/img/responsive/review-2-64.png" srcset="./assets/img/responsive/review-2-64.png 1x, ./assets/img/responsive/review-2-128.png 2x" alt="<?= $review_2_author ?>" width="64" height="64" loading="lazy"></picture>
                  <div class="flex flex-col gap-1">
                    <p class="text-[16px] md:text-[20px] lg:text-[24px] font-bold"><?= $review_2_author ?></p>
                    <p class="text-[14px] md:text-[16px] font-bold text-gray-400">- <?= $review_2_role ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="basis-4/5 pl-4 md:pl-8 lg:basis-1/2" data-slider-item="">
              <div class="relative h-full flex flex-col justify-between rounded-[18px] border-2 border-transparent bg-white/10 p-6 md:p-8 md:pl-[45px] transition-all duration-300 hover:border-[#DAFE33B3]">
                <div><p class="mb-9 text-base md:text-lg"><?= $review_3_text ?></p></div>
                <div class="flex items-center gap-4">
                  <picture class="block max-w-[32px] h-[32px] shrink-0 md:max-w-[64px] md:h-[64px]"><source type="image/avif" srcset="./assets/img/responsive/review-3-64.avif 1x, ./assets/img/responsive/review-3-128.avif 2x"><source type="image/webp" srcset="./assets/img/responsive/review-3-64.webp 1x, ./assets/img/responsive/review-3-128.webp 2x"><img src="./assets/img/responsive/review-3-64.png" srcset="./assets/img/responsive/review-3-64.png 1x, ./assets/img/responsive/review-3-128.png 2x" alt="<?= $review_3_author ?>" width="64" height="64" loading="lazy"></picture>
                  <div class="flex flex-col gap-1">
                    <p class="text-[16px] md:text-[20px] lg:text-[24px] font-bold"><?= $review_3_author ?></p>
                    <p class="text-[14px] md:text-[16px] font-bold text-gray-400">- <?= $review_3_role ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="basis-4/5 pl-4 md:pl-8 lg:basis-1/2" data-slider-item="">
              <div class="relative h-full flex flex-col justify-between rounded-[18px] border-2 border-transparent bg-white/10 p-6 md:p-8 md:pl-[45px] transition-all duration-300 hover:border-[#DAFE33B3]">
                <div><p class="mb-9 text-base md:text-lg"><?= $review_4_text ?></p></div>
                <div class="flex items-center gap-4">
                  <picture class="block max-w-[32px] h-[32px] shrink-0 md:max-w-[64px] md:h-[64px]"><source type="image/avif" srcset="./assets/img/responsive/review-4-64.avif 1x, ./assets/img/responsive/review-4-128.avif 2x"><source type="image/webp" srcset="./assets/img/responsive/review-4-64.webp 1x, ./assets/img/responsive/review-4-128.webp 2x"><img src="./assets/img/responsive/review-4-64.png" srcset="./assets/img/responsive/review-4-64.png 1x, ./assets/img/responsive/review-4-128.png 2x" alt="<?= $review_4_author ?>" width="64" height="64" loading="lazy"></picture>
                  <div class="flex flex-col gap-1">
                    <p class="text-[16px] md:text-[20px] lg:text-[24px] font-bold"><?= $review_4_author ?></p>
                    <p class="text-[14px] md:text-[16px] font-bold text-gray-400">- <?= $review_4_role ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="basis-4/5 pl-4 md:pl-8 lg:basis-1/2" data-slider-item="">
              <div class="relative h-full flex flex-col justify-between rounded-[18px] border-2 border-transparent bg-white/10 p-6 md:p-8 md:pl-[45px] transition-all duration-300 hover:border-[#DAFE33B3]">
                <div><p class="mb-9 text-base md:text-lg"><?= $review_5_text ?></p></div>
                <div class="flex items-center gap-4">
                  <picture class="block max-w-[32px] h-[32px] shrink-0 md:max-w-[64px] md:h-[64px]"><source type="image/avif" srcset="./assets/img/responsive/review-5-64.avif 1x, ./assets/img/responsive/review-5-128.avif 2x"><source type="image/webp" srcset="./assets/img/responsive/review-5-64.webp 1x, ./assets/img/responsive/review-5-128.webp 2x"><img src="./assets/img/responsive/review-5-64.png" srcset="./assets/img/responsive/review-5-64.png 1x, ./assets/img/responsive/review-5-128.png 2x" alt="<?= $review_5_author ?>" width="64" height="64" loading="lazy"></picture>
                  <div class="flex flex-col gap-1">
                    <p class="text-[16px] md:text-[20px] lg:text-[24px] font-bold"><?= $review_5_author ?></p>
                    <p class="text-[14px] md:text-[16px] font-bold text-gray-400">- <?= $review_5_role ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="reviews-nav">
            <button type="button" class="reviews-nav-btn" data-prev="reviews" aria-label="Previous reviews"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg></button>
            <button type="button" class="reviews-nav-btn" data-next="reviews" aria-label="Next reviews"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg></button>
          </div>
        </div>
      </div>
    </section>

    <!-- faq -->
    <section class="section" id="faq">
      <div class="container-base">
        <div class="border-gradient mb-14">
          <p class="text-[24px] font-bold text-grey-light mb-4"><?= $faq_label ?></p>
          <h2><?= $faq_title ?></h2>
        </div>
        <div class="flex flex-col md:flex-row gap-16 items-start">
          <div class="relative h-auto max-w-[470px] w-full hidden md:block">
            <div data-faq-img="1" class="faq-img absolute inset-0 opacity-100 transition-opacity duration-500">
              <picture class="block pt-[48px] pl-[48px] bg-[rgba(255,255,255,0.05)] w-full h-auto object-cover rounded-2xl max-w-[420px]">
                <source type="image/avif" srcset="./assets/img/responsive/faq-1-640.avif 640w, ./assets/img/responsive/faq-1-844.avif 844w" sizes="420px">
                <source type="image/webp" srcset="./assets/img/responsive/faq-1-640.webp 640w, ./assets/img/responsive/faq-1-844.webp 844w" sizes="420px">
                <img src="./assets/img/responsive/faq-1-844.png" srcset="./assets/img/responsive/faq-1-640.png 640w, ./assets/img/responsive/faq-1-844.png 844w" sizes="420px" alt="<?= $faq_q1 ?>" width="844" height="815" loading="lazy">
              </picture>
            </div>
            <div data-faq-img="2" class="faq-img absolute inset-0 opacity-0 transition-opacity duration-500">
              <picture class="block pt-[48px] pl-[48px] bg-[rgba(255,255,255,0.05)] w-full h-auto object-cover rounded-2xl max-w-[420px]">
                <source type="image/avif" srcset="./assets/img/responsive/faq-2-640.avif 640w, ./assets/img/responsive/faq-2-844.avif 844w" sizes="420px">
                <source type="image/webp" srcset="./assets/img/responsive/faq-2-640.webp 640w, ./assets/img/responsive/faq-2-844.webp 844w" sizes="420px">
                <img src="./assets/img/responsive/faq-2-844.png" srcset="./assets/img/responsive/faq-2-640.png 640w, ./assets/img/responsive/faq-2-844.png 844w" sizes="420px" alt="<?= $faq_q2 ?>" width="844" height="815" loading="lazy">
              </picture>
            </div>
            <div data-faq-img="3" class="faq-img absolute inset-0 opacity-0 transition-opacity duration-500">
              <picture class="block pt-[48px] pl-[48px] bg-[rgba(255,255,255,0.05)] w-full h-auto object-cover rounded-2xl max-w-[420px]">
                <source type="image/avif" srcset="./assets/img/responsive/faq-3-640.avif 640w, ./assets/img/responsive/faq-3-844.avif 844w" sizes="420px">
                <source type="image/webp" srcset="./assets/img/responsive/faq-3-640.webp 640w, ./assets/img/responsive/faq-3-844.webp 844w" sizes="420px">
                <img src="./assets/img/responsive/faq-3-844.png" srcset="./assets/img/responsive/faq-3-640.png 640w, ./assets/img/responsive/faq-3-844.png 844w" sizes="420px" alt="<?= $faq_q3 ?>" width="844" height="815" loading="lazy">
              </picture>
            </div>
            <div data-faq-img="4" class="faq-img absolute inset-0 opacity-0 transition-opacity duration-500">
              <picture class="block pt-[48px] pl-[48px] bg-[rgba(255,255,255,0.05)] w-full h-auto object-cover rounded-2xl max-w-[420px]">
                <source type="image/avif" srcset="./assets/img/responsive/faq-4-640.avif 640w, ./assets/img/responsive/faq-4-844.avif 844w" sizes="420px">
                <source type="image/webp" srcset="./assets/img/responsive/faq-4-640.webp 640w, ./assets/img/responsive/faq-4-844.webp 844w" sizes="420px">
                <img src="./assets/img/responsive/faq-4-844.png" srcset="./assets/img/responsive/faq-4-640.png 640w, ./assets/img/responsive/faq-4-844.png 844w" sizes="420px" alt="<?= $faq_q4 ?>" width="844" height="815" loading="lazy">
              </picture>
            </div>
            <div data-faq-img="5" class="faq-img absolute inset-0 opacity-0 transition-opacity duration-500">
              <picture class="block pt-[48px] pl-[48px] bg-[rgba(255,255,255,0.05)] w-full h-auto object-cover rounded-2xl max-w-[420px]">
                <source type="image/avif" srcset="./assets/img/responsive/faq-1-640.avif 640w, ./assets/img/responsive/faq-1-844.avif 844w" sizes="420px">
                <source type="image/webp" srcset="./assets/img/responsive/faq-1-640.webp 640w, ./assets/img/responsive/faq-1-844.webp 844w" sizes="420px">
                <img src="./assets/img/responsive/faq-1-844.png" srcset="./assets/img/responsive/faq-1-640.png 640w, ./assets/img/responsive/faq-1-844.png 844w" sizes="420px" alt="<?= $faq_q5 ?>" width="844" height="815" loading="lazy">
              </picture>
            </div>
          </div>

          <div class="flex flex-col gap-6">
          <div class="faq-item bg-dark-lighter rounded-2xl overflow-hidden">
            <button onclick="toggleAccordion(1)" data-index="1" class="w-full flex items-center justify-between p-5 gap-3 text-left text-white">
              <span class="text-[20px] lg:text-[24px] font-bold"><?= $faq_q1 ?></span>
              <span id="icon-1" class="transition-transform duration-300 bg-dark-lighter p-1.5 rounded-[130px] w-[21px] h-[21px] lg:h-[31px] lg:w-[31px] flex items-center justify-center shrink-0"><svg width="16" height="10" viewBox="0 0 16 10"><use href="./assets/img/svg/sprite.svg#chevron"></use></svg></span>
            </button>
            <div id="content-1" class="overflow-hidden transition-all duration-300" style="max-height: 200px">
              <div class="p-5 pt-0 text-grey-light"><?= $faq_a1 ?></div>
            </div>
          </div>
          <div class="faq-item bg-dark-lighter rounded-2xl overflow-hidden">
            <button onclick="toggleAccordion(2)" data-index="2" class="w-full flex items-center justify-between p-5 gap-3 text-left text-white">
              <span class="text-[20px] lg:text-[24px] font-bold"><?= $faq_q2 ?></span>
              <span id="icon-2" class="transition-transform duration-300 bg-dark-lighter p-1.5 rounded-[130px] w-[21px] h-[21px] lg:h-[31px] lg:w-[31px] flex items-center justify-center shrink-0"><svg width="16" height="10" viewBox="0 0 16 10"><use href="./assets/img/svg/sprite.svg#chevron"></use></svg></span>
            </button>
            <div id="content-2" class="overflow-hidden transition-all duration-300" style="max-height: 0px">
              <div class="p-5 pt-0 text-grey-light"><?= $faq_a2 ?></div>
            </div>
          </div>
          <div class="faq-item bg-dark-lighter rounded-2xl overflow-hidden">
            <button onclick="toggleAccordion(3)" data-index="3" class="w-full flex items-center justify-between p-5 gap-3 text-left text-white">
              <span class="text-[20px] lg:text-[24px] font-bold"><?= $faq_q3 ?></span>
              <span id="icon-3" class="transition-transform duration-300 bg-dark-lighter p-1.5 rounded-[130px] w-[21px] h-[21px] lg:h-[31px] lg:w-[31px] flex items-center justify-center shrink-0"><svg width="16" height="10" viewBox="0 0 16 10"><use href="./assets/img/svg/sprite.svg#chevron"></use></svg></span>
            </button>
            <div id="content-3" class="overflow-hidden transition-all duration-300" style="max-height: 0px">
              <div class="p-5 pt-0 text-grey-light"><?= $faq_a3 ?></div>
            </div>
          </div>
          <div class="faq-item bg-dark-lighter rounded-2xl overflow-hidden">
            <button onclick="toggleAccordion(4)" data-index="4" class="w-full flex items-center justify-between p-5 gap-3 text-left text-white">
              <span class="text-[20px] lg:text-[24px] font-bold"><?= $faq_q4 ?></span>
              <span id="icon-4" class="transition-transform duration-300 bg-dark-lighter p-1.5 rounded-[130px] w-[21px] h-[21px] lg:h-[31px] lg:w-[31px] flex items-center justify-center shrink-0"><svg width="16" height="10" viewBox="0 0 16 10"><use href="./assets/img/svg/sprite.svg#chevron"></use></svg></span>
            </button>
            <div id="content-4" class="overflow-hidden transition-all duration-300" style="max-height: 0px">
              <div class="p-5 pt-0 text-grey-light"><?= $faq_a4 ?></div>
            </div>
          </div>
          <div class="faq-item bg-dark-lighter rounded-2xl overflow-hidden">
            <button onclick="toggleAccordion(5)" data-index="5" class="w-full flex items-center justify-between p-5 gap-3 text-left text-white">
              <span class="text-[20px] lg:text-[24px] font-bold"><?= $faq_q5 ?></span>
              <span id="icon-5" class="transition-transform duration-300 bg-dark-lighter p-1.5 rounded-[130px] w-[21px] h-[21px] lg:h-[31px] lg:w-[31px] flex items-center justify-center shrink-0"><svg width="16" height="10" viewBox="0 0 16 10"><use href="./assets/img/svg/sprite.svg#chevron"></use></svg></span>
            </button>
            <div id="content-5" class="overflow-hidden transition-all duration-300" style="max-height: 0px">
              <div class="p-5 pt-0 text-grey-light"><?= $faq_a5 ?></div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>

    <!-- bottom cta -->
    <section class="section">
      <div class="container-base">
        <div class="py-[60px] px-8 flex flex-col lg:flex-row items-center justify-between bg-linear-to-r from-brand-start to-brand-end rounded-3xl text-black gap-[30px] text-center lg:text-left">
          <div class="flex flex-col gap-4">
            <p class="font-black text-[32px] md:text-[40px]"><?= $cta_title ?></p>
            <p class="font-medium text-[16px] lg:text-[20px]"><?= $cta_desc ?></p>
          </div>
          <a class="flex max-w-full md:max-w-48 w-full items-center justify-center rounded-full border py-6 px-6 font-medium text-[18px] bg-black text-white" href="#trading"><?= $cta_btn ?></a>
        </div>
      </div>
    </section>

    <!-- key features table -->
    <section class="section mb-20 lg:mb-[120px]">
      <div class="container-base grid gap-5 md:gap-8">
        <h2 class="text-center md:text-left"><?= $table_title ?></h2>
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

        <div class="mt-10 md:border-primary md:rounded-[20px] md:border md:px-20 md:py-8">
          <div class="border-primary grid justify-items-center gap-6 rounded-[20px] border px-4 py-5 md:gap-4 md:px-8 md:py-6">
            <h2 class="h3 mb-0 flex flex-wrap items-center justify-center gap-x-4 gap-y-5">
              <?= $summary_title ?>
              <span class="inline-flex items-center justify-center rounded-full bg-emerald-600 px-2 py-1 text-base leading-none text-white uppercase"><?= $summary_badge ?></span>
            </h2>
            <div class="flex flex-wrap items-center justify-center gap-2.5">
              <strong class="leading-none text-emerald-600"><?= $rating_value ?></strong>
              <span class="leading-none text-amber-500" role="img" aria-label="<?= $rating_value ?> out of 5 stars">★★★★☆</span>
              <span class="flex flex-wrap justify-center gap-1 text-sm text-gray-400">
                <span><strong><?= $review_count ?></strong> reviews ·</span>
                <span> Based on <strong><?= $rating_count ?></strong> reviews ·</span>
                <span> Score out of <strong>5</strong></span>
              </span>
            </div>
            <p class="text-center"><?= $summary_desc ?></p>
          </div>
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

  <script>
    function toggleAccordion(index) {
      const contents = document.querySelectorAll('[id^="content-"]');
      const icons = document.querySelectorAll('[id^="icon-"]');
      contents.forEach((content) => { content.style.maxHeight = '0px'; });
      icons.forEach((icon) => { icon.style.transform = 'rotate(0deg)'; });
      const currentContent = document.getElementById('content-' + index);
      const currentIcon = document.getElementById('icon-' + index);
      currentContent.style.maxHeight = currentContent.scrollHeight + 'px';
      currentIcon.style.transform = 'rotate(180deg)';

      const faqImgs = document.querySelectorAll('[data-faq-img]');
      faqImgs.forEach((img) => { img.style.opacity = '0'; });
      const activeFaqImg = document.querySelector('[data-faq-img="' + index + '"]');
      if (activeFaqImg) activeFaqImg.style.opacity = '1';
    }
  </script>
</body>
</html>
