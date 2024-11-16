<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hora;
use Carbon\Carbon;

class HoraSeeder extends Seeder
{
    /**
     * Ejecuta los seeds.
     */
    public function run(): void
    {
        // Horarios de 7:00 AM a 10:00 PM en intervalos de 1 hora
        $startTime = Carbon::createFromTime(7, 0);
        $endTime = Carbon::createFromTime(22, 0); // 10:00 PM

        while ($startTime->lessThan($endTime)) {
            Hora::create([
                'hora_ini' => $startTime->toTimeString(),
                'hora_fin' => $startTime->copy()->addHour()->toTimeString(),
            ]);

            $startTime->addHour(); // Incrementar por 1 hora
        }
    }
}
