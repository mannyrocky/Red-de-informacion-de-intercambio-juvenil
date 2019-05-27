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
            $table->bigIncrements('id');
            $table->string('imagen1');
            $table->string("urlimagen1");
            $table->string('imagen2');
            $table->string("urlimagen2");
            $table->string('imagen3');
            $table->string("urlimagen3");
            $table->string('imagen4');
            $table->string("urlimagen4");
            $table->string('imagen5');
            $table->string("urlimagen5");
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
