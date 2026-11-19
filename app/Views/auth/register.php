<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<?php 
// Mengambil daftar error validasi jika ada
$errors = session('errors'); 
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <!-- Kartu Registrasi -->
            <div class="se-card p-4 p-md-5 bg-white shadow-sm border rounded-4">
                <!-- Header Kartu -->
                <div class="text-center mb-4">
                    <div class="se-icon-box se-icon-accent mb-3">
                        <i class="bi bi-person-plus-fill"></i>
                    </div>
                    <h2 class="fw-bold text-se-primary mb-1">Daftar Akun ShopEase</h2>
                    <p class="text-muted small">Lengkapi data diri Anda untuk mulai menikmati kemudahan berbelanja online.</p>
                </div>

                <!-- Formulir Registrasi -->
                <form action="<?= site_url('register') ?>" method="post" novalidate>
                    <?= csrf_field() ?>

                    <!-- Nama Lengkap -->
                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold text-se-primary small">
                            Nama Lengkap <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-muted border-end-0">
                                <i class="bi bi-person"></i>
                            </span>
                            <input type="text" 
                                   class="form-control border-start-0 ps-0 <?= isset($errors['name']) ? 'is-invalid' : '' ?>" 
                                   id="name" 
                                   name="name" 
                                   value="<?= old('name') ?>" 
                                   placeholder="Contoh: Budi Santoso" 
                                   required>
                            <?php if (isset($errors['name'])): ?>
                                <div class="invalid-feedback d-block">
                                    <?= esc($errors['name']) ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

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
                                   required>
                            <?php if (isset($errors['email'])): ?>
                                <div class="invalid-feedback d-block">
                                    <?= esc($errors['email']) ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Nomor Telepon (Opsional) -->
                    <div class="mb-3">
                        <label for="phone" class="form-label fw-semibold text-se-primary small">
                            Nomor Telepon / WhatsApp <span class="text-muted fw-normal">(Opsional)</span>
                        </label>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-muted border-end-0">
                                <i class="bi bi-telephone"></i>
                            </span>
                            <input type="tel" 
                                   class="form-control border-start-0 ps-0 <?= isset($errors['phone']) ? 'is-invalid' : '' ?>" 
                                   id="phone" 
                                   name="phone" 
                                   value="<?= old('phone') ?>" 
                                   placeholder="081234567890">
                            <?php if (isset($errors['phone'])): ?>
                                <div class="invalid-feedback d-block">
                                    <?= esc($errors['phone']) ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Alamat (Opsional) -->
                    <div class="mb-3">
                        <label for="address" class="form-label fw-semibold text-se-primary small">
                            Alamat Domisili <span class="text-muted fw-normal">(Opsional)</span>
                        </label>
                        <textarea class="form-control <?= isset($errors['address']) ? 'is-invalid' : '' ?>" 
                                  id="address" 
                                  name="address" 
                                  rows="2" 
                                  placeholder="Contoh: Jl. Mawar No. 10, Surabaya"><?= old('address') ?></textarea>
                        <?php if (isset($errors['address'])): ?>
                            <div class="invalid-feedback d-block">
                                <?= esc($errors['address']) ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
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
                                   placeholder="Minimal 8 karakter" 
                                   required>
                            <?php if (isset($errors['password'])): ?>
                                <div class="invalid-feedback d-block">
                                    <?= esc($errors['password']) ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Konfirmasi Password -->
                    <div class="mb-4">
                        <label for="password_confirm" class="form-label fw-semibold text-se-primary small">
                            Konfirmasi Password <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-muted border-end-0">
                                <i class="bi bi-shield-lock"></i>
                            </span>
                            <input type="password" 
                                   class="form-control border-start-0 ps-0 <?= isset($errors['password_confirm']) ? 'is-invalid' : '' ?>" 
                                   id="password_confirm" 
                                   name="password_confirm" 
                                   placeholder="Ulangi password di atas" 
                                   required>
                            <?php if (isset($errors['password_confirm'])): ?>
                                <div class="invalid-feedback d-block">
                                    <?= esc($errors['password_confirm']) ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Tombol Submit -->
                    <button type="submit" class="btn btn-se-accent btn-lg w-100 rounded-pill py-2 fs-6 fw-semibold shadow-sm mb-3">
                        <i class="bi bi-person-check-fill me-2"></i>Daftar Sekarang
                    </button>
                </form>

                <!-- Footer Kartu -->
                <div class="text-center pt-3 border-top">
                    <p class="text-muted small mb-0">
                        Sudah punya akun? 
                        <a href="<?= base_url('login') ?>" class="text-se-accent fw-semibold text-decoration-none">
                            Login di sini
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
