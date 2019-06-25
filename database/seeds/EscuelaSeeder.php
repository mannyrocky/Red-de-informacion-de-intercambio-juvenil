<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Escuela;

class EscuelaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Escuela::create([
            'nombre_escuela'=>'No va a la escuela',
            'escolaridad'=>'Sin escolaridad',
            ]);
    }
}
