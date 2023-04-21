window.addEventListener('DOMContentLoaded', function() {

const btnMobileMenu = document.getElementById("mobile-menu-button");
const mobileMenu = document.getElementById("mobile-menu");
const logoWn = document.querySelector("#logo");
// const mainNav = document.querySelector("#main-nav");

btnMobileMenu.addEventListener("click", function () {
  
  
  mobileMenu.classList.toggle("hidden");
  if (!mobileMenu.classList.contains("hidden")) {
    logoWn.style.opacity = 0;
  } else {
    logoWn.style.opacity = 1;
  }
});
  

// Close mobile menu when link is clicked
const mobileMenuLinks = document.querySelectorAll("#mobile-menu a");

mobileMenuLinks.forEach(function (link) {
  link.addEventListener("click", function () {
    mobileMenu.classList.add("hidden");
  });
});

// Set mobile menu width to full screen width
// mobileMenu.style.height = "100vh";
})

