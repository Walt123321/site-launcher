<?php
session_start();
if (empty($_SESSION['js_token'])) {
   $_SESSION['js_token'] = bin2hex(random_bytes(16));
}
$jsToken = $_SESSION['js_token'];


require_once 'offer_seo.php';
include 'lang.php';
?>
<?php
if (strpos($_SERVER['HTTP_HOST'], 'www.') === 0) {
    $host = substr($_SERVER['HTTP_HOST'], 4);
    header("Location: https://" . $host . $_SERVER['REQUEST_URI'], true, 301);
    exit();
}
?>

<!DOCTYPE html>
<html lang="<?= $site_lang ?>" style="filter: hue-rotate(3deg);">

<head>
<?php
$host = $_SERVER['HTTP_HOST'];
$uri = strtok($_SERVER['REQUEST_URI'], '?'); // без GET-параметрів

$canonical = 'https://' . $host . $uri;
?>

<link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>" />
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
      "name": "💰 <?= $site_name ?> 💰",
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
  "description": <?= json_encode($page_description_main) ?>,
  "contactPoint": {
    "@type": "ContactPoint",
    "contactType": "customer support",
    "url": <?= json_encode($site_url . '/contact.php') ?>
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
  "description": <?= json_encode($page_description_main) ?>,
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
  "description": <?= json_encode($page_description_main) ?>,
  "inLanguage": <?= json_encode($site_lang) ?>
}
</script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
  <title><?= $page_title_register ?></title>
  <meta name="robots" content="INDEX, FOLLOW, MAX-IMAGE-PREVIEW:LARGE, MAX-SNIPPET:-1">
  <meta name="description" content="<?= $page_description_register ?>">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="<?= $site_name ?>">
  <meta property="og:url" content="<?= $canonical ?>">
  <meta property="og:title" content="<?= $page_title_register ?>">
  <meta property="og:description" content="<?= $page_description_register ?>">
  <meta property="og:image" content="<?= $site_url ?>/lander/<?= $site_domain ?>/favicon-96x96.png">
  <meta property="og:image:width" content="96">
  <meta property="og:image:height" content="96">
  <meta property="og:image:alt" content="<?= $site_name ?> logo">
  <link rel="preload" href="css/swiper-bundle.min.css?v=<?= @filemtime(__DIR__ . '/css/swiper-bundle.min.css') ?: time() ?>" as="style" onload="this.onload=null;this.rel='stylesheet'" />
  <noscript><link rel="stylesheet" href="css/swiper-bundle.min.css?v=<?= @filemtime(__DIR__ . '/css/swiper-bundle.min.css') ?: time() ?>" /></noscript>
  <link rel="stylesheet" href="css/main-1.css?v=<?= @filemtime(__DIR__ . '/css/main-1.css') ?: time() ?>">
  <link href="./integration/default-integration.css?v=<?= @filemtime(__DIR__ . '/./integration/default-integration.css') ?: time() ?>" rel="stylesheet"/>
  <link rel="preload" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/css/intlTelInput.css" as="style" onload="this.onload=null;this.rel='stylesheet'" />
  <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/css/intlTelInput.css" /></noscript>
