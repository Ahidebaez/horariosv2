<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
   
    use HasFactory;

    protected $fillable = ['nombre_lugar', 'nombre_corto', 'edificio_id'];

    /**
     * Relación: Un lugar pertenece a un edificio.
     */
    public function edificio()
    {
        return $this->belongsTo(Edificio::class, 'edificio_id');
    }

}


