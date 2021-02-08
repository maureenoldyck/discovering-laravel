<?php

namespace App\Http\Controllers;

class PostsController
{
  
    public function show($slug)
    {

        $post = \DB::table('posts')->where('slug' , $slug)->first();


        // if (! array_key_exists($post, $posts)) {
        //     abort(404, 'Sorry that post was not found');
        // }

        return view('posts', [
            'post' => $post
        ]);
    }


}