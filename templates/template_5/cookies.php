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

<?php include 'includes/head-start.php'; ?>
    <title><?= $cookies_meta_title ?></title>
    <meta name="description" content="<?= $cookies_meta_description ?>" />
    <meta property="og:title" content="<?= $cookies_meta_title ?>">
    <meta property="og:description" content="<?= $cookies_meta_description ?>">
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

<?php include 'includes/footer.php'; ?>
