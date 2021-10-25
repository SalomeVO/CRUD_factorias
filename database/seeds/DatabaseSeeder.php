<?php

use Illuminate\Database\Seeder;
use App\Usuario; //para encontrar usuario

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Usuario::class, 5)->create();
    }
}
