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
            $table->string('imagen2')->default("42b.jpg");
            $table->string("urlimagen2")->default("tmofans.com");
            $table->string('imagen3')->default("42b.jpg");
            $table->string("urlimagen3")->default("tmofans.com");
            $table->string('imagen4')->default("42b.jpg");
            $table->string("urlimagen4")->default("tmofans.com");
            $table->string('imagen5')->default("42b.jpg");
            $table->string("urlimagen5")->default("tmofans.com");
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
