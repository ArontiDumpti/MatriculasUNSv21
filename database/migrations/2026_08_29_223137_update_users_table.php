<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('dni', 8)->unique()->after('id');
            $table->string('codigo_institucional', 15)->unique()->after('dni');
            $table->string('nombres')->after('codigo_institucional');
            $table->string('apellidos')->after('nombres');
            $table->string('escuela_profesional')->default('Ingeniería de Sistemas')->after('apellidos');
            $table->string('ciclo')->default('VI CICLO')->after('escuela_profesional');
            $table->enum('estado', ['activo', 'inactivo'])->default('activo')->after('password');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['dni', 'codigo_institucional', 'nombres', 'apellidos', 'escuela_profesional', 'ciclo', 'estado']);
        });
    }
};
