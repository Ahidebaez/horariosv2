<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LugarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lugars')->insert([
            // Salas del Edificio de Sistemas
            ['nombre_lugar' => 'Sala de Computación 1', 'nombre_corto' => 'SC1', 'edificio_id' => 1],
            ['nombre_lugar' => 'Sala de Computación 2', 'nombre_corto' => 'SC2', 'edificio_id' => 1],
            
            // Salones del Edificio K
            ['nombre_lugar' => 'Salón 101', 'nombre_corto' => 'K101', 'edificio_id' => 2],
            ['nombre_lugar' => 'Salón 102', 'nombre_corto' => 'K102', 'edificio_id' => 2],
            
            // Salones del Edificio D
            ['nombre_lugar' => 'Salón 201', 'nombre_corto' => 'D201', 'edificio_id' => 3],
            ['nombre_lugar' => 'Salón 202', 'nombre_corto' => 'D202', 'edificio_id' => 3],
        ]);
    }
}
