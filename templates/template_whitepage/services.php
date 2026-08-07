<?php
$page_title = "Services — {{DOMAIN}}";
$meta_description = "An overview of the consulting, strategy and operational services offered by {{DOMAIN}}.";
require __DIR__ . '/includes/header.php';
?>

<main>

<section class="hero">
    <div class="container">
        <p class="eyebrow">Services</p>
        <h1>A focused set of services, done properly</h1>
        <p class="lead">
            We'd rather do four things well than ten things poorly. Here's what
            <?= $wp_domain ?> can help with.
        </p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="grid">
            <div class="card">
                <div class="icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M18.7 8 13 13.7 9 9.7 3.7 15"/></svg>
                </div>
                <h3>Strategy &amp; Planning</h3>
                <p>
                    We help you set a realistic direction and turn it into a plan your team can
                    actually execute — covering priorities, sequencing and resourcing.
                </p>
            </div>
            <div class="card">
                <div class="icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>
                </div>
                <h3>Operations Support</h3>
                <p>
                    Hands-on work tightening up day-to-day processes: documenting how things
                    actually run, removing bottlenecks, and making handoffs less error-prone.
                </p>
            </div>
            <div class="card">
                <div class="icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20V10"/><path d="M18 20V4"/><path d="M6 20v-4"/></svg>
                </div>
                <h3>Performance Review</h3>
                <p>
                    A structured look at how a team, process or project is actually performing,
                    with specific, prioritized recommendations — not a generic checklist.
                </p>
            </div>
            <div class="card">
                <div class="icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 21v-1a7 7 0 0 1 14 0v1"/></svg>
                </div>
                <h3>Ongoing Advisory</h3>
                <p>
                    Regular check-ins for founders and managers who want an experienced outside
                    perspective on the decisions in front of them.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section alt">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">How engagements work</p>
            <h2>Simple, three-step process</h2>
        </div>
        <div class="grid">
            <div class="card">
                <h3>1. Conversation</h3>
                <p>We start with a short call to understand what you actually need.</p>
            </div>
            <div class="card">
                <h3>2. Proposal</h3>
                <p>A clear scope and price, so there are no surprises later.</p>
            </div>
            <div class="card">
                <h3>3. Delivery</h3>
                <p>Regular updates as the work progresses, start to finish.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Next step</p>
            <h2>Tell us what you're working on</h2>
        </div>
        <a href="./contact.php" class="btn">Contact us</a>
    </div>
</section>

</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
