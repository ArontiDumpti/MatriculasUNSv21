@extends('layouts.app')

@section('title', 'Consolidado Oficial de Matrícula - UNS')

@section('content')
@php
    $usuario = auth()->user();
    $totalCreditos = $matricula->detalles->sum(fn ($detalle) => $detalle->seccion->curso->creditos);
@endphp
<div class="space-y-6">
    @if (session('success'))
        <div class="bg-emerald-50 border-l-4 border-emerald-500 p-3 rounded text-xs text-emerald-800 font-medium">{{ session('success') }}</div>
    @endif
    <div class="flex justify-between items-center bg-white p-4 rounded-2xl border border-gray-200 shadow-sm print:hidden">
        <div class="flex items-center gap-2"><span class="w-3 h-3 rounded-full bg-green-500"></span><span class="text-xs font-bold text-gray-700">Matrícula registrada correctamente</span></div>
        <div class="flex gap-2"><button onclick="window.print()" class="bg-[#DC2C4C] hover:bg-[#B51F3B] text-white text-xs font-bold px-4 py-2 rounded-xl transition"><i class="fa-solid fa-print"></i> Imprimir ficha</button><a href="{{ route('dashboard') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-700 text-xs font-bold px-4 py-2 rounded-xl transition">Ir al inicio</a></div>
    </div>
    <div class="bg-white p-8 rounded-2xl border-2 border-gray-300 shadow-lg space-y-6 max-w-4xl mx-auto print:shadow-none print:border-none">
        <div class="flex justify-between items-center pb-6 border-b-2 border-gray-800">
            <div class="flex items-center gap-4"><div class="w-16 h-16 bg-[#DC2C4C] rounded-xl flex items-center justify-center text-white text-3xl font-bold shadow"><i class="fa-solid fa-university"></i></div><div><h1 class="font-extrabold text-xl leading-none text-gray-900 tracking-wide">UNIVERSIDAD NACIONAL DEL SANTA</h1><p class="text-xs font-bold text-[#DC2C4C] mt-1">DIRECCIÓN DE ADMISIÓN Y REGISTRO ACADÉMICO</p><p class="text-[10px] text-gray-500">{{ $usuario->escuela_profesional }}</p></div></div>
            <div class="text-right font-mono text-xs border-l-2 border-gray-300 pl-4"><p class="font-bold text-gray-800">FICHA DE CONSOLIDADO</p><p class="text-[#DC2C4C] font-extrabold">N° MAT-{{ $matricula->ciclo }}-{{ str_pad($matricula->id, 4, '0', STR_PAD_LEFT) }}</p><p class="text-gray-500 text-[10px]">Fecha: {{ \Carbon\Carbon::parse($matricula->fecha_confirmacion)->format('d/m/Y H:i') }}</p></div>
        </div>
        <div class="bg-gray-50 p-4 rounded-xl border border-gray-200 grid grid-cols-1 md:grid-cols-3 gap-4 text-xs font-mono"><div><p class="text-gray-500 text-[10px] uppercase font-bold">Estudiante</p><p class="font-bold text-gray-900 text-sm">{{ $usuario->nombres }} {{ $usuario->apellidos }}</p></div><div><p class="text-gray-500 text-[10px] uppercase font-bold">Código de Alumno</p><p class="font-bold text-gray-900 text-sm">{{ $usuario->codigo_institucional }}</p></div><div><p class="text-gray-500 text-[10px] uppercase font-bold">Ciclo</p><p class="font-bold text-gray-900 text-sm">{{ $usuario->ciclo }} · {{ $matricula->ciclo }}</p></div></div>
        <div class="space-y-2"><h3 class="font-bold text-sm text-gray-800 uppercase tracking-wider">Asignaturas Registradas</h3><table class="w-full text-left text-xs border-collapse border border-gray-300"><thead><tr class="bg-gray-100 text-gray-800 font-bold uppercase text-[10px] border-b border-gray-300"><th class="py-2.5 px-3 border-r border-gray-300">Código</th><th class="py-2.5 px-3 border-r border-gray-300">Asignatura</th><th class="py-2.5 px-3 border-r border-gray-300">Grupo</th><th class="py-2.5 px-3 text-right">Créditos</th></tr></thead><tbody class="divide-y divide-gray-200">@foreach ($matricula->detalles as $detalle)<tr><td class="py-2.5 px-3 font-mono font-bold border-r border-gray-200">{{ $detalle->seccion->curso->codigo }}</td><td class="py-2.5 px-3 font-bold border-r border-gray-200">{{ $detalle->seccion->curso->nombre }}</td><td class="py-2.5 px-3 font-mono border-r border-gray-200">{{ $detalle->seccion->grupo ? 'GRUPO '.$detalle->seccion->grupo : 'TEORÍA' }}</td><td class="py-2.5 px-3 font-mono font-bold text-right">{{ number_format($detalle->seccion->curso->creditos, 1) }}</td></tr>@endforeach</tbody><tfoot><tr class="bg-gray-100 font-extrabold text-xs border-t-2 border-gray-800"><td colspan="3" class="py-3 px-3 text-right uppercase">Total de Créditos Matriculados:</td><td class="py-3 px-3 text-right font-mono text-[#DC2C4C] text-sm">{{ number_format($totalCreditos, 1) }} CRED</td></tr></tfoot></table></div>
        <div class="pt-8 flex justify-between items-end border-t border-gray-200 text-xs"><div class="text-center space-y-1"><div class="w-40 border-b border-gray-400 mx-auto"></div><p class="font-bold text-gray-800">Firma del Estudiante</p><p class="text-[10px] text-gray-400">DNI: {{ $usuario->dni }}</p></div><div class="text-center space-y-1"><div class="w-40 border-b border-gray-400 mx-auto"></div><p class="font-bold text-gray-800">Dirección de Registro Académico</p><p class="text-[10px] text-gray-400">UNS Chimbote - Perú</p></div></div>
    </div>
</div>
@endsection
