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
        Schema::create('personal_plazas', function (Blueprint $table) {
            $table->id(); // ID de la relación
            $table->smallInteger('tiponombramiento'); // Tipo de nombramiento
            $table->unsignedBigInteger('plaza_id')->default(1); // Plaza ID ficticio
            $table->unsignedBigInteger('personal_id')->default(1); // Personal ID ficticio
            $table->timestamps(); // Tiempos de creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_plazas');
    }
};
