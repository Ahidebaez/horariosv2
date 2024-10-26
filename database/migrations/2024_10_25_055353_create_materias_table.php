<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasTable extends Migration
{
    public function up(): void
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->string('idMateria', 10);
            $table->string('nombreMateria', 200);
            $table->char('nivel', 1);
            $table->string('nombreMediano', 25);
            $table->string('nombreCorto', 10);
            $table->char('modalidad', 1);
            $table->foreignId('reticula_id')->constrained('reticulas')->onDelete('cascade'); // Asegúrate de que la relación esté definida aquí
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
}