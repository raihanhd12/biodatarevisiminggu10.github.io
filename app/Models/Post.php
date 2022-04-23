<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Model;
use Illuminate\Database\Eloquent\Factories\Collection;

class Post extends Model
{
    // use HasFactory;
    private static $dataku = "Ini lemparan dari data Model";

    public static function kirim(){
        return self::$dataku;
    }
    public static function siapa($id){
        $nama="";
        if($id == 1){
            $nama = "Raihan Hidayatullah Djunaedi";
        }
        else{
            $nama = "Marco Gautama Wijaya";
        }
        return $nama;
    }
    public static function collected(){
        $c = collect([1,2,3,]);
        return $c->max();
    }
}