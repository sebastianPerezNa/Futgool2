<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistroJugador;

class RegistroJugadorController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validación de los datos del formulario
            $request->validate([
                'nombre' => 'required|string',
                'apellido' => 'required|string',
                'posicion' => 'required|string',
                'edad' => 'required|integer',
            ]);

            // Crear un nuevo registro en la base de datos
            $jugador = RegistroJugador::create([
                'nombre' => $request->input('nombre'),
                'apellido' => $request->input('apellido'),
                'posicion' => $request->input('posicion'),
                'edad' => $request->input('edad'),
            ]);

            if ($jugador) {
                // Registro exitoso
                return redirect()->back()->with('success', 'Registro exitoso. ¡Bienvenido!');
            } else {
                // Error en el registro
                return redirect()->back()->with('error', 'Error al registrar. Inténtelo de nuevo.');
            }
        } catch (\Exception $e) {
            // Log the exception or handle it as needed
            // You can also rethrow the exception for further debugging
            return redirect()->back()->with('error', 'Error inesperado. Consulta los logs para más detalles.');
        }
    }


}
