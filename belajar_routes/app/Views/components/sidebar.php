<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link <?= service('uri')->getSegment(1) == '' ? '' : 'collapsed' ?>" href="<?= base_url('/') ?>">
        <i class="bi bi-house-door"></i>
        <span>Home</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link <?= service('uri')->getSegment(1) == 'keranjang' ? '' : 'collapsed' ?>" href="<?= base_url('/keranjang') ?>">
        <i class="bi bi-cart4"></i>
        <span>Keranjang</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link <?= service('uri')->getSegment(1) == 'produk' ? '' : 'collapsed' ?>" href="<?= base_url('/produk') ?>">
        <i class="bi bi-box-seam"></i>
        <span>Produk</span>
      </a>
    </li>

  </ul>

</aside><!-- End Sidebar -->
