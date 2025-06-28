<?php include('components/header.php'); ?>
<?php include('components/sidebar.php'); ?>

<div class="container mt-4">
    <h1>Galeri</h1>
    <p>Berikut ini adalah dokumentasi dari kegiatan yang dilakukan oleh komunitas kami.</p>

    <div class="row">
        <!-- Gambar 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="<?= base_url('img/1.jpg') ?>" class="card-img-top" alt="Kegiatan 1">
                <div class="card-body">
                    <p class="card-text">Kegiatan 1 - Gathering Komunitas</p>
                </div>
            </div>
        </div>
        <!-- Gambar 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="<?= base_url('img/2.png') ?>" class="card-img-top" alt="Kegiatan 2">
                <div class="card-body">
                    <p class="card-text">Kegiatan 2 - Workshop</p>
                </div>
            </div>
        </div>
        <!-- Gambar 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="<?= base_url('img/3.jpeg') ?>" class="card-img-top" alt="Kegiatan 3">
                <div class="card-body">
                    <p class="card-text">Kegiatan 3 - Collaboration project</p>
                </div>
            </div>
        </div>
        <!-- Tambahin gambar lain di sini -->
    </div>
</div>

<?php include('components/footer.php'); ?>
