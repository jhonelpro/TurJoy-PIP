<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Travel;

class travelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Travel::create([
            'origin' => 'Antofagasta',
            'destination' => 'Santiago',
            'seat_quantity' => 50,
            'base_rate' => 10000,
        ]);

        Travel::create([
            'origin' => 'Santiago',
            'destination' => 'Antofagasta',
            'seat_quantity' => 50,
            'base_rate' => 10000,
        ]);
    }
}