# AGENT INSTRUCTIONS: Landing Page ShopEase (CodeIgniter 4)

Panduan untuk AI agent (Antigravity) yang membantu membuat **landing page ShopEase** dengan CodeIgniter 4. Baca dokumen ini **satu kali di awal**, lalu ikuti. Jangan dibaca ulang di setiap giliran.

---

## 0. ATURAN KERJA (PALING PENTING, BACA DULU)

### 0.1 Satu fase per giliran
- Kerjakan **satu fase saja** (lihat bagian 9), lalu **BERHENTI** dan tunggu pengguna mengetik **"lanjut"**.
- **Dilarang** memulai fase berikutnya secara otomatis, dan dilarang "sekalian" mengerjakan fase lain.
- Format laporan di akhir tiap fase (maksimal ±10 baris, tanpa penjelasan panjang):
  ```
  ✅ Fase X selesai
  File dibuat/diubah: <daftar path>
  Cara uji (kamu yang jalankan): <2-4 langkah singkat>
  Ketik "lanjut" untuk Fase X+1.
  ```

### 0.2 Hemat kuota: pengguna yang menguji, bukan agent
- **JANGAN** menjalankan server (`php spark serve`), membuka browser, mengambil screenshot, atau memakai browser tool untuk memverifikasi tampilan. **Pengguna yang akan menjalankan dan memeriksa sendiri.**
- **JANGAN** menjalankan perintah terminal apa pun kecuali pengguna memintanya. Kalau ada perintah yang perlu dijalankan, tulis perintahnya di laporan fase agar pengguna yang menjalankan.
- Verifikasi cukup dengan **membaca ulang kode yang baru kamu tulis** secara mental (sintaks PHP, nama variabel, path view, nama route). Jangan melakukan pengecekan berulang.
- Jika pengguna melaporkan error, minta **pesan error + nama file** (atau gunakan yang sudah mereka kirim), lalu perbaiki dengan **edit kecil yang tertarget**, bukan menulis ulang file utuh.

### 0.3 Hemat kuota: cara menulis kode
- Tulis **setiap file sekali, utuh, dan benar**. Hindari bolak-balik revisi file yang sama dalam satu fase.
- Buat **beberapa file sekaligus** dalam satu langkah bila memungkinkan.
- **Jangan** membaca/mendaftar seluruh isi folder atau file besar (`system/`, `vendor/`, file bawaan CI4) kecuali benar-benar perlu. Buka hanya file yang akan kamu ubah.
- **Jangan** membuat riset atau rencana panjang. Rencana cukup beberapa baris.
- **Jangan** menjelaskan kode panjang lebar di chat. Penjelasan lengkap hanya ditulis **sekali** di `README.md` pada fase terakhir.
- Tidak ada fitur tambahan di luar lingkup (bagian 2). Jika ingin menyarankan sesuatu, tulis satu baris saja di akhir laporan, jangan dikerjakan.

### 0.4 Gaya kode
- Kode **sederhana, rapi, dikomentari singkat dalam Bahasa Indonesia**. Pengguna adalah mahasiswa yang harus memahami dan menjelaskan kodenya.
- Hindari trik/abstraksi yang advanced. Gunakan fitur dasar CI4: Routes, Controller, View, layout (`extend`/`section`), `include`, helper `url` dan `form`, Validation, flash data.
- Tidak ada dependensi baru (tanpa Composer/npm). Bootstrap 5 dan Bootstrap Icons memakai **CDN**.

---

## 1. Konteks Tugas

**Mata kuliah:** Web Framework. **Framework:** CodeIgniter 4.

**Soal tugas:**
> Buatlah halaman landing page untuk aplikasi E-Commerce atau Toko Online ShopEase seperti pada deskripsi PRD studi kasus. Modifikasi routing, controller, dan view.

**Output yang diharapkan:**
- Minimum 3 halaman: **Home, About, Contact**
- Routing terkonfigurasi dengan benar
- Controller mengelola masing-masing halaman
- View menampilkan antarmuka yang **rapi dan responsif**

