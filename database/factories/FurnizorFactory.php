<?php

namespace Database\Factories;

use App\Models\Furnizor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Furnizor>
 */
class FurnizorFactory extends Factory
{
    protected $model = Furnizor::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company
        ];
    }
}
