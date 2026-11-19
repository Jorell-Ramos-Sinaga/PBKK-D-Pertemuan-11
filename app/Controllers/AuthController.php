<?php

namespace App\Controllers;

use App\Models\UserModel;

/**
 * Controller untuk mengelola autentikasi pengguna (Registrasi, Login, Logout)
 */
class AuthController extends BaseController
{
    /**
     * Menampilkan formulir pendaftaran akun (register)
     */
    public function register()
    {
        $data = [
            'title'  => 'Daftar Akun',
            'active' => 'register',
        ];

        return view('auth/register', $data);
    }

    /**
     * Memproses penyimpanan data registrasi pengguna baru
     */
    public function store()
    {
        // Aturan validasi registrasi dengan pesan Bahasa Indonesia
        $rules = [
            'name' => [
                'rules'  => 'required|min_length[3]|max_length[100]',
                'errors' => [
                    'required'   => 'Nama lengkap wajib diisi.',
                    'min_length' => 'Nama lengkap minimal 3 karakter.',
                    'max_length' => 'Nama lengkap maksimal 100 karakter.',
                ],
            ],
            'email' => [
                'rules'  => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required'    => 'Alamat email wajib diisi.',
                    'valid_email' => 'Format alamat email tidak valid.',
                    'is_unique'   => 'Alamat email sudah terdaftar. Silakan gunakan email lain.',
                ],
            ],
            'password' => [
                'rules'  => 'required|min_length[8]',
                'errors' => [
                    'required'   => 'Password wajib diisi.',
                    'min_length' => 'Password minimal terdiri dari 8 karakter.',
                ],
            ],
            'password_confirm' => [
                'rules'  => 'required|matches[password]',
                'errors' => [
                    'required' => 'Konfirmasi password wajib diisi.',
                    'matches'  => 'Konfirmasi password tidak cocok dengan password.',
                ],
            ],
            'phone' => [
                'rules'  => 'permit_empty|max_length[20]',
                'errors' => [
                    'max_length' => 'Nomor telepon maksimal 20 digit.',
                ],
            ],
            'address' => [
                'rules' => 'permit_empty',
            ],
        ];

        // Validasi input
        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil data dan amankan password menggunakan hashing
        $name     = trim($this->request->getPost('name'));
        $email    = strtolower(trim($this->request->getPost('email')));
        $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
        $phone    = trim($this->request->getPost('phone'));
        $address  = trim($this->request->getPost('address'));

        // Role selalu dipaksa 'customer' untuk registrasi publik
        $userData = [
            'name'     => $name,
            'email'    => $email,
            'password' => $password,
            'role'     => 'customer',
            'phone'    => !empty($phone) ? $phone : null,
            'address'  => !empty($address) ? $address : null,
        ];

        $userModel = new UserModel();
        $userModel->insert($userData);

        return redirect()->to('/login')->with('success', 'Registrasi berhasil! Silakan login dengan akun Anda.');
    }

    /**
     * Menampilkan formulir login pengguna
     */
    public function login()
    {
        // Jika sudah login, redirect sesuai role
        if (session()->get('isLoggedIn')) {
            $role = session()->get('role');
            if ($role === 'admin') {
                return redirect()->to('/admin');
            } elseif ($role === 'operator') {
                return redirect()->to('/operator');
            }
            return redirect()->to('/');
        }

        $data = [
            'title'  => 'Login',
            'active' => 'login',
        ];

        return view('auth/login', $data);
    }

    /**
     * Memproses verifikasi kredensial login dan pembuatan session
     */
    public function authenticate()
    {
        $rules = [
            'email' => [
                'rules'  => 'required|valid_email',
                'errors' => [
                    'required'    => 'Alamat email wajib diisi.',
                    'valid_email' => 'Format email tidak valid.',
                ],
            ],
            'password' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Password wajib diisi.',
                ],
            ],
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $email    = strtolower(trim($this->request->getPost('email')));
        $password = (string) $this->request->getPost('password');

        $userModel = new UserModel();
        $user      = $userModel->where('email', $email)->first();

        // Verifikasi keberadaan user dan kecocokan hash password
        if (! $user || ! password_verify($password, $user['password'])) {
            // Pesan generik sama persis untuk mencegah user enumeration
            return redirect()->back()->withInput()->with('error', 'Email atau password salah.');
        }

        // Regenerasi session ID untuk mencegah serangan session fixation
        session()->regenerate(true);

        // Simpan data aman ke dalam session (tanpa password/hash)
        $sessionData = [
            'isLoggedIn' => true,
            'user_id'    => (int) $user['id_user'],
            'name'       => $user['name'],
            'email'      => $user['email'],
            'role'       => $user['role'],
        ];
        session()->set($sessionData);

        // Pengalihan halaman berdasarkan role pengguna
        if ($user['role'] === 'admin') {
            return redirect()->to('/admin');
        } elseif ($user['role'] === 'operator') {
            return redirect()->to('/operator');
        }

        return redirect()->to('/')->with('success', 'Selamat datang kembali, ' . esc($user['name']) . '!');
    }

    /**
     * Memproses keluar dari sistem (logout)
     */
    public function logout()
    {
        // Hancurkan session lama pengguna
        session()->destroy();

        // Mulai session baru yang bersih agar flashdata dapat disimpan dan dikirimkan
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        return redirect()->to('/login')->with('success', 'Anda telah berhasil logout.');
    }
}
