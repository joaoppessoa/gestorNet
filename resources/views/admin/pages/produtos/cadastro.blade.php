@extends('admin.layouts.app')

@section('title', 'Cadastro Novo Produto')

@section('conteudo')
    <h1>Cadastrar Novo Produto</h1>

    {{--Toda Vez que eu quiser fazer um upload de arquivos é extremamnete necessario passar esse enctype="multipart/form-data"
    no form. Caso contrario não vai fazer nada.--}}

    <form action="{{route('produtos.salvar')}}" method="post" enctype="multipart/form-data">
       @csrf
        <input type="file" name="foto">
        <input type="text" name="nome" placeholder="Digite o nome do produto">
        <input type="text" name="descricao" placeholder="Digite a descrição do produto">
        <button type="submit">Enviar</button>
    </form>
@endsection
