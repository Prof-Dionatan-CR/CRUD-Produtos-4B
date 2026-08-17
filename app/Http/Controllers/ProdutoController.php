<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();

        return view('produtos.index', compact('produtos'));
    }

    public function create(){
        $categorias = Categoria::all();
        $produto = new Produto();

        return view('produtos.create', 
        compact('produto', 'categorias'));
    }

    public function store(Request $request){
        // Validar os dados
        $dados = $request->validate(
            [
                'nome' => 'required|string|max:255',
                'preco' => ['required', 'numeric', 'min:0'], // forma atual
                'quantidade' => 'required|integer|min:0',
                "categoria_id" => 'required|integer|exists:categorias,id',
            ]
        );
        echo 'Até aqui tudo bem';

        Produto::create($dados);
        return redirect()->route('produtos.index');
    }
}
