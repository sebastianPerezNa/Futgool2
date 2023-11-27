<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJugadorsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('jugadors')) {
            Schema::create('jugadors', function (Blueprint $table) {
                $table->id();
                $table->string('nombre');
                $table->string('posicion');
                $table->integer('edad');
                $table->unsignedBigInteger('equipo_id');
                $table->timestamps();

                // Restricción de clave foránea
                $table->foreign('equipo_id')->references('id')->on('equipos')->onDelete('cascade');
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('jugadors');
    }
}
