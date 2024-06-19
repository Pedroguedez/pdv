<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'id_empresa',
        'nome',
        'codigo',
        'preco',
        'descricao',
        'imagem',
        'ativa_quantidade',
        'quantidade',
    ];
}
