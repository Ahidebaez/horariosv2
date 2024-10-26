<?php

namespace Database\Factories;

use App\Models\Carrera;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    protected $model = \App\Models\Alumno::class; // Asegúrate de que el modelo esté definido correctamente

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'noctrl' => fake()->bothify("########"),
            'nombre' => fake()->name(),
            'apellidop' => fake()->lastName(),
            'apellidom' => fake()->lastName(),
            'sexo' => fake()->randomElement(['M', 'F']),
            'email' => fake()->email(),
            // Aquí selecciona una carrera existente
            'carrera_id' => Carrera::all()->random()->id, // Selecciona aleatoriamente una carrera existente
        ];
    }
}