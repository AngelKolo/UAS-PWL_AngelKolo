<?= $this->include('components/header'); ?>
<?= $this->include('components/sidebar'); ?>

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Data Barang di Keranjang</h1>
  </div>

  <section class="section">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Keranjang</h5>

        <?php if (session()->getFlashdata('message')) : ?>
          <div class="alert alert-success"><?= session()->getFlashdata('message'); ?></div>
        <?php endif; ?>

        <div class="table-responsive">
          <table class="table datatable">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Foto</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($cartItems as $item) : ?>
                <tr>
                  <td><?= esc($item['name']); ?></td>
                  <td>
                <img src="<?= base_url('img/' . $item['image']); ?>" class="img-thumbnail" width="80" alt="<?= esc($item['name']); ?>">
                </td>
                  <td>Rp<?= number_format($item['price'], 0, ',', '.'); ?></td>
                  <td><?= $item['qty']; ?></td>
                  <td>Rp<?= number_format($item['price'] * $item['qty'], 0, ',', '.'); ?></td>
                  <td>
                    <a href="<?= base_url('/cart/remove/' . $item['id']); ?>" class="btn btn-danger btn-sm">Hapus</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        <hr>
        <div>
          <strong>Total = Rp<?= number_format($total, 0, ',', '.'); ?></strong>
        </div>

        <div class="mt-3">
          <a href="<?= base_url('/cart/clear'); ?>" class="btn btn-warning">Kosongkan Keranjang</a>
          <a href="<?= base_url('cart/invoice') ?>" class="btn btn-success">Cetak Invoice</a>
        </div>
      </div>
    </div>
  </section>
</main>

<?= $this->include('components/footer'); ?>
