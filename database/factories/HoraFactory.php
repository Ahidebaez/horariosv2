<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hora>
 */
class HoraFactory extends Factory
{
    /**
     * Define el estado predeterminado del modelo.
     */
    public function definition(): array
    {
        $start = Carbon::createFromTime(7, 0);
        $end = $start->copy()->addHour();

        return [
            'hora_ini' => $start->toTimeString(),
            'hora_fin' => $end->toTimeString(),
        ];
    }
}
