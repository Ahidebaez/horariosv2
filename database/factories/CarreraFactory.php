<?php

namespace Database\Factories;

use App\Models\Depto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carrera>
 */
class CarreraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titulo = fake()->unique()->jobTitle(); // Asegúrate de que sea único

        // Limitar el nombre corto a un máximo de 6 caracteres
        $nombrecorto = substr($titulo, 0, 6) . '-' . fake()->unique()->numberBetween(1, 99); // Mantenerlo único

        return [
            'idcarrera' => fake()->bothify("????####"),
            'nombrecarrera' => $titulo,
            'nombremediano' => fake()->lexify(str_repeat("?", 15)),
            'nombrecorto' => $nombrecorto,
            'depto_id' => Depto::factory(),
        ];
    }
}