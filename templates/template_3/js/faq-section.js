(function () {
    var faqItems = document.querySelectorAll('.faq-section .faq__item');

    faqItems.forEach(function (item) {
        var button = item.querySelector('.faq__question');

        button.addEventListener('click', function () {
            var isOpen = item.classList.contains('is-open');

            // Close all open items
            faqItems.forEach(function (otherItem) {
                otherItem.classList.remove('is-open');
                var otherBtn = otherItem.querySelector('.faq__question');
                if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
            });

            // Toggle clicked item
            if (!isOpen) {
                item.classList.add('is-open');
                button.setAttribute('aria-expanded', 'true');
            }
        });
    });
})();
