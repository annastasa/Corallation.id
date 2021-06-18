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
          <a href="" class="btn btn-light"><h1 class="text-center">Perkembangbiakan terumbu karang</h1></a>
        </center>
      </div>
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div
          class="swiper-slide swiper-2"
          ></div
        >
        <div
          class="swiper-slide swiper-3"
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
        <p>
        Karang merupakan kelompok organisme yang sudah mempunyai sistem saraf, jaringan otot dan reproduksi sederhana, akan tetapi telah berkembang dan berfungsi secara baik. Organ-organ reproduksi karang berkembang di antara mesenteri filamen dan pada saat-saat tertentu organ tersebut terlihat nyata sedang pada waktu lain menghilang, terutama untuk jenisjenis karang di wilayah subtropis. Sebaliknya, untuk karang yang hidup di daerah tropis, organ reproduksi dapat ditemukan sepanjang tahun karena siklus reproduksi berlangsung sepanjang tahun dengan puncak reproduksi dua kali dalam setahun (Sorokin, 1993).
        </p>
        <p>
        Hewan karang dapat melakukan reproduksi baik secara seksual maupun aseksual. Reproduksi aseksual dapat berlangsung dengan cara fragmentasi, pelepasan polip dari skeleton dan reproduksi aseksual larva. Kecuali reproduksi aseksual larva, produk dari yang lainnya menghasilkan pembatasan sacara geografi terhadap asal-usul terumbu karang dan sepanjang pembentukan dan pertumbuhan koloni dapat melangsungkan reproduksi seksual. Dalam hal reproduksi secara seksual, gametogenesis akan berlangsung di dalam gonad yang tertanam dalam mesenterium. Kejadian ini dapat berlangsung secara tahunan, namun dapat juga musiman, bulanan atau tidak menentu. Konsekuensi dari cara reproduksi ini adalah pemijahan gamet-gamet untuk fertilisasi eksternal dan perkembangan larva planula, atau pengeraman larva planula untuk dilepaskan setelah berlangsung fertilisasi internal (Nontji, 1987). Karang merupakan kelompok organisme yang sudah mempunyai sistem saraf, jaringan otot dan reproduksi sederhana, akan tetapi telah berkembang dan berfungsi secara baik. Organ-organ reproduksi karang berkembang di antara mesenteri filamen dan pada saat-saat tertentu organ tersebut terlihat nyata sedang pada waktu lain menghilang, terutama untuk jenisjenis karang di wilayah subtropis. Sebaliknya, untuk karang yang hidup di daerah tropis, organ reproduksi dapat ditemukan sepanjang tahun karena siklus reproduksi berlangsung sepanjang tahun dengan puncak reproduksi dua kali dalam setahun (Sorokin, 1993).
        </p>
        <p>
        Hewan karang dapat melakukan reproduksi baik secara seksual maupun aseksual. Reproduksi aseksual dapat berlangsung dengan cara fragmentasi, pelepasan polip dari skeleton dan reproduksi aseksual larva. Kecuali reproduksi aseksual larva, produk dari yang lainnya menghasilkan pembatasan sacara geografi terhadap asal-usul terumbu karang dan sepanjang pembentukan dan pertumbuhan koloni dapat melangsungkan reproduksi seksual. Dalam hal reproduksi secara seksual, gametogenesis akan berlangsung di dalam gonad yang tertanam dalam mesenterium. Kejadian ini dapat berlangsung secara tahunan, namun dapat juga musiman, bulanan atau tidak menentu. Konsekuensi dari cara reproduksi ini adalah pemijahan gamet-gamet untuk fertilisasi eksternal dan perkembangan larva planula, atau pengeraman larva planula untuk dilepaskan setelah berlangsung fertilisasi internal (Nontji, 1987).
        </p>


      </div>
      <div class="artikel_lain">
        <a style="padding: 70px;height:400px" href="../Artikel/artikel3.php" class="card" style="width: 18rem;">
            <img style="border-radius: 150px;" src="../images/logo/logo3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Fakta Unik</p>
            </div>
          </a>
          <a style="padding: 70px;height:400px" href="../Artikel/artikel1.php" class="card" style="width: 18rem;">
            <img style="border-radius: 150px;" src="../images/logo/logo1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Apa itu Terumbu Karang?</p>
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