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

                <!-- Menu Pengguna / Tombol Aksi Autentikasi -->
                <?php if (session()->get('isLoggedIn')): ?>
                    <!-- Dropdown Profil Pengguna yang Sudah Login -->
                    <div class="dropdown mt-3 mt-lg-0">
                        <button class="btn btn-outline-light btn-sm rounded-pill dropdown-toggle px-3 d-flex align-items-center gap-2" type="button" id="userMenuDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle fs-6"></i>
                            <span class="fw-medium"><?= esc(session()->get('name')) ?></span>
                            <span class="badge bg-se-accent text-white rounded-pill px-2" style="font-size: 0.7rem;">
                                <?= esc(ucfirst(session()->get('role'))) ?>
                            </span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 rounded-3 mt-2" aria-labelledby="userMenuDropdown">
                            <li class="dropdown-header text-muted small">
                                Masuk sebagai <strong><?= esc(session()->get('email')) ?></strong>
                            </li>
                            <?php if (in_array(session()->get('role'), ['admin', 'operator'], true)): ?>
                                <li>
                                    <a class="dropdown-item py-2" href="<?= base_url(session()->get('role')) ?>">
                                        <i class="bi bi-speedometer2 me-2 text-se-accent"></i> Dashboard <?= ucfirst(session()->get('role')) ?>
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider my-1"></li>
                            <?php endif; ?>
                            <li>
                                <form action="<?= base_url('logout') ?>" method="post" class="d-inline">
                                    <?= csrf_field() ?>
                                    <button type="submit" class="dropdown-item py-2 text-danger">
                                        <i class="bi bi-box-arrow-right me-2"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                <?php else: ?>
                    <!-- Tombol Masuk dan Daftar untuk Pengguna Tamu (Guest) -->
                    <div class="d-flex align-items-center gap-2 mt-3 mt-lg-0">
                        <a href="<?= base_url('login') ?>" class="btn btn-outline-light btn-sm px-3 rounded-pill" aria-label="Masuk ke akun">
                            <i class="bi bi-box-arrow-in-right me-1"></i> Masuk
                        </a>
                        <a href="<?= base_url('register') ?>" class="btn btn-se-accent btn-sm px-3 rounded-pill text-white fw-medium shadow-sm" aria-label="Daftar akun baru">
                            <i class="bi bi-person-plus me-1"></i> Daftar
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>

