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
        Schema::create('deptos', function (Blueprint $table) {
          
            $table->id(); // Clave primaria autoincremental
            $table->string('iddepto', 5); // Define el tamaño según los datos (ajusté a 5 como ejemplo)
            $table->string('nombredepto', 100); // El tamaño puede ajustarse
            $table->string('nombremediano', 50);
            $table->string('nombrecorto', 10);
         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deptos');
    }
};