<link rel="stylesheet" href="css/sign-up-styles.css?v=<?= @filemtime(__DIR__ . '/css/sign-up-styles.css') ?: time() ?>">
<link rel="alternate" hreflang="x-default" href="<?= $site_url ?>/sign-up.php">
<link rel="alternate" hreflang="de" href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/sign-up.php">
<link rel="alternate" hreflang="fr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/sign-up.php">
<link rel="alternate" hreflang="es" href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/sign-up.php">
<link rel="alternate" hreflang="it" href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/sign-up.php">
<link rel="alternate" hreflang="hr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hr/sign-up.php">
<link rel="alternate" hreflang="ro" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ro/sign-up.php">
<link rel="alternate" hreflang="nl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nl/sign-up.php">
<link rel="alternate" hreflang="en" href="<?= $site_url ?>/lander/<?= $site_domain ?>/en/sign-up.php">
<link rel="alternate" hreflang="no" href="<?= $site_url ?>/lander/<?= $site_domain ?>/no/sign-up.php">
<link rel="alternate" hreflang="pt" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pt/sign-up.php">
<link rel="alternate" hreflang="cs" href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/sign-up.php">
<link rel="alternate" hreflang="pl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pl/sign-up.php">
<link rel="alternate" hreflang="tr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/tr/sign-up.php">
<link rel="alternate" hreflang="da" href="<?= $site_url ?>/lander/<?= $site_domain ?>/da/sign-up.php">
<link rel="alternate" hreflang="sv" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sv/sign-up.php">
<link rel="alternate" hreflang="fi" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fi/sign-up.php">
<link rel="alternate" hreflang="hu" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hu/sign-up.php">
<link rel="alternate" hreflang="sk" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sk/sign-up.php">
<link rel="alternate" hreflang="bg" href="<?= $site_url ?>/lander/<?= $site_domain ?>/bg/sign-up.php">
<link rel="alternate" hreflang="ms" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ms/sign-up.php">
<link rel="alternate" hreflang="nb" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nb/sign-up.php">
<link rel="alternate" hreflang="el" href="<?= $site_url ?>/lander/<?= $site_domain ?>/el/sign-up.php">
<link rel="alternate" hreflang="ja" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ja/sign-up.php">
</head>

<body>

