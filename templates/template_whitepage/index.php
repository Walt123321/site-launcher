<?php
$page_title = "{{DOMAIN}} — Professional Business Services";
$meta_description = "{{DOMAIN}} provides consulting, strategy and operational support for growing businesses.";
require __DIR__ . '/includes/header.php';
?>

<main>

<section class="hero">
    <div class="container">
        <p class="eyebrow">Welcome</p>
        <h1>Practical consulting for businesses that need results, not theory.</h1>
        <p class="lead">
            <?= $wp_domain ?> helps organizations plan, structure and run their operations
            more effectively — from initial strategy through day-to-day execution.
        </p>
        <a href="./contact.php" class="btn">Get in touch</a>
        <a href="./services.php" class="btn btn-outline" style="margin-left:12px;">Our services</a>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">What we do</p>
            <h2>A small team, a focused set of services</h2>
            <p>We work with clients directly rather than handing projects off to junior staff — every
            engagement is led by someone who has done the work before.</p>
        </div>
        <div class="grid">
            <div class="card">
                <div class="icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M18.7 8 13 13.7 9 9.7 3.7 15"/></svg>
                </div>
                <h3>Strategy &amp; Planning</h3>
                <p>Clear, realistic plans built around your actual constraints — budget, team size and timeline.</p>
            </div>
            <div class="card">
                <div class="icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>
                </div>
                <h3>Operations Support</h3>
                <p>Hands-on help tightening up processes so things run smoothly without constant oversight.</p>
            </div>
            <div class="card">
                <div class="icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 21v-1a7 7 0 0 1 14 0v1"/></svg>
                </div>
                <h3>Advisory</h3>
                <p>An outside perspective when a decision is too close to see clearly from the inside.</p>
            </div>
        </div>
    </div>
</section>

<section class="section alt">
    <div class="container">
        <div class="stats">
            <div class="stat"><b>12+</b><span>years combined experience</span></div>
            <div class="stat"><b>60+</b><span>engagements completed</span></div>
            <div class="stat"><b>4</b><span>core service areas</span></div>
            <div class="stat"><b>1:1</b><span>direct client contact</span></div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Why work with us</p>
            <h2>We keep engagements small and direct</h2>
            <p>No account managers, no layers of reporting — you work with the people actually doing the work.</p>
        </div>
        <a href="./about.php" class="btn btn-outline">Learn more about us</a>
    </div>
</section>

</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
