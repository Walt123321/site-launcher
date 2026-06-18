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

$breadcrumb_name = '💥 ' . $about_breadcrumb_name . ' 💥';
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
    <title><?= $about_meta_title ?></title>
    <meta name="description" content="<?= $about_meta_description ?>" />
    <meta property="og:title" content="<?= $about_meta_title ?>">
    <meta property="og:description" content="<?= $about_meta_description ?>">
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

            <h1><?= $about_h1 ?></h1>
            <p><?= $about_p1 ?></p>
            <p><?= $about_p2 ?></p>

            <h2><?= $about_h2_vision ?></h2>
            <p><?= $about_p_vision_1 ?></p>
            <p><?= $about_p_vision_2 ?></p>

            <h2><?= $about_h2_ai ?></h2>
            <p><?= $about_p_ai_1 ?></p>
            <p><?= $about_p_ai_2 ?></p>
            <ul>
                <li><?= $about_li_1 ?></li>
                <li><?= $about_li_2 ?></li>
                <li><?= $about_li_3 ?></li>
                <li><?= $about_li_4 ?></li>
                <li><?= $about_li_5 ?></li>
                <li><?= $about_li_6 ?></li>
                <li><?= $about_li_7 ?></li>
                <li><?= $about_li_8 ?></li>
            </ul>
            <p><?= $about_p_ai_3 ?></p>

            <h2><?= $about_h2_risk ?></h2>
            <p><?= $about_p_risk_1 ?></p>
            <p><?= $about_p_risk_2 ?></p>

            <h2><?= $about_h2_global ?></h2>
            <p><?= $about_p_global_1 ?></p>
            <p><?= $about_p_global_2 ?></p>

            <h2><?= $about_h2_why ?></h2>
            <ul>
                <li><?= $about_why_li_1 ?></li>
                <li><?= $about_why_li_2 ?></li>
                <li><?= $about_why_li_3 ?></li>
                <li><?= $about_why_li_4 ?></li>
                <li><?= $about_why_li_5 ?></li>
                <li><?= $about_why_li_6 ?></li>
                <li><?= $about_why_li_7 ?></li>
            </ul>

            <h2><?= $about_h2_forward ?></h2>
            <p><?= $about_p_forward_1 ?></p>
            <p><?= $about_p_forward_2 ?></p>

        </div>

    </div>

</section>

<?php include 'includes/footer.php'; ?>
