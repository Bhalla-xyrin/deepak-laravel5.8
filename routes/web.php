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

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('admin');
Route::get('/login/author', 'Auth\LoginController@showAuthorLoginForm')->name('login-author');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/author', 'Auth\RegisterController@showAuthorRegisterForm')->name('register-author');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/author', 'Auth\LoginController@authorLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('register');
Route::post('/register/author', 'Auth\RegisterController@createAuthor');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'layouts.admin');
Route::view('/author', 'layouts.author')->name('author');

//Posts 
Route::view('/all-posts' , 'posts.show-all');

Route::view('/post' , 'posts.create');
Route::post('/posts' , 'Post\PostController@store');
Route::get('/post/{id}' , 'Post\PostController@show');



Route::view('/categories-list', 'posts.categories');

Route::get('/categories-detail/{post}' , 'Post\PostController@categories');





