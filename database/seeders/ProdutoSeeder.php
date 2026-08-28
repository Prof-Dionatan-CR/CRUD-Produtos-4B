<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produto::create([
            'nome' => "Notebook",
            'preco' => 7000.50,
            'quantidade' => 12,
            'categoria_id' => 1,
            'user_id' => 1,
        ]);

        Produto::create([
            'nome' => 'Lajota',
            'preco' => 40,
            'quantidade' => 80,
            'categoria_id' => 3,
            'user_id' => 1,
        ]);

        Produto::create([
            'nome' =>'Erva mate',
            'preco' => 12.90,
            'quantidade' => 25,
            'categoria_id' => 2,
            'user_id' => 2,
        ]);
    }
}
