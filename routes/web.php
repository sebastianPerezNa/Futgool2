<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroJugadorController;
use App\Http\Controllers\RegistroEquiposController;
use App\Http\Controllers\AmistosoController;
use App\Http\Controllers\UsuarioController;





// Ruta para la página principal
Route::get('/', function () {
    return view('welcome');
});


Route::get('/registrousuario', function () {
    return view('registrousuario');
})->name('registrousuario');
Route::post('/registrousuario', [UsuarioController::class, 'store'])->name('registrousuario.store');








Route::get('/amistoso', [AmistosoController::class, 'index'])->name('amistoso');

// Rutas para Registro Jugador
Route::post('/registro', [RegistroJugadorController::class, 'store'])->name('registro.store');
Route::get('/registrojugador', function () {
    return view('registrojugador');
})->name('registrojugador');

// Rutas para Registro Equipos
Route::get('/registroequipos', [RegistroEquiposController::class, 'showForm'])->name('registro_equipos.form');
Route::post('/registroequipos', [RegistroEquiposController::class, 'store'])->name('registro_equipos.store');

// Nueva ruta para Registro Equipos
Route::get('/registroequipos', function () {
    return view('registroequipos');
})->name('registroequipos');
