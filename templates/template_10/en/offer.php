<?php

include '../lang.php';
$extractLang = str_replace('-', '', strtolower(explode('-', $site_lang)[0]));
$currentLang = 'en';
if ($extractLang === $currentLang) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $site_url . "/lander/" . $site_domain . "/");
    exit();
}
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

include_once "../indexnow.php";
require_once "../offer_seo.php";
include "../lang.php";

$host = $_SERVER["HTTP_HOST"];
$uri = strtok($_SERVER["REQUEST_URI"], "?");

// Note: unlike root's copy, this language-subfolder page does NOT
// collapse its canonical to the bare domain root when served under
// /lander/ -- doing so would point search engines at the English
// root page instead of this page, breaking the hreflang relationship.
$canonical = "https://" . $host . $uri;
?>
<!DOCTYPE html>
<html lang="<?= $site_lang ?>">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>" />
<title><?= $offer_meta_title ?></title>
<meta name="robots" content="INDEX, FOLLOW, MAX-IMAGE-PREVIEW:LARGE, MAX-SNIPPET:-1">
<meta name="description" content="<?= $offer_meta_description ?>" />

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= $offer_meta_title ?>">
<meta name="twitter:description" content="<?= $offer_meta_description ?>">
<meta name="twitter:image" content="<?= $site_url ?>/lander/<?= $site_domain ?>/assets/img/img-1.webp">

<!-- Open Graph Meta Tags (TZ item 17) -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= $site_name ?>">
<meta property="og:url" content="<?= $canonical ?>">
<meta property="og:title" content="<?= $offer_meta_title ?>">
<meta property="og:description" content="<?= $offer_meta_description ?>">
<meta property="og:image" content="<?= $site_url ?>/lander/<?= $site_domain ?>/assets/img/img-1.webp">
<meta property="og:image:width" content="540">
<meta property="og:image:height" content="491">
<meta property="og:image:alt" content="<?= $site_name ?>">

<!-- Favicon (TZ item 9) -->
<link rel="icon" type="image/png" href="../favicon-96x96.png" sizes="96x96" />
<link rel="shortcut icon" href="../favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
<link rel="manifest" href="../site.webmanifest" />

<!-- Canonical & Hreflang (TZ item 14) -->
<link rel="alternate" hreflang="x-default" href="<?= $site_url ?>/offer.php" />
<link rel="alternate" hreflang="bg" href="<?= $site_url ?>/lander/<?= $site_domain ?>/bg/offer.php" />
<link rel="alternate" hreflang="cs" href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/offer.php" />
<link rel="alternate" hreflang="da" href="<?= $site_url ?>/lander/<?= $site_domain ?>/da/offer.php" />
<link rel="alternate" hreflang="de" href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/offer.php" />
<link rel="alternate" hreflang="el" href="<?= $site_url ?>/lander/<?= $site_domain ?>/el/offer.php" />
<link rel="alternate" hreflang="en" href="<?= $site_url ?>/offer.php" />
<link rel="alternate" hreflang="es" href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/offer.php" />
<link rel="alternate" hreflang="fi" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fi/offer.php" />
<link rel="alternate" hreflang="fr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/offer.php" />
<link rel="alternate" hreflang="hr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hr/offer.php" />
<link rel="alternate" hreflang="hu" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hu/offer.php" />
<link rel="alternate" hreflang="it" href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/offer.php" />
<link rel="alternate" hreflang="ja" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ja/offer.php" />
<link rel="alternate" hreflang="ms" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ms/offer.php" />
<link rel="alternate" hreflang="nb" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nb/offer.php" />
<link rel="alternate" hreflang="nl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nl/offer.php" />
<link rel="alternate" hreflang="no" href="<?= $site_url ?>/lander/<?= $site_domain ?>/no/offer.php" />
<link rel="alternate" hreflang="pl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pl/offer.php" />
<link rel="alternate" hreflang="pt" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pt/offer.php" />
<link rel="alternate" hreflang="ro" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ro/offer.php" />
<link rel="alternate" hreflang="sk" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sk/offer.php" />
<link rel="alternate" hreflang="sv" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sv/offer.php" />
<link rel="alternate" hreflang="tr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/tr/offer.php" />

<!-- Schema.org JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": <?= json_encode($bc_home) ?>, "item": "<?= $site_url ?>/" },
    { "@type": "ListItem", "position": 2, "name": <?= json_encode($bc_offer) ?>, "item": <?= json_encode($canonical) ?> }
  ]
}
</script>
<!-- Fonts & Styles -->
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">

<link rel="stylesheet" href="../assets/css/main.css?v=<?= @filemtime(__DIR__ . '/../assets/css/main.css') ?: time() ?>" />
<link rel="stylesheet" href="../assets/css/style.css?v=<?= @filemtime(__DIR__ . '/../assets/css/style.css') ?: time() ?>" />
<link rel="stylesheet" href="../assets/css/activity-bar.css?v=<?= @filemtime(__DIR__ . '/../assets/css/activity-bar.css') ?: time() ?>" />
<link rel="stylesheet" href="../assets/css/custom.css?v=<?= @filemtime(__DIR__ . '/../assets/css/custom.css') ?: time() ?>" />
<link rel="preload" href="../assets/css/intlTelInput.css?v=<?= @filemtime(__DIR__ . '/../assets/css/intlTelInput.css') ?: time() ?>" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="../assets/css/intlTelInput.css" /></noscript>
<link rel="preload" href="../assets/css/chat-quiz.css?v=<?= @filemtime(__DIR__ . '/../assets/css/chat-quiz.css') ?: time() ?>" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="../assets/css/chat-quiz.css" /></noscript>

