<?php

namespace App\Controllers;

/**
 * Controller untuk mengelola halaman Kontak & Form Pertanyaan ShopEase
 */
class ContactController extends BaseController
{
    protected $helpers = ['url', 'form'];

    public function index()
    {
        $data = [
            'title'  => 'Hubungi Kami',
            'active' => 'contact',
        ];

        return view('pages/contact', $data);
    }

    public function send()
    {
        // Aturan validasi input form kontak
        $rules = [
            'nama' => [
                'rules'  => 'required|min_length[3]',
                'errors' => [
                    'required'   => 'Nama lengkap wajib diisi.',
                    'min_length' => 'Nama minimal terdiri dari 3 karakter.',
                ],
            ],
            'email' => [
                'rules'  => 'required|valid_email',
                'errors' => [
                    'required'    => 'Alamat email wajib diisi.',
                    'valid_email' => 'Format alamat email tidak valid.',
                ],
            ],
            'subjek' => [
                'rules'  => 'required|min_length[3]',
                'errors' => [
                    'required'   => 'Subjek pesan wajib diisi.',
                    'min_length' => 'Subjek minimal terdiri dari 3 karakter.',
                ],
            ],
            'pesan' => [
                'rules'  => 'required|min_length[10]',
                'errors' => [
                    'required'   => 'Isi pesan wajib diisi.',
                    'min_length' => 'Pesan minimal terdiri dari 10 karakter.',
                ],
            ],
        ];

        // Validasi data kiriman pengguna
        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Data berhasil divalidasi (tidak disimpan ke DB sesuai lingkup tugas)
        $nama = $this->request->getPost('nama');
        return redirect()->to(url_to('contact'))->with('success', 'Terima kasih ' . esc($nama) . '! Pesan Anda telah berhasil terkirim. Tim ShopEase akan segera menghubungi Anda.');
    }
}

