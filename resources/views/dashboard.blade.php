@extends('layouts.app')

@section('title', 'Main Menu - Módulo de Matrícula UNS')

@section('content')
<style>
    /* Estructura de tarjetas entrelazadas con cortes geométricos */
    .clip-panel-container {
        clip-path: polygon(0 0, calc(100% - 35px) 0, 100% 35px, 100% 100%, 0 100%);
    }

    @media (min-width: 1024px) {
        .interlocked-card-left {
            clip-path: polygon(0 0, 100% 0, calc(100% - 45px) 100%, 0 100%);
            margin-right: -40px;
        }

        .interlocked-card-center {
            clip-path: polygon(45px 0, 100% 0, calc(100% - 45px) 100%, 0 100%);
            margin-right: -40px;
            padding-left: 55px !important;
        }

        .interlocked-card-right {
            clip-path: polygon(45px 0, 100% 0, 100% 100%, 0 100%);
            padding-left: 55px !important;
        }
    }
</style>

<div class="space-y-8">

    <!-- Banner Principal con Saludo Dinámico al Estudiante -->
    <div class="text-center max-w-3xl mx-auto space-y-2">
        <span class="bg-[#DC2C4C]/10 text-[#DC2C4C] text-xs font-tech font-extrabold px-3 py-1 rounded-full uppercase tracking-widest border border-[#DC2C4C]/20">
            SISTEMA INTEGRADO DE CONTROL
        </span>
        <h2 class="font-tech text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-wide uppercase">
            BIENVENIDO, {{ strtoupper(auth()->user()->nombres ?? 'FERNANDO') }}
        </h2>
        <p class="text-xs sm:text-sm text-gray-500">
            Selecciona un módulo principal para acceder a la información de {{ auth()->user()->escuela_profesional ?? 'Ingeniería de Sistemas' }}.
        </p>
    </div>

    <!-- Panel de Módulos Principales (3 Tarjetas Uniformes) -->
    <div class="bg-white border-4 border-[#DC2C4C] rounded-2xl shadow-2xl overflow-hidden clip-panel-container p-2 bg-[#DC2C4C]/5">

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 lg:gap-0">

            <!-- Módulo 01: Ver Horarios -->
            <div class="bg-white p-6 sm:p-8 border-b-2 lg:border-b-0 lg:border-r-2 border-[#DC2C4C]/30 interlocked-card-left flex flex-col justify-between space-y-6 group hover:bg-red-50/60 transition duration-300">
                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <div class="w-16 h-16 rounded-2xl bg-red-50 border-2 border-[#DC2C4C]/30 flex items-center justify-center text-[#DC2C4C] text-3xl group-hover:scale-110 group-hover:bg-[#DC2C4C] group-hover:text-white transition duration-300 shadow-sm">
                            <i class="fa-solid fa-calendar-days"></i>
                        </div>
                        <span class="font-tech text-xs font-bold text-gray-400 bg-red-50 px-2 py-1 rounded">MÓDULO 01</span>
                    </div>

                    <div>
                        <h3 class="font-tech text-2xl font-black tracking-wide text-[#DC2C4C] group-hover:text-[#B51F3B] transition">
                            VER HORARIOS
                        </h3>
                        <p class="text-xs text-gray-500 mt-2 leading-relaxed">
                            Consulta y administra todos los horarios de clases, asignación de aulas, pabellones y distribución de laboratorios del ciclo.
                        </p>
                    </div>
                </div>

                <div class="space-y-4 pt-4 border-t border-gray-100 pr-6">
                    <div class="flex justify-between items-center text-xs font-mono">
                        <span class="text-gray-400 font-semibold">Ciclo:</span>
                        <span class="font-extrabold text-gray-900 bg-gray-100 px-2 py-0.5 rounded">{{ auth()->user()->ciclo ?? 'VI CICLO' }}</span>
                    </div>

                    <a href="{{ url('/horarios') }}" class="w-full bg-[#DC2C4C] hover:bg-[#B51F3B] text-white font-tech font-extrabold py-3.5 px-4 rounded-xl flex items-center justify-center gap-2 transition text-xs tracking-wider shadow-md">
                        <span>ACCEDER AHORA</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- Módulo 02: Cursos Pendientes -->
            <div class="bg-white p-6 sm:p-8 border-b-2 lg:border-b-0 lg:border-r-2 border-[#DC2C4C]/30 interlocked-card-center flex flex-col justify-between space-y-6 group hover:bg-amber-50/60 transition duration-300">
                <div class="space-y-4">
                    <div class="flex justify-between items-center pr-6">
                        <div class="w-16 h-16 rounded-2xl bg-amber-50 border-2 border-amber-500/30 flex items-center justify-center text-amber-600 text-3xl group-hover:scale-110 group-hover:bg-amber-500 group-hover:text-white transition duration-300 shadow-sm">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <span class="font-tech text-xs font-bold text-amber-600 bg-amber-50 px-2 py-1 rounded">MÓDULO 02</span>
                    </div>

                    <div class="pr-6">
                        <h3 class="font-tech text-2xl font-black tracking-wide text-[#DC2C4C] group-hover:text-amber-600 transition">
                            CURSOS PENDIENTES
                        </h3>
                        <p class="text-xs text-gray-500 mt-2 leading-relaxed">
                            Revisa el listado de asignaturas aprobadas, créditos de prerrequisito y la carga académica proyectada del semestre.
                        </p>
                    </div>
                </div>

                <div class="space-y-4 pt-4 border-t border-gray-100 pr-6">
                    <div class="flex justify-between items-center text-xs font-mono">
                        <span class="text-gray-400 font-semibold">Cursos Aptos:</span>
                        <span class="font-extrabold text-emerald-700 bg-emerald-50 px-2.5 py-0.5 rounded">{{ $cursosDisponibles }} DISPONIBLES</span>
                    </div>

                    <a href="{{ url('/cursos-pendientes') }}" class="w-full bg-[#DC2C4C] hover:bg-[#B51F3B] text-white font-tech font-extrabold py-3.5 px-4 rounded-xl flex items-center justify-center gap-2 transition text-xs tracking-wider shadow-md">
                        <span>VER CURSOS</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- Módulo 03: Matricularme (Uniforme como Módulo 03) -->
            <div class="bg-gradient-to-br from-white via-red-50/40 to-red-100/50 p-6 sm:p-8 interlocked-card-right flex flex-col justify-between space-y-6 group hover:bg-red-100/60 transition duration-300">
                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <div class="w-16 h-16 rounded-2xl bg-[#DC2C4C] text-white flex items-center justify-center text-3xl shadow-md group-hover:scale-110 transition duration-300">
                            <i class="fa-solid fa-check-double"></i>
                        </div>
                        <span class="font-tech text-xs font-bold text-[#DC2C4C] bg-red-50 px-2 py-1 rounded border border-red-100">
                            MÓDULO 03
                        </span>
                    </div>

                    <div>
                        <h3 class="font-tech text-2xl font-black tracking-wide text-[#DC2C4C]">
                            MATRICULARME
                        </h3>
                        <p class="text-xs text-gray-700 mt-2 leading-relaxed font-semibold">
                            Inicia la inscripción oficial de asignaturas para el ciclo 2026-I, selecciona tus grupos de laboratorio y emite tu ficha.
                        </p>
                    </div>
                </div>

                <div class="space-y-4 pt-4 border-t-2 border-[#DC2C4C]/30">
                    <div class="flex justify-between items-center text-xs font-mono">
                        <span class="text-gray-600 font-bold">Estado:</span>
                        <span class="font-extrabold px-2.5 py-1 rounded-full {{ $matriculaConfirmada ? 'text-gray-600 bg-gray-200' : 'text-green-800 bg-green-100' }}">{{ $matriculaConfirmada ? 'MATRICULADO' : 'HABILITADO' }}</span>
                    </div>

                    <a href="{{ $matriculaConfirmada ? route('consolidado') : route('matricula') }}" class="w-full {{ $matriculaConfirmada ? 'bg-gray-300 hover:bg-gray-400 text-gray-700' : 'bg-amber-500 hover:bg-amber-600 text-white' }} font-tech font-extrabold py-3.5 px-4 rounded-xl flex items-center justify-center gap-2 transition text-xs tracking-wider shadow-lg">
                        <span>{{ $matriculaConfirmada ? 'VER MATRÍCULA REGISTRADA' : 'INICIAR MATRÍCULA AHORA' }}</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection
