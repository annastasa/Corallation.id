<?php require "../../app/core/MVC_model.php"?>

    <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/index.css?<?php echo time(); ?>" />
  </head>
  <body>
    <!-- navbar Start -->
    <?php
      require "$absolute_path/app/views/template/navbar.php";
    ?>
    <!-- navbar end -->

    <!-- Slider main container -->
    <div class="swiper-container" data-aos="fade-down" data-aos-duration="1500">
      <div class="heading-2">
        <center>
          <a href="" class="btn btn-light"><h1 class="text-center">Total Donasi : <?= $jumlah_donasi ?></h1></a>
        </center>
      </div>
      <div class="heading-1">
        <center>
          <a href="../Donasi/" class="btn btn-primary"><h1 class="text-center">Donasi</h1></a>
        </center>
      </div>
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div
          class="swiper-slide swiper-1"
          ><h1 class="text-center brand-name fs-4">Love our Coral Reef</h1></div
        >
        <div
          class="swiper-slide swiper-2"
          ><h1 class="text-center brand-name fs-4">Love our Coral Reef</h1></div
        >
        <div
          class="swiper-slide swiper-3"
          ><h1 class="text-center brand-name fs-4">Love our Coral Reef</h1></div
        >
        <div
          class="swiper-slide swiper-4"
          ><h1 class="text-center brand-name fs-4">Love our Coral Reef</h1></div
        >
        <div
          class="swiper-slide swiper-5"
          ><h1 class="text-center brand-name fs-4">Love our Coral Reef</h1></div
        >
        <div
          class="swiper-slide swiper-6"
          ><h1 class="text-center brand-name fs-4">Love our Coral Reef</h1></div
        ><div
          class="swiper-slide swiper-7"
          ><h1 class="text-center brand-name fs-4">Love our Coral Reef</h1></div
        >
        <div
          class="swiper-slide swiper-8"
          ><h1 class="text-center brand-name fs-4">Love our Coral Reef</h1></div
        >
        <div
          class="swiper-slide swiper-9"
          ><h1 class="text-center brand-name fs-4">Love our Coral Reef</h1></div
        >
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->
      <div class="swiper-scrollbar"></div>
    </div>
    <br><br>
    <!-- myValue Start -->
    <div class="myValue">
      <a href="../Artikel/artikel1.php" class="card" style="width: 18rem;">
        <img src="../images/logo/logo1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Terumbu Karang adalah</p>
        </div>
      </a>
      <a href="../Artikel/artikel2.php" class="card" style="width: 18rem;">
        <img src="../images/logo/logo2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Perkembangbiakan terumbu karang</p>
        </div>
      </a>
      <a href="../Artikel/artikel3.php" class="card" style="width: 18rem;">
        <img src="../images/logo/logo3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Fakta Unik</p>
        </div>
      </a>
    </div>
    <br><br>
    <!-- myValue End -->
    
    <div class="footer">
      <h1 class="text-center title"> About Us </h1>
      <div class="about_us">
        <div class="person">
          <div class="avatar" id="author1">
          </div>
          <h1 class="fs-4">Hafifah Annastasasi Ariyanti</h1>
          <h1 class="fs-5">	192410101133</h1>
        </div>
        <div class="person">
          <div class="avatar" id="author2">
          </div>
          <h1 class="fs-4">	Salma Malik Kasibah</h1>
          <h1 class="fs-5">	192410101120</h1>
        </div>
        <br><br><br>
      </div>

    </div>
    




    <script src="<?= BASE_URL ?>/Public/js/swiper/swiper-bundle.min.js"></script>
    <script src="<?= BASE_URL ?>/Public/js/swiper/swiper-bundle.js"></script>
    <script>
      const swiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        effect: 'flip',
        followFinger: 'true',
        allowTouchMove: 'true',

        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
      });
    </script>
<?php
require "$absolute_path/app/views/template/footer.php";
?>