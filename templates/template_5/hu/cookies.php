<?php
// Redirect to the root (English) version if the deployed site's default language already matches this folder.
include __DIR__ . '/../lang.php';
$extractLang = str_replace('-', '', strtolower(explode('-', $site_lang)[0]));
$currentLang = 'hu';
if ($extractLang === $currentLang) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $site_url . '/lander/' . $site_domain . '/cookies.php');
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

$breadcrumb_name = '💥 ' . $cookies_breadcrumb_name . ' 💥';
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
    <title><?= $cookies_meta_title ?></title>
    <meta name="robots" content="INDEX, FOLLOW, MAX-IMAGE-PREVIEW:LARGE, MAX-SNIPPET:-1">
    <meta name="description" content="<?= $cookies_meta_description ?>" />
    <meta property="og:title" content="<?= $cookies_meta_title ?>">
    <meta property="og:description" content="<?= $cookies_meta_description ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= $site_name ?>">
    <meta property="og:url" content="<?= $canonical ?>">
    <meta property="og:image" content="<?= $site_url ?>/lander/<?= $site_domain ?>/favicon-96x96.png">
    <meta property="og:image:width" content="96">
    <meta property="og:image:height" content="96">
    <meta property="og:image:alt" content="<?= $site_name ?> logo">
<link rel="alternate" hreflang="x-default" href="<?= $site_url ?>/cookies.php" />
<link rel="alternate" hreflang="en" href="<?= $site_url ?>/lander/<?= $site_domain ?>/cookies.php" />
<link rel="alternate" hreflang="hr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hr/cookies.php" />
<link rel="alternate" hreflang="ro" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ro/cookies.php" />
<link rel="alternate" hreflang="nl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nl/cookies.php" />
<link rel="alternate" hreflang="no" href="<?= $site_url ?>/lander/<?= $site_domain ?>/no/cookies.php" />
<link rel="alternate" hreflang="pt" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pt/cookies.php" />
<link rel="alternate" hreflang="cs" href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/cookies.php" />
<link rel="alternate" hreflang="pl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pl/cookies.php" />
<link rel="alternate" hreflang="tr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/tr/cookies.php" />
<link rel="alternate" hreflang="da" href="<?= $site_url ?>/lander/<?= $site_domain ?>/da/cookies.php" />
<link rel="alternate" hreflang="sv" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sv/cookies.php" />
<link rel="alternate" hreflang="fi" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fi/cookies.php" />
<link rel="alternate" hreflang="hu" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hu/cookies.php" />
<link rel="alternate" hreflang="sk" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sk/cookies.php" />
<link rel="alternate" hreflang="bg" href="<?= $site_url ?>/lander/<?= $site_domain ?>/bg/cookies.php" />
<link rel="alternate" hreflang="ms" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ms/cookies.php" />
<link rel="alternate" hreflang="ru" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ru/cookies.php" />
<link rel="alternate" hreflang="nb" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nb/cookies.php" />
<link rel="alternate" hreflang="el" href="<?= $site_url ?>/lander/<?= $site_domain ?>/el/cookies.php" />
<link rel="alternate" hreflang="ja" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ja/cookies.php" />
<link rel="alternate" hreflang="de" href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/cookies.php" />
<link rel="alternate" hreflang="fr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/cookies.php" />
<link rel="alternate" hreflang="es" href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/cookies.php" />
<link rel="alternate" hreflang="it" href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/cookies.php" />
<?php include __DIR__ . '/../includes/header.php'; ?>

<?php include __DIR__ . '/../includes/breadcrumb-schema.php'; ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "SoftwareApplication",
  "name": <?= json_encode($site_name) ?>,
  "url": <?= json_encode($site_url . '/') ?>,
  "logo": <?= json_encode($site_url . '/lander/' . $site_domain . '/favicon-96x96.png') ?>,
  "description": <?= json_encode($cookies_meta_description) ?>,
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
            <h1><?= $cookies_h1 ?></h1>

            <p><?= $cookies_intro_1 ?></p>

            <p><?= $cookies_intro_2 ?></p>

            <p><?= $cookies_intro_3 ?></p>

            <h2><?= $cookies_h2_what ?></h2>

            <p><?= $cookies_p_what_1 ?></p>

            <p><?= $cookies_p_what_2 ?></p>

            <h2><?= $cookies_h2_why ?></h2>

            <p><?= $cookies_p_why_1 ?></p>

            <ul>
                <li><?= $cookies_li_1 ?></li>
                <li><?= $cookies_li_2 ?></li>
                <li><?= $cookies_li_3 ?></li>
                <li><?= $cookies_li_4 ?></li>
                <li><?= $cookies_li_5 ?></li>
                <li><?= $cookies_li_6 ?></li>
                <li><?= $cookies_li_7 ?></li>
                <li><?= $cookies_li_8 ?></li>
            </ul>

            <h2><?= $cookies_h2_essential ?></h2>

            <p><?= $cookies_p_ess_1 ?></p>

            <p><?= $cookies_p_ess_2 ?></p>

            <p><?= $cookies_p_ess_3 ?></p>

            <h2><?= $cookies_h2_analytics ?></h2>

            <p><?= $cookies_p_an_1 ?></p>

            <p><?= $cookies_p_an_2 ?></p>

            <p><?= $cookies_p_an_3 ?></p>

            <h2><?= $cookies_h2_functional ?></h2>

            <p><?= $cookies_p_fun_1 ?></p>

            <p><?= $cookies_p_fun_2 ?></p>

            <h2><?= $cookies_h2_third ?></h2>

            <p><?= $cookies_p_third_1 ?></p>

            <p><?= $cookies_p_third_2 ?></p>

            <p><?= $cookies_p_third_3 ?></p>

            <h2><?= $cookies_h2_manage ?></h2>

            <p><?= $cookies_p_manage_1 ?></p>

            <p><?= $cookies_p_manage_2 ?></p>

            <p><?= $cookies_p_manage_3 ?></p>

            <ul>
                <li><?= $cookies_li_manage_1 ?></li>
                <li><?= $cookies_li_manage_2 ?></li>
                <li><?= $cookies_li_manage_3 ?></li>
                <li><?= $cookies_li_manage_4 ?></li>
            </ul>

            <h2><?= $cookies_h2_data ?></h2>

            <p><?= $cookies_p_data ?></p>

            <h2><?= $cookies_h2_policy_updates ?></h2>

            <p><?= $cookies_p_updates_1 ?></p>

            <p><?= $cookies_p_updates_2 ?></p>

        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
