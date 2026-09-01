<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\MatriculaController;
use App\Models\Curso;
use App\Models\Matricula;

// Autenticación de Usuarios
Route::get('/', [AuthController::class, 'showLoginForm']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard & Vistas del Sistema
Route::middleware('auth')->group(function () {
Route::get('/dashboard', function () {
    $usuario = auth()->user();
    $ciclo = match (strtoupper(strtok(trim($usuario->ciclo), ' '))) {
        'I' => 1, 'II' => 2, 'III' => 3, 'IV' => 4, 'V' => 5,
        'VI' => 6, 'VII' => 7, 'VIII' => 8, 'IX' => 9, 'X' => 10,
        default => 0,
    };
    $cursosDisponibles = Curso::where('escuela_profesional', $usuario->escuela_profesional)
        ->where('ciclo', $ciclo)->where('estado', 'activo')
        ->whereDoesntHave('secciones.detallesMatricula.matricula', function ($query) use ($usuario) {
            $query->where('user_id', $usuario->id)->where('ciclo', '2026-I')->where('estado', 'confirmada');
        })->count();

    $matriculaConfirmada = Matricula::where('user_id', $usuario->id)
        ->where('ciclo', '2026-I')->where('estado', 'confirmada')->exists();

    return view('dashboard', compact('cursosDisponibles', 'matriculaConfirmada'));
})->name('dashboard');

Route::get('/horarios', [HorarioController::class, 'index'])->name('horarios');

Route::get('/cursos-pendientes', [CursoController::class, 'pendientes'])->name('cursos.pendientes');

Route::get('/matricula', [MatriculaController::class, 'create'])->name('matricula');
Route::post('/matricula', [MatriculaController::class, 'store'])->name('matricula.store');

Route::get('/consolidado', [MatriculaController::class, 'consolidado'])->name('consolidado');
});
