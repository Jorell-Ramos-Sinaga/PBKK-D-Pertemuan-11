<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- 1. Header Halaman & Breadcrumb -->
<section class="py-5 bg-gradient-hero border-bottom position-relative overflow-hidden">
    <div class="container py-lg-3">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-2 small">
                        <li class="breadcrumb-item"><a href="<?= url_to('home') ?>" class="text-decoration-none text-muted"><i class="bi bi-house-door me-1"></i>Beranda</a></li>
                        <li class="breadcrumb-item active text-se-primary fw-semibold" aria-current="page">Tentang Kami</li>
                    </ol>
                </nav>
                <span class="badge badge-se-accent px-3 py-2 rounded-pill mb-2">Profil Platform</span>
                <h1 class="display-5 fw-extrabold text-se-primary mb-3">Tentang ShopEase</h1>
                <p class="lead text-muted mb-4 fs-6" style="max-width: 650px;">
                    Mengenal lebih dekat solusi digitalisasi e-commerce terpadu yang mempermudah interaksi antara pembeli, staf operasional, dan pengelola toko online.
                </p>
                <div class="d-flex flex-wrap gap-3 text-muted small">
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-check-circle-fill text-se-accent-2"></i>
                        <span>Pengalaman Belanja Nyaman</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-shield-check text-se-primary"></i>
                        <span>Transaksi Terverifikasi</span>
                    </div>
                </div>
            </div>

            <!-- Kotak Gambar Pengalaman Belanja Online -->
            <div class="col-lg-5">
                <div class="about-image-card card border-0 shadow-sm rounded-4 overflow-hidden position-relative" style="height: 260px; background-color: #EBF3FE;">
                    <img src="<?= base_url('assets/images/about-shopping.jpg') ?>" 
                         class="w-100 h-100 object-fit-cover" 
                         alt="Pengalaman Belanja Online ShopEase"
                         onerror="this.style.display='none'; this.nextElementSibling.classList.remove('d-none');">
                    
                    <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-center text-center p-4 d-none">
                        <div class="se-icon-box se-icon-accent mb-2" style="width: 56px; height: 56px; font-size: 1.75rem;">
                            <i class="bi bi-bag-heart"></i>
                        </div>
                        <h6 class="fw-bold text-se-primary mb-1">Pengalaman Belanja Digital</h6>
                        <small class="text-muted">Letakkan file <code>about-shopping.jpg</code> di <code>assets/images/</code></small>
                    </div>

                    <div class="position-absolute bottom-0 start-0 m-3 px-3 py-1 rounded-pill bg-white bg-opacity-95 shadow-sm border small fw-semibold text-se-primary">
                        <i class="bi bi-stars text-se-accent me-1"></i> Kemudahan Belanja Dari Mana Saja
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Latar Belakang & Tujuan Produk -->
<section class="py-5 bg-white border-bottom">
    <div class="container py-lg-3">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="badge badge-se-accent-2 px-3 py-2 rounded-pill mb-3">Latar Belakang & Masalah</span>
                <h2 class="fw-bold text-se-primary mb-3">Mengapa ShopEase Dikembangkan?</h2>
                <p class="text-muted mb-3">
                    Pada operasional toko online konvensional, transaksi belanja sering kali masih mengandalkan pencatatan manual melalui aplikasi pesan instan. Cara ini kerap menimbulkan berbagai kendala serius:
                </p>
                <div class="d-flex flex-column gap-3 mb-4">
                    <div class="d-flex align-items-start gap-3">
                        <div class="se-icon-box se-icon-accent flex-shrink-0" style="width: 40px; height: 40px; font-size: 1.1rem;">
                            <i class="bi bi-exclamation-triangle"></i>
                        </div>
                        <div>
                            <strong class="text-se-primary d-block small">Informasi Stok Tidak Konsisten</strong>
                            <span class="text-muted small">Pembeli sering memesan barang yang ternyata stok fisiknya telah habis di gudang.</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <div class="se-icon-box se-icon-primary flex-shrink-0" style="width: 40px; height: 40px; font-size: 1.1rem;">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <div>
                            <strong class="text-se-primary d-block small">Rekap Pesanan Memakan Waktu</strong>
                            <span class="text-muted small">Admin harus memeriksa mutasi rekening satu per satu tanpa integrasi bukti bayar.</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <div class="se-icon-box se-icon-warning flex-shrink-0" style="width: 40px; height: 40px; font-size: 1.1rem;">
                            <i class="bi bi-send-exclamation"></i>
                        </div>
                        <div>
                            <strong class="text-se-primary d-block small">Keterlambatan Update Resi</strong>
                            <span class="text-muted small">Pelanggan kesulitan melacak posisi pesanan karena pembaruan nomor resi tertunda.</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="se-card-static p-4 p-md-5 bg-light border rounded-4 position-relative">
                    <span class="badge badge-se-primary px-3 py-2 rounded-pill mb-3">Tujuan & Solusi</span>
                    <h3 class="h4 fw-bold text-se-primary mb-3">Misi Utama ShopEase</h3>
                    <p class="text-muted mb-4 small">
                        ShopEase hadir sebagai jembatan transformasi digital toko online guna menciptakan ekosistem transaksi yang transparan, rapi, dan tepercaya.
                    </p>
                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <li class="d-flex align-items-center gap-3">
                            <i class="bi bi-check-circle-fill text-se-accent-2 fs-5"></i>
                            <span class="text-se-primary fw-medium small">Katalog produk terstruktur yang mudah dijelajahi di web browser.</span>
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <i class="bi bi-check-circle-fill text-se-accent-2 fs-5"></i>
                            <span class="text-se-primary fw-medium small">Alur belanja lengkap mulai dari pemilihan hingga checkout otomatis.</span>
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <i class="bi bi-check-circle-fill text-se-accent-2 fs-5"></i>
                            <span class="text-se-primary fw-medium small">Verifikasi bukti transfer manual yang sistematis oleh tim admin.</span>
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <i class="bi bi-check-circle-fill text-se-accent-2 fs-5"></i>
                            <span class="text-se-primary fw-medium small">Pemberian nomor resi kurir untuk pelacakan barang real-time.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Fitur Utama Sistem Sesuai PRD -->
