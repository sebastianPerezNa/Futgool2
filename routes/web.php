<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroJugadorController;
use App\Http\Controllers\RegistroEquiposController;

// Rutas para Registro Jugador
Route::post('/registro', [RegistroJugadorController::class, 'store'])->name('registro.store');
Route::get('/registrojugador', function () {
    return view('registrojugador');
})->name('registrojugador');

// Rutas para Registro Equipos
Route::get('/registroequipos', [RegistroEquiposController::class, 'showForm'])->name('registro_equipos.form');
Route::post('/registroequipos', [RegistroEquiposController::class, 'store'])->name('registro_equipos.store');
Route::get('/registroequipos', function () {
    return view('registroequipos');
})->name('registroequipos');
