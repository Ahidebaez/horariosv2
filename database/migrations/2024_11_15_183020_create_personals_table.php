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
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->string('RFC', 100);
            $table->string('nombres', 100);
            $table->string('apellidop', 50);
            $table->string('apellidom', 50);
            $table->string('licenciatura', 200);
            $table->boolean('lictit');
            $table->string('especializacion', 200);
            $table->boolean('esptit');
            $table->string('maestria', 200);
            $table->boolean('maetit');
            $table->string('doctorado', 200);
            $table->boolean('doctit');
            $table->date('fecha_ing_sep');
            $table->date('fecha_ing_ins');
            $table->unsignedBigInteger('depto_id')->default(1); // Valor ficticio por defecto
            $table->unsignedBigInteger('puesto_id')->default(1); // Valor ficticio por defecto
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};