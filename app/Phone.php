<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'telefone'

    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
