<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistroEquipo;
use App\Models\Jugador; // Asegúrate de importar el modelo Jugador

class RegistroEquiposController extends Controller
{
    public function store(Request $request)
{
    // Validación de los datos del formulario
    $request->validate([
        'nombre_equipo' => 'required|string',
        'jugadores' => 'required|array', // Asegúrate de que 'jugadores' sea un array
        'jugadores.*.nombre' => 'required|string',
        'jugadores.*.posicion' => 'required|string',
        'jugadores.*.edad' => 'required|integer',
        'cancha_local' => 'nullable|string', // 'cancha_local' es opcional
    ]);

    // Crear un nuevo registro de equipo en la base de datos
    $equipo = RegistroEquipo::create([
        'nombre_equipo' => $request->input('nombre_equipo'),
        'cancha_local' => $request->input('cancha_local'),
    ]);

    // Validar que se haya creado el equipo correctamente
    if ($equipo) {
        // Obtener datos de los jugadores
        $jugadoresData = $request->input('jugadores');

        // Asociar jugadores al equipo
        foreach ($jugadoresData as $jugadorData) {
            Jugador::create([
                'nombre' => $jugadorData['nombre'],
                'posicion' => $jugadorData['posicion'],
                'edad' => $jugadorData['edad'],
                'equipo_id' => $equipo->id,
            ]);
        }

        // Puedes agregar lógica adicional, redirecciones, mensajes, etc.
        return view('registroequipos'); // Ajusta el nombre de la vista según tu estructura de carpetas

        // Ejemplo de redirección después de crear el equipo

    } else {
        // Manejar el error si no se pudo crear el equipo
        return redirect()->back()->with('error', 'Error al registrar el equipo. Inténtelo de nuevo.');
    }
}

}
