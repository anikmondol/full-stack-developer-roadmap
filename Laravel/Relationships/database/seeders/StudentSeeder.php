<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;



class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/students.json');
        $students = collect(json_decode($json, true)['data']);

        $students->each(function ($student) {
            Student::create([
                'name' => $student['name'],
                'age' => $student['age'],
                'gender' => $student['gender'],
            ]);
        });
    }
}
