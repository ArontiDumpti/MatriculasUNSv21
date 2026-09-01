@extends('layouts.app')

@section('title', 'Cursos Pendientes - UNS')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-white p-6 rounded-2xl border border-gray-200 shadow-sm">
        <div>
            <span class="text-xs font-mono font-bold text-emerald-700 bg-emerald-50 px-2.5 py-1 rounded">{{ auth()->user()->escuela_profesional }} · {{ auth()->user()->ciclo }}</span>
            <h2 class="text-2xl font-extrabold text-gray-900 mt-1">Cursos Aptos para Matrícula</h2>
            <p class="text-xs text-gray-500">Asignaturas activas correspondientes a tu escuela profesional y ciclo académico.</p>
        </div>
        <a href="{{ url('/dashboard') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-700 text-xs font-bold px-4 py-2.5 rounded-xl transition flex items-center gap-2"><i class="fa-solid fa-arrow-left"></i><span>Volver al Menú</span></a>
    </div>
    <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 space-y-4">
        <div class="flex justify-between items-center pb-3 border-b border-gray-100">
            <h3 class="font-bold text-gray-800 flex items-center gap-2"><i class="fa-solid fa-book-open text-emerald-600"></i>{{ $cursos->count() }} Asignaturas Habilitadas para Matrícula</h3>
            @if ($cursos->isNotEmpty())
                <a href="{{ route('matricula') }}" class="bg-amber-500 hover:bg-amber-600 text-white text-xs font-bold px-4 py-2 rounded-lg shadow transition flex items-center gap-2"><span>Ir a Matricularme</span><i class="fa-solid fa-arrow-right"></i></a>
            @endif
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @forelse ($cursos as $curso)
                @php
                    $seccion = $curso->secciones->first();
                    $docente = $seccion?->docente;
                @endphp
                <div class="p-4 bg-gray-50 rounded-xl border border-gray-200 flex justify-between items-start">
                    <div class="space-y-1 pr-4"><span class="text-[10px] font-mono font-bold bg-white text-gray-600 px-2 py-0.5 rounded border border-gray-200">{{ $curso->codigo }}</span><h4 class="font-bold text-sm text-gray-900">{{ $curso->nombre }}</h4><p class="text-xs text-gray-500">{{ $curso->escuela_profesional }} · {{ $curso->ciclo }}° ciclo</p><p class="text-[10px] text-gray-500">{{ $docente ? 'Docente: '.$docente->nombres.' '.$docente->apellidos : 'Docente por asignar' }}</p></div>
                    <div class="text-right shrink-0"><span class="text-xs font-extrabold text-[#DC2C4C] bg-red-50 px-2 py-1 rounded">{{ $curso->creditos }} CRED</span><p class="text-[10px] text-emerald-600 font-bold mt-1">• APTO</p></div>
                </div>
            @empty
                <div class="md:col-span-2 py-10 text-center text-sm text-gray-500">No hay cursos activos configurados para tu carrera y ciclo.</div>
            @endforelse
        </div>
    </div>
</div>
@endsection
