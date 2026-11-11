<?php

namespace App\Controllers;

/**
 * Controller untuk mengelola halaman Tentang Kami (About) ShopEase
 */
class AboutController extends BaseController
{
    protected $helpers = ['url', 'form'];

    public function index()
    {
        // Contoh data fitur utama aplikasi sesuai PRD
        $features = [
            [
                'title'       => 'Katalog & Pencarian Cerdas',
                'description' => 'Eksplorasi produk dengan filter kategori, pengurutan harga, dan navigasi halaman yang cepat.',
                'icon'        => 'bi-search',
            ],
            [
                'title'       => 'Keranjang & Checkout Mudah',
                'description' => 'Simpan produk impian dan lakukan checkout dengan alur pesanan yang terstruktur dan transparan.',
                'icon'        => 'bi-cart-check',
            ],
            [
                'title'       => 'Upload Bukti Pembayaran',
                'description' => 'Unggah bukti transfer pembayaran langsung melalui web untuk diverifikasi oleh admin toko.',
                'icon'        => 'bi-receipt-cutoff',
            ],
            [
                'title'       => 'Verifikasi Cepat & Akurat',
                'description' => 'Sistem verifikasi transaksi oleh tim admin untuk memastikan setiap pesanan diproses tepat waktu.',
                'icon'        => 'bi-patch-check',
            ],
            [
                'title'       => 'Pelacakan Status & Resi',
                'description' => 'Pantau perkembangan status pesanan mulai dari diproses, dikemas, hingga nomor resi kurir diterbitkan.',
                'icon'        => 'bi-truck',
            ],
            [
                'title'       => 'Keamanan Data Terlindungi',
                'description' => 'Dilengkapi enkripsi password, perlindungan CSRF, dan validasi data berlapis di sisi server.',
                'icon'        => 'bi-shield-check',
            ],
        ];

        // Contoh data peran pengguna sesuai PRD
        $roles = [
            [
                'name'        => 'Customer (Pelanggan)',
                'badge'       => 'Pembeli',
                'icon'        => 'bi-person-heart',
                'description' => 'Menjelajahi katalog, memasukkan produk ke keranjang, melakukan checkout, mengunggah bukti bayar, dan melacak status pengiriman barang.',
            ],
            [
                'name'        => 'Administrator',
                'badge'       => 'Pengelola',
                'icon'        => 'bi-person-gear',
                'description' => 'Mengelola master data produk, kategori, memverifikasi bukti pembayaran yang masuk, serta memantau ringkasan laporan transaksi toko.',
            ],
            [
                'name'        => 'Operator Toko',
                'badge'       => 'Operasional',
                'icon'        => 'bi-box-seam',
                'description' => 'Menangani pemenuhan pesanan fisik, mengemas produk pesanan pelanggan, dan memperbarui informasi nomor resi pengiriman.',
            ],
        ];

        // Data stack teknologi
        $techStack = [
            [
                'name'        => 'CodeIgniter 4',
                'category'    => 'Web Framework',
                'description' => 'Framework PHP modern beralur kerja MVC yang cepat, ringan, dan aman.',
                'icon'        => 'bi-fire',
            ],
            [
                'name'        => 'PHP 8.1+',
                'category'    => 'Backend Language',
                'description' => 'Bahasa pemrograman server-side yang andal dengan performa tinggi.',
                'icon'        => 'bi-filetype-php',
            ],
            [
                'name'        => 'MySQL Database',
                'category'    => 'Relational Database',
                'description' => 'Penyimpanan data relasional terstruktur untuk transaksi dan katalog produk.',
                'icon'        => 'bi-database',
            ],
            [
                'name'        => 'Bootstrap 5.3',
                'category'    => 'Frontend CSS',
                'description' => 'Framework antarmuka responsif dengan grid flexbox dan komponen modern.',
                'icon'        => 'bi-bootstrap',
            ],
        ];

        $data = [
            'title'     => 'Tentang Kami',
            'active'    => 'about',
            'features'  => $features,
            'roles'     => $roles,
            'techStack' => $techStack,
        ];

        return view('pages/about', $data);
    }
}

