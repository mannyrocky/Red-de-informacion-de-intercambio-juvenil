<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(CarruselSeeder::class);
        $this->call(EventoSeeder::class);
        $this->call(NoticiaSeeder::class);
        $this->call(EscuelaSeeder::class);
        $this->call(EnterateSeeder::class);

        Model::reguard();
    }
}
