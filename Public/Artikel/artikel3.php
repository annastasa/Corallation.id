<?php require "../../app/core/MVC_model.php"?>
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/index.css?<?php echo time(); ?>" />
<link rel="stylesheet" href="../css/artikel.css?<?php echo time(); ?>">

<body>
    <?php
      require "$absolute_path/app/views/template/navbar.php";
    ?>
  <div class="container">

    <div class="swiper-container" data-aos="fade-down" data-aos-duration="1500">
      <div class="heading-2">
        <center>
          <a href="" class="btn btn-light"><h1 class="text-center">Fakta Unik</h1></a>
        </center>
      </div>
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div
          class="swiper-slide swiper-3"
          ></div
        >
        <div
          class="swiper-slide swiper-2"
          ></div
        >
        <div
          class="swiper-slide swiper-1"
          ></div
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

    <div class="artikel">
      <div class="paragraf">
        <h1 class="text-center">1</h1>
        <p>
        Terumbu karang merupakan biota laut yang memiliki kemampuan menyerap karbon dioksida. Bahkan, organisme ini diklaim mampu menyerap karbon tiga kali lebih baik dibandingkan dengan pepohonan.
        Terumbu karang memiliki kemampuan untuk berfotosintesis karena memiliki zat klorofil. Terumbu karang sendiri terdiri dari unsur binatang karang bernama Polip yang melakukan simbiosis mutualisme dengan tumbuhan alga, yakni ganggang hijau.
        </p>
        <h1 class="text-center">2</h1>
        <p>
        Seperti yang diketahui, terumbu karang merupakan tempat hidup, berlindung, dan sumber makanan bagi kelompok ikan. Jika ekosistemnya mampu terjaga dengan baik, maka Indonesia bisa menghasilkan sekitar 12,5 juta ton ikan setiap tahunnya dari ekosistem pesisir laut ini.
        </p>

        <h1 class="text-center">3</h1>
        <p>
        ulukan Amazon disematkan bagi terumbu karang yang ada di Indonesia karena jenisnya yang sangat beragam. Pemerintah sendiri melalui Kementerian Kelautan dan Perikanan (KKP) mengklaim bahwa 69 persen varietas seluruh terumbu karang yang ada di dunia terdapat di Indonesia. Dari sinilah ekosistem terumbu karang di Indonesia mendapat julukan Amazon of the Ocean.
        </p>

        <h1 class="text-center">4</h1>
        <p>
        Terumbu karang merupakan penghuni besar wilayah lautan. Biota yang dianggap sebagai "pohonnya laut" ini diperkirakan terhampar luas hingga 25.000 kilometer persegi. 
        Melansir situs Kementrian Kelautan dan Perikanan (KKP), kondisi terumbu karang di Indonesia sekitar 37 persen di antaranya berkategori baik, dan 29,9 persen dalam keadaan sangat baik. Sisanya, diperlukan upaya penanganan dan perlindungan yang cukup serius agar kembali tumbuh dengan baik.
        </p>

        <h1 class="text-center">5</h1>
        <p>Mengutip siaran Kementerian Kelautan dan Perikanan, pada 2019 luasan kawasan konservasi terumbu karang mencapai 23,34 juta hektar, atau setara dengan 7,18 persen dari keseluruhan perairan di  Indonesia. 
        Ditargetkan, pada tahun 2030 kelak luas kawasan konservasi terumbu karang dapat mencapai 32,5 juta hektar atau setara dengan 10 persen total perairan laut di negara ini.</p>

      </div>
      <div class="artikel_lain">
        <a style="padding: 70px;height:400px;width:400px" href="../Artikel/artikel1.php" class="card" style="width: 18rem;">
            <img style="border-radius: 150px;" src="../images/logo/logo1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Apa itu Terumbu Karang?</p>
            </div>
          </a>
          <a style="padding: 70px;height:400px;width:400px" href="../Artikel/artikel2.php" class="card" style="width: 18rem;">
            <img style="border-radius: 150px;" src="../images/logo/logo2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Perkembangbiakan terumbu karang</p>
            </div>
          </a>
      </div>
    </div>
      
  </div>
</body>



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