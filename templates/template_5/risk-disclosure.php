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

<?php include 'includes/head-start.php'; ?>
    <title><?= $risk_meta_title ?></title>
    <meta name="description" content="<?= $risk_meta_description ?>" />
    <meta property="og:title" content="<?= $risk_meta_title ?>">
    <meta property="og:description" content="<?= $risk_meta_description ?>">
<?php include 'includes/header.php'; ?>

<?php include 'includes/breadcrumb-schema.php'; ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "<?= $site_name ?>",
  "operatingSystem": "ANDROID, iOS",
  "applicationCategory": "FinanceApplication",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "<?= $rating_value ?>",
    "ratingCount": "<?= $rating_count ?>"
  },
  "offers": {
    "@type": "Offer",
    "price": "<?= $app_price ?>",
    "priceCurrency": "<?= $app_currency ?>"
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

<?php include 'includes/footer.php'; ?>
