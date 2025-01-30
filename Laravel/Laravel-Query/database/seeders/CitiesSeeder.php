<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;
use Illuminate\Support\Facades\File;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/cities.json');

        $cities =collect(json_decode($json));

        $cities->each(function ($city) {
            City::create([
                'id' => $city->id,
                'city_name' => $city->city_name
            ]);
        });
    }
}
