<?php if (isset($product)) : ?>
    <div class="container">
        <div class="image-container">
            <div class="big-image">
                <img src="<?= base_url('assets/img/' . $product->image_1); ?>" alt="<?php echo $product->nama_produk; ?>" id="zoom">
            </div>
            <div class="small-image">
                <img src="<?= base_url('assets/img/' . $product->image_1); ?>" id="image_1">
                <img src="<?= base_url('assets/img/' . $product->image_2); ?>" id="image_2">
                <img src="<?= base_url('assets/img/' . $product->image_3); ?>" id="image_3">
            </div>
        </div>
        <div class="content">
            <h2 id="nama_produk"><?= $product->nama_produk ?></h2>
            <p id="deskripsi_produk"><?= $product->deskripsi_produk ?></p>
        </div>
    </div>
<?php else : ?>
    <p>No product found.</p>
<?php endif; ?>