<?php

namespace Database\Factories;

use App\Models\Banca;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class BancaFactory extends Factory
{
    protected $model = Banca::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company
        ];
    }
}
