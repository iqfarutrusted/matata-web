<?php
foreach ($produk as $item) : ?>
    <div class="container">
        <div class="image-container">
            <div class="big-image">
                <img src="<?= "assets/img/" . $item->image_1 ?>" alt="" id="zoom">
            </div>
            <div class="small-image">
                <img src="<?= "assets/img/" . $item->image_1 ?>" id="image_1">
                <img src="<?= "assets/img/" . $item->image_2 ?>" id="image_2">
                <img src="<?= "assets/img/" . $item->image_3 ?>" id="image_3">
            </div>
        </div>
        <div class="content">
            <h2 id="nama_produk"><?= $item->nama_produk ?></h2>
            <p id="deskripsi_produk"><?= $item->deskripsi_produk ?></p>
        </div>
    </div>
<?php endforeach; ?>