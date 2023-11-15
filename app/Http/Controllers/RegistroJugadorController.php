<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistroJugador;

class RegistroJugadorController extends Controller
{
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'posicion' => 'required|string',
            'edad' => 'required|integer',
        ]);

        // Crear un nuevo registro en la base de datos
        RegistroJugador::create([
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'posicion' => $request->input('posicion'),
            'edad' => $request->input('edad'),
        ]);

        return redirect()->back()->with('success', 'Registro exitoso');
    }
}
