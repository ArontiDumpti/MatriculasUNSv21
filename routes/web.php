<?php

use Illuminate\Support\Facades\Route;

// Rutas de Inicio y Autenticación
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', function () {
    return view('auth.login');
});

// Dashboard Principal
Route::get('/dashboard', function () {
    return view('dashboard');
});

// Módulo de Horarios
Route::get('/horarios', function () {
    return view('horarios.index');
});

// Módulo de Cursos Pendientes
Route::get('/cursos-pendientes', function () {
    return view('cursos.pendientes');
});

// Módulo de Proceso de Matrícula
Route::get('/matricula', function () {
    return view('matricula.index');
});

// Consolidado Final de Matrícula
Route::get('/consolidado', function () {
    return view('matricula.consolidado');
});
