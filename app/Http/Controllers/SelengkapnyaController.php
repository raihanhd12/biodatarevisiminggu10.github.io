<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Selengkapnya;

class SelengkapnyaController extends Controller
{
    //
    public function index(){
        return view('selengkapnya', [
            'title' => Selengkapnya::find(1) -> title,
            'nama' => Selengkapnya::find(1) -> nama,
            'ttl' => Selengkapnya::find(1) -> ttl,
            'jk' => Selengkapnya::find(1) -> jk,
            'umur' => Selengkapnya::find(1) -> umur,
            'hobi' => Selengkapnya::find(1) -> hobi,
            'agama' => Selengkapnya::find(1) -> agama,
            'email' => Selengkapnya::find(1) -> email,
        ]);
    }
}