<header class="header" data-js-header="">
  <div class="header__body">
    <div class="header__body-inner container">
      <a class="header__logo logo" href="<?= $site_url ?>" aria-label="Home" title="Home">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" viewBox="0 0 40 30" fill="none">
          <path d="M13.7943 11.3128L11.2695 13.8133C10.7876 14.2906 10.7876 15.0644 11.2695 15.5417L14.0506 18.296C14.5686 18.8089 15.8784 18.3232 16.3963 17.8103L18.5436 15.6837C18.7751 15.4545 18.9051 15.1436 18.9051 14.8195L18.9051 13.4828C18.9051 11.4578 20.5627 9.81625 22.6074 9.81625H26.2199C28.2646 9.81625 29.9222 11.4578 29.9222 13.4828L29.9222 17.0605C29.9222 19.0855 28.2646 20.7271 26.2199 20.7271H24.8704C24.5431 20.7271 24.2292 20.8558 23.9977 21.085L21.8503 23.2117C21.3324 23.7246 20.842 25.0218 21.3599 25.5347L24.141 28.289C24.623 28.7663 25.4044 28.7663 25.8863 28.289L28.5698 25.6314C28.888 25.3163 28.9929 24.8557 28.9446 24.4127C28.8142 23.2142 29.2128 21.9699 30.1404 21.0512C31.0681 20.1324 32.3245 19.7377 33.5347 19.8669C33.9821 19.9147 34.4472 19.8108 34.7653 19.4957L38.7578 15.5417C39.2398 15.0644 39.2398 14.2906 38.7578 13.8133L35.2063 10.2961C34.8734 9.96641 34.3816 9.87003 33.9148 9.93037C32.768 10.0786 31.5668 9.71648 30.6858 8.84399C29.8049 7.97151 29.4392 6.78192 29.5889 5.64622C29.6498 5.18394 29.5525 4.6968 29.2196 4.36715L25.8863 1.06598C25.4044 0.588683 24.623 0.588684 24.141 1.06598L20.3072 4.86278C19.9629 5.20374 19.8699 5.71135 19.9536 6.18634C20.1791 7.465 19.7932 8.8287 18.7961 9.81625C17.7989 10.8038 16.4219 11.1859 15.1308 10.9626C14.6512 10.8797 14.1386 10.9719 13.7943 11.3128Z" fill="#E3FF34"></path>
          <path d="M10.7081 4.21461L13.233 1.71415C13.7149 1.23685 14.4963 1.23685 14.9783 1.71415L17.7594 4.46844C18.2773 4.98137 17.7869 6.27854 17.2689 6.79146L15.1216 8.91808C14.8902 9.14728 14.5763 9.27605 14.249 9.27605H12.8993C10.8546 9.27605 9.19699 10.9176 9.19699 12.9426L9.19698 16.5203C9.19698 18.5453 10.8546 20.1869 12.8993 20.1869L16.5118 20.1869C18.5565 20.1869 20.2141 18.5453 20.2141 16.5203V15.1838C20.2141 14.8596 20.3441 14.5487 20.5756 14.3195L22.723 12.1929C23.2409 11.6799 24.5507 11.1942 25.0686 11.7072L27.8498 14.4614C28.3317 14.9387 28.3317 15.7126 27.8498 16.1899L25.1662 18.8475C24.8481 19.1626 24.383 19.2665 23.9356 19.2187C22.7255 19.0895 21.469 19.4843 20.5414 20.403C19.6137 21.3217 19.2151 22.566 19.3456 23.7645C19.3938 24.2075 19.2889 24.6681 18.9707 24.9832L14.9782 28.9372C14.4963 29.4145 13.7149 29.4145 13.233 28.9372L9.68147 25.42C9.3486 25.0903 9.25129 24.6032 9.31222 24.1409C9.4619 23.0052 9.09624 21.8156 8.21526 20.9431C7.33427 20.0706 6.1331 19.7085 4.98632 19.8567C4.51954 19.9171 4.02766 19.8207 3.69479 19.4911L0.361461 16.1899C-0.120487 15.7126 -0.120487 14.9387 0.361461 14.4614L4.19526 10.6646C4.53953 10.3237 5.05209 10.2315 5.53171 10.3145C6.82282 10.5378 8.19981 10.1556 9.19698 9.16808C10.1942 8.18053 10.58 6.81683 10.3546 5.53817C10.2708 5.06318 10.3639 4.55557 10.7081 4.21461Z" fill="#E3FF34"></path>
        </svg>
        <span><?= $source ?></span>
      </a>

      <div class="header__overlay" data-js-header-overlay="">
        <nav class="header__menu">
          <ul class="header__menu-list">
            <li class="header__menu-item">
              <a class="header__menu-link" href="<?= $site_url ?>#leaders"><?= $nav_investors ?></a>
            </li>
            <li class="header__menu-item">
              <a class="header__menu-link" href="<?= $site_url ?>#steps"><?= $nav_steps ?></a>
            </li>
            <li class="header__menu-item">
              <a class="header__menu-link" href="<?= $site_url ?>#trades"><?= $nav_trade ?></a>
            </li>
            <li class="header__menu-item">
              <a class="header__menu-link" href="<?= $site_url ?>#advantages"><?= $nav_advantages ?></a>
            </li>
            <li class="header__menu-item">
              <a class="header__menu-link" href="<?= $site_url ?>#statistics"><?= $nav_statistics ?></a>
            </li>
            <li class="header__menu-item">
              <a class="header__menu-link" href="<?= $site_url ?>#feedback"><?= $nav_feedback ?></a>
            </li>
          </ul>
        </nav>

        <a href="sign-up.php">
          <button class="header__button" type="button" data-js-button-form="">
            <?= $button_register ?>
          </button>
        </a>
      </div>

      <button class="header__burger-button burger-button visible-tablet" type="button" aria-label="Open menu" title="Open menu" data-js-header-burger-button="">
        <span class="burger-button__line"></span>
        <span class="burger-button__line"></span>
        <span class="burger-button__line"></span>
      </button>
    </div>
  </div>
  <span class="backdrop"></span>
</header>

  <main>
    
        

