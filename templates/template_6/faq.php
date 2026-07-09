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

$breadcrumb_name = $faq_page_breadcrumb_name;
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
    <title><?= $faq_page_meta_title ?></title>
    <meta name="description" content="<?= $faq_page_meta_description ?>" />
    <meta property="og:title" content="<?= $faq_page_meta_title ?>">
    <meta property="og:description" content="<?= $faq_page_meta_description ?>">
    <link rel="stylesheet" href="./assets/css/style.css">
<?php include 'includes/header.php'; ?>

<?php include 'includes/breadcrumb-schema.php'; ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    { "@type": "Question", "name": <?= json_encode($faq_1_question) ?>, "acceptedAnswer": { "@type": "Answer", "text": <?= json_encode($faq_1_answer) ?> } },
    { "@type": "Question", "name": <?= json_encode($faq_2_question) ?>, "acceptedAnswer": { "@type": "Answer", "text": <?= json_encode($faq_2_answer) ?> } },
    { "@type": "Question", "name": <?= json_encode($faq_3_question) ?>, "acceptedAnswer": { "@type": "Answer", "text": <?= json_encode($faq_3_answer) ?> } },
    { "@type": "Question", "name": <?= json_encode($faq_4_question) ?>, "acceptedAnswer": { "@type": "Answer", "text": <?= json_encode($faq_4_answer) ?> } },
    { "@type": "Question", "name": <?= json_encode($faq_5_question) ?>, "acceptedAnswer": { "@type": "Answer", "text": <?= json_encode($faq_5_answer) ?> } },
    { "@type": "Question", "name": <?= json_encode($faq_6_question) ?>, "acceptedAnswer": { "@type": "Answer", "text": <?= json_encode($faq_6_answer) ?> } }
  ]
}
</script>

<section class="legal-page">
    <div class="container">
        <div class="legal-wrapper">

            <h1><?= $faq_page_h1 ?></h1>
            <p><?= $faq_page_subtitle ?></p>

            <h2><?= $faq_1_question ?></h2>
            <p><?= $faq_1_answer ?></p>

            <h2><?= $faq_2_question ?></h2>
            <p><?= $faq_2_answer ?></p>

            <h2><?= $faq_3_question ?></h2>
            <p><?= $faq_3_answer ?></p>

            <h2><?= $faq_4_question ?></h2>
            <p><?= $faq_4_answer ?></p>

            <h2><?= $faq_5_question ?></h2>
            <p><?= $faq_5_answer ?></p>

            <h2><?= $faq_6_question ?></h2>
            <p><?= $faq_6_answer ?></p>

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
