<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function viewPost(){
        $posts = Post::all();
        return view('pages.view', compact('posts'));
    }
}
