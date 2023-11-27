<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_equipos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_equipo');
            $table->string('cancha_local')->nullable();
            $table->timestamps();
        });

        Schema::create('jugadores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('equipo_id')->constrained('registro_equipos');
            $table->string('nombre');
            $table->string('posicion');
            $table->integer('edad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jugadores');
        Schema::dropIfExists('registro_equipos');
    }
}
