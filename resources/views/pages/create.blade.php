@extends('layouts.main-layout')
@section('content')
<h1>
    Create Post
</h1>

<form action="{{ route('store') }}" method="POST">
    @method('POST')
    @csrf

    <label for="title"></label>
    <input type="text" name="title" placeholder="title"><br>

    <label for="author">author</label>
    <input type="text" name="author" placeholder="author"><br>

    <label for="content">content</label>
    <input type="text" name="content" placeholder="content"><br>

    <select name="category">
        @foreach ($categories as $category)
            <option value="{{ $category -> id }}">{{ $category -> name  }}</option>
        @endforeach
    </select>

    <input type="submit" value="CREATE">
</form>

@endsection