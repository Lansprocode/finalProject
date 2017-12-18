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
    return view('auth.login');
});

Route::get('/', function () {
    return view('auth.register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PostController@post')->name('post');

Route::get('/profile', 'ProfileController@profile')->name('profile');

Route::get('/category', 'CategoryController@category')->name('category');

Route::post('/addCategory', 'CategoryController@addCategory')->name('addCategory');

Route::post('/addProfile', 'ProfileController@addProfile')->name('addprofile');

Route::post('/addPost', 'PostController@addPost');

Route::get('/view/{id}', 'PostController@view')->name('view/{id}');

Route::get('/edit/{id}', 'PostController@edit')->name('edit');

Route::post('/editPost/{id}', 'PostController@editPost')->name('editPost');


