<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Autenticación de Usuarios
Route::get('/', [AuthController::class, 'showLoginForm']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard & Vistas del Sistema
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/horarios', function () {
    return view('horarios.index');
});

Route::get('/cursos-pendientes', function () {
    return view('cursos.pendientes');
});

Route::get('/matricula', function () {
    return view('matricula.index');
});

Route::get('/consolidado', function () {
    return view('matricula.consolidado');
});
