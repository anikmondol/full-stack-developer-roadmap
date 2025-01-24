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


        for ($i = 1; $i <= 10; $i++) {
            student::create([
                'name' => fake()->name,
                'email' => fake()->unique()->email()
            ]);
        }



        // $students = collect(
        //     [
        //         [
        //             'name' => 'anik mondal',
        //             'email' => 'anikmondal558363@gamil.com'
        //         ],
        //         [
        //             'name' => 'joy mondal',
        //             'email' => 'joymondal558363@gamil.com'
        //         ],
        //         [
        //             'name' => 'ritu mondal',
        //             'email' => 'ritumondal558363@gamil.com'
        //         ]
        //     ]
        // );


        // $json = File::get(path:'database/json/students.json');

        // $students = collect(json_decode($json));

        // $students->each(function ($student) {
        //     student::create([
        //         'name' => $student->name,
        //         'email' => $student->email
        //     ]);
        // });


        // student::insert($student);


    }
}