<script src="../assets/js/scripts.js?v=<?= @filemtime(__DIR__ . '/../assets/js/scripts.js') ?: time() ?>" defer></script>
</head>

<body>
  <!-- header (inner page) -->
  <header class="header site-header-inner">
    <div class="container">
      <div class="header-row">
        <div class="header-col">
          <nav aria-label="Main navigation" class="header-nav">
            <ul class="header-menu">
              <li><a class="header-bar-text" href="../about.php"><?= $nav_about ?></a></li>
              <li><a class="header-bar-text" href="contacts.php"><?= $nav_contacts ?></a></li>
              <li><a class="header-bar-text" href="sign.php"><?= $nav_login ?></a></li>
            </ul>
          </nav>
        </div>
        <div class="header-col text-center">
          <div class="header-logo">
            <a href="<?= $site_url ?>/">
              <img alt="<?= $site_name ?>" class="header-logo-img" height="40" src="../assets/img/logo.webp" width="40" />
              <span class="header-logo-name"><?= $hero_title ?></span>
            </a>
          </div>
        </div>
        <div class="header-col d-flex justify-content-end align-items-center">
          <button class="header-hamburger" data-menu-icon="" aria-label="Open menu" type="button">
            <span></span><span></span><span></span>
          </button>
        </div>
      </div>
    </div>
    <nav class="mobile-menu" data-mobile-menu="">
      <ul>
        <li><a href="../about.php"><?= $nav_about ?></a></li>
        <li><a href="contacts.php"><?= $nav_contacts ?></a></li>
        <li><a href="sign.php"><?= $nav_login ?></a></li>
        <li><a href="product.php"><?= $footnav_product ?></a></li>
        <li><a href="offer.php"><?= $footnav_offer ?></a></li>
        <li><a href="faq.php"><?= $footnav_faq ?></a></li>
      </ul>
    </nav>
  </header>

<main id="main-content">
    <section class="page-hero">
      <div class="container">
        <div class="page-hero__eyebrow">
          <a href="<?= $site_url ?>/"><?= $bc_home ?></a>
          <span class="sep">/</span>
          <span class="current"><?= $bc_offer ?></span>
        </div>
        <h1><?= $offer_h1 ?></h1>
        <p><?= $offer_lead ?></p>
      </div>
    </section>

    <section class="inner-content">
      <div class="container">
        <div class="inner-narrow">
          <ul class="check-list">
            <li><?= $offer_li1 ?></li>
            <li><?= $offer_li2 ?></li>
            <li><?= $offer_li3 ?></li>
            <li><?= $offer_li4 ?></li>
            <li><?= $offer_li5 ?></li>
          </ul>
          <div class="legal-block">
            <div class="legal-disclaimer"><p><?= $offer_note ?></p></div>
          </div>
        </div>
      </div>
    </section>
