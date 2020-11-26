<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class PostController 
{

    public function show($slug){

        $post =  DB::table('posts')->where('slug', $slug)->first();

        $post = Post::where('slug', $slug)-> first();
        
        if (! $post) {
            abort(404);
        }

         return view('post', [
            'post' => $post
    ]);

    }
    // public function show($slug) 
    // {
    //     $post =\DB::table('posts')-> where ('slug', $slug) -> first();
    //     dd($post);


    //     if(! array_key_exists($post, 'post')){
    //         abord(404, 'woopsy!');
    //     }

    // return view('post', ['post' =>$posts[$post]
    // ]);
    // }
}
 