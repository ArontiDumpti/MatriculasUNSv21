@extends('layouts.app')

@section('title', 'Proceso de Matrícula Online - UNS')

@section('content')
<div class="space-y-6">

    <!-- Header Banner -->
    <div class="bg-gradient-to-r from-red-900 via-[#DC2C4C] to-[#B51F3B] text-white p-6 rounded-2xl shadow-md flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 border-b-4 border-amber-500">
        <div>
            <span class="bg-amber-500 text-xs font-bold px-2.5 py-1 rounded text-white uppercase tracking-wider">PROCESO ONLINE 2026-I</span>
            <h2 class="text-2xl font-extrabold mt-1">Selección de Asignaturas y Secciones</h2>
            <p class="text-xs text-red-100 mt-0.5">Elige los cursos que llevarás en este ciclo académico.</p>
        </div>
        
        <!-- Contador de Créditos en Vivo -->
        <div class="bg-white/10 backdrop-blur px-5 py-3 rounded-xl border border-white/20 text-right self-end sm:self-auto">
            <p class="text-[10px] text-amber-300 font-bold uppercase tracking-wider">Créditos Seleccionados</p>
            <p class="text-2xl font-extrabold text-white font-tech"><span id="credit-count">15</span> / 22 MAX</p>
        </div>
    </div>

    <!-- Formulario de Selección de Cursos -->
    <form action="{{ url('/consolidado') }}" method="GET" class="space-y-6">
        
        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 space-y-4">
            <div class="flex justify-between items-center pb-3 border-b border-gray-100">
                <h3 class="font-bold text-gray-800 flex items-center gap-2">
                    <i class="fa-solid fa-list-check text-[#DC2C4C]"></i>
                    Asignaturas Aptas para el VI Ciclo
                </h3>
                <span class="text-xs text-gray-500">Selecciona al menos 1 curso</span>
            </div>

            <!-- Tabla de Selección de Cursos -->
            <div class="space-y-3">

                <!-- Curso Item 1 -->
                <div class="p-4 bg-gray-50 rounded-xl border border-gray-200 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 hover:border-[#DC2C4C]/40 transition">
                    <div class="flex items-center gap-3">
                        <input type="checkbox" checked class="w-5 h-5 rounded text-[#DC2C4C] focus:ring-[#DC2C4C] border-gray-300">
                        <div>
                            <span class="text-[10px] font-mono font-bold bg-white text-gray-600 px-2 py-0.5 rounded border border-gray-200">1411-0035</span>
                            <h4 class="font-bold text-sm text-gray-900 mt-0.5">SISTEMAS DE INFORMACION II</h4>
                            <p class="text-xs text-gray-500">Docente: Ing. Carlos Pérez &bull; Requisito: Aprobado</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 self-end sm:self-auto">
                        <select class="text-xs bg-white border border-gray-300 rounded-lg px-3 py-1.5 font-semibold text-gray-700 outline-none focus:border-[#DC2C4C]">
                            <option>Grupo A (Lun & Mié 08:00 - 10:00)</option>
                            <option>Grupo B (Mar & Jue 14:00 - 16:00)</option>
                        </select>
                        <span class="text-xs font-bold text-[#DC2C4C] bg-red-50 px-2.5 py-1 rounded">3 CRED</span>
                    </div>
                </div>

                <!-- Curso Item 2 -->
                <div class="p-4 bg-gray-50 rounded-xl border border-gray-200 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 hover:border-[#DC2C4C]/40 transition">
                    <div class="flex items-center gap-3">
                        <input type="checkbox" checked class="w-5 h-5 rounded text-[#DC2C4C] focus:ring-[#DC2C4C] border-gray-300">
                        <div>
                            <span class="text-[10px] font-mono font-bold bg-white text-gray-600 px-2 py-0.5 rounded border border-gray-200">1411-0033</span>
                            <h4 class="font-bold text-sm text-gray-900 mt-0.5">BASE DE DATOS II</h4>
                            <p class="text-xs text-gray-500">Docente: Dra. María Ruiz &bull; Requisito: Aprobado</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 self-end sm:self-auto">
                        <select class="text-xs bg-white border border-gray-300 rounded-lg px-3 py-1.5 font-semibold text-gray-700 outline-none focus:border-[#DC2C4C]">
                            <option>Grupo A (Mar & Jue 10:00 - 12:00)</option>
                        </select>
                        <span class="text-xs font-bold text-[#DC2C4C] bg-red-50 px-2.5 py-1 rounded">4 CRED</span>
                    </div>
                </div>

                <!-- Curso Item 3 -->
                <div class="p-4 bg-gray-50 rounded-xl border border-gray-200 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 hover:border-[#DC2C4C]/40 transition">
                    <div class="flex items-center gap-3">
                        <input type="checkbox" checked class="w-5 h-5 rounded text-[#DC2C4C] focus:ring-[#DC2C4C] border-gray-300">
                        <div>
                            <span class="text-[10px] font-mono font-bold bg-white text-gray-600 px-2 py-0.5 rounded border border-gray-200">1411-0031</span>
                            <h4 class="font-bold text-sm text-gray-900 mt-0.5">APLICACIONES DISTRIBUIDAS I</h4>
                            <p class="text-xs text-gray-500">Docente: Mg. Juan Castro &bull; Requisito: Aprobado</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 self-end sm:self-auto">
                        <select class="text-xs bg-white border border-gray-300 rounded-lg px-3 py-1.5 font-semibold text-gray-700 outline-none focus:border-[#DC2C4C]">
                            <option>Grupo A (Lun & Mié 14:00 - 16:00)</option>
                        </select>
                        <span class="text-xs font-bold text-[#DC2C4C] bg-red-50 px-2.5 py-1 rounded">4 CRED</span>
                    </div>
                </div>

                <!-- Curso Item 4 -->
                <div class="p-4 bg-gray-50 rounded-xl border border-gray-200 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 hover:border-[#DC2C4C]/40 transition">
                    <div class="flex items-center gap-3">
                        <input type="checkbox" checked class="w-5 h-5 rounded text-[#DC2C4C] focus:ring-[#DC2C4C] border-gray-300">
                        <div>
                            <span class="text-[10px] font-mono font-bold bg-white text-gray-600 px-2 py-0.5 rounded border border-gray-200">1411-0032</span>
                            <h4 class="font-bold text-sm text-gray-900 mt-0.5">COMUNICACION DE DATOS</h4>
                            <p class="text-xs text-gray-500">Docente: Ing. Roberto Gomez &bull; Requisito: Aprobado</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 self-end sm:self-auto">
                        <select class="text-xs bg-white border border-gray-300 rounded-lg px-3 py-1.5 font-semibold text-gray-700 outline-none focus:border-[#DC2C4C]">
                            <option>Grupo A (Viernes 08:00 - 12:00)</option>
                        </select>
                        <span class="text-xs font-bold text-[#DC2C4C] bg-red-50 px-2.5 py-1 rounded">4 CRED</span>
                    </div>
                </div>

            </div>
        </div>

        <!-- Botón de Envío -->
        <div class="flex justify-end gap-3">
            <a href="{{ url('/dashboard') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold px-6 py-3.5 rounded-xl transition text-sm">
                Cancelar
            </a>
            <button type="submit" class="bg-amber-500 hover:bg-amber-600 text-white font-extrabold px-8 py-3.5 rounded-xl shadow-lg hover:shadow-xl transition flex items-center gap-2 text-sm">
                <span>Confirmar y Emitir Consolidado</span>
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </div>

    </form>

</div>
@endsection
