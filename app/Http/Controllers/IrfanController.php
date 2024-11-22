<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IrfanController extends Controller
{
    public function index()
    {
        return 'irfan arimiwandi';
    }

    public function contoh($name = 'irfan')
    {
        return view('irfan.contoh-view', ['name' => $name]);
    }
}
