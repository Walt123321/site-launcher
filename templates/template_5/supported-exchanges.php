<?php
session_start();
if (empty($_SESSION['js_token'])) {
    $_SESSION['js_token'] = bin2hex(random_bytes(16));
}
$jsToken = $_SESSION['js_token'];

include 'lang.php';
require_once 'offer_seo.php';

$host = $_SERVER['HTTP_HOST'];
$uri = strtok($_SERVER['REQUEST_URI'], '?');

$canonical = 'https://' . $host . $uri;

$breadcrumb_name = '💥 ' . $exchanges_breadcrumb_name . ' 💥';
$breadcrumb_url = $canonical;

?>


<?php
if (strpos($_SERVER['HTTP_HOST'], 'www.') === 0) {
    $host = substr($_SERVER['HTTP_HOST'], 4);
    header("Location: https://" . $host . $_SERVER['REQUEST_URI'], true, 301);
    exit();
}
?>

<?php include __DIR__ . '/includes/head-start.php'; ?>
    <title><?= $exchanges_meta_title ?></title>
    <meta name="robots" content="INDEX, FOLLOW, MAX-IMAGE-PREVIEW:LARGE, MAX-SNIPPET:-1">
    <meta name="description" content="<?= $exchanges_meta_description ?>" />
    <meta property="og:title" content="<?= $exchanges_meta_title ?>">
    <meta property="og:description" content="<?= $exchanges_meta_description ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= $site_name ?>">
    <meta property="og:url" content="<?= $canonical ?>">
    <meta property="og:image" content="<?= $site_url ?>/lander/<?= $site_domain ?>/favicon-96x96.png">
    <meta property="og:image:width" content="96">
    <meta property="og:image:height" content="96">
    <meta property="og:image:alt" content="<?= $site_name ?> logo">
<link rel="alternate" hreflang="x-default" href="<?= $site_url ?>/supported-exchanges.php" />
<link rel="alternate" hreflang="en" href="<?= $site_url ?>/lander/<?= $site_domain ?>/supported-exchanges.php" />
<link rel="alternate" hreflang="hr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hr/supported-exchanges.php" />
<link rel="alternate" hreflang="ro" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ro/supported-exchanges.php" />
<link rel="alternate" hreflang="nl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nl/supported-exchanges.php" />
<link rel="alternate" hreflang="no" href="<?= $site_url ?>/lander/<?= $site_domain ?>/no/supported-exchanges.php" />
<link rel="alternate" hreflang="pt" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pt/supported-exchanges.php" />
<link rel="alternate" hreflang="cs" href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/supported-exchanges.php" />
<link rel="alternate" hreflang="pl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pl/supported-exchanges.php" />
<link rel="alternate" hreflang="tr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/tr/supported-exchanges.php" />
<link rel="alternate" hreflang="da" href="<?= $site_url ?>/lander/<?= $site_domain ?>/da/supported-exchanges.php" />
<link rel="alternate" hreflang="sv" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sv/supported-exchanges.php" />
<link rel="alternate" hreflang="fi" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fi/supported-exchanges.php" />
<link rel="alternate" hreflang="hu" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hu/supported-exchanges.php" />
<link rel="alternate" hreflang="sk" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sk/supported-exchanges.php" />
<link rel="alternate" hreflang="bg" href="<?= $site_url ?>/lander/<?= $site_domain ?>/bg/supported-exchanges.php" />
<link rel="alternate" hreflang="ms" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ms/supported-exchanges.php" />
<link rel="alternate" hreflang="ru" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ru/supported-exchanges.php" />
<link rel="alternate" hreflang="nb" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nb/supported-exchanges.php" />
<link rel="alternate" hreflang="el" href="<?= $site_url ?>/lander/<?= $site_domain ?>/el/supported-exchanges.php" />
<link rel="alternate" hreflang="ja" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ja/supported-exchanges.php" />
<link rel="alternate" hreflang="de" href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/supported-exchanges.php" />
<link rel="alternate" hreflang="fr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/supported-exchanges.php" />
<link rel="alternate" hreflang="es" href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/supported-exchanges.php" />
<link rel="alternate" hreflang="it" href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/supported-exchanges.php" />
<?php include __DIR__ . '/includes/header.php'; ?>

<?php include __DIR__ . '/includes/breadcrumb-schema.php'; ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "SoftwareApplication",
  "name": <?= json_encode($site_name) ?>,
  "url": <?= json_encode($site_url . '/') ?>,
  "logo": <?= json_encode($site_url . '/lander/' . $site_domain . '/favicon-96x96.png') ?>,
  "description": <?= json_encode($exchanges_meta_description) ?>,
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
            <h1><?= $exchanges_h1 ?></h1>

            <p><?= $exchanges_intro_1 ?></p>

            <p><?= $exchanges_intro_2 ?></p>

            <h2><?= $exchanges_h2_philosophy ?></h2>

            <p><?= $exchanges_p_phil_1 ?></p>

            <p><?= $exchanges_p_phil_2 ?></p>

            <h2><?= $exchanges_h2_spot ?></h2>

            <p><?= $exchanges_p_spot_1 ?></p>

            <p><?= $exchanges_p_spot_2 ?></p>

            <ul>
                <li><?= $exchanges_li_spot_1 ?></li>
                <li><?= $exchanges_li_spot_2 ?></li>
                <li><?= $exchanges_li_spot_3 ?></li>
                <li><?= $exchanges_li_spot_4 ?></li>
                <li><?= $exchanges_li_spot_5 ?></li>
                <li><?= $exchanges_li_spot_6 ?></li>
            </ul>

            <h2><?= $exchanges_h2_deriv ?></h2>

            <p><?= $exchanges_p_deriv_1 ?></p>

            <p><?= $exchanges_p_deriv_2 ?></p>

            <p><?= $exchanges_p_deriv_3 ?></p>

            <h2><?= $exchanges_h2_liquidity ?></h2>

            <p><?= $exchanges_p_liq_1 ?></p>

            <p><?= $exchanges_p_liq_2 ?></p>

            <ul>
                <li><?= $exchanges_li_liq_1 ?></li>
                <li><?= $exchanges_li_liq_2 ?></li>
                <li><?= $exchanges_li_liq_3 ?></li>
                <li><?= $exchanges_li_liq_4 ?></li>
                <li><?= $exchanges_li_liq_5 ?></li>
            </ul>

            <h2><?= $exchanges_h2_availability ?></h2>

            <p><?= $exchanges_p_avail_1 ?></p>

            <p><?= $exchanges_p_avail_2 ?></p>

            <h2><?= $exchanges_h2_third ?></h2>

            <p><?= $exchanges_p_third_1 ?></p>

            <p><?= $exchanges_p_third_2 ?></p>

            <p><?= $exchanges_p_third_3 ?></p>

            <h2><?= $exchanges_h2_monitoring ?></h2>

            <p><?= $exchanges_p_mon_1 ?></p>

            <p><?= $exchanges_p_mon_2 ?></p>

            <p><?= $exchanges_p_mon_3 ?></p>

        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
