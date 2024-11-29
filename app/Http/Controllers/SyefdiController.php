<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SyefdiController extends Controller
{
    public function index (){
        return 'syefdi syaban';
    }
    public function syefdi($nama = 'syefdi'){

            return view ('syefdi.contoh-view', ['nama' => $nama]);
    }
    public function blog()
    {
        return view ('syefdi.blog.index');
    } 
}
