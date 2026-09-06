<?php
$activePage = 'index.php';
$pageTitle  = 'Beranda';
require_once __DIR__ . '/includes/config.php';
$pageDesc = $namaHotel . ' - ' . strtolower($tagline) . '. Kamar deluxe, superior, family, dan suite dengan view pantai.';
include __DIR__ . '/includes/header.php';
?>

    <div class="brand-strip"><div class="container marquee">
      <span>Free Breakfast</span><i class="fa-solid fa-star"></i><span>Kolam Renang</span><i class="fa-solid fa-star"></i><span>Wifi Cepat</span><i class="fa-solid fa-star"></i><span>View Pantai</span><i class="fa-solid fa-star"></i><span>Free Breakfast</span><i class="fa-solid fa-star"></i><span>Kolam Renang</span><i class="fa-solid fa-star"></i><span>Wifi Cepat</span><i class="fa-solid fa-star"></i><span>View Pantai</span><i class="fa-solid fa-star"></i>
    </div></div>

    <section class="hero">
      <div class="blob blob-1"></div>
      <div class="blob blob-2"></div>
      <div class="container hero-dalam">
        <div class="hero-teks">
          <span class="hero-badge" data-aos="fade-up">Selamat Datang</span>
          <h1 data-aos="fade-up" data-aos-delay="80"><span class="grad">Stay</span> Nyaman Seperti di Rumah</h1>
          <p data-aos="fade-up" data-aos-delay="160">Nikmati kenyamanan kamar mewah, fasilitas lengkap, dan pemandangan pantai yang menenangkan untuk liburan tak terlupakan.</p>
          <div class="hero-aksi" data-aos="fade-up" data-aos-delay="240">
            <a href="kamar.php" class="btn hvr-sweep-to-right"><i class="fa-solid fa-bed"></i> Lihat Kamar</a>
            <a href="reservasi.php" class="btn btn-ghost hvr-sweep-to-right"><i class="fa-solid fa-calendar-check"></i> Reservasi</a>
          </div>
          <div class="hero-stat" data-aos="fade-up" data-aos-delay="320">
            <div><b>120+</b><span>Kamar</span></div>
            <div><b>4.9<i class="fa-solid fa-star"></i></b><span>Rating</span></div>
            <div><b>15th</b><span>Pengalaman</span></div>
          </div>
        </div>
        <div class="hero-visual" data-aos="fade-left" data-aos-delay="200">
          <div class="hero-card utama">
            <span class="promo-label">Promo Weekday</span>
            <h3>Diskon hingga 20%</h3>
            <p>Untuk reservasi hari Senin-Kamis</p>
            <div class="harga-hero">Mulai <em>Rp 600rb</em></div>
            <a href="kamar.php" class="btn btn-kecil btn-putih hvr-sweep-to-right">Pilih Kamar</a>
          </div>
          <div class="hero-badge-card"><i class="fa-solid fa-bath"></i><div><b>Free Breakfast</b><span>Setiap pagi</span></div></div>
          <div class="hero-mini-card"><i class="fa-solid fa-wifi"></i><div><b>Wifi 100 Mbps</b><span>Gratis semua kamar</span></div></div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="judul-section" data-aos="fade-up">
          <div><span class="eyebrow">Populer</span><h2>Kamar Andalan</h2></div>
          <a href="kamar.php" class="link-semua">Lihat Semua <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="menu-grid" id="menu-grid">
          <?php foreach (array_slice($daftarKamar, 0, 6) as $i => $m): ?>
          <div data-aos="fade-up" data-aos-delay="<?= ($i % 3) * 60 ?>"><?= kartu_kamar($m) ?></div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="promo-band">
      <div class="container promo-band-dalam" data-aos="fade-up">
        <div><span class="eyebrow light">Paket Hemat</span><h2>Reservasi <em>3 malam</em> dapatkan gratis city tour</h2><p>Berlaku untuk semua tipe kamar.</p></div>
        <a href="reservasi.php" class="btn btn-putih hvr-sweep-to-right">Pesan Sekarang</a>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="judul-section" data-aos="fade-up"><div><span class="eyebrow">Fasilitas</span><h2>Nikmati Fasilitas Kami</h2></div></div>
        <div class="kategori-grid">
          <?php $ik = ['fa-person-swimming','fa-utensils','fa-dumbbell','fa-spa']; $gk = ['gk-1','gk-2','gk-3','gk-4']; $no=0; foreach (['Kolam Renang','Restoran','Fitness Center','Spa & Massage','Ruang Rapat','Shuttle Bandara'] as $k): ?>
          <a href="reservasi.php" class="kategori-card <?= $gk[$no % 4] ?>" data-aos="fade-up" data-aos-delay="<?= $no*60 ?>"><i class="fa-solid <?= $ik[$no % 4] ?>"></i><h3><?= $k ?></h3><span>Lihat â†’</span></a>
          <?php $no++; endforeach; ?>
        </div>
      </div>
    </section>

    <section class="section tentang-ringkas">
      <div class="container tentang-grid" data-aos="fade-up">
        <div class="ttg-visual"><div class="ttg-gambar"><i class="fa-solid fa-hotel"></i></div><div class="ttg-badge">15+ Th</div></div>
        <div class="ttg-teks">
          <span class="eyebrow">Tentang Kami</span>
          <h2>Harmoni kenyamanan dan kemewahan</h2>
          <p>Sejak 2011, Hotel Melati melayani tamu dengan standar pelayanan tinggi. Kamar bersih, staf ramah, dan pemandangan pantai yang indah.</p>
          <ul>
            <li><i class="fa-solid fa-check"></i> Lokasi strategis tepi pantai</li>
            <li><i class="fa-solid fa-check"></i> Housekeeping 2x sehari</li>
            <li><i class="fa-solid fa-check"></i> Fitness center &amp; spa</li>
          </ul>
          <a href="kamar.php" class="btn hvr-sweep-to-right">Lihat Kamar</a>
        </div>
      </div>
    </section>

<?php include __DIR__ . '/includes/footer.php'; ?>