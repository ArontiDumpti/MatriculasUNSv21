<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\DetalleMatricula;
use App\Models\Matricula;
use App\Models\Seccion;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatriculaController extends Controller
{
    private const CICLO_ACADEMICO = '2026-I';

    public function create(): View|RedirectResponse
    {
        if ($this->matriculaConfirmada()) {
            return redirect()->route('consolidado');
        }

        $usuario = auth()->user();
        $ciclo = $this->cicloNumerico($usuario->ciclo);
        $cursos = Curso::where('escuela_profesional', $usuario->escuela_profesional)
            ->where('ciclo', $ciclo)
            ->where('estado', 'activo')
            ->orderBy('codigo')
            ->get();

        return view('matricula.index', compact('cursos'));
    }

    public function store(Request $request): RedirectResponse
    {
        $datos = $request->validate([
            'cursos' => ['required', 'array', 'min:1'],
            'cursos.*' => ['integer', 'distinct'],
        ]);

        $usuario = auth()->user();
        $ciclo = $this->cicloNumerico($usuario->ciclo);
        $cursos = Curso::whereIn('id', $datos['cursos'])
            ->where('escuela_profesional', $usuario->escuela_profesional)
            ->where('ciclo', $ciclo)
            ->where('estado', 'activo')
            ->get();

        if ($cursos->count() !== count($datos['cursos'])) {
            return back()->withErrors(['cursos' => 'Solo puedes matricular cursos de tu carrera y ciclo.']);
        }

        if ($cursos->sum('creditos') > 22) {
            return back()->withErrors(['cursos' => 'La matrícula no puede superar los 22 créditos.'])->withInput();
        }

        DB::transaction(function () use ($usuario, $cursos) {
            $existente = Matricula::where('user_id', $usuario->id)
                ->where('ciclo', self::CICLO_ACADEMICO)
                ->where('estado', 'confirmada')
                ->lockForUpdate()
                ->first();

            if ($existente) {
                return;
            }

            $matricula = new Matricula();
            $matricula->user_id = $usuario->id;
            $matricula->ciclo = self::CICLO_ACADEMICO;
            $matricula->estado = 'confirmada';
            $matricula->fecha_confirmacion = now();
            $matricula->save();

            foreach ($cursos as $curso) {
                $seccion = Seccion::firstOrCreate(
                    ['curso_id' => $curso->id, 'tipo' => 'teoria', 'grupo' => null],
                    ['docente_id' => null, 'cupo_maximo' => 15, 'estado' => 'activo']
                );

                $detalle = new DetalleMatricula();
                $detalle->matricula_id = $matricula->id;
                $detalle->seccion_id = $seccion->id;
                $detalle->save();
            }
        });

        return redirect()->route('consolidado')->with('success', 'Matrícula registrada correctamente.');
    }

    public function consolidado(): View|RedirectResponse
    {
        $matricula = $this->matriculaConfirmada(true);

        if (! $matricula) {
            return redirect()->route('matricula')->with('error', 'Aún no tienes una matrícula confirmada.');
        }

        return view('matricula.consolidado', compact('matricula'));
    }

    private function matriculaConfirmada(bool $conDetalles = false): ?Matricula
    {
        $consulta = Matricula::where('user_id', auth()->id())
            ->where('ciclo', self::CICLO_ACADEMICO)
            ->where('estado', 'confirmada');

        if ($conDetalles) {
            $consulta->with('detalles.seccion.curso');
        }

        return $consulta->first();
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
