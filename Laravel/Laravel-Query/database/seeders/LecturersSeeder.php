<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\lecturer;
use Illuminate\Support\Facades\File;

class LecturersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/lecturers.json');

        $lecturers =collect(json_decode($json));

        $lecturers->each(function ($lecturer) {
            lecturer::create([
                'name' => $lecturer->name,
                'email' => $lecturer->email,
                'age' => $lecturer->age,
                'city' => $lecturer->city,
            ]);
        });
    }
}
