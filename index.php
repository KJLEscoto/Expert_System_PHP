<!-- update-7 -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | Psychologist</title>
  <link rel="stylesheet" href="dist/output.css">
  <link rel="shortcut icon" type="x-icon" href="img/sti-logo.png">
</head>

<body class="bg-[#e4e4e4]">
  <nav>
    <?php
    include("php_tabs/includes/navbar.php");
    ?>
  </nav>

  <section id="home" class="mt-52 duration-300 z-0 grid lg:grid-cols-2 grid-cols-1 gap-9 lg:px-36 md:px-28 px-10"
    data-title="Home">
    <?php
      include("php_tabs/home.php");
    ?>
  </section>

  <hr class="border border-b-slate-400 mb-32 mt-32" id="about">

  <section class="mt-32 tracking-wide lg:px-36 md:px-28 px-10" data-title="About">
    <?php
      include("php_tabs/about.php");
    ?>
  </section>

  <hr class="border border-b-slate-400 mb-32 mt-32" id="contact">

  <section class="mt-32 lg:px-36 md:px-28 px-10" data-title="Contact">
    <?php 
      include("php_tabs/contact.php");
    ?>
  </section>

  <footer>
    <?php 
      include("php_tabs/includes/footer.php");
    ?>
  </footer>

  <script src="js/home-script.js"></script>

</body>

</html>