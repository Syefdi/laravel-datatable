<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
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

    public function login()
    {
        return view('irfan.auth.login');
    }

    public function authLogin(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            return redirect()->route('irfan.blog')->with('success', 'Login berhasil!');
        }

        return back()->withErrors([
            'email' => 'email salah',
            'password' => 'password salah'
        ]);
    }
}
