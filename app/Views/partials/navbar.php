<!-- Navbar Utama ShopEase -->
<header class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-se-primary py-3 shadow-sm" aria-label="Navigasi Utama">
        <div class="container">
            <!-- Brand Logo -->
            <a class="navbar-brand d-flex align-items-center gap-2 fw-bold fs-4 text-white text-decoration-none" href="<?= url_to('home') ?>">
                <span class="brand-icon-wrapper d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-bag-check-fill text-se-accent"></i>
                </span>
                <span class="brand-text text-white">Shop<span class="text-se-accent">Ease</span></span>
            </a>

            <!-- Toggle Button untuk Layar Mobile -->
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarShopEase" aria-controls="navbarShopEase" aria-expanded="false" aria-label="Buka navigasi menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu Navigasi -->
            <div class="collapse navbar-collapse" id="navbarShopEase">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-2">
                    <li class="nav-item">
                        <a class="nav-link px-3 <?= (isset($active) && $active === 'home') ? 'active fw-semibold' : '' ?>" href="<?= url_to('home') ?>">
                            <i class="bi bi-house-door me-1"></i> Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 <?= (isset($active) && $active === 'about') ? 'active fw-semibold' : '' ?>" href="<?= url_to('about') ?>">
                            <i class="bi bi-info-circle me-1"></i> Tentang Kami
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 <?= (isset($active) && $active === 'contact') ? 'active fw-semibold' : '' ?>" href="<?= url_to('contact') ?>">
                            <i class="bi bi-envelope me-1"></i> Hubungi Kami
                        </a>
                    </li>
                </ul>

                <!-- Tombol Aksi Dekoratif (Sesuai Spesifikasi PRD) -->
                <div class="d-flex align-items-center gap-2 mt-3 mt-lg-0">
                    <a href="#" class="btn btn-outline-light btn-sm px-3 rounded-pill" aria-label="Masuk ke akun">
                        <i class="bi bi-box-arrow-in-right me-1"></i> Masuk
                    </a>
                    <a href="#" class="btn btn-se-accent btn-sm px-3 rounded-pill text-white fw-medium shadow-sm" aria-label="Daftar akun baru">
                        <i class="bi bi-person-plus me-1"></i> Daftar
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>

