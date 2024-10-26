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
        Schema::create('carreras', function (Blueprint $table) {
            // id es un unsignedBigInteger por defecto
            $table->id(); // Crea un campo 'id' autoincremental de tipo 'unsignedBigInteger'
            
            // Otras columnas de la tabla carreras
            $table->string("idcarrera", 15)->unique(); 
            $table->string("nombrecarrera", 200)->unique(); 
            $table->string("nombremediano", 50)->unique(); 
            $table->string('nombrecorto', 10);

            // Relación con la tabla deptos
            $table->unsignedBigInteger('depto_id'); // Definir como unsignedBigInteger
            $table->foreign('depto_id')->references('id')->on('deptos')->onDelete('cascade');

            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carreras');
    }
};