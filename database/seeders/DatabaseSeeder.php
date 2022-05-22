<?php

namespace Database\Seeders;

use App\Models\Usuarios;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        Usuarios::create(
           [
               'usuario' => 'psd.central',
               'email' => 'centralpsd@hotmail.com',
               'password' => Hash::make('psd@center'),
                'grupo_de_usuarios_id' =>7,
                'pessoas_id' => 8,
                'contactos' => '993333333',

           ]


        );
    }
}
