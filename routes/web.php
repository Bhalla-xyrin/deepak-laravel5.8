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

Route::view('/', 'welcome');
Auth::routes();

//Author routes
Route::get('/login/author', 'Auth\LoginController@showAuthorLoginForm')->name('login-author');
Route::get('/register/author', 'Auth\RegisterController@showAuthorRegisterForm')->name('register-author');
Route::post('/login/author', 'Auth\LoginController@authorLogin');
Route::post('/register/author', 'Auth\RegisterController@createAuthor');
Route::view('/author', 'layouts.author')->name('author');

//Admin routes
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('admin');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('register');
Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::view('/admin', 'layouts.admin');

//Posts 
Route::get('/all-posts' , 'Post\PostController@index')->name('all-posts');
Route::get('/post/{id}' , 'Post\PostController@show');

//create new post
Route::view('/post' , 'posts.create');
Route::post('/posts' , 'Post\PostController@store');

//Post categories
Route::view('/categories-list', 'posts.categories');
Route::get('/categories-detail/{post}' , 'Post\PostController@categories');


//Edit post
Route::group(['guard' => 'admin', 'author'], function () {
    Route::put('/post/{task}', 'Post\PostController@update')->name('posts.update');
});

Route::get('/posts/{post}/edit', 'Post\PostController@edit')->name('posts.edit');

Route::any('/search', 'Post\PostController@search');


//default
Route::view('/home', 'home')->middleware('auth');