**Tambahan dari pengguna:** `README.md` berupa laporan lengkap dan `.gitignore` (lihat fase 6).

## 2. Lingkup (apa yang dikerjakan dan tidak)

**DIKERJAKAN:** hanya **landing page** 3 halaman (Home, About, Contact) beserta layout, routing, controller, view, CSS/JS ringan.

**TIDAK DIKERJAKAN** (jangan dibuat, cukup tampil sebagai tautan/tombol dekoratif `href="#"`): login, registrasi, katalog asli, keranjang, checkout, database, migration, panel admin. Fitur-fitur itu ada di PRD tapi **bukan** bagian tugas ini.

> Karena tidak ada database, data contoh (kategori, produk unggulan, dll.) berupa **array dummy di controller** yang dikirim ke view. Beri label "contoh data" di komentar kode.

## 3. Ringkasan PRD (sumber isi konten halaman)

Gunakan ringkasan ini agar isi landing page sesuai PRD. Jangan membaca ulang file docx.

- **Nama produk:** ShopEase – Online Store. Aplikasi toko online berbasis web dengan CodeIgniter 4, PHP, MySQL, Bootstrap 5.
- **Deskripsi:** membantu toko mengelola katalog produk, persediaan, pelanggan, pesanan, pembayaran, dan pengiriman. Customer menjelajah produk, menambah ke keranjang, checkout, mengirim bukti pembayaran, dan memantau status pesanan. Admin mengelola data dan memantau penjualan; operator menangani pemenuhan pesanan.
- **Latar belakang:** pencatatan manual/lewat pesan membuat info produk dan stok tidak konsisten, rekap pesanan sulit, dan update status terlambat. ShopEase mendigitalkan proses penjualan.
- **Tujuan:** katalog produk di browser; alur belanja dari pilih produk hingga checkout; pengelolaan pesanan, pembayaran, pengiriman; dashboard admin dan laporan dasar.
- **Fitur utama (untuk section "Fitur"):** katalog dan pencarian produk (filter kategori, urutkan, pagination); keranjang dan checkout; upload bukti pembayaran manual; verifikasi pembayaran oleh admin; pelacakan status pesanan dan pengiriman (kurir + nomor resi); dashboard dan laporan penjualan dasar; keamanan (hash password, validasi, filter akses per role).
- **Peran (untuk section "Siapa yang memakai"):** Customer, Administrator, Operator Toko.
- **Alur belanja (untuk section "Cara Belanja", 4 langkah):** Pilih produk → Masukkan keranjang → Checkout → Bayar dan pantau pesanan.
- **Teknologi:** CodeIgniter 4, PHP, MySQL, Bootstrap 5, arsitektur MVC.
- **Konteks akademik:** studi kasus mata kuliah Web Framework (PRD v1.0, 4 November 2026).

## 4. Lingkungan

