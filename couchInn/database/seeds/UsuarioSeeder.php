<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Usuario::class,50);
    }
}
