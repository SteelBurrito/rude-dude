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

Route::get('/', function() {
    return redirect()->route('blog');
});
Route::get('/posts', 'PostsController@posts')->name('blog');
Route::get('/posts/create', 'PostsController@createpage')->name('createpage');
Route::get('/me', 'PostsController@me')->name('me');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts', 'PostsController@store')->name('store');
