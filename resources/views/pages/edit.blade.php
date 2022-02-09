@extends('layouts.main-layout')
@section('content')
<h1>
    Create Post
</h1>

<form action="{{ route('update', $post -> id) }}" method="POST">
    @method('POST')
    @csrf

    <label for="title">Title</label><br>
    <input type="text" name="title" value="{{ $post -> title}}"><br>

    <label for="author">Author</label><br>
    <input type="text" name="author" value="{{ $post -> author}}"><br>

    <label for="content">Content</label><br>
    <input type="text" name="content" value="{{ $post -> content}}"><br><br>

    @foreach ($tags as $tag)
        
        <input type="checkbox"  name="tag[]" value="{{ $tag -> id }}"
        
        @foreach ($post -> tags as $postTag)
            @if ($postTag -> id == $tag -> id)
                checked
            @endif
        @endforeach
       
        >
        <label for="tag">{{ $tag -> name }}</label><br>
    @endforeach

    <select name="category">
        <option value="{{ $post -> category_id }}" selected disabled hidden>{{ $post -> category -> name }}</option>
        @foreach ($categories as $category)
            <option value="{{ $category -> id }}">{{ $category -> name  }}</option>
        @endforeach
    </select>

    

    <input type="submit" value="CREATE">
</form>

@endsection