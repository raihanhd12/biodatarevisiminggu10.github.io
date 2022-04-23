<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    //
    public function index(){
        return view('about', [
            'title' => About::find(2)->title,
            'nama' => About::find(2)->nama,
            'namaPanggilan' => About::find(2)->namaPanggilan,
            'alamat' => About::find(2)->alamat,
            'hobi' => About::find(2)->hobi,
            'noTelp' => About::find(2)->noTelp,
            'email' => About::find(2)->email   
        ]);
    }
}
