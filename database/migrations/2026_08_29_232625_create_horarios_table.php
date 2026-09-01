<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();

            // Relación con la sección a la que pertenece el horario
            $table->foreignId('seccion_id')
                  ->constrained('secciones')
                  ->cascadeOnDelete();

            $table->enum('dia_semana', ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo']);
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->string('aula', 50)->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('horarios');
    }
};