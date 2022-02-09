<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;

class PostController extends Controller
{
    public function create(){
        $categories = Category::all();
        $tags = Tag::all();
        return view('pages.create', compact('categories', 'tags'));
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

        $tag = Tag::findOrFail($request -> get('tag'));
        $post -> tags() -> attach($tag);
        $post -> save();

        return redirect() -> route('show');
    }

    public function edit($id){

        $post = Post::findOrFail($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view('pages.edit', compact('post', 'categories', 'tags'));
    }

    public function update(Request $request, $id){
        $data = $request -> validate([
            'title' => 'required|max:40|string',
            'author' => 'required|max:40|string',
            'content' => 'required|string',
        ]);

        $post = Post::findOrFail($id);
        $post -> update($data);

        $category = Category::findOrFail($request -> get('category'));
        $post -> category() -> associate($category);

        $post -> save();

        $tags = Tag::findOrFail($request -> get('tag'));
        $post -> tags() -> sync($tags);

        $post -> save();

        return redirect() -> route('show');


    }

    public function delete($id){
        $post = Post::findOrFail($id);
        $post -> tags() -> sync([]);
        $post -> save();

        $post -> delete();

        return redirect() -> route('show');
    }
}
