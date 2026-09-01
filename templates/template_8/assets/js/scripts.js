//===============================================================
const initCookieMessage = () => {
  const isAccepted = JSON.parse(localStorage.getItem('cookie_accepted') ?? 'false');

  if (isAccepted) return;

  const cookieMessage = document.querySelector('[data-cookie]');

  // This template ships no [data-cookie] banner markup; bail out instead of
  // throwing, since an uncaught error here used to abort every top-level
  // statement after this call in the script (including the scroll-spy nav
  // IntersectionObserver at the bottom of this file).
  if (!cookieMessage) return;

  cookieMessage.setAttribute('data-active', true);

  const messageButton = cookieMessage.querySelector('button');

  messageButton.addEventListener('click', () => {
    localStorage.setItem('cookie_accepted', 'true');

    cookieMessage.removeAttribute('data-active');
  });
};

//===============================================================
const initResponseMessage = () => {
  const responseMessage = document.querySelector('[data-form-message]');

  if (!responseMessage) return;

  document.addEventListener('click', (e) => {
    const isClickInside = e.target.closest('[data-form-message]');

    if (!isClickInside) {
      responseMessage.removeAttribute('data-success');
      responseMessage.removeAttribute('data-error');
    }
  });
};

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
      target.toggleAttribute('data-active', isOpen);
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

    icon.toggleAttribute('data-active', isOpen);
    menu.toggleAttribute('data-active', isOpen);
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
const initLangFlags = () => {
  window.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-flag-img]').forEach((img) => {
      const testImg = new Image();
      const src = img.dataset.src;

      testImg.onload = () => {
        img.src = src;
      };

      testImg.onerror = () => {
        console.warn(`Flag image failed to load: ${src}`);
      };

      testImg.src = src;
    });
  });
};

//===============================================================
const initLazyLoad = () => {
  new LazyLoad({
    elements_selector: '[data-lazy]',
  });
};

//===============================================================
const initInitials = () => {
  const initials = document.querySelectorAll('[data-initials]');
  const reviewers = document.querySelectorAll('[data-reviewer]');

  reviewers.forEach((reviewer, i) => {
    const name = reviewer.innerText.trim();
    const words = name.split(/\s+/).slice(0, 2);
    const letters = words.map((word) => word[0]?.toUpperCase() || '').join('');

    if (initials[i]) {
      initials[i].innerText = letters;
    }
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
// toggleAccordion is intentionally NOT defined here -- every page template
// declares its own inline `function toggleAccordion(id)` right before
// </body>. A duplicate `const toggleAccordion` here threw
// "Identifier 'toggleAccordion' has already been declared" in the console
// on every page (both bindings share the same global scope).
window.addEventListener('pageshow', initInitials);
initResponseMessage();
initLazyLoad();
initLangFlags();
initMobileMenu();
initConnectors();
initCookieMessage();
initReviewsCarousel();

//===============================================================
(function () {
  const items = document.querySelectorAll('[data-section]');
  const nav = document.querySelector('[data-active-class]');
  const activeClass = nav ? nav.dataset.activeClass : '';

  function setActive(sectionId) {
    items.forEach(function (li) {
      if (li.dataset.section === sectionId) {
        li.classList.add(activeClass);
      } else {
        li.classList.remove(activeClass);
      }
    });
  }

  const observer = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          setActive(entry.target.id);
        }
      });
    },
    {
      rootMargin: '0px 0px -60% 0px',
      threshold: 0,
    },
  );

  items.forEach(function (li) {
    const el = document.getElementById(li.dataset.section);
    if (el) observer.observe(el);
  });
})();
