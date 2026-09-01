@extends('layouts.app')

@section('title', 'Proceso de Matrícula Online - UNS')

@section('content')
<div class="space-y-6">
    <div class="bg-gradient-to-r from-red-900 via-[#DC2C4C] to-[#B51F3B] text-white p-6 rounded-2xl shadow-md flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 border-b-4 border-amber-500">
        <div><span class="bg-amber-500 text-xs font-bold px-2.5 py-1 rounded uppercase tracking-wider">Proceso online 2026-I</span><h2 class="text-2xl font-extrabold mt-1">Selección de Asignaturas</h2><p class="text-xs text-red-100 mt-0.5">{{ auth()->user()->escuela_profesional }} · {{ auth()->user()->ciclo }}</p></div>
        <div class="bg-white/10 backdrop-blur px-5 py-3 rounded-xl border border-white/20 text-right self-end sm:self-auto"><p class="text-[10px] text-amber-300 font-bold uppercase tracking-wider">Créditos Seleccionados</p><p class="text-2xl font-extrabold text-white font-tech"><span id="credit-count">0</span> / 22 MAX</p></div>
    </div>
    <form action="{{ route('matricula.store') }}" method="POST" class="space-y-6">
        @csrf
        @if ($errors->has('cursos'))
            <div class="bg-red-50 border-l-4 border-[#DC2C4C] p-3 rounded text-xs text-red-700 font-medium">{{ $errors->first('cursos') }}</div>
        @endif
        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 space-y-4">
            <div class="flex justify-between items-center pb-3 border-b border-gray-100"><h3 class="font-bold text-gray-800 flex items-center gap-2"><i class="fa-solid fa-list-check text-[#DC2C4C]"></i>Asignaturas Aptas para {{ auth()->user()->ciclo }}</h3><span class="text-xs text-gray-500">Selecciona al menos 1 curso</span></div>
            <div class="space-y-3">
                @forelse ($cursos as $curso)
                    <label class="p-4 bg-gray-50 rounded-xl border border-gray-200 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 hover:border-[#DC2C4C]/40 transition cursor-pointer">
                        <div class="flex items-center gap-3"><input type="checkbox" name="cursos[]" value="{{ $curso->id }}" data-creditos="{{ $curso->creditos }}" class="course-checkbox w-5 h-5 rounded text-[#DC2C4C] focus:ring-[#DC2C4C] border-gray-300"><div><span class="text-[10px] font-mono font-bold bg-white text-gray-600 px-2 py-0.5 rounded border border-gray-200">{{ $curso->codigo }}</span><h4 class="font-bold text-sm text-gray-900 mt-0.5">{{ $curso->nombre }}</h4><p class="text-xs text-gray-500">{{ $curso->escuela_profesional }} · {{ $curso->ciclo }}° ciclo</p></div></div>
                        <span class="text-xs font-bold text-[#DC2C4C] bg-red-50 px-2.5 py-1 rounded">{{ $curso->creditos }} CRED</span>
                    </label>
                @empty
                    <p class="py-10 text-center text-sm text-gray-500">No hay cursos disponibles para tu carrera y ciclo.</p>
                @endforelse
            </div>
        </div>
        <div class="flex justify-end gap-3"><a href="{{ url('/dashboard') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold px-6 py-3.5 rounded-xl transition text-sm">Cancelar</a>@if ($cursos->isNotEmpty())<button type="submit" class="bg-amber-500 hover:bg-amber-600 text-white font-extrabold px-8 py-3.5 rounded-xl shadow-lg transition text-sm">Confirmar y Emitir Consolidado</button>@endif</div>
    </form>
</div>
<script>
document.querySelectorAll('.course-checkbox').forEach((checkbox) => checkbox.addEventListener('change', () => {
    const total = Array.from(document.querySelectorAll('.course-checkbox:checked')).reduce((sum, item) => sum + Number(item.dataset.creditos), 0);
    document.getElementById('credit-count').textContent = total;
}));
</script>
@endsection
