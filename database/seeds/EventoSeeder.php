<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Eventos;
class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<4; $i++){
            Eventos::create([
                'tituloev'=>'Evento Prueba '.$i,
                'depev'=>'Dependencia Prueba '.$i,
                'lugar'=>'Lugar Prueba '.$i,
                'Descripcionev'=>'Descripcion Prueba'.$i,
                'imagenjuv'=>'42b.jpg'
                ]);
        }
    }
}
