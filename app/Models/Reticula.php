<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reticula extends Model
{
    use HasFactory;

    protected $fillable = ['idReticula', 'Descripcion', 'fechaenvigor', 'idcarrera']; // Cambiar carrera_id por idcarrera

    public function carrera(): BelongsTo
    {
        return $this->belongsTo(Carrera::class, 'idcarrera', 'id'); // Asegúrate de que el campo coincida
    }

    public function materias()
    {
        return $this->hasMany(Materia::class);
    }
}