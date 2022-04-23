<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Raihan;

class RaihanController extends Controller
{
    //
    public function index(){
        $data = array (
            "title" => Raihan::getTitle(1)
        ); 
        return view('layouts.main',$data);
    }
    public function home(){
        $data = array (
            "title" => Raihan::getTitle(1),
            
        ); 
        return view('home',$data);
    }
    public function about(){
        $data = array (
            "title" => Raihan::getTitle(2),
            "nama" => Raihan::getNama(1),
            "namaPanggilan" => Raihan::getNamaPanggilan(1),
            "alamat" => Raihan::getAlamat(1),
            "hobi" => Raihan::getHobi(1),
            "noTelp" => Raihan::getNoTelp(1),
            "email" => Raihan::getEmail(1)            
        ); 
        return view('about',$data);
    }   
    public function comment(){
        $data = array (
            "title" => Raihan::getTitle(3),
            "nama" => Raihan::getNama(1),            
            "alamat" => Raihan::getAlamat(1),            
            "noTelp" => Raihan::getNoTelp(1),
            "email" => Raihan::getEmail(1)  
        ); 
        return view('comment',$data);
    }
    public function selengkapnya(){
        $data = array (
            "title" => Raihan::getTitle(4),
            "nama" => Raihan::getNama(1),
            "ttl" => Raihan::getTTL(1),
            "jk" => Raihan::getJK(1),
            "umur" => Raihan::getUmur(1),
            "hobi" => Raihan::getHobi(1),
            "agama" => Raihan::getAgama(1),
            "email" => Raihan::getEmail(1)
        );    
        return view('selengkapnya',$data); 
    }  
}
