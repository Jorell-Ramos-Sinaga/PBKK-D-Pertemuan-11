<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

/**
 * Filter untuk membatasi akses halaman berdasarkan status login dan role pengguna
 */
class AuthFilter implements FilterInterface
{
    /**
     * Memeriksa autentikasi dan otorisasi sebelum request diteruskan ke controller
     *
     * @param RequestInterface $request
     * @param array|null       $arguments Daftar role yang diizinkan (misal ['admin'] atau ['operator'])
     *
     * @return mixed
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        // 1. Cek apakah pengguna sudah login
        if (! session()->get('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu.');
        }

        // 2. Cek apakah role pengguna sesuai dengan hak akses yang ditentukan pada route
        if (! empty($arguments)) {
            $userRole = session()->get('role');
            if (! in_array($userRole, $arguments, true)) {
                // Jika role tidak sesuai, alihkan kembali ke halaman utama
                return redirect()->to('/');
            }
        }
    }

    /**
     * Tidak ada proses khusus setelah response dihasilkan
     *
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @param array|null        $arguments
     *
     * @return mixed
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Biarkan kosong sesuai kebutuhan filter autentikasi
    }
}
