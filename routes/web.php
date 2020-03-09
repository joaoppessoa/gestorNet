<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Esse tipo de Rota se define um methodo e só pode usar ele.
Route::get('/estoque', function (){
   return view("exibicao/estoque");
});

// Esse tipo de Rota pode se usar qualquer methodo do html.
Route::any('any', function (){
    return "any";
});

// Esse tipo de Rota pode se usar qualquer methodo definido no array que é passado no primeiro parametro.
Route::match(['post', 'get'], 'match', function (){
   return "match";
});

// Esse como passar vallores dinamicos na rota.
Route::get('categoria/{var}', function ($a){
    return "produtos da categoria: {$a}";
});

// Esse como passar vallores dinamicos na rota junto a um complemento fixo.
Route::get('produtos/{var}/detalhes', function ($var){
    return "detalhes de {$var}";
});

// Esse tipo de rota deixa livre para o usuario passar padrão ou não.
Route::get('produto/{idProduto?}', function ($idProduto = ''){
    return "Produto {$idProduto}";
});

// Exeplo 1 de redirecionamento de rotas.
Route::get('redirect1', function (){
    return redirect()->route('teste.name');
});

// Exeplo 2 de redirecionamento de rotas.
Route::redirect('redirect3', 'redirect2');

Route::get('redirect2', function (){
    return "redirect2";
})->name('teste.name');


Route::get('login', function (){
    return "login";
})->name('login');

Route::middleware([])->group(function (){
    Route::prefix('admin')->group(function (){
        Route::get('inicial', function (){
            return "Menu";
        });

        Route::get('finaceiro', function (){
            return "Finaceiro";
        });

        Route::get('/', function (){
            return "Menu";
        });
    });
});
