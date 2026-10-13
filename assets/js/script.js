
document.addEventListener('DOMContentLoaded', function () {
  // Mobile hamburger navigation
  const menuButton = document.getElementById('menuBtn');
  const navLinks = document.getElementById('navLinks');

  if (menuButton && navLinks) {
    menuButton.addEventListener('click', function () {
      const isOpen = navLinks.classList.toggle('open');

      menuButton.setAttribute('aria-expanded', String(isOpen));
      menuButton.setAttribute(
        'aria-label',
        isOpen ? 'Close menu' : 'Open menu'
      );
      menuButton.textContent = isOpen ? '✕' : '☰';
    });

    navLinks.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        navLinks.classList.remove('open');
        menuButton.setAttribute('aria-expanded', 'false');
        menuButton.setAttribute('aria-label', 'Open menu');
        menuButton.textContent = '☰';
      });
    });
  }

  // Four-image homepage carousel
  const hero = document.querySelector('.hero');
  const slides = Array.from(document.querySelectorAll('.hero .slide'));
  const dots = Array.from(document.querySelectorAll('.hero .dots .dot'));

  if (hero && slides.length > 0) {
    let currentIndex = slides.findIndex(function (slide) {
      return slide.classList.contains('active');
    });

    if (currentIndex < 0) currentIndex = 0;

    let carouselTimer;

    function showSlide(index) {
      currentIndex = (index + slides.length) % slides.length;

      slides.forEach(function (slide, i) {
        slide.classList.toggle('active', i === currentIndex);
      });

      dots.forEach(function (dot, i) {
        const active = i === currentIndex;
        dot.classList.toggle('active', active);
        dot.setAttribute('aria-pressed', String(active));
      });
    }

    function startCarousel() {
      clearInterval(carouselTimer);

      if (slides.length > 1) {
        carouselTimer = setInterval(function () {
          showSlide(currentIndex + 1);
        }, 5000);
      }
    }

    dots.forEach(function (dot, index) {
      dot.addEventListener('click', function () {
        showSlide(index);
        startCarousel();
      });
    });

    hero.addEventListener('mouseenter', function () {
      clearInterval(carouselTimer);
    });

    hero.addEventListener('mouseleave', startCarousel);

    hero.addEventListener('focusin', function () {
      clearInterval(carouselTimer);
    });

    hero.addEventListener('focusout', startCarousel);

    showSlide(currentIndex);
    startCarousel();
  }

  // Automatically update copyright year
  document.querySelectorAll('[data-current-year]').forEach(function (el) {
    el.textContent = new Date().getFullYear();
  });
});
