<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function Index(){
        $posts = [
            'Mon premier super titre',
            'Mon second super titre'
        ];

        return view('articles', compact('posts'));
    }

    public function show($id){
        $posts =[
            1 => 'Mon titre n°1',
            2 => 'Mon titre n°2'
        ];  
        $post = $posts[$id];

        return view('article',[
            'post' => $post
        ]);
    }

    public function contact(){
        
        return view('contact');
    }
}
