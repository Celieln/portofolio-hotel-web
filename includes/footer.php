<?php require_once __DIR__ . '/config.php'; ?>
  </main>

  <footer class="footer">
    <div class="container footer-grid">
      <div class="footer-kol">
        <a href="index.php" class="logo"><i class="fa-solid fa-hotel"></i> Hotel<span>Melati</span></a>
        <p>Butik hotel mewah di tepi pantai dengan layanan terbaik. Semua kamar dilengkapi fasilitas modern dan pemandangan yang memukau.</p>
      </div>
      <div class="footer-kol">
        <h4>Navigasi</h4>
        <?php foreach ($menuNav as $m): ?><a href="<?= e($m['url']) ?>"><?= e($m['label']) ?></a><?php endforeach; ?>
      </div>
      <div class="footer-kol">
        <h4>Informasi</h4>
        <p>Check-in<br><b>14.00 WITA</b></p>
        <p>Check-out<br><b>12.00 WITA</b></p>
      </div>
      <div class="footer-kol">
        <h4>Kontak</h4>
        <p><i class="fa-solid fa-location-dot"></i> <?= e($kontak['alamat']) ?></p>
        <p><i class="fa-solid fa-phone"></i> <?= e($kontak['telepon']) ?></p>
        <p><i class="fa-solid fa-envelope"></i> <?= e($kontak['email']) ?></p>
      </div>
    </div>
    <div class="footer-bawah">Copyright <?= date('Y') ?> <?= e($namaHotel) ?>. Seluruh hak cipta dilindungi.</div>
  </footer>

  <script>window.KAMAR_DATA = <?= json_encode($daftarKamar, JSON_UNESCAPED_UNICODE) ?>;</script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="assets/script.js"></script>
  <div class="cursor-bintang" id="kursorBintang" aria-hidden="true"><span class="titik"><i class="fa-solid fa-star"></i></span></div>
  <script>
  (function () {
    if (window.matchMedia('(max-width:768px)').matches) return;
    var k = document.getElementById('kursorBintang'), n = 0;
    document.addEventListener('mousemove', function (e) {
      k.style.left = e.clientX + 'px'; k.style.top = e.clientY + 'px';
      var c = document.createElement('span'); c.className = 'cincin'; k.appendChild(c); setTimeout(function(){ c.remove(); }, 1150);
      if (n++ % 4 === 0) { var s = document.createElement('span'); s.className = 'kilau'; k.appendChild(s); setTimeout(function(){ s.remove(); }, 1450); }
    });
  })();
  </script>
</body>
</html>