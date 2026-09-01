@extends('layouts.app')

@section('title', 'Mis Horarios - UNS')

@section('content')
@php
    $dias = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes'];
    $bloques = [
        ['inicio' => '08:00', 'etiqueta' => '08:00 - 10:00'],
        ['inicio' => '10:00', 'etiqueta' => '10:00 - 12:00'],
        ['inicio' => '14:00', 'etiqueta' => '14:00 - 16:00'],
    ];
    $colores = [
        ['bg-red-50', 'border-[#DC2C4C]', 'text-red-900', 'text-red-700'],
        ['bg-indigo-50', 'border-indigo-600', 'text-indigo-900', 'text-indigo-700'],
        ['bg-emerald-50', 'border-emerald-600', 'text-emerald-900', 'text-emerald-700'],
        ['bg-amber-50', 'border-amber-500', 'text-amber-900', 'text-amber-700'],
        ['bg-purple-50', 'border-purple-600', 'text-purple-900', 'text-purple-700'],
    ];
@endphp
<div class="space-y-6">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-white p-6 rounded-2xl border border-gray-200 shadow-sm">
        <div>
            <span class="text-xs font-mono font-bold text-[#DC2C4C] bg-red-50 px-2.5 py-1 rounded">HORARIOS 2026-I</span>
            <h2 class="text-2xl font-extrabold text-gray-900 mt-1">Horario Semanal de Clases</h2>
            <p class="text-xs text-gray-500">Solo se muestran las secciones de tu matrícula confirmada.</p>
        </div>
        <a href="{{ route('dashboard') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-700 text-xs font-bold px-4 py-2.5 rounded-xl transition flex items-center gap-2"><i class="fa-solid fa-arrow-left"></i><span>Volver al Menú</span></a>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-5">
        <h3 class="text-xs font-bold text-gray-600 uppercase tracking-wider mb-3">Cursos matriculados</h3>
        @if ($cursosMatriculados->isNotEmpty())
            <div class="flex flex-wrap gap-2">
                @foreach ($cursosMatriculados as $curso)
                    @php
                        $color = $colores[$curso->id % count($colores)];
                    @endphp
                    <span class="inline-flex items-center gap-2 {{ $color[0] }} border-l-4 {{ $color[1] }} {{ $color[2] }} px-3 py-2 rounded-r-lg text-xs font-bold"><span class="font-mono text-[10px]">{{ $curso->codigo }}</span>{{ $curso->nombre }}</span>
                @endforeach
            </div>
        @else
            <p class="text-sm text-gray-500">Aún no tienes cursos matriculados.</p>
        @endif
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full min-w-[760px] text-left text-xs border-collapse">
                <thead>
                    <tr class="bg-[#DC2C4C] text-white font-tech uppercase text-[11px] tracking-wider">
                        <th class="py-3.5 px-4 w-32">Hora</th>
                        @foreach ($dias as $dia)<th class="py-3.5 px-4">{{ $dia }}</th>@endforeach
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($bloques as $bloque)
                        <tr class="hover:bg-gray-50/80">
                            <td class="py-4 px-4 font-mono font-bold text-gray-500 bg-gray-50">{{ $bloque['etiqueta'] }}</td>
                            @foreach ($dias as $dia)
                                @php
                                    $horario = $horariosPorBloque->get($dia.'|'.$bloque['inicio']);
                                @endphp
                                <td class="py-4 px-4 align-top min-w-36">
                                    @if ($horario)
                                        @php
                                            $curso = $horario->seccion->curso;
                                            $color = $colores[$curso->id % count($colores)];
                                        @endphp
                                        <div class="p-2.5 {{ $color[0] }} border-l-4 {{ $color[1] }} rounded shadow-sm min-h-20">
                                            <p class="font-bold {{ $color[2] }} leading-tight">{{ $curso->nombre }}</p>
                                            <p class="mt-1 text-[10px] {{ $color[3] }}">{{ $horario->aula ?? 'Aula por asignar' }} · {{ \Carbon\Carbon::parse($horario->hora_inicio)->format('H:i') }}-{{ \Carbon\Carbon::parse($horario->hora_fin)->format('H:i') }}</p>
                                            <p class="text-[10px] {{ $color[3] }}">{{ $horario->seccion->docente ? 'Doc. '.$horario->seccion->docente->nombres.' '.$horario->seccion->docente->apellidos : 'Docente por asignar' }}</p>
                                        </div>
                                    @else
                                        <p class="py-5 text-center text-gray-300 font-mono text-[10px]">- LIBRE -</p>
                                    @endif
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if ($cursosMatriculados->isNotEmpty() && $horarios->isEmpty())
            <div class="border-t border-gray-200 px-5 py-4 text-xs text-amber-700 bg-amber-50">Tus cursos están matriculados, pero todavía no tienen horarios asignados.</div>
        @endif
    </div>
</div>
@endsection
