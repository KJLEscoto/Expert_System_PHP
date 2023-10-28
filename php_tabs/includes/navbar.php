<nav id="navbar" class="py-5 md:px-36 px-10 duration-300 fixed top-0 left-0 w-full z-10 mb-20">

  <header class="mx-auto flex items-center justify-between duration-300">
    <section class="">
      <div class="flex items-center">
        <a href=".././php_tabs/index.php"><img
            class="w-auto h-[40px] mr-2 hover:scale-105 transition duration-300 ease-in-out" src=".././img/sti.png"
            alt="STI-Logo"></a>
        <h1 class="text-xl font-bold text-[#005BAB] cursor-default tracking-wider m-auto">
          <?php echo "College - Davao"; ?>
        </h1>
      </div>
    </section>

    <section class="lg:block hidden">
      <ul class="font-semibold text-[#005BAB] flex gap-7 text-base tracking-wider">
        <a href=".././php_tabs/index.php">
          <li class="hover:text-white transition duration-300 ease-in-out m-auto flex group relative">
            <img class="w-auto h-6 transition-transform transform-gpu group-hover:scale-105"
              src=".././img/blue-home-icon.png" alt="home-icon">
            <img class="w-auto h-6 transition-transform transform-gpu scale-0 group-hover:scale-105 absolute inset-0"
              src=".././img/white-home-icon.png" alt="home-icon">
            <span class="ml-1"><?php echo "Home"; ?></span>
          </li>
        </a>
        <a href=".././php_tabs/index.php">
          <li class="hover:text-white transition duration-300 ease-in-out m-auto flex group relative">
            <img class="w-auto h-6 transition-transform transform-gpu group-hover:scale-105"
              src=".././img/blue-abt-icon.png" alt="about-icon">
            <img class="w-auto h-6 transition-transform transform-gpu scale-0 group-hover:scale-105 absolute inset-0"
              src=".././img/white-abt-icon.png" alt="about-icon">
            <span class="ml-1"><?php echo "About"; ?></span>
          </li>
        </a>
        <a href=".././php_tabs/index.php">
          <li class="hover:text-white transition duration-300 ease-in-out m-auto flex group relative">
            <img class="w-auto h-6 transition-transform transform-gpu group-hover:scale-105"
              src=".././img/blue-cont-icon.png" alt="contact-icon">
            <img class="w-auto h-6 transition-transform transform-gpu scale-0 group-hover:scale-105 absolute inset-0"
              src=".././img/white-cont-icon.png" alt="contact-icon">
            <span class="ml-1"><?php echo "Contact"; ?></span>
          </li>
        </a>
      </ul>
    </section>

    <!-- <section class="lg:block hidden">
      <div class="relative">
        <input type="text"
          class="bg-[#fff4eb] text-[#891c00] rounded-full py-2 pl-4 pr-12 focus:outline-none focus:ring focus:ring-[#ea674a] focus:border-[#de3300] shadow-lg tracking-wider"
          placeholder="Search a recipe...">
        <button type="button" class="absolute top-1/2 right-2 transform -translate-y-1/2 text-gray-600">
          <img class="w-auto h-7 opacity-30" src="../img/search-icon.png" alt="search">
        </button>
      </div>
    </section> -->

    <section class="lg:block hidden">
      <button
        class="border-[#dba047] border-2 py-2 px-10 shadow-md tracking-wider rounded-2xl bg-[#febd5b] hover:bg-[#5495C9] font-semibold hover:text-white hover:border-[#2e5679] text-[#005BAB] transition duration-300 ease-in-out">
        Take Test!
      </button>
    </section>

    <section class="lg:hidden">
      <button id="menu-button">
        <div id="menu-icon">
          <img class="w-auto h-7 opacity-80" src="../img/blue-ham-icon.png" alt="Menu">
        </div>
      </button>
    </section>
  </header>

  <section id="responsive-menu" class="lg:hidden hidden text-end mt-5">
    <ul class="font-semibold text-[#891c00] flex flex-col gap-4 text-base tracking-wider">
      <a href=".././php_tabs/index.php">
        <li class="hover:text-[#ffede8] transition duration-300 ease-in-out border-2">
          <?php echo "Home"; ?></li>
      </a>
      <a href=".././php_tabs/recipes.php">
        <li class="hover:text-[#ffede8] transition duration-300 ease-in-out"><?php echo "About"; ?></li>
      </a>
      <a href=".././php_tabs/contacts.php">
        <li class="hover:text-[#ffede8] transition duration-300 ease-in-out"><?php echo "Contact"; ?></li>
      </a>
      <button
        class="border-[#dba047] border-2 py-2 px-10 shadow-md tracking-wider rounded-2xl bg-[#febd5b] hover:bg-[#5495C9] font-semibold hover:text-white hover:border-[#2e5679] text-[#005BAB] transition duration-300 ease-in-out">
        Take Test!
      </button>
    </ul>
  </section>

</nav>

<script>
const navbar = document.getElementById('navbar');
const responsiveMenu = document.getElementById('responsive-menu');

function toggleBackgroundColor() {
  navbar.classList.toggle('bg-[#febd5b]', 'bg-opacity-95', 'transition-all', 'ease-in-out',
    'shadow-lg');
}

window.addEventListener('scroll', () => {
  if (window.scrollY > 0) {
    navbar.classList.add('bg-[#febd5b]', 'bg-opacity-95', 'transition-all', 'duration-500', 'ease-in-out',
      'shadow-lg');
  } else {
    navbar.classList.remove('bg-[#febd5b]', 'bg-opacity-95', 'shadow-lg');
  }
});

document.addEventListener("DOMContentLoaded", function() {
  const menuButton = document.getElementById("menu-button");
  const menuIcon = document.getElementById("menu-icon");

  menuButton.addEventListener("click", function() {
    responsiveMenu.classList.toggle("hidden");
    toggleBackgroundColor();

    if (responsiveMenu.classList.contains("hidden")) {
      menuIcon.innerHTML = '<img class="w-auto h-7" src="../img/blue-ham-icon.png" alt="Menu">';
    } else {
      menuIcon.innerHTML = '<img class="w-auto h-6 opacity-80" src="../img/blue-x-icon.png" alt="Close">';
    }
  });
});
</script>