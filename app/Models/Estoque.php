<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Produto extends Model
{
    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $produtos = [
        'nome',
        'preco',
        'quantidade',
        'estoque',
        'tipo',
    ];
}