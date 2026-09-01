<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    // Ejecuta la migración (crea la tabla).
    public function up(): void
    {
        Schema::create('detalle_matricula', function (Blueprint $table) {
            $table->id();

            // Relación con la matrícula (cabecera)
            $table->foreignId('matricula_id')
                  ->constrained('matriculas')
                  ->cascadeOnDelete();

            // Relación con la sección asignada
            $table->foreignId('seccion_id')
                  ->constrained('secciones')
                  ->cascadeOnDelete();

            $table->timestamps();

            // Evita registrar la misma sección dos veces dentro de la misma matrícula
            $table->unique(['matricula_id', 'seccion_id']);
        });
    }

    // Revierte la migración
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('detalle_matricula');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
};