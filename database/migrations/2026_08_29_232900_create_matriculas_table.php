<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();
            // Conecta con la tabla users (quién realiza la matrícula)
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            
            $table->string('ciclo', 10);
            $table->enum('estado', ['pendiente', 'confirmada', 'cancelada'])->default('pendiente');
            $table->timestamp('fecha_confirmacion')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('matriculas');
    }
};