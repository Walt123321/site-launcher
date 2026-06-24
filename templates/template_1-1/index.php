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

if ($uri === "/lander/{$host}/index.php") {
    $canonical = 'https://' . $host . '/';
} else {
    $canonical = 'https://' . $host . $uri;
}
?>
<!DOCTYPE html>

<html class="w-mod-js wf-manrope-n4-active wf-manrope-n5-active wf-manrope-n6-active wf-active w-mod-ix" data-wf-page="67c1ba3acfe5c27126bcc1f5" data-wf-site="67c1ba3acfe5c27126bcc191" lang="<?= $site_lang ?>">
<head>

<link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>" />
<meta name="msvalidate.01" content="688C28A9085E183027B817E185356A11" />
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
      "name": "⚡ <?= $site_name ?> ⚡",
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
<link href="./favicon-96x96.png" rel="icon" sizes="96x96" type="image/png"/>
<link href="./favicon.svg" rel="icon" type="image/svg+xml"/>
<link href="./favicon.ico" rel="shortcut icon"/>
<link href="./apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180"/>
<link href="site.webmanifest" rel="manifest"/>
<style>
    .wf-force-outline-none[tabindex="-1"]:focus {
      outline: none;
    }
  </style>
<link href="./integration/default-integration.css" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/css/intlTelInput.css" rel="stylesheet"/>
<title><?= $page_title_main ?></title>
<meta content="website" property="og:type"/>
<meta content="<?= $page_description_main ?>" name="description"/>
<meta content="summary_large_image" name="twitter:card">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="Webflow" name="generator"/>
<link href="normalize.css" rel="stylesheet" type="text/css">
<link href="webflow.css" rel="stylesheet" type="text/css">
<link href="papas-exceptional-site-198d4f.webflow.css" rel="stylesheet" type="text/css"/>
<style>
    @media (min-width: 992px) {
      html.w-mod-js:not(.w-mod-ix) [data-w-id="35ae0bc8-d895-deeb-51b5-eac5b8cf1794"] {
        opacity: 0;
        -webkit-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="30a34707-6eb3-a0bc-2b4d-b6131c4f1081"] {
        opacity: 0;
        -webkit-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="d48208f5-2047-ab4e-ef7b-f2de33c65ef3"] {
        -webkit-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="ad008d0b-ca72-3722-c6cd-77686dc346c0"] {
        opacity: 0;
        -webkit-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="ad008d0b-ca72-3722-c6cd-77686dc346ca"] {
        opacity: 0;
        -webkit-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="2f80477f-23b3-153b-6ac3-96fff2ff8cc6"] {
        opacity: 0;
        -webkit-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="2f80477f-23b3-153b-6ac3-96fff2ff8cd0"] {
        opacity: 0;
        -webkit-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="e5af3ea2-e489-ee58-2953-21b064fb8231"] {
        opacity: 0;
        -webkit-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="7ba489e7-d1c8-85f9-e8bd-3ff3761719bd"] {
        opacity: 0;
        -webkit-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="80108313-5a20-1c62-1343-f315aeb7ef3f"] {
        opacity: 0;
        -webkit-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="5fbbd9d6-b291-c21e-e69e-3700890e19df"] {
        opacity: 0;
        -webkit-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="58b3e01c-d462-a6d1-a3e6-4b1761832b31"] {
        opacity: 0;
        -webkit-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="58b3e01c-d462-a6d1-a3e6-4b1761832b38"] {
        opacity: 0;
        -webkit-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="58b3e01c-d462-a6d1-a3e6-4b1761832b40"] {
        opacity: 0;
        -webkit-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="58b3e01c-d462-a6d1-a3e6-4b1761832b47"] {
        opacity: 0;
        -webkit-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="58b3e01c-d462-a6d1-a3e6-4b1761832b4f"] {
        opacity: 0;
        -webkit-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="58b3e01c-d462-a6d1-a3e6-4b1761832b61"] {
        opacity: 0;
        -webkit-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 24px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }
    }

.layout1_component.main-flex {
    display: flex !important;
    flex-direction: row !important; 
    align-items: center !important;
    justify-content: space-between !important;
    gap: 40px !important;
    width: 100% !important;
    max-width: 1200px !important;
    margin: 0 auto !important;
    opacity: 1 !important;
    transform: none !important;
}

.layout1_content-left, 
.layout1-image-gradient-wrapper {
    flex: 1 !important;
    width: 50% !important;
    opacity: 1 !important;
    transform: none !important;
}

@media screen and (max-width: 991px) {
    .layout1_component.main-flex {
        gap: 30px !important;
        padding: 0 20px !important;
    }
}

@media screen and (max-width: 767px) {
    .layout1_component.main-flex {
        flex-direction: column !important;
        text-align: center !important;
        gap: 24px !important;
        align-items: center !important;
        justify-content: center !important;
    }

    .layout1_content-left, 
    .layout1-image-gradient-wrapper {
        width: 100% !important;
        flex: none !important;
    }

    .flex-image {
        width: 100% !important;
        height: auto !important;
        max-width: 500px !important;
        margin: 0 auto !important;
    }
}

.layout1_component.img-text-flex {
    display: flex !important;
    flex-direction: row !important;
    align-items: center !important;
    justify-content: center !important;
    width: 100% !important;
    min-height: auto !important;
    padding: 60px 5% !important;
    gap: 40px !important;
    opacity: 1 !important;
    visibility: visible !important;
    transform: none !important;
}

.img-text-flex .layout1_content {
    flex: 1 !important;
    width: 50% !important;
    max-width: 550px !important;
    opacity: 1 !important;
    transform: none !important;
}

.img-text-flex .layout1-image-gradient-wrapper {
    display: flex !important;
    flex: 1 !important;
    width: 50% !important;
    max-width: 550px !important;
    justify-content: center !important;
    align-items: center !important;
    opacity: 1 !important;
    visibility: visible !important;
    transform: none !important;
    min-width: 300px !important;
}

.img-text-flex .layout1_image-wrapper {
    display: block !important;
    width: 100% !important;
    height: auto !important;
    opacity: 1 !important;
    visibility: visible !important;
}

.img-text-flex img.layout1_image {
    display: block !important;
    width: 100% !important;
    max-width: 100% !important;
    height: auto !important;
    object-fit: cover !important;
    border-radius: 16px !important;
    visibility: visible !important;
}

@media screen and (max-width: 991px) {
    .layout1_component.img-text-flex {
        gap: 30px !important;
    }
}

@media screen and (max-width: 767px) {
    .layout1_component.img-text-flex {
        flex-direction: column !important;
        text-align: left !important;
        padding: 40px 20px !important;
    }

    .img-text-flex .layout1_content, 
    .img-text-flex .layout1-image-gradient-wrapper {
        width: 100% !important;
        max-width: 100% !important;
        flex: none !important;
    }
    
    .img-text-flex .layout1_content {
        margin-bottom: 30px !important;
    }
}

.w-layout-grid.layout1_content.flex-img-text {
    display: flex !important;
    flex-direction: row !important;
    align-items: center !important;
    justify-content: space-between !important;
    gap: 60px !important;
    width: 100% !important;
    max-width: 1200px !important;
    margin: 0 auto !important;
    grid-template-columns: none !important;
    grid-column-gap: 0 !important;
    grid-row-gap: 0 !important;
    opacity: 1 !important;
    transform: none !important;
}

.flex-img-text .layout-component {
    flex: 1 1 50% !important;
    width: 50% !important;
    max-width: 600px !important;
    min-width: 0 !important;    
    opacity: 1 !important;
    visibility: visible !important;
    transform: none !important;
    text-align: left !important;
}

.flex-img-text .layout1-image-gradient-wrapper {
    flex: 1 1 50% !important;
    width: 50% !important;
    display: flex !important;
    justify-content: center !important;
    opacity: 1 !important;
    visibility: visible !important;
    transform: none !important;
}

