<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

/**
 * Controller untuk mengelola Dashboard Administrator (Placeholder)
 */
class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'title'  => 'Dashboard Admin',
            'active' => 'dashboard',
        ];

        return view('admin/dashboard', $data);
    }
}
