<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<?php 
// Mengambil daftar error validasi dari session jika ada
$errors = session('errors'); 
?>

<!-- 1. Header Halaman & Breadcrumb -->
<section class="py-5 bg-gradient-hero border-bottom">
    <div class="container py-lg-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-2 small">
                <li class="breadcrumb-item"><a href="<?= url_to('home') ?>" class="text-decoration-none text-muted"><i class="bi bi-house-door me-1"></i>Beranda</a></li>
                <li class="breadcrumb-item active text-se-primary fw-semibold" aria-current="page">Hubungi Kami</li>
            </ol>
        </nav>
        <span class="badge badge-se-accent px-3 py-2 rounded-pill mb-2">Pusat Layanan</span>
        <h1 class="display-5 fw-extrabold text-se-primary mb-2">Hubungi Tim ShopEase</h1>
        <p class="lead text-muted mb-0 fs-6" style="max-width: 650px;">
            Memiliki pertanyaan seputar alur pemesanan, verifikasi transfer, atau ingin berkonsultasi mengenai platform? Kami siap membantu Anda.
        </p>
    </div>
</section>

<!-- 2. Konten Kontak: Dua Kolom (Info Kontak & Form Kirim Pesan) -->
<section class="py-5 bg-white border-bottom" id="kontak-form">
    <div class="container py-lg-3">
        <div class="row g-5">
            <!-- Kolom Kiri: Informasi Kontak Toko -->
            <div class="col-lg-5">
                <div class="pe-lg-4">
                    <span class="badge badge-se-primary px-3 py-2 rounded-pill mb-3">Informasi Toko</span>
                    <h2 class="fw-bold text-se-primary mb-3">Saluran Komunikasi Resmi</h2>
                    <p class="text-muted mb-4 small">
                        Layanan pelanggan kami beroperasi secara aktif pada jam kerja untuk merespons pertanyaan pembeli serta memproses pemenuhan pesanan secara cepat.
                    </p>

                    <!-- Daftar Kontak Item -->
                    <div class="d-flex flex-column gap-3 mb-4">
                        <!-- Alamat -->
                        <div class="se-card-static p-3 d-flex align-items-start gap-3 bg-light border">
                            <div class="se-icon-box se-icon-accent flex-shrink-0" style="width: 44px; height: 44px; font-size: 1.25rem;">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div>
                                <strong class="text-se-primary d-block small mb-1">Alamat Kantor</strong>
                                <span class="text-muted small">Jl. Kampus Terpadu No. 12, Gedung Fasilkom Lantai 2, Indonesia</span>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="se-card-static p-3 d-flex align-items-start gap-3 bg-light border">
                            <div class="se-icon-box se-icon-accent-2 flex-shrink-0" style="width: 44px; height: 44px; font-size: 1.25rem;">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div>
                                <strong class="text-se-primary d-block small mb-1">Email Layanan</strong>
                                <a href="mailto:support@shopease.local" class="text-decoration-none text-muted small">support@shopease.local</a>
                            </div>
                        </div>

                        <!-- Telepon / WhatsApp -->
                        <div class="se-card-static p-3 d-flex align-items-start gap-3 bg-light border">
                            <div class="se-icon-box se-icon-primary flex-shrink-0" style="width: 44px; height: 44px; font-size: 1.25rem;">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <div>
                                <strong class="text-se-primary d-block small mb-1">Telepon & WhatsApp</strong>
                                <span class="text-muted small">+62 812-3456-7890 (Layanan Cepat)</span>
                            </div>
                        </div>

                        <!-- Jam Layanan -->
                        <div class="se-card-static p-3 d-flex align-items-start gap-3 bg-light border">
                            <div class="se-icon-box se-icon-warning flex-shrink-0" style="width: 44px; height: 44px; font-size: 1.25rem;">
                                <i class="bi bi-clock"></i>
                            </div>
                            <div>
                                <strong class="text-se-primary d-block small mb-1">Jam Operasional</strong>
                                <span class="text-muted small">Senin – Jumat: 08.00 – 17.00 WIB<br>Sabtu: 08.00 – 14.00 WIB</span>
                            </div>
                        </div>
                    </div>

                    <!-- Jaminan Keamanan Data -->
                    <div class="p-3 rounded-3 bg-light border d-flex align-items-center gap-2 text-muted small">
                        <i class="bi bi-shield-check text-se-accent-2 fs-5"></i>
                        <span>Pesan Anda dilindungi enkripsi dan diproses langsung oleh staf resmi.</span>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Form Kontak Interaktif -->
            <div class="col-lg-7">
                <div class="se-card p-4 p-md-5 bg-white shadow-sm border rounded-4">
                    <div class="mb-4">
                        <span class="badge badge-se-accent px-3 py-2 rounded-pill mb-2">Formulir Pesan</span>
                        <h3 class="fw-bold text-se-primary mb-1">Kirimkan Pesan atau Pertanyaan</h3>
                        <p class="text-muted small mb-0">Isi data formulir di bawah ini dengan lengkap. Tim kami akan merespons sesegera mungkin.</p>
                    </div>

                    <form action="<?= url_to('contact.send') ?>" method="post" novalidate>
                        <!-- Token Keamanan CSRF -->
                        <?= csrf_field() ?>

                        <div class="row g-3">
                            <!-- Field Nama Lengkap -->
                            <div class="col-md-6">
                                <label for="nama" class="form-label fw-semibold text-se-primary small">
                                    Nama Lengkap <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light text-muted border-end-0">
                                        <i class="bi bi-person"></i>
                                    </span>
                                    <input type="text" 
                                           class="form-control border-start-0 ps-0 <?= isset($errors['nama']) ? 'is-invalid' : '' ?>" 
                                           id="nama" 
                                           name="nama" 
                                           value="<?= old('nama') ?>" 
                                           placeholder="Contoh: Budi Pratama"
                                           required>
                                    <?php if (isset($errors['nama'])): ?>
                                        <div class="invalid-feedback d-block">
                                            <?= esc($errors['nama']) ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <!-- Field Email -->
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-semibold text-se-primary small">
                                    Alamat Email <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light text-muted border-end-0">
                                        <i class="bi bi-envelope-at"></i>
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

                            <!-- Field Subjek -->
                            <div class="col-12">
                                <label for="subjek" class="form-label fw-semibold text-se-primary small">
                                    Subjek Pertanyaan <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light text-muted border-end-0">
                                        <i class="bi bi-chat-left-text"></i>
                                    </span>
                                    <input type="text" 
                                           class="form-control border-start-0 ps-0 <?= isset($errors['subjek']) ? 'is-invalid' : '' ?>" 
                                           id="subjek" 
                                           name="subjek" 
                                           value="<?= old('subjek') ?>" 
                                           placeholder="Contoh: Pertanyaan Konfirmasi Pembayaran Pesanan"
                                           required>
                                    <?php if (isset($errors['subjek'])): ?>
                                        <div class="invalid-feedback d-block">
                                            <?= esc($errors['subjek']) ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <!-- Field Pesan -->
                            <div class="col-12">
                                <label for="pesan" class="form-label fw-semibold text-se-primary small">
                                    Isi Pesan <span class="text-danger">*</span>
                                </label>
                                <textarea class="form-control <?= isset($errors['pesan']) ? 'is-invalid' : '' ?>" 
                                          id="pesan" 
                                          name="pesan" 
                                          rows="5" 
                                          placeholder="Tuliskan pertanyaan atau kendala Anda secara detail di sini (minimal 10 karakter)..."
                                          required><?= old('pesan') ?></textarea>
                                <?php if (isset($errors['pesan'])): ?>
                                    <div class="invalid-feedback d-block">
                                        <?= esc($errors['pesan']) ?>
                                    </div>
                                <?php endif; ?>
                                <small class="text-muted" style="font-size: 0.75rem;">* Wajib diisi dengan informasi yang jelas dan valid.</small>
                            </div>

                            <!-- Tombol Kirim Form -->
                            <div class="col-12 pt-2">
                                <button type="submit" class="btn btn-se-accent btn-lg w-100 rounded-pill py-2 fs-6 fw-semibold shadow-sm">
                                    <i class="bi bi-send-fill me-2"></i>Kirimkan Pesan Sekarang
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. FAQ Section (Pertanyaan yang Sering Diajukan) -->
<section class="py-5" id="faq">
    <div class="container py-lg-3">
        <div class="text-center mb-5">
            <span class="badge badge-se-accent-2 px-3 py-2 rounded-pill mb-2">Bantuan Cepat</span>
            <h2 class="fw-bold text-se-primary">Pertanyaan yang Sering Diajukan (FAQ)</h2>
            <p class="text-muted mx-auto" style="max-width: 580px;">
                Temukan jawaban ringkas atas pertanyaan umum mengenai proses transaksi dan penggunaan aplikasi ShopEase.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion custom-accordion d-flex flex-column gap-3" id="faqAccordion">
                    <!-- Item 1 -->
                    <div class="accordion-item border rounded-3 overflow-hidden shadow-sm">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button fw-semibold text-se-primary py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="bi bi-cart3 text-se-accent me-2 fs-5"></i> Bagaimana alur pemesanan produk di ShopEase?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted small pt-0 pb-3">
                                Anda cukup memilih produk yang diinginkan dari katalog, menambahkannya ke keranjang belanja, mengisi data alamat penerima di halaman checkout, dan melakukan konfirmasi pesanan untuk mendapatkan rincian nomor rekening transfer.
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="accordion-item border rounded-3 overflow-hidden shadow-sm">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed fw-semibold text-se-primary py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="bi bi-receipt text-se-accent-2 me-2 fs-5"></i> Bagaimana cara melakukan verifikasi pembayaran transfer?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted small pt-0 pb-3">
                                Setelah melakukan transfer antar bank, customer dapat masuk ke menu pesanan dan mengunggah foto struk/screenshot mutasi transfer. Tim Administrator akan memverifikasi mutasi tersebut dan mengubah status pesanan menjadi lunas.
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="accordion-item border rounded-3 overflow-hidden shadow-sm">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed fw-semibold text-se-primary py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="bi bi-truck text-primary me-2 fs-5"></i> Bagaimana cara melacak paket dan melihat nomor resi?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted small pt-0 pb-3">
                                Saat pesanan diserahkan ke jasa kurir, operator toko akan memasukkan nama kurir dan nomor resi pengiriman ke sistem. Customer dapat memantau status terkini langsung pada halaman rincian pesanan mereka.
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="accordion-item border rounded-3 overflow-hidden shadow-sm">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed fw-semibold text-se-primary py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="bi bi-clock-history text-warning me-2 fs-5"></i> Berapa lama waktu yang dibutuhkan hingga pesanan dikirim?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted small pt-0 pb-3">
                                Pesanan yang pembayarannya telah diverifikasi sebelum pukul 14.00 WIB pada hari kerja akan dikemas dan diserahkan ke pihak ekspedisi pada hari yang sama.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
