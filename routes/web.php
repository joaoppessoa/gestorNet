<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('produtos', 'ProdutoController');//->middleware('auth');

Route::get('login', function (){
   return "login";
})->name('login');

/*
Route::delete('produtos/{id}', 'ProdutoController@deletar')->name("produtos.deletar");

Route::put('produtos/{id}', 'ProdutoController@update')->name("produtos.update");

Route::post('produtos', 'ProdutoController@salvar')->name('produtos.salvar');

Route::get('produtos/{id}/editar', 'ProdutoController@editar')->name('produtos.editar');

Route::get('produtos/cadastro', 'ProdutoController@cadastro')->name('produtos.cadastro');

Route::get('produtos/{id}', 'ProdutoController@show')->name('produtos.index');

Route::get('produtos', 'ProdutoController@index')->name('produtos.show');*/