</main>
  

  <!-- footer -->
  <footer class="footer sections-padding">
    <div class="container">
      <div class="footer-nav">
        <div class="footer-logo">
          <img alt="<?= $site_name ?>" class="footer-logo-img" height="40" loading="lazy" src="../assets/img/logo.webp" width="40" />
          <span class="footer-logo-name"><?= $hero_title ?></span>
        </div>
        <div class="footer-bar">
          <div class="footer-bar-menu">
            <a class="footer-usage-item footer-about" href="../about.php"><?= $footnav_about ?></a>
            <a class="footer-usage-item" href="product.php"><?= $footnav_product ?></a>
            <a class="footer-usage-item" href="offer.php"><?= $footnav_offer ?></a>
            <a class="footer-usage-item footer-contact" href="contacts.php"><?= $footnav_contacts ?></a>
            <a class="footer-usage-item" href="faq.php"><?= $footnav_faq ?></a>
            <a class="footer-usage-item footer-privacy" href="privacy.php"><?= $footnav_privacy ?></a>
            <a class="footer-usage-item footer-terms" href="conditions.php"><?= $footnav_conditions ?></a>
            <a class="footer-usage-item" href="risk-warning.php"><?= $footnav_risk ?></a>
          </div>
          <!-- Language dropdown (TZ item 14: footer switcher) -->
          <div class="footer-lang" data-connect-parent="">
            <button class="footer-lang-btn" data-connector="lang-menu" type="button">
              <span aria-hidden="true">🌐</span><span class="uppercase">EN</span>
            </button>
            <nav class="footer-lang-menu" data-connect="lang-menu">
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/bg/"><span aria-hidden="true">🇧🇬</span><span class="uppercase">BG</span></a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/"><span aria-hidden="true">🇨🇿</span><span class="uppercase">CS</span></a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/da/"><span aria-hidden="true">🇩🇰</span><span class="uppercase">DA</span></a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/"><span aria-hidden="true">🇩🇪</span><span class="uppercase">DE</span></a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/el/"><span aria-hidden="true">🇬🇷</span><span class="uppercase">EL</span></a>
  <a href="<?= $site_url ?>/" data-active=""><span aria-hidden="true">🇬🇧</span><span class="uppercase">EN</span></a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/"><span aria-hidden="true">🇪🇸</span><span class="uppercase">ES</span></a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/fi/"><span aria-hidden="true">🇫🇮</span><span class="uppercase">FI</span></a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/"><span aria-hidden="true">🇫🇷</span><span class="uppercase">FR</span></a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/hr/"><span aria-hidden="true">🇭🇷</span><span class="uppercase">HR</span></a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/hu/"><span aria-hidden="true">🇭🇺</span><span class="uppercase">HU</span></a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/"><span aria-hidden="true">🇮🇹</span><span class="uppercase">IT</span></a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/ja/"><span aria-hidden="true">🇯🇵</span><span class="uppercase">JA</span></a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/ms/"><span aria-hidden="true">🇲🇾</span><span class="uppercase">MS</span></a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/nb/"><span aria-hidden="true">🇳🇴</span><span class="uppercase">NB</span></a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/nl/"><span aria-hidden="true">🇳🇱</span><span class="uppercase">NL</span></a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/no/"><span aria-hidden="true">🇳🇴</span><span class="uppercase">NO</span></a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/pl/"><span aria-hidden="true">🇵🇱</span><span class="uppercase">PL</span></a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/pt/"><span aria-hidden="true">🇵🇹</span><span class="uppercase">PT</span></a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/ro/"><span aria-hidden="true">🇷🇴</span><span class="uppercase">RO</span></a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/sk/"><span aria-hidden="true">🇸🇰</span><span class="uppercase">SK</span></a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/sv/"><span aria-hidden="true">🇸🇪</span><span class="uppercase">SV</span></a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/tr/"><span aria-hidden="true">🇹🇷</span><span class="uppercase">TR</span></a>
</nav>
          </div>
        </div>
      </div>
      <div class="footer-legal-row">
        <p class="footer-copy"><?= $footer_copyright ?></p>
      </div>
      <p class="footer-disclaimer-text"><?= $footer_disclaimer ?></p>
    </div>
  </footer>

  <!-- Chat Quiz Assistant Widget (TZ item 12) -->
  <div id="chat-quiz-root" class="cq-gen-1">
    <button id="chat-toggle-btn" class="cq-pulse-button cq-gen-2">
      <span id="chat-noti-dot" class="cq-gen-3">1</span>
      <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" id="cq-chat-icon" class="cq-gen-4"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.86 9.86 0 0 1-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </button>
    <div id="chat-window" class="cq-gen-5">
      <div class="cq-gen-6">
        <div class="cq-gen-7">
          <div class="cq-gen-8">
            <img src="../consultant.webp" alt="<?= htmlspecialchars($quiz_consultant_name) ?>" loading="lazy" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';" class="cq-gen-9">
            <svg style="display: none; width: 22px; height: 22px; color: #a1a1aa;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M16 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0ZM12 14a7 7 0 0 0-7 7h14a7 7 0 0 0-7-7Z" stroke-width="2"/></svg>
            <span class="cq-gen-11"></span>
          </div>
          <div class="cq-gen-12">
            <h4 class="cq-gen-13"><?= $quiz_consultant_name ?></h4>
            <p class="cq-gen-14"><?= $quiz_consultant_role ?></p>
          </div>
        </div>
        <button id="chat-close-btn" class="cq-gen-15">
          <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><use href="../assets/img/svg/sprite.svg#close"></use></svg>
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
      <div class="form-preloader hidden"><svg width="44" height="44" class="spinner" viewBox="0 0 50 50"><use href="../assets/img/svg/sprite.svg#spinner"></use></svg></div>
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
  <script src="../assets/js/chat-quiz.js?v=<?= @filemtime(__DIR__ . '/../assets/js/chat-quiz.js') ?: time() ?>" defer></script>

  <script>
    // FAQ / education accordion: reference site drives this with an .active
    // class on the item (see .faq-item.active / .education-item.active in
    // style.css), not a checkbox :checked selector.
    document.querySelectorAll('.faq-item').forEach(function (item) {
      var q = item.querySelector('.faq-item-title');
      if (!q) return;
      q.addEventListener('click', function () {
        var wasActive = item.classList.contains('active');
        document.querySelectorAll('.faq-item.active').forEach(function (el) { el.classList.remove('active'); });
        if (!wasActive) item.classList.add('active');
      });
    });
    document.querySelectorAll('.education-item').forEach(function (item) {
      var q = item.querySelector('.education-item-title');
      if (!q) return;
      q.addEventListener('click', function () {
        var wasActive = item.classList.contains('active');
        document.querySelectorAll('.education-item.active').forEach(function (el) { el.classList.remove('active'); });
        if (!wasActive) item.classList.add('active');
      });
    });
  </script>
</body>
</html>
