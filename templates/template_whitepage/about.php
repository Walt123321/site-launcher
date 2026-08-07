<?php
$page_title = "About — {{DOMAIN}}";
$meta_description = "Learn about {{DOMAIN}}, our background and how we work with clients.";
require __DIR__ . '/includes/header.php';
?>

<main>

<section class="hero">
    <div class="container">
        <p class="eyebrow">About us</p>
        <h1>A small, experienced team focused on doing good work</h1>
        <p class="lead">
            <?= $wp_domain ?> was formed around a simple idea: clients get better outcomes when
            they work directly with experienced people, not a rotating cast of junior staff.
        </p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Our story</p>
            <h2>How we got here</h2>
            <p>
                We started out doing project-based work for a handful of clients and found that the
                engagements that went best were the ones where we stayed involved end to end —
                from the first planning conversation through to execution. That's still how we
                operate today.
            </p>
        </div>
    </div>
</section>

<section class="section alt">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">How we work</p>
            <h2>Principles we hold to</h2>
        </div>
        <div class="grid">
            <div class="card">
                <div class="icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg>
                </div>
                <h3>Direct communication</h3>
                <p>You always know who is doing the work and can talk to them directly.</p>
            </div>
            <div class="card">
                <div class="icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
                </div>
                <h3>Realistic timelines</h3>
                <p>We'd rather commit to a schedule we can hit than promise something impressive.</p>
            </div>
            <div class="card">
                <div class="icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2 3 7v6c0 5 4 8 9 9 5-1 9-4 9-9V7l-9-5Z"/></svg>
                </div>
                <h3>No surprises</h3>
                <p>Clear scope, clear pricing, and updates before problems become expensive.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Get in touch</p>
            <h2>Interested in working together?</h2>
            <p>Reach out and we'll get back to you within a couple of business days.</p>
        </div>
        <a href="./contact.php" class="btn">Contact us</a>
    </div>
</section>

</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
