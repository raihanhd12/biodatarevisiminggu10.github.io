<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Raihan extends Model
{
    
    
    public static function getTitle($id){
        if ($id === 1){
            $title = "Home";
        }   
        elseif ($id === 2) {
            $title = "About";
        }
        elseif ($id === 3) {
            $title = "Comment";
        }
        else{
            $title = "Selengkapnya";
        }
        return $title;
    }
   
    public static function getNama($nama){
        if ($nama === 1){
            $nama = "Raihan Hidayatullah Djunaedi";
        }
        return $nama;
    }

    public static function getTTL($ttl){
        if ($ttl === 1){
            $ttl = "12 Februari 2002";
        }
        return $ttl;
    }

    public static function getJK($jk){
        if ($jk === 1){
            $jk = "Laki - Laki";
        }
        else if($jk === 2){
            $jk = "Perempuan";
        }
        return $jk;
    }

    public static function getUmur($umur){
        if ($umur === 1){
            $umur = "20 Tahun";
        }
        return $umur;
    }

    public static function getAgama($agama){
        if ($agama === 1){
            $agama = "Islam";
        }
        return $agama;
    }    

    public static function getAlamat($alamat){
        if($alamat=== 1){
            $alamat = "Jl. Puspa VI No.32 Mekarmukti, Bekasi, Jawa Barat 17530";
        }        
        return $alamat;
    }

    public static function getNamaPanggilan($namaPanggilan){
        if($namaPanggilan=== 1){
            $namaPanggilan = "Raihan";
        }        
        return $namaPanggilan;
    }

    public static function getHobi($hobi){
        if($hobi=== 1){
            $hobi = "Bermain Gitar dan Mendengarkan Musik";
        }        
        return $hobi;
    }

    public static function getNoTelp($noTelp){
        if($noTelp=== 1){
            $noTelp = "081906781639";
        }        
        return $noTelp;
    }

    public static function getEmail($email){
        if($email=== 1){
            $email = "itsmehannn@gmail.com";
        }        
        return $email;
    }

    
    public static function getArrayku(){
        $data = collect([1,2,3,4,5]);
        // $total = ''; 
        // foreach ($data as $d) {
        //     $total = (int)$total + (int)$d;
        // }
        // return $total;
            return $data -> sum();
    }
}
