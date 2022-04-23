<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RaihanAdmin;

class CobaController extends Controller
{
    //
    public function index(){
        return view('coba',[   
            'title' => 'coba',         
            'data' => RaihanAdmin::All()
        ]);
    }
}
