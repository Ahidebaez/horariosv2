<?php

namespace Database\Factories;

use App\Models\Departamento;
use App\Models\Depto;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonalFactory extends Factory
{
    public function definition(): array
    {
        return [
            'RFC' => $this->faker->regexify('[A-Z]{4}[0-9]{6}[A-Z0-9]{3}'),
            'nombres' => $this->faker->firstName(),
            'apellidop' => $this->faker->lastName(),
            'apellidom' => $this->faker->lastName(),
            'licenciatura' => 'Ingeniería en Sistemas Computacionales',
            'lictit' => true,
            'especializacion' => 'Educación',
            'esptit' => true,
            'maestria' => 'Tecnologías de la Información',
            'maetit' => true,
            'doctorado' => 'Ciencias de la Computación',
            'doctit' => true,
            'fecha_ing_sep' => $this->faker->date(),
            'fecha_ing_ins' => $this->faker->date(),
            'depto_id' => 1, // Valor ficticio
            'puesto_id' => 1, // Valor ficticio
        ];
    }
}