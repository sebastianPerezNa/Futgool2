<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroJugador extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido', 'posicion', 'edad'];
}
