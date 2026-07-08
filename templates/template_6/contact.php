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

$breadcrumb_name = $contact_breadcrumb_name;
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
    <title><?= $contact_meta_title ?></title>
    <meta name="description" content="<?= $contact_meta_description ?>" />
    <meta property="og:title" content="<?= $contact_meta_title ?>">
    <meta property="og:description" content="<?= $contact_meta_description ?>">
    <link rel="stylesheet" href="./assets/css/style.css">
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

<link rel="stylesheet" href="./integration/default-integration.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/css/intlTelInput.css">

<section class="legal-page">
    <div class="container">
        <div class="legal-wrapper">

            <h1><?= $contact_h1 ?></h1>
            <p><?= $contact_intro_1 ?></p>
            <p><?= $contact_intro_2 ?></p>

            <h2><?= $contact_h2_help ?></h2>
            <ul>
                <li><?= $contact_li_1 ?></li>
                <li><?= $contact_li_2 ?></li>
                <li><?= $contact_li_3 ?></li>
                <li><?= $contact_li_4 ?></li>
                <li><?= $contact_li_5 ?></li>
                <li><?= $contact_li_6 ?></li>
            </ul>

            <h2><?= $contact_h2_send ?></h2>
            <p><?= $contact_p_send ?></p>

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
                        <label for="contact-fname"><?= $contact_form_fname ?></label>
                        <input type="text" id="contact-fname" name="fname" placeholder="<?= $contact_form_fname ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="contact-lname"><?= $contact_form_lname ?></label>
                        <input type="text" id="contact-lname" name="lname" placeholder="<?= $contact_form_lname ?>" required>
                    </div>
                </div>

                <div class="form-group form-group-full">
                    <label for="contact-email"><?= $contact_form_email ?></label>
                    <input type="email" id="contact-email" name="email" placeholder="<?= $contact_form_email ?>" required>
                </div>

                <div class="form-group form-group-full">
                    <label for="contact-phone"><?= $form_phone_label ?></label>
                    <input type="tel" id="contact-phone" name="fullphone" placeholder="<?= $form_phone_placeholder ?>" required>
                    <span class="error-msg hide"></span>
                </div>

                <button type="submit" class="btn btn-primary form-btn"><?= $contact_form_submit ?></button>

                <div class="trust-payment-icons">
                    <img src="./visa.png" alt="Visa" loading="lazy">
                    <img src="./mastercard.png" alt="Mastercard" loading="lazy">
                    <img src="./paypal.png" alt="PayPal" loading="lazy">
                    <img src="./applepay.svg" alt="Apple Pay" loading="lazy">
                    <img src="./googlepay.svg" alt="Google Pay" loading="lazy">
                    <img src="./sepa.svg" alt="SEPA" loading="lazy">
                </div>

            </form>

            <h2><?= $contact_h2_info ?></h2>
            <p><?= $contact_support_label ?> <strong><?= $support_email ?></strong></p>
            <p><?= $contact_institutional_label ?> <strong><?= $institutional_email ?></strong></p>
            <p><?= $contact_disclaimer ?></p>

        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js"></script>
<script src="./integration/validation.js"></script>

<?php include 'includes/footer.php'; ?>
