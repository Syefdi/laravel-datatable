<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZidaneController extends Controller
{
    public function index(){
        return 'halo my name zidan ';
    }
    public function CopyView($name = 'zidane'){
        return view('zidan.contoh-view', ['name' => $name]);
    }
    public function blog(){
        return view('zidan.blog.index');
    }
}
