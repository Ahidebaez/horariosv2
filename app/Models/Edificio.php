<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_edificio', 'nombre_corto'];

    /**
     * Relación: Un edificio tiene muchos lugares.
     */
    public function lugares()
    {
        return $this->hasMany(Lugar::class, 'edificio_id');
    }
}
