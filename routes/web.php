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

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/author', 'Auth\LoginController@showAuthorLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/author', 'Auth\RegisterController@showAuthorRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/author', 'Auth\LoginController@authorLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/author', 'Auth\RegisterController@createAuthor');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/author', 'author');
