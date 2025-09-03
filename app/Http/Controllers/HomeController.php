<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua paket dari database
        $packages = Package::all();

        // Kirim data paket ke view 'home'
        return view('home', compact('packages'));
    }
}