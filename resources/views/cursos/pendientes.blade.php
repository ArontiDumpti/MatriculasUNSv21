@extends('layouts.app')

@section('title', 'Cursos Pendientes - UNS')

@section('content')
<div class="space-y-6">

    <!-- Header / Volver -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-white p-6 rounded-2xl border border-gray-200 shadow-sm">
        <div>
            <span class="text-xs font-mono font-bold text-emerald-700 bg-emerald-50 px-2.5 py-1 rounded">PLAN DE ESTUDIOS (VI CICLO)</span>
            <h2 class="text-2xl font-extrabold text-gray-900 mt-1">Cursos Aptos & Pendientes</h2>
            <p class="text-xs text-gray-500">Listado de asignaturas aprobadas y disponibles según prerrequisitos de Ing. de Sistemas.</p>
        </div>
        <a href="{{ url('/dashboard') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-700 text-xs font-bold px-4 py-2.5 rounded-xl transition flex items-center gap-2">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Volver al Menú</span>
        </a>
    </div>

    <!-- Lista de Cursos Pendientes -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 space-y-4">
        <div class="flex justify-between items-center pb-3 border-b border-gray-100">
            <h3 class="font-bold text-gray-800 flex items-center gap-2">
                <i class="fa-solid fa-book-open text-emerald-600"></i>
                8 Asignaturas Habilitadas para Matrícula
            </h3>
            <a href="{{ url('/matricula') }}" class="bg-amber-500 hover:bg-amber-600 text-white text-xs font-bold px-4 py-2 rounded-lg shadow transition flex items-center gap-2">
                <span>Ir a Matricularme</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

            <!-- Curso 1 -->
            <div class="p-4 bg-gray-50 rounded-xl border border-gray-200 flex justify-between items-start">
                <div class="space-y-1">
                    <span class="text-[10px] font-mono font-bold bg-white text-gray-600 px-2 py-0.5 rounded border border-gray-200">1411-0035</span>
                    <h4 class="font-bold text-sm text-gray-900">SISTEMAS DE INFORMACION II</h4>
                    <p class="text-xs text-gray-500">Requisito: Sistemas de Información I (Aprobado)</p>
                </div>
                <div class="text-right">
                    <span class="text-xs font-extrabold text-[#DC2C4C] bg-red-50 px-2 py-1 rounded">3 CRED</span>
                    <p class="text-[10px] text-emerald-600 font-bold mt-1">&bull; APTO</p>
                </div>
            </div>

            <!-- Curso 2 -->
            <div class="p-4 bg-gray-50 rounded-xl border border-gray-200 flex justify-between items-start">
                <div class="space-y-1">
                    <span class="text-[10px] font-mono font-bold bg-white text-gray-600 px-2 py-0.5 rounded border border-gray-200">1411-0033</span>
                    <h4 class="font-bold text-sm text-gray-900">BASE DE DATOS II</h4>
                    <p class="text-xs text-gray-500">Requisito: Base de Datos I (Aprobado)</p>
                </div>
                <div class="text-right">
                    <span class="text-xs font-extrabold text-[#DC2C4C] bg-red-50 px-2 py-1 rounded">4 CRED</span>
                    <p class="text-[10px] text-emerald-600 font-bold mt-1">&bull; APTO</p>
                </div>
            </div>

            <!-- Curso 3 -->
            <div class="p-4 bg-gray-50 rounded-xl border border-gray-200 flex justify-between items-start">
                <div class="space-y-1">
                    <span class="text-[10px] font-mono font-bold bg-white text-gray-600 px-2 py-0.5 rounded border border-gray-200">1411-0031</span>
                    <h4 class="font-bold text-sm text-gray-900">APLICACIONES DISTRIBUIDAS I</h4>
                    <p class="text-xs text-gray-500">Requisito: Redes de Computadoras (Aprobado)</p>
                </div>
                <div class="text-right">
                    <span class="text-xs font-extrabold text-[#DC2C4C] bg-red-50 px-2 py-1 rounded">4 CRED</span>
                    <p class="text-[10px] text-emerald-600 font-bold mt-1">&bull; APTO</p>
                </div>
            </div>

            <!-- Curso 4 -->
            <div class="p-4 bg-gray-50 rounded-xl border border-gray-200 flex justify-between items-start">
                <div class="space-y-1">
                    <span class="text-[10px] font-mono font-bold bg-white text-gray-600 px-2 py-0.5 rounded border border-gray-200">1411-0032</span>
                    <h4 class="font-bold text-sm text-gray-900">COMUNICACION DE DATOS</h4>
                    <p class="text-xs text-gray-500">Requisito: Arquitectura de Computadoras (Aprobado)</p>
                </div>
                <div class="text-right">
                    <span class="text-xs font-extrabold text-[#DC2C4C] bg-red-50 px-2 py-1 rounded">4 CRED</span>
                    <p class="text-[10px] text-emerald-600 font-bold mt-1">&bull; APTO</p>
                </div>
            </div>

            <!-- Curso 5 -->
            <div class="p-4 bg-gray-50 rounded-xl border border-gray-200 flex justify-between items-start">
                <div class="space-y-1">
                    <span class="text-[10px] font-mono font-bold bg-white text-gray-600 px-2 py-0.5 rounded border border-gray-200">1411-0034</span>
                    <h4 class="font-bold text-sm text-gray-900">ARQUITECTURA DE SOFTWARE EMPRESARIAL</h4>
                    <p class="text-xs text-gray-500">Requisito: Ing. Software I (Aprobado)</p>
                </div>
                <div class="text-right">
                    <span class="text-xs font-extrabold text-[#DC2C4C] bg-red-50 px-2 py-1 rounded">4 CRED</span>
                    <p class="text-[10px] text-emerald-600 font-bold mt-1">&bull; APTO</p>
                </div>
            </div>

            <!-- Curso 6 -->
            <div class="p-4 bg-gray-50 rounded-xl border border-gray-200 flex justify-between items-start">
                <div class="space-y-1">
                    <span class="text-[10px] font-mono font-bold bg-white text-gray-600 px-2 py-0.5 rounded border border-gray-200">1411-0036</span>
                    <h4 class="font-bold text-sm text-gray-900">ADMINISTRACION DE PROCESOS DE NEGOCIO</h4>
                    <p class="text-xs text-gray-500">Requisito: Gestión Empresarial (Aprobado)</p>
                </div>
                <div class="text-right">
                    <span class="text-xs font-extrabold text-[#DC2C4C] bg-red-50 px-2 py-1 rounded">3 CRED</span>
                    <p class="text-[10px] text-emerald-600 font-bold mt-1">&bull; APTO</p>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
