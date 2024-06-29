<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" maximum-scale="1.0," user-scalable="no" />
  <meta name="description" content="Matata Brownies Kukus atau dikenal sebagai Fortuna Brownies Kukus, Kami menjual Brownies Kukus dengan rasa yang spesial dan bahan berkualitas, Kunjungi Kami di Outlet Terdekat">
  <meta name="keyword" content="brownies kukus, fortuna brownies kukus, brownies fortuna, matata brownies kukus, brownies premium, brownies murah, resep brownies kukus, brownies coklat, brownies keju, brownies, brownies gresik">
  <title>Matata Brownies Kukus</title>
  <link rel="icon" href="img/icon.svg" />
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
  <nav>
    <div class="logo"><a href="<?= base_url('home') ?>"><img src="img/logo-pt-1-2.png" alt="" /></a></div>
    <ul>
      <li><a href="<?= base_url('katalog') ?>">KATALOG</a></li>
      <li><a href="<?= base_url('lokasi') ?>">LOKASI</a></li>
      <li><a href="<?= base_url('mitra') ?>">MITRA USAHA</a></li>
      <li><a href="<?= base_url('karir') ?>">KARIR</a></li>
      <li><a href="<?= base_url('profile') ?>">TENTANG KAMI</a></li>
    </ul>

    <div class="menu-toggle">
      <input type="checkbox" />
      <span></span>
      <span></span>
      <span></span>
    </div>
  </nav>

<header>
    <div class="information">
        <div class="info-img"><img src="img/ch2-2.svg" /></div>
        <div class="info-1">
            ERROR 404 <br />
            HALAMAN TIDAK DITEMUKAN
        </div>
        <div class="info-2">This Page is not found</div>
    </div>
</header>

    <footer>
      <div class="info-3" id="info-3">
        <img class="matata" src="img/matata-7.png" />
        <img class="fortuna" src="img/fortuna-1.png" />
        <br />
        <a href="https://www.facebook.com/officialfortunabrownieskukus" class="link-fb" id="link-fb">
          <img src="img/link-fb.png" alt="link-fb" />
        </a>
        <a href="https://www.tiktok.com/@matatabrowniesfortuna" class="link-tk" id="link-tk">
          <img src="img/link-tk.png" alt="link-tk" />
        </a>
        <a href="https://www.instagram.com/matatabrowniesfortuna/" class="link-ig" id="link-ig">
          <img src="img/link-ig.png" alt="link-ig" />
        </a>
        <a href="
        www.youtube.com/@MatataBrowniesKukus" class="link-yt" id="link-yt">
          <img src="img/link-yt.png" alt="link-yt" />
        </a>
      </div>
      <!-- <div class="info-4">
        <p>COPYRIGHT © 2023 FORTUNABROWNIES&nbsp;&nbsp;ALL RIGHTS RESERVED.</p>
      </div> -->
      <div class="info-5" id="info-5">
        <div class="title" id="title">
          <span>NO TELP</span>
          <span>EMAIL</span>
          <span>ALAMAT</span>
        </div>
        <div class="information" id="information" style="margin-right: 0">
          <span>+6281331307144</span><br />
          <span>media@matatabrownieskukus.com</span><br />
          <span class="title" id="title" style="margin-right: 0">HEAD OFFICE</span>
          <span></span><br />
          <span>Kota Baru, Jl. Kalimantan No 36, Wonorejo, Yosowilangun,Kabupaten
            Gresik, Jawa Timur 61152</span><br />
          <span class="title" id="title">FACTORY</span><br />
          <span>Jl. Raya Pedurungan, Kel. Wedoro, Kec. Glagah</span>
          <span></span>
        </div>
      </div>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/zoomsl.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      $(document).ready(function() {
        $('.small-image img').click(function() {
          var image = $(this).attr('src');
          $('.big-image img').attr('src', image);
        });

        $('#zoom').imagezoomsl();
        zoomrange: [4, 4]

      });
    </script>
    </body>

    </html>