<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- 1. Hero Section -->
<section class="py-5 hero-section-with-bg position-relative overflow-hidden">
    <div class="container py-lg-4">
        <div class="row align-items-center g-5">
            <!-- Kolom Teks Hero -->
            <div class="col-lg-6 text-center text-lg-start">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-white border shadow-sm mb-3">
                    <span class="badge bg-se-accent text-white rounded-pill px-2">Baru</span>
                    <span class="small fw-semibold text-se-primary">Platform E-Commerce Modern & Terpercaya</span>
                </div>
                <h1 class="display-4 fw-extrabold text-se-primary mb-3 lh-sm">
                    Belanja Online Jadi Lebih <span class="text-se-accent">Mudah</span> & Menyenangkan
                </h1>
                <p class="lead text-muted mb-4 fs-6">
                    ShopEase mendigitalkan transaksi belanja Anda. Jelajahi aneka produk terbaik, nikmati proses checkout yang cepat, konfirmasi pembayaran praktis, dan pantau pengiriman secara langsung.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center justify-content-lg-start">
                    <a href="#produk-unggulan" class="btn btn-se-accent btn-lg rounded-pill px-4 py-2 fs-6 fw-semibold shadow-sm">
                        <i class="bi bi-cart3 me-2"></i>Mulai Belanja
                    </a>
                    <a href="<?= url_to('about') ?>" class="btn btn-se-outline btn-lg rounded-pill px-4 py-2 fs-6">
                        <i class="bi bi-compass me-2"></i>Pelajari Lebih Lanjut
                    </a>
                </div>
                <!-- Mini info keunggulan di hero -->
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start gap-4 mt-4 pt-2 text-muted small">
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-patch-check-fill text-se-accent-2"></i>
                        <span>100% Produk Asli</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-shield-lock-fill text-se-primary"></i>
                        <span>Pembayaran Aman</span>
                    </div>
                </div>
            </div>

            <!-- Kolom Visual Dekoratif Hero -->
            <div class="col-lg-6">
                <div class="hero-showcase position-relative mx-auto">
                    <!-- Kartu Utama Showcase -->
                    <div class="card border-0 shadow-lg p-4 rounded-4 bg-white position-relative z-1">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="d-flex align-items-center gap-3">
                                <div class="se-icon-box se-icon-accent">
                                    <i class="bi bi-shop"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-0 text-se-primary">ShopEase Store</h6>
                                    <small class="text-muted">Katalog Resmi Pilihan</small>
                                </div>
                            </div>
                            <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-2">
                                <i class="bi bi-check-circle me-1"></i> Terverifikasi
                            </span>
                        </div>

                        <!-- Preview Item 1: Smartwatch -->
                        <div class="p-3 bg-light rounded-3 mb-3 border d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded-3 overflow-hidden d-flex align-items-center justify-content-center border" style="width: 50px; height: 50px; background-color: #EBF3FE;">
                                    <img src="<?= base_url('assets/images/products/smartwatch.jpg') ?>" 
                                         class="w-100 h-100 object-fit-cover" 
                                         alt="Smartwatch Ultra Pro X"
                                         onerror="this.style.display='none'; this.nextElementSibling.classList.remove('d-none');">
                                    <i class="bi bi-smartwatch text-primary fs-4 d-none"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0 fw-semibold text-se-primary">Smartwatch Ultra Pro X</h6>
                                    <small class="text-muted">Kategori: Elektronik</small>
                                </div>
                            </div>
                            <span class="fw-bold text-se-accent">Rp 849.000</span>
                        </div>

                        <!-- Preview Item 2: Headphone -->
                        <div class="p-3 bg-light rounded-3 mb-4 border d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded-3 overflow-hidden d-flex align-items-center justify-content-center border" style="width: 50px; height: 50px; background-color: #F5F3FF;">
                                    <img src="<?= base_url('assets/images/products/headphone.jpg') ?>" 
                                         class="w-100 h-100 object-fit-cover" 
                                         alt="Wireless Headphone"
                                         onerror="this.style.display='none'; this.nextElementSibling.classList.remove('d-none');">
                                    <i class="bi bi-headphones text-purple fs-4 d-none" style="color: #7C3AED;"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0 fw-semibold text-se-primary">Wireless Headphone</h6>
                                    <small class="text-muted">Kategori: Audio</small>
                                </div>
                            </div>
                            <span class="fw-bold text-se-accent">Rp 549.000</span>
                        </div>

                        <div class="d-flex align-items-center justify-content-between pt-2 border-top">
                            <span class="text-muted small">Status Pesanan:</span>
                            <span class="badge bg-se-accent-2 text-white px-3 py-2 rounded-pill small">
                                <i class="bi bi-box-seam me-1"></i> Siap Dikirim Hari Ini
                            </span>
                        </div>
                    </div>

                    <!-- Kartu Mengambang Dekoratif 1 (Kanan Bawah) -->
                    <div class="floating-badge floating-badge-bottom card border-0 shadow-lg p-3 rounded-4 bg-white position-absolute">
                        <div class="d-flex align-items-center gap-3">
                            <div class="se-icon-box se-icon-accent-2 rounded-circle" style="width: 44px; height: 44px;">
                                <i class="bi bi-truck fs-5"></i>
                            </div>
                            <div>
                                <small class="text-muted d-block lh-1">Pelacakan Real-time</small>
                                <span class="fw-bold text-se-primary small">Pesanan Sedang Dikirim</span>
                            </div>
                        </div>
                    </div>

                    <!-- Kartu Mengambang Dekoratif 2 (Kiri Atas) -->
                    <div class="floating-badge floating-badge-top card border-0 shadow p-2 px-3 rounded-pill bg-white position-absolute">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-shield-check text-se-accent fs-5"></i>
                            <span class="fw-semibold text-se-primary small">Verifikasi Bukti Transfer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Ringkasan Statistik -->
