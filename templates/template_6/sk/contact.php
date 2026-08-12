<?php
// Redirect if this folder's language already matches the root site's language (avoid duplicate content)
include '../lang.php';
$extractLang = str_replace('-', '', strtolower(explode('-', $site_lang)[0]));
$currentLang = 'sk';
if ($extractLang === $currentLang) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $site_url . "/lander/" . $site_domain . "/contact.php");
    exit();
}

session_start();
if (empty($_SESSION['js_token'])) {
    $_SESSION['js_token'] = bin2hex(random_bytes(16));
}
$jsToken = $_SESSION['js_token'];

require_once '../offer_seo.php';
include 'lang.php';

$host = $_SERVER['HTTP_HOST'];
$uri = strtok($_SERVER['REQUEST_URI'], '?');

$canonical = 'https://' . $host . $uri;

$breadcrumb_name = $contact_breadcrumb_name;
$breadcrumb_url = $canonical;
?>

<?php
if (strpos($_SERVER['HTTP_HOST'], 'www.') === 0) {
    $host = substr($_SERVER['HTTP_HOST'], 4);
    header("Location: https://" . $host . $_SERVER['REQUEST_URI'], true, 301);
    exit();
}
?>

<?php include '../includes/head-start.php'; ?>
    <title><?= $contact_meta_title ?></title>
    <meta name="robots" content="INDEX, FOLLOW, MAX-IMAGE-PREVIEW:LARGE, MAX-SNIPPET:-1">
    <meta name="description" content="<?= $contact_meta_description ?>" />
    <meta property="og:title" content="<?= $contact_meta_title ?>">
    <meta property="og:description" content="<?= $contact_meta_description ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= $site_name ?>">
    <meta property="og:url" content="<?= $canonical ?>">
    <meta property="og:image" content="<?= $site_url ?>/lander/<?= $site_domain ?>/favicon-96x96.png">
    <meta property="og:image:width" content="96">
    <meta property="og:image:height" content="96">
    <meta property="og:image:alt" content="<?= $site_name ?> Logo">
    <link rel="stylesheet" href="../assets/css/style.css?v=<?= @filemtime(__DIR__ . '/../assets/css/style.css') ?: time() ?>">
    <link rel="alternate" hreflang="x-default" href="<?= $site_url ?>/contact.php" />
    <link rel="alternate" hreflang="en" href="<?= $site_url ?>/lander/<?= $site_domain ?>/contact.php" />
    <link rel="alternate" hreflang="de" href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/contact.php" />
    <link rel="alternate" hreflang="fr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/contact.php" />
    <link rel="alternate" hreflang="es" href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/contact.php" />
    <link rel="alternate" hreflang="it" href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/contact.php" />
    <link rel="alternate" hreflang="hr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hr/contact.php" />
    <link rel="alternate" hreflang="ro" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ro/contact.php" />
    <link rel="alternate" hreflang="nl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nl/contact.php" />
    <link rel="alternate" hreflang="no" href="<?= $site_url ?>/lander/<?= $site_domain ?>/no/contact.php" />
    <link rel="alternate" hreflang="pt" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pt/contact.php" />
    <link rel="alternate" hreflang="cs" href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/contact.php" />
    <link rel="alternate" hreflang="pl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pl/contact.php" />
    <link rel="alternate" hreflang="tr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/tr/contact.php" />
    <link rel="alternate" hreflang="da" href="<?= $site_url ?>/lander/<?= $site_domain ?>/da/contact.php" />
    <link rel="alternate" hreflang="sv" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sv/contact.php" />
    <link rel="alternate" hreflang="fi" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fi/contact.php" />
    <link rel="alternate" hreflang="hu" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hu/contact.php" />
    <link rel="alternate" hreflang="sk" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sk/contact.php" />
    <link rel="alternate" hreflang="bg" href="<?= $site_url ?>/lander/<?= $site_domain ?>/bg/contact.php" />
    <link rel="alternate" hreflang="ms" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ms/contact.php" />
    <link rel="alternate" hreflang="nb" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nb/contact.php" />
    <link rel="alternate" hreflang="el" href="<?= $site_url ?>/lander/<?= $site_domain ?>/el/contact.php" />
    <link rel="alternate" hreflang="ja" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ja/contact.php" />
</head>
<body data-theme="dark">
<?php include '../includes/header.php'; ?>

<?php include '../includes/breadcrumb-schema.php'; ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "SoftwareApplication",
  "name": <?= json_encode($site_name) ?>,
  "url": <?= json_encode($site_url . '/') ?>,
  "logo": <?= json_encode($site_url . '/lander/' . $site_domain . '/favicon-96x96.png') ?>,
  "description": <?= json_encode($contact_meta_description) ?>,
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

<link rel="stylesheet" href="../integration/default-integration.css?v=<?= @filemtime(__DIR__ . '/../integration/default-integration.css') ?: time() ?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/css/intlTelInput.css">

<section class="legal-page">
    <div class="container">
        <div class="legal-wrapper">

            <h1><?= $contact_h1 ?></h1>
            <p><?= $contact_intro_1 ?></p>
            <p><?= $contact_intro_2 ?></p>

            <h2><?= $contact_h2_help ?></h2>
            <ul>
                <li><?= $contact_li_1 ?></li>
                <li><?= $contact_li_2 ?></li>
                <li><?= $contact_li_3 ?></li>
                <li><?= $contact_li_4 ?></li>
                <li><?= $contact_li_5 ?></li>
                <li><?= $contact_li_6 ?></li>
            </ul>

            <h2><?= $contact_h2_send ?></h2>
            <p><?= $contact_p_send ?></p>

            <form class="leadform rf-form js-rf-form" action="../integration/send.php" method="POST">

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
                        <label for="contact-fname"><?= $contact_form_fname ?></label>
                        <input type="text" id="contact-fname" name="fname" placeholder="<?= $contact_form_fname ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="contact-lname"><?= $contact_form_lname ?></label>
                        <input type="text" id="contact-lname" name="lname" placeholder="<?= $contact_form_lname ?>" required>
                    </div>
                </div>

                <div class="form-group form-group-full">
                    <label for="contact-email"><?= $contact_form_email ?></label>
                    <input type="email" id="contact-email" name="email" placeholder="<?= $contact_form_email ?>" required>
                </div>

                <div class="form-group form-group-full">
                    <label for="contact-phone"><?= $form_phone_label ?></label>
                    <input type="tel" id="contact-phone" name="fullphone" placeholder="<?= $form_phone_placeholder ?>" required>
                    <span class="error-msg hide"></span>
                </div>

                <button type="submit" class="btn btn-primary form-btn"><?= $contact_form_submit ?></button>

                <div class="trust-payment-icons">
                    <span class="trust-chip" style="background:#FFFFFF; display:inline-flex; align-items:center; justify-content:center; border-radius:6px; padding:5px 8px; box-shadow:0 1px 3px rgba(0,0,0,0.15);"><img src="../visa.png" alt="Visa" loading="lazy"></span>
                    <span class="trust-chip" style="background:#FFFFFF; display:inline-flex; align-items:center; justify-content:center; border-radius:6px; padding:5px 8px; box-shadow:0 1px 3px rgba(0,0,0,0.15);"><img src="../mastercard.png" alt="Mastercard" loading="lazy"></span>
                    <span class="trust-chip" style="background:#FFFFFF; display:inline-flex; align-items:center; justify-content:center; border-radius:6px; padding:5px 8px; box-shadow:0 1px 3px rgba(0,0,0,0.15);"><img src="../paypal.png" alt="PayPal" loading="lazy"></span>
                    <span class="trust-chip" style="background:#FFFFFF; display:inline-flex; align-items:center; justify-content:center; border-radius:6px; padding:5px 8px; box-shadow:0 1px 3px rgba(0,0,0,0.15);"><img src="../applepay.svg" alt="Apple Pay" loading="lazy"></span>
                    <span class="trust-chip" style="background:#FFFFFF; display:inline-flex; align-items:center; justify-content:center; border-radius:6px; padding:5px 8px; box-shadow:0 1px 3px rgba(0,0,0,0.15);"><img src="../googlepay.svg" alt="Google Pay" loading="lazy"></span>
                    <span class="trust-chip" style="background:#FFFFFF; display:inline-flex; align-items:center; justify-content:center; border-radius:6px; padding:5px 8px; box-shadow:0 1px 3px rgba(0,0,0,0.15);"><img src="../sepa.svg" alt="SEPA" loading="lazy"></span>
                </div>

            </form>

            <h2><?= $contact_h2_info ?></h2>
            <p><?= $contact_support_label ?> <strong><?= $support_email ?></strong></p>
            <p><?= $contact_institutional_label ?> <strong><?= $institutional_email ?></strong></p>
            <p><?= $contact_disclaimer ?></p>

        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js"></script>
<script src="../integration/validation.js?v=<?= @filemtime(__DIR__ . '/../integration/validation.js') ?: time() ?>"></script>

<?php include '../includes/footer.php'; ?>
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
<script src="../assets/js/app.js?v=<?= @filemtime(__DIR__ . '/../assets/js/app.js') ?: time() ?>"></script>
