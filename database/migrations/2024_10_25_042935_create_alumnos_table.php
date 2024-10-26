<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id(); // Identificador autoincrementable
            $table->string("noctrl", 8)->unique(); // Número de control único
            $table->string("nombre", 50); // Nombre del alumno
            $table->string("apellidop", 50); // Apellido paterno
            $table->string("apellidom", 50); // Apellido materno
            $table->string("sexo", 1); // Sexo del alumno (M/F)
            $table->string("email", 200); // Email
            $table->unsignedBigInteger('carrera_id'); // Clave foránea con carrera

            // Establecer la relación con la tabla carreras
            $table->foreign('carrera_id')->references('id')->on('carreras')->onDelete('cascade');

            $table->timestamps(); // Timestamps para created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
