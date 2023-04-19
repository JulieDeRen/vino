window.addEventListener('DOMContentLoaded', function() {

const btnMobileMenu = document.getElementById("mobile-menu-button");
const mobileMenu = document.getElementById("mobile-menu");

btnMobileMenu.addEventListener("click", function () {
  mobileMenu.classList.toggle("hidden");
});

// Close mobile menu when link is clicked
const mobileMenuLinks = document.querySelectorAll("#mobile-menu a");

mobileMenuLinks.forEach(function (link) {
  link.addEventListener("click", function () {
    mobileMenu.classList.add("hidden");
  });
});

// Set mobile menu width to full screen width
mobileMenu.style.height = "100vh";
})

