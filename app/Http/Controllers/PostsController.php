<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()

    {

        return view('posts.index');

    }
    
    public function postDetail(Post $post) {

        return view('post', [
            'post' => $post
        ]);
    }
}
