<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Usuario administrador
        User::create([
            'name' => 'admin',
            'email' => 'adminprueba@gmail.mx',
            'password' => bcrypt('admin123'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'beto',
            'email' => 'beto@gmail.mx',
            'password' => bcrypt('betotas123'),
            'role' => 'autenticado'
        ]);
    }
}
