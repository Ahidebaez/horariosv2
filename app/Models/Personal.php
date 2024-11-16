<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $fillable = [
        'RFC',
        'nombres',
        'apellidop',
        'apellidom',
        'licenciatura',
        'lictit',
        'especializacion',
        'esptit',
        'maestria',
        'maetit',
        'doctorado',
        'doctit',
        'fecha_ing_sep',
        'fecha_ing_ins',
        'depto_id',
        'puesto_id',
    ];
}
