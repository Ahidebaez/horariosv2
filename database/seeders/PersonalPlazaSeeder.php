<?php

namespace Database\Seeders;

use App\Models\PersonalPlaza;
use Illuminate\Database\Seeder;

class PersonalPlazaSeeder extends Seeder
{
    public function run(): void
    {
        // Crear 10 registros ficticios para personal_plazas
        for ($i = 1; $i <= 10; $i++) {
            PersonalPlaza::create([
                'tiponombramiento' => rand(1, 5), // Tipo de nombramiento aleatorio
                'plaza_id' => rand(1, 5), // Plaza ID ficticio entre 1 y 5
                'personal_id' => rand(1, 10), // Personal ID ficticio entre 1 y 10
            ]);
        }
    }
}
