<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Materia extends Model
{
    use HasFactory;

    protected $fillable = ['idMateria', 'nombreMateria', 'nivel', 'nombre_mediano', 'nombre_corto', 'modalidad', 'reticula_id'];

    public function reticula(): BelongsTo
    {
        return $this->belongsTo(Reticula::class);
    }
}