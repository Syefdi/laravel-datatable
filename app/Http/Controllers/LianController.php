<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LianController extends Controller
{
    public function index(){
        return 'Ini class dari lian';
    }

    public function contohView($nama = 'Lian'){


        return view('lian.contoh-view', ['nama' => $nama]);
    }
}
