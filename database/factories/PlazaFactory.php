<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plaza>
 */
class PlazaFactory extends Factory
{
    protected $model = \App\Models\Plaza::class; // Define el modelo asociado

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idPlaza' => $this->faker->unique()->randomNumber(5),  // Genera un idPlaza único (puedes ajustarlo según necesites)
            'nombrePlaza' => $this->faker->sentence(3),  // Genera un nombre de plaza aleatorio (frase de 3 palabras)
        ];
    }
}