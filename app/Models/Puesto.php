<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    use HasFactory;

    // Campos que se pueden rellenar en masa
    protected $fillable = ['idpuesto', 'nombre', 'tipo', 'descripcion'];
}
