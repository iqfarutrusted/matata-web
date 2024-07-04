<section class="hero" id="hero">
  <div class="jumbotron">
    <p>Selamat Datang di <span>Matata Brownies Kukus</span></p>
    <h1>Rasakan Bedanya <span>Bedakan Rasanya</span></h1>
  </div>
</section>


<section id="about" class="about">
  <h2 data-aos="fade-up">BRAND KAMI</h2>
  <div class="row" data-aos="fade-up">
    <div class="about-img">
      <img src="<?= base_url('assets/'); ?>img/matata-7.png" alt="Tentang Kami" />
    </div>
    <div class="content">
      <h3>Matata Brownies Kukus</h3>
      <p>
        Pada tahun 2022 Kami merubah brand Kami yang pada awalnya dikenali
        sebagai Fortuna Brownies Kukus menjadi Matata Brownies Kukus. Dengan
        perubahan brand ini Kami berharap agar bisa memperbaiki dan
        menjadikan Matata Brownies Kukus agar bisa dikenal seluruh
        Masyarakat Indonesia dan tetap menjaga kualitas dan rasa Brownies
        Kukus Kami yang Premium.
      </p>
    </div>
  </div>
</section>



<section id="menu" class="menu">
  <h2 data-aos="fade-up">PRODUK KAMI</h2>
  <p>
    " Produk yang Kami sajikan dengan cipta rasa dan kualitas yang paling
    baik "
  </p>
  <div class="row" data-aos="fade-up">

    <?php foreach ($produk as $item) : ?>
      <div class="menu-card">
        <a href="http://localhost/matatabrownieskukus-com-v2/katalog/<?php echo $item->id_produk; ?>"> <img loading="lazy" id="image_pk" src="<?= base_url('assets/img/') . $item->image_pk ?>" class="menu-card-img" />
          <h3 class="menu-card-title" id="nama_produk"><?= $item->nama_produk ?></h3>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section id="activity" class="activity">
  <h2 data-aos="fade-up">KEGIATAN & PROMO</h2>
  <div class="row" data-aos="fade-up">
    <div class="activity-card">
      <div class="activity-img">
        <img loading="lazy" src="<?= base_url('assets/'); ?>img/kegiatan2.png" alt="kegiatan1" />
      </div>
      <h3>Outlet Matata Brownies Kukus GKB</h3>
      <p>
        Berlokasi di dekat Outlet lama Fortuna Brownies Kukus JL. Kalimantan GKB
      </p>
    </div>
    <div class="activity-card">
      <div class="activity-img">
        <img loading="lazy" src="<?= base_url('assets/'); ?>img/kegiatan1.png" alt="kegiatan1" />
      </div>
      <h3>Grand Opening Outlet Malang !</h3>
      <p>
        Wah ! Ada yang baru nii di Malang, Matata Brownies Kukus kini hadir di Malang !
      </p>
    </div>

</section>