<section class="py-4 bg-white border-top border-bottom">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-6 col-md-3">
                <div class="p-2">
                    <h3 class="display-6 fw-bold text-se-primary mb-1">1.500+</h3>
                    <p class="text-muted small mb-0 fw-medium">Produk Berkualitas</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-2">
                    <h3 class="display-6 fw-bold text-se-accent mb-1">6</h3>
                    <p class="text-muted small mb-0 fw-medium">Kategori Pilihan</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-2">
                    <h3 class="display-6 fw-bold text-se-accent-2 mb-1">99,8%</h3>
                    <p class="text-muted small mb-0 fw-medium">Kepuasan Pelanggan</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-2">
                    <h3 class="display-6 fw-bold text-se-primary mb-1">24/7</h3>
                    <p class="text-muted small mb-0 fw-medium">Dukungan Pengguna</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Kategori Produk -->
<section class="py-5" id="kategori">
    <div class="container py-lg-4">
        <div class="text-center mb-5">
            <span class="badge badge-se-accent px-3 py-2 rounded-pill mb-2">Eksplorasi Katalog</span>
            <h2 class="fw-bold text-se-primary">Pilihan Kategori Terpopuler</h2>
            <p class="text-muted mx-auto" style="max-width: 550px;">Temukan kebutuhan Anda dengan cepat lewat kategori terstruktur yang siap dijelajahi.</p>
        </div>

        <div class="row g-4">
            <?php foreach ($categories as $cat): ?>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="se-card h-100 p-3 text-center d-flex flex-column align-items-center justify-content-center">
                        <div class="se-icon-box se-icon-primary mb-3 transition-icon">
                            <i class="bi <?= esc($cat['icon']) ?>"></i>
                        </div>
                        <h6 class="fw-bold text-se-primary mb-1 fs-6"><?= esc($cat['name']) ?></h6>
                        <small class="text-muted" style="font-size: 0.75rem;"><?= esc($cat['description']) ?></small>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 4. Produk Unggulan -->
<section class="py-5 bg-white border-top border-bottom" id="produk-unggulan">
    <div class="container py-lg-4">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4 gap-3">
            <div>
                <span class="badge badge-se-accent-2 px-3 py-2 rounded-pill mb-2">Rekomendasi</span>
                <h2 class="fw-bold text-se-primary mb-1">Produk Unggulan Hari Ini</h2>
                <p class="text-muted mb-0 small">Koleksi terlaris dengan kualitas terjamin. <span class="badge bg-secondary bg-opacity-25 text-dark ms-1">Contoh Data</span></p>
            </div>
            <div>
                <a href="<?= url_to('about') ?>" class="btn btn-outline-secondary rounded-pill btn-sm px-3">
                    Lihat Fitur Katalog <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>
        </div>

        <div class="row g-4">
            <?php foreach ($featuredProducts as $prod): ?>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="se-card h-100 d-flex flex-column overflow-hidden">
                        <!-- Visual Box Produk (Menampilkan gambar asli, fallback ke ikon jika belum ada file) -->
                        <div class="product-visual-wrapper position-relative">
                            <img src="<?= base_url('assets/images/products/' . esc($prod['image'])) ?>" 
                                 class="product-real-img" 
                                 alt="<?= esc($prod['name']) ?>" 
                                 onerror="this.style.display='none'; this.nextElementSibling.classList.remove('d-none');">
                            
                            <div class="product-placeholder-box d-none" style="background-color: <?= esc($prod['bg_color']) ?>;">
                                <i class="bi <?= esc($prod['icon']) ?>" style="font-size: 4.5rem; color: <?= esc($prod['text_color']) ?>;"></i>
                            </div>

                            <span class="badge bg-se-accent text-white position-absolute top-0 start-0 m-3 px-2 py-1 rounded-pill small shadow-sm">
                                <?= esc($prod['badge']) ?>
                            </span>
                        </div>

                        <!-- Deskripsi Produk -->
                        <div class="p-3 d-flex flex-column flex-grow-1">
                            <span class="text-muted text-uppercase small mb-1" style="font-size: 0.75rem; letter-spacing: 0.5px;"><?= esc($prod['category']) ?></span>
                            <h6 class="fw-bold text-se-primary mb-2 line-clamp-2"><?= esc($prod['name']) ?></h6>
                            <div class="mt-auto pt-2 border-top d-flex align-items-center justify-content-between">
                                <div>
                                    <small class="text-muted d-block" style="font-size: 0.7rem;">Harga</small>
                                    <span class="fw-bold text-se-accent fs-6">
                                        <?= 'Rp ' . number_format($prod['price'], 0, ',', '.') ?>
                                    </span>
                                </div>
                                <a href="#" class="btn btn-sm btn-se-primary rounded-pill px-3" aria-label="Tambah <?= esc($prod['name']) ?> ke keranjang">
                                    <i class="bi bi-cart-plus"></i> Beli
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 5. Cara Belanja (4 Langkah Sesuai PRD) -->
<section class="py-5" id="cara-belanja">
    <div class="container py-lg-4">
        <div class="text-center mb-5">
            <span class="badge badge-se-primary px-3 py-2 rounded-pill mb-2">Alur Pembelian</span>
            <h2 class="fw-bold text-se-primary">4 Langkah Mudah Belanja di ShopEase</h2>
            <p class="text-muted mx-auto" style="max-width: 550px;">Proses belanja dirancang simpel, transparan, dan dapat dipantau dari awal hingga akhir.</p>
        </div>

        <div class="row g-4">
            <!-- Langkah 1 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="se-card-static h-100 p-4 text-center position-relative">
                    <div class="step-number-badge mb-3">1</div>
                    <div class="se-icon-box se-icon-accent mb-3">
                        <i class="bi bi-search"></i>
                    </div>
                    <h5 class="fw-bold text-se-primary fs-6 mb-2">Pilih Produk</h5>
                    <p class="text-muted small mb-0">Jelajahi beragam kategori produk berkualitas dan gunakan fitur pencarian pintar kami.</p>
                </div>
            </div>

            <!-- Langkah 2 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="se-card-static h-100 p-4 text-center position-relative">
                    <div class="step-number-badge mb-3">2</div>
                    <div class="se-icon-box se-icon-accent-2 mb-3">
                        <i class="bi bi-cart-check"></i>
                    </div>
                    <h5 class="fw-bold text-se-primary fs-6 mb-2">Masukkan Keranjang</h5>
                    <p class="text-muted small mb-0">Kumpulkan semua item yang ingin dibeli, atur jumlah pesanan, dan periksa ringkasan keranjang.</p>
                </div>
            </div>

            <!-- Langkah 3 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="se-card-static h-100 p-4 text-center position-relative">
                    <div class="step-number-badge mb-3">3</div>
                    <div class="se-icon-box se-icon-primary mb-3">
                        <i class="bi bi-credit-card-2-front"></i>
                    </div>
                    <h5 class="fw-bold text-se-primary fs-6 mb-2">Checkout & Alamat</h5>
                    <p class="text-muted small mb-0">Isi data pengiriman dengan akurat dan konfirmasi total tagihan pesanan Anda.</p>
                </div>
            </div>

            <!-- Langkah 4 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="se-card-static h-100 p-4 text-center position-relative">
                    <div class="step-number-badge mb-3">4</div>
                    <div class="se-icon-box se-icon-warning mb-3">
                        <i class="bi bi-box2-heart"></i>
                    </div>
                    <h5 class="fw-bold text-se-primary fs-6 mb-2">Bayar & Pantau Resi</h5>
                    <p class="text-muted small mb-0">Transfer pembayaran, unggah bukti bayar, dan pantau resi hingga paket sampai di pintu Anda.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. Keunggulan ShopEase -->
