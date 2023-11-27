<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'posicion',
        'edad',
        'equipo_id',
    ];

    // Resto del código del modelo...

    /**
     * Obtener el equipo al que pertenece el jugador.
     */
    public function equipo()
    {
        return $this->belongsTo(RegistroEquipo::class);
    }
}
