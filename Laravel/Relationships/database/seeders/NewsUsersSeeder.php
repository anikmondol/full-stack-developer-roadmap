<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NewsUsers;
use Illuminate\Support\Facades\File;

class NewsUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/news_users.json');
        $newsUers = collect(json_decode($json, true)['data']);

        $newsUers->each(function ($user) {
            NewsUsers::create([
                'name' => $user['name'],
                'email' => $user['email'],
            ]);
        });
    }
}
