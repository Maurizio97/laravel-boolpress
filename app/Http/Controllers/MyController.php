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

    public function create(){
        return view('pages.create');
    }

    public function store(Request $request){
        $data = $request -> validate([
            'title' => 'required|max:40|string',
            'author' => 'required|max:40|string',
            'content' => 'required|string',
        ]);

        Post::create($data);
        return redirect() -> route('view');
    }
}
