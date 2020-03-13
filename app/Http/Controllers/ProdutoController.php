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
        //$this->middleware('autj')->except('index');
    }

    public function index()
    {
        $produtos = [1,2,3,4,5,6,7];

        return view('admin.pages.produtos.index', compact('produtos'));
    }

    public function show($id)
    {

    }

    public function cadastro()
    {
        return view('admin.pages.produtos.cadastro');
    }

    public function editar($id)
    {

    }

    public function salvar(Request $request)
    {
        //dd($request->all());
        //dd($request->only(['nome', 'descricao']));
        //dd($request->nome);
        //dd($request->descricao);
        //dd($request->has('nome'));
        //dd($request->input('teste', 'anonimo'));
        /*
         * Na função except pode se passar array ou um monte de variaves para poder ignorar asque não quiser que
         * sejam passadas.
         */
        //dd($request->except('_token'));
        //dd($request->file('foto')->isValid());
        if($request->file('foto')->isValid()){
            $namefile = $request->nome.'.'.$request->foto->extension();
            $request->foto->storeAsgogit('produtos',$namefile);
        }


    }

    public function update($id)
    {

    }

    public function deletar($id)
    {

    }
}
