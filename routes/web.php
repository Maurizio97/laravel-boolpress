<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MyController@home') -> name('home');

Route::post('/login', 'Auth\LoginController@login') -> name('login');

Route::post('/register', 'Auth\RegisterController@register') -> name('register');

Route::get('/logout', 'Auth\LoginController@logout') -> name('logout');

// view post
Route::get('/show', 'MyController@showPost') -> name('show');


Route::middleware(['auth'])->prefix('post')->group(function () {
    Route::get('/create', 'PostController@create') -> name('create');
    Route::post('/store', 'PostController@store') -> name('store');

    Route::get('/edit/{id}', 'PostController@edit') -> name('edit');
    Route::post('/update/{id}', 'PostController@update') -> name('update');


    Route::get('/delete/{id}', 'PostController@delete') -> name('delete');

});



// Auth::routes();

