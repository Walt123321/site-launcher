<?php
session_start();
if (empty($_SESSION['js_token'])) {
    $_SESSION['js_token'] = bin2hex(random_bytes(16));
}
$jsToken = $_SESSION['js_token'];

require_once 'offer_seo.php';
include 'lang.php';

$host = $_SERVER['HTTP_HOST'];
$uri = strtok($_SERVER['REQUEST_URI'], '?');

$canonical = 'https://' . $host . $uri;

$breadcrumb_name = $privacy_breadcrumb_name;
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
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body data-theme="dark">
<?php include 'includes/header.php'; ?>

<?php include 'includes/breadcrumb-schema.php'; ?>

<section class="legal-page">
    <div class="container">
        <div class="legal-wrapper">

            <h1><?= $privacy_h1 ?></h1>
            <p><em><?= $privacy_last_update ?></em></p>
            <p><?= $privacy_intro ?></p>

            <h2><?= $privacy_h2_collect ?></h2>
            <p><?= $privacy_p_collect ?></p>

            <h2><?= $privacy_h2_use ?></h2>
            <p><?= $privacy_p_use ?></p>

            <h2><?= $privacy_h2_sharing ?></h2>
            <p><?= $privacy_p_sharing ?></p>

            <h2><?= $privacy_h2_security ?></h2>
            <p><?= $privacy_p_security ?></p>

            <h2><?= $privacy_h2_rights ?></h2>
            <p><?= $privacy_p_rights ?></p>

            <h2><?= $privacy_h2_retention ?></h2>
            <p><?= $privacy_p_retention ?></p>

            <h2><?= $privacy_h2_contact ?></h2>
            <p><?= $privacy_p_contact ?></p>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
<script>
window.APP_LANG = {
    themeToggleDarkText: <?= json_encode("🌙 " . $theme_toggle_text) ?>,
    themeToggleLightText: <?= json_encode("☀️ " . $theme_toggle_text_light) ?>,
    themeToggleDarkAria: <?= json_encode($theme_toggle_dark_aria_label) ?>,
    themeToggleLightAria: <?= json_encode($theme_toggle_light_aria_label) ?>,
    mockupToday: <?= json_encode($mockup_today) ?>,
    orderPendingAllocation: <?= json_encode($mockup_order_pending_text) ?>
};
</script>
<script src="./assets/js/app.js"></script>
