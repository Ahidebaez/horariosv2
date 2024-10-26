<?php

namespace Database\Seeders;

use App\Models\Reticula;
use Illuminate\Database\Seeder;

class ReticulaSeeder extends Seeder
{
    public function run(): void
    {
        // Crear 5 Reticulas y asociarles 10 Materias a cada una
        Reticula::factory(5)
            ->hasMaterias(10)
            ->create();
    }
}
