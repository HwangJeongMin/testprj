<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home/testss', 'HomeController@testss')->name('testss');

Route::get('/posts', 'PostController@index');

Route::get('/posts/create', 'PostController@create');

Route::post('/store', 'PostController@store');

Route::get('/show/{post}', 'PostController@show');

Route::get('/posts/{post}/edit', 'PostController@edit');

Route::PATCH('/update/{post}', 'PostController@update');