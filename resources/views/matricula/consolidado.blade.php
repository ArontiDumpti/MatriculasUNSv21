@extends('layouts.app')

@section('title', 'Consolidado Oficial de Matrícula - UNS')

@section('content')
<div class="space-y-6">

    <!-- Acciones de Imprimir / Volver -->
    <div class="flex justify-between items-center bg-white p-4 rounded-2xl border border-gray-200 shadow-sm print:hidden">
        <div class="flex items-center gap-2">
            <span class="w-3 h-3 rounded-full bg-green-500 animate-ping"></span>
            <span class="text-xs font-bold text-gray-700">Matrícula Registrada Exitosamente</span>
        </div>
        <div class="flex gap-2">
            <button onclick="window.print()" class="bg-[#DC2C4C] hover:bg-[#B51F3B] text-white text-xs font-bold px-4 py-2 rounded-xl transition flex items-center gap-2 shadow">
                <i class="fa-solid fa-print"></i>
                <span>Imprimir Ficha</span>
            </button>
            <a href="{{ url('/dashboard') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-700 text-xs font-bold px-4 py-2 rounded-xl transition">
                Ir al Inicio
            </a>
        </div>
    </div>

    <!-- Documento Oficial Impreso (Ficha de Matrícula) -->
    <div class="bg-white p-8 rounded-2xl border-2 border-gray-300 shadow-lg space-y-6 max-w-4xl mx-auto print:shadow-none print:border-none">
        
        <!-- Cabecera Oficial Institucional -->
        <div class="flex justify-between items-center pb-6 border-b-2 border-gray-800">
            <div class="flex items-center gap-4">
                <div class="w-16 h-16 bg-[#DC2C4C] rounded-xl flex items-center justify-center text-white text-3xl font-bold shadow">
                    <i class="fa-solid fa-university"></i>
                </div>
                <div>
                    <h1 class="font-extrabold text-xl leading-none text-gray-900 tracking-wide">UNIVERSIDAD NACIONAL DEL SANTA</h1>
                    <p class="text-xs font-bold text-[#DC2C4C] mt-1">DIRECCIÓN DE ADMISIÓN Y REGISTRO ACADÉMICO</p>
                    <p class="text-[10px] text-gray-500">Escuela Profesional de Ingeniería de Sistemas</p>
                </div>
            </div>
            <div class="text-right font-mono text-xs border-l-2 border-gray-300 pl-4">
                <p class="font-bold text-gray-800">FICHA DE CONSOLIDADO</p>
                <p class="text-[#DC2C4C] font-extrabold">N° MAT-2026-0489</p>
                <p class="text-gray-500 text-[10px]">Fecha: {{ date('d/m/Y H:i') }}</p>
            </div>
        </div>

        <!-- Datos del Estudiante -->
        <div class="bg-gray-50 p-4 rounded-xl border border-gray-200 grid grid-cols-1 md:grid-cols-3 gap-4 text-xs font-mono">
            <div>
                <p class="text-gray-500 text-[10px] uppercase font-bold">Estudiante</p>
                <p class="font-bold text-gray-900 text-sm">Fernando Ch.</p>
            </div>
            <div>
                <p class="text-gray-500 text-[10px] uppercase font-bold">Código de Alumno</p>
                <p class="font-bold text-gray-900 text-sm">0202114001</p>
            </div>
            <div>
                <p class="text-gray-500 text-[10px] uppercase font-bold">Ciclo & Modalidad</p>
                <p class="font-bold text-gray-900 text-sm">VI CICLO &bull; 1° REGULAR</p>
            </div>
        </div>

        <!-- Tabla Resumen de Cursos Matriculados -->
        <div class="space-y-2">
            <h3 class="font-bold text-sm text-gray-800 uppercase tracking-wider">Asignaturas Registradas (2026-I)</h3>
            
            <table class="w-full text-left text-xs border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-100 text-gray-800 font-bold uppercase text-[10px] border-b border-gray-300">
                        <th class="py-2.5 px-3 border-r border-gray-300">Código</th>
                        <th class="py-2.5 px-3 border-r border-gray-300">Asignatura</th>
                        <th class="py-2.5 px-3 border-r border-gray-300">Grupo</th>
                        <th class="py-2.5 px-3 border-r border-gray-300">Docente</th>
                        <th class="py-2.5 px-3 text-right">Créditos</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="py-2.5 px-3 font-mono font-bold border-r border-gray-200">1411-0035</td>
                        <td class="py-2.5 px-3 font-bold border-r border-gray-200">SISTEMAS DE INFORMACION II</td>
                        <td class="py-2.5 px-3 font-mono border-r border-gray-200">GRUPO A</td>
                        <td class="py-2.5 px-3 border-r border-gray-200">Ing. Carlos Pérez</td>
                        <td class="py-2.5 px-3 font-mono font-bold text-right">3.0</td>
                    </tr>
                    <tr>
                        <td class="py-2.5 px-3 font-mono font-bold border-r border-gray-200">1411-0033</td>
                        <td class="py-2.5 px-3 font-bold border-r border-gray-200">BASE DE DATOS II</td>
                        <td class="py-2.5 px-3 font-mono border-r border-gray-200">GRUPO A</td>
                        <td class="py-2.5 px-3 border-r border-gray-200">Dra. María Ruiz</td>
                        <td class="py-2.5 px-3 font-mono font-bold text-right">4.0</td>
                    </tr>
                    <tr>
                        <td class="py-2.5 px-3 font-mono font-bold border-r border-gray-200">1411-0031</td>
                        <td class="py-2.5 px-3 font-bold border-r border-gray-200">APLICACIONES DISTRIBUIDAS I</td>
                        <td class="py-2.5 px-3 font-mono border-r border-gray-200">GRUPO A</td>
                        <td class="py-2.5 px-3 border-r border-gray-200">Mg. Juan Castro</td>
                        <td class="py-2.5 px-3 font-mono font-bold text-right">4.0</td>
                    </tr>
                    <tr>
                        <td class="py-2.5 px-3 font-mono font-bold border-r border-gray-200">1411-0032</td>
                        <td class="py-2.5 px-3 font-bold border-r border-gray-200">COMUNICACION DE DATOS</td>
                        <td class="py-2.5 px-3 font-mono border-r border-gray-200">GRUPO A</td>
                        <td class="py-2.5 px-3 border-r border-gray-200">Ing. Roberto Gomez</td>
                        <td class="py-2.5 px-3 font-mono font-bold text-right">4.0</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="bg-gray-100 font-extrabold text-xs border-t-2 border-gray-800">
                        <td colspan="4" class="py-3 px-3 text-right uppercase">Total de Créditos Matriculados:</td>
                        <td class="py-3 px-3 text-right font-mono text-[#DC2C4C] text-sm">15.0 CRED</td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <!-- Firma & QR Oficial -->
        <div class="pt-8 flex justify-between items-end border-t border-gray-200 text-xs">
            <div class="text-center space-y-1">
                <div class="w-40 border-b border-gray-400 mx-auto"></div>
                <p class="font-bold text-gray-800">Firma del Estudiante</p>
                <p class="text-[10px] text-gray-400">DNI: 72819201</p>
            </div>

            <div class="text-center space-y-1">
                <div class="w-40 border-b border-gray-400 mx-auto"></div>
                <p class="font-bold text-gray-800">Dirección de Registro Académico</p>
                <p class="text-[10px] text-gray-400">UNS Chimbote - Perú</p>
            </div>
        </div>

    </div>

</div>
@endsection
