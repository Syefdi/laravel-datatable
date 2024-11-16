<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SyefdiController extends Controller
{
    // Menampilkan daftar produk
    public function index()
    {
        // dd('Ini dari syefdi controller. buat baru');
        $products = Product::all();

        return view('content.index', compact('products'));
    }
}
