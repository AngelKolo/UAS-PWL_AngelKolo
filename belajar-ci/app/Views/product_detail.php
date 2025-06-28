<?php include('components/header.php'); ?>
<?php include('components/sidebar.php'); ?>

<div class="container" style="padding: 20px;">
    <h2><?= $product['name'] ?></h2>
    <p><?= $product['description'] ?></p>
    <p>Harga: Rp<?= number_format($product['price'], 0, ',', '.') ?></p>
    <a href="<?= base_url('cart/add/' . $product['id']) ?>" class="btn btn-primary">+ Tambah ke Keranjang</a>
</div>

<?php include('components/footer.php'); ?>
