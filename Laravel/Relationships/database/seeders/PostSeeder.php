<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Facades\File;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/posts.json');
        $posts = collect(json_decode($json, true)['data']);

        $posts->each(function ($post) {
            Post::create([
                'title' => $post['title'],
                'description' => $post['description'],
                'user_id' => $post['user_id'],
            ]);
        });
    }
}
