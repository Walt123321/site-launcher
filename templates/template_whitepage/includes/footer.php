<?php $wp_year = substr("{{LASTMOD}}", 0, 4); ?>
<footer class="site-footer">
    <div class="container">
        <p>&copy; <?= $wp_year ?> <?= $wp_domain ?>. All rights reserved.</p>
        <nav class="footer-links">
            <a href="./index.php">Home</a>
            <a href="./about.php">About</a>
            <a href="./services.php">Services</a>
            <a href="./contact.php">Contact</a>
        </nav>
    </div>
</footer>

</body>
</html>
