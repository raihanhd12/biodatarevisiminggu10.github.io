<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RaihanLoginController extends Controller
{
    //
    public function index(){
        return view('raihanlogin.index', [
            'title' => 'Login'
        ]);
    }
    public function validasilogin(Request $request){
        $validated=$request->validate([  
            'name' =>'required',
            'password' =>'required'
       ]);
       if(Auth::attempt($validated)){
           $request->session()->regenerate();

           return redirect()->intended('/coba');
       }
       return back()->withErrors([
           'salah' => "Login Gagal !"
       ]);    
    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/home');
    }
}
