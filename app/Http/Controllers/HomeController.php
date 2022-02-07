<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
