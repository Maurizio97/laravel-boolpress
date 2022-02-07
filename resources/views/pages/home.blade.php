@extends('layouts.main-layout')
@section('content')

@auth
        <h1>{{ Auth::user() -> name }}</h1>
        <a class="btn btn-secondary" href="{{ route('logout') }}">LOGOUT</a><br>
        <br><br>
        @else
        <h1>If you wanne see my site you have to login/register</h1>
<h1>
    Login
</h1>

<form action="{{ route('login') }}" method="POST" >
    @method('POST')
    @csrf

    <label for="email">Email</label>
    <input type="email" name="email" placeholder="email"><br>
    <label for="password">password</label>
    <input type="password" name="password" placeholder="password"><br>
    <input type="submit" value="Login">
</form>

<br><br><hr class="bg-white"><br><br>
<h1>
    register
</h1>

<form action="{{ route('register') }}" method="POST" >
    @method('POST')
    @csrf
    
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="name"><br>
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="email"><br>
    <label for="password">password</label>
    <input type="password" name="password" placeholder="password"><br>
    <label for="password_confirmation">Password Confirmation</label>
    <input type="password_confirmation" name="password_confirmation" placeholder="password confirmation"><br>
    <input type="submit" value="Login">
</form>
@endauth
@endsection