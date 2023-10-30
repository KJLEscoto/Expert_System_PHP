<nav id="navbar" class="py-5 lg:px-36 md:px-28 px-10 duration-300 fixed top-0 left-0 w-full z-10 mb-20">

  <header class="mx-auto flex items-center justify-between duration-300">
    <section>
      <div class="flex items-center">
        <a href="index.php"><img class="w-auto h-[40px] mr-2 hover:scale-105 transition duration-300 ease-in-out"
            src="img/sti.png" alt="STI-Logo"></a>
        <h1 class="text-xl font-bold text-[#005BAB] cursor-default tracking-wider m-auto">
          <?php echo "College - Davao"; ?>
        </h1>
      </div>
    </section>

    <section class="lg:block hidden">
      <ul class="font-semibold text-[#005BAB] flex gap-3 text-base tracking-wider">
        <a href="#home">
          <li class="hover:bg-[#ffc881] rounded-xl px-3 py-2 transition duration-300 ease-in-out flex">
            <img class="w-auto h-6" src="img/blue-home-icon.png" alt="home-icon">
            <span class="ml-1"><?php echo "Home"; ?></span>
          </li>
        </a>
        <a href="#about">
          <li class="hover:bg-[#ffc881] rounded-xl px-3 py-2 transition duration-300 ease-in-out flex">
            <img class="w-auto h-6" src="img/blue-abt-icon.png" alt="about-icon">
            <span class="ml-1"><?php echo "About"; ?></span>
          </li>
        </a>
        <a href="#contact">
          <li class="hover:bg-[#ffc881] rounded-xl px-3 py-2 transition duration-300 ease-in-out flex">
            <img class="w-auto h-6" src="img/blue-cont-icon.png" alt="contact-icon">
            <span class="ml-1"><?php echo "Contact"; ?></span>
          </li>
        </a>
      </ul>
    </section>


    <!-- <section class="absolute top-[20px] right-[130px] hidden lg:block duration-300 ease-out">
      <div class="fixed">
        <img class="w-10 h-auto moon cursor-pointer" src="img/moon.png" alt="moon">
        <img class="w-10 h-auto sun cursor-pointer" src="img/sun.png" alt="sun">
      </div>
    </section> -->

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
          <img class="w-auto h-7 opacity-80" src="img/blue-ham-icon.png" alt="Menu">
        </div>
      </button>
    </section>
  </header>

  <section id="responsive-menu" class="lg:hidden hidden mt-5 transition duration-300 ease-in-out">
    <ul class="font-semibold text-[#005BAB] flex flex-col gap-1 tracking-wider">
      <a href="#home">
        <li class="hover:bg-[#ffc881] rounded-xl px-3 py-2 transition duration-300 ease-in-out flex">
          <img class="w-auto h-6" src="img/blue-home-icon.png" alt="home-icon">
          <span class="ml-2 m-auto"><?php echo "Home"; ?></span>
        </li>
      </a>
      <a href="#about">
        <li class="hover:bg-[#ffc881] rounded-xl px-3 py-2 transition duration-300 ease-in-out flex">
          <img class="w-auto h-6" src="img/blue-abt-icon.png" alt="about-icon">
          <span class="ml-2 m-auto"><?php echo "About"; ?></span>
        </li>
      </a>
      <a href="#contact">
        <li class="hover:bg-[#ffc881] rounded-xl px-3 py-2 transition duration-300 ease-in-out flex">
          <img class="w-auto h-6" src="img/blue-cont-icon.png" alt="contact-icon">
          <span class="ml-2 m-auto"><?php echo "Contact"; ?></span>
        </li>
      </a>
      <button
        class="border-[#dba047] border-2 py-2 px-10 shadow-md tracking-wider rounded-2xl bg-[#febd5b] hover:bg-[#5495C9] font-semibold hover:text-white hover:border-[#2e5679] text-[#005BAB] transition duration-300 ease-in-out mt-3">
        Take Test!
      </button>
    </ul>
  </section>
</nav>

<script src="js/navbar-script.js"></script>