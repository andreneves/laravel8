<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'André Neves',
            'email'     => 'andr@andr.com.br',
            'password'  => Hash::make('123456789'),
            'perfil'    => 'admin'
        ]);

        User::create([
            'name'      => 'User Padrão',
            'email'     => 'padrao@padrao.com.br',
            'password'  => Hash::make('123456789'),
            'perfil'    => 'padrao'
        ]);

    }
}