.flex-img-text .layout1_image {
    width: 100% !important;
    max-width: 100% !important;
    height: auto !important;
    display: block !important;
    object-fit: contain !important;
    border-radius: 12px !important;
}

@media screen and (max-width: 991px) {
    .flex-img-text {
        gap: 30px !important;
        padding: 0 30px !important;
    }
}

@media screen and (max-width: 767px) {
    .w-layout-grid.layout1_content.flex-img-text {
        flex-direction: column !important;
        gap: 40px !important;
        padding: 40px 20px !important;
    }

    .flex-img-text .layout-component,
    .flex-img-text .layout1-image-gradient-wrapper {
        width: 100% !important;
        flex: none !important;
        max-width: 100% !important;
    }

    .flex-img-text .layout-component {
        text-align: center !important;
    }
}

.w-layout-grid.layout1_content.img-flex-item {
    display: flex !important;
    flex-direction: row !important;
    flex-wrap: nowrap !important;
    align-items: flex-start !important;
    justify-content: center !important;
    width: 100% !important;
    max-width: 1200px !important;
    margin: 0 auto !important;
    gap: 40px !important;
    
    grid-template-columns: none !important;
    grid-template-areas: none !important;
    opacity: 1 !important;
    transform: none !important;
}

.img-flex-item .layout-component {
    display: block !important;
    flex: 1 1 50% !important; 
    width: 50% !important;
    max-width: 550px !important;
    min-width: 0 !important;
    opacity: 1 !important;
    visibility: visible !important;
    transform: none !important;
}

.img-flex-item .layout1-image-gradient-wrapper {
    display: flex !important;
    flex: 1 1 50% !important;
    width: 50% !important;
    max-width: 550px !important;
    justify-content: center !important;
    align-items: center !important;
    opacity: 1 !important;
    visibility: visible !important;
    transform: none !important;
}

.img-flex-item .layout1_image-wrapper,
.img-flex-item .layout1_image {
    display: block !important;
    width: 100% !important;
    height: auto !important;
    max-width: 100% !important;
    opacity: 1 !important;
    visibility: visible !important;
}

@media screen and (max-width: 991px) {
    .img-flex-item {
        gap: 20px !important;
        padding: 0 20px !important;
    }
}

@media screen and (max-width: 767px) {
    .w-layout-grid.layout1_content.img-flex-item {
        flex-direction: column !important; 
        text-align: left !important;
    }

    .img-flex-item .layout-component,
    .img-flex-item .layout1-image-gradient-wrapper {
        width: 100% !important;
        flex: none !important;
        max-width: 100% !important;
    }
  
}
  </style>
<script src="webfont.js" type="text/javascript"></script>
<link href="css.css" media="all" rel="stylesheet"/>
<link href="favicon.png" rel="shortcut icon" type="image/x-icon"/>
<link href="css2.css" rel="stylesheet"/>
<style>
    /* Стилі для відміток на слайдерах */
    input[type="range"] {
      width: 100%;
      max-width: 800px;
      accent-color: #7C3AED;
    }

    datalist {
      display: flex;
      justify-content: space-between;
      width: 100%;
      max-width: 800px;
      padding: 0;
    }

    datalist option {
      padding: 0;
      color: #7C3AED;
      font-weight: bold;
    }

    /* Контейнер для слайдера та міток */
    .slider-container {
      position: relative;
      width: 100%;
      max-width: 800px;
      margin: 0 auto;
    }

    /* Стилі для міток */
    .slider-labels {
      position: relative;
      display: flex;
      justify-content: space-between;
      width: 100%;
    }

    @media (max-width: 505px) {
      .slider-label {
        font-size: 9px !important;
      }
    }

      @media (max-width: 395px) {
      .slider-label {
        font-size: 8px !important;
      }
    }

    .slider-label {
      color: #7C3AED;
      font-size: 12px;
      transform: translateX(-50%);
    }

    a {
      text-decoration: none !important;
    }

    .iti__selected-dial-code,
    .iti__country-name {
      color: gray !important;
    }

    
  </style>
</link></link></meta></head>
<body cz-shortcut-listen="true">
<div class="page-wrapper">
<header class="navbar_component w-nav" data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" data-w-id="8e40c4b5-461f-531e-f642-15e88be2e74a" fs-scrolldisable-element="smart-nav" role="banner">
  <div class="navbar_container">
    <div class="navbar_logo-wrapper">
      <a href="<?= $site_url ?>">
        <img loading="lazy" alt="Logo <?= $source ?>" src="favicon.svg" style="width: 25px; margin: 5px"/>
        <span style="color: black; font-weight: 700; font-size: 15px">
          <?= $source ?>
        </span>
      </a>
    </div>

    <nav class="navbar_menu is-page-height-tablet w-nav-menu" role="navigation">
      <div class="navbar_menu-links">
        <a class="navbar_link w-nav-link" href="<?= $site_url ?>/#why-invest" style="background-color: transparent">
          <?= $text_why_invest ?>
        </a>
        <a class="navbar_link w-nav-link" href="<?= $site_url ?>/#pricing" style="background-color: transparent">
          <?= $text_how_to_invest ?>
        </a>
        <a class="navbar_link w-nav-link" href="about.php" style="background-color: transparent">
          <?= $text_who_we_are ?>
        </a>
        <a class="navbar_link w-nav-link" href="<?= $site_url ?>/#minimization" style="background-color: transparent">
          <?= $text_investment_risks ?>
        </a>
        <a class="navbar_link w-nav-link" href="<?= $site_url ?>/#Beneficios" style="background-color: transparent">
          <?= $text_benefits ?>
        </a>
        <a class="navbar_link w-nav-link" href="<?= $site_url ?>/#faq" style="background-color: transparent">
          <?= $text_faq ?>
        </a>
      </div>
    </nav>

    <div class="navbar_menu-buttons">
      <a class="button w-button"
         href="register.php"
         style="
           background:#111827;
           color:#ffffff;
           border:1px solid #374151;
           border-radius:10px;
           padding:12px 24px;
           font-weight:600;
           transition:all .25s ease;
         "
         onmouseover="this.style.background='#1F2937'"
         onmouseout="this.style.background='#111827'"
      >
        <?= $text_log_in ?>
      </a>

      <a class="button w-button"
         href="register.php"
         style="
           background:#6D28D9;
           color:#ffffff;
           border:1px solid #6D28D9;
           border-radius:10px;
           padding:12px 24px;
           font-weight:600;
           transition:all .25s ease;
         "
         onmouseover="this.style.background='#7C3AED'"
         onmouseout="this.style.background='#6D28D9'"
      >
        <?= $text_sign_up ?>
      </a>
    </div>

    <div aria-controls="w-nav-overlay-0" aria-expanded="false" aria-haspopup="menu" aria-label="menu" class="navbar_menu-button w-nav-button" role="button" style="-webkit-user-select: text" tabindex="0">
      <div class="menu-icon1">
        <div class="menu-icon1_line-top"></div>
        <div class="menu-icon1_line-middle">
          <div class="menu-icon1_line-middle-inner"></div>
        </div>
        <div class="menu-icon1_line-bottom"></div>
      </div>
    </div>
  </div>
  <div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0"></div>
</header>

