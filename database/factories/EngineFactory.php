<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Engine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Engine>
 */
class EngineFactory extends Factory
{
    protected $model = Engine::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->word,
            'horsepower' => $this->faker->numberBetween(100, 500),
            'car_id' => Car::factory(),
        ];
    }
}
