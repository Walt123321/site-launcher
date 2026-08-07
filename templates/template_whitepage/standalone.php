<?php
// Само-достаточна (inline CSS, одна сторінка, без переходів) версія білої
// сторінки — для видачі через Adspect-дію "Локальний файл"/adspect_serve_local(),
// коли хостинг Keitaro не роутить довільні вкладені URL напряму (тільки
// кореневий index.php кампанії). Використовується лише для is_test-збірок
// (див. build_domain_site_zip в app.py) замість багатосторінкового шаблону.
$wp_domain = "{{DOMAIN}}";
$wp_initial = $wp_domain !== '' ? strtoupper(substr($wp_domain, 0, 1)) : '?';
$wp_year = substr("{{LASTMOD}}", 0, 4);
?><!DOCTYPE html>
<html lang="{{LANG}}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $wp_domain ?> — Professional Business Services</title>
<meta name="description" content="<?= $wp_domain ?> provides consulting, strategy and operational support for growing businesses.">
<style>
:root {
    --ink: #1c2430;
    --ink-soft: #4a5568;
    --line: #e2e6ec;
    --bg: #ffffff;
    --bg-alt: #f6f8fa;
    --accent: #2b5cab;
    --accent-dark: #1f4685;
    --radius: 10px;
    --max-width: 1120px;
}
* { box-sizing: border-box; }
html { scroll-behavior: smooth; }
body {
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    color: var(--ink);
    background: var(--bg);
    line-height: 1.55;
    -webkit-font-smoothing: antialiased;
}
a { color: var(--accent); text-decoration: none; }
a:hover { text-decoration: underline; }
.container { max-width: var(--max-width); margin: 0 auto; padding: 0 24px; }
.site-header { border-bottom: 1px solid var(--line); background: var(--bg); position: sticky; top: 0; z-index: 10; }
.site-header .container { display: flex; align-items: center; justify-content: space-between; height: 72px; }
.brand { display: flex; align-items: center; gap: 10px; font-weight: 700; font-size: 18px; color: var(--ink); }
.brand:hover { text-decoration: none; }
.brand-mark { width: 32px; height: 32px; border-radius: 8px; background: var(--accent); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 14px; font-weight: 800; flex-shrink: 0; }
.main-nav { display: flex; gap: 28px; }
.main-nav a { color: var(--ink-soft); font-size: 15px; font-weight: 500; }
.main-nav a:hover { color: var(--accent); text-decoration: none; }
.hero { padding: 88px 0 72px; background: var(--bg-alt); border-bottom: 1px solid var(--line); }
.hero h1 { font-size: 40px; line-height: 1.2; margin: 0 0 18px; max-width: 720px; }
.hero p.lead { font-size: 18px; color: var(--ink-soft); max-width: 640px; margin: 0 0 28px; }
.btn { display: inline-block; padding: 13px 26px; border-radius: var(--radius); background: var(--accent); color: #fff; font-weight: 600; font-size: 15px; border: none; cursor: pointer; }
.btn:hover { background: var(--accent-dark); text-decoration: none; }
.btn-outline { background: transparent; color: var(--accent); border: 1px solid var(--accent); }
.btn-outline:hover { background: var(--bg-alt); }
section.section { padding: 64px 0; }
section.section.alt { background: var(--bg-alt); border-top: 1px solid var(--line); border-bottom: 1px solid var(--line); }
.section-head { max-width: 640px; margin: 0 0 40px; }
.section-head h2 { font-size: 30px; margin: 0 0 12px; }
.section-head p { color: var(--ink-soft); font-size: 16px; margin: 0; }
.eyebrow { text-transform: uppercase; letter-spacing: 0.08em; font-size: 12px; font-weight: 700; color: var(--accent); margin: 0 0 10px; }
.grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 28px; }
.card { background: var(--bg); border: 1px solid var(--line); border-radius: var(--radius); padding: 28px; }
.card .icon { width: 44px; height: 44px; border-radius: 9px; background: var(--bg-alt); color: var(--accent); display: flex; align-items: center; justify-content: center; margin-bottom: 16px; }
.card h3 { font-size: 18px; margin: 0 0 8px; }
.card p { color: var(--ink-soft); font-size: 14.5px; margin: 0; }
.stats { display: grid; grid-template-columns: repeat(auto-fit, minmax(140px, 1fr)); gap: 24px; text-align: center; }
.stats .stat b { display: block; font-size: 30px; color: var(--ink); }
.stats .stat span { color: var(--ink-soft); font-size: 14px; }
.contact-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; }
@media (max-width: 760px) {
    .contact-grid { grid-template-columns: 1fr; }
    .main-nav { gap: 16px; }
    .hero h1 { font-size: 30px; }
}
.info-list { list-style: none; margin: 24px 0 0; padding: 0; }
.info-list li { display: flex; gap: 12px; padding: 12px 0; border-bottom: 1px solid var(--line); color: var(--ink-soft); font-size: 14.5px; }
.info-list li b { color: var(--ink); min-width: 90px; }
form.contact-form { display: flex; flex-direction: column; gap: 16px; }
form.contact-form label { font-size: 14px; font-weight: 600; margin-bottom: 6px; display: block; }
form.contact-form input, form.contact-form textarea { width: 100%; padding: 12px 14px; border: 1px solid var(--line); border-radius: 8px; font-size: 14.5px; font-family: inherit; color: var(--ink); background: var(--bg); }
form.contact-form input:focus, form.contact-form textarea:focus { outline: none; border-color: var(--accent); }
form.contact-form textarea { resize: vertical; min-height: 120px; }
.site-footer { border-top: 1px solid var(--line); background: var(--bg-alt); padding: 40px 0; }
.site-footer .container { display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px; }
.site-footer p { margin: 0; color: var(--ink-soft); font-size: 14px; }
.footer-links { display: flex; gap: 20px; }
.footer-links a { color: var(--ink-soft); font-size: 14px; }
</style>
</head>
<body>

