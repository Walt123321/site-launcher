//===============================================================
const initConnectors = () => {
  document.querySelectorAll('[data-connector]').forEach((connector) => {
    let isOpen = false;

    const parent = connector.closest('[data-connect-parent]') || document;
    const target = parent.querySelector(`[data-connect="${connector.dataset.connector}"]`);

    if (!target) return;

    const toggle = (state) => {
      isOpen = state;
      connector.toggleAttribute('data-active', isOpen);
      parent.toggleAttribute('data-active', isOpen);
    };

    connector.addEventListener('click', (e) => {
      e.stopPropagation();
      toggle(!isOpen);
    });

    target.addEventListener('click', (e) => {
      e.stopPropagation();
    });

    document.addEventListener('click', () => {
      if (isOpen) toggle(false);
    });
  });
};

//===============================================================
const initMobileMenu = () => {
  let isOpen = false;

  const icon = document.querySelector('[data-menu-icon]');
  const menu = document.querySelector('[data-mobile-menu]');

  const toggleMenu = (state) => {
    isOpen = state;
    icon?.toggleAttribute('data-active', isOpen);
    menu?.toggleAttribute('data-active', isOpen);
  };

  icon?.addEventListener('click', (e) => {
    e.stopPropagation();
    toggleMenu(!isOpen);
  });

  menu?.addEventListener('click', (e) => {
    e.stopPropagation();
  });

  document.addEventListener('click', () => {
    if (isOpen) toggleMenu(false);
  });
};

//===============================================================
const initReviewsCarousel = () => {
  const slider = document.querySelector('[data-slider="reviews"]');
  const container = slider ? slider.querySelector('[data-slider-container]') : null;
  const prevBtn = document.querySelector('[data-prev="reviews"]');
  const nextBtn = document.querySelector('[data-next="reviews"]');

  if (!container || !prevBtn || !nextBtn) return;

  const scrollAmount = () => {
    const item = container.querySelector('[data-slider-item]');
    return item ? item.getBoundingClientRect().width + 24 : container.clientWidth * 0.8;
  };

  const updateButtons = () => {
    const max = container.scrollWidth - container.clientWidth - 4;
    prevBtn.disabled = container.scrollLeft <= 4;
    nextBtn.disabled = max <= 4 || container.scrollLeft >= max;
  };

  prevBtn.addEventListener('click', () => container.scrollBy({ left: -scrollAmount(), behavior: 'smooth' }));
  nextBtn.addEventListener('click', () => container.scrollBy({ left: scrollAmount(), behavior: 'smooth' }));
  container.addEventListener('scroll', updateButtons, { passive: true });
  window.addEventListener('resize', updateButtons);
  updateButtons();
};

//===============================================================
// toggleAccordion is intentionally NOT defined here -- index.php (and every
// page template) declares its own inline `function toggleAccordion(index)`
// right before </body>. A duplicate declaration here would throw
// "Identifier 'toggleAccordion' has already been declared" once both share
// the global scope (learned the hard way on an earlier template).

initMobileMenu();
initConnectors();
initReviewsCarousel();
