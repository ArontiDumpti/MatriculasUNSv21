<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //Ejecutar la migración
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('dni', 8)->unique()->after('id');
            $table->string('codigo_institucional', 15)->unique()->after('dni');
            $table->string('nombres')->after('codigo_institucional');
            $table->string('apellidos')->after('nombres');
            $table->enum('estado', ['activo', 'inactivo'])->default('activo')->after('password');
        });
    }

    //Revertir la migración
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['dni', 'codigo_institucional', 'nombres', 'apellidos', 'estado']);
        });
    }
};