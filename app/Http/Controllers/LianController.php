<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LianController extends Controller
{
    public function index(){
        return 'Ini class dari lian';
    }

    public function contohView($nama = 'Lian'){
        return view('lian.contoh-view', ['nama' => $nama]);
    }

    public function blog(){
        return view('lian.blog.blog');
    }
    public function login()
    {
        return view('lian.auth.login');
    }

    // Proses login
    public function loginAction(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Coba autentikasi menggunakan email dan password
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/')->with('success', 'Login berhasil!');
        }

        // Jika gagal login
        return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
    }
}
