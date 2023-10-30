const navbar = document.getElementById('navbar');
const responsiveMenu = document.getElementById('responsive-menu');

function toggleBackgroundColor() {
  navbar.classList.toggle('bg-[#febd5b]', 'transition-all', 'ease-in-out', 'shadow-lg');
}

function closeResponsiveMenu() {
  responsiveMenu.classList.add('hidden');
  toggleBackgroundColor();
  const menuIcon = document.getElementById('menu-icon');
  menuIcon.innerHTML = '<img class="w-auto h-7" src="img/blue-ham-icon.png" alt="Menu">';
}

window.addEventListener('scroll', () => {
  if (window.scrollY > 0) {
    navbar.classList.add('bg-[#febd5b]', 'transition-all', 'duration-500', 'ease-in-out',
      'shadow-lg');
  } else {
    navbar.classList.remove('bg-[#febd5b]', 'shadow-lg');
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const menuButton = document.getElementById("menu-button");
  const menuIcon = document.getElementById("menu-icon");

  menuButton.addEventListener("click", function () {
    responsiveMenu.classList.toggle("hidden");
    toggleBackgroundColor();

    if (responsiveMenu.classList.contains("hidden")) {
      menuIcon.innerHTML = '<img class="w-auto h-7" src="img/blue-ham-icon.png" alt="Menu">';
    } else {
      menuIcon.innerHTML = '<img class="w-auto h-6" src="img/blue-x-icon.png" alt="Close">';
    }
  });

  // Add event listeners to menu items
  const menuItems = document.querySelectorAll("#responsive-menu a");
  menuItems.forEach(item => {
    item.addEventListener("click", closeResponsiveMenu);
  });
});