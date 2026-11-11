<?php

namespace App\Controllers;

/**
 * Controller untuk mengelola halaman Beranda (Home) ShopEase
 */
class HomeController extends BaseController
{
    protected $helpers = ['url', 'form'];

    public function index()
    {
        // Contoh data dummy kategori produk (sesuai spesifikasi)
        $categories = [
            [
                'name' => 'Elektronik',
                'icon' => 'bi-laptop',
                'description' => 'Gadget, laptop, dan aksesoris modern'
            ],
            [
                'name' => 'Fashion',
                'icon' => 'bi-bag-heart',
                'description' => 'Pakaian pria, wanita, dan aksesoris'
            ],
            [
                'name' => 'Rumah Tangga',
                'icon' => 'bi-house-door',
                'description' => 'Perabot dan perlengkapan dapur'
            ],
            [
                'name' => 'Kecantikan',
                'icon' => 'bi-stars',
                'description' => 'Skincare dan produk perawatan diri'
            ],
            [
                'name' => 'Olahraga',
                'icon' => 'bi-trophy',
                'description' => 'Peralatan gym, sepatu, dan apparel'
            ],
            [
                'name' => 'Buku & Alat Tulis',
                'icon' => 'bi-book',
                'description' => 'Buku referensi, fiksi, dan stationery'
            ],
        ];

        // Contoh data dummy produk unggulan dengan nama file gambar
        $featuredProducts = [
            [
                'id'         => 1,
                'name'       => 'Smartwatch Ultra Pro X',
                'price'      => 849000,
                'category'   => 'Elektronik',
                'badge'      => 'Terlaris',
                'image'      => 'smartwatch.jpg',
                'icon'       => 'bi-smartwatch',
                'bg_color'   => '#EBF3FE',
                'text_color' => '#2563EB',
            ],
            [
                'id'         => 2,
                'name'       => 'Jaket Hoodie Canvas Urban',
                'price'      => 329000,
                'category'   => 'Fashion',
                'badge'      => 'Spesial',
                'image'      => 'hoodie.jpg',
                'icon'       => 'bi-person-badge',
                'bg_color'   => '#FEF3EB',
                'text_color' => '#D97706',
            ],
            [
                'id'         => 3,
                'name'       => 'Air Fryer Touch Digital 4L',
                'price'      => 699000,
                'category'   => 'Rumah Tangga',
                'badge'      => 'Hemat 20%',
                'image'      => 'airfryer.jpg',
                'icon'       => 'bi-fire',
                'bg_color'   => '#ECFDF5',
                'text_color' => '#059669',
            ],
            [
                'id'         => 4,
                'name'       => 'Wireless Headphone Noise Cancelling',
                'price'      => 549000,
                'category'   => 'Elektronik',
                'badge'      => 'Baru',
                'image'      => 'headphone.jpg',
                'icon'       => 'bi-headphones',
                'bg_color'   => '#F5F3FF',
                'text_color' => '#7C3AED',
            ],
        ];

        $data = [
            'title'            => 'Beranda',
            'active'           => 'home',
            'categories'       => $categories,
            'featuredProducts' => $featuredProducts,
        ];

        return view('pages/home', $data);
    }
}