<section class="py-5" id="fitur-sistem">
    <div class="container py-lg-3">
        <div class="text-center mb-5">
            <span class="badge badge-se-accent px-3 py-2 rounded-pill mb-2">Kapabilitas Sistem</span>
            <h2 class="fw-bold text-se-primary">Fitur Unggulan ShopEase</h2>
            <p class="text-muted mx-auto" style="max-width: 580px;">
                Daftar modul inti yang dirancang sesuai studi kasus kebutuhan bisnis e-commerce modern.
            </p>
        </div>

        <div class="row g-4">
            <?php foreach ($features as $feat): ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="se-card h-100 p-4 d-flex flex-column">
                        <div class="se-icon-box se-icon-accent mb-3 transition-icon">
                            <i class="bi <?= esc($feat['icon']) ?>"></i>
                        </div>
                        <h5 class="fw-bold text-se-primary fs-6 mb-2"><?= esc($feat['title']) ?></h5>
                        <p class="text-muted small mb-0 flex-grow-1"><?= esc($feat['description']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 4. Peran Pengguna (User Roles) -->
<section class="py-5 bg-white border-top border-bottom" id="peran-pengguna">
    <div class="container py-lg-3">
        <div class="text-center mb-5">
            <span class="badge badge-se-primary px-3 py-2 rounded-pill mb-2">Hak Akses & Pengguna</span>
            <h2 class="fw-bold text-se-primary">Siapa Saja yang Menggunakan ShopEase?</h2>
            <p class="text-muted mx-auto" style="max-width: 580px;">
                Tiga tingkat peran pengguna dengan fungsi spesifik untuk menjaga kelancaran alur transaksi.
            </p>
        </div>

        <div class="row g-4">
            <?php foreach ($roles as $role): ?>
                <div class="col-12 col-md-4">
                    <div class="se-card h-100 p-4 text-center d-flex flex-column align-items-center">
                        <div class="se-icon-box se-icon-primary mb-3" style="width: 60px; height: 60px; font-size: 1.75rem;">
                            <i class="bi <?= esc($role['icon']) ?>"></i>
                        </div>
                        <span class="badge badge-se-accent-2 px-3 py-1 rounded-pill small mb-2"><?= esc($role['badge']) ?></span>
                        <h5 class="fw-bold text-se-primary fs-6 mb-3"><?= esc($role['name']) ?></h5>
                        <p class="text-muted small mb-0"><?= esc($role['description']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 5. Teknologi & Arsitektur -->
<section class="py-5" id="teknologi">
    <div class="container py-lg-3">
        <div class="text-center mb-5">
            <span class="badge badge-se-accent px-3 py-2 rounded-pill mb-2">Stack Teknologi</span>
            <h2 class="fw-bold text-se-primary">Dibangun dengan Teknologi Standar Industri</h2>
            <p class="text-muted mx-auto" style="max-width: 580px;">
                Memadukan arsitektur MVC yang terstruktur, kinerja backend yang tangguh, serta antarmuka modern yang responsif.
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            <?php foreach ($techStack as $tech): ?>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="se-card-static h-100 p-4 text-center bg-white border">
                        <div class="se-icon-box se-icon-accent mb-3" style="width: 50px; height: 50px; font-size: 1.5rem;">
                            <i class="bi <?= esc($tech['icon']) ?>"></i>
                        </div>
                        <span class="badge badge-se-primary px-2 py-1 small mb-2 d-inline-block"><?= esc($tech['category']) ?></span>
                        <h6 class="fw-bold text-se-primary mb-1"><?= esc($tech['name']) ?></h6>
                        <small class="text-muted d-block"><?= esc($tech['description']) ?></small>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 6. Catatan Konteks Akademik -->
<section class="py-5 bg-se-primary text-white">
    <div class="container py-lg-3">
        <div class="row align-items-center g-4">
            <div class="col-lg-8 text-center text-lg-start">
                <span class="badge bg-se-accent text-white px-3 py-2 rounded-pill fw-semibold mb-2">Konteks Akademik</span>
                <h3 class="fw-bold text-white mb-2">Studi Kasus Mata Kuliah Web Framework</h3>
                <p class="text-white-50 mb-0 small" style="line-height: 1.7;">
                    Proyek landing page ShopEase ini dikembangkan sebagai implementasi praktikum mata kuliah <strong>Web Framework</strong> dengan studi kasus Product Requirement Document (PRD) versi 1.0 tanggal 4 November 2026. Fokus tugas menekankan pada penerapan konsep <em>Model-View-Controller (MVC)</em>, routing terstruktur, layout inheritance, serta antarmuka web yang rapi dan responsif.
                </p>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <a href="<?= url_to('contact') ?>" class="btn btn-se-accent rounded-pill px-4 py-2 fw-semibold text-white shadow">
                    <i class="bi bi-chat-left-dots me-2"></i>Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
