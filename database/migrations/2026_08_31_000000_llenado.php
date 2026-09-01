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

        $usuarios = [
            ['dni' => '72819201', 'codigo_institucional' => '0202114001', 'codigo_uns' => '202114001', 'nombres' => 'Fernando', 'apellidos' => 'Chinchay', 'escuela_profesional' => 'Ingeniería de Sistemas', 'ciclo' => 'VI CICLO'],
            ['dni' => '72819202', 'codigo_institucional' => '0202114006', 'codigo_uns' => '202114006', 'nombres' => 'Patri', 'apellidos' => 'Benites', 'escuela_profesional' => 'Ingeniería de Sistemas', 'ciclo' => 'VI CICLO'],
            ['dni' => '72819203', 'codigo_institucional' => '0202114007', 'codigo_uns' => '202114007', 'nombres' => 'Aaron', 'apellidos' => 'Segura', 'escuela_profesional' => 'Ingeniería de Sistemas', 'ciclo' => 'VI CICLO'],
            ['dni' => '72819204', 'codigo_institucional' => '0202114002', 'codigo_uns' => '202114002', 'nombres' => 'Carlos', 'apellidos' => 'Mendoza', 'escuela_profesional' => 'Ingeniería Civil', 'ciclo' => 'VIII CICLO'],
            ['dni' => '72819205', 'codigo_institucional' => '0202114008', 'codigo_uns' => '202114008', 'nombres' => 'Omar', 'apellidos' => 'Castro', 'escuela_profesional' => 'Ingeniería Civil', 'ciclo' => 'IV CICLO'],
            ['dni' => '72819206', 'codigo_institucional' => '0202114012', 'codigo_uns' => '202114012', 'nombres' => 'Gabriel', 'apellidos' => 'Silva', 'escuela_profesional' => 'Ingeniería Civil', 'ciclo' => 'VI CICLO'],
            ['dni' => '72819207', 'codigo_institucional' => '0202114003', 'codigo_uns' => '202114003', 'nombres' => 'María', 'apellidos' => 'Rodríguez', 'escuela_profesional' => 'Medicina Humana', 'ciclo' => 'X CICLO'],
            ['dni' => '72819208', 'codigo_institucional' => '0202114009', 'codigo_uns' => '202114009', 'nombres' => 'Sofía', 'apellidos' => 'Morales', 'escuela_profesional' => 'Medicina Humana', 'ciclo' => 'II CICLO'],
            ['dni' => '72819209', 'codigo_institucional' => '0202114004', 'codigo_uns' => '202114004', 'nombres' => 'Ana', 'apellidos' => 'Torres', 'escuela_profesional' => 'Enfermería', 'ciclo' => 'IV CICLO'],
            ['dni' => '72819210', 'codigo_institucional' => '0202114011', 'codigo_uns' => '202114011', 'nombres' => 'Lucía', 'apellidos' => 'Fernández', 'escuela_profesional' => 'Enfermería', 'ciclo' => 'VI CICLO'],
            ['dni' => '72819211', 'codigo_institucional' => '0202114005', 'codigo_uns' => '202114005', 'nombres' => 'Juan', 'apellidos' => 'Vargas', 'escuela_profesional' => 'Derecho y CC.PP.', 'ciclo' => 'VI CICLO'],
            ['dni' => '72819212', 'codigo_institucional' => '0202114010', 'codigo_uns' => '202114010', 'nombres' => 'Diego', 'apellidos' => 'Paredes', 'escuela_profesional' => 'Derecho y CC.PP.', 'ciclo' => 'VIII CICLO'],
        ];

        DB::table('users')->insert(array_map(function (array $usuario) use ($timestamp): array {
            return [
                ...$usuario,
                'name' => $usuario['nombres'].' '.$usuario['apellidos'],
                'email' => $usuario['codigo_institucional'].'@uns.edu.pe',
                'email_verified_at' => $timestamp,
                'password' => Hash::make('12345678'),
                'estado' => 'activo',
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ];
        }, $usuarios));

        DB::table('docentes')->insert([
            ['dni' => '40000001', 'nombres' => 'Carlos', 'apellidos' => 'Pérez', 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['dni' => '40000002', 'nombres' => 'María', 'apellidos' => 'Ruiz', 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['dni' => '40000003', 'nombres' => 'Juan', 'apellidos' => 'Castro', 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['dni' => '40000004', 'nombres' => 'Roberto', 'apellidos' => 'Gomez', 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['dni' => '40000005', 'nombres' => 'Luis', 'apellidos' => 'Vargas', 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
        ]);

        DB::table('cursos')->insert([
            ['codigo' => '1411-0035', 'nombre' => 'SISTEMAS DE INFORMACION II', 'escuela_profesional' => 'Ingeniería de Sistemas', 'creditos' => 3, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '1411-0033', 'nombre' => 'BASE DE DATOS II', 'escuela_profesional' => 'Ingeniería de Sistemas', 'creditos' => 4, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '1411-0031', 'nombre' => 'APLICACIONES DISTRIBUIDAS I', 'escuela_profesional' => 'Ingeniería de Sistemas', 'creditos' => 4, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '1411-0032', 'nombre' => 'COMUNICACION DE DATOS', 'escuela_profesional' => 'Ingeniería de Sistemas', 'creditos' => 4, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '1411-0034', 'nombre' => 'ARQUITECTURA DE SOFTWARE EMPRESARIAL', 'escuela_profesional' => 'Ingeniería de Sistemas', 'creditos' => 4, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '1411-0036', 'nombre' => 'ADMINISTRACION DE PROCESOS DE NEGOCIO', 'escuela_profesional' => 'Ingeniería de Sistemas', 'creditos' => 3, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '130219', 'nombre' => 'SIMULACION EN INGENIERIA', 'escuela_profesional' => 'Ingeniería Civil', 'creditos' => 3, 'ciclo' => 4, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '130220', 'nombre' => 'ESTATICA', 'escuela_profesional' => 'Ingeniería Civil', 'creditos' => 4, 'ciclo' => 4, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '130221', 'nombre' => 'MATEMATICA AVANZADA II', 'escuela_profesional' => 'Ingeniería Civil', 'creditos' => 4, 'ciclo' => 4, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '130322', 'nombre' => 'ARQUITECTURA', 'escuela_profesional' => 'Ingeniería Civil', 'creditos' => 4, 'ciclo' => 4, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '130323', 'nombre' => 'TECNOLOGIA DE LOS MATERIALES', 'escuela_profesional' => 'Ingeniería Civil', 'creditos' => 4, 'ciclo' => 4, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '130324', 'nombre' => 'TOPOGRAFIA II', 'escuela_profesional' => 'Ingeniería Civil', 'creditos' => 4, 'ciclo' => 4, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '130331', 'nombre' => 'MECANICA DE FLUIDOS I', 'escuela_profesional' => 'Ingeniería Civil', 'creditos' => 4, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '130332', 'nombre' => 'RESISTENCIA DE MATERIALES II', 'escuela_profesional' => 'Ingeniería Civil', 'creditos' => 4, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '130333', 'nombre' => 'MECANICA DE SUELOS II', 'escuela_profesional' => 'Ingeniería Civil', 'creditos' => 4, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '130334', 'nombre' => 'ESTRUCTURACION Y CARGAS', 'escuela_profesional' => 'Ingeniería Civil', 'creditos' => 3, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '130335', 'nombre' => 'INGENIERIA ECONOMIA', 'escuela_profesional' => 'Ingeniería Civil', 'creditos' => 3, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '130336', 'nombre' => 'LEGISLACION LABORAL Y TRIBUTARIA', 'escuela_profesional' => 'Ingeniería Civil', 'creditos' => 3, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '130343', 'nombre' => 'INSTALACIONES EN EDIFICACIONES', 'escuela_profesional' => 'Ingeniería Civil', 'creditos' => 4, 'ciclo' => 8, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '130344', 'nombre' => 'CONCRETO ARMADO II', 'escuela_profesional' => 'Ingeniería Civil', 'creditos' => 4, 'ciclo' => 8, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '130345', 'nombre' => 'ANALISIS ESTRUCTURAL II', 'escuela_profesional' => 'Ingeniería Civil', 'creditos' => 4, 'ciclo' => 8, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '130346', 'nombre' => 'ABASTECIMIENTO DE AGUA Y ALCANTARILLADO', 'escuela_profesional' => 'Ingeniería Civil', 'creditos' => 3, 'ciclo' => 8, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '130347', 'nombre' => 'CONSTRUCCIONES II', 'escuela_profesional' => 'Ingeniería Civil', 'creditos' => 3, 'ciclo' => 8, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '130348', 'nombre' => 'PLANEAMIENTO URBANO Y REGIONAL', 'escuela_profesional' => 'Ingeniería Civil', 'creditos' => 3, 'ciclo' => 8, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '201006', 'nombre' => 'FISICA', 'escuela_profesional' => 'Medicina Humana', 'creditos' => 4, 'ciclo' => 2, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '201007', 'nombre' => 'QUIMICA', 'escuela_profesional' => 'Medicina Humana', 'creditos' => 4, 'ciclo' => 2, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '201008', 'nombre' => 'METODOLOGIA DE LA INVESTIGACION CIENTIFICA', 'escuela_profesional' => 'Medicina Humana', 'creditos' => 4, 'ciclo' => 2, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '201009', 'nombre' => 'DESARROLLO PERSONAL', 'escuela_profesional' => 'Medicina Humana', 'creditos' => 3, 'ciclo' => 2, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '201010', 'nombre' => 'ACTIVIDAD INTEGRADORA II', 'escuela_profesional' => 'Medicina Humana', 'creditos' => 2, 'ciclo' => 2, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '240202', 'nombre' => 'ATENCION PREHOSPITALARIA BASICA', 'escuela_profesional' => 'Medicina Humana', 'creditos' => 5, 'ciclo' => 2, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '240315', 'nombre' => 'CLINICA MEDICA III', 'escuela_profesional' => 'Medicina Humana', 'creditos' => 10, 'ciclo' => 10, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '240316', 'nombre' => 'CLINICA PEDIATRICA III', 'escuela_profesional' => 'Medicina Humana', 'creditos' => 5, 'ciclo' => 10, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '240317', 'nombre' => 'CLINICA GINECO-OBSTETRICA III', 'escuela_profesional' => 'Medicina Humana', 'creditos' => 5, 'ciclo' => 10, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '240318', 'nombre' => 'CLINICA PSIQUIATRICA I', 'escuela_profesional' => 'Medicina Humana', 'creditos' => 5, 'ciclo' => 10, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '240319', 'nombre' => 'INVESTIGACION CIENTIFICA EN MEDICINA II', 'escuela_profesional' => 'Medicina Humana', 'creditos' => 3, 'ciclo' => 10, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => '240320', 'nombre' => 'GERENCIA EN SALUD', 'escuela_profesional' => 'Medicina Humana', 'creditos' => 3, 'ciclo' => 10, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => 'ENF-0401', 'nombre' => 'PSICOLOGIA DEL DESARROLLO', 'escuela_profesional' => 'Enfermería', 'creditos' => 3, 'ciclo' => 4, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => 'ENF-0402', 'nombre' => 'ENFERMERIA EN SALUD DEL ADULTO I', 'escuela_profesional' => 'Enfermería', 'creditos' => 8, 'ciclo' => 4, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => 'ENF-0403', 'nombre' => 'NUTRICION Y DIETETICA', 'escuela_profesional' => 'Enfermería', 'creditos' => 3, 'ciclo' => 4, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => 'ENF-0404', 'nombre' => 'EPIDEMIOLOGIA', 'escuela_profesional' => 'Enfermería', 'creditos' => 4, 'ciclo' => 4, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => 'ENF-0405', 'nombre' => 'FARMACOLOGIA Y TERAPEUTICA', 'escuela_profesional' => 'Enfermería', 'creditos' => 4, 'ciclo' => 4, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => 'ENF-0601', 'nombre' => 'ENFERMERIA EN SALUD FAMILIAR DEL NIÑO I', 'escuela_profesional' => 'Enfermería', 'creditos' => 7, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => 'ENF-0602', 'nombre' => 'ENFERMERIA EN SALUD MATERNO PERINATAL', 'escuela_profesional' => 'Enfermería', 'creditos' => 8, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => 'ENF-0603', 'nombre' => 'ENFERMERIA EN SALUD MENTAL', 'escuela_profesional' => 'Enfermería', 'creditos' => 6, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => 'DER-0601', 'nombre' => 'DERECHO COMERCIAL', 'escuela_profesional' => 'Derecho y CC.PP.', 'creditos' => 4, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => 'DER-0602', 'nombre' => 'DERECHO PROCESAL CIVIL II', 'escuela_profesional' => 'Derecho y CC.PP.', 'creditos' => 3, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => 'DER-0603', 'nombre' => 'DERECHO DE FAMILIA', 'escuela_profesional' => 'Derecho y CC.PP.', 'creditos' => 4, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => 'DER-0604', 'nombre' => 'DERECHO PROCESAL PENAL I', 'escuela_profesional' => 'Derecho y CC.PP.', 'creditos' => 4, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => 'DER-0605', 'nombre' => 'DERECHO PENAL PARTE ESPECIAL I', 'escuela_profesional' => 'Derecho y CC.PP.', 'creditos' => 3, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => 'DER-0606', 'nombre' => 'DERECHO LABORAL I', 'escuela_profesional' => 'Derecho y CC.PP.', 'creditos' => 4, 'ciclo' => 6, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => 'DER-0801', 'nombre' => 'TALLER DE INVESTIGACION I', 'escuela_profesional' => 'Derecho y CC.PP.', 'creditos' => 3, 'ciclo' => 8, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => 'DER-0802', 'nombre' => 'MEDICINA FORENSE', 'escuela_profesional' => 'Derecho y CC.PP.', 'creditos' => 3, 'ciclo' => 8, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => 'DER-0803', 'nombre' => 'DERECHO DE OBLIGACIONES', 'escuela_profesional' => 'Derecho y CC.PP.', 'creditos' => 4, 'ciclo' => 8, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => 'DER-0804', 'nombre' => 'DERECHO PROCESAL PENAL III SOBRE MENORES INFRACTORES', 'escuela_profesional' => 'Derecho y CC.PP.', 'creditos' => 4, 'ciclo' => 8, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => 'DER-0805', 'nombre' => 'CONTABILIDAD GENERAL', 'escuela_profesional' => 'Derecho y CC.PP.', 'creditos' => 3, 'ciclo' => 8, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['codigo' => 'DER-0806', 'nombre' => 'DERECHO DE LA SEGURIDAD SOCIAL', 'escuela_profesional' => 'Derecho y CC.PP.', 'creditos' => 3, 'ciclo' => 8, 'estado' => 'activo', 'created_at' => $timestamp, 'updated_at' => $timestamp],
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
