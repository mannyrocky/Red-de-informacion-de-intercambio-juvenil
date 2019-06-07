<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProgramas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomprog')->unique()->required();
            $table->string('nomdep')->required();
            $table->foreign('nomdep')->references('nombredep')->on('dependencias')->onDelete('cascade');
            $table->string('responsable')->required();
            $table->string('descriprog')->nullable();
            $table->string('imagenprog')->nullable();
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
        Schema::dropIfExists('programas');
    }
}
