<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role = Role::create(['name' => 'admin']);
        $role = Role::create(['name' => 'user']);

        //Usuario administrador
        User::create([
            'name' => 'admin',
            'email' => 'adminprueba@gmail.mx',
            'password' => bcrypt('admin123'),
            'role' => 'admin'
        ])->assignRole('admin');

        //Usuario autenticado
        User::create([
            'name' => 'beto',
            'email' => 'beto@gmail.mx',
            'password' => bcrypt('betotas123'),
            'role' => 'autenticado'
        ])->assignRole('user');
    }
}
