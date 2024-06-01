<?php

namespace Database\Factories;

use App\Models\SocietateLeasing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SocietateLeasing>
 */
class SocietateLeasingFactory extends Factory
{
    protected $model = SocietateLeasing::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
        ];
    }
}