<section class="welcome" aria-labelledby="welcome-title">
    <h1 style="text-align: center; max-width: 1200px; margin: 50px auto 0 auto;">
      <?= $home_title ?>
    </h1>


    <div class="form" style="margin: 0 auto; margin-top: 40px; margin-bottom: 80px">
      <form class="leadform rf-form js-rf-form" id="form" method="post" style="padding: 20px;" action="./integration/send.php">
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
              <circle class="path" cx="25" cy="25" r="20" fill="none"   stroke-width="5"></circle>
          </svg>
        </div>

        <input type="text" placeholder="<?= $contact_form_fname ?>" name="fname" aria-label="<?= $contact_form_fname ?>" required="">
        <input type="text" placeholder="<?= $contact_form_lname ?>" name="lname" aria-label="<?= $contact_form_lname ?>" required="">
        <input type="email" placeholder="<?= $contact_form_email ?>" name="email" aria-label="<?= $contact_form_email ?>" required="">
        <input type="tel" name="fullphone" aria-label="Phone" required="">
        <span class="error-msg hide"></span>
        <button type="submit" class="submit" style="width: 100%"><?= $contact_form_submit ?></button>
      </form>
    </div>
</section>


<footer class="footer container">
  <div class="footer__main">
    <div class="footer__top">
      <a class="footer__logo logo" href="" aria-label="Footer" title="Footer">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" viewBox="0 0 40 30" fill="none">
          <path d="M13.7943 11.3128L11.2695 13.8133C10.7876 14.2906 10.7876 15.0644 11.2695 15.5417L14.0506 18.296C14.5686 18.8089 15.8784 18.3232 16.3963 17.8103L18.5436 15.6837C18.7751 15.4545 18.9051 15.1436 18.9051 14.8195L18.9051 13.4828C18.9051 11.4578 20.5627 9.81625 22.6074 9.81625H26.2199C28.2646 9.81625 29.9222 11.4578 29.9222 13.4828L29.9222 17.0605C29.9222 19.0855 28.2646 20.7271 26.2199 20.7271H24.8704C24.5431 20.7271 24.2292 20.8558 23.9977 21.085L21.8503 23.2117C21.3324 23.7246 20.842 25.0218 21.3599 25.5347L24.141 28.289C24.623 28.7663 25.4044 28.7663 25.8863 28.289L28.5698 25.6314C28.888 25.3163 28.9929 24.8557 28.9446 24.4127C28.8142 23.2142 29.2128 21.9699 30.1404 21.0512C31.0681 20.1324 32.3245 19.7377 33.5347 19.8669C33.9821 19.9147 34.4472 19.8108 34.7653 19.4957L38.7578 15.5417C39.2398 15.0644 39.2398 14.2906 38.7578 13.8133L35.2063 10.2961C34.8734 9.96641 34.3816 9.87003 33.9148 9.93037C32.768 10.0786 31.5668 9.71648 30.6858 8.84399C29.8049 7.97151 29.4392 6.78192 29.5889 5.64622C29.6498 5.18394 29.5525 4.6968 29.2196 4.36715L25.8863 1.06598C25.4044 0.588683 24.623 0.588684 24.141 1.06598L20.3072 4.86278C19.9629 5.20374 19.8699 5.71135 19.9536 6.18634C20.1791 7.465 19.7932 8.8287 18.7961 9.81625C17.7989 10.8038 16.4219 11.1859 15.1308 10.9626C14.6512 10.8797 14.1386 10.9719 13.7943 11.3128Z" fill="#E3FF34"></path>
          <path d="M10.7081 4.21461L13.233 1.71415C13.7149 1.23685 14.4963 1.23685 14.9783 1.71415L17.7594 4.46844C18.2773 4.98137 17.7869 6.27854 17.2689 6.79146L15.1216 8.91808C14.8902 9.14728 14.5763 9.27605 14.249 9.27605H12.8993C10.8546 9.27605 9.19699 10.9176 9.19699 12.9426L9.19698 16.5203C9.19698 18.5453 10.8546 20.1869 12.8993 20.1869L16.5118 20.1869C18.5565 20.1869 20.2141 18.5453 20.2141 16.5203V15.1838C20.2141 14.8596 20.3441 14.5487 20.5756 14.3195L22.723 12.1929C23.2409 11.6799 24.5507 11.1942 25.0686 11.7072L27.8498 14.4614C28.3317 14.9387 28.3317 15.7126 27.8498 16.1899L25.1662 18.8475C24.8481 19.1626 24.383 19.2665 23.9356 19.2187C22.7255 19.0895 21.469 19.4843 20.5414 20.403C19.6137 21.3217 19.2151 22.566 19.3456 23.7645C19.3938 24.2075 19.2889 24.6681 18.9707 24.9832L14.9782 28.9372C14.4963 29.4145 13.7149 29.4145 13.233 28.9372L9.68147 25.42C9.3486 25.0903 9.25129 24.6032 9.31222 24.1409C9.4619 23.0052 9.09624 21.8156 8.21526 20.9431C7.33427 20.0706 6.1331 19.7085 4.98632 19.8567C4.51954 19.9171 4.02766 19.8207 3.69479 19.4911L0.361461 16.1899C-0.120487 15.7126 -0.120487 14.9387 0.361461 14.4614L4.19526 10.6646C4.53953 10.3237 5.05209 10.2315 5.53171 10.3145C6.82282 10.5378 8.19981 10.1556 9.19698 9.16808C10.1942 8.18053 10.58 6.81683 10.3546 5.53817C10.2708 5.06318 10.3639 4.55557 10.7081 4.21461Z" fill="#E3FF34"></path>
        </svg>
        <span><?= $source ?></span>
      </a>

      

      <a href="sign-up.php" class="footer__button button" data-js-button-form="">
        <?= $button_register ?>
      </a>

      <ul class="footer__nav">
        <li class="footer__nav-item"><a href="about-us.php" class="no-scroll"><?= $footer_about ?></a></li>
        <li class="footer__nav-item"><a href="contact.php" class="no-scroll"><?= $footer_contact ?></a></li>
        <li class="footer__nav-item"><a href="sign-up.php" class="no-scroll"><?= $footer_registration ?></a></li>
        <li class="footer__nav-item"><a href="conditions.php" class="no-scroll"><?= $footer_terms ?></a></li>
        <li class="footer__nav-item"><a href="private-policy.php" class="no-scroll"><?= $footer_privacy ?></a></li>
        <li class="footer__nav-item"><a href="risk-warning.php" class="no-scroll"><?= $footer_risk_warning ?></a></li>
      </ul>
      <div class="footer__lang-switcher">
        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/sign-up.php" hreflang="en" title="English">🇬🇧</a>
        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/sign-up.php" hreflang="de" title="Deutsch">🇩🇪</a>
        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/sign-up.php" hreflang="fr" title="Français">🇫🇷</a>
        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/sign-up.php" hreflang="es" title="Español">🇪🇸</a>
        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/sign-up.php" hreflang="it" title="Italiano">🇮🇹</a>
        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/bg/sign-up.php" hreflang="bg" title="Български">🇧🇬</a>
        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/sign-up.php" hreflang="cs" title="Čeština">🇨🇿</a>
        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/da/sign-up.php" hreflang="da" title="Dansk">🇩🇰</a>
        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/el/sign-up.php" hreflang="el" title="Ελληνικά">🇬🇷</a>
        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/fi/sign-up.php" hreflang="fi" title="Suomi">🇫🇮</a>
        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/hr/sign-up.php" hreflang="hr" title="Hrvatski">🇭🇷</a>
        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/hu/sign-up.php" hreflang="hu" title="Magyar">🇭🇺</a>
        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/ja/sign-up.php" hreflang="ja" title="日本語">🇯🇵</a>
        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/ms/sign-up.php" hreflang="ms" title="Bahasa Melayu">🇲🇾</a>
        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/nb/sign-up.php" hreflang="nb" title="Norsk Bokmål">🇳🇴</a>
        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/nl/sign-up.php" hreflang="nl" title="Nederlands">🇳🇱</a>
        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/no/sign-up.php" hreflang="no" title="Norsk">🇳🇴</a>
        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/pl/sign-up.php" hreflang="pl" title="Polski">🇵🇱</a>
        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/pt/sign-up.php" hreflang="pt" title="Português">🇵🇹</a>
        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/ro/sign-up.php" hreflang="ro" title="Română">🇷🇴</a>
        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/sk/sign-up.php" hreflang="sk" title="Slovenčina">🇸🇰</a>
        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/sv/sign-up.php" hreflang="sv" title="Svenska">🇸🇪</a>
        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/tr/sign-up.php" hreflang="tr" title="Türkçe">🇹🇷</a>
      </div>
    </div>

    <div class="footer__bottom">
      <span>
        <?= $footer_rights ?>
        <span class="visible-tablet" data-current-year="">2026</span>
      </span>
      <span class="hidden-tablet" data-current-year="">2026</span>
    </div>
  </div>
