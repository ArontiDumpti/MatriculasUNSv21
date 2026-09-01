<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\Matricula;
use Illuminate\Contracts\View\View;

class HorarioController extends Controller
{
    public function index(): View
    {
        $matricula = Matricula::query()
            ->with('detalles.seccion.curso')
            ->where('user_id', auth()->id())
            ->where('ciclo', '2026-I')
            ->where('estado', 'confirmada')
            ->first();

        if ($matricula) {
            $this->asignarHorariosProvisionales($matricula);
        }

        $cursosMatriculados = $matricula
            ? $matricula->detalles->map(fn ($detalle) => $detalle->seccion->curso)->unique('id')->values()
            : collect();

        $horarios = Horario::query()
            ->with(['seccion.curso', 'seccion.docente'])
            ->whereHas('seccion.detallesMatricula.matricula', function ($query) {
                $query->where('user_id', auth()->id())
                    ->where('estado', 'confirmada');
            })
            ->orderByRaw("FIELD(dia_semana, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')")
            ->orderBy('hora_inicio')
            ->get();

        $horariosPorBloque = $horarios->keyBy(function ($horario) {
            return $horario->dia_semana.'|'.substr((string) $horario->hora_inicio, 0, 5);
        });

        return view('horarios.index', compact('horarios', 'horariosPorBloque', 'cursosMatriculados'));
    }

    private function asignarHorariosProvisionales(Matricula $matricula): void
    {
        $detalles = $matricula->detalles
            ->sortBy(fn ($detalle) => $detalle->seccion->curso->id)
            ->values();

        // Las filas existentes de Sistemas son la plantilla de bloques horarios.
        $plantillas = Horario::query()
            ->whereHas('seccion.curso', function ($query) {
                $query->where('escuela_profesional', 'Ingeniería de Sistemas');
            })
            ->orderBy('id')
            ->get();

        foreach ($detalles as $indice => $detalle) {
            if ($plantillas->isEmpty()) {
                break;
            }

            // Las secciones de laboratorio ya tienen un horario real y no se modifican.
            if ($detalle->seccion->tipo !== 'teoria') {
                continue;
            }

            $plantilla = $plantillas[$indice % $plantillas->count()];
            $datos = [
                'seccion_id' => $detalle->seccion_id,
                'dia_semana' => $plantilla->dia_semana,
                'hora_inicio' => $plantilla->hora_inicio,
                'hora_fin' => $plantilla->hora_fin,
                'aula' => $plantilla->aula,
            ];

            $horarioProvisional = $detalle->seccion->horarios()->first();

            if ($horarioProvisional) {
                $horarioProvisional->update($datos);
            } elseif (! $detalle->seccion->horarios()->exists()) {
                Horario::create($datos);
            }
        }
    }
}
