<?php

namespace Database\Seeders;

use App\Models\Reservation;
use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $restaurants = Restaurant::all();

        for ($i = 0; $i < 80; $i++) {
            Reservation::create([
                'user_id' => $users->random()->id,
                'restaurant_id' => $restaurants->random()->id,
                'reservation_time' => now()->addDays(rand(1, 30)),
                'party_size' => rand(1, 8)
            ]);
        }
    }
}
