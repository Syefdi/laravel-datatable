<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
    public function login(){
        return view('zidan.auth.login');
    }
    public function loginAction(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
        ]);
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect()->route('zidane.blog')->with('success', 'login success!');
        }
        return back()->withErrors(['email' => 'email atau password salah.'])->withInput();
    }
}