<main class="main-wrapper">
<section class="section_header" data-w-id="d48208f5-2047-ab4e-ef7b-f2de33c65eee" id="top-of-page">
<div class="hero-pattern-wrapper">
<img alt="Hero section grid background" class="hero-pattern" loading="lazy" src="Hero-Grid.svg"/>
</div>
<div class="padding-global padding-section-large is-hero">
<div class="container-large">
<div class="header_component">
<div class="w-layout-grid layout1_content main-flex" data-w-id="d48208f5-2047-ab4e-ef7b-f2de33c65ef3">
<div class="max-width-large hero-wrap">
<h1 class="heading-style-h1"><?= $heading_main ?></h1>
<!-- mob-version form -->
<form action="./integration/send.php" class="leadform S’inscrire-form bottom form-reg c-form form1 mob-form rf-form js-rf-form" id="registrationForm" method="post" style="padding-bottom: 0px">
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

  <div class="block-center__wrapper">

    <div class="input-holder pos-r form-group input-wrap">
      <input class="form-control w-input" name="fname" placeholder="<?= $placeholder_fname ?>" required style="width: 100%;" type="text" value="">
    </div>

    <div class="input-holder pos-r form-group input-wrap">
      <input class="form-control w-input" name="lname" placeholder="<?= $placeholder_lname ?>" required style="width: 100%;" type="text" value="">
    </div>

    <div class="input-holder pos-r form-group input-wrap">
      <input class="form-control w-input" name="email" placeholder="<?= $placeholder_email ?>" required style="width: 100%;" type="email" value="">
    </div>

    <div class="input-holder pos-r form-group input-wrap">
      <input class="form-control w-input" name="fullphone" placeholder="" required style="width: 100%;" type="tel">
      <span class="error-msg hide"></span>
    </div>

    <div class="btn-holder js-buttons form-group input-wrap" style="display: flex; justify-content: center">
      <button class="submit btn_send" id="btn-payWithoutAuth" style="margin-bottom: 20px" type="submit">
        <?= $button_sign_up ?>
      </button>
    </div>
  </div>

  <div class="form-img">
    <img alt="visa" src="visa.png"/>
    <img alt="mastercard" src="mastercard.svg"/>
    <img alt="paypal" src="PayPal.svg.webp"/>
    <img alt="ssl security" src="sslsecure.svg"/>
  </div>

</form>
<div class="spacer-small">
<img alt="First-screen image of invest platform" src="investor.webp" style="border-radius: 15px;">
</img></div>
<div class="spacer-small"></div>
<p class="text-size-large"><?= $text_intro ?></p>
</div>
<form action="./integration/send.php" class="leadform S’inscrire-form bottom form-reg c-form form1 form-pc rf-form js-rf-form" id="registrationForm" method="post" style="padding-bottom: 0px">
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

  <div class="block-center__wrapper">

    <div class="input-holder pos-r form-group input-wrap">
      <input class="form-control w-input" name="fname" placeholder="<?= $placeholder_fname ?>" required style="width: 100%;" type="text" value="">
    </div>

    <div class="input-holder pos-r form-group input-wrap">
      <input class="form-control w-input" name="lname" placeholder="<?= $placeholder_lname ?>" required style="width: 100%;" type="text" value="">
    </div>

    <div class="input-holder pos-r form-group input-wrap">
      <input class="form-control w-input" name="email" placeholder="<?= $placeholder_email ?>" required style="width: 100%;" type="email" value="">
    </div>

    <div class="input-holder pos-r form-group input-wrap">
      <input class="form-control w-input" name="fullphone" placeholder="" required style="width: 100%;" type="tel">
      <span class="error-msg hide"></span>
    </div>

    <div class="btn-holder js-buttons form-group input-wrap" style="display: flex; justify-content: center">
      <button class="submit btn_send" id="btn-payWithoutAuth" style="margin-bottom: 20px" type="submit">
        <?= $button_sign_up ?>
      </button>
    </div>
  </div>

  <div class="form-img">
    <img alt="visa" src="visa.png"/>
    <img alt="mastercard" src="mastercard.svg"/>
    <img alt="paypal" src="PayPal.svg.webp"/>
    <img alt="ssl security" src="sslsecure.svg"/>
  </div>

</form>
</div>
</div>
</div>
</div>
</section>
<div class="section-features" id="features">
<div class="padding-section-small">
<section class="section_header1">
<div class="padding-global padding-section-small">
<div class="container-medium">
<div class="header49_component">
<div class="w-layout-grid header49_content">
<div class="header49_content-left"></div>
</div>
</div>
</div>
</div>
</section>
<section class="section_layout1" id="why-invest">
<h2 class="heading-style-h3" style="font-weight: bold; text-align: center; margin-bottom: 60px;"><?= $heading_reasons ?></h2>
<div class="padding-global padding-section-small">
<div class="container-medium">
<div class="layout1_component main-flex">
<div class="layout1_content-left" data-w-id="35ae0bc8-d895-deeb-51b5-eac5b8cf1794" style="
                          opacity: 0;
                          transform: translate3d(0px, 24px, 0px)
                            scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg)
                            rotateZ(0deg) skew(0deg, 0deg);
                          transform-style: preserve-3d;
                        ">
<div class="text-block-max">
<h3 class="heading-style-h4" style="font-weight: bold; text-align: left;"><?= $text_protect_capital ?></h3>
<div class="spacer-small"></div>
<p class="text-size-regular" style="text-align: left;"><?= $text_inflation ?></p>
</div>
</div>
<div class="layout1-image-gradient-wrapper" data-w-id="30a34707-6eb3-a0bc-2b4d-b6131c4f1081" style="
                          opacity: 0;
                          transform: translate3d(0px, 24px, 0px)
                            scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg)
                            rotateZ(0deg) skew(0deg, 0deg);
                          transform-style: preserve-3d;
                        ">
<img alt="AI trading stock analysis" class="flex-image" loading="lazy" src="investor1.webp">
</img></div>
</div>
</div>
</div>
</section>
<section class="section_layout1">
<div class="padding-global padding-section-small">
<div class="container-medium">
<div class="layout1_component">
<div class="w-layout-grid layout1_content">
<div class="layout1_content-left is-right" data-w-id="ad008d0b-ca72-3722-c6cd-77686dc346c0" id="w-node-ad008d0b-ca72-3722-c6cd-77686dc346c0-26bcc1f5" style="
                          opacity: 0;
                          transform: translate3d(0px, 24px, 0px)
                            scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg)
                            rotateZ(0deg) skew(0deg, 0deg);
                          transform-style: preserve-3d;
                        ">
<h3 class="heading-style-h4" style="font-weight: bold;"><?= $heading_auto_investing ?></h3>
<div class="spacer-small"></div>
<p class="text-size-regular"><?= $text_auto_investing ?></p>
</div>
<div class="layout1-image-gradient-wrapper" data-w-id="ad008d0b-ca72-3722-c6cd-77686dc346ca" style="
                          opacity: 0;
                          transform: translate3d(0px, 24px, 0px)
                            scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg)
                            rotateZ(0deg) skew(0deg, 0deg);
                          transform-style: preserve-3d;
                        ">
<div class="layout1_image-wrapper">
<img alt="Online investing" class="layout1_image feature-2 flex-image" loading="lazy" sizes="(max-width: 479px) 82vw, (max-width: 767px) 85vw, (max-width: 991px) 39vw, 38vw" src="investathome.webp">
</img></div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="section_layout1">
<div class="padding-global padding-section-small">
<div class="container-medium">
<div class="layout1_component img-text-flex">
<div class="w-layout-grid layout1_content">
<div class="layout1_content-left" data-w-id="2f80477f-23b3-153b-6ac3-96fff2ff8cc6" style="
                          opacity: 0;
                          transform: translate3d(0px, 24px, 0px)
                            scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg)
                            rotateZ(0deg) skew(0deg, 0deg);
                          transform-style: preserve-3d;
                        ">
<h3 class="heading-style-h4" style="font-weight: bold;"><?= $heading_min_invest ?></h3>
<div class="spacer-small"></div>
<p class="text-size-regular"><?= $text_min_invest ?></p>
<div class="spacer-medium"></div>
<h3 class="heading-style-h4" style="font-weight: bold;"><?= $heading_control ?></h3>
<div class="spacer-medium"></div>
<p class="text-size-regular"><?= $text_control ?></p>
<div class="spacer-medium"></div>
<div class="button-group">
<a class="button w-button" href="register.php"><?= $button_signup ?></a>
</div>
<br/>
</div>
</div>
<div class="layout1-image-gradient-wrapper" data-w-id="2f80477f-23b3-153b-6ac3-96fff2ff8cd0" style="
                        opacity: 0;
                        transform: translate3d(0px, 24px, 0px) scale3d(1, 1, 1)
                          rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                          skew(0deg, 0deg);
                        transform-style: preserve-3d;
                      ">