| Item | Nilai |
|---|---|
| Framework | CodeIgniter 4 (dari ZIP, bukan Composer) |
| PHP | 8.1+ |
| Server | XAMPP, dijalankan **oleh pengguna** lewat `php spark serve` (http://localhost:8080) |
| Folder proyek | folder **baru terpisah**, misalnya `C:\xampp\htdocs\shopease` (bukan proyek lain) |
| Frontend | Bootstrap 5.3 CDN + Bootstrap Icons CDN + Google Fonts |

**Dikerjakan pengguna (bukan agent), sebelum Fase 1:** ekstrak ZIP CI4 ke folder proyek, ganti nama `env` menjadi `.env`, set `CI_ENVIRONMENT = development` dan `app.baseURL = 'http://localhost:8080/'`.
Agent cukup mengingatkan hal ini di awal Fase 1, tanpa memeriksanya lewat terminal.

## 5. Routing

Auto-routing nonaktif (bawaan CI4), jadi definisikan eksplisit di `app/Config/Routes.php`:

| Method | URL | Handler | Fungsi |
|---|---|---|---|
| GET | `/` | `HomeController::index` | Halaman Home |
| GET | `/about` | `AboutController::index` | Halaman About |
| GET | `/contact` | `ContactController::index` | Halaman Contact (form) |
| POST | `/contact/send` | `ContactController::send` | Proses form kontak |

- Beri **nama route** (`['as' => 'home']`, `'about'`, `'contact'`, `'contact.send'`) dan gunakan di view lewat `url_to('home')` dsb., atau `base_url()`. Pilih satu cara dan **konsisten**.
- Controller bawaan `Home.php` dan view `welcome_message.php` **dibiarkan** (tidak dihapus, tidak dipakai), kecuali pengguna minta dihapus.

## 6. Controller

Satu controller per halaman, tanpa model dan tanpa database.

**`app/Controllers/HomeController.php`**
- `index()` mengirim ke view: `title`, `active` (`'home'`), array dummy `categories` (6 kategori: Elektronik, Fashion, Rumah Tangga, Kecantikan, Olahraga, Buku & Alat Tulis, masing-masing nama + ikon Bootstrap Icons) dan `featuredProducts` (4 produk contoh: nama, harga, kategori, label).

**`app/Controllers/AboutController.php`**
- `index()` mengirim `title`, `active` (`'about'`), array `features` (fitur utama dari bagian 3), `roles` (3 peran), `techStack`.

**`app/Controllers/ContactController.php`**
- `index()` menampilkan form (`title`, `active` = `'contact'`).
- `send()` memproses form: validasi di server, jika gagal `redirect()->back()->withInput()->with('errors', $this->validator->getErrors())`; jika sukses `redirect()->to(...)->with('success', '...')`. **Data tidak disimpan** (tidak ada DB). Cukup tampilkan pesan sukses.
- Aturan validasi (pesan error Bahasa Indonesia):
  - `nama`: wajib, min 3 karakter
  - `email`: wajib, valid email
  - `subjek`: wajib, min 3 karakter
  - `pesan`: wajib, min 10 karakter

## 7. View dan Desain

### 7.1 Struktur
```
app/Views/
├── layouts/main.php          (kerangka: head, navbar, flash, konten, footer, script)
├── partials/
│   ├── navbar.php
│   ├── footer.php
│   └── flash.php             (pesan sukses / daftar error)
└── pages/
    ├── home.php
    ├── about.php
    └── contact.php
public/assets/
├── css/style.css
└── js/app.js                 (opsional, hanya jika benar-benar perlu)
```
View halaman memakai `<?= $this->extend('layouts/main') ?>` dan `<?= $this->section('content') ?> ... <?= $this->endSection() ?>`. Layout memakai `$title` dan `$active` (untuk menandai menu aktif). Semua output dinamis memakai `esc()`.

### 7.2 Arah visual
Bersih, modern, tepercaya, cocok untuk toko online. **Mobile-first dan responsif** (grid Bootstrap, navbar `collapse`). Hindari tampilan generik; berikan karakter lewat warna dan tipografi di bawah.

```css
:root {
  --se-primary:  #1B263B; /* navy: navbar, footer, judul */
  --se-accent:   #FF7A1A; /* oranye: tombol utama, highlight */
  --se-accent-2: #1FA37A; /* hijau: label positif */
  --se-bg:       #F7F9FC; /* latar halaman */
  --se-card:     #FFFFFF;
  --se-text:     #2B2F3A;
  --se-muted:    #6B7280;
  --se-radius:   14px;
}
```
- Font: `Plus Jakarta Sans` (judul) dan `Inter` (teks) dari Google Fonts, dengan fallback `system-ui, sans-serif`.
- Kartu: sudut membulat, bayangan halus, efek naik sedikit saat hover. Tombol utama oranye berbentuk pill.
- **Tanpa gambar eksternal/hotlink dan tanpa mengunduh aset.** Gunakan Bootstrap Icons, blok warna/gradient CSS, dan inisial/ikon sebagai pengganti foto produk.
- Kontras teks memadai, setiap input form punya `<label>`, ada atribut `alt`/`aria-label` yang relevan (sesuai NFR-010 di PRD).

### 7.3 Layout umum
- **Navbar** (sticky, `navbar-expand-lg`): logo teks "ShopEase" + ikon, menu **Home / About / Contact**, tombol dekoratif "Masuk" dan "Daftar" (`href="#"`). Menu aktif ditandai lewat `$active`.
- **Flash message** di atas konten (sukses = alert hijau, error = alert merah berisi daftar error).
- **Footer** gelap navy: deskripsi singkat, tautan cepat, info kontak, hak cipta "© 2026 ShopEase – Tugas Web Framework".

### 7.4 Halaman Home (`/`)
Urutan section:
1. **Hero:** judul besar (mis. "Belanja Online Jadi Lebih Mudah"), subjudul dari ringkasan PRD, dua tombol (Mulai Belanja, Pelajari Lebih Lanjut), blok visual dekoratif di sisi kanan (mis. kartu mengambang dengan ikon keranjang, kartu "Pesanan Terkirim").
2. **Statistik ringkas** (3-4 angka dekoratif, mis. produk, kategori, pelanggan).
3. **Kategori:** grid dari array `categories` (ikon + nama).
4. **Produk unggulan:** 4 kartu dari array `featuredProducts` (blok visual, nama, harga format Rupiah, label, tombol "Tambah ke Keranjang" dekoratif). Beri catatan kecil "Contoh data".
5. **Cara belanja:** 4 langkah (bagian 3) dengan nomor/ikon.
6. **Keunggulan:** 3-4 poin (pembayaran manual terverifikasi, pelacakan pesanan, stok terpantau, aman).
7. **CTA penutup:** ajakan bergabung/menghubungi, tombol ke `/contact`.

### 7.5 Halaman About (`/about`)
1. **Header halaman** (judul + breadcrumb sederhana).
2. **Tentang ShopEase:** deskripsi + latar belakang masalah (dari PRD) dan tujuan produk.
3. **Fitur utama:** grid kartu dari array `features`.
4. **Peran pengguna:** 3 kartu (Customer, Administrator, Operator).
5. **Teknologi:** deretan badge/ikon (CodeIgniter 4, PHP, MySQL, Bootstrap 5, MVC).
6. **Konteks akademik:** satu paragraf bahwa ini studi kasus mata kuliah Web Framework (PRD v1.0).

### 7.6 Halaman Contact (`/contact`)
1. **Header halaman** (judul + breadcrumb).
2. **Dua kolom:** kiri info kontak (alamat dummy, email, telepon, jam layanan, ikon), kanan **form kontak** (nama, email, subjek, pesan) yang POST ke `/contact/send` dengan `csrf_field()`.
3. Tampilkan pesan error per field memakai `old()` untuk mengisi ulang input dan kelas `is-invalid`/`invalid-feedback` Bootstrap.
4. **FAQ** singkat (accordion Bootstrap, 3-4 pertanyaan: cara memesan, cara membayar, melacak pesanan, dll.).

### 7.7 Keamanan dasar form
CSRF aktif untuk form (`csrf_field()`; pastikan filter `csrf` aktif di `app/Config/Filters.php`, jika belum, aktifkan di `$globals['before']`), validasi di server, output memakai `esc()`.

## 8. Konvensi

- PSR-12; class `PascalCase`, method/variabel `camelCase`, file view `snake_case`.
- Controller tipis, view tanpa logika berat (hanya loop/kondisi sederhana).
- Gunakan `base_url('assets/css/style.css')` untuk aset.
- Helper `url` dan `form` dimuat di controller (`helper(['url', 'form'])`) atau di `app/Config/Autoload.php`. Pilih satu cara dan konsisten.
- Format Rupiah di view: `'Rp ' . number_format($harga, 0, ',', '.')`.
- Komentar singkat, Bahasa Indonesia, hanya pada bagian penting.

## 9. Fase Pengerjaan

Ingat aturan 0.1: **satu fase per giliran, lalu berhenti dan tunggu "lanjut"**.

**Fase 1: Fondasi (routing, controller kosong, layout)**
- Ingatkan pengguna soal prasyarat (bagian 4).
- Isi `Routes.php` (bagian 5), buat 3 controller dengan data dummy (bagian 6), buat `layouts/main.php`, `navbar`, `footer`, `flash`, dan `style.css` dasar (variabel warna, font, gaya umum).
- Buat 3 view halaman **minimal** (judul + satu kalimat) supaya semua route sudah bisa dibuka.
- *Cara uji pengguna:* `php spark serve`, buka `/`, `/about`, `/contact`; cek navbar dan menu aktif. Opsional `php spark routes`.

**Fase 2: Halaman Home**
- Lengkapi `pages/home.php` sesuai 7.4 dan tambahkan gaya yang diperlukan ke `style.css`.
- *Cara uji:* buka `/`, cek tiap section, perkecil jendela browser (mode HP) untuk cek responsif.

**Fase 3: Halaman About**
- Lengkapi `pages/about.php` sesuai 7.5.
- *Cara uji:* buka `/about`, cek tampilan desktop dan HP.

**Fase 4: Halaman Contact + form**
- Lengkapi `pages/contact.php` (7.6) dan method `send()` beserta validasi.
- *Cara uji:* kirim form kosong (harus muncul error per field), kirim dengan data salah (email tidak valid), kirim data benar (muncul pesan sukses), cek input tidak hilang saat error (`old()`).

**Fase 5: Poles dan pengecekan konsistensi**
- Rapikan spasi, tipografi, urutan heading, atribut aksesibilitas, dan konsistensi tautan antar halaman. Pastikan tidak ada route/view/nama variabel yang tidak cocok.
- Lakukan ini dengan **membaca kode**, bukan menjalankan aplikasi. Perbaiki seperlunya dengan edit kecil.
- *Cara uji:* pengguna menelusuri semua halaman di desktop dan HP, lalu melaporkan bila ada yang janggal.

**Fase 6: Dokumentasi (README + .gitignore)**
- Lakukan **hanya setelah pengguna menyatakan web sudah selesai**. Awal fase, tanyakan **sekali**: nama lengkap dan NRP (jika belum diberikan, pakai placeholder `[ISI NAMA]` dan `[ISI NRP]`).
- Tulis `README.md` (bagian 10) dan `.gitignore` (bagian 11). Baca hanya file-file kunci yang perlu dikutip, **sekali saja**.
- *Cara uji:* pengguna menambahkan screenshot ke `docs/screenshots/` sesuai nama file di README.

## 10. Isi `README.md` (Laporan)

Tulis dalam **Bahasa Indonesia baku yang mudah dipahami mahasiswa**, berdasarkan kode **yang benar-benar ada di proyek** (kutipan kode harus cocok dengan file asli). Tulis sekali, jangan direvisi berulang. Susunan:

1. **Judul & identitas** (di bagian paling awal)
   ```
   # Laporan Tugas: Landing Page ShopEase
   | | |
   |---|---|
   | Nama | <nama> |
   | NRP | <NRP> |
   | Mata Kuliah | Web Framework |
   | Dosen | [ISI NAMA DOSEN] |
   | Tanggal | <tanggal pengerjaan> |
   ```
2. **Daftar isi** (tautan ke tiap bagian).
3. **Pendahuluan:** latar belakang singkat (dari PRD), tujuan tugas, dan lingkup (3 halaman, tanpa database).
4. **Ringkasan yang Dikerjakan:** tabel *File | Fungsi* untuk semua file yang dibuat/diubah (Routes, 3 controller, layout, partials, 3 view, CSS), plus daftar halaman dan URL-nya.
5. **Teknologi & Prasyarat:** CodeIgniter 4, PHP versi, XAMPP, Bootstrap 5 CDN, editor.
6. **Langkah Pembuatan (tutorial berurutan):** minimal langkah berikut, masing-masing dengan potongan kode singkat dan hasil yang diharapkan:
   1. Ekstrak CI4 dan konfigurasi `.env`
   2. Menjalankan server (`php spark serve`)
   3. Mendefinisikan routing
   4. Membuat controller
   5. Membuat layout dan partials
   6. Membuat view tiap halaman
   7. Menambahkan CSS dan responsivitas
   8. Membuat form kontak dan validasi
7. **Penjelasan Kode Penting:** jelaskan alasan dan cara kerja (bukan sekadar menyalin kode), termasuk:
   - `Routes.php`: `get`/`post`, nama route, hubungan URL → controller
   - Controller: alur `request → controller → view`, pengiriman data lewat array ke view
   - Layout: `extend`, `section`, `include`/partial, variabel `$title` dan `$active`
   - Pengulangan data dummy di view (`foreach`), `esc()`, format Rupiah
   - Validasi form: rules, `withInput()`, `old()`, pesan error, flash data (`with('success')`), `csrf_field()`
   - Responsivitas: grid Bootstrap, breakpoint, navbar collapse, media query kustom (jika ada)
8. **Cara Menjalankan Proyek:** langkah dari nol (ekstrak, `.env`, `php spark serve`, URL yang dibuka).
9. **Hasil (Screenshot):** tiap gambar diberi judul dan keterangan singkat. Gunakan path berikut (pengguna yang memasukkan file gambarnya):
   - `docs/screenshots/home-desktop.png`
   - `docs/screenshots/home-mobile.png`
   - `docs/screenshots/about-desktop.png`
   - `docs/screenshots/about-mobile.png`
   - `docs/screenshots/contact-desktop.png`
   - `docs/screenshots/contact-validasi-error.png`
   - `docs/screenshots/contact-sukses.png`

   Gunakan sintaks `![Judul](docs/screenshots/nama.png)` dan sisipkan catatan `<!-- Ganti dengan screenshot asli -->`. Buat folder `docs/screenshots/` dengan file `.gitkeep`.
10. **Kendala & Solusi:** diisi hanya dengan masalah yang benar-benar terjadi selama pengerjaan di chat. Jika tidak ada, tulis placeholder untuk diisi pengguna.
11. **Kesimpulan:** 1-2 paragraf (apa yang dicapai, apa yang dipelajari tentang routing, controller, view; pengembangan lanjutan sesuai PRD).
12. **Referensi:** dokumentasi CodeIgniter 4, Bootstrap 5, dan PRD ShopEase.

## 11. Isi `.gitignore`

Buat (atau ganti) `.gitignore` di root proyek dengan isi berikut:

```gitignore
# Environment (berisi konfigurasi lokal/rahasia; template 'env' tetap disimpan)
.env

# Dependensi
/vendor/
/node_modules/

# File sementara CodeIgniter (isi folder writable)
writable/cache/*
!writable/cache/index.html
!writable/cache/.htaccess
writable/logs/*
!writable/logs/index.html
!writable/logs/.htaccess
writable/session/*
!writable/session/index.html
!writable/session/.htaccess
writable/debugbar/*
!writable/debugbar/.gitkeep
writable/uploads/*
!writable/uploads/index.html
!writable/uploads/.htaccess

# Build / coverage / backup
/build/
/coverage/
*.bak
*.log

# Editor / IDE
.vscode/
.idea/
*.sublime-project
*.sublime-workspace

# Sistem operasi
.DS_Store
Thumbs.db
desktop.ini

# Agent / alat bantu lokal (opsional)
.gemini/
```

> Catatan untuk pengguna: `AGENT_INSTRUCTIONS_SHOPEASE.md` ini boleh dihapus atau disimpan, bebas. Jangan menghapus file `env` (tanpa titik) karena itu template konfigurasi CI4.

## 12. Kriteria Selesai

- [ ] `/`, `/about`, `/contact` terbuka tanpa error dan memakai layout yang sama
- [ ] Routing didefinisikan eksplisit di `Routes.php` (termasuk POST `/contact/send`)
- [ ] Ada tiga controller terpisah (Home, About, Contact), tiap halaman dikelola controllernya sendiri
- [ ] Tampilan rapi dan responsif di desktop dan HP; navbar collapse berfungsi
- [ ] Form kontak: validasi server, pesan error per field, `old()`, pesan sukses, CSRF aktif
- [ ] Isi halaman selaras dengan PRD ShopEase
- [ ] `README.md` lengkap (identitas di awal, langkah pembuatan, penjelasan kode, bagian screenshot)
- [ ] `.gitignore` sudah dibuat
