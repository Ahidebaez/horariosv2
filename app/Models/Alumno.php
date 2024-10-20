<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
       // Especifica los campos que pueden ser asignados en masa
       protected $fillable = ['nombre', 'apellidop', 'apellidom', 'email', 'sexo'];



}
