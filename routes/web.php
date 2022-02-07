<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MyController@home') -> name('home');

Route::post('/login', 'Auth\LoginController@login') -> name('login');

Route::post('/register', 'Auth\RegisterController@register') -> name('register');

Route::get('/logout', 'Auth\LoginController@logout') -> name('logout');

// view post
Route::get('/show', 'MyController@showPost') -> name('show');

Route::get('/post/create', 'HomeController@create') -> name('create');
Route::post('/post/store', 'HomeController@store') -> name('store');



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
