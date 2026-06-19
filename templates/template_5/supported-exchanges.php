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

<?php include 'includes/head-start.php'; ?>
    <title><?= $exchanges_meta_title ?></title>
    <meta name="description" content="<?= $exchanges_meta_description ?>" />
    <meta property="og:title" content="<?= $exchanges_meta_title ?>">
    <meta property="og:description" content="<?= $exchanges_meta_description ?>">
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

<?php include 'includes/footer.php'; ?>
