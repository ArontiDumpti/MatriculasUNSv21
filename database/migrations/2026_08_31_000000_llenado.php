<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Carga los datos visibles en las vistas plantilla para el ciclo 2026-I.
     */
    public function up(): void
    {
        $timestamp = now();

        DB::table('users')->insert([
            'dni' => '72819201',
            'codigo_institucional' => '0202114001',
            'nombres' => 'Fernando',
            'apellidos' => 'Chinchay',
            'name' => 'Fernando Chinchay',
            'email' => 'fernando.chinchay@uns.edu.pe',
            'email_verified_at' => $timestamp,
            'password' => Hash::make('password'),
            'estado' => 'activo',
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ]);

        DB::table('docentes')->insert([
            ['dni' => '40000001', 'nombres' => 'Carlos', 'apellidos' => 'Pérez', 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['dni' => '40000002', 'nombres' => 'María', 'apellidos' => 'Ruiz', 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['dni' => '40000003', 'nombres' => 'Juan', 'apellidos' => 'Castro', 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['dni' => '40000004', 'nombres' => 'Roberto', 'apellidos' => 'Gomez', 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['dni' => '40000005', 'nombres' => 'Luis', 'apellidos' => 'Vargas', 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
        ]);

        DB::table('cursos')->insert([
            ['codigo' => '1411-0035', 'nombre' => 'SISTEMAS DE INFORMACION II', 'creditos' => 3, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '1411-0033', 'nombre' => 'BASE DE DATOS II', 'creditos' => 4, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '1411-0031', 'nombre' => 'APLICACIONES DISTRIBUIDAS I', 'creditos' => 4, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '1411-0032', 'nombre' => 'COMUNICACION DE DATOS', 'creditos' => 4, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '1411-0034', 'nombre' => 'ARQUITECTURA DE SOFTWARE EMPRESARIAL', 'creditos' => 4, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '1411-0036', 'nombre' => 'ADMINISTRACION DE PROCESOS DE NEGOCIO', 'creditos' => 3, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
        ]);

        $cursos = DB::table('cursos')->whereIn('codigo', [
            '1411-0031', '1411-0032', '1411-0033', '1411-0034', '1411-0035', '1411-0036',
        ])->pluck('id', 'codigo');
        $docentes = DB::table('docentes')->whereIn('dni', [
            '40000001', '40000002', '40000003', '40000004', '40000005',
        ])->pluck('id', 'dni');

        // Las secciones de laboratorio representan los grupos elegibles en la plantilla.
        DB::table('secciones')->insert([
            ['curso_id' => $cursos['1411-0035'], 'docente_id' => $docentes['40000001'], 'tipo' => 'laboratorio', 'grupo' => 'A', 'cupo_maximo' => 15, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['curso_id' => $cursos['1411-0035'], 'docente_id' => $docentes['40000001'], 'tipo' => 'laboratorio', 'grupo' => 'B', 'cupo_maximo' => 15, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['curso_id' => $cursos['1411-0033'], 'docente_id' => $docentes['40000002'], 'tipo' => 'laboratorio', 'grupo' => 'A', 'cupo_maximo' => 15, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['curso_id' => $cursos['1411-0031'], 'docente_id' => $docentes['40000003'], 'tipo' => 'laboratorio', 'grupo' => 'A', 'cupo_maximo' => 15, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['curso_id' => $cursos['1411-0032'], 'docente_id' => $docentes['40000004'], 'tipo' => 'laboratorio', 'grupo' => 'A', 'cupo_maximo' => 15, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['curso_id' => $cursos['1411-0034'], 'docente_id' => $docentes['40000005'], 'tipo' => 'laboratorio', 'grupo' => 'A', 'cupo_maximo' => 15, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
        ]);

        $secciones = DB::table('secciones')
            ->join('cursos', 'secciones.curso_id', '=', 'cursos.id')
            ->where('secciones.grupo', 'A')
            ->pluck('secciones.id', 'cursos.codigo');

        DB::table('horarios')->insert([
            ['seccion_id' => $secciones['1411-0035'], 'dia_semana' => 'Lunes', 'hora_inicio' => '08:00', 'hora_fin' => '10:00', 'aula' => 'Aula 102', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['seccion_id' => $secciones['1411-0035'], 'dia_semana' => 'Miercoles', 'hora_inicio' => '08:00', 'hora_fin' => '10:00', 'aula' => 'Aula 102', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['seccion_id' => $secciones['1411-0033'], 'dia_semana' => 'Martes', 'hora_inicio' => '10:00', 'hora_fin' => '12:00', 'aula' => 'Lab. Computo 01', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['seccion_id' => $secciones['1411-0033'], 'dia_semana' => 'Jueves', 'hora_inicio' => '10:00', 'hora_fin' => '12:00', 'aula' => 'Lab. Computo 01', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['seccion_id' => $secciones['1411-0031'], 'dia_semana' => 'Lunes', 'hora_inicio' => '14:00', 'hora_fin' => '16:00', 'aula' => 'Lab. Software 03', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['seccion_id' => $secciones['1411-0031'], 'dia_semana' => 'Miercoles', 'hora_inicio' => '14:00', 'hora_fin' => '16:00', 'aula' => 'Lab. Software 03', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['seccion_id' => $secciones['1411-0032'], 'dia_semana' => 'Viernes', 'hora_inicio' => '08:00', 'hora_fin' => '12:00', 'aula' => 'Aula 204', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['seccion_id' => $secciones['1411-0034'], 'dia_semana' => 'Miercoles', 'hora_inicio' => '14:00', 'hora_fin' => '16:00', 'aula' => 'Lab. 02', 'created_at' => $timestamp, 'updated_at' => $timestamp],
        ]);

        $matriculaId = DB::table('matriculas')->insertGetId([
            'user_id' => DB::table('users')->where('codigo_institucional', '0202114001')->value('id'),
            'ciclo' => '2026-I',
            'estado' => 'confirmada',
            'fecha_confirmacion' => $timestamp,
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ]);

        DB::table('detalle_matricula')->insert([
            ['matricula_id' => $matriculaId, 'seccion_id' => $secciones['1411-0035'], 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['matricula_id' => $matriculaId, 'seccion_id' => $secciones['1411-0033'], 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['matricula_id' => $matriculaId, 'seccion_id' => $secciones['1411-0031'], 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['matricula_id' => $matriculaId, 'seccion_id' => $secciones['1411-0032'], 'created_at' => $timestamp, 'updated_at' => $timestamp],
        ]);
    }

    public function down(): void
    {
        $userId = DB::table('users')->where('codigo_institucional', '0202114001')->value('id');

        if ($userId !== null) {
            DB::table('matriculas')->where('user_id', $userId)->delete();
        }

        DB::table('cursos')->whereIn('codigo', [
            '1411-0031', '1411-0032', '1411-0033', '1411-0034', '1411-0035', '1411-0036',
        ])->delete();
        DB::table('docentes')->whereIn('dni', [
            '40000001', '40000002', '40000003', '40000004', '40000005',
        ])->delete();
        DB::table('users')->where('codigo_institucional', '0202114001')->delete();
    }
};
