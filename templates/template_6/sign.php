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

$breadcrumb_name = $sign_breadcrumb_name;
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
    <title><?= $sign_meta_title ?></title>
    <meta name="description" content="<?= $sign_meta_description ?>" />
    <meta property="og:title" content="<?= $sign_meta_title ?>">
    <meta property="og:description" content="<?= $sign_meta_description ?>">
    <link rel="stylesheet" href="./assets/css/style.css">
<?php include 'includes/header.php'; ?>

<?php include 'includes/breadcrumb-schema.php'; ?>

<link rel="stylesheet" href="./integration/default-integration.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/css/intlTelInput.css">

<section class="legal-page">
    <div class="container">
        <div class="legal-wrapper" style="max-width: 560px;">

            <h1 style="text-align:center;"><?= $sign_h1 ?></h1>
            <p style="text-align:center;"><?= $sign_subtitle ?></p>

            <form class="leadform rf-form js-rf-form" action="./integration/send.php" method="POST">

                <input type="hidden" name="js_token" value="<?= $jsToken ?>">
                <div style="position:absolute; left:-9999px; opacity:0; height:0; overflow:hidden;">
                    <input type="text" name="website" tabindex="-1" autocomplete="off">
                    <input type="text" name="company" style="position:absolute; left:-9999px;">
                </div>
                <input type="hidden" name="country" value="<?= $form_country ?>">
                <input type="hidden" name="language" value="<?= $form_language ?>">
                <input type="hidden" name="phone_country" value="<?= $form_phone_country ?>">
                <input type="hidden" name="only_countries" value='<?= $form_only_countries ?>'>

                <div class="form-preloader hidden">
                    <svg width="50" height="50" class="spinner" viewBox="0 0 50 50">
                        <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
                    </svg>
                </div>

                <div class="form-grid">
                    <div class="form-group">
                        <label for="sign-fname"><?= $form_first_name_label ?></label>
                        <input type="text" id="sign-fname" name="fname" placeholder="<?= $form_first_name_placeholder ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="sign-lname"><?= $form_last_name_label ?></label>
                        <input type="text" id="sign-lname" name="lname" placeholder="<?= $form_last_name_placeholder ?>" required>
                    </div>
                </div>

                <div class="form-group form-group-full">
                    <label for="sign-email"><?= $form_email_label ?></label>
                    <input type="email" id="sign-email" name="email" placeholder="<?= $form_email_placeholder ?>" required>
                </div>

                <div class="form-group form-group-full">
                    <label for="sign-phone"><?= $form_phone_label ?></label>
                    <input type="tel" id="sign-phone" name="fullphone" placeholder="<?= $form_phone_placeholder ?>" required>
                    <span class="error-msg hide"></span>
                </div>

                <button type="submit" class="btn btn-primary form-btn">
                    <?= $form_submit_button ?>
                </button>

                <div class="trust-payment-icons">
                    <span class="trust-chip"><img src="./visa.png" alt="Visa" loading="lazy"></span>
                    <span class="trust-chip"><img src="./mastercard.png" alt="Mastercard" loading="lazy"></span>
                    <span class="trust-chip"><img src="./paypal.png" alt="PayPal" loading="lazy"></span>
                    <span class="trust-chip"><img src="./applepay.svg" alt="Apple Pay" loading="lazy"></span>
                    <span class="trust-chip"><img src="./googlepay.svg" alt="Google Pay" loading="lazy"></span>
                    <span class="trust-chip"><img src="./sepa.svg" alt="SEPA" loading="lazy"></span>
                </div>

                <p class="form-legal">
                    <?= $form_legal_before ?>
                    <a href="conditions.php">
                        <?= $form_terms_text ?>
                    </a>.
                </p>

            </form>

        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js"></script>
<script src="./integration/validation.js"></script>

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
