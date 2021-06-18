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
          <a href="" class="btn btn-light"><h1 class="text-center">Apa itu Terumbu Karang?</h1></a>
        </center>
      </div>
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div
          class="swiper-slide swiper-1"
          ></div
        >
        <div
          class="swiper-slide swiper-2"
          ></div
        >
        <div
          class="swiper-slide swiper-3"
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
        Karang adalah hewan kecil yang hidup dalam komunitas besar yang terdiri dari polip individu yang mengeluarkan zat kalsium karbonat yang mengeras dan membentuk struktur terumbu dari waktu ke waktu. Ada berbagai jenis karang, seperti karang otak dan karang kipas, yang membentuk berbagai jenis struktur. Polip karang hidup bersimbiosis dengan alga yang menyediakan makanan bagi mereka. Penyakit, suhu ekstrem dan polusi dapat menyebabkan karang mengeluarkan alga, hanya menyisakan kerangka kalsium karbonat putih, suatu peristiwa yang disebut pemutihan karang. Pemutihan karang adalah kekhawatiran dengan pemanasan global yang memanaskan lautan dan karbon dioksida yang menyebabkan lautan menjadi asam. Terumbu karang merupakan ekosistem penting karena mendukung komunitas ikan, moluska, krustasea, dan makhluk laut lainnya yang lebih besar.
        </p>
        <p>
        kosistem terumbu karang adalah tempat tinggal bagi ribuan binatang dan tumbuhan yang banyak diantaranya memiliki nilai ekonomi tinggi. Berbagai jenis binatang mencari makan dan berlindung di ekosistem ini. Berjuta penduduk Indonesia bergantung sepenuhnya pada ekosistem terumbu karang sebagai sumber pencaharian. Jumlah produksi ikan, kerang dan kepiting dari ekosistem terumbu karang secara lestari di seluruh dunia dapat mencapai 9 juta ton atau sedikitnya 12% dari jumlah tangkapan perikanan dunia. Sumber perikanan yang ditopang oleh ekosistem terumbu karang memiliki arti penting bagi masyarakat setempat yang pada umumnya masih memakai alat tangkap tradisional.
        </p>
        <p>
        Selain nilai ekonominya, ekosistem terumbu karang juga merupakan laboratorium alam yang sangat unik untuk berbagai kegiatan penelitian yang dapat mengungkapkan penemuan yang berguna bagi kehidupan manusia. Beberapa jenis spongs, misalnya, merupakan binatang yang antara lain terdapat di ekosistem terumbu karang yang berpotensi mengandung bahan bioakif yang dapat dijadikan bahan obat-obatan antara lain untuk penyembuhan penyakit kanker. Selain itu binatang karang tertentu yang mengandung kalsium karbonat telah dipergunakan untuk pengobatan tulang rapuh. Fungsi lain dari ekosistem terumbu karang yang hidup di dekat pantai ialah memberikan perlindungan bagi berbagai properti yang ada di kawasan pesisir dari ancaman pengikisan oleh ombak dan arus.
        </p>

        <p>
        Indonesia adalah negara kepulauan terbesar di dunia, terdiri dari lebih 17.000 buah pulau besar dan kecil, dengan panjang garis pantai mencapai hampir 81.000 km yang dilindungi oleh ekosistem terumbu karang, ekosistem padang lamun dan ekosistem mangrove. Indonesia merupakan salah satu Negara terpenting di dunia sebagai penyimpan keanekaeagaman hayati laut tertinggi. Di Indonesia terdapat 2,500 spesies of molluska, 2,000 spesies krustasea, 6 spesies penyu laut, 30 mamalia laut, dan lebih dari 2,500 spesies ikan laut.  Luas ekosistem terumbu karang Indonesia diperkirakan mencapai 2,5 juta ha*). Dengan ditemukannya 362 spesies scleractinia (karang batu) yang termasuk dalam 76 genera, Indonesia merupakan episenter dari sebaran karang batu dunia. Ekosistem pesisir (padang lamun, mangrove dan terumbu karang) memainkan peranan penting dalam industri wisata bahari, selain memberikan pelindungan pada kawasan pesisir dari hempasan ombak dan gerusan arus. Selain itu ekossistem pesisir ini merupakan tempat bertelur, membesar dan mencari makan dari beaneka ragam biota laut yang kesemuanya merupakan sumber produksi penting bagi masyarakat pesisir.
        </p>

      </div>
      <div class="artikel_lain">
        <a style="padding: 70px;height:400px" href="../Artikel/artikel2.php" class="card" style="width: 18rem;">
            <img style="border-radius: 150px;" src="../images/logo/logo2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Perkembangbiakan terumbu karang</p>
            </div>
          </a>
          <a style="padding: 70px;height:400px" href="../Artikel/artikel3.php" class="card" style="width: 18rem;">
            <img style="border-radius: 150px;" src="../images/logo/logo3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Fakta Unik</p>
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