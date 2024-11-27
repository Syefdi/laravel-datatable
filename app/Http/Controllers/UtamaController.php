<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Invoice;
use Illuminate\Http\Request;

class UtamaController extends Controller
{
    // Menampilkan daftar produk
    public function index()
    {
        $products = Product::all();
        $invoices = Invoice::orderBy('created_at', 'desc')->get();   
             


        return view('content.index', compact('products', 'invoices'));
    }
}
