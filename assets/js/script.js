
document.addEventListener('DOMContentLoaded', function () {
  const menuButton = document.getElementById('menuToggle');
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

  document.querySelectorAll('[data-current-year]').forEach(function (el) {
    el.textContent = new Date().getFullYear();
  });
});


     
