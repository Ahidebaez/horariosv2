<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('lugars', function (Blueprint $table) {
            $table->id(); // BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY
            $table->string('nombre_lugar', 25)->unique(); // Nombre del lugar único
            $table->string('nombre_corto', 5); // Abreviatura
            $table->bigInteger('edificio_id')->unsigned(); // Clave foránea para edificio
            $table->timestamps(); // created_at, updated_at

            // Relación de clave foránea con la tabla edificios
            $table->foreign('edificio_id')->references('id')->on('edificios')->onDelete('cascade'); 

            // Restricción única para el campo nombre_lugar
            $table->unique('nombre_lugar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lugars');
    }
};