<div class="layout1_image-wrapper">
<img alt="Financial growth investment concept" class="layout1_image feature-3" loading="lazy" sizes="(max-width: 479px) 82vw, (max-width: 767px) 85vw, (max-width: 991px) 39vw, 38vw" src="investgrowth.webp">
</img></div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</main>
</div>

<section>
  <div class="padding-global padding-section-medium">
    <div class="container-medium">
      <div class="text-align-center">
        <h2 class="heading-style-h2" style="font-weight: bold;">
          <h2 class="heading-style-h2" style="font-weight: bold;"><?= $text_expected_returns ?></h2>
        </h2>
        <div class="spacer-medium"></div>
        <div class="calculator-wrapper" style="
              max-width: 800px;
              margin: 0 auto;
              padding: 30px;
              background: rgba(0, 0, 0, 0.6);
              backdrop-filter: blur(10px);
              border-radius: 20px;
              box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            ">
          <div class="input-group" style="margin-bottom: 30px">
            <div style="display: flex; flex-direction: column">
              <label style="
                    flex: 1;
                    text-align: left;
                    color: #fff;
                    font-size: 19px;
                    padding-bottom: 10px;
                  "><?= $text_my_investment ?></label>
              <div style="
                    display: flex;
                    justify-content: center;
                    border: 3px solid #7C3AED;
                    border-radius: 25px;
                    width: 100%;
                    max-width: 150px;
                    margin-bottom: 15px;
                  ">
                <span id="investmentValue" style="
                      color: #7C3AED;
                      text-align: left;
                      font-size: 15px;
                      font-weight: bold;
                      padding: 10px;
                    "> <?= $currency ?> </span>
              </div>
              <div style="
                    width: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    gap: 5px;
                  ">
                <div class="slider-container">
                  <input id="investment" list="investment-markers" max="<?= $app_price * 50000 ?>" min="<?= $app_price ?>" style="
                        width: 100%;
                        max-width: 800px;
                        accent-color: rgb(255, 215, 0);
                      " type="range" value="<?= $app_price?>"/>
                  <div class="slider-labels">
                    <span class="slider-label"><?= $app_price ?></span>
                    <span class="slider-label"><?= $app_price * 10 ?></span>
                    <span class="slider-label"><?= $app_price * 20 ?></span>
                    <span class="slider-label"><?= $app_price * 30 ?></span>
                    <span class="slider-label"><?= $app_price * 40 ?></span>
                    <span class="slider-label"><?= $app_price * 50 ?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="input-group" style="margin-bottom: 30px">
            <div style="display: flex; flex-direction: column">
              <label style="
                flex: 1;
                text-align: left;
                color: #fff;
                font-size: 19px;
                padding-bottom: 10px;
              "><?= $text_usage_period ?></label> 
              <div style="
                    display: flex;
                    justify-content: center;
                    border: 3px solid #7C3AED;
                    border-radius: 25px;
                    width: 100%;
                    max-width: 150px;
                    margin-bottom: 15px;
                  ">
                <div style="padding: 10px; gap: 10px">
                  <span id="weeksValue" style="
                        color: #7C3AED;
                        font-size: 20px;
                        font-weight: bold;
                      ">14</span>
                  <span style="
                        color: #7C3AED;
                        font-size: 20px;
                        font-weight: bold;
                      "><?= $text_days ?></span>
                </div>
              </div>
              <div style="
                    width: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    gap: 5px;
                  ">
                <div class="slider-container">
                  <input id="weeks" list="weeks-markers" max="50" min="10" style="
                        width: 100%;
                        max-width: 800px;
                        accent-color: #7C3AED;
                      " type="range" value="14"/>
                  <div class="slider-labels">
                    <span class="slider-label">10</span>
                    <span class="slider-label">20</span>
                    <span class="slider-label">30</span>
                    <span class="slider-label">40</span>
                    <span class="slider-label">50</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="result" style="
                margin-top: 30px;
                padding: 20px;
                border-radius: 25px;
                text-align: center;
                border: 3px solid #7C3AED;
              ">
            <span style="color: #7C3AED; margin-bottom: 10px; font-weight: bold;">622 <?= $app_currency ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</section>

<section class="section_pricing" id="pricing">
<div class="padding-global padding-section-medium">
<div class="container-medium">
<div class="pricing_component">
<div class="text-align-center">
<div class="max-width-medium align-center">
<h2 class="heading-style-h2" style="font-weight: bold;"><?= $text_h2_ai_investments ?></h2> 
<div class="spacer-small"></div>
</div>
</div>
<div class="spacer-xxlarge"></div>
<div class="w-layout-grid pricing_grid-list">
<div class="gradient-wrapper" data-w-id="">
<div class="pricing_plan is-main">
<div class="pricing-header">
<div class="pricing-tag">
<h3 class="heading-style-h4" style="font-weight: bold;"><?= $text_h3_registration ?></h3>
</div>
<p><?= $text_p_registration ?></p>
</div>
<div class="pricing-header">
<div class="pricing-tag">
<h3 class="heading-style-h4" style="font-weight: bold;"><?= $text_h3_trading_approach ?></h3>
</div>
<p><?= $text_p_trading_approach ?></p>
</div>
</div>
</div>
<div class="pricing_plan" data-w-id="">
<div class="pricing-header">
<h3 class="heading-style-h4" style="font-weight: bold;"><?= $text_h3_ai_trading ?></h3>
<p class="text-size-large"><?= $text_p_ai_trading ?></p>
</div>
<div class="pricing-header">
<h3 class="heading-style-h4" style="font-weight: bold;"><?= $text_h3_profit_flexibility ?></h3>
<p class="text-size-large"><?= $text_p_profit_flexibility ?></p>
</div>
<img alt="Decorative testimonial section pattern" class="testimonial-pattern-image" loading="lazy" src="testimonial-pattern.svg">
</img></div>
</div>
</div>
</div>
</div>
</section>
<div class="section-features" id="features">
<div class="padding-section-small">
<section class="section_header1" id="minimization">
<div class="padding-global padding-section-small">
<div class="container-medium">
<div class="header49_component">
<div class="">
<div class="header49_content-left">
<h2 class="heading-style-h2" id="minimization" style="font-weight: bold; text-align: center;"><?= $text_h2_risk_control ?></h2> 
</div>
</div>
</div>
</div>
</div>
</section>
<section class="section_layout1">
<div class="padding-global padding-section-small">
<div class="container-medium">
<div class="layout1_component">
<div class="w-layout-grid layout1_content img-flex-item">
<div class="layout-component" data-w-id="35ae0bc8-d895-deeb-51b5-eac5b8cf1794" style="
                  max-width: max-content !important;
                      opacity: 0;
                      transform: translate3d(0px, 24px, 0px) scale3d(1, 1, 1)
                        rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                        skew(0deg, 0deg);
                      transform-style: preserve-3d;
                    ">
<h3 class="heading-style-h4" style="font-weight: bold;"><?= $text_h3_ai_analysis ?></h3>
<div class="spacer-small"></div>
<p class="text-size-regular"><?= $text_p_ai_analysis ?></p>
</div>
<div class="layout1-image-gradient-wrapper" data-w-id="30a34707-6eb3-a0bc-2b4d-b6131c4f1081" style="
                      opacity: 0;
                      transform: translate3d(0px, 24px, 0px) scale3d(1, 1, 1)
                        rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                        skew(0deg, 0deg);
                      transform-style: preserve-3d;
                    ">
