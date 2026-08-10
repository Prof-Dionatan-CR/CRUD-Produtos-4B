<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    /* Atributos que podem ser preenchidos por
    mass assignment*/
    protected $fillable = [
        'nome', 
        'preco', 
        'quantidade',
        ];
}
