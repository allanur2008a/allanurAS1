<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = Restaurant::all();
        $categories = Category::all();

        for ($i = 0; $i < 80; Si++) {
            Product::create([
                'name' => fake()->word(),
                'price' => fake()->numberBetween(1000, 5000),
                'restaurant_id' => $restaurants->random()->id,
                category_id => $categories->random()->id
            ]);
        }
    }
}
