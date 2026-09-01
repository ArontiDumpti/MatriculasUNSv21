<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;

class CursoController extends Controller
{
    public function pendientes(): View
    {
        $cursos = $this->cursosDelUsuario(true);

        return view('cursos.pendientes', compact('cursos'));
    }

    public function matricula(): View
    {
        $cursos = $this->cursosDelUsuario();

        return view('matricula.index', compact('cursos'));
    }

    private function cursosDelUsuario(bool $soloPendientes = false): Collection
    {
        $usuario = auth()->user();
        $ciclo = $this->cicloNumerico($usuario->ciclo);

        $consulta = Curso::query()
            ->with(['secciones' => function ($query) {
                $query->where('estado', 'activo')->with('docente');
            }])
            ->where('escuela_profesional', $usuario->escuela_profesional)
            ->where('ciclo', $ciclo)
            ->where('estado', 'activo')
            ->orderBy('codigo');

        if ($soloPendientes) {
            $consulta->whereDoesntHave('secciones.detallesMatricula.matricula', function ($query) use ($usuario) {
                $query->where('user_id', $usuario->id)
                    ->where('ciclo', '2026-I')
                    ->where('estado', 'confirmada');
            });
        }

        return $consulta->get();
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
