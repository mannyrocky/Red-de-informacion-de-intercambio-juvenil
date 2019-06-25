<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Codjoven;

class EnterateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Codjoven::create([
            'titulocodigo'=>'¿Que es Codigo Joven?',
            'infointro'=>'aqui va la introduccion',
            'infodesa'=>'aqui va el desarrollo de lo que es codigo joven.\n inserta el desarrollo',
            'infoconclu'=>'aqui va un texto de prueba \n mira no mas',
            'codigourl'=>'riij.test/auth/Registrar',
            ]);
    }
}
