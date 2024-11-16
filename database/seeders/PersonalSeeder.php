<?php

namespace Database\Seeders;

use App\Models\Personal;
use Illuminate\Database\Seeder;

class PersonalSeeder extends Seeder
{
    public function run(): void
    {
        // Crear 10 maestros
        $maestros = [
            ['RFC' => 'CHAV123456ABC', 'nombres' => 'Ing. Chávez', 'apellidop' => 'Pérez', 'apellidom' => 'López'],
            ['RFC' => 'CAST123456DEF', 'nombres' => 'Ing. Castillón', 'apellidop' => 'García', 'apellidom' => 'Martínez'],
            ['RFC' => 'ISID123456GHI', 'nombres' => 'Ing. Isidro', 'apellidop' => 'Hernández', 'apellidom' => 'Sánchez'],
            ['RFC' => 'ROBE123456JKL', 'nombres' => 'Dr. Roberto', 'apellidop' => 'Torres', 'apellidom' => 'Ramírez'],
            ['RFC' => 'LUPU123456MNO', 'nombres' => 'Ing. Lupita Uribe', 'apellidop' => 'Gómez', 'apellidom' => 'Díaz'],
            ['RFC' => 'LUPE123456PQR', 'nombres' => 'Ing. Lupita Nájera', 'apellidop' => 'Jiménez', 'apellidom' => 'Morales'],
            ['RFC' => 'FLOR123456STU', 'nombres' => 'Ing. Flora', 'apellidop' => 'Reyes', 'apellidom' => 'Cruz'],
            ['RFC' => 'ROGE123456VWX', 'nombres' => 'Ing. César Rogelio', 'apellidop' => 'Ortiz', 'apellidom' => 'Mendoza'],
            ['RFC' => 'ARTU123456YZA', 'nombres' => 'Ing. Arturo', 'apellidop' => 'Vargas', 'apellidom' => 'Fernández'],
            ['RFC' => 'AQUI123456BCD', 'nombres' => 'Ing. Aquiles', 'apellidop' => 'Domínguez', 'apellidom' => 'Suárez'],
        ];

        // Crear registros de personal con valores ficticios para depto_id y puesto_id
        foreach ($maestros as $maestro) {
            Personal::create(array_merge($maestro, [
                'licenciatura' => 'Ingeniería en Sistemas Computacionales',
                'lictit' => true,
                'especializacion' => 'Educación',
                'esptit' => true,
                'maestria' => 'Tecnologías de la Información',
                'maetit' => true,
                'doctorado' => 'Ciencias de la Computación',
                'doctit' => true,
                'fecha_ing_sep' => now()->subYears(5),
                'fecha_ing_ins' => now()->subYears(3),
                'depto_id' => 1, // Valor ficticio
                'puesto_id' => 1, // Valor ficticio
            ]));
        }
    }
}