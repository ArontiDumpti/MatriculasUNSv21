<?php

use Illuminate\Support\Facades\Route;

// 1. Ruta de Inicio y Login
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', function () {
    return view('auth.login');
});

// 2. Dashboard Main Menu (con las 3 tarjetas interconectadas)
Route::get('/dashboard', function () {
    return view('dashboard');
});

// 3. Vista 1: Mis Horarios
Route::get('/horarios', function () {
    return view('horarios.index');
});

// 4. Vista 2: Cursos Pendientes
Route::get('/cursos-pendientes', function () {
    return view('cursos.pendientes');
});

// 5. Vista 3: Proceso de Matrícula Online
Route::get('/matricula', function () {
    return view('matricula.index');
});

// 6. Vista 4: Consolidado Oficial de Matrícula
Route::get('/consolidado', function () {
    return view('matricula.consolidado');
});