<div class="layout1_image-wrapper">
<img alt="AI trading market analysis" class="layout1_image feature-1" loading="lazy" src="Kiintell.webp">
</img></div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="section_layout1">
<div class="padding-global padding-section-small">
<div class="container-medium">
<div class="layout1_component">
<div class="w-layout-grid layout1_content">
<div class="layout1_content-left is-right" data-w-id="ad008d0b-ca72-3722-c6cd-77686dc346c0" id="w-node-ad008d0b-ca72-3722-c6cd-77686dc346c0-26bcc1f5" style="
                      opacity: 0;
                      transform: translate3d(0px, 24px, 0px) scale3d(1, 1, 1)
                        rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                        skew(0deg, 0deg);
                      transform-style: preserve-3d;
                    ">
<h3 class="heading-style-h4" style="font-weight: bold;"><?= $text_h3_custom_risk ?></h3>
<div class="spacer-small"></div>
<p class="text-size-regular"><?= $text_p_custom_risk ?></p>
</div>
<div class="layout1-image-gradient-wrapper" data-w-id="ad008d0b-ca72-3722-c6cd-77686dc346ca" style="
                      opacity: 0;
                      transform: translate3d(0px, 24px, 0px) scale3d(1, 1, 1)
                        rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                        skew(0deg, 0deg);
                      transform-style: preserve-3d;
                    ">
<div class="layout1_image-wrapper">
<img alt="Rising stock chart" class="layout1_image feature-2" loading="lazy" sizes="(max-width: 479px) 82vw, (max-width: 767px) 85vw, (max-width: 991px) 39vw, 38vw" src="charts.webp">
</img></div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="section_layout1">
<div class="padding-global padding-section-small">
<div class="container-medium">
<div class="layout1_component">
<div class="w-layout-grid layout1_content">
<div class="layout1_content-left" data-w-id="2f80477f-23b3-153b-6ac3-96fff2ff8cc6" style="
                      opacity: 0;
                      transform: translate3d(0px, 24px, 0px) scale3d(1, 1, 1)
                        rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                        skew(0deg, 0deg);
                      transform-style: preserve-3d;
                    ">
<h3 class="heading-style-h4" style="font-weight: bold;"><?= $text_h3_transparency ?></h3>
<div class="spacer-small"></div>
<p class="text-size-regular"><?= $text_p_transparency ?></p>
<div class="spacer-medium"></div>
<div class="button-group">
<a class="button w-button" href="register.php"><?= $button_signup ?></a>
</div>
</div>
<div class="layout1-image-gradient-wrapper" data-w-id="2f80477f-23b3-153b-6ac3-96fff2ff8cd0" style="
                      opacity: 0;
                      transform: translate3d(0px, 24px, 0px) scale3d(1, 1, 1)
                        rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                        skew(0deg, 0deg);
                      transform-style: preserve-3d;
                    ">
<div class="layout1_image-wrapper">
<img alt="Man checking AI investments" class="layout1_image feature-3" loading="lazy" sizes="(max-width: 479px) 82vw, (max-width: 767px) 85vw, (max-width: 991px) 39vw, 38vw" src="happyinvestor.webp">
</img></div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
<div class="section-features" id="features">
<div class="padding-section-small"><section class="section_header1" id="Beneficios">
<div class="padding-global padding-section-small">
<div class="container-medium">
<div class="header49_component">
<div class="">
<div class="header49_content-left">
<h2 class="heading-style-h2" style="font-weight: bold; text-align: center;"><?= $text_h2_benefits ?></h2>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="section_layout1">
<div class="padding-global padding-section-small">
<div class="container-medium">
<div class="layout1_component">
<div class="w-layout-grid layout1_content">
<div class="layout1_content-left" data-w-id="58b3e01c-d462-a6d1-a3e6-4b1761832b31" style="
                      opacity: 0;
                      transform: translate3d(0px, 24px, 0px) scale3d(1, 1, 1)
                        rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                        skew(0deg, 0deg);
                      transform-style: preserve-3d;
                    ">
<h3 class="heading-style-h4" style="font-weight: bold;"><?= $text_h3_ai_investing ?></h3>
<div class="spacer-small"></div>
<p class="text-size-regular"><?= $text_p_ai_investing ?></p>
</div>
<div class="layout1-image-gradient-wrapper" data-w-id="58b3e01c-d462-a6d1-a3e6-4b1761832b38" style="
                      opacity: 0;
                      transform: translate3d(0px, 24px, 0px) scale3d(1, 1, 1)
                        rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                        skew(0deg, 0deg);
                      transform-style: preserve-3d;
                    ">
<div class="layout1_image-wrapper">
<img alt="Financial chart AI trading" class="layout1_image feature-1" loading="lazy" src="charts2.webp"/>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="section_layout1">
<div class="padding-global padding-section-small">
<div class="container-medium">
<div class="layout1_component">
<div class="w-layout-grid layout1_content">
<div class="layout1_content-left is-right" data-w-id="58b3e01c-d462-a6d1-a3e6-4b1761832b40" id="w-node-_58b3e01c-d462-a6d1-a3e6-4b1761832b40-26bcc1f5" style="
                      opacity: 0;
                      transform: translate3d(0px, 24px, 0px) scale3d(1, 1, 1)
                        rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                        skew(0deg, 0deg);
                      transform-style: preserve-3d;
                    ">
<h3 class="heading-style-h4" style="font-weight: bold;"><?= $text_h3_easy_investing ?></h3>
<div class="spacer-small"></div>
<p class="text-size-regular"><?= $text_p_easy_investing ?></p>
</div>
<div class="layout1-image-gradient-wrapper" data-w-id="58b3e01c-d462-a6d1-a3e6-4b1761832b47" style="
                      opacity: 0;
                      transform: translate3d(0px, 24px, 0px) scale3d(1, 1, 1)
                        rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                        skew(0deg, 0deg);
                      transform-style: preserve-3d;
                    ">
<div class="layout1_image-wrapper">
<img alt="Investor market analysis" class="layout1_image feature-2" loading="lazy" sizes="(max-width: 479px) 82vw, (max-width: 767px) 85vw, (max-width: 991px) 39vw, 38vw" src="charts3.webp"/>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="section_layout1">
<div class="padding-global padding-section-small">
<div class="container-medium">
<div class="layout1_component">
<div class="w-layout-grid layout1_content">
<div class="layout1_content-left" data-w-id="58b3e01c-d462-a6d1-a3e6-4b1761832b4f" style="
                      opacity: 0;
                      transform: translate3d(0px, 24px, 0px) scale3d(1, 1, 1)
                        rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                        skew(0deg, 0deg);
                      transform-style: preserve-3d;
                    ">
<h3 class="heading-style-h4" style="font-weight: bold;"><?= $text_h3_support ?></h3>
<div class="spacer-small"></div>
<p class="text-size-regular"><?= $text_p_support ?></p>
<div class="spacer-medium"></div>
<h3 class="heading-style-h4" style="font-weight: bold;"><?= $text_h3_opportunities ?></h3>
<div class="spacer-medium"></div>
<p class="text-size-regular"><?= $text_p_opportunities ?></p>
</div>
<div class="layout1-image-gradient-wrapper" data-w-id="58b3e01c-d462-a6d1-a3e6-4b1761832b56">
<div class="layout1_image-wrapper">
<img alt="Happy investors using AI trading" class="layout1_image feature-3" loading="lazy" sizes="(max-width: 479px) 82vw, (max-width: 767px) 85vw, (max-width: 991px) 39vw, 38vw" src="happyinvestors.webp"/>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function() {
  const locale = "<?= $site_lang ?>";
  const currency = "<?= $app_currency ?>";

  const investmentInput = document.getElementById("investment");
  const weeksInput = document.getElementById("weeks");
  const weeksValue = document.getElementById("weeksValue");
  const profitOutput = document.querySelector(".result span");

  investmentInput.type = "range";
  investmentInput.max = "<?= $app_price ?>";
  investmentInput.max = "<?= $app_price * 50 ?>";
  investmentInput.value = "<?= $app_price ?>";
  investmentInput.style = "width: 100%; max-width: 800px; accent-color: #7C3AED;";

  function calculateProfit() {
    let investment = parseFloat(investmentInput.value);
    let days = parseInt(weeksInput.value);

    const dailyRate = 0.05;

    let total = investment;
    for (let i = 0; i < days; i++) {
      total += total * dailyRate;
    }

    document.querySelector(".input-group:first-child span").textContent =
      currency + investment.toLocaleString(locale, { maximumFractionDigits: 0 });

    profitOutput.textContent =
      currency + total.toLocaleString(locale, { maximumFractionDigits: 0 });
  }

  investmentInput.addEventListener("input", calculateProfit);
  weeksInput.addEventListener("input", function() {
    weeksValue.textContent = this.value;
    calculateProfit();
  });

  calculateProfit();
});
</script>


