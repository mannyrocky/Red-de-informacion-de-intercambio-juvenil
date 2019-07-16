<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\MenuEvento;

class MenuEventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<3; $i++){
            MenuEvento::create([
                'eventoid' => $i,
                'imagenevento'=>'42b.jpg',
                'eventotitulo'=>'Evento Prueba '.$i
                
                ]);
        }
    }
}
