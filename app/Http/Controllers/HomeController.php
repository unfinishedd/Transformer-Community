<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(){

        $posts = Post::all();
        $categories = Category::all();

       // dd($posts);

        return view('welcome', [
            'posts' => $posts,
            'categories' => $categories

        ]);
    }

}
