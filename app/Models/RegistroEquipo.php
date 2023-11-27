<?php

// app/Models/RegistroEquipo.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroEquipo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_equipo', 'cancha_local']; // Añade otros campos según tu estructura

    // Relación con la tabla jugadores
    public function jugadores()
    {
        return $this->hasMany(Jugador::class); // Ajusta según el nombre de tu modelo de jugador
    }
}
