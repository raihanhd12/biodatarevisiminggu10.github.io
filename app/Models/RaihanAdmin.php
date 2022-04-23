<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaihanAdmin extends Model
{
    use HasFactory;
    protected $fillable = [   
        'title',     
        'nama',
        'namaPanggilan',
            'ttl',
            'jk' ,
            'umur',
            'hobi',
            'agama',
            'email'

    ];
}