</footer>

<dialog class="places" data-js-dialog="">
  <div class="places__main container">
    <div class="places__title hidden-tablet">
      <div class="places__image">
      </div>
      <h2 class="places__text">
        <?= $places_title ?>
      </h2>
    </div>

    <div class="places__body">
      <div class="places__remaining">
        <span class="places__remaining-text"><?= $places_remaining_text ?></span>
        <span class="places__remaining-number" data-js-places-remaining=""></span>
      </div>

      <button class="places__button button" type="button" data-js-button-form="">
        <?= $places_button ?>
      </button>
    </div>
  </div>
</dialog>
  </main>
  

  

  

  <script src="js/swiper-bundle.min.js?v=<?= @filemtime(__DIR__ . '/js/swiper-bundle.min.js') ?: time() ?>"></script>




  <script>
    // Initialize Swiper for leaders section
    document.addEventListener('DOMContentLoaded', function() {
      const leadersSwiper = new Swiper('.leaders__slider', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        speed: 800,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: '.leaders__slider .swiper-button-next',
          prevEl: '.leaders__slider .swiper-button-prev',
        },
        pagination: {
          el: '.leaders__slider .swiper-pagination',
          clickable: true,
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
            spaceBetween: 0,
          },
          768: {
            slidesPerView: 1,
            spaceBetween: 0,
          },
          1024: {
            slidesPerView: 1,
            spaceBetween: 0,
          }
        }
      });

    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js" defer></script>
  <script src="./integration/validation.js?v=<?= @filemtime(__DIR__ . '/./integration/validation.js') ?: time() ?>" defer></script>

