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
        "data" => "Hello World"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
    ]);
});



Route::get('/posts', function () {
    $posts = [
        [
            "title" => "Nihil debitis eveniet eaque minima consequatur blanditiis.",
            "slug" => "nihil-debitis-eveniet-eaque-minima-consequatur-blanditiis",
            "author" => "Audrey Halvorson",
            "body" => "Autem optio laudantium dolores qui et. Earum impedit accusamus recusandae nam nobis velit. Neque vitae velit consectetur repellendus unde incidunt ad quaerat et. Sint ducimus qui. Aut totam harum sapiente animi occaecati nam repellendus molestias. Accusantium non sequi repudiandae vel alias quo perferendis. Deserunt id iure occaecati qui aut pariatur ut. Velit eius id. Et cupiditate accusamus non autem accusamus animi ut nihil. Ea fuga architecto corrupti libero a ad soluta et. Delectus ullam iure eos. Reiciendis soluta dolor qui vero maiores ducimus qui et at. Rerum iure ut aut voluptatem veniam modi animi molestiae nesciunt."
        ],
        [
            "title" => "Rerum ipsum dolorum eos qui harum.",
            "slug" => "rerum-ipsum-dolorum-eos-qui-harum",
            "author" => "Beth Hills",
            "body" => "In quasi quam architecto tenetur. Magni adipisci aspernatur. Ad quidem enim quidem placeat mollitia. Odit omnis optio quo qui non. Sunt facere animi nam sunt vel ratione. Reiciendis quibusdam ipsa eum aut ut doloribus dolores. Et unde voluptatibus ab earum repellat rem similique. Aut inventore officia consectetur qui nemo. Soluta soluta quidem quos excepturi harum assumenda perspiciatis. Quo illum tempora rem."
        ]
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $posts
    ]);
});

Route::get('posts/{slug}', function ($slug) {
    $posts = [
        [
            "title" => "Nihil debitis eveniet eaque minima consequatur blanditiis.",
            "slug" => "nihil-debitis-eveniet-eaque-minima-consequatur-blanditiis",
            "author" => "Audrey Halvorson",
            "body" => "Autem optio laudantium dolores qui et. Earum impedit accusamus recusandae nam nobis velit. Neque vitae velit consectetur repellendus unde incidunt ad quaerat et. Sint ducimus qui. Aut totam harum sapiente animi occaecati nam repellendus molestias. Accusantium non sequi repudiandae vel alias quo perferendis. Deserunt id iure occaecati qui aut pariatur ut. Velit eius id. Et cupiditate accusamus non autem accusamus animi ut nihil. Ea fuga architecto corrupti libero a ad soluta et. Delectus ullam iure eos. Reiciendis soluta dolor qui vero maiores ducimus qui et at. Rerum iure ut aut voluptatem veniam modi animi molestiae nesciunt."
        ],
        [
            "title" => "Rerum ipsum dolorum eos qui harum.",
            "slug" => "rerum-ipsum-dolorum-eos-qui-harum",
            "author" => "Beth Hills",
            "body" => "In quasi quam architecto tenetur. Magni adipisci aspernatur. Ad quidem enim quidem placeat mollitia. Odit omnis optio quo qui non. Sunt facere animi nam sunt vel ratione. Reiciendis quibusdam ipsa eum aut ut doloribus dolores. Et unde voluptatibus ab earum repellat rem similique. Aut inventore officia consectetur qui nemo. Soluta soluta quidem quos excepturi harum assumenda perspiciatis. Quo illum tempora rem."
        ]
    ];
    $new_post = [];
    foreach ($posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Post",
        "post" => $new_post
    ]);
});
