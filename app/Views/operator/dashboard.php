<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Kartu Dashboard Operator -->
            <div class="se-card p-4 p-md-5 bg-white shadow-sm border rounded-4 mb-4">
                <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between pb-4 mb-4 border-bottom gap-3">
                    <div class="d-flex align-items-center gap-3">
                        <div class="se-icon-box se-icon-accent-2" style="width: 56px; height: 56px; font-size: 1.75rem;">
                            <i class="bi bi-box-seam-fill"></i>
                        </div>
                        <div>
                            <span class="badge bg-se-accent-2 text-white rounded-pill px-3 py-1 mb-1">
                                <i class="bi bi-truck me-1"></i> Operator Toko
                            </span>
                            <h2 class="fw-bold text-se-primary mb-0">Halo, <?= esc(session('name')) ?>!</h2>
                        </div>
                    </div>

                    <form action="<?= base_url('logout') ?>" method="post">
                        <?= csrf_field() ?>
                        <button type="submit" class="btn btn-outline-danger btn-sm rounded-pill px-3 py-2 fw-medium">
                            <i class="bi bi-box-arrow-right me-1"></i> Logout
                        </button>
                    </form>
                </div>

                <!-- Info Box Placeholder -->
                <div class="p-4 rounded-3 bg-light border text-center my-3">
                    <i class="bi bi-boxes text-se-accent-2 display-4 mb-3 d-block"></i>
                    <h5 class="fw-bold text-se-primary mb-2">Panel Dashboard Operator Toko</h5>
                    <p class="text-muted small mx-auto mb-3" style="max-width: 520px;">
                        Halaman ini adalah <strong>placeholder</strong> untuk memverifikasi hak akses autentikasi role Operator. Modul pemenuhan pesanan fisik, pengemasan paket, dan input nomor resi kurir akan dikembangkan pada tahap tugas berikutnya sesuai PRD ShopEase.
                    </p>
                    <div class="d-flex flex-wrap justify-content-center gap-2">
                        <span class="badge badge-se-primary px-3 py-2 rounded-pill small">
                            <i class="bi bi-person-check me-1"></i> User ID: #<?= esc(session('user_id')) ?>
                        </span>
                        <span class="badge badge-se-accent-2 px-3 py-2 rounded-pill small">
                            <i class="bi bi-envelope me-1"></i> <?= esc(session('email')) ?>
                        </span>
                    </div>
                </div>

                <div class="text-center pt-3">
                    <a href="<?= base_url('/') ?>" class="btn btn-se-outline rounded-pill px-4 btn-sm">
                        <i class="bi bi-arrow-left me-1"></i> Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
