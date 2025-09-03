<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package; 

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman utama dashboard admin.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    // Metode untuk menampilkan daftar paket
    public function packages()
    {
        $packages = Package::all();
        return view('admin.packages.index', compact('packages'));
    }
}