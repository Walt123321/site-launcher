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

<?php include 'includes/head-start.php'; ?>
    <title><?= $privacy_meta_title ?></title>
    <meta name="description" content="<?= $privacy_meta_description ?>" />
    <meta property="og:title" content="<?= $privacy_meta_title ?>">
    <meta property="og:description" content="<?= $privacy_meta_description ?>">
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

<?php include 'includes/footer.php'; ?>
