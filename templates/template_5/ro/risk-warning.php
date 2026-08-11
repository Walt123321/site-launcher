<?php
// Redirect to the root (English) version if the deployed site's default language already matches this folder.
include __DIR__ . '/../lang.php';
$extractLang = str_replace('-', '', strtolower(explode('-', $site_lang)[0]));
$currentLang = 'ro';
if ($extractLang === $currentLang) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $site_url . '/lander/' . $site_domain . '/risk-warning.php');
    exit();
}
?>

<?php
session_start();
if (empty($_SESSION['js_token'])) {
    $_SESSION['js_token'] = bin2hex(random_bytes(16));
}
$jsToken = $_SESSION['js_token'];

include __DIR__ . '/lang.php';
require_once '../offer_seo.php';

$host = $_SERVER['HTTP_HOST'];
$uri = strtok($_SERVER['REQUEST_URI'], '?');

$canonical = 'https://' . $host . $uri;

$breadcrumb_name = '💥 ' . $risk_warning_breadcrumb_name . ' 💥';
$breadcrumb_url = $canonical;

?>


<?php
if (strpos($_SERVER['HTTP_HOST'], 'www.') === 0) {
    $host = substr($_SERVER['HTTP_HOST'], 4);
    header("Location: https://" . $host . $_SERVER['REQUEST_URI'], true, 301);
    exit();
}
?>

<?php include __DIR__ . '/../includes/head-start.php'; ?>
    <title><?= $page_title_risk_warning ?></title>
    <meta name="robots" content="INDEX, FOLLOW, MAX-IMAGE-PREVIEW:LARGE, MAX-SNIPPET:-1">
    <meta name="description" content="<?= $page_description_risk_warning ?>" />
    <meta property="og:title" content="<?= $page_title_risk_warning ?>">
    <meta property="og:description" content="<?= $page_description_risk_warning ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= $site_name ?>">
    <meta property="og:url" content="<?= $canonical ?>">
    <meta property="og:image" content="<?= $site_url ?>/lander/<?= $site_domain ?>/favicon-96x96.png">
    <meta property="og:image:width" content="96">
    <meta property="og:image:height" content="96">
    <meta property="og:image:alt" content="<?= $site_name ?> logo">
<link rel="alternate" hreflang="x-default" href="<?= $site_url ?>/risk-warning.php" />
<link rel="alternate" hreflang="en" href="<?= $site_url ?>/lander/<?= $site_domain ?>/risk-warning.php" />
<link rel="alternate" hreflang="hr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hr/risk-warning.php" />
<link rel="alternate" hreflang="ro" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ro/risk-warning.php" />
<link rel="alternate" hreflang="nl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nl/risk-warning.php" />
<link rel="alternate" hreflang="no" href="<?= $site_url ?>/lander/<?= $site_domain ?>/no/risk-warning.php" />
<link rel="alternate" hreflang="pt" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pt/risk-warning.php" />
<link rel="alternate" hreflang="cs" href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/risk-warning.php" />
<link rel="alternate" hreflang="pl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pl/risk-warning.php" />
<link rel="alternate" hreflang="tr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/tr/risk-warning.php" />
<link rel="alternate" hreflang="da" href="<?= $site_url ?>/lander/<?= $site_domain ?>/da/risk-warning.php" />
<link rel="alternate" hreflang="sv" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sv/risk-warning.php" />
<link rel="alternate" hreflang="fi" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fi/risk-warning.php" />
<link rel="alternate" hreflang="hu" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hu/risk-warning.php" />
<link rel="alternate" hreflang="sk" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sk/risk-warning.php" />
<link rel="alternate" hreflang="bg" href="<?= $site_url ?>/lander/<?= $site_domain ?>/bg/risk-warning.php" />
<link rel="alternate" hreflang="ms" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ms/risk-warning.php" />
<link rel="alternate" hreflang="ru" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ru/risk-warning.php" />
<link rel="alternate" hreflang="nb" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nb/risk-warning.php" />
<link rel="alternate" hreflang="el" href="<?= $site_url ?>/lander/<?= $site_domain ?>/el/risk-warning.php" />
<link rel="alternate" hreflang="ja" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ja/risk-warning.php" />
<link rel="alternate" hreflang="de" href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/risk-warning.php" />
<link rel="alternate" hreflang="fr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/risk-warning.php" />
<link rel="alternate" hreflang="es" href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/risk-warning.php" />
<link rel="alternate" hreflang="it" href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/risk-warning.php" />
<?php include __DIR__ . '/../includes/header.php'; ?>

<?php include __DIR__ . '/../includes/breadcrumb-schema.php'; ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "SoftwareApplication",
  "name": <?= json_encode($site_name) ?>,
  "url": <?= json_encode($site_url . '/') ?>,
  "logo": <?= json_encode($site_url . '/lander/' . $site_domain . '/favicon-96x96.png') ?>,
  "description": <?= json_encode($page_description_risk_warning) ?>,
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

            <h1><?= $risk_warning_title ?></h1>

            <p><?= $risk_warning_intro ?></p>

            <h2><?= $risk_warning_ai_heading ?></h2>
            <ul>
                <li><?= $risk_warning_ai_1 ?></li>
                <li><?= $risk_warning_ai_2 ?></li>
                <li><?= $risk_warning_ai_3 ?></li>
            </ul>

            <p><?= $risk_warning_disclaimer ?></p>

            <h2><?= $risk_warning_s1_heading ?></h2>
            <p><?= $risk_warning_s1_intro ?></p>
            <ul>
                <li><?= $risk_warning_s1_1 ?></li>
                <li><?= $risk_warning_s1_2 ?></li>
                <li><?= $risk_warning_s1_3 ?></li>
            </ul>

            <h2><?= $risk_warning_s2_heading ?></h2>
            <ul>
                <li><?= $risk_warning_s2_1 ?></li>
                <li><?= $risk_warning_s2_2 ?></li>
            </ul>

            <h2><?= $risk_warning_s3_heading ?></h2>
            <ul>
                <li><?= $risk_warning_s3_1 ?></li>
                <li><?= $risk_warning_s3_2 ?></li>
                <li><?= $risk_warning_s3_3 ?></li>
            </ul>

            <h2><?= $risk_warning_s4_heading ?></h2>
            <ul>
                <li><?= $risk_warning_s4_1 ?></li>
                <li><?= $risk_warning_s4_2 ?></li>
                <li><?= $risk_warning_s4_3 ?></li>
            </ul>

            <p><?= $risk_warning_contact ?></p>

        </div>

    </div>

</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
