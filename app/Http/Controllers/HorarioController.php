<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Contracts\View\View;

class HorarioController extends Controller
{
    public function index(): View
    {
        $horarios = Horario::query()
            ->with('seccion.curso')
            ->whereHas('seccion.detallesMatricula.matricula', function ($query) {
                $query->where('user_id', auth()->id())
                    ->where('estado', 'confirmada');
            })
            ->orderByRaw("FIELD(dia_semana, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')")
            ->orderBy('hora_inicio')
            ->get();

        return view('horarios.index', compact('horarios'));
    }
}
