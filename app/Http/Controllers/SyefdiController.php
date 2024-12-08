<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
    public function login()
    {
        return view ('syefdi.auth.login');
    }  
    public function loginAction(Request $request)
    {
        $request->validate([
            'username'  => 'required',
            'password'  => 'required|min:6',
        ]);
        if (Auth::attempt($request->only('username', 'password'))) {
            return redirect()->route('syefdi.blog')->with('success', 'login sukses!');
        }
        return back()->withErrors(['username' => 'username atau password salah.'])->withInput();
    }

}  
