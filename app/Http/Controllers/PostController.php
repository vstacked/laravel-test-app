<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = 'All Post';
        if (request('category')) {
            $title = 'Posts By Category : ' . Category::firstWhere('slug', request('category'))->name;
        }
        if (request('author')) {
            $title = 'Posts By Author : ' . User::firstWhere('username', request('author'))->name;
        }

        return view('posts', [
            "title" => $title,
            "active" => "posts",
            //* tools clockwork
            //* eager loading
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
