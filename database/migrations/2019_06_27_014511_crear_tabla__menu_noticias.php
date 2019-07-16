<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaMenuNoticias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menunoticias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('noticiaid');
            $table->string('imagennoticia');
            $table->string('noticiatitulo');
            $table->string('contenidonoticia');
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
        Schema::dropIfExists('MenuNoticias');
    }
}
