<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\MenuNoticias;
class MenuNoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<4; $i++){
            MenuNoticias::create([
                'noticiaid' => $i,
                'imagennoticia'=>'42b.jpg',
                'noticiatitulo'=>'Noticia Prueba '.$i,
                'contenidonoticia' => 'Noticia Prueba'.$i
                
                ]);
        }
    }
}
