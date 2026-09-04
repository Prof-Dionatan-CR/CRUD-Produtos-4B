<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();

        return view('produtos.index', compact('produtos'));
    }

    public function create(){

        Gate::authorize('create', Produto::class);

        $categorias = Categoria::all();
        $produto = new Produto();

        return view('produtos.create', 
        compact('produto', 'categorias'));
    }

    public function store(ProdutoRequest $request){
        
        Gate::authorize('create', Produto::class);
        // Validar os dados
        $dados = $request->validated();


        $produto = new Produto($dados);
        $produto->user_id = auth()->id();
        $produto->save();

        return redirect()->route('produtos.index')->with('success', 'Produto criado com sucesso!');
    }

    public function edit(Produto $produto){

        Gate::authorize('edit', $produto);

        $categorias = Categoria::all();

        return view('produtos.edit', 
        compact('produto', 'categorias'));
    }

    public function update(ProdutoRequest $request, Produto $produto){

        Gate::authorize('edit', $produto);

        $dados = $request->validated();
        $produto->update($dados);

        return redirect()->route('produtos.index')->with('success', 'Produto alterado com sucesso!');
    }

    public function destroy(Produto $produto){
        Gate::authorize('delete', $produto);

        $produto->delete();
        return redirect()->route('produtos.index')->with('success', 'Produto excluído com sucesso!');
    }

    public function show(Produto $produto){
        return view('produtos.show', compact('produto'));
    }
}
