<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*Comando copiado para exemplo de atualização do route para api,
 mostrando que a tabela produto tbm funciona além da web, na api*/

 Route::resource('produto','ProdutoController');
 Route::resource('categoria','CategoriaController');