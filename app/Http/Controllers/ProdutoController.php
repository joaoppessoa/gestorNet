<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        //$this->middleware('auth')->only(["cadastro","show"]);
        $this->middleware('autj')->except('index');
    }

    public function index()
    {
        $listaDeProdtutos = ['cabo', 'caderno','lapis'];

        return $listaDeProdtutos;
    }

    public function show($id)
    {
        return "Dados do Produdo do ID: {$id}";
    }

    public function cadastro()
    {
        return "Exibindo um form de cadastro de pradutos.";
    }

    public function editar($id)
    {
        return "Form para editar o produto: {$id}";
    }

    public function salvar()
    {
        return "Cadastrando um novo produto";
    }

    public function update($id)
    {
        return "Editando o produto: {$id}";
    }

    public function deletar($id)
    {
        return "Deletando o produto: {$id}";
    }
}
