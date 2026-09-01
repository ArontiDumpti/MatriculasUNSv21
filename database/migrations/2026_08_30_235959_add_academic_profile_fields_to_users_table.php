<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // La migración anterior ya crea escuela_profesional y ciclo.
        // La condición permite reanudar migrate tras el fallo parcial previo en MySQL.
        if (! Schema::hasColumn('users', 'codigo_uns')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('codigo_uns', 9)->unique()->after('codigo_institucional');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('users', 'codigo_uns')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropUnique(['codigo_uns']);
                $table->dropColumn('codigo_uns');
            });
        }
    }
};
