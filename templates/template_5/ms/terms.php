<?php
// Redirect to the root (English) version if the deployed site's default language already matches this folder.
include __DIR__ . '/../lang.php';
$extractLang = str_replace('-', '', strtolower(explode('-', $site_lang)[0]));
$currentLang = 'ms';
if ($extractLang === $currentLang) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $site_url . '/lander/' . $site_domain . '/terms.php');
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

$breadcrumb_name = '💥 ' . $terms_breadcrumb_name . ' 💥';
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
    <title><?= $terms_meta_title ?></title>
    <meta name="robots" content="INDEX, FOLLOW, MAX-IMAGE-PREVIEW:LARGE, MAX-SNIPPET:-1">
    <meta name="description" content="<?= $terms_meta_description ?>" />
    <meta property="og:title" content="<?= $terms_meta_title ?>">
    <meta property="og:description" content="<?= $terms_meta_description ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= $site_name ?>">
    <meta property="og:url" content="<?= $canonical ?>">
    <meta property="og:image" content="<?= $site_url ?>/favicon-96x96.png">
    <meta property="og:image:width" content="96">
    <meta property="og:image:height" content="96">
    <meta property="og:image:alt" content="<?= $site_name ?> logo">
<link rel="alternate" hreflang="x-default" href="<?= $site_url ?>/lander/<?= $site_domain ?>/terms.php" />
<link rel="alternate" hreflang="en" href="<?= $site_url ?>/lander/<?= $site_domain ?>/terms.php" />
<link rel="alternate" hreflang="hr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hr/terms.php" />
<link rel="alternate" hreflang="ro" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ro/terms.php" />
<link rel="alternate" hreflang="nl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nl/terms.php" />
<link rel="alternate" hreflang="no" href="<?= $site_url ?>/lander/<?= $site_domain ?>/no/terms.php" />
<link rel="alternate" hreflang="pt" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pt/terms.php" />
<link rel="alternate" hreflang="cs" href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/terms.php" />
<link rel="alternate" hreflang="pl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pl/terms.php" />
<link rel="alternate" hreflang="tr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/tr/terms.php" />
<link rel="alternate" hreflang="da" href="<?= $site_url ?>/lander/<?= $site_domain ?>/da/terms.php" />
<link rel="alternate" hreflang="sv" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sv/terms.php" />
<link rel="alternate" hreflang="fi" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fi/terms.php" />
<link rel="alternate" hreflang="hu" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hu/terms.php" />
<link rel="alternate" hreflang="sk" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sk/terms.php" />
<link rel="alternate" hreflang="bg" href="<?= $site_url ?>/lander/<?= $site_domain ?>/bg/terms.php" />
<link rel="alternate" hreflang="ms" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ms/terms.php" />
<link rel="alternate" hreflang="ru" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ru/terms.php" />
<link rel="alternate" hreflang="nb" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nb/terms.php" />
<link rel="alternate" hreflang="el" href="<?= $site_url ?>/lander/<?= $site_domain ?>/el/terms.php" />
<link rel="alternate" hreflang="ja" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ja/terms.php" />
<link rel="alternate" hreflang="de" href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/terms.php" />
<link rel="alternate" hreflang="fr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/terms.php" />
<link rel="alternate" hreflang="es" href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/terms.php" />
<link rel="alternate" hreflang="it" href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/terms.php" />
<?php include '../includes/header.php'; ?>

<?php include '../includes/breadcrumb-schema.php'; ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "SoftwareApplication",
  "name": <?= json_encode($site_name) ?>,
  "url": <?= json_encode($site_url . '/') ?>,
  "logo": <?= json_encode($site_url . '/favicon-96x96.png') ?>,
  "description": <?= json_encode($terms_meta_description) ?>,
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

            <h1><?= $terms_h1 ?></h1>

            <p><?= $terms_intro_1 ?></p>
            <p><?= $terms_intro_2 ?></p>

            <h2><?= $terms_h2_informational ?></h2>
            <p><?= $terms_p_info_1 ?></p>
            <p><?= $terms_p_info_2 ?></p>

            <h2><?= $terms_h2_no_advice ?></h2>
            <p><?= $terms_p_no_advice_1 ?></p>
            <p><?= $terms_p_no_advice_2 ?></p>

            <h2><?= $terms_h2_user_responsibility ?></h2>
            <p><?= $terms_p_user_1 ?></p>
            <p><?= $terms_p_user_2 ?></p>

            <h2><?= $terms_h2_ai ?></h2>
            <p><?= $terms_p_ai_1 ?></p>
            <p><?= $terms_p_ai_2 ?></p>

            <h2><?= $terms_h2_availability ?></h2>
            <p><?= $terms_p_avail_1 ?></p>
            <p><?= $terms_p_avail_2 ?></p>

            <h2><?= $terms_h2_third_party ?></h2>
            <p><?= $terms_p_tp_1 ?></p>
            <p><?= $terms_p_tp_2 ?></p>

            <h2><?= $terms_h2_prohibited ?></h2>
            <p><?= $terms_p_prohibited ?></p>
            <ul>
                <li><?= $terms_li_1 ?></li>
                <li><?= $terms_li_2 ?></li>
                <li><?= $terms_li_3 ?></li>
                <li><?= $terms_li_4 ?></li>
                <li><?= $terms_li_5 ?></li>
                <li><?= $terms_li_6 ?></li>
            </ul>

            <h2><?= $terms_h2_ip ?></h2>
            <p><?= $terms_p_ip_1 ?></p>
            <p><?= $terms_p_ip_2 ?></p>

            <h2><?= $terms_h2_liability ?></h2>
            <p><?= $terms_p_liab_1 ?></p>
            <p><?= $terms_p_liab_2 ?></p>

            <h2><?= $terms_h2_changes ?></h2>
            <p><?= $terms_p_changes_1 ?></p>
            <p><?= $terms_p_changes_2 ?></p>

        </div>

    </div>

</section>

<?php include '../includes/footer.php'; ?>
