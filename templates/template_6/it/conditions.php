<?php
// Redirect if this folder's language already matches the root site's language (avoid duplicate content)
include '../lang.php';
$extractLang = str_replace('-', '', strtolower(explode('-', $site_lang)[0]));
$currentLang = 'it';
if ($extractLang === $currentLang) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $site_url . "/lander/" . $site_domain . "/conditions.php");
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

$breadcrumb_name = $conditions_breadcrumb_name;
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
    <title><?= $conditions_meta_title ?></title>
    <meta name="robots" content="INDEX, FOLLOW, MAX-IMAGE-PREVIEW:LARGE, MAX-SNIPPET:-1">
    <meta name="description" content="<?= $conditions_meta_description ?>" />
    <meta property="og:title" content="<?= $conditions_meta_title ?>">
    <meta property="og:description" content="<?= $conditions_meta_description ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= $site_name ?>">
    <meta property="og:url" content="<?= $canonical ?>">
    <meta property="og:image" content="<?= $site_url ?>/lander/<?= $site_domain ?>/favicon-96x96.png">
    <meta property="og:image:width" content="96">
    <meta property="og:image:height" content="96">
    <meta property="og:image:alt" content="<?= $site_name ?> Logo">
    <link rel="stylesheet" href="../assets/css/style.css?v=<?= @filemtime(__DIR__ . '/../assets/css/style.css') ?: time() ?>">
    <link rel="alternate" hreflang="x-default" href="<?= $site_url ?>/conditions.php" />
    <link rel="alternate" hreflang="en" href="<?= $site_url ?>/lander/<?= $site_domain ?>/conditions.php" />
    <link rel="alternate" hreflang="de" href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/conditions.php" />
    <link rel="alternate" hreflang="fr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/conditions.php" />
    <link rel="alternate" hreflang="es" href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/conditions.php" />
    <link rel="alternate" hreflang="it" href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/conditions.php" />
    <link rel="alternate" hreflang="hr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hr/conditions.php" />
    <link rel="alternate" hreflang="ro" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ro/conditions.php" />
    <link rel="alternate" hreflang="nl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nl/conditions.php" />
    <link rel="alternate" hreflang="no" href="<?= $site_url ?>/lander/<?= $site_domain ?>/no/conditions.php" />
    <link rel="alternate" hreflang="pt" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pt/conditions.php" />
    <link rel="alternate" hreflang="cs" href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/conditions.php" />
    <link rel="alternate" hreflang="pl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pl/conditions.php" />
    <link rel="alternate" hreflang="tr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/tr/conditions.php" />
    <link rel="alternate" hreflang="da" href="<?= $site_url ?>/lander/<?= $site_domain ?>/da/conditions.php" />
    <link rel="alternate" hreflang="sv" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sv/conditions.php" />
    <link rel="alternate" hreflang="fi" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fi/conditions.php" />
    <link rel="alternate" hreflang="hu" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hu/conditions.php" />
    <link rel="alternate" hreflang="sk" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sk/conditions.php" />
    <link rel="alternate" hreflang="bg" href="<?= $site_url ?>/lander/<?= $site_domain ?>/bg/conditions.php" />
    <link rel="alternate" hreflang="ms" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ms/conditions.php" />
    <link rel="alternate" hreflang="nb" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nb/conditions.php" />
    <link rel="alternate" hreflang="el" href="<?= $site_url ?>/lander/<?= $site_domain ?>/el/conditions.php" />
    <link rel="alternate" hreflang="ja" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ja/conditions.php" />
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
  "description": <?= json_encode($conditions_meta_description) ?>,
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

<section class="legal-page">
    <div class="container">
        <div class="legal-wrapper">

            <h1><?= $conditions_h1 ?></h1>
            <p><em><?= $conditions_last_update ?></em></p>
            <p><?= $conditions_intro ?></p>

            <h2><?= $conditions_h2_eligibility ?></h2>
            <p><?= $conditions_p_eligibility ?></p>

            <h2><?= $conditions_h2_account ?></h2>
            <p><?= $conditions_p_account ?></p>

            <h2><?= $conditions_h2_risk ?></h2>
            <p><?= $conditions_p_risk ?></p>

            <h2><?= $conditions_h2_conduct ?></h2>
            <p><?= $conditions_p_conduct ?></p>

            <h2><?= $conditions_h2_liability ?></h2>
            <p><?= $conditions_p_liability ?></p>

            <h2><?= $conditions_h2_changes ?></h2>
            <p><?= $conditions_p_changes ?></p>

            <h2><?= $conditions_h2_contact ?></h2>
            <p><?= $conditions_p_contact ?></p>

        </div>
    </div>
</section>

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
