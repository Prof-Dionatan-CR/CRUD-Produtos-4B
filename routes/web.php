<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect("produtos");
});

// Cria as 7 rotas do CRUD
Route::resource('/produtos', ProdutoController::class);

