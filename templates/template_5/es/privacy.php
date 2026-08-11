<?php
// Redirect to the root (English) version if the deployed site's default language already matches this folder.
include __DIR__ . '/../lang.php';
$extractLang = str_replace('-', '', strtolower(explode('-', $site_lang)[0]));
$currentLang = 'es';
if ($extractLang === $currentLang) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $site_url . '/lander/' . $site_domain . '/privacy.php');
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

$breadcrumb_name = '💥 ' . $privacy_breadcrumb_name . ' 💥';
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
    <title><?= $privacy_meta_title ?></title>
    <meta name="robots" content="INDEX, FOLLOW, MAX-IMAGE-PREVIEW:LARGE, MAX-SNIPPET:-1">
    <meta name="description" content="<?= $privacy_meta_description ?>" />
    <meta property="og:title" content="<?= $privacy_meta_title ?>">
    <meta property="og:description" content="<?= $privacy_meta_description ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= $site_name ?>">
    <meta property="og:url" content="<?= $canonical ?>">
    <meta property="og:image" content="<?= $site_url ?>/lander/<?= $site_domain ?>/favicon-96x96.png">
    <meta property="og:image:width" content="96">
    <meta property="og:image:height" content="96">
    <meta property="og:image:alt" content="<?= $site_name ?> logo">
<link rel="alternate" hreflang="x-default" href="<?= $site_url ?>/privacy.php" />
<link rel="alternate" hreflang="en" href="<?= $site_url ?>/lander/<?= $site_domain ?>/privacy.php" />
<link rel="alternate" hreflang="hr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hr/privacy.php" />
<link rel="alternate" hreflang="ro" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ro/privacy.php" />
<link rel="alternate" hreflang="nl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nl/privacy.php" />
<link rel="alternate" hreflang="no" href="<?= $site_url ?>/lander/<?= $site_domain ?>/no/privacy.php" />
<link rel="alternate" hreflang="pt" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pt/privacy.php" />
<link rel="alternate" hreflang="cs" href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/privacy.php" />
<link rel="alternate" hreflang="pl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pl/privacy.php" />
<link rel="alternate" hreflang="tr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/tr/privacy.php" />
<link rel="alternate" hreflang="da" href="<?= $site_url ?>/lander/<?= $site_domain ?>/da/privacy.php" />
<link rel="alternate" hreflang="sv" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sv/privacy.php" />
<link rel="alternate" hreflang="fi" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fi/privacy.php" />
<link rel="alternate" hreflang="hu" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hu/privacy.php" />
<link rel="alternate" hreflang="sk" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sk/privacy.php" />
<link rel="alternate" hreflang="bg" href="<?= $site_url ?>/lander/<?= $site_domain ?>/bg/privacy.php" />
<link rel="alternate" hreflang="ms" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ms/privacy.php" />
<link rel="alternate" hreflang="ru" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ru/privacy.php" />
<link rel="alternate" hreflang="nb" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nb/privacy.php" />
<link rel="alternate" hreflang="el" href="<?= $site_url ?>/lander/<?= $site_domain ?>/el/privacy.php" />
<link rel="alternate" hreflang="ja" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ja/privacy.php" />
<link rel="alternate" hreflang="de" href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/privacy.php" />
<link rel="alternate" hreflang="fr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/privacy.php" />
<link rel="alternate" hreflang="es" href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/privacy.php" />
<link rel="alternate" hreflang="it" href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/privacy.php" />
<?php include __DIR__ . '/../includes/header.php'; ?>

<?php include __DIR__ . '/../includes/breadcrumb-schema.php'; ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "SoftwareApplication",
  "name": <?= json_encode($site_name) ?>,
  "url": <?= json_encode($site_url . '/') ?>,
  "logo": <?= json_encode($site_url . '/lander/' . $site_domain . '/favicon-96x96.png') ?>,
  "description": <?= json_encode($privacy_meta_description) ?>,
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
            <h1><?= $privacy_h1 ?></h1>

            <p><?= $privacy_intro_1 ?></p>

            <p><?= $privacy_intro_2 ?></p>

            <h2><?= $privacy_h2_collect ?></h2>

            <p><?= $privacy_p_collect_1 ?></p>

            <ul>
                <li><?= $privacy_li_fname ?></li>
                <li><?= $privacy_li_lname ?></li>
                <li><?= $privacy_li_email ?></li>
                <li><?= $privacy_li_phone ?></li>
                <li><?= $privacy_li_inquiry ?></li>
                <li><?= $privacy_li_technical ?></li>
            </ul>

            <h2><?= $privacy_h2_use ?></h2>

            <p><?= $privacy_p_use_1 ?></p>

            <p><?= $privacy_p_use_2 ?></p>

            <h2><?= $privacy_h2_comm ?></h2>

            <p><?= $privacy_p_comm_1 ?></p>

            <p><?= $privacy_p_comm_2 ?></p>

            <h2><?= $privacy_h2_cookies ?></h2>

            <p><?= $privacy_p_cookies_1 ?></p>

            <p><?= $privacy_p_cookies_2 ?></p>

            <h2><?= $privacy_h2_protection ?></h2>

            <p><?= $privacy_p_prot_1 ?></p>

            <p><?= $privacy_p_prot_2 ?></p>

            <h2><?= $privacy_h2_third ?></h2>

            <p><?= $privacy_p_third_1 ?></p>

            <p><?= $privacy_p_third_2 ?></p>

            <p><?= $privacy_google_choices ?></p>

            <h2><?= $privacy_h2_sale ?></h2>

            <p><?= $privacy_p_sale_1 ?></p>

            <p><?= $privacy_p_sale_2 ?></p>

            <h2><?= $privacy_h2_retention ?></h2>

            <p><?= $privacy_p_retention ?></p>

            <h2><?= $privacy_h2_rights ?></h2>

            <p><?= $privacy_p_rights ?></p>

            <h2><?= $privacy_h2_intl ?></h2>

            <p><?= $privacy_p_intl_1 ?></p>

            <p><?= $privacy_p_intl_2 ?></p>

            <h2><?= $privacy_h2_policy_updates ?></h2>

            <p><?= $privacy_p_updates_1 ?></p>

            <p><?= $privacy_p_updates_2 ?></p>

        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
