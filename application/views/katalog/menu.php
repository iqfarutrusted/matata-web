 <!-- CONTENT SECTION -->
 <section class="katalog-produk">
   <h2>KATALOG PRODUK</h2>
   <div class="kategori">
     <a href="#" class="button-list" id="lumer" style="border-color: #E70000;">TOPPING LUMER</a>
     <a href="#" class="button-list" id="parutan-keju" style="border-color: #C28C00;">TOPING PARUTAN KEJU</a>
     <a href="#" class="button-list" id="kacang" style="border-color: #FF0101;">TOPING KACANG</a>
     <a href="#" class="button-list" id="panggang" style="border-color: #FF2E00;">BROWNIES PANGGANG</a>
     <a href="#" class="button-list" id="keju" style="border-color: #FFB800;">TOPING KEJU</a>
     <a href="#" class="button-list" id="chocolate" style="border-color: #943800;">CHOCOLATE ORIGINAL</a>
     <a href="#" class="button-list" id="buah" style="border-color: #FF00D6;">TOPING BUAH</a>
   </div>
 </section>

 <section id="menu" class="menu">
   <div class="row">
     <?php
      foreach ($produk as $item) : ?>
       <div class="menu-card">
         <a href="<?= "produk" . $item->id_produk ?>" class="chocolate" id="id_produk">
           <img loading="lazy" id="image_pk" src="<?= "assets/img/" . $item->image_pk ?>" class="menu-card-img" />
           <h3 class="menu-card-title" id="nama_produk"><?= $item->nama_produk ?></h3>
         </a>
       </div>

     <?php endforeach; ?>
   </div>
 </section>