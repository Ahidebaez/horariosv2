<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PeriodoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'idPeriodo' => fake()->bothify('###'),
            'periodo' => fake()->text(10),
            'descCorto' => fake()->lexify('?????'),
            'fechaIni' => fake()->date(),
            'fechaFin' => fake()->date(),
        ];
    }
}