<header class="site-header">
    <div class="container">
        <a href="#top" class="brand">
            <span class="brand-mark"><?= $wp_initial ?></span>
            <span><?= $wp_domain ?></span>
        </a>
        <nav class="main-nav">
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
        </nav>
    </div>
</header>

<main>

<section class="hero" id="top">
    <div class="container">
        <p class="eyebrow">Welcome</p>
        <h1>Practical consulting for businesses that need results, not theory.</h1>
        <p class="lead">
            <?= $wp_domain ?> helps organizations plan, structure and run their operations
            more effectively — from initial strategy through day-to-day execution.
        </p>
        <a href="#contact" class="btn">Get in touch</a>
        <a href="#services" class="btn btn-outline" style="margin-left:12px;">Our services</a>
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

<section class="section" id="about">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">About us</p>
            <h2>A small, experienced team focused on doing good work</h2>
            <p>
                We started out doing project-based work for a handful of clients and found that the
                engagements that went best were the ones where we stayed involved end to end —
                from the first planning conversation through to execution. That's still how we
                operate today.
            </p>
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

<section class="section alt" id="services">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Services</p>
            <h2>A focused set of services, done properly</h2>
            <p>We'd rather do four things well than ten things poorly.</p>
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
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20V10"/><path d="M18 20V4"/><path d="M6 20v-4"/></svg>
                </div>
                <h3>Performance Review</h3>
                <p>A structured look at how a team or process is performing, with prioritized recommendations.</p>
            </div>
            <div class="card">
                <div class="icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 21v-1a7 7 0 0 1 14 0v1"/></svg>
                </div>
                <h3>Ongoing Advisory</h3>
                <p>Regular check-ins for founders and managers who want an experienced outside perspective.</p>
            </div>
        </div>
    </div>
</section>

<section class="section" id="contact">
    <div class="container">
        <div class="contact-grid">
            <div>
                <p class="eyebrow">Contact</p>
                <h2>Get in touch</h2>
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

<footer class="site-footer">
    <div class="container">
        <p>&copy; <?= $wp_year ?> <?= $wp_domain ?>. All rights reserved.</p>
        <nav class="footer-links">
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
        </nav>
    </div>
</footer>

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

</body>
</html>
