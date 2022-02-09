@extends('layouts.main-layout')
@section('content')
<h1>
    Create Post
</h1>

<form action="{{ route('store') }}" method="POST">
    @method('POST')
    @csrf

    <label for="title">Title</label><br>
    <input type="text" name="title" placeholder="title"><br>

    <label for="author">Author</label><br>
    <input type="text" name="author" placeholder="author"><br>

    <label for="content">Content</label><br>
    <input type="text" name="content" placeholder="content"><br><br>

    @foreach ($tags as $tag)
        <input type="checkbox"  name="tag[]" value="{{ $tag -> id }}">
        <label for="tag">{{ $tag -> name }}</label><br>
    @endforeach

    <select name="category">
        @foreach ($categories as $category)
            <option value="{{ $category -> id }}">{{ $category -> name  }}</option>
        @endforeach
    </select>

    

    <input type="submit" value="CREATE">
</form>

@endsection