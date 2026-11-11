<!-- Footer Utama ShopEase -->
<footer class="bg-se-primary text-light pt-5 pb-4 mt-auto border-top border-secondary border-opacity-25">
    <div class="container">
        <div class="row g-4 mb-4">
            <!-- Kolom 1: Profil Brand -->
            <div class="col-lg-4 col-md-6">
                <a class="d-flex align-items-center gap-2 text-decoration-none text-white fw-bold fs-4 mb-3" href="<?= url_to('home') ?>">
                    <i class="bi bi-bag-check-fill text-se-accent"></i>
                    <span>Shop<span class="text-se-accent">Ease</span></span>
                </a>
                <p class="text-white-50 small mb-3">
                    Aplikasi e-commerce modern yang mendigitalkan proses belanja online. Memudahkan pengelolaan katalog, pemesanan terstruktur, verifikasi pembayaran manual, dan pelacakan pengiriman produk.
                </p>
                <div class="d-flex gap-2">
                    <span class="badge bg-secondary bg-opacity-25 text-white px-2 py-1 small"><i class="bi bi-shield-check text-se-accent me-1"></i> Transaksi Aman</span>
                    <span class="badge bg-secondary bg-opacity-25 text-white px-2 py-1 small"><i class="bi bi-truck text-se-accent me-1"></i> Resi Akurat</span>
                </div>
            </div>

            <!-- Kolom 2: Navigasi Cepat -->
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold text-white text-uppercase tracking-wider mb-3">Navigasi</h6>
                <ul class="list-unstyled small mb-0 d-flex flex-column gap-2">
                    <li><a href="<?= url_to('home') ?>" class="text-white-50 text-decoration-none hover-white">Beranda</a></li>
                    <li><a href="<?= url_to('about') ?>" class="text-white-50 text-decoration-none hover-white">Tentang Kami</a></li>
                    <li><a href="<?= url_to('contact') ?>" class="text-white-50 text-decoration-none hover-white">Hubungi Kami</a></li>
                    <li><a href="#" class="text-white-50 text-decoration-none hover-white">Katalog Produk</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Layanan Pelanggan -->
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold text-white text-uppercase tracking-wider mb-3">Bantuan</h6>
                <ul class="list-unstyled small mb-0 d-flex flex-column gap-2">
                    <li><a href="<?= url_to('contact') ?>" class="text-white-50 text-decoration-none hover-white">Pertanyaan Umum (FAQ)</a></li>
                    <li><a href="<?= url_to('about') ?>" class="text-white-50 text-decoration-none hover-white">Cara Pemesanan</a></li>
                    <li><a href="<?= url_to('about') ?>" class="text-white-50 text-decoration-none hover-white">Verifikasi Pembayaran</a></li>
                    <li><a href="#" class="text-white-50 text-decoration-none hover-white">Syarat & Ketentuan</a></li>
                </ul>
            </div>

            <!-- Kolom 4: Kontak Singkat -->
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold text-white text-uppercase tracking-wider mb-3">Kontak Layanan</h6>
                <ul class="list-unstyled small mb-0 d-flex flex-column gap-2 text-white-50">
                    <li class="d-flex align-items-center gap-2">
                        <i class="bi bi-geo-alt text-se-accent"></i>
                        <span>Jl. Kampus Terpadu No. 12, Indonesia</span>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="bi bi-envelope text-se-accent"></i>
                        <span>support@shopease.local</span>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="bi bi-telephone text-se-accent"></i>
                        <span>+62 812-3456-7890</span>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="bi bi-clock text-se-accent"></i>
                        <span>Senin - Jumat: 08.00 - 17.00 WIB</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Garis Pemisah & Hak Cipta -->
        <div class="border-top border-secondary border-opacity-25 pt-3 d-flex flex-column flex-md-row justify-content-between align-items-center gap-2 small text-white-50">
            <div>
                &copy; 2026 <strong>ShopEase</strong> – Tugas Web Framework.
            </div>
            <div>
                Dibuat dengan <i class="bi bi-heart-fill text-danger mx-1"></i> menggunakan CodeIgniter 4 & Bootstrap 5
            </div>
        </div>
    </div>
</footer>