<script>
let links = document.querySelectorAll('a');
let form = document.querySelector('#form2');

links.forEach((el) => {
    el.addEventListener('click', (e) => {

        let href = el.getAttribute('href');

        if (!href || href === "#" || href.trim() === "") {
            e.preventDefault();

            form.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
        }

    });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", () => {

  const burger = document.querySelector('[data-js-header-burger-button]');
  const overlay = document.querySelector('[data-js-header-overlay]');
  const backdrop = document.querySelector('.backdrop');
  const menuLinks = document.querySelectorAll('.header__menu-link');
  const menuButton = document.querySelector('[data-js-button-form]');

  function closeMenu() {
    burger.classList.remove('is-active');
    overlay.classList.remove('is-active');
    backdrop.classList.remove('is-active');
    document.body.classList.remove('menu-open');
  }

  function toggleMenu() {
    burger.classList.toggle('is-active');
    overlay.classList.toggle('is-active');
    backdrop.classList.toggle('is-active');
    document.body.classList.toggle('menu-open');
  }

  burger.addEventListener('click', toggleMenu);
  backdrop.addEventListener('click', closeMenu);

  menuLinks.forEach(link => {
    link.addEventListener('click', closeMenu);
  });

  if (menuButton) {
    menuButton.addEventListener('click', closeMenu);
  }

});
</script>

<?php include './integration/chat_widget.php'; ?>
</body>

</html>
