<?php

namespace Database\Factories;

use App\Models\Reticula;
use Illuminate\Database\Eloquent\Factories\Factory;

class MateriaFactory extends Factory
{
    protected $model = \App\Models\Materia::class;

    public function definition(): array
    {
        return [
            'idMateria' => $this->faker->unique()->bothify('????##'),
            'nombreMateria' => $this->faker->sentence(2),
            'nivel' => $this->faker->randomElement(['1', '2', '3', '4']),
            'nombre_mediano' => $this->faker->word(),
            'nombre_corto' => $this->faker->word(),
            'modalidad' => $this->faker->randomElement(['P', 'V']),
            'reticula_id' => Reticula::factory(), // Esto debe ser válido y debe haber registros en reticula
        ];
    }
}