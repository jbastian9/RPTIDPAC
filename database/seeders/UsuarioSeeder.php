<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new User();
        $usuario->name = "Usuario";
        $usuario->email = "tecnologia@participacionbogota.gov.co";
        $usuario->password = "secret";
        $usuario->save();

        $usuario = new User();
        $usuario->name = "Usuario2";
        $usuario->email = "jgrajales@participacionbogota.gov.co";
        $usuario->password = "secret2";
        $usuario->save();

        $usuario = new User();
        $usuario->name = "Usuario3";
        $usuario->email = "ingandresgrajales@gmail.com";
        $usuario->password = "secret3";
        $usuario->save();
    }
}

