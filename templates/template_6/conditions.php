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

$breadcrumb_name = $conditions_breadcrumb_name;
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
    <title><?= $conditions_meta_title ?></title>
    <meta name="description" content="<?= $conditions_meta_description ?>" />
    <meta property="og:title" content="<?= $conditions_meta_title ?>">
    <meta property="og:description" content="<?= $conditions_meta_description ?>">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body data-theme="dark">
<?php include 'includes/header.php'; ?>

<?php include 'includes/breadcrumb-schema.php'; ?>

<section class="legal-page">
    <div class="container">
        <div class="legal-wrapper">

            <h1><?= $conditions_h1 ?></h1>
            <p><em><?= $conditions_last_update ?></em></p>
            <p><?= $conditions_intro ?></p>

            <h2><?= $conditions_h2_eligibility ?></h2>
            <p><?= $conditions_p_eligibility ?></p>

            <h2><?= $conditions_h2_account ?></h2>
            <p><?= $conditions_p_account ?></p>

            <h2><?= $conditions_h2_risk ?></h2>
            <p><?= $conditions_p_risk ?></p>

            <h2><?= $conditions_h2_conduct ?></h2>
            <p><?= $conditions_p_conduct ?></p>

            <h2><?= $conditions_h2_liability ?></h2>
            <p><?= $conditions_p_liability ?></p>

            <h2><?= $conditions_h2_changes ?></h2>
            <p><?= $conditions_p_changes ?></p>

            <h2><?= $conditions_h2_contact ?></h2>
            <p><?= $conditions_p_contact ?></p>

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
