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

<?php include 'includes/head-start.php'; ?>
    <title><?= $terms_meta_title ?></title>
    <meta name="description" content="<?= $terms_meta_description ?>" />
    <meta property="og:title" content="<?= $terms_meta_title ?>">
    <meta property="og:description" content="<?= $terms_meta_description ?>">
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

<?php include 'includes/footer.php'; ?>
