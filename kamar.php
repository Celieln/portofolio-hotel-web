<?php
$activePage = 'kamar.php';
$pageTitle  = 'Kamar';
require_once __DIR__ . '/includes/config.php';
$pageDesc = 'Jelajahi kamar Hotel Melati: deluxe, superior, family, dan suite.';
include __DIR__ . '/includes/header.php';
?>
    <section class="page-head"><div class="container">
      <h1>Pilih Kamar</h1>
      <p>Temukan kamar yang paling cocok untuk kenyamanan Anda.</p>
    </div></section>

    <section class="section"><div class="container">
      <div class="toolbar">
        <div class="filter-kategori" id="filter-kategori" data-aktif="Semua">
          <?php foreach ($kategoriKamar as $k): ?><button class="btn-filter<?= $k === 'Semua' ? ' aktif' : '' ?>" data-kategori="<?= e($k) ?>"><?= e($k) ?></button><?php endforeach; ?>
        </div>
        <input type="text" class="cari" id="cari-kamar" placeholder="Cari kamar...">
      </div>
      <p class="jumlah-produk" id="jumlah-produk"></p>
      <div class="menu-grid" id="menu-grid"></div>
    </div></section>
<?php include __DIR__ . '/includes/footer.php'; ?>