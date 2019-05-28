<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDepcarrusel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depcarrusel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('depimagen1')->required();
            $table->string('depimagen2')->required();
            $table->string('depimagen3')->required();
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
        Schema::dropIfExists('depcarrusel');
    }
}
