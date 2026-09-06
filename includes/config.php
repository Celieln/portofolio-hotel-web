<?php
/* ============================================================
 * KONFIGURASI SITUS HOTEL — Hotel Melati
 * ============================================================ */

$namaHotel = 'Hotel Melati';
$tagline   = 'Kenyamanan Mewah, Harga Bersahabat';
$promoStrip = 'Promo Weekday diskon 20% • Free breakfast untuk reservasi di atas 2 malam • Check-in 14.00';

$kamarDefault = [
    ['id' => 1, 'nama' => 'Deluxe Room', 'kategori' => 'Deluxe', 'harga' => 750000, 'hargaAsli' => 900000, 'label' => 'Terlaris', 'singkat' => 'DLX', 'kapasitas' => 2, 'luas' => '28 m2', 'kamar_tidur' => 1, 'warna' => ['#10b981', '#059669'], 'deskripsi' => 'Kamar nyaman dengan view kota, kasur king, dan perlengkapan premium.'],
    ['id' => 2, 'nama' => 'Superior Room', 'kategori' => 'Superior', 'harga' => 600000, 'hargaAsli' => 0, 'label' => 'Baru', 'singkat' => 'SPR', 'kapasitas' => 2, 'luas' => '24 m2', 'kamar_tidur' => 1, 'warna' => ['#0d9488', '#0f766e'], 'deskripsi' => 'Ruangan tenang dengan pemandangan taman dan fasilitas lengkap.'],
    ['id' => 3, 'nama' => 'Family Room', 'kategori' => 'Family', 'harga' => 1050000, 'hargaAsli' => 0, 'label' => '', 'singkat' => 'FR', 'kapasitas' => 4, 'luas' => '48 m2', 'kamar_tidur' => 2, 'warna' => ['#d97706', '#b45309'], 'deskripsi' => 'Kamar besar untuk keluarga dengan 2 kamar tidur dan ruang tamu.'],
    ['id' => 4, 'nama' => 'Superior Twin', 'kategori' => 'Superior', 'harga' => 680000, 'hargaAsli' => 790000, 'label' => 'Diskon', 'singkat' => 'ST', 'kapasitas' => 3, 'luas' => '26 m2', 'kamar_tidur' => 2, 'warna' => ['#0284c7', '#0369a1'], 'deskripsi' => 'Dua tempat tidur twin untuk kenyamanan bersama.'],
    ['id' => 5, 'nama' => 'Deluxe Ocean View', 'kategori' => 'Deluxe', 'harga' => 1250000, 'hargaAsli' => 0, 'label' => 'Terlaris', 'singkat' => 'DV', 'kapasitas' => 2, 'luas' => '32 m2', 'kamar_tidur' => 1, 'warna' => ['#2563eb', '#1d4ed8'], 'deskripsi' => 'Pemandangan laut dari balkon pribadi dengan kamar mandi marble.'],
    ['id' => 6, 'nama' => 'Presidential Suite', 'kategori' => 'Suite', 'harga' => 2500000, 'hargaAsli' => 3000000, 'label' => 'Diskon', 'singkat' => 'PS', 'kapasitas' => 4, 'luas' => '80 m2', 'kamar_tidur' => 2, 'warna' => ['#9333ea', '#7e22ce'], 'deskripsi' => 'Suite mewah dengan private dining, jacuzzi, dan butler service.'],
];

$kategoriKamar = ['Semua', 'Superior', 'Deluxe', 'Family', 'Suite'];
$statusReservasi = ['Baru', 'Dikonfirmasi', 'Check-in', 'Check-out', 'Dibatalkan'];

$kontak = ['alamat' => 'Jl. Pantai Kedewatan No. 88, Bali', 'telepon' => '(0361) 555 9021', 'wa' => '6281234567890', 'email' => 'reservasi@hotelmelati.id', 'jam' => 'Reservasi 24 jam'];

$menuNav = [
    ['label' => 'Beranda', 'url' => 'index.php'],
    ['label' => 'Kamar', 'url' => 'kamar.php'],
    ['label' => 'Reservasi', 'url' => 'reservasi.php'],
];

$dataDir = __DIR__ . '/../data';
$kamarFile = $dataDir . '/kamar.json';
$reservasiFile = $dataDir . '/reservasi.json';

function e($v) { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); }
function rupiah($n) { return 'Rp ' . number_format((int) $n, 0, ',', '.'); }
function baca_json($file, $default = []) { if (!is_file($file)) return is_array($default) ? $default : []; $d = json_decode(file_get_contents($file), true); return is_array($d) ? $d : $default; }
function tulis_json($file, $data) { $dir = dirname($file); if (!is_dir($dir)) mkdir($dir, 0777, true); file_put_contents($file, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)); }

$daftarKamar = baca_json($kamarFile, $kamarDefault);

function kartu_kamar($m) {
    $badge = '';
    if (!empty($m['label'])) { $cls = $m['label'] === 'Terlaris' ? 'badge-terlaris' : ($m['label'] === 'Baru' ? 'badge-baru' : 'badge-diskon'); $badge = '<span class="badge ' . $cls . '">' . e($m['label']) . '</span>'; }
    $diskon = '';
    if ((int) $m['hargaAsli'] > 0) { $diskon = '<span class="harga-asli">' . rupiah($m['hargaAsli']) . '</span>'; if ($m['label'] !== 'Diskon') { $badge .= '<span class="badge badge-diskon">-' . (int) round((1 - $m['harga'] / $m['hargaAsli']) * 100) . '%</span>'; } }
    $w0 = e($m['warna'][0]); $w1 = e($m['warna'][1]);
    return '<article class="card" data-id="' . (int) $m['id'] . '">'
        . '<div class="card-gambar" style="background:linear-gradient(135deg,' . $w0 . ',' . $w1 . ')"><div class="img-lapis">' . e($m['singkat']) . '</div>' . $badge . '</div>'
        . '<div class="card-body"><span class="card-kat">' . e($m['kategori']) . '</span>'
        . '<h3 class="card-nama">' . e($m['nama']) . '</h3>'
        . '<p class="card-desk">' . e($m['deskripsi']) . '</p>'
        . '<div class="meta-kamar"><span><i class="fa-solid fa-people-group"></i> ' . (int) $m['kapasitas'] . ' org</span><span><i class="fa-solid fa-vector-square"></i> ' . e($m['luas']) . '</span></div>'
        . '<div class="harga">' . rupiah($m['harga']) . '<span class="per-malam">/ malam</span>' . $diskon . '</div>'
        . '<a class="btn-tambah" href="reservasi.php?kamar=' . (int) $m['id'] . '">Pesan Kamar</a>'
        . '</article>';
}