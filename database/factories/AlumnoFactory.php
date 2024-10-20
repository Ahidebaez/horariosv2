<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
     
           
            'nombre' => fake()->name(), // Genera un nombre aleatorio
            'apellidop' => fake()->lastName(), // Genera un apellido paterno aleatorio
            'apellidom' => fake()->lastName(), // Genera un apellido materno aleatorio
            'sexo' => fake()->randomElement(['M', 'F']), // Genera aleatoriamente 'M' o 'F'
            'email' => fake()->unique()->safeEmail(), // Genera un correo único y seguro
         
        ];
    }
}