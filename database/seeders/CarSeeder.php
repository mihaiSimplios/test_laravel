<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Driver;
use App\Models\Engine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ceeaza 10 mașini
        Car::factory()->count(10)->create()->each(function ($car) {
            // Creeaza un motor pentru fiecare masina
            Engine::factory()->create(['car_id' => $car->id]);

            // Creeaza 3 soferi pentru fiecare masina
            Driver::factory()->count(3)->create(['car_id' => $car->id]);
        });
    }
}
