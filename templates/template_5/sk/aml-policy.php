<?php
// Redirect to the root (English) version if the deployed site's default language already matches this folder.
include __DIR__ . '/../lang.php';
$extractLang = str_replace('-', '', strtolower(explode('-', $site_lang)[0]));
$currentLang = 'sk';
if ($extractLang === $currentLang) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $site_url . '/lander/' . $site_domain . '/aml-policy.php');
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

$breadcrumb_name = '💥 ' . $aml_breadcrumb_name . ' 💥';
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
    <title><?= $aml_meta_title ?></title>
    <meta name="robots" content="INDEX, FOLLOW, MAX-IMAGE-PREVIEW:LARGE, MAX-SNIPPET:-1">
    <meta name="description" content="<?= $aml_meta_description ?>" />
    <meta property="og:title" content="<?= $aml_meta_title ?>">
    <meta property="og:description" content="<?= $aml_meta_description ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= $site_name ?>">
    <meta property="og:url" content="<?= $canonical ?>">
    <meta property="og:image" content="<?= $site_url ?>/favicon-96x96.png">
    <meta property="og:image:width" content="96">
    <meta property="og:image:height" content="96">
    <meta property="og:image:alt" content="<?= $site_name ?> logo">
<link rel="alternate" hreflang="x-default" href="<?= $site_url ?>/lander/<?= $site_domain ?>/aml-policy.php" />
<link rel="alternate" hreflang="en" href="<?= $site_url ?>/lander/<?= $site_domain ?>/aml-policy.php" />
<link rel="alternate" hreflang="hr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hr/aml-policy.php" />
<link rel="alternate" hreflang="ro" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ro/aml-policy.php" />
<link rel="alternate" hreflang="nl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nl/aml-policy.php" />
<link rel="alternate" hreflang="no" href="<?= $site_url ?>/lander/<?= $site_domain ?>/no/aml-policy.php" />
<link rel="alternate" hreflang="pt" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pt/aml-policy.php" />
<link rel="alternate" hreflang="cs" href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/aml-policy.php" />
<link rel="alternate" hreflang="pl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pl/aml-policy.php" />
<link rel="alternate" hreflang="tr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/tr/aml-policy.php" />
<link rel="alternate" hreflang="da" href="<?= $site_url ?>/lander/<?= $site_domain ?>/da/aml-policy.php" />
<link rel="alternate" hreflang="sv" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sv/aml-policy.php" />
<link rel="alternate" hreflang="fi" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fi/aml-policy.php" />
<link rel="alternate" hreflang="hu" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hu/aml-policy.php" />
<link rel="alternate" hreflang="sk" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sk/aml-policy.php" />
<link rel="alternate" hreflang="bg" href="<?= $site_url ?>/lander/<?= $site_domain ?>/bg/aml-policy.php" />
<link rel="alternate" hreflang="ms" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ms/aml-policy.php" />
<link rel="alternate" hreflang="ru" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ru/aml-policy.php" />
<link rel="alternate" hreflang="nb" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nb/aml-policy.php" />
<link rel="alternate" hreflang="el" href="<?= $site_url ?>/lander/<?= $site_domain ?>/el/aml-policy.php" />
<link rel="alternate" hreflang="ja" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ja/aml-policy.php" />
<link rel="alternate" hreflang="de" href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/aml-policy.php" />
<link rel="alternate" hreflang="fr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/aml-policy.php" />
<link rel="alternate" hreflang="es" href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/aml-policy.php" />
<link rel="alternate" hreflang="it" href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/aml-policy.php" />
<?php include '../includes/header.php'; ?>

<?php include '../includes/breadcrumb-schema.php'; ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "SoftwareApplication",
  "name": <?= json_encode($site_name) ?>,
  "url": <?= json_encode($site_url . '/') ?>,
  "logo": <?= json_encode($site_url . '/favicon-96x96.png') ?>,
  "description": <?= json_encode($aml_meta_description) ?>,
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
            <h1><?= $aml_h1 ?></h1>

            <p><?= $aml_intro_1 ?></p>

            <p><?= $aml_intro_2 ?></p>

            <h2><?= $aml_h2_purpose ?></h2>

            <p><?= $aml_p_purpose_1 ?></p>

            <p><?= $aml_p_purpose_2 ?></p>

            <h2><?= $aml_h2_responsible ?></h2>

            <p><?= $aml_p_resp_1 ?></p>

            <p><?= $aml_p_resp_2 ?></p>

            <ul>
                <li><?= $aml_li_1 ?></li>
                <li><?= $aml_li_2 ?></li>
                <li><?= $aml_li_3 ?></li>
                <li><?= $aml_li_4 ?></li>
                <li><?= $aml_li_5 ?></li>
                <li><?= $aml_li_6 ?></li>
                <li><?= $aml_li_7 ?></li>
            </ul>

            <h2><?= $aml_h2_exchange ?></h2>

            <p><?= $aml_p_ex_1 ?></p>

            <p><?= $aml_p_ex_2 ?></p>

            <h2><?= $aml_h2_user_responsibility ?></h2>

            <p><?= $aml_p_user_1 ?></p>

            <p><?= $aml_p_user_2 ?></p>

            <h2><?= $aml_h2_suspicious ?></h2>

            <p><?= $aml_p_suspicious ?></p>

            <h2><?= $aml_h2_evasion ?></h2>

            <p><?= $aml_p_evasion ?></p>

            <h2><?= $aml_h2_policy_updates ?></h2>

            <p><?= $aml_p_updates_1 ?></p>

            <p><?= $aml_p_updates_2 ?></p>

        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
