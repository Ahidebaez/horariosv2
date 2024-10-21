<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Puesto>
 */
class PuestoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Definición de tipos de puestos
        $tipos = ['Docente', 'Director', 'Administrador', 'Coordinador', 'Asesor'];

        return [
            'idpuesto' => $this->faker->unique()->numberBetween(1, 1000),  // Genera un número aleatorio único entre 1 y 1000
            'nombre' => $this->faker->jobTitle(),  // Genera un título de trabajo aleatorio
            'tipo' => $this->faker->randomElement($tipos),  // Selecciona un tipo de puesto al azar
            'descripcion' => $this->faker->sentence(10),  // Genera una descripción aleatoria de 10 palabras
        ];
    }
}

