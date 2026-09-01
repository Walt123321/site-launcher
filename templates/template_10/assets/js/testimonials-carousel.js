(function () {
  var root = document.querySelector('[data-carousel="testimonials"]');
  if (!root) return;

  var track = root.querySelector('[data-carousel-track]');
  var prevBtn = root.querySelector('[data-carousel-prev]');
  var nextBtn = root.querySelector('[data-carousel-next]');
  var dotsWrap = document.querySelector('[data-carousel-dots]');
  if (!track) return;

  function pageCount() {
    return Math.max(1, Math.round(track.scrollWidth / track.clientWidth));
  }

  function currentPage() {
    return Math.max(0, Math.round(track.scrollLeft / track.clientWidth));
  }

  function updateArrows() {
    var maxScroll = track.scrollWidth - track.clientWidth - 1;
    if (prevBtn) prevBtn.disabled = track.scrollLeft <= 0;
    if (nextBtn) nextBtn.disabled = track.scrollLeft >= maxScroll;
  }

  function updateDots() {
    if (!dotsWrap) return;
    var page = currentPage();
    Array.prototype.forEach.call(dotsWrap.children, function (dot, i) {
      dot.classList.toggle('is-active', i === page);
    });
  }

  function buildDots() {
    if (!dotsWrap) return;
    var pages = pageCount();
    dotsWrap.innerHTML = '';
    if (pages <= 1) return;
    for (var i = 0; i < pages; i++) {
      (function (index) {
        var dot = document.createElement('button');
        dot.type = 'button';
        dot.setAttribute('aria-label', 'Go to slide ' + (index + 1));
        dot.addEventListener('click', function () {
          track.scrollTo({ left: index * track.clientWidth, behavior: 'smooth' });
        });
        dotsWrap.appendChild(dot);
      })(i);
    }
    updateDots();
  }

  function goTo(direction) {
    track.scrollBy({ left: track.clientWidth * direction, behavior: 'smooth' });
  }

  if (prevBtn) prevBtn.addEventListener('click', function () { goTo(-1); });
  if (nextBtn) nextBtn.addEventListener('click', function () { goTo(1); });

  var scrollTimer;
  track.addEventListener('scroll', function () {
    updateArrows();
    clearTimeout(scrollTimer);
    scrollTimer = setTimeout(updateDots, 80);
  }, { passive: true });

  var resizeTimer;
  window.addEventListener('resize', function () {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function () {
      buildDots();
      updateArrows();
    }, 150);
  });

  buildDots();
  updateArrows();
})();
