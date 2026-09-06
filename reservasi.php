<?php
$activePage = 'reservasi.php';
$pageTitle  = 'Reservasi';
require_once __DIR__ . '/includes/config.php';
$pageDesc = 'Reservasi kamar Hotel Melati online dengan mudah dan cepat.';
$pilihId = isset($_GET['kamar']) ? (int) $_GET['kamar'] : 0;
$pilihNama = '';
foreach ($daftarKamar as $m) { if ((int)$m['id'] === $pilihId) { $pilihNama = $m['nama']; break; } }
include __DIR__ . '/includes/header.php';
?>
    <section class="page-head"><div class="container">
      <h1>Reservasi Kamar</h1>
      <p>Isi data Anda untuk memesan kamar idaman Anda.</p>
    </div></section>

    <section class="section"><div class="container daftar-layout">
      <div class="panel-form" data-aos="fade-up">
        <h2 class="form-title">Formulir Reservasi</h2>
        <form id="form-reservasi" class="form">
          <label class="field"><span>Nama Lengkap *</span><input type="text" id="nama" placeholder="Nama Anda" required></label>
          <label class="field"><span>No. HP / WhatsApp *</span><input type="text" id="telepon" placeholder="08xxxxxxxxxx" required></label>
          <div class="grid-2-form">
            <label class="field"><span>Check-in *</span><input type="date" id="checkin" required></label>
            <label class="field"><span>Check-out *</span><input type="date" id="checkout" required></label>
          </div>
          <label class="field"><span>Pilih Kamar *</span>
            <select id="pilih-kamar" required>
              <option value="">-- Pilih kamar --</option>
              <?php foreach ($daftarKamar as $m): ?><option value="<?= (int)$m['id'] ?>" <?= (int)$m['id'] === $pilihId ? 'selected' : '' ?>><?= e($m['nama']) ?> â€” <?= rupiah($m['harga']) ?>/malam</option><?php endforeach; ?>
            </select>
          </label>
          <label class="field"><span>Jumlah Kamar</span><input type="number" id="jumlah" value="1" min="1" max="10"></label>
          <label class="field"><span>Catatan</span><textarea id="catatan" rows="3" placeholder="Permintaan khusus (opsional)..."></textarea></label>
          <button type="submit" class="btn"><i class="fa-solid fa-calendar-check"></i> Kirim Reservasi</button>
        </form>
      </div>
      <aside class="panel-info" data-aos="fade-left">
        <h3>Fasilitas Setiap Kamar</h3>
        <ul>
          <li><i class="fa-solid fa-check"></i> Free breakfast</li>
          <li><i class="fa-solid fa-check"></i> Wifi 100 Mbps</li>
          <li><i class="fa-solid fa-check"></i> AC &amp; smart TV</li>
          <li><i class="fa-solid fa-check"></i> Kolam renang &amp; spa</li>
        </ul>
        <div class="cta-lingkup"><i class="fa-solid fa-circle-info"></i> Konfirmasi reservasi maksimal 6 jam.</div>
      </aside>
    </div></section>

    <div class="modal" id="modal-sukses">
      <div class="modal-kotak">
        <div class="modal-ikon"><i class="fa-solid fa-check"></i></div>
        <h2>Reservasi Berhasil</h2>
        <p>Terima kasih <b id="nama-reservasi">-</b>!</p>
        <div class="modal-kode">No. Reservasi<b id="kode-reservasi">-</b></div>
        <p>Total <b id="total-reservasi">-</b></p>
        <button class="btn lebar" id="tutup-modal">Kembali ke Beranda</button>
      </div>
    </div>
<?php include __DIR__ . '/includes/footer.php'; ?>