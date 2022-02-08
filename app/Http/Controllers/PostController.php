<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{
    public function create(){
        $categories = Category::all();
        return view('pages.create', compact('categories'));
    }

    public function store(Request $request){
        $data = $request -> validate([
            'title' => 'required|max:40|string',
            'author' => 'required|max:40|string',
            'content' => 'required|string',
        ]);

        $post = Post::make($data);
        $category = Category::findOrFail($request -> get('category'));
        $post -> category() -> associate($category);

        $post -> save();

        return redirect() -> route('show');
    }
}
