# Contributing

Kami senang jika Anda berkontribusi pada proyek ini! Berikut panduannya:

## Cara Berkontribusi

1. **Fork** repository ini
2. **Clone** hasil fork ke lokal:
   ```bash
   git clone https://github.com/<username>/portofolio-<proyek>.git
   ```
3. Buat **branch** baru:
   ```bash
   git checkout -b fitur/nama-fitur
   ```
4. Lakukan perubahan, lalu **commit**:
   ```bash
   git add .
   git commit -m "feat: menambahkan fitur baru"
   ```
5. **Push** dan buat **Pull Request**:
   ```bash
   git push origin fitur/nama-fitur
   ```

## Guidelines

- Gunakan pesan commit yang jelas (conventional commits)
- Pastikan kode tetap rapi dan konsisten dengan gaya yang ada
- Jangan commit file sensitif (config, credentials, database)
- Uji perubahan di lingkungan lokal sebelum membuat PR

## Struktur Proyek

Tampilan depan (front-end) tersimpan dalam file PHP di root. Setiap halaman memuat konten dinamis dari folder `includes` dan `data`.

Terima kasih sudah berkontribusi!
