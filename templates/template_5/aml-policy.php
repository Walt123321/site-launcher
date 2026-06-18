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

<?php include 'includes/head-start.php'; ?>
    <title><?= $aml_meta_title ?></title>
    <meta name="description" content="<?= $aml_meta_description ?>" />
    <meta property="og:title" content="<?= $aml_meta_title ?>">
    <meta property="og:description" content="<?= $aml_meta_description ?>">
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

<?php include 'includes/footer.php'; ?>
