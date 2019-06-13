<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Carrusel;
class CarruselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            Carrusel::create([
                'imagen1'=>'42b.jpg',
                'urlimagen1'=>'www.bcs.gob.mx',
                'imagen2'=>'42b.jpg',
                'urlimagen2'=>'www.isj.gob.mx',
                'imagen3'=>'42b.jpg',
                'urlimagen3'=>'www.tmofans.com',
                'imagen4'=>'42b.jpg',
                'urlimagen4'=>'www.bcs.gob.mx',
                'imagen5'=>'42b.jpg',
                'urlimagen5'=>'www.isj.gob.mx'
                ]);
        
    }
}
