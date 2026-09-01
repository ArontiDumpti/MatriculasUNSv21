@extends('layouts.app')

@section('title', 'Mis Horarios - UNS')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-white p-6 rounded-2xl border border-gray-200 shadow-sm">
        <div>
            <span class="text-xs font-mono font-bold text-[#DC2C4C] bg-red-50 px-2.5 py-1 rounded">HORARIOS 2026-I</span>
            <h2 class="text-2xl font-extrabold text-gray-900 mt-1">Mi Horario de Clases</h2>
            <p class="text-xs text-gray-500">Se muestran únicamente las secciones de tu matrícula confirmada.</p>
        </div>
        <a href="{{ url('/dashboard') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-700 text-xs font-bold px-4 py-2.5 rounded-xl transition flex items-center gap-2"><i class="fa-solid fa-arrow-left"></i><span>Volver al Menú</span></a>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
        @if ($horarios->isNotEmpty())
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm border-collapse">
                    <thead><tr class="bg-[#DC2C4C] text-white font-tech uppercase text-[11px] tracking-wider"><th class="py-3.5 px-4">Día</th><th class="py-3.5 px-4">Horario</th><th class="py-3.5 px-4">Curso</th><th class="py-3.5 px-4">Grupo</th><th class="py-3.5 px-4">Aula</th></tr></thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($horarios as $horario)
                            <tr class="hover:bg-gray-50"><td class="py-4 px-4 font-semibold text-gray-700">{{ $horario->dia_semana }}</td><td class="py-4 px-4 font-mono text-gray-600">{{ \Carbon\Carbon::parse($horario->hora_inicio)->format('H:i') }} - {{ \Carbon\Carbon::parse($horario->hora_fin)->format('H:i') }}</td><td class="py-4 px-4"><p class="font-bold text-gray-900">{{ $horario->seccion->curso->nombre }}</p><p class="text-xs text-gray-500">{{ $horario->seccion->curso->codigo }}</p></td><td class="py-4 px-4">{{ $horario->seccion->grupo ? 'Grupo '.$horario->seccion->grupo : 'Teoría' }}</td><td class="py-4 px-4 text-gray-600">{{ $horario->aula ?? 'Por asignar' }}</td></tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="py-16 px-6 text-center"><i class="fa-regular fa-calendar-xmark text-4xl text-gray-300"></i><h3 class="mt-4 font-bold text-gray-700">Aún no tienes horarios</h3><p class="mt-1 text-sm text-gray-500">Tus horarios aparecerán cuando tengas una matrícula confirmada con secciones asignadas.</p><a href="{{ route('matricula') }}" class="inline-flex mt-5 bg-amber-500 hover:bg-amber-600 text-white text-xs font-bold px-4 py-2.5 rounded-lg shadow transition">Ir a matricularme</a></div>
        @endif
    </div>
</div>
@endsection
