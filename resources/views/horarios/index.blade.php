@extends('layouts.app')

@section('title', 'Mis Horarios - UNS')

@section('content')
<div class="space-y-6">

    <!-- Header / Volver -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-white p-6 rounded-2xl border border-gray-200 shadow-sm">
        <div>
            <span class="text-xs font-mono font-bold text-[#DC2C4C] bg-red-50 px-2.5 py-1 rounded">HORARIOS 2026-I</span>
            <h2 class="text-2xl font-extrabold text-gray-900 mt-1">Horario Semanal de Clases</h2>
            <p class="text-xs text-gray-500">Distribución de asignaturas, laboratorios y docentes para Fernando Ch.</p>
        </div>
        <a href="{{ url('/dashboard') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-700 text-xs font-bold px-4 py-2.5 rounded-xl transition flex items-center gap-2">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Volver al Menú</span>
        </a>
    </div>

    <!-- Tabla Semanal de Horarios -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs border-collapse">
                <thead>
                    <tr class="bg-[#DC2C4C] text-white font-tech uppercase text-[11px] tracking-wider">
                        <th class="py-3.5 px-4">Hora</th>
                        <th class="py-3.5 px-4">Lunes</th>
                        <th class="py-3.5 px-4">Martes</th>
                        <th class="py-3.5 px-4">Miércoles</th>
                        <th class="py-3.5 px-4">Jueves</th>
                        <th class="py-3.5 px-4">Viernes</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50/80">
                        <td class="py-4 px-4 font-mono font-bold text-gray-500 bg-gray-50">08:00 - 10:00</td>
                        <td class="py-4 px-4">
                            <div class="p-2.5 bg-red-50 border-l-4 border-[#DC2C4C] rounded shadow-sm">
                                <p class="font-bold text-red-900">BASE DE DATOS II</p>
                                <p class="text-[10px] text-red-700">Lab. Computo 01 &bull; Prof. Perez</p>
                            </div>
                        </td>
                        <td class="py-4 px-4 text-gray-400 font-mono text-[10px] text-center">- LIBRE -</td>
                        <td class="py-4 px-4">
                            <div class="p-2.5 bg-red-50 border-l-4 border-[#DC2C4C] rounded shadow-sm">
                                <p class="font-bold text-red-900">BASE DE DATOS II</p>
                                <p class="text-[10px] text-red-700">Lab. Computo 01 &bull; Prof. Perez</p>
                            </div>
                        </td>
                        <td class="py-4 px-4 text-gray-400 font-mono text-[10px] text-center">- LIBRE -</td>
                        <td class="py-4 px-4">
                            <div class="p-2.5 bg-amber-50 border-l-4 border-amber-500 rounded shadow-sm">
                                <p class="font-bold text-amber-900">COMUNICACIÓN DE DATOS</p>
                                <p class="text-[10px] text-amber-700">Aula 204 &bull; Prof. Gomez</p>
                            </div>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50/80">
                        <td class="py-4 px-4 font-mono font-bold text-gray-500 bg-gray-50">10:00 - 12:00</td>
                        <td class="py-4 px-4 text-gray-400 font-mono text-[10px] text-center">- LIBRE -</td>
                        <td class="py-4 px-4">
                            <div class="p-2.5 bg-indigo-50 border-l-4 border-indigo-600 rounded shadow-sm">
                                <p class="font-bold text-indigo-900">APLICACIONES DISTRIBUIDAS</p>
                                <p class="text-[10px] text-indigo-700">Lab. Software 03 &bull; Prof. Ruiz</p>
                            </div>
                        </td>
                        <td class="py-4 px-4 text-gray-400 font-mono text-[10px] text-center">- LIBRE -</td>
                        <td class="py-4 px-4">
                            <div class="p-2.5 bg-indigo-50 border-l-4 border-indigo-600 rounded shadow-sm">
                                <p class="font-bold text-indigo-900">APLICACIONES DISTRIBUIDAS</p>
                                <p class="text-[10px] text-indigo-700">Lab. Software 03 &bull; Prof. Ruiz</p>
                            </div>
                        </td>
                        <td class="py-4 px-4 text-gray-400 font-mono text-[10px] text-center">- LIBRE -</td>
                    </tr>

                    <tr class="hover:bg-gray-50/80">
                        <td class="py-4 px-4 font-mono font-bold text-gray-500 bg-gray-50">14:00 - 16:00</td>
                        <td class="py-4 px-4">
                            <div class="p-2.5 bg-emerald-50 border-l-4 border-emerald-600 rounded shadow-sm">
                                <p class="font-bold text-emerald-900">SISTEMAS DE INFORMACION II</p>
                                <p class="text-[10px] text-emerald-700">Aula 102 &bull; Prof. Castro</p>
                            </div>
                        </td>
                        <td class="py-4 px-4 text-gray-400 font-mono text-[10px] text-center">- LIBRE -</td>
                        <td class="py-4 px-4">
                            <div class="p-2.5 bg-purple-50 border-l-4 border-purple-600 rounded shadow-sm">
                                <p class="font-bold text-purple-900">ARQUITECTURA DE SOFTWARE</p>
                                <p class="text-[10px] text-purple-700">Lab. 02 &bull; Prof. Vargas</p>
                            </div>
                        </td>
                        <td class="py-4 px-4 text-gray-400 font-mono text-[10px] text-center">- LIBRE -</td>
                        <td class="py-4 px-4">
                            <div class="p-2.5 bg-emerald-50 border-l-4 border-emerald-600 rounded shadow-sm">
                                <p class="font-bold text-emerald-900">SISTEMAS DE INFORMACION II</p>
                                <p class="text-[10px] text-emerald-700">Aula 102 &bull; Prof. Castro</p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
