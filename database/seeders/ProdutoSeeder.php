<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::create([
            'nome'  	=> 'Teclado',
            'valor'     => 150
        ]);

        Produto::create([
            'nome'  	=> 'Mouse',
            'valor'     => 50
        ]);

        Produto::create([
            'nome'  	=> 'Gabinete',
            'valor'     => 200
        ]);

    }
}
