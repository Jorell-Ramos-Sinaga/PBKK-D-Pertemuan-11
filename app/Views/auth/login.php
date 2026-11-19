<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<?php 
// Mengambil daftar error validasi jika ada
$errors = session('errors'); 
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <!-- Kartu Login -->
            <div class="se-card p-4 p-md-5 bg-white shadow-sm border rounded-4">
                <!-- Header Kartu -->
                <div class="text-center mb-4">
                    <div class="se-icon-box se-icon-accent mb-3">
                        <i class="bi bi-box-arrow-in-right"></i>
                    </div>
                    <h2 class="fw-bold text-se-primary mb-1">Login ShopEase</h2>
                    <p class="text-muted small">Masukkan email dan password untuk masuk ke akun Anda.</p>
                </div>

                <!-- Formulir Login -->
                <form action="<?= site_url('login') ?>" method="post" novalidate>
                    <?= csrf_field() ?>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold text-se-primary small">
                            Alamat Email <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-muted border-end-0">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="email" 
                                   class="form-control border-start-0 ps-0 <?= isset($errors['email']) ? 'is-invalid' : '' ?>" 
                                   id="email" 
                                   name="email" 
                                   value="<?= old('email') ?>" 
                                   placeholder="nama@email.com" 
                                   required 
                                   autofocus>
                            <?php if (isset($errors['email'])): ?>
                                <div class="invalid-feedback d-block">
                                    <?= esc($errors['email']) ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label for="password" class="form-label fw-semibold text-se-primary small">
                            Password <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-muted border-end-0">
                                <i class="bi bi-lock"></i>
                            </span>
                            <input type="password" 
                                   class="form-control border-start-0 ps-0 <?= isset($errors['password']) ? 'is-invalid' : '' ?>" 
                                   id="password" 
                                   name="password" 
                                   placeholder="Masukkan password Anda" 
                                   required>
                            <?php if (isset($errors['password'])): ?>
                                <div class="invalid-feedback d-block">
                                    <?= esc($errors['password']) ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Tombol Login -->
                    <button type="submit" class="btn btn-se-accent btn-lg w-100 rounded-pill py-2 fs-6 fw-semibold shadow-sm mb-3">
                        <i class="bi bi-box-arrow-in-right me-2"></i>Masuk Sekarang
                    </button>
                </form>

                <!-- Footer Kartu -->
                <div class="text-center pt-3 border-top">
                    <p class="text-muted small mb-0">
                        Belum punya akun? 
                        <a href="<?= base_url('register') ?>" class="text-se-accent fw-semibold text-decoration-none">
                            Registrasi di sini
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
