<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect("produtos");
});


Route::prefix('produtos')
->name('produtos.')
->group( function(){

Route::get('/', [ProdutoController::class, 'index'])->name('index');
// Rotas de CRUD
Route::get('/create', [ProdutoController::class, 'create'])->name('create');
Route::post('/', [ProdutoController::class, 'store'])->name('store');

});

