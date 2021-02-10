<?php

namespace App\Http\Controllers;

use DB;
use App\Model\Post;

class PostsController extends Controller
{
  
    public function show($slug)
    {
        return view('posts', [
            'post' => Post::where('slug' , $slug)->firstOrFail()
        ]);
    }

}