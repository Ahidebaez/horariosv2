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
        Schema::create('puestos', function (Blueprint $table) {
            $table->id(); // Campo auto-incrementable para el ID principal
            $table->integer('idpuesto')->unique(); // Campo numérico único para identificar el puesto
            $table->string('nombre', 200); // Campo para el nombre del puesto
            $table->string('tipo', 200); // Campo para el tipo de puesto
            $table->timestamps(); // Campos para registrar fechas de creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('puestos');
    }
};