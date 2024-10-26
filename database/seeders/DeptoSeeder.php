<?php

namespace Database\Seeders;

use App\Models\Depto;
use App\Models\Carrera;
use App\Models\Alumno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeptoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Depto::factory(5)->create();




        //Si hago seeder me cree carreras y alumnos
        Depto::factory(10)
                ->has(Carrera::factory(3)
                        ->has(Alumno::factory(4))
        )->create();
    }
}
