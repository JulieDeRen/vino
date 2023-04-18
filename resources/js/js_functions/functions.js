const navToggle = document.querySelector('.nav-toggle');
const navClose = document.querySelector('.nav-close');
const mobileMenu = document.querySelector('.mobile-menu');

navToggle.addEventListener('click', function() {
  mobileMenu.style.display = 'block'; // show the menu
  navToggle.textContent = 'Close Menu'; // change text of toggle button
});

navClose.addEventListener('click', function() {
  mobileMenu.style.display = 'none'; // hide the menu
  navToggle.textContent = 'Open Menu'; // change text of toggle button
});








