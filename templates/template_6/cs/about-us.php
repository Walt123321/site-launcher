<?php
// Redirect if this folder's language already matches the root site's language (avoid duplicate content)
include '../lang.php';
$extractLang = str_replace('-', '', strtolower(explode('-', $site_lang)[0]));
$currentLang = 'cs';
if ($extractLang === $currentLang) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $site_url . "/lander/" . $site_domain . "/about-us.php");
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

$breadcrumb_name = $about_breadcrumb_name;
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
    <title><?= $about_meta_title ?></title>
    <meta name="robots" content="INDEX, FOLLOW, MAX-IMAGE-PREVIEW:LARGE, MAX-SNIPPET:-1">
    <meta name="description" content="<?= $about_meta_description ?>" />
    <meta property="og:title" content="<?= $about_meta_title ?>">
    <meta property="og:description" content="<?= $about_meta_description ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= $site_name ?>">
    <meta property="og:url" content="<?= $canonical ?>">
    <meta property="og:image" content="<?= $site_url ?>/lander/<?= $site_domain ?>/favicon-96x96.png">
    <meta property="og:image:width" content="96">
    <meta property="og:image:height" content="96">
    <meta property="og:image:alt" content="<?= $site_name ?> Logo">
    <link rel="stylesheet" href="../assets/css/style.css?v=<?= @filemtime(__DIR__ . '/../assets/css/style.css') ?: time() ?>">
    <link rel="alternate" hreflang="x-default" href="<?= $site_url ?>/lander/<?= $site_domain ?>/about-us.php" />
    <link rel="alternate" hreflang="en" href="<?= $site_url ?>/lander/<?= $site_domain ?>/about-us.php" />
    <link rel="alternate" hreflang="de" href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/about-us.php" />
    <link rel="alternate" hreflang="fr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/about-us.php" />
    <link rel="alternate" hreflang="es" href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/about-us.php" />
    <link rel="alternate" hreflang="it" href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/about-us.php" />
    <link rel="alternate" hreflang="hr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hr/about-us.php" />
    <link rel="alternate" hreflang="ro" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ro/about-us.php" />
    <link rel="alternate" hreflang="nl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nl/about-us.php" />
    <link rel="alternate" hreflang="no" href="<?= $site_url ?>/lander/<?= $site_domain ?>/no/about-us.php" />
    <link rel="alternate" hreflang="pt" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pt/about-us.php" />
    <link rel="alternate" hreflang="cs" href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/about-us.php" />
    <link rel="alternate" hreflang="pl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pl/about-us.php" />
    <link rel="alternate" hreflang="tr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/tr/about-us.php" />
    <link rel="alternate" hreflang="da" href="<?= $site_url ?>/lander/<?= $site_domain ?>/da/about-us.php" />
    <link rel="alternate" hreflang="sv" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sv/about-us.php" />
    <link rel="alternate" hreflang="fi" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fi/about-us.php" />
    <link rel="alternate" hreflang="hu" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hu/about-us.php" />
    <link rel="alternate" hreflang="sk" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sk/about-us.php" />
    <link rel="alternate" hreflang="bg" href="<?= $site_url ?>/lander/<?= $site_domain ?>/bg/about-us.php" />
    <link rel="alternate" hreflang="ms" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ms/about-us.php" />
    <link rel="alternate" hreflang="nb" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nb/about-us.php" />
    <link rel="alternate" hreflang="el" href="<?= $site_url ?>/lander/<?= $site_domain ?>/el/about-us.php" />
    <link rel="alternate" hreflang="ja" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ja/about-us.php" />
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
  "description": <?= json_encode($about_meta_description) ?>,
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

            <h1><?= $about_h1 ?></h1>
            <p><?= $about_p1 ?></p>
            <p><?= $about_p2 ?></p>

            <h2><?= $about_h2_mission ?></h2>
            <p><?= $about_p_mission_1 ?></p>
            <p><?= $about_p_mission_2 ?></p>

            <h2><?= $about_h2_ai ?></h2>
            <p><?= $about_p_ai_1 ?></p>
            <p><?= $about_p_ai_2 ?></p>
            <ul>
                <li><?= $about_li_1 ?></li>
                <li><?= $about_li_2 ?></li>
                <li><?= $about_li_3 ?></li>
                <li><?= $about_li_4 ?></li>
                <li><?= $about_li_5 ?></li>
                <li><?= $about_li_6 ?></li>
                <li><?= $about_li_7 ?></li>
                <li><?= $about_li_8 ?></li>
            </ul>

            <h2><?= $about_h2_security ?></h2>
            <p><?= $about_p_security_1 ?></p>
            <p><?= $about_p_security_2 ?></p>

            <h2><?= $about_h2_global ?></h2>
            <p><?= $about_p_global_1 ?></p>
            <p><?= $about_p_global_2 ?></p>

            <h2><?= $about_h2_why ?></h2>
            <ul>
                <li><?= $about_why_li_1 ?></li>
                <li><?= $about_why_li_2 ?></li>
                <li><?= $about_why_li_3 ?></li>
                <li><?= $about_why_li_4 ?></li>
                <li><?= $about_why_li_5 ?></li>
                <li><?= $about_why_li_6 ?></li>
                <li><?= $about_why_li_7 ?></li>
            </ul>

            <h2><?= $about_h2_forward ?></h2>
            <p><?= $about_p_forward_1 ?></p>
            <p><?= $about_p_forward_2 ?></p>

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
