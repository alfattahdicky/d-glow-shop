document.addEventListener('DOMContentLoaded', function () {
  const hamburgerEl = document.getElementById('hamburger');
  const closeEl = document.getElementById('close');
  const navListEl = document.getElementById('navList');

  hamburgerEl.addEventListener('click', function () {
    navListEl.classList.add('open');
  });

  closeEl.addEventListener('click', function () {
    navListEl.classList.remove('open');
  });
});
