<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCarrusel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrusel', function (Blueprint $table) {
            $table->string('id')->default("1");
            $table->string('imagen1')->default("42b.jpg");
            $table->string("urlimagen1")->default("tmofans.com");
            $table->string("titsite1")->default("Prueba1");
            $table->string('imagen2')->default("42b.jpg");
            $table->string("urlimagen2")->default("tmofans.com");
            $table->string("titsite2")->default("Prueba2");
            $table->string('imagen3')->default("42b.jpg");
            $table->string("urlimagen3")->default("tmofans.com");
            $table->string("titsite3")->default("Prueba3");
            $table->string('imagen4')->default("42b.jpg");
            $table->string("urlimagen4")->default("tmofans.com");
            $table->string("titsite4")->default("Prueba4");
            $table->string('imagen5')->default("42b.jpg");
            $table->string("urlimagen5")->default("tmofans.com");
            $table->string("titsite5")->default("Prueba5");
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
        Schema::dropIfExists('carrusel');
    }
}
