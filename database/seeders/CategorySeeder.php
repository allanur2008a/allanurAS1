<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Breakfast','Salads','Drinks','Desserts'];
        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
