@extends('layouts.app')

@section('title', 'Dashboard - Matrícula UNS')

@section('content')
    <div class="space-y-6">

        <!-- Banner Bienvenida UNS (Rojo Guinda) -->
        <div class="bg-gradient-to-r from-red-900 via-red-800 to-uns-darkred text-white rounded-xl p-6 shadow-md relative overflow-hidden border-l-4 border-uns-gold">
            <div class="relative z-10">
                <span class="bg-uns-gold text-xs font-bold px-2.5 py-1 rounded text-white uppercase tracking-wider">Ciclo 2026-I</span>
                <h2 class="text-2xl font-bold mt-2">¡Bienvenido, Fernando!</h2>
                <p class="text-red-100 text-sm mt-1">Estudiante de Ingeniería de Sistemas &bull; Código: 0202114001</p>

                <div class="mt-4 flex flex-wrap gap-3">
                    <a href="{{ url('/matricula') }}" class="bg-uns-gold hover:bg-amber-600 text-white text-sm font-semibold px-4 py-2 rounded-lg shadow flex items-center gap-2 transition">
                        <i class="fa-solid fa-pen-to-square"></i>
                        Iniciar Matrícula 2026-I
                    </a>
                </div>
            </div>
        </div>

        <!-- Cards de Resumen -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm flex items-center gap-4">
                <div class="w-12 h-12 rounded-lg bg-red-100 text-uns-red flex items-center justify-center text-xl">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <div>
                    <p class="text-xs text-gray-500 uppercase font-semibold">Ciclo Relativo</p>
                    <p class="text-lg font-bold text-gray-800">VI Ciclo</p>
                </div>
            </div>

            <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm flex items-center gap-4">
                <div class="w-12 h-12 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl">
                    <i class="fa-solid fa-list-check"></i>
                </div>
                <div>
                    <p class="text-xs text-gray-500 uppercase font-semibold">Cursos Aptos</p>
                    <p class="text-lg font-bold text-gray-800">8 Cursos Disponibles</p>
                </div>
            </div>

            <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm flex items-center gap-4">
                <div class="w-12 h-12 rounded-lg bg-purple-100 text-purple-700 flex items-center justify-center text-xl">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <div>
                    <p class="text-xs text-gray-500 uppercase font-semibold">Estado de Alumno</p>
                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-semibold bg-green-100 text-green-800">
                    Regular
                </span>
                </div>
            </div>
        </div>

        <!-- Sección Cursos Disponibles para Matrícula (Ancho completo) -->
        <div id="pendientes" class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center pb-4 mb-4 border-b border-gray-100 gap-3">
                <div>
                    <h3 class="font-bold text-lg text-gray-800 flex items-center gap-2">
                        <i class="fa-solid fa-book-open text-emerald-600"></i>
                        Cursos Disponibles para Matrícula (Ciclo VI)
                    </h3>
                    <p class="text-xs text-gray-500 mt-0.5">Asignaturas aptas según tu plan de estudios de Ingeniería de Sistemas UNS</p>
                </div>
                <a href="{{ url('/matricula') }}" class="bg-uns-red hover:bg-uns-darkred text-white text-xs font-semibold px-4 py-2 rounded-lg shadow transition flex items-center gap-2">
                    <span>Ir a Matricularme</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <!-- Lista de los 8 cursos reales de la UNS -->
            <div class="space-y-3">

                <!-- Curso 1 -->
                <div class="p-4 bg-emerald-50/50 rounded-xl border border-emerald-100 flex flex-col md:flex-row justify-between items-start md:items-center gap-3 hover:bg-emerald-50 transition">
                    <div class="flex items-center gap-3">
                        <span class="text-xs font-mono font-bold bg-white text-gray-700 px-2.5 py-1 rounded border border-gray-200">1411-0035</span>
                        <div>
                            <p class="font-bold text-sm text-gray-900">SISTEMAS DE INFORMACION II</p>
                            <p class="text-xs text-gray-500">Ciclo: 6 &bull; Grupo: C &bull; Modalidad: 1° REGULAR</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 self-end md:self-auto">
                        <span class="text-xs font-semibold text-red-800 bg-red-100 px-2.5 py-1 rounded-full">3 Créditos</span>
                        <span class="text-xs font-bold text-emerald-800 bg-emerald-100 px-2.5 py-1 rounded-full">Apto</span>
                    </div>
                </div>

                <!-- Curso 2 -->
                <div class="p-4 bg-emerald-50/50 rounded-xl border border-emerald-100 flex flex-col md:flex-row justify-between items-start md:items-center gap-3 hover:bg-emerald-50 transition">
                    <div class="flex items-center gap-3">
                        <span class="text-xs font-mono font-bold bg-white text-gray-700 px-2.5 py-1 rounded border border-gray-200">1411-0033</span>
                        <div>
                            <p class="font-bold text-sm text-gray-900">BASE DE DATOS II</p>
                            <p class="text-xs text-gray-500">Ciclo: 6 &bull; Grupo: A &bull; Modalidad: 1° REGULAR</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 self-end md:self-auto">
                        <span class="text-xs font-semibold text-red-800 bg-red-100 px-2.5 py-1 rounded-full">4 Créditos</span>
                        <span class="text-xs font-bold text-emerald-800 bg-emerald-100 px-2.5 py-1 rounded-full">Apto</span>
                    </div>
                </div>

                <!-- Curso 3 -->
                <div class="p-4 bg-emerald-50/50 rounded-xl border border-emerald-100 flex flex-col md:flex-row justify-between items-start md:items-center gap-3 hover:bg-emerald-50 transition">
                    <div class="flex items-center gap-3">
                        <span class="text-xs font-mono font-bold bg-white text-gray-700 px-2.5 py-1 rounded border border-gray-200">1411-0031</span>
                        <div>
                            <p class="font-bold text-sm text-gray-900">APLICACIONES DISTRIBUIDAS I</p>
                            <p class="text-xs text-gray-500">Ciclo: 6 &bull; Grupo: A &bull; Modalidad: 1° REGULAR</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 self-end md:self-auto">
                        <span class="text-xs font-semibold text-red-800 bg-red-100 px-2.5 py-1 rounded-full">4 Créditos</span>
                        <span class="text-xs font-bold text-emerald-800 bg-emerald-100 px-2.5 py-1 rounded-full">Apto</span>
                    </div>
                </div>

                <!-- Curso 4 -->
                <div class="p-4 bg-emerald-50/50 rounded-xl border border-emerald-100 flex flex-col md:flex-row justify-between items-start md:items-center gap-3 hover:bg-emerald-50 transition">
                    <div class="flex items-center gap-3">
                        <span class="text-xs font-mono font-bold bg-white text-gray-700 px-2.5 py-1 rounded border border-gray-200">1411-0032</span>
                        <div>
                            <p class="font-bold text-sm text-gray-900">COMUNICACION DE DATOS</p>
                            <p class="text-xs text-gray-500">Ciclo: 6 &bull; Grupo: A &bull; Modalidad: 1° REGULAR</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 self-end md:self-auto">
                        <span class="text-xs font-semibold text-red-800 bg-red-100 px-2.5 py-1 rounded-full">4 Créditos</span>
                        <span class="text-xs font-bold text-emerald-800 bg-emerald-100 px-2.5 py-1 rounded-full">Apto</span>
                    </div>
                </div>

                <!-- Curso 5 -->
                <div class="p-4 bg-emerald-50/50 rounded-xl border border-emerald-100 flex flex-col md:flex-row justify-between items-start md:items-center gap-3 hover:bg-emerald-50 transition">
                    <div class="flex items-center gap-3">
                        <span class="text-xs font-mono font-bold bg-white text-gray-700 px-2.5 py-1 rounded border border-gray-200">1411-0034</span>
                        <div>
                            <p class="font-bold text-sm text-gray-900">ARQUITECTURA DE SOFTWARE EMPRESARIAL</p>
                            <p class="text-xs text-gray-500">Ciclo: 6 &bull; Grupo: A &bull; Modalidad: 1° REGULAR</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 self-end md:self-auto">
                        <span class="text-xs font-semibold text-red-800 bg-red-100 px-2.5 py-1 rounded-full">4 Créditos</span>
                        <span class="text-xs font-bold text-emerald-800 bg-emerald-100 px-2.5 py-1 rounded-full">Apto</span>
                    </div>
                </div>

                <!-- Curso 6 -->
                <div class="p-4 bg-emerald-50/50 rounded-xl border border-emerald-100 flex flex-col md:flex-row justify-between items-start md:items-center gap-3 hover:bg-emerald-50 transition">
                    <div class="flex items-center gap-3">
                        <span class="text-xs font-mono font-bold bg-white text-gray-700 px-2.5 py-1 rounded border border-gray-200">1411-0036</span>
                        <div>
                            <p class="font-bold text-sm text-gray-900">ADMINISTRACION DE PROCESOS DE NEGOCIO</p>
                            <p class="text-xs text-gray-500">Ciclo: 6 &bull; Grupo: A &bull; Modalidad: 1° REGULAR</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 self-end md:self-auto">
                        <span class="text-xs font-semibold text-red-800 bg-red-100 px-2.5 py-1 rounded-full">3 Créditos</span>
                        <span class="text-xs font-bold text-emerald-800 bg-emerald-100 px-2.5 py-1 rounded-full">Apto</span>
                    </div>
                </div>

                <!-- Curso 7 -->
                <div class="p-4 bg-emerald-50/50 rounded-xl border border-emerald-100 flex flex-col md:flex-row justify-between items-start md:items-center gap-3 hover:bg-emerald-50 transition">
                    <div class="flex items-center gap-3">
                        <span class="text-xs font-mono font-bold bg-white text-gray-700 px-2.5 py-1 rounded border border-gray-200">1411-0037</span>
                        <div>
                            <p class="font-bold text-sm text-gray-900">INGENIERIA DE REQUERIMIENTOS</p>
                            <p class="text-xs text-gray-500">Ciclo: 6 &bull; Grupo: B &bull; Modalidad: 1° REGULAR</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 self-end md:self-auto">
                        <span class="text-xs font-semibold text-red-800 bg-red-100 px-2.5 py-1 rounded-full">3 Créditos</span>
                        <span class="text-xs font-bold text-emerald-800 bg-emerald-100 px-2.5 py-1 rounded-full">Apto</span>
                    </div>
                </div>

                <!-- Curso 8 -->
                <div class="p-4 bg-emerald-50/50 rounded-xl border border-emerald-100 flex flex-col md:flex-row justify-between items-start md:items-center gap-3 hover:bg-emerald-50 transition">
                    <div class="flex items-center gap-3">
                        <span class="text-xs font-mono font-bold bg-white text-gray-700 px-2.5 py-1 rounded border border-gray-200">1411-0038</span>
                        <div>
                            <p class="font-bold text-sm text-gray-900">GESTION DE PROYECTOS DE SOFTWARE</p>
                            <p class="text-xs text-gray-500">Ciclo: 6 &bull; Grupo: A &bull; Modalidad: 1° REGULAR</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 self-end md:self-auto">
                        <span class="text-xs font-semibold text-red-800 bg-red-100 px-2.5 py-1 rounded-full">4 Créditos</span>
                        <span class="text-xs font-bold text-emerald-800 bg-emerald-100 px-2.5 py-1 rounded-full">Apto</span>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
