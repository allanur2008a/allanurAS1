<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = City::all();
        for ($i = 0; $i < 15; $i++) {
            Restaurant::create([
                'name' => fake()->company(),
                'city_id' => $cities->random()->id
            ]);
        }
    }
}




























