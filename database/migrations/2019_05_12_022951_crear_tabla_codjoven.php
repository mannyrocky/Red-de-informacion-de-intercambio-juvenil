<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCodjoven extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codjoven', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulocodigo')->unique();
            $table->string('infointro',1000);
            $table->string('infodesa',1000);
            $table->string('infoconclu',1000);
            $table->string('codigourl');
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
        Schema::dropIfExists('codjoven');
    }
}
