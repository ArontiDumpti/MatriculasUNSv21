<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   //Ejecutar
    public function up(): void
    {
        Schema::create('secciones', function (Blueprint $table) {
            $table->id();

            // Relación con el curso al que pertenece esta sección
            $table->foreignId('curso_id')
                  ->constrained('cursos')
                  ->cascadeOnDelete();

            // Relación con el docente que dicta esta sección (opcional por si no está asignado aún)
            $table->foreignId('docente_id')
                  ->nullable()
                  ->constrained('docentes')
                  ->nullOnDelete();

            // Tipo de sección: teoría (una sola por curso) o laboratorio (varios grupos)
            $table->enum('tipo', ['teoria', 'laboratorio']);

            // Grupo solo aplica para laboratorio (A, B, C). Nulo si es teoría.
            $table->enum('grupo', ['A', 'B', 'C'])->nullable();

            $table->unsignedSmallInteger('cupo_maximo')->default(15);
            $table->enum('estado', ['activo', 'inactivo'])->default('activo');
            $table->timestamps();

            // Evita duplicar el mismo grupo de laboratorio dos veces para un mismo curso
            $table->unique(['curso_id', 'tipo', 'grupo']);
        });
    }

    //Revierte la migración (elimina la tabla).
    public function down(): void
    {
        Schema::dropIfExists('secciones');
    }
};