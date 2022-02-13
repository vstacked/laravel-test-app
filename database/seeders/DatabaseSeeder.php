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
        User::factory(5)->create();

        Category::create([
            'name' => 'Category 1',
            'slug' => 'category-1',
        ]);

        Category::create([
            'name' => 'Category 2',
            'slug' => 'category-2',
        ]);

        Post::factory(20)->create();
    }
}