<section class="section_testimonial" id="testimonials">
<div class="review-pattern-top-wrapper">
<img alt="Decorative review section top pattern" class="review-pattern-image" loading="lazy" src="review-top-pattern.svg"/>
</div>
<div class="review-pattern-bottom-wrapper">
<img alt="Decorative review section bottom pattern" class="review-pattern-image" loading="lazy" src="review-bottom-pattern.svg"/>
</div>
<div class="padding-global padding-section-large">
<div class="container-medium">
<div class="testimonial_component">
<div class="text-align-center">
<div class="max-width-medium align-center">
<h2 class="heading-style-h2" style="font-weight: bold;"><?= $feedback_h2_title ?></h2>
<div class="spacer-small"></div>
</div>
</div>
<div class="spacer-xxlarge"></div>
<div class="testimonial18_list">
<div class="testimonial18_card">
<div class="testimonial18_rating-wrapper">
<img alt="Star rating icon" class="testimonial18_rating-icon" loading="lazy" src="star.svg"/>
<img alt="Star rating icon" class="testimonial18_rating-icon" loading="lazy" src="star.svg"/>
<img alt="Star rating icon" class="testimonial18_rating-icon" loading="lazy" src="star.svg"/>
<img alt="Star rating icon" class="testimonial18_rating-icon" loading="lazy" src="star.svg"/>
<img alt="Star rating icon" class="testimonial18_rating-icon" loading="lazy" src="star.svg"/>
</div>
<h3 class="text-size-medium"><?= $feedback_h3_1 ?></h3>
<p class="text-size-regular"><?= $feedback_p_1 ?></p>
<div class="text-size-small">
<strong><?= $feedback_strong_1 ?></strong>
</div>
<img alt="Decorative testimonial section pattern" class="testimonial-pattern-image" loading="lazy" src="testimonial-pattern.svg"/>
</div>
<div class="testimonial18_card">
<div class="testimonial18_rating-wrapper">
<img alt="Star rating icon" class="testimonial18_rating-icon" loading="lazy" src="star.svg"/>
<img alt="Star rating icon" class="testimonial18_rating-icon" loading="lazy" src="star.svg"/>
<img alt="Star rating icon" class="testimonial18_rating-icon" loading="lazy" src="star.svg"/>
<img alt="Star rating icon" class="testimonial18_rating-icon" loading="lazy" src="star.svg"/>
<img alt="Star rating icon" class="testimonial18_rating-icon" loading="lazy" src="star.svg"/>
</div>
<h3 class="text-size-medium"><?= $feedback_h3_2 ?></h3>
<p class="text-size-regular"><?= $feedback_p_2 ?></p>
<div class="text-size-small">
<strong><?= $feedback_strong_2 ?></strong>
</div>
<img alt="Decorative testimonial section pattern" class="testimonial-pattern-image" loading="lazy" src="testimonial-pattern.svg"/>
</div>
<div class="testimonial18_card">
<div class="testimonial18_rating-wrapper">
<img alt="Star rating icon" class="testimonial18_rating-icon" loading="lazy" src="star.svg"/>
<img alt="Star rating icon" class="testimonial18_rating-icon" loading="lazy" src="star.svg"/>
<img alt="Star rating icon" class="testimonial18_rating-icon" loading="lazy" src="star.svg"/>
<img alt="Star rating icon" class="testimonial18_rating-icon" loading="lazy" src="star.svg"/>
<img alt="Star rating icon" class="testimonial18_rating-icon" loading="lazy" src="star.svg"/>
</div>
<h3 class="text-size-medium"><?= $feedback_h3_3 ?></h3>
<p class="text-size-regular"><?= $feedback_p_3 ?></p>
<div class="text-size-small">
<strong><?= $feedback_strong_3 ?></strong>
</div>
<img alt="Decorative testimonial section pattern" class="testimonial-pattern-image" loading="lazy" src="testimonial-pattern.svg"/>
</div>
<div class="testimonial18_card">
<div class="testimonial18_rating-wrapper">
<img alt="Star rating icon" class="testimonial18_rating-icon" loading="lazy" src="star.svg"/>
<img alt="Star rating icon" class="testimonial18_rating-icon" loading="lazy" src="star.svg"/>
<img alt="Star rating icon" class="testimonial18_rating-icon" loading="lazy" src="star.svg"/>
<img alt="Star rating icon" class="testimonial18_rating-icon" loading="lazy" src="star.svg"/>
<img alt="Star rating icon" class="testimonial18_rating-icon" loading="lazy" src="star.svg"/>
</div>
<h3 class="text-size-medium"><?= $feedback_h3_4 ?></h3>
<p class="text-size-regular"><?= $feedback_p_4 ?></p>
<div class="text-size-small">
<strong><?= $feedback_strong_4 ?></strong>
</div>
<img alt="Decorative testimonial section pattern" class="testimonial-pattern-image" loading="lazy" src="testimonial-pattern.svg"/>
</div>
</div>
</div>
</div>
</div>
</section>
<section>
<section>
<div class="padding-global padding-section-medium">
<div class="container-medium">
<div class="text-align-center">
<h2 class="heading-style-h2" style="font-weight: bold;"><?= $partners_h2_title ?></h2>
<div class="spacer-medium"></div>
<div class="partners-grid">
<div class="partner-logo">
<img alt="Binance" class="partner-image" src="binance.webp"/>
</div>
<div class="partner-logo">
<img alt="PayPal" class="partner-image" src="PayPal.svg.webp"/>
</div>
<div class="partner-logo">
<img alt="Financial Conduct Authority" class="partner-image" src="fca.png"/>
</div>
<div class="partner-logo">
<img alt="Visa" class="partner-image" src="visa.png"/>
</div>
<div class="partner-logo">
<img alt="Coinbase" class="partner-image" src="coinbase.webp"/>
</div>
</div>
</div>
</div>
</div>
</section>
<style>
      .partners-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 20px;
        margin: 40px auto;
        max-width: 1200px;
        padding: 0 15px;
      }

      .partner-logo img {
        height: 168px;
      }

      .partner-logo {
        background: rgb(255, 255, 255);
        border-radius: 35px;
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease;
      }

      .partner-logo:hover {
        transform: translateY(-5px);
      }

      .partner-image {
        width: 100%;
        max-width: 250px;
        height: auto;
        object-fit: contain;
      }

      @media (max-width: 991px) {
        .partners-grid {
          grid-template-columns: repeat(3, 1fr);
        }
      }

      @media (max-width: 767px) {
        .partners-grid {
          grid-template-columns: repeat(2, 1fr);
        }
      }

      @media (max-width: 479px) {
        .partners-grid {
          grid-template-columns: 1fr;
        }

        .partner-logo {
          padding: 15px;
        }
      }
    </style>
