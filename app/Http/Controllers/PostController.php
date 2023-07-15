<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function Index(){

        $post = Post::all();

        // $post->delete(); 
        //$post = Post::find(1);
        // $post->update([
        //     'title' => 'Titre édité'
        // ]);

        $posts =  Post::orderBy('title')->get();
    
        
        return view('articles', compact('posts'));
    }

    public function show($id){

        $post =  Post::findOrfail($id);


        // $post = Post::where('title', 'Dolore quibusdam voluptas est qui rerum repudiandae quidem.')->firstOrfail();

 

        return view('article',[
            'post' => $post
        ]);
    }

    public function contact(){
        
        return view('contact');
    }

    public function create(){

        return view('form');
    }
    public function store(Request $request){
        
        // $post = new Post();
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->save();

        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        dd('Post créé !');
    }

}
