<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CitySeeder::class,
            CategorySeeder::class,
        ]);

        \App\Models\User::factory()->count(25)->create();

        $this->call([
            RestaurantSeeder::class,
            ProductSeeder::class,
            ReservationSeeder::class,
        ]);
    }
}
