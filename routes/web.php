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
    return view('welcome');
});

// Route::get('/posts', 'PostController@index')->name('posts.index');
// Route::get('/published', 'PostController@published')->name('posts.published');


Route::get('/posts/published', 'PostController@published')->name('posts.published');

Route::resource('posts', 'PostController');
Route::resource('photos', 'PhotoController');

Auth::routes();

Route::prefix('admin')
->namespace('Admin')
->name('admin.')
->middleware('auth')
->group(function() {
    Route::resource('users', 'UserController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
