<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Noticias;
class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<5; $i++){
            Noticias::create([
                'titulonoti'=>'Noticia Prueba'.$i,
                'autornoti'=>'Autor Prueba'.$i,
                'fechanoti'=>'2019-11-11',
                'Descripcionnot'=>'Descripcion Prueba'.$i,
                'imagennoti'=>'42b.jpg'
                ]);
        }
    }
}
