<?php

namespace Database\Seeders;

use App\Models\Materia;
use App\Models\Reticula;
use Illuminate\Database\Seeder;

class MateriaSeeder extends Seeder
{
    public function run(): void
    {
        // Obtenemos todas las reticulas existentes
        $reticulas = Reticula::all();

        foreach ($reticulas as $reticula) {
            // Creamos 10 materias para cada reticula
            Materia::factory(10)->create([
                'reticula_id' => $reticula->id, // Asignamos el id de la reticula a cada materia
            ]);
        }
    }
}