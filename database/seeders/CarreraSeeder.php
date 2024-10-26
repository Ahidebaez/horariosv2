<?php

namespace Database\Seeders;

use App\Models\Depto;
use App\Models\Carrera;
use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener todos los Deptos existentes
        $deptos = Depto::all();

        // Sembrar 30 carreras, asignando a cada una un Depto existente al azar
        Carrera::factory(30)->create([
            'depto_id' => $deptos->random()->id, // Asignar un Depto aleatorio
        ]);
    }
}
