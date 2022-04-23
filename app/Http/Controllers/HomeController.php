<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    //
    public function index(){
        return view('home', [
            'title' => Home::find(2) -> title,
            'nama' => Home::find(2) -> nama,
            'quote' => Home::find(2) ->quote
        ]);
    }
}
