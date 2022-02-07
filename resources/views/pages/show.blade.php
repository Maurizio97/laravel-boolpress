@extends('layouts.main-layout')
@section('content')
    
<ul>
    @foreach ($posts as $post)
    <li>
        {{ $post -> author }} -
        {{ $post -> created_at }} 
    </li>
    @endforeach
</ul>
@endsection