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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "active" => 'about'
    ]);
});

Route::get('/categories', function () {
    return view('categories', [
        "title" => "categories",
        "active" => 'categories'
    ]);
});


Route::get('/posts', function () {
    return view('posts', [
        "title" => "posts",
        "active" => 'posts'
    ]);
});
