<?php

namespace App\Controllers\Operator;

use App\Controllers\BaseController;

/**
 * Controller untuk mengelola Dashboard Operator Toko (Placeholder)
 */
class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'title'  => 'Dashboard Operator',
            'active' => 'dashboard',
        ];

        return view('operator/dashboard', $data);
    }
}
