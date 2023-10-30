const navbar = document.getElementById('navbar');
const responsiveMenu = document.getElementById('responsive-menu');

const $dark_bg = 'dark:bg-[#f0aa4c]';
const $bg = 'bg-yellow-300';
let isMenuOpen = false;

function toggleBackgroundColor() {
  if (isMenuOpen) {
    navbar.classList.add($bg, $dark_bg, 'transition-all', 'ease-in-out', 'shadow-lg');
  } else if (window.scrollY > 0) {
    navbar.classList.add($bg, $dark_bg, 'transition-all', 'duration-500', 'ease-in-out', 'shadow-lg');
  } else {
    navbar.classList.remove($bg, $dark_bg, 'shadow-lg');
  }
}

function closeResponsiveMenu() {
  responsiveMenu.classList.add('hidden');
  isMenuOpen = false;
  toggleBackgroundColor();
  const menuIcon = document.getElementById('menu-icon');
  menuIcon.innerHTML = '<img class="w-auto h-7" src="img/blue-ham-icon.png" alt="Menu">';
}

document.addEventListener("DOMContentLoaded", function () {
  const menuButton = document.getElementById("menu-button");
  const menuIcon = document.getElementById("menu-icon");

  menuButton.addEventListener("click", function () {
    responsiveMenu.classList.toggle("hidden");
    isMenuOpen = !isMenuOpen;
    toggleBackgroundColor();

    if (isMenuOpen) {
      menuIcon.innerHTML = '<img class="w-auto h-6" src="img/blue-x-icon.png" alt="Close">';
    } else {
      menuIcon.innerHTML = '<img class="w-auto h-7" src="img/blue-ham-icon.png" alt="Menu">';
    }
  });

  // Add event listeners to menu items
  const menuItems = document.querySelectorAll("#responsive-menu a");
  menuItems.forEach(item => {
    item.addEventListener("click", closeResponsiveMenu);
  });

  // Add an event listener for window scroll
  window.addEventListener('scroll', toggleBackgroundColor);
});
