<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Depto>
 */
class DeptoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'iddepto' => $this->faker->unique()->bothify('??##'), // Más combinaciones posibles
            'nombredepto' => $this->faker->unique()->jobTitle(),
            'nombremediano' => $this->faker->unique()->lexify(str_repeat("?", 15)),
            'nombrecorto' => $this->faker->unique()->lexify('?????'), // Asegúrate de que sea único
        ];
    }
}