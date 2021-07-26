<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPeliculas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string("titulo", 150);
            $table->string("descripcion", 1000);
            $table->unsignedBigInteger("id_genero");
            $table->foreign("id_genero", 'fk_peliculas_generos')->references("id")->on("generos")->onDelete('cascade')->onUpdate('restrict');
            $table->float("precio");
            $table->string("imagen", 260);
            $table->string("video", 1000);
            $table->string("trailer", 1000);
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
        Schema::dropIfExists('peliculas');
    }
}
