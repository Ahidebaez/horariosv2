<?php

namespace Database\Factories;

use App\Models\PersonalPlaza;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonalPlazaFactory extends Factory
{
    protected $model = PersonalPlaza::class;

    public function definition(): array
    {
        return [
            'tiponombramiento' => $this->faker->numberBetween(1, 5), // Tipo de nombramiento aleatorio entre 1 y 5
            'plaza_id' => $this->faker->numberBetween(1, 5), // Plaza ID ficticio
            'personal_id' => $this->faker->numberBetween(1, 10), // Personal ID ficticio entre 1 y 10
        ];
    }
}
