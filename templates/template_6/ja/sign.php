<?php
// Redirect if this folder's language already matches the root site's language (avoid duplicate content)
include '../lang.php';
$extractLang = str_replace('-', '', strtolower(explode('-', $site_lang)[0]));
$currentLang = 'ja';
if ($extractLang === $currentLang) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $site_url . "/lander/" . $site_domain . "/sign.php");
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

$breadcrumb_name = $sign_breadcrumb_name;
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
    <title><?= $sign_meta_title ?></title>
    <meta name="robots" content="INDEX, FOLLOW, MAX-IMAGE-PREVIEW:LARGE, MAX-SNIPPET:-1">
    <meta name="description" content="<?= $sign_meta_description ?>" />
    <meta property="og:title" content="<?= $sign_meta_title ?>">
    <meta property="og:description" content="<?= $sign_meta_description ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= $site_name ?>">
    <meta property="og:url" content="<?= $canonical ?>">
    <meta property="og:image" content="<?= $site_url ?>/lander/<?= $site_domain ?>/favicon-96x96.png">
    <meta property="og:image:width" content="96">
    <meta property="og:image:height" content="96">
    <meta property="og:image:alt" content="<?= $site_name ?> Logo">
    <link rel="stylesheet" href="../assets/css/style.css?v=<?= @filemtime(__DIR__ . '/../assets/css/style.css') ?: time() ?>">
    <link rel="alternate" hreflang="x-default" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sign.php" />
    <link rel="alternate" hreflang="en" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sign.php" />
    <link rel="alternate" hreflang="de" href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/sign.php" />
    <link rel="alternate" hreflang="fr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/sign.php" />
    <link rel="alternate" hreflang="es" href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/sign.php" />
    <link rel="alternate" hreflang="it" href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/sign.php" />
    <link rel="alternate" hreflang="hr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hr/sign.php" />
    <link rel="alternate" hreflang="ro" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ro/sign.php" />
    <link rel="alternate" hreflang="nl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nl/sign.php" />
    <link rel="alternate" hreflang="no" href="<?= $site_url ?>/lander/<?= $site_domain ?>/no/sign.php" />
    <link rel="alternate" hreflang="pt" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pt/sign.php" />
    <link rel="alternate" hreflang="cs" href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/sign.php" />
    <link rel="alternate" hreflang="pl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pl/sign.php" />
    <link rel="alternate" hreflang="tr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/tr/sign.php" />
    <link rel="alternate" hreflang="da" href="<?= $site_url ?>/lander/<?= $site_domain ?>/da/sign.php" />
    <link rel="alternate" hreflang="sv" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sv/sign.php" />
    <link rel="alternate" hreflang="fi" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fi/sign.php" />
    <link rel="alternate" hreflang="hu" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hu/sign.php" />
    <link rel="alternate" hreflang="sk" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sk/sign.php" />
    <link rel="alternate" hreflang="bg" href="<?= $site_url ?>/lander/<?= $site_domain ?>/bg/sign.php" />
    <link rel="alternate" hreflang="ms" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ms/sign.php" />
    <link rel="alternate" hreflang="nb" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nb/sign.php" />
    <link rel="alternate" hreflang="el" href="<?= $site_url ?>/lander/<?= $site_domain ?>/el/sign.php" />
    <link rel="alternate" hreflang="ja" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ja/sign.php" />
</head>
<body data-theme="light">
<?php include '../includes/header.php'; ?>

<?php include '../includes/breadcrumb-schema.php'; ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "SoftwareApplication",
  "name": <?= json_encode($site_name) ?>,
  "url": <?= json_encode($site_url . '/') ?>,
  "logo": <?= json_encode($site_url . '/lander/' . $site_domain . '/favicon-96x96.png') ?>,
  "description": <?= json_encode($sign_meta_description) ?>,
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
        <div class="legal-wrapper" style="max-width: 560px;">

            <h1 style="text-align:center;"><?= $sign_h1 ?></h1>
            <p style="text-align:center;"><?= $sign_subtitle ?></p>

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
                        <label for="sign-fname"><?= $form_first_name_label ?></label>
                        <input type="text" id="sign-fname" name="fname" placeholder="<?= $form_first_name_placeholder ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="sign-lname"><?= $form_last_name_label ?></label>
                        <input type="text" id="sign-lname" name="lname" placeholder="<?= $form_last_name_placeholder ?>" required>
                    </div>
                </div>

                <div class="form-group form-group-full">
                    <label for="sign-email"><?= $form_email_label ?></label>
                    <input type="email" id="sign-email" name="email" placeholder="<?= $form_email_placeholder ?>" required>
                </div>

                <div class="form-group form-group-full">
                    <label for="sign-phone"><?= $form_phone_label ?></label>
                    <input type="tel" id="sign-phone" name="fullphone" placeholder="<?= $form_phone_placeholder ?>" required>
                    <span class="error-msg hide"></span>
                </div>

                <button type="submit" class="btn btn-primary form-btn">
                    <?= $form_submit_button ?>
                </button>

                <div class="trust-payment-icons">
                    <span class="trust-chip" style="background:#FFFFFF; display:inline-flex; align-items:center; justify-content:center; border-radius:6px; padding:5px 8px; box-shadow:0 1px 3px rgba(0,0,0,0.15);"><img src="../visa.png" alt="Visa" loading="lazy"></span>
                    <span class="trust-chip" style="background:#FFFFFF; display:inline-flex; align-items:center; justify-content:center; border-radius:6px; padding:5px 8px; box-shadow:0 1px 3px rgba(0,0,0,0.15);"><img src="../mastercard.png" alt="Mastercard" loading="lazy"></span>
                    <span class="trust-chip" style="background:#FFFFFF; display:inline-flex; align-items:center; justify-content:center; border-radius:6px; padding:5px 8px; box-shadow:0 1px 3px rgba(0,0,0,0.15);"><img src="../paypal.png" alt="PayPal" loading="lazy"></span>
                    <span class="trust-chip" style="background:#FFFFFF; display:inline-flex; align-items:center; justify-content:center; border-radius:6px; padding:5px 8px; box-shadow:0 1px 3px rgba(0,0,0,0.15);"><img src="../applepay.svg" alt="Apple Pay" loading="lazy"></span>
                    <span class="trust-chip" style="background:#FFFFFF; display:inline-flex; align-items:center; justify-content:center; border-radius:6px; padding:5px 8px; box-shadow:0 1px 3px rgba(0,0,0,0.15);"><img src="../googlepay.svg" alt="Google Pay" loading="lazy"></span>
                    <span class="trust-chip" style="background:#FFFFFF; display:inline-flex; align-items:center; justify-content:center; border-radius:6px; padding:5px 8px; box-shadow:0 1px 3px rgba(0,0,0,0.15);"><img src="../sepa.svg" alt="SEPA" loading="lazy"></span>
                </div>

                <p class="form-legal">
                    <?= $form_legal_before ?>
                    <a href="conditions.php">
                        <?= $form_terms_text ?>
                    </a>.
                </p>

            </form>

        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js"></script>

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
