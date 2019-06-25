<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaNoticias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulonoti')->required();
            $table->string('autornoti')->required();
            $table->string('fechanoti')->required();
            $table->string('Descripcionnot',1000)->nullable();
            $table->string('descripdes',1000)->nullable();
            $table->string('descripcon',1000)->nullable();
            $table->string('imagennoti')->nullable();
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
        Schema::dropIfExists('noticias');
    }
}
