<?php

namespace App\Http\Controllers;

class PostsController
{
  
    public function show($slug)
    {

        // $posts = [
        //     'my-first-post' => 'Hello, this is my first blogpost',
        //     'my-second-post' => 'Hello, this is my second blogpost'
        // ];
        
        $post = \DB::table('posts')->where('slug' , $slug)->first();

        // dd($post);

        // if (! array_key_exists($post, $posts)) {
        //     abort(404, 'Sorry that post was not found');
        // }

        return view('posts', [
            'post' => $post
            ]);
    }


}