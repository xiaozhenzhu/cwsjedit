<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.default')->name('home');
});

Route::get('/articles', 'ArticlesController@index');

//Route::get('/articles/{article}', 'ArticlesController@show');

Route::get('/articles/create', 'ArticlesController@create');

Route::post('/articles', 'ArticlesController@store');


Route::get('/articles/{article}/comments', 'CommentsController@store');



//Route::get('/register', 'AuthController@register');

//Route::get('/login', 'AuthController@login');

Route::get('/register', 'RegistrationController@create');

Route::get('/login', 'SessionController@create');
