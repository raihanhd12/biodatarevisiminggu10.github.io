<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RaihanAdmin;
use App\Models\User;

class RaihanRegisterController extends Controller
{
    //
    public function index(){
        return view('raihanregister.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request){
       $validatedData=$request->validate([            
            'nama' =>'required|min:3',
            'namaPanggilan' =>'required|min:2',
            'ttl' =>'required|min:2',
            'jk' =>'required|min:2',
            'umur' =>'required|min:2',
            'hobi' =>'required|min:2',
            'agama' =>'required|min:2',
            'email' =>''
       ]);      
       RaihanAdmin::create($validatedData);
       $request->session()->flash('success','Data Tersimpan');
       return redirect('/coba');
       //    dd('Registrasi Berhasil!');
        // return $request->all();
    }

    public function registrasi(){
        return view('registrasi.index', [
            'title' => 'Registrasi'
        ]);
    }
    public function simpanregistrasi(Request $request){
        $validated=$request->validate([            
             'name' =>'required|min:5',             
             'email' =>'required|min:2',
             'password' =>'required|min:2'
        ]);  
        $validated['password'] = bcrypt($validated['password']);
        User::create($validated);
        $request->session()->flash('success','Data Tersimpan');
        return redirect('/raihanlogin');
        // dd('Berhasil!');
         // return $request->all();
     }
}
