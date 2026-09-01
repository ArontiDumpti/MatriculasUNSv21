<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //Ejecuta la migración (crea la tabla).
     
    public function up(): void
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->char('codigo', 10)->unique(); // Ej: "0202014018" 
            $table->string('nombre');                // Ej: "BASE DE DATOS II"
            $table->unsignedTinyInteger('creditos');
            $table->unsignedTinyInteger('ciclo');     // Ciclo fijo al que pertenece el curso 
            $table->enum('estado', ['activo', 'inactivo'])->default('activo');
            $table->timestamps();
        });
    }

    //Revierte la migración (elimina la tabla).
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};