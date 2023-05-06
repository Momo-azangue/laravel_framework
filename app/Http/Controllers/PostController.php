<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function Index(){
        $posts =  Post::all();
    
        
        return view('articles', compact('posts'));
    }

    public function show($id){

        // $post =  Post::findOrfail($id);


        $post = Post::where('title', 'Dolore quibusdam voluptas est qui rerum repudiandae quidem.')->first();

 

        return view('article',[
            'post' => $post
        ]);
    }

    public function contact(){
        
        return view('contact');
    }
}
