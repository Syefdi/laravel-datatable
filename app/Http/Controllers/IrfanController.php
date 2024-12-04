<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IrfanController extends Controller
{
    public function index()
    {
        // return 'irfan arimiwandi';
        return view('irfan.content');
    }

    public function contoh($name = 'irfan')
    {
    }

    public function blog()
    {
        return view('irfan.blog.index');
    }
}
