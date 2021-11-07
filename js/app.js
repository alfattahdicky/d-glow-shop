const hamburgerEl = document.getElementById('hamburger');
const closeEl = document.getElementById('close');
const navListEl = document.getElementById('navList');
const notificationEl = document.getElementById('notifikasi');
const btnNotificationEl = document.getElementById('btnNotif');

hamburgerEl.addEventListener('click', function () {
  navListEl.classList.add('open');
});

closeEl.addEventListener('click', function () {
  navListEl.classList.remove('open');
});

btnNotificationEl.addEventListener('click', function (e) {
  if (notificationEl.classList.contains('open')) {
    notificationEl.classList.remove('open');
  } else {
    notificationEl.classList.add('open');
  }
});
