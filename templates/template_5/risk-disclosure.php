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

$breadcrumb_name = '💥 ' . $risk_breadcrumb_name . ' 💥';
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
    <title><?= $risk_meta_title ?></title>
    <meta name="robots" content="INDEX, FOLLOW, MAX-IMAGE-PREVIEW:LARGE, MAX-SNIPPET:-1">
    <meta name="description" content="<?= $risk_meta_description ?>" />
    <meta property="og:title" content="<?= $risk_meta_title ?>">
    <meta property="og:description" content="<?= $risk_meta_description ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= $site_name ?>">
    <meta property="og:url" content="<?= $canonical ?>">
    <meta property="og:image" content="<?= $site_url ?>/lander/<?= $site_domain ?>/favicon-96x96.png">
    <meta property="og:image:width" content="96">
    <meta property="og:image:height" content="96">
    <meta property="og:image:alt" content="<?= $site_name ?> logo">
<link rel="alternate" hreflang="x-default" href="<?= $site_url ?>/risk-disclosure.php" />
<link rel="alternate" hreflang="en" href="<?= $site_url ?>/lander/<?= $site_domain ?>/risk-disclosure.php" />
<link rel="alternate" hreflang="hr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hr/risk-disclosure.php" />
<link rel="alternate" hreflang="ro" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ro/risk-disclosure.php" />
<link rel="alternate" hreflang="nl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nl/risk-disclosure.php" />
<link rel="alternate" hreflang="no" href="<?= $site_url ?>/lander/<?= $site_domain ?>/no/risk-disclosure.php" />
<link rel="alternate" hreflang="pt" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pt/risk-disclosure.php" />
<link rel="alternate" hreflang="cs" href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/risk-disclosure.php" />
<link rel="alternate" hreflang="pl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pl/risk-disclosure.php" />
<link rel="alternate" hreflang="tr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/tr/risk-disclosure.php" />
<link rel="alternate" hreflang="da" href="<?= $site_url ?>/lander/<?= $site_domain ?>/da/risk-disclosure.php" />
<link rel="alternate" hreflang="sv" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sv/risk-disclosure.php" />
<link rel="alternate" hreflang="fi" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fi/risk-disclosure.php" />
<link rel="alternate" hreflang="hu" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hu/risk-disclosure.php" />
<link rel="alternate" hreflang="sk" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sk/risk-disclosure.php" />
<link rel="alternate" hreflang="bg" href="<?= $site_url ?>/lander/<?= $site_domain ?>/bg/risk-disclosure.php" />
<link rel="alternate" hreflang="ms" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ms/risk-disclosure.php" />
<link rel="alternate" hreflang="nb" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nb/risk-disclosure.php" />
<link rel="alternate" hreflang="el" href="<?= $site_url ?>/lander/<?= $site_domain ?>/el/risk-disclosure.php" />
<link rel="alternate" hreflang="ja" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ja/risk-disclosure.php" />
<link rel="alternate" hreflang="de" href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/risk-disclosure.php" />
<link rel="alternate" hreflang="fr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/risk-disclosure.php" />
<link rel="alternate" hreflang="es" href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/risk-disclosure.php" />
<link rel="alternate" hreflang="it" href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/risk-disclosure.php" />
<?php include __DIR__ . '/includes/header.php'; ?>

<?php include __DIR__ . '/includes/breadcrumb-schema.php'; ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "SoftwareApplication",
  "name": <?= json_encode($site_name) ?>,
  "url": <?= json_encode($site_url . '/') ?>,
  "logo": <?= json_encode($site_url . '/lander/' . $site_domain . '/favicon-96x96.png') ?>,
  "description": <?= json_encode($risk_meta_description) ?>,
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
            <h1><?= $risk_h1 ?></h1>

            <p><?= $risk_intro_1 ?></p>

            <p><?= $risk_intro_2 ?></p>

            <h2><?= $risk_h2_no_guarantee ?></h2>

            <p><?= $risk_p_no_guarantee_1 ?></p>

            <p><?= $risk_p_no_guarantee_2 ?></p>

            <h2><?= $risk_h2_volatility ?></h2>

            <p><?= $risk_p_vol_1 ?></p>

            <p><?= $risk_p_vol_2 ?></p>

            <h2><?= $risk_h2_ai ?></h2>

            <p><?= $risk_p_ai_1 ?></p>

            <p><?= $risk_p_ai_2 ?></p>

            <p><?= $risk_p_ai_3 ?></p>

            <h2><?= $risk_h2_tech ?></h2>

            <p><?= $risk_p_tech_1 ?></p>

            <p><?= $risk_p_tech_2 ?></p>

            <h2><?= $risk_h2_liquidity ?></h2>

            <p><?= $risk_p_liq_1 ?></p>

            <p><?= $risk_p_liq_2 ?></p>

            <h2><?= $risk_h2_regulatory ?></h2>

            <p><?= $risk_p_reg_1 ?></p>

            <p><?= $risk_p_reg_2 ?></p>

            <h2><?= $risk_h2_user_responsibility ?></h2>

            <p><?= $risk_p_user_1 ?></p>

            <p><?= $risk_p_user_2 ?></p>

            <h2><?= $risk_h2_advice ?></h2>

            <p><?= $risk_p_advice_1 ?></p>

            <p><?= $risk_p_advice_2 ?></p>

        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
