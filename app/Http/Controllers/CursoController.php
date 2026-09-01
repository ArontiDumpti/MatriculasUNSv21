<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;

class CursoController extends Controller
{
    public function pendientes(): View
    {
        $cursos = $this->cursosDelUsuario();

        return view('cursos.pendientes', compact('cursos'));
    }

    public function matricula(): View
    {
        $cursos = $this->cursosDelUsuario();

        return view('matricula.index', compact('cursos'));
    }

    private function cursosDelUsuario(): Collection
    {
        $usuario = auth()->user();
        $ciclo = $this->cicloNumerico($usuario->ciclo);

        return Curso::query()
            ->where('escuela_profesional', $usuario->escuela_profesional)
            ->where('ciclo', $ciclo)
            ->where('estado', 'activo')
            ->orderBy('codigo')
            ->get();
    }

    private function cicloNumerico(string $ciclo): int
    {
        return match (strtoupper(strtok(trim($ciclo), ' '))) {
            'I' => 1, 'II' => 2, 'III' => 3, 'IV' => 4, 'V' => 5,
            'VI' => 6, 'VII' => 7, 'VIII' => 8, 'IX' => 9, 'X' => 10,
            default => 0,
        };
    }
}
