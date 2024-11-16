<?php

namespace Database\Factories;

use App\Models\Personal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Puesto>
 */
class PuestoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Los tipos de puesto que mencionaste
        $tipos = array('Docente', 'Dirección', 'No Docente', 'Auxiliar', 'Administrativo');

        // Los nombres específicos de los puestos
        $puestos = array(
            'Docente' => 'Docente',
            'Dirección' => 'Dirección',
            'No Docente' => 'No Docente',
            'Auxiliar' => 'Auxiliar',
            'Administrativo' => 'Administrativo'
        );

        // Obtener un id aleatorio de la tabla `personals`
        // $personal = Personal::all()->random();  // Obtiene un registro aleatorio de la tabla `personals`

        return [
            // 'idPuesto' => $personal->id,  // Asigna el id de `personals` como la clave foránea
            'nombre' => $puestos[fake()->randomElement($tipos)],  // El nombre corresponde al tipo seleccionado
            'tipo' => fake()->randomElement($tipos)  // Selecciona aleatoriamente el tipo de puesto
        ];
    }
}