<section class="py-5 bg-white border-top border-bottom" id="keunggulan">
    <div class="container py-lg-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <span class="badge badge-se-accent px-3 py-2 rounded-pill mb-2">Mengapa ShopEase?</span>
                <h2 class="fw-bold text-se-primary mb-3">Solusi E-Commerce yang Transparan & Terstruktur</h2>
                <p class="text-muted mb-4">
                    ShopEase dirancang untuk mengatasi kerumitan transaksi manual dengan menyediakan sistem pencatatan terpusat bagi pembeli dan pengelola toko.
                </p>
                <div class="d-flex flex-column gap-3">
                    <div class="d-flex align-items-start gap-3">
                        <div class="se-icon-box se-icon-accent-2 flex-shrink-0">
                            <i class="bi bi-receipt"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-se-primary mb-1">Verifikasi Pembayaran Manual</h6>
                            <p class="text-muted small mb-0">Unggah bukti transfer dan diproses secara teliti oleh admin demi keamanan bersama.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <div class="se-icon-box se-icon-primary flex-shrink-0">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-se-primary mb-1">Pelacakan Pesanan & Resi Akurat</h6>
                            <p class="text-muted small mb-0">Nomor resi kurir diperbarui langsung oleh operator sehingga posisi barang terpantau jelas.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <div class="se-icon-box se-icon-warning flex-shrink-0">
                            <i class="bi bi-database-check"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-se-primary mb-1">Inventaris & Stok Terpantau</h6>
                            <p class="text-muted small mb-0">Informasi ketersediaan barang selalu konsisten berkat integrasi sistem digital.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="p-4 rounded-4 bg-light border h-100">
                            <i class="bi bi-shield-shaded text-se-accent fs-1 mb-3 d-block"></i>
                            <h5 class="fw-bold text-se-primary fs-6 mb-2">Keamanan Berlapis</h5>
                            <p class="text-muted small mb-0">Proteksi CSRF, enkripsi password, dan validasi form server-side untuk melindungi data akun.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-4 rounded-4 bg-light border h-100">
                            <i class="bi bi-speedometer2 text-se-accent-2 fs-1 mb-3 d-block"></i>
                            <h5 class="fw-bold text-se-primary fs-6 mb-2">Akses Cepat & Responsif</h5>
                            <p class="text-muted small mb-0">Antarmuka fleksibel yang nyaman diakses melalui smartphone, tablet, maupun komputer desktop.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-4 rounded-4 bg-light border h-100">
                            <i class="bi bi-people text-primary fs-1 mb-3 d-block"></i>
                            <h5 class="fw-bold text-se-primary fs-6 mb-2">Manajemen Multi-Role</h5>
                            <p class="text-muted small mb-0">Hak akses terpisah untuk Customer, Administrator, dan Operator Toko demi operasional rapi.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-4 rounded-4 bg-light border h-100">
                            <i class="bi bi-graph-up-arrow text-danger fs-1 mb-3 d-block"></i>
                            <h5 class="fw-bold text-se-primary fs-6 mb-2">Laporan Penjualan</h5>
                            <p class="text-muted small mb-0">Ringkasan transaksi berkala membantu toko memantau performa penjualan secara efektif.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. CTA Penutup -->
<section class="py-5 bg-se-primary text-white position-relative overflow-hidden">
    <div class="container py-lg-4 text-center position-relative z-1">
        <span class="badge badge-se-accent px-3 py-2 rounded-pill mb-3">Mulai Pengalaman Belanja</span>
        <h2 class="display-6 fw-bold text-white mb-3">Siap Menikmati Kemudahan Berbelanja di ShopEase?</h2>
        <p class="lead text-white-50 mx-auto mb-4 fs-6" style="max-width: 650px;">
            Dapatkan produk terbaik dengan kenyamanan transaksi digital. Ada pertanyaan mengenai alur sistem atau kemitraan toko? Jangan ragu untuk menghubungi kami.
        </p>
        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
            <a href="<?= url_to('contact') ?>" class="btn btn-se-accent btn-lg rounded-pill px-4 py-2 fs-6 fw-semibold shadow">
                <i class="bi bi-chat-dots me-2"></i>Hubungi Tim Kami
            </a>
            <a href="<?= url_to('about') ?>" class="btn btn-outline-light btn-lg rounded-pill px-4 py-2 fs-6">
                <i class="bi bi-info-circle me-2"></i>Kenali Sistem Lebih Lanjut
            </a>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
