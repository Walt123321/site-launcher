<?php
$page_title = "Contact — {{DOMAIN}}";
$meta_description = "Get in touch with {{DOMAIN}}.";
require __DIR__ . '/includes/header.php';
?>

<main>

<section class="hero">
    <div class="container">
        <p class="eyebrow">Contact</p>
        <h1>Get in touch</h1>
        <p class="lead">
            Send us a message and we'll get back to you within a couple of business days.
        </p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="contact-grid">
            <div>
                <h2>Contact details</h2>
                <ul class="info-list">
                    <li><b>Email</b> <span>contact@<?= $wp_domain ?></span></li>
                    <li><b>Hours</b> <span>Mon&ndash;Fri, 09:00&ndash;18:00</span></li>
                    <li><b>Response time</b> <span>1&ndash;2 business days</span></li>
                </ul>
            </div>
            <div>
                <h2>Send a message</h2>
                <form class="contact-form" id="wp-contact-form" onsubmit="return wpHandleContactSubmit(event)">
                    <div>
                        <label for="wp-name">Name</label>
                        <input type="text" id="wp-name" name="name" required>
                    </div>
                    <div>
                        <label for="wp-email">Email</label>
                        <input type="email" id="wp-email" name="email" required>
                    </div>
                    <div>
                        <label for="wp-message">Message</label>
                        <textarea id="wp-message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="btn">Send message</button>
                    <p id="wp-contact-note" style="display:none; color: var(--ink-soft); font-size: 14px; margin: 4px 0 0;">
                        Thanks — your message has been noted.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

</main>

<script>
function wpHandleContactSubmit(e) {
    e.preventDefault();
    var note = document.getElementById('wp-contact-note');
    var form = document.getElementById('wp-contact-form');
    if (note) note.style.display = 'block';
    if (form) form.reset();
    return false;
}
</script>

<?php require __DIR__ . '/includes/footer.php'; ?>
