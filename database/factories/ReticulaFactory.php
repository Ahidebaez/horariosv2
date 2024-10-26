<?php
namespace Database\Factories;

use App\Models\Carrera;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReticulaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'idReticula' => fake()->bothify('????##'),
            'descripcion' => fake()->sentence(3),
            'fechaenvigor' => fake()->date(),
            'idcarrera' => Carrera::factory(), // Cambiar carrera_id por idcarrera
        ];
    }
}