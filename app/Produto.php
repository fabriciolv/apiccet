<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'descricao', 'cor', 'peso', 'preco'

    ];

    
    public function Categoria()
    {
        return $this->belongsTo('App\Categoria','categoria_id');
    }
}
