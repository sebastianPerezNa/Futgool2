<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function store(Request $request)
    {
        $usuario = new Usuario;
        $usuario->nombre = $request->input('nombre');
        $usuario->apellido = $request->input('apellido');
        $usuario->correo = $request->input('correo');
        $usuario->usuario = $request->input('usuario');
        $usuario->contrasena = bcrypt($request->input('contrasena')); // Asegúrate de cifrar la contraseña
        $usuario->save();

        return redirect()->route('registrousuario')->with('success', 'Usuario registrado exitosamente.');
    }
}

