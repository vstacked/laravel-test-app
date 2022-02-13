<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'me',
            'email' => 'me@mail.com',
            'password' => bcrypt('password'),
        ]);

        Category::create([
            'name' => 'Category 1',
            'slug' => 'category-1',
        ]);

        Category::create([
            'name' => 'Category 2',
            'slug' => 'category-2',
        ]);

        Post::create([
            'title' => 'Post 1',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'post-1',
            'excerpt' => 'Excerpt 1',
            'body' => 'Body 1',
            'published_at' => now(),
        ]);

        Post::create([
            'title' => 'Post 2',
            'category_id' => 2,
            'user_id' => 1,
            'slug' => 'post-2',
            'excerpt' => 'Excerpt 2',
            'body' => 'Body 2',
            'published_at' => now(),
        ]);

        Post::create([
            'title' => 'Post 3',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'post-3',
            'excerpt' => 'Excerpt 3',
            'body' => 'Body 3',
            'published_at' => now(),
        ]);
    }
}
