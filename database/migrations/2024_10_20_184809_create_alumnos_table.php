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
            $table->id(); // Clave primaria auto incrementable
            $table->string('nombre', 50); // Campo de nombre con longitud máxima 50
            $table->string('apellidop', 50); // Campo de apellido paterno con longitud máxima 50
            $table->string('apellidom', 50); // Campo de apellido materno con longitud máxima 50
            $table->char('sexo', 1); // Campo de sexo con longitud 1
            $table->string('email', 200); // Campo de email con longitud máxima 200
            $table->timestamps(); // Campos de created_at y updated_at
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