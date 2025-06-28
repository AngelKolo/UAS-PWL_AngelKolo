<?php include('components/header.php'); ?>
<?php include('components/sidebar.php'); ?>

<div class="container mt-5">
    <h2 class="mb-4">Library Produk</h2>
    <div class="row">
        <?php foreach ($products as $product): ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('img/' . $product['image']) ?>" class="card-img-top" style="height: 200px; object-fit: cover;" alt="<?= $product['name'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= esc($product['name']) ?></h5>
                    <p class="card-text"><?= esc($product['description']) ?></p>
                    <p class="card-text"><strong>Rp<?= number_format($product['price'], 0, ',', '.') ?></strong></p>
                    <a href="<?= base_url('product/' . $product['id']) ?>" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include('components/footer.php'); ?>
