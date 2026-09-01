<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //Ejecutar
    public function up(): void
    {
        Schema::create('codigos_matricula', function (Blueprint $table) {
            $table->id();

            $table->string('codigo', 20)->unique();

            // Indica si el código ya fue utilizado por un estudiante
            $table->boolean('usado')->default(false);

            // Si el código ya fue usado, aquí queda registrado quién lo usó
            $table->foreignId('user_id')
                  ->nullable()
                  ->constrained('users')
                  ->nullOnDelete();

            $table->timestamp('fecha_uso')->nullable();
            $table->date('fecha_expiracion')->nullable();

            $table->timestamps();
        });
    }

    //Revertir migración
    public function down(): void
    {
        Schema::dropIfExists('codigos_matricula');
    }
};