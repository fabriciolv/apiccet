<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nome','produtos'

    ];

    public function Produto()
    {
        return $this->hasMany('App\Produto','categoria_id');
    }
}