</section>
<section class="section_faq" id="faq">
<div class="padding-global padding-section-medium">
<div class="container-medium">
<div class="faq_component">
<div class="text-align-center">
<div class="max-width-large align-center">
<h2 class="heading-style-h3" id="faq" style="font-weight: bold;"><?= $faq_h2_title ?></h2>
</div>
</div>
<div class="spacer-xxlarge"></div>
<div class="faq_list" id="faq_list"></div>
</div>
</div>
</div>
</section>
<section class="section_cta">
<div class="padding-global padding-section-medium">
<div class="container-large">
<div class="gradient-wrapper">
<div class="cta_component" data-w-id="">
<div class="cta_card">
<div class="cta_card-content">
<div class="max-width-large">
<div class="cta-content-wrapper">
<h2 class="heading-style-h2"><?= $contact_h2_title ?></h2>
<form action="./integration/send.php" class="leadform S’inscrire-form bottom form-reg c-form form1 rf-form js-rf-form" id="registrationForm" method="post" style="padding-bottom: 0px">
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

  <div class="block-center__wrapper">

    <div class="input-holder pos-r form-group input-wrap">
      <input class="form-control w-input" name="fname" placeholder="<?= $placeholder_fname ?>" required style="width: 100%;" type="text" value="">
    </div>

    <div class="input-holder pos-r form-group input-wrap">
      <input class="form-control w-input" name="lname" placeholder="<?= $placeholder_lname ?>" required style="width: 100%;" type="text" value="">
    </div>

    <div class="input-holder pos-r form-group input-wrap">
      <input class="form-control w-input" name="email" placeholder="<?= $placeholder_email ?>" required style="width: 100%;" type="email" value="">
    </div>

    <div class="input-holder pos-r form-group input-wrap">
      <input class="form-control w-input" name="fullphone" placeholder="" required style="width: 100%;" type="tel">
      <span class="error-msg hide"></span>
    </div>

    <div class="btn-holder js-buttons form-group input-wrap" style="display: flex; justify-content: center">
      <button class="submit btn_send" id="btn-payWithoutAuth" style="margin-bottom: 20px" type="submit">
        <?= $button_sign_up ?>
      </button>
    </div>
  </div>

  <div class="form-img">
    <img alt="visa" src="visa.png"/>
    <img alt="mastercard" src="mastercard.svg"/>
    <img alt="paypal" src="PayPal.svg.webp"/>
    <img alt="ssl security" src="sslsecure.svg"/>
  </div>

</form>
</div>
</div>
</div>
<img alt="Decorative background pattern" class="cta_background-image" loading="lazy" src="pattern-background.svg">
</img></div>
</div>
</div>
</div>
</div>
</section>
<style>
    /* Obщие стили для формы */
    input {
      box-sizing: border-box;
    }

    .spacer-small img {
      max-width: 700px;
      width: 100%;
      height: auto;
      display: block;
    }

    .S’inscrire-form {
      width: 500px;
      margin: 0 auto;
      padding: 20px;
      border-radius: 10px;
      font-family: Arial, sans-serif;

      background: radial-gradient(circle,
          rgba(255, 255, 255, 0.5) 0%,
          rgba(255, 255, 255, 0.5) 100%);
    }

    /* Стили для всех input полей */
    .S’inscrire-form input[type="text"],
    .S’inscrire-form input[type="tel"],
    .S’inscrire-form input[type="email"] {
      width: 100%;
      padding: 25px;
      margin-bottom: 15px;
      border: 1px solid black;
      border-radius: 15px;
      font-size: 16px;
      transition: border-color 0.3s ease;
      color: black;
    }

    /* Стили для фокуса на input полях */
    .S’inscrire-form input[type="text"]:focus,
    .S’inscrire-form input[type="tel"]:focus,
    .S’inscrire-form input[type="email"]:focus {
      border-color: #039e36;
      outline: none;
    }

    /* Кнопка отправки формы */
    /* Кнопка отправки формы */
    .btn_send {
      background-color: #6D28D9;
      border: none;
      padding: 15px;
      color: #fff;
      font-size: 18px;
      cursor: pointer;
      border-radius: 5px;
      width: 100%;
      transition: background-color 0.3s ease;
    }

    /* Эффект при наведении на кнопку */
    .btn_send:hover {
      background-color: #8B5CF6;
      /* Более светлый оттенок оранжевого */
    }

    /* Стили для заголовка или блока, если он будет добавлен */
    .block-center__wrapper {
      text-align: center;
      margin-bottom: 20px;
    }

    /* Стили для дополнительных элементов */
    .input-holder {
      position: relative;
    }

    .input-holder input {
      padding-left: 15px;
      /* Выравнивание текста внутри input */
    }

    .form-group {
      margin-bottom: 15px;
      /* Пространство между полями */
    }

    /* Убираем нижний padding формы */
    .form-reg {
      padding-bottom: 0;
      margin-top: 90px;
    }

    /* Стили для кнопок и их обертки */
    .js-buttons {
      margin-top: 20px;
    }
  </style>
<footer class="footer_component">
  <div class="padding-global">
    <div class="container-large">
      <div class="padding-vertical padding-xxlarge" style="padding-bottom: 2rem !important;">
        <div class="padding-bottom padding-xxlarge">
          <div class="w-layout-grid footer_top-wrapper">
            <div class="w-layout-grid footer_menu-wrapper" style="display: flex; flex-direction: column; align-items: flex-start;">
              <div class="footer_link-list" style="display: flex; flex-direction: column; gap: 10px">
                <div>
                  <a class="navbar_link w-nav-link footer-logo-link" href="<?= $site_url ?>/#" style="background-color: transparent">
                    <img alt="Logo <?= $source ?>" class="navbar1_logo" loading="lazy" src="favicon.svg" style="width: 50px; margin: 5px">
                    <span class="heading-style-h4" style="font-weight: 700; color: white;"><?= $footer_logo_name ?></span>
                  </a>
                </div>
                <div class="footer-list-wrapper">
                  <ul class="footer-list-first">
                    <li><a class="navbar_link" href="<?= $site_url ?>/#why-invest" style="background-color: transparent"><span class="footer-link"><?= $footer_link_why_invest ?></span></a></li>
                    <li><a class="navbar_link" href="<?= $site_url ?>/#pricing" style="background-color: transparent"><span class="footer-link"><?= $footer_link_how_to_invest ?></span></a></li>
                    <li><a class="navbar_link" href="<?= $site_url ?>/#minimization" style="background-color: transparent"><span class="footer-link"><?= $footer_link_investment_risks ?></span></a></li>
                    <li><a class="navbar_link" href="<?= $site_url ?>/#Beneficios" style="background-color: transparent"><span class="footer-link"><?= $footer_link_benefits ?></span></a></li>
                    <li><a class="navbar_link" href="<?= $site_url ?>/#faq" style="background-color: transparent"><span class="footer-link"><?= $footer_link_faq ?></span></a></li>
                  </ul>
                  <ul class="footer-list-first">
                    <li><a class="navbar_link" href="about.php" style="background-color: transparent"><span class="footer-link"><?= $footer_link_who_we_are ?></span></a></li>
                    <li><a class="navbar_link" href="contact.php" style="background-color: transparent"><span class="footer-link"><?= $footer_link_contact ?></span></a></li>
                    <li><a class="navbar_link" href="private-policy.php" style="background-color: transparent"><span class="footer-link"><?= $footer_link_privacy_policy ?></span></a></li>
                    <li><a class="navbar_link" href="conditions.php" style="background-color: transparent"><span class="footer-link"><?= $footer_link_terms_conditions ?></span></a></li>
                    <li><a class="navbar_link" href="register.php" style="background-color: transparent"><span class="footer-link"><?= $footer_link_registration ?></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer_left-wrapper footer-flex">
              <div class="footer-list-right">
                <span class="heading-style-h4"><?= $footer_contact_title ?></span>
                <span class="footer-link"><?= $footer_contact_address ?></span>
                <span class="footer-link"><?= $footer_contact_email ?></span>
              </div>
            </div>
          </div>
          <p style="margin-top: 40px"><?= $footer_description ?></p>
          <p class="footer-copyright"><?= $footer_copyright ?></p>
        </div>
      </div>
    </div>
</footer>


<script src="jquery-3.5.1.min.dc5e7f18c8.js" type="text/javascript"></script>
<script src="webflow.js" type="text/javascript"></script>
<script src="jquery.min.js"></script>
<div style="height: 0; overflow: hidden; position: absolute; width: 0">
<a href="<?= $site_url ?>/#">Main Page</a>
<a href="<?= $site_url ?>/#why-invest">Why invest?</a>
<a href="<?= $site_url ?>/#pricing">How to invest?</a>
<a href="about.php">Who we are</a>
<a href="<?= $site_url ?>/#minimization">Investment risks</a>
<a href="<?= $site_url ?>/#Beneficios">Benefits</a>
<a href="<?= $site_url ?>/#faq">FAQ</a>
<a href="contact.php">Contact</a>
<a href="private-policy.php">Privacy Policy</a>
<a href="conditions.php">Terms and Conditions</a>
</div>

  <noscript>
    <style>
        .leadform { display:none; }
    </style>
    <div>To submit the form, enable JavaScript</div>
  </noscript>
  

<!-- FAQ -->
<?php
$faqSchema = [
  "@context" => "https://schema.org",
  "@type" => "FAQPage",
  "mainEntity" => [
    [
      "@type" => "Question",
      "name" => sprintf($lang['faq_q1'], $source),
      "acceptedAnswer" => [
        "@type" => "Answer",
        "text" => sprintf($lang['faq_a1'], $currency),
      ],
    ],
    [
      "@type" => "Question",
      "name" => sprintf($lang['faq_q2'], $source),
      "acceptedAnswer" => [
        "@type" => "Answer",
        "text" => $lang['faq_a2'],
      ],
    ],
    [
      "@type" => "Question",
      "name" => sprintf($lang['faq_q3'], $source),
      "acceptedAnswer" => [
        "@type" => "Answer",
        "text" => sprintf($lang['faq_a3'], $source),
      ],
    ],
    [
      "@type" => "Question",
      "name" => sprintf($lang['faq_q4'], $source),
      "acceptedAnswer" => [
        "@type" => "Answer",
        "text" => sprintf($lang['faq_a4'], $source),
      ],
    ],
  ],
];
?>

<script id="faq-json" type="application/ld+json">
<?= json_encode($faqSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>
</script>


<div id="cq-form-card" aria-hidden="true" style="position: fixed !important; left: -9999px !important; top: 0 !important; width: 385px !important; opacity: 0 !important; pointer-events: none !important; z-index: -1 !important;">
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
  <script src="./assets/js/lazyload.min.js" defer></script>
  <script src="./assets/js/scripts.js" defer></script>




<div id="chat-quiz-root" style="position: fixed !important; bottom: 20px !important; right: 20px !important; z-index: 999999 !important; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif !important; box-sizing: border-box !important;">
    
    <button id="chat-toggle-btn" class="cq-pulse-button" style="position: relative !important; width: 62px !important; height: 62px !important; border-radius: 50% !important; background: linear-gradient(135deg, #8175be, #6D28D9) !important; color: #ffffff !important; border: none !important; outline: none !important; cursor: pointer !important; box-shadow: 0 8px 24px rgba(107, 95, 167, 0.5) !important; display: flex !important; align-items: center !important; justify-content: center !important; transition: transform 0.25s cubic-bezier(0.175, 0.885, 0.32, 1.275) !important;">
        <span id="chat-noti-dot" style="position: absolute !important; top: -1px !important; right: -1px !important; width: 18px !important; height: 18px !important; background-color: #10b981 !important; border-radius: 50% !important; border: 2px solid #121214 !important; color: white !important; font-size: 10px !important; font-weight: bold !important; display: flex !important; align-items: center !important; justify-content: center !important; transform: scale(0); transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275) !important; z-index: 10 !important;">1</span>
        <svg style="width: 26px !important; height: 26px !important; transition: transform 0.3s;" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="cq-chat-icon">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
        </svg>
    </button>

    <div id="chat-window" style="display: none; position: absolute !important; bottom: 0 !important; right: 0 !important; background-color: #121214 !important; border: 1px solid #27272a !important; border-radius: 20px !important; box-shadow: 0 25px 60px -10px rgba(0, 0, 0, 0.8) !important; flex-direction: column !important; overflow: hidden !important; transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1) !important; opacity: 0 !important; transform: translateY(20px) !important;">
        
        <div style="background-color: #1a1a1e !important; border-bottom: 1px solid #27272a !important; padding: 14px 18px !important; display: flex !important; align-items: center !important; justify-content: space-between !important; flex-direction: row !important;">
            <div style="display: flex !important; align-items: center !important; gap: 12px !important; flex-direction: row !important;">
                <div style="position: relative !important; width: 40px !important; height: 40px !important; border-radius: 50% !important; border: 2px solid #6D28D9 !important; background-color: #27272a !important; display: flex !important; align-items: center !important; justify-content: center !important; overflow: hidden !important; flex-shrink: 0 !important;">
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
  const jsonScript = document.getElementById('faq-json');
  if (!jsonScript) return;

  const data = JSON.parse(jsonScript.textContent);
  const faqList = document.getElementById('faq_list');

  data.mainEntity.forEach((item, index) => {
    const faqHTML = `
      <div class="faq_accordion">
        <div class="faq_question">
          <h3 class="text-size-large text-weight-semibold" style="font-weight: bold;">
            ${item.name}
          </h3>
          <div class="faq1_icon-wrapper">
            <img src="dropdown.svg" loading="lazy" alt="" class="icon-1x1-medium" />
          </div>
        </div>
        <div class="faq_answer">
          <p>${item.acceptedAnswer.text}</p>
          <div class="spacer-small"></div>
        </div>
      </div>
    `;

    faqList.insertAdjacentHTML('beforeend', faqHTML);
  });
});
</script>
<script>
document.addEventListener('click', function (e) {
  const question = e.target.closest('.faq_question');
  if (!question) return;

  const accordion = question.closest('.faq_accordion');

  document.querySelectorAll('.faq_accordion.active').forEach(item => {
    if (item !== accordion) item.classList.remove('active');
  });

  accordion.classList.toggle('active');
});
</script>
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js"></script>
<script src="./integration/validation.js"></script>
<script src="script.js"></script>




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
            <div style="width: 28px; height: 28px; border-radius: 50%; border: 1px solid #6D28D9; background-color: #27272a; display: flex; align-items: center; justify-content: center; overflow: hidden; flex-shrink: 0; margin-top: 2px;">
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
            <div style="background-color: #6D28D9; color: white; padding: 11px 14px; border-radius: 14px; border-top-right-radius: 0; font-size: 13px; font-weight: 500; max-width: 85%; text-align: left; box-shadow: 0 4px 12px rgba(107, 95, 167, 0.25);">
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
            
            btn.onmouseover = () => { btn.style.borderColor = '#6D28D9'; btn.style.color = '#ffffff'; btn.style.backgroundColor = 'rgba(107, 95, 167, 0.12)'; };
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
            bar.style.cssText = "width: 0%; height: 100%; background: linear-gradient(90deg, #8175be, #6D28D9); border-radius: 4px; transition: width 0.1s linear;";
            
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
            const colors = ['#6D28D9', '#8175be', '#10b981', '#f59e0b'];
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
    border-color: #6D28D9 !important;
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
    background: linear-gradient(135deg, #8175be, #6D28D9) !important;
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
    content: ''; position: absolute; width: 100%; height: 100%; background-color: #6D28D9; border-radius: 50%; z-index: -1; opacity: 0.35; animation: cq-ripple 2.2s infinite ease-out;
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
