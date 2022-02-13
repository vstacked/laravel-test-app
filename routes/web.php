<?php

use App\Http\Controllers\PostController;
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
        "data" => "Hello World"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
    ]);
});



Route::get('/posts', [PostController::class, 'index']);

//* 'post:slug' means find by slug ( get where slug == 'slug' )
//* '{post} means default find by id
Route::get('posts/{post:slug}', [PostController::class, 'show']);
