<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    //
    public function index(){
        return view('comment',[
            'title' => Comment::find(1) -> title,
            'nama' => Comment::find(1) -> nama,           
            'alamat' => Comment::find(1) -> alamat,           
            'noTelp' => Comment::find(1) -> noTelp,
            'email' => Comment::find(1) -> email  
        ]);
    }
}
