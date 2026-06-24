<?php
session_start();
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
<?php
$host = $_SERVER['HTTP_HOST'];
$uri = strtok($_SERVER['REQUEST_URI'], '?'); // без GET-параметрів
$canonical = 'https://' . $host . $uri;
?>
<link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>" />
<!DOCTYPE html>
<html class="scroll-smooth" lang="<?= $site_lang ?>" data-theme="orange">
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
      "name": "💸 <?= $conditions_h1 ?> 💸",
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
    <title><?= $conditions_meta_title ?></title>
    <meta name="description" content="<?= $conditions_meta_description ?>" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
<link rel="icon" type="image/png" href="./favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="./favicon.svg" />
<link rel="shortcut icon" href="./favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
<link rel="manifest" href="./site.webmanifest" />
    <!-- Styles -->
    <style>
      html.loading body > *:not(#skeleton) {
        visibility: hidden !important;
      }
      html.loading body *,
      html.loading body *::before,
      html.loading body *::after {
        animation: none !important;
        transition: none !important;
      }
      #skeleton {
        background: #f9f9f9;
        min-height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 999;
      }
      #sk-container {
        max-width: 1224px;
        margin-left: auto;
        margin-right: auto;
        padding-left: 1rem;
        padding-right: 1rem;
        height: 100%;
      }
      #sk-header {
        position: relative;
        z-index: 10;
        height: 4rem;
        background-color: #ffffff;
        height: 100%;
      }
      #sk-body {
        display: flex;
        align-items: center;
        height: 100%;
        font-size: 18px;
      }
      @media (min-width: 768px) {
        #sk-header {
          height: 5rem;
        }
      }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Unbounded:wght@400&display=swap"
      rel="stylesheet"
    />
    <link
      rel="preload"
      href="./assets/css/tailwind.min.css"
      as="style"
      onload="this.onload=null;this.rel='stylesheet'"
    />
    <noscript
      ><link rel="stylesheet" href="./assets/css/tailwind.min.css"
    /></noscript>
    <script>
      document.documentElement.classList.add("loading");
      const waitForStylesheet = (href, cb) => {
        const id = setInterval(() => {
          if (
            [...document.styleSheets].some(
              (s) => s.href && s.href.includes(href)
            )
          ) {
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
<link rel="alternate" hreflang="x-default" href="<?= $site_url ?>/lander/<?= $site_domain ?>/conditions.php" />
<link rel="alternate" hreflang="es" href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/conditions.php" />
<link rel="alternate" hreflang="cs" href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/conditions.php" />
<link rel="alternate" hreflang="de" href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/conditions.php" />
<link rel="alternate" hreflang="en" href="<?= $site_url ?>/lander/<?= $site_domain ?>/en/conditions.php" />
<link rel="alternate" hreflang="it" href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/conditions.php" />
<link rel="alternate" hreflang="fr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/conditions.php" />
<link rel="alternate" hreflang="nl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nl/conditions.php" />
<link rel="alternate" hreflang="pl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pl/conditions.php" />
<link rel="alternate" hreflang="pt" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pt/conditions.php" />
<link rel="alternate" hreflang="ro" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ro/conditions.php" />
<link rel="alternate" hreflang="sv" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sv/conditions.php" />
<link rel="alternate" hreflang="tr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/tr/conditions.php" />
<link rel="alternate" hreflang="hr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hr/conditions.php" />
<link rel="alternate" hreflang="no" href="<?= $site_url ?>/lander/<?= $site_domain ?>/no/conditions.php" /></head>
  <body class="flex min-h-screen flex-col">
    <!-- skeleton -->
    <div id="skeleton">
      <div id="sk-header">
        <div id="sk-container">
          <div id="sk-body"><?= $site_name ?></div>
        </div>
      </div>
    </div>
    <!-- header -->
  <header class="relative z-50 pt-3.5 md:pt-6">
    <div class="container-base">
      <div
        class="rounded-custom flex min-h-[70px] items-center justify-between gap-8 border bg-white px-4.5 py-3 md:px-8">
        <a class="font-special inline-flex max-w-60 gap-1.5 text-xl leading-none uppercase header-nav-logo" href="<?= $site_url ?>">
          <span class="text-primary inline-block header-logo">
            <img src="./favicon-96x96.png" class="footer-logo" alt="logo">
          </span>
          <?= $site_name ?>
        </a>
<nav class="hiddens grow justify-center lg:flex">
  <ul class="flex flex-row flex-wrap justify-center gap-x-4 gap-y-2 md:gap-x-5 lg:gap-x-7">
    <li>
      <a class="data-active:text-primary" href="<?= $site_url ?>"><?= $mobnav_home ?></a>
    </li>
    <li>
      <a class="data-active:text-primary" href="product.php"><?= $mobnav_product ?></a>
    </li>
    <li>
      <a class="data-active:text-primary" href="offer.php"><?= $mobnav_offer ?></a>
    </li>
    <li>
      <a class="data-active:text-primary" href="contacts.php"><?= $mobnav_contact ?></a>
    </li>
    <li>
      <a class="data-active:text-primary" href="faq.php"><?= $mobnav_faq ?></a>
    </li>
  </ul>
</nav>
        <div class="flex items-center gap-4 max-md:hidden mobmenu">
          <a class="group inline-flex h-[50px] items-center justify-between rounded-full border-2" href="sign.php">
            <span class="inline-block p-3.5 text-sm"><?=$mobnav_signup ?></span>
            <span
              class="group-hover:bg-primary inline-flex h-[50px] w-[50px] shrink-0 items-center justify-center rounded-full bg-black text-white transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" fill="none">
                <path
                  d="M19.7071 8.07088C20.0976 7.68035 20.0976 7.04719 19.7071 6.65666L13.3431 0.292702C12.9526 -0.0978227 12.3195 -0.0978227 11.9289 0.292702C11.5384 0.683226 11.5384 1.31639 11.9289 1.70692L17.5858 7.36377L11.9289 13.0206C11.5384 13.4111 11.5384 14.0443 11.9289 14.4348C12.3195 14.8254 12.9526 14.8254 13.3431 14.4348L19.7071 8.07088ZM0 8.36377H19V6.36377H0V8.36377Z"
                  fill="currentColor" />
              </svg>
            </span>
          </a>
          <a class="inline-flex h-[50px] w-[50px] shrink-0 items-center justify-center rounded-full border-2"
            href="sign.php" aria-label="Sign In">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="29" viewBox="0 0 25 29" fill="none">
              <path
                d="M1 13.7998C0.447715 13.7998 -4.82823e-08 14.2475 0 14.7998C4.82823e-08 15.3521 0.447715 15.7998 1 15.7998L1 13.7998ZM17.8071 15.5069C18.1976 15.1164 18.1976 14.4832 17.8071 14.0927L11.4431 7.72874C11.0526 7.33821 10.4195 7.33821 10.0289 7.72874C9.63841 8.11926 9.63841 8.75243 10.0289 9.14295L15.6858 14.7998L10.0289 20.4567C9.63841 20.8472 9.63841 21.4803 10.0289 21.8709C10.4195 22.2614 11.0526 22.2614 11.4431 21.8709L17.8071 15.5069ZM1 15.7998L17.1 15.7998L17.1 13.7998L1 13.7998L1 15.7998Z"
                fill="currentColor" />
              <path d="M12.5 1H21C22.6569 1 24 2.34315 24 4V24.45C24 26.1069 22.6569 27.45 21 27.45H12.5"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            </svg>
          </a>
        </div>
        <button class="menu-icon" data-menu-icon aria-label="open menu">
          <svg width="38" height="34" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect y="3" width="38" height="4" rx="2" fill="currentColor" />
            <rect y="15" width="38" height="4" rx="2" fill="currentColor" />
            <rect y="27" width="38" height="4" rx="2" fill="currentColor" />
          </svg>
        </button>
      </div>
    </div>
    <nav class="mobile-menu" data-mobile-menu>
      <ul class="flex flex-col flex-wrap items-center justify-center gap-y-8">
        <li>
          <a href="<?= $site_url ?>"><?= $mobnav_home ?></a>
        </li>
        <li>
          <a href="product.php"><?= $mobnav_product ?></a>
        </li>
        <li>
          <a href="offer.php"><?= $mobnav_offer ?></a>
        </li>
        <!-- <li>
      <a href="/team">Our team</a>
    </li> -->
        <li>
          <a href="contacts.php"><?= $mobnav_contact ?></a>
        </li>
        <li>
          <a href="faq.php"><?= $mobnav_faq ?></a>
        </li>
      </ul>
      <div class="flex items-center gap-4 md:hidden">
        <a class="group inline-flex h-[50px] items-center justify-between rounded-full border-2" href="sign.php">
          <span class="inline-block p-3.5 text-sm">Sign Up</span>
          <span
            class="group-hover:bg-primary inline-flex h-[50px] w-[50px] shrink-0 items-center justify-center rounded-full bg-black text-white transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" fill="none">
              <path
                d="M19.7071 8.07088C20.0976 7.68035 20.0976 7.04719 19.7071 6.65666L13.3431 0.292702C12.9526 -0.0978227 12.3195 -0.0978227 11.9289 0.292702C11.5384 0.683226 11.5384 1.31639 11.9289 1.70692L17.5858 7.36377L11.9289 13.0206C11.5384 13.4111 11.5384 14.0443 11.9289 14.4348C12.3195 14.8254 12.9526 14.8254 13.3431 14.4348L19.7071 8.07088ZM0 8.36377H19V6.36377H0V8.36377Z"
                fill="currentColor" />
            </svg>
          </span>
        </a>
        <a class="inline-flex h-[50px] w-[50px] shrink-0 items-center justify-center rounded-full border-2"
          href="sign.php"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="29" viewBox="0 0 25 29"
            fill="none">
            <path
              d="M1 13.7998C0.447715 13.7998 -4.82823e-08 14.2475 0 14.7998C4.82823e-08 15.3521 0.447715 15.7998 1 15.7998L1 13.7998ZM17.8071 15.5069C18.1976 15.1164 18.1976 14.4832 17.8071 14.0927L11.4431 7.72874C11.0526 7.33821 10.4195 7.33821 10.0289 7.72874C9.63841 8.11926 9.63841 8.75243 10.0289 9.14295L15.6858 14.7998L10.0289 20.4567C9.63841 20.8472 9.63841 21.4803 10.0289 21.8709C10.4195 22.2614 11.0526 22.2614 11.4431 21.8709L17.8071 15.5069ZM1 15.7998L17.1 15.7998L17.1 13.7998L1 13.7998L1 15.7998Z"
              fill="currentColor" />
            <path d="M12.5 1H21C22.6569 1 24 2.34315 24 4V24.45C24 26.1069 22.6569 27.45 21 27.45H12.5"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" />
          </svg>
        </a>
      </div>
    </nav>
  </header>
    <!-- main -->
    <main class="flex grow flex-col overflow-hidden">
      <div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
    <div class="grid gap-5 md:gap-7">
        <nav aria-label="breadcrumb" class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
            <a href="<?= $site_url ?>" class="breadcrumb-item"><?= $conditions_breadcrumb_home ?></a>
            <span class="breadcrumb-item"><?= $conditions_breadcrumb_current ?></span>
        </nav>
        <h1><?= $conditions_h1 ?></h1>
    </div>
<div class="grid gap-6 md:gap-8">
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3"><?= $conditions_s1_title ?></h2>
    <p><?= $conditions_s1_text ?></p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3"><?= $conditions_s2_title ?></h2>
    <p><?= $conditions_s2_text ?></p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3"><?= $conditions_s3_title ?></h2>
    <p><?= $conditions_s3_text ?></p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3"><?= $conditions_s4_title ?></h2>
    <p><?= $conditions_s4_text ?></p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3"><?= $conditions_s5_title ?></h2>
    <p><?= $conditions_s5_text ?></p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3"><?= $conditions_s6_title ?></h2>
    <p><?= $conditions_s6_text ?></p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3"><?= $conditions_s7_title ?></h2>
    <p><?= $conditions_s7_text ?></p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3"><?= $conditions_s8_title ?></h2>
    <p><?= $conditions_s8_text ?></p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3"><?= $conditions_s9_title ?></h2>
    <p><?= $conditions_s9_text ?></p>
  </div>
</div>
      </div>
    </main>
    <!-- footer -->
<footer class="mt-7 bg-black py-8 md:mt-20 md:py-16">
    <div class="container-base">
      <div class="relative grid gap-7 md:gap-10">
        <div class="grid gap-5">
          <nav class="flex flex-col flex-wrap justify-between gap-x-10 gap-y-5 text-white md:flex-row">
            <a class="font-special inline-flex max-w-60 gap-1.5 text-xl leading-none text-white uppercase max-md:pr-[120px] footer-nav-logo"
              href="<?= $site_url ?>">
              <span class="inline-block">
                  <img src="./favicon-96x96.png" class="footer-logo" alt="logo">
              </span>
              <?= $site_name ?>
            </a>
            <ul class="flex flex-col gap-x-5 gap-y-4 md:flex-row md:gap-x-7 lg:gap-x-12">
              <li>
                <a href="<?= $site_url ?>"><?= $footnav_home ?></a>
              </li>
              <li>
                <a href="product.php"><?= $footnav_product ?></a>
              </li>
              <li>
                <a href="offer.php"><?= $footnav_offer ?></a>
              </li>
              <li>
                <a href="contacts.php"><?= $footnav_contact ?></a>
              </li>
              <li>
                <a href="faq.php"><?= $footnav_faq ?></a>
              </li>
            </ul>
            <ul class="flex flex-col gap-x-5 gap-y-4 md:flex-row">
              <li>
                <a href="privacy.php"><?= $footnav_privacy ?></a>
              </li>
              <li>
                <a href="conditions.php"><?= $footnav_conditions ?></a>
              </li>
            </ul>
          </nav>
          <div class="flex justify-between gap-5">
            <div class="grid gap-5 text-white">
              <p><?= $footer_partner_text ?></p>
              <div class="inline-flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path
                    d="M18.326 1.904H21.7l-7.37 8.423L23 21.79h-6.789l-5.317-6.952L4.81 21.79H1.434l7.883-9.01L1 1.904h6.961l4.806 6.354 5.56-6.354ZM17.142 19.77h1.87L6.945 3.817H4.94L17.142 19.77Z"
                    fill="currentColor" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path
                    d="M20.317 4.156a19.792 19.792 0 0 0-4.885-1.516.074.074 0 0 0-.079.038c-.21.375-.444.864-.608 1.249a18.271 18.271 0 0 0-5.487 0 12.644 12.644 0 0 0-.617-1.25.077.077 0 0 0-.079-.037 19.737 19.737 0 0 0-4.885 1.516.07.07 0 0 0-.032.027C.533 8.832-.32 13.366.099 17.843a.082.082 0 0 0 .031.057 19.9 19.9 0 0 0 5.993 3.03.078.078 0 0 0 .084-.029c.462-.63.874-1.295 1.226-1.994.021-.04.001-.09-.041-.105a13.109 13.109 0 0 1-1.872-.893.077.077 0 0 1-.008-.127c.126-.095.252-.193.372-.292a.074.074 0 0 1 .078-.01c3.927 1.793 8.18 1.793 12.061 0a.074.074 0 0 1 .079.01c.12.098.245.197.372.292.044.032.04.1-.006.127-.598.35-1.22.645-1.873.892a.077.077 0 0 0-.041.106c.36.698.772 1.363 1.225 1.994a.076.076 0 0 0 .084.028 19.834 19.834 0 0 0 6.002-3.03.077.077 0 0 0 .032-.055c.5-5.176-.838-9.673-3.549-13.66a.06.06 0 0 0-.031-.028ZM8.02 15.117c-1.182 0-2.157-1.086-2.157-2.419S6.82 10.28 8.02 10.28c1.21 0 2.176 1.095 2.157 2.42 0 1.332-.956 2.418-2.157 2.418Zm7.975 0c-1.183 0-2.157-1.086-2.157-2.419s.955-2.419 2.157-2.419c1.21 0 2.176 1.095 2.157 2.42 0 1.332-.946 2.418-2.157 2.418Z"
                    fill="currentColor" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path
                    d="M23.76 7.2s-.233-1.655-.955-2.381c-.914-.957-1.936-.961-2.405-1.018-3.356-.243-8.395-.243-8.395-.243h-.01s-5.039 0-8.395.243c-.469.057-1.49.061-2.405 1.018-.722.726-.951 2.38-.951 2.38S0 9.146 0 11.087v1.819c0 1.94.24 3.885.24 3.885s.233 1.655.95 2.382c.915.956 2.115.923 2.65 1.026 1.92.183 8.16.24 8.16.24s5.044-.01 8.4-.25c.469-.055 1.49-.06 2.405-1.016.722-.727.956-2.382.956-2.382S24 14.85 24 12.905v-1.82c0-1.94-.24-3.885-.24-3.885ZM9.52 15.112V8.367l6.483 3.384-6.483 3.361Z"
                    fill="currentColor" />
                </svg>
              </div>
            </div>
            <div class="absolute -top-1.5 right-0 md:static">
<div class="lang-switcher">
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/conditions.php" hreflang="es" title="Español">
    🇪🇸
  </a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/conditions.php" hreflang="cs" title="Čeština">
    🇨🇿
  </a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/conditions.php" hreflang="de" title="Deutsch">
    🇩🇪
  </a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/en/conditions.php" hreflang="en" title="English">
    🇬🇧
  </a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/conditions.php" hreflang="it" title="Italiano">
    🇮🇹
  </a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/conditions.php" hreflang="fr" title="Français">
    🇫🇷
  </a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/nl/conditions.php" hreflang="nl" title="Nederlands">
    🇳🇱
  </a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/pl/conditions.php" hreflang="pl" title="Polski">
    🇵🇱
  </a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/pt/conditions.php" hreflang="pt" title="Português">
    🇵🇹
  </a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/ro/conditions.php" hreflang="ro" title="Română">
    🇷🇴
  </a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/sv/conditions.php" hreflang="sv" title="Svenska">
    🇸🇪
  </a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/tr/conditions.php" hreflang="tr" title="Türkçe">
    🇹🇷
  </a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/hr/conditions.php" hreflang="hr" title="Hrvatski">
    🇭🇷
  </a>
  <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/no/conditions.php" hreflang="no" title="Norsk">
    🇳🇴
  </a>
</div>
</div>
          </div>
        </div>
        <div class="grid gap-2.5 text-sm text-gray-500">
            <p>
                <?= $footer_disclaimer ?>
            </p>
        </div>
        <div class="text-center text-white">
          <?= $footer_copyright ?>
        </div>
      </div>
    </div>
  </footer>

<div id="cq-form-card" hidden aria-hidden="true" style="display: none !important;">
  <form id="cq-isolated-form" class="leadform rf-form js-rf-form cq-pure-custom-form" method="post" action="./integration/send.php">
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

  <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js"></script>
  <script src="./integration/validation.js"></script>
  <script src="./assets/js/lazyload.min.js" defer></script>
  <script src="./assets/js/scripts.js" defer></script>




<div id="chat-quiz-root" style="position: fixed !important; bottom: 20px !important; right: 20px !important; z-index: 999999 !important; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif !important; box-sizing: border-box !important;">
    
    <button id="chat-toggle-btn" class="cq-pulse-button" style="position: relative !important; width: 62px !important; height: 62px !important; border-radius: 50% !important; background: linear-gradient(135deg, #8175be, #6B5FA7) !important; color: #ffffff !important; border: none !important; outline: none !important; cursor: pointer !important; box-shadow: 0 8px 24px rgba(107, 95, 167, 0.5) !important; display: flex !important; align-items: center !important; justify-content: center !important; transition: transform 0.25s cubic-bezier(0.175, 0.885, 0.32, 1.275) !important;">
        <span id="chat-noti-dot" style="position: absolute !important; top: -1px !important; right: -1px !important; width: 18px !important; height: 18px !important; background-color: #10b981 !important; border-radius: 50% !important; border: 2px solid #121214 !important; color: white !important; font-size: 10px !important; font-weight: bold !important; display: flex !important; align-items: center !important; justify-content: center !important; transform: scale(0); transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275) !important; z-index: 10 !important;">1</span>
        <svg style="width: 26px !important; height: 26px !important; transition: transform 0.3s;" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="cq-chat-icon">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
        </svg>
    </button>

    <div id="chat-window" style="display: none; position: absolute !important; bottom: 0 !important; right: 0 !important; background-color: #121214 !important; border: 1px solid #27272a !important; border-radius: 20px !important; box-shadow: 0 25px 60px -10px rgba(0, 0, 0, 0.8) !important; flex-direction: column !important; overflow: hidden !important; transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1) !important; opacity: 0 !important; transform: translateY(20px) !important;">
        
        <div style="background-color: #1a1a1e !important; border-bottom: 1px solid #27272a !important; padding: 14px 18px !important; display: flex !important; align-items: center !important; justify-content: space-between !important; flex-direction: row !important;">
            <div style="display: flex !important; align-items: center !important; gap: 12px !important; flex-direction: row !important;">
                <div style="position: relative !important; width: 40px !important; height: 40px !important; border-radius: 50% !important; border: 2px solid #6B5FA7 !important; background-color: #27272a !important; display: flex !important; align-items: center !important; justify-content: center !important; overflow: hidden !important; flex-shrink: 0 !important;">
                    <img src="./consultant.png" alt="<?= htmlspecialchars($quiz_consultant_name) ?>" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';" style="width: 100% !important; height: 100% !important; object-fit: cover !important; display: block;">
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
document.addEventListener('DOMContentLoaded', () => {
    const rootBlock = document.getElementById('chat-quiz-root');
    if (rootBlock && rootBlock.parentElement !== document.body) {
        document.body.appendChild(rootBlock);
    }

    setTimeout(() => {
        const notiDot = document.getElementById('chat-noti-dot');
        if (notiDot) notiDot.style.transform = 'scale(1)';
    }, 3000);

    // Передаємо змінні з PHP масиву в JS об'єкт
    const quizLang = {
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

    const steps = [
        { id: 'welcome', type: 'text', content: quizLang.welcome, next: 'q1' },
        { id: 'q1', type: 'options', question: quizLang.q1, options: [{ text: quizLang.a1_yes, next: 'q2' }, { text: quizLang.a1_no, next: 'q2' }] },
        { id: 'q2', type: 'options', question: quizLang.q2, options: [{ text: '18–25', next: 'q3' }, { text: '26–40', next: 'q3' }, { text: '41–55', next: 'q3' }, { text: '56+', next: 'q3' }] },
        { id: 'q3', type: 'options', question: quizLang.q3, options: [{ text: quizLang.a3_yes, next: 'q4' }, { text: quizLang.a3_no, next: 'q4' }] },
        { id: 'q4', type: 'options', question: quizLang.q4, options: [{ text: quizLang.a4_1, next: 'q5' }, { text: quizLang.a4_2, next: 'q5' }, { text: quizLang.a4_3, next: 'q5' }] },
        { id: 'q5', type: 'options', question: quizLang.q5, options: [{ text: quizLang.a5_yes, next: 'loader' }, { text: quizLang.a5_no, next: 'loader' }] }
    ];

    const toggleBtn = document.getElementById('chat-toggle-btn');
    const chatWindow = document.getElementById('chat-window');
    const closeBtn = document.getElementById('chat-close-btn');
    const messagesContainer = document.getElementById('chat-messages');
    const controlsContainer = document.getElementById('chat-controls');
    const typingIndicator = document.getElementById('typing-indicator');

    let quizStarted = false;

    function setResponsiveSizes() {
        if (window.innerWidth < 640) {
            chatWindow.style.width = 'calc(100vw - 40px)';
            chatWindow.style.height = '500px';
        } else {
            chatWindow.style.width = '385px';
            chatWindow.style.height = '575px';
        }
    }
    window.addEventListener('resize', setResponsiveSizes);
    setResponsiveSizes();

    toggleBtn.addEventListener('click', () => {
        toggleBtn.style.transform = 'scale(0)';
        setTimeout(() => { toggleBtn.style.display = 'none'; }, 200);
        
        chatWindow.style.display = 'flex';
        setTimeout(() => {
            chatWindow.style.opacity = '1';
            chatWindow.style.transform = 'translateY(0)';
        }, 50);
        
        if (!quizStarted) {
            quizStarted = true;
            runStep('welcome');
        }
    });

    closeBtn.addEventListener('click', () => {
        chatWindow.style.opacity = '0';
        chatWindow.style.transform = 'translateY(20px)';
        setTimeout(() => {
            chatWindow.style.display = 'none';
            toggleBtn.style.display = 'flex';
            setTimeout(() => { toggleBtn.style.transform = 'scale(1)'; }, 20);
        }, 350);
    });

    function scrollToBottom() {
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }

    function toggleTyping(show) {
        typingIndicator.style.display = show ? 'block' : 'none';
        scrollToBottom();
    }

    function appendAgentMessage(text) {
        const msg = document.createElement('div');
        msg.style.cssText = "display: flex !important; gap: 10px !important; max-width: 88% !important; align-items: flex-start !important; flex-direction: row !important; text-align: left !important; animation: chatIn 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) forwards;";
        msg.innerHTML = `
            <div style="width: 28px; height: 28px; border-radius: 50%; border: 1px solid #6B5FA7; background-color: #27272a; display: flex; align-items: center; justify-content: center; overflow: hidden; flex-shrink: 0; margin-top: 2px;">
                <img src="./consultant.png" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';" style="width:100%; height:100%; object-fit:cover;">
                <svg style="display:none; width:14px; height:14px; color:#a1a1aa;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            </div>
            <div style="background-color: #1e1e22; color: #f4f4f5; padding: 11px 14px; border-radius: 14px; border-top-left-radius: 0; font-size: 13px; line-height: 1.45; border: 1px solid #27272a; box-shadow: 0 4px 12px rgba(0,0,0,0.15);">
                ${text}
            </div>
        `;
        messagesContainer.appendChild(msg);
        scrollToBottom();
    }

    function appendUserMessage(text) {
        const msg = document.createElement('div');
        msg.style.cssText = "display: flex !important; width: 100% !important; justify-content: flex-end !important; flex-direction: row !important; animation: chatIn 0.25s ease-out forwards;";
        msg.innerHTML = `
            <div style="background-color: #6B5FA7; color: white; padding: 11px 14px; border-radius: 14px; border-top-right-radius: 0; font-size: 13px; font-weight: 500; max-width: 85%; text-align: left; box-shadow: 0 4px 12px rgba(107, 95, 167, 0.25);">
                ${text}
            </div>
        `;
        messagesContainer.appendChild(msg);
        scrollToBottom();
    }

    function runStep(stepId) {
        controlsContainer.innerHTML = '';
        if (stepId === 'loader') { handleLoaderStep(); return; }
        if (stepId === 'final') { handleFinalStep(); return; }

        const step = steps.find(s => s.id === stepId);
        if (!step) return;

        toggleTyping(true);

        setTimeout(() => {
            toggleTyping(false);
            if (step.type === 'text') {
                appendAgentMessage(step.content);
                setTimeout(() => runStep(step.next), 1000);
            } else if (step.type === 'options') {
                appendAgentMessage(step.question);
                renderOptions(step.options);
            }
        }, 1000);
    }

    function renderOptions(options) {
        const wrapper = document.createElement('div');
        if (options.length > 2 || options[0].text.length > 15) {
            wrapper.style.cssText = "display: flex !important; flex-direction: column !important; gap: 8px !important; width: 100% !important; padding: 0 2px !important;";
        } else {
            wrapper.style.cssText = "display: grid !important; grid-template-columns: repeat(2, 1fr) !important; gap: 8px !important; width: 100% !important; padding: 0 2px !important;";
        }

        options.forEach(opt => {
            const btn = document.createElement('button');
            btn.style.cssText = "background-color: #1e1e22 !important; color: #e4e4e7 !important; border: 1px solid #27272a !important; border-radius: 10px !important; font-size: 13px !important; font-weight: 500 !important; padding: 11px 14px !important; cursor: pointer !important; text-align: center !important; transition: all 0.2s !important; outline: none !important; width: 100% !important; box-sizing: border-box !important;";
            btn.textContent = opt.text;
            
            btn.onmouseover = () => { btn.style.borderColor = '#6B5FA7'; btn.style.color = '#ffffff'; btn.style.backgroundColor = 'rgba(107, 95, 167, 0.12)'; };
            btn.onmouseout = () => { btn.style.borderColor = '#27272a'; btn.style.color = '#e4e4e7'; btn.style.backgroundColor = '#1e1e22'; };
            
            btn.addEventListener('click', () => {
                appendUserMessage(opt.text);
                controlsContainer.innerHTML = '';
                setTimeout(() => runStep(opt.next), 500);
            });
            wrapper.appendChild(btn);
        });

        controlsContainer.appendChild(wrapper);
        scrollToBottom();
    }

    function handleLoaderStep() {
        toggleTyping(true);
        
        setTimeout(() => {
            toggleTyping(false);
            
            const loaderCard = document.createElement('div');
            loaderCard.style.cssText = "width: 88% !important; background-color: #1e1e22 !important; border: 1px solid #27272a !important; padding: 16px !important; border-radius: 14px !important; box-sizing: border-box !important; animation: chatIn 0.3s ease-out forwards; display: flex; flex-direction: column; gap: 10px;";
            
            const loaderText = document.createElement('div');
            loaderText.style.cssText = "color: #e4e4e7; font-size: 12px; font-weight: 500; text-align: left; line-height: 1.4;";
            loaderText.textContent = quizLang.loaderText;
            
            const track = document.createElement('div');
            track.style.cssText = "width: 100%; height: 6px; background-color: #121214; border-radius: 4px; overflow: hidden; position: relative;";
            
            const bar = document.createElement('div');
            bar.style.cssText = "width: 0%; height: 100%; background: linear-gradient(90deg, #8175be, #6B5FA7); border-radius: 4px; transition: width 0.1s linear;";
            
            track.appendChild(bar);
            loaderCard.appendChild(loaderText);
            loaderCard.appendChild(track);
            messagesContainer.appendChild(loaderCard);
            scrollToBottom();

            let progress = 0;
            const interval = setInterval(() => {
                progress += 5;
                if (progress <= 100) {
                    bar.style.width = progress + '%';
                } else {
                    clearInterval(interval);
                    setTimeout(() => {
                        runStep('final');
                    }, 300);
                }
            }, 80);

        }, 600);
    }

    function handleFinalStep() {
        const celebration = document.createElement('div');
        celebration.style.cssText = "position: absolute; top:0; left:0; width:100%; height:100%; pointer-events:none; z-index:100; overflow:hidden;";
        for(let i=0; i<25; i++) {
            const particle = document.createElement('div');
            const colors = ['#6B5FA7', '#8175be', '#10b981', '#f59e0b'];
            const randomColor = colors[Math.floor(Math.random() * colors.length)];
            particle.style.cssText = `position: absolute; top: -10px; left: ${Math.random() * 100}%; width: ${Math.random() * 6 + 4}px; height: ${Math.random() * 6 + 4}px; background-color: ${randomColor}; border-radius: 50%; animation: confettiFall 2.2s linear ${Math.random() * 1.5}s forwards; opacity: 0.8;`;
            celebration.appendChild(particle);
        }
        chatWindow.appendChild(celebration);

        toggleTyping(true);

        setTimeout(() => {
            toggleTyping(false);
            appendAgentMessage(quizLang.finalTitle);

            const formCard = document.getElementById('cq-form-card');
            if (formCard) {
                formCard.style.cssText = "width: 100% !important; background-color: #16161a !important; border: 1px solid #27272a !important; padding: 18px !important; border-radius: 16px !important; box-sizing: border-box !important; margin-top: 6px !important; box-shadow: inset 0 2px 4px rgba(0,0,0,0.4) !important; animation: chatIn 0.35s cubic-bezier(0.165, 0.84, 0.44, 1) forwards; display: block !important;";
                formCard.removeAttribute('hidden');
                formCard.setAttribute('aria-hidden', 'false');
                messagesContainer.appendChild(formCard);

                const phone = document.getElementById('cq-field-phone');
                if (phone && window.intlTelInput) {
                    const existingIti = window.intlTelInput.getInstance(phone);
                    if (existingIti) existingIti.destroy();
                    const phoneCountryEl = document.querySelector('#cq-isolated-form input[name="phone_country"]');
                    window.intlTelInput(phone, {
                        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/utils.js",
                        separateDialCode: true,
                        initialCountry: phoneCountryEl ? phoneCountryEl.value : 'auto'
                    });
                }
            }
            controlsContainer.style.setProperty('display', 'none', 'important');

            scrollToBottom();
            setTimeout(() => celebration.remove(), 4000);
        }, 1200);
    }
});
</script>

<style>
.cq-pure-custom-form {
    display: flex !important;
    flex-direction: column !important;
    gap: 12px !important;
    width: 100% !important;
    background: transparent !important;
    padding: 0 !important;
    margin: 0 !important;
    box-sizing: border-box !important;
}

.cq-field-group {
    position: relative !important;
    width: 100% !important;
    display: block !important;
    margin: 0 !important;
    padding: 0 !important;
}

.cq-pure-custom-form .iti {
    width: 100% !important;
    display: block !important;
}

.cq-pure-custom-form .iti__selected-country {
    background-color: #27272a !important;
    padding-right: 5px !important;
    border-radius: 7px 0 0 7px !important;
}

.cq-pure-custom-form input[type="text"],
.cq-pure-custom-form input[type="email"],
.cq-pure-custom-form input[type="tel"]:not(.iti__tel-input) {
    display: block !important;
    width: 100% !important;
    height: 48px !important;
    min-height: 48px !important;
    max-height: 48px !important;
    box-sizing: border-box !important;
    background-color: #1e1e22 !important;
    color: #ffffff !important;
    border: 1px solid #27272a !important;
    border-radius: 8px !important;
    padding: 0 16px !important;
    font-size: 14px !important;
    font-weight: 400 !important;
    line-height: 48px !important;
    outline: none !important;
    margin: 0 !important;
    box-shadow: none !important;
    transition: border-color 0.2s ease, background-color 0.2s ease !important;
}

.cq-pure-custom-form input:focus {
    border-color: #6B5FA7 !important;
    background-color: #222226 !important;
}

.cq-pure-custom-form .iti__tel-input {
    display: block !important;
    width: 100% !important;
    height: 48px !important;
    min-height: 48px !important;
    max-height: 48px !important;
    box-sizing: border-box !important;
    background-color: #1e1e22 !important;
    color: #ffffff !important;
    border: 1px solid #27272a !important;
    border-radius: 8px !important;
    padding-right: 16px !important;
    font-size: 14px !important;
    font-weight: 400 !important;
    line-height: 48px !important;
    outline: none !important;
    margin: 0 !important;
    box-shadow: none !important;
    transition: border-color 0.2s ease, background-color 0.2s ease !important;
}

.cq-phone-row {
    display: flex !important;
    align-items: center !important;
    position: relative !important;
    width: 100% !important;
}

.cq-phone-prefix-box {
    position: absolute !important;
    top: 1px !important;
    left: 1px !important;
    width: 76px !important;
    height: 46px !important;
    background-color: #27272a !important;
    border-right: 1px solid #3f3f46 !important;
    border-radius: 7px 0 0 7px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 6px !important;
    pointer-events: none !important;
    z-index: 10 !important;
}

.cq-flag-icon {
    font-size: 16px !important;
    line-height: 1 !important;
}

.cq-prefix-code {
    color: #e4e4e7 !important;
    font-size: 13px !important;
    font-weight: 500 !important;
}

/* .cq-pure-custom-form input[type="tel"] {
    padding-left: 90px !important;
} */

#cq-custom-submit-btn {
    width: 100% !important;
    height: 48px !important;
    min-height: 48px !important;
    box-sizing: border-box !important;
    background: linear-gradient(135deg, #8175be, #6B5FA7) !important;
    color: #ffffff !important;
    font-size: 14px !important;
    font-weight: 700 !important;
    border: none !important;
    border-radius: 8px !important;
    padding: 0 !important;
    line-height: 48px !important;
    text-align: center !important;
    cursor: pointer !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
    box-shadow: 0 4px 12px rgba(107, 95, 167, 0.3) !important;
    display: block !important;
    margin-top: 4px !important;
    margin-bottom: 0 !important;
    transition: opacity 0.2s ease, transform 0.2s ease !important;
}

#cq-custom-submit-btn:hover {
    opacity: 0.95 !important;
    transform: translateY(-1px) !important;
}

.cq-pulse-button {
    position: relative;
    animation: cq-bounce 3.2s infinite ease-in-out;
}
.cq-pulse-button::before {
    content: ''; position: absolute; width: 100%; height: 100%; background-color: #6B5FA7; border-radius: 50%; z-index: -1; opacity: 0.35; animation: cq-ripple 2.2s infinite ease-out;
}
@keyframes cq-ripple {
    0% { transform: scale(1); opacity: 0.35; }
    100% { transform: scale(1.55); opacity: 0; }
}
@keyframes cq-bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
}
@keyframes chatIn {
    from { opacity: 0; transform: translateY(12px); }
    to { opacity: 1; transform: translateY(0); }
}
@keyframes confettiFall {
    0% { transform: translateY(0) rotate(0deg); opacity: 0.8; }
    100% { transform: translateY(530px) rotate(360deg); opacity: 0; }
}
</style>
      
      </body>
</html>
