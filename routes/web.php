<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HorarioController;
use App\Models\Curso;

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
        ->where('ciclo', $ciclo)->where('estado', 'activo')->count();

    return view('dashboard', compact('cursosDisponibles'));
})->name('dashboard');

Route::get('/horarios', [HorarioController::class, 'index'])->name('horarios');

Route::get('/cursos-pendientes', [CursoController::class, 'pendientes'])->name('cursos.pendientes');

Route::get('/matricula', [CursoController::class, 'matricula'])->name('matricula');

Route::get('/consolidado', function () {
    return view('matricula.consolidado');
});
});
