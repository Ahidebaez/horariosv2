<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EdificioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('edificios')->insert([
            ['nombre_edificio' => 'Edificio de Sistemas', 'nombre_corto' => 'SIS'],
            ['nombre_edificio' => 'Edificio K', 'nombre_corto' => 'K'],
            ['nombre_edificio' => 'Edificio D', 'nombre_corto' => 'D'],
            ['nombre_edificio' => 'Edificio de Ciencias Básicas', 'nombre_corto' => 'CB'],
        ]);
    }
}
