@extends('admin.layouts.app')

@section('title', 'Gestor de Produtos')

@section('conteudo')
    <h1>Exibindo os Produtos</h1>

    <a href="{{route('produtos.cadastro')}}">Cadastrar</a>


    @component('admin.componentes.card')
        @slot('title')
            <h2>Titulo Slot</h2>
        @endslot
        Um card de exemplo
    @endcomponent

    <hr>

    @include('admin.includes.alertas', ['conteudo' => "Alerta de Produtos!"])

    <hr>

    @if(isset($produtos))
        @foreach($produtos as $item)
            <p>{{$item}}</p>
        @endforeach
    @endif



    <hr>

    @if($produtos === '123')
        <h2>True</h2>
        <h3>{{$produtos}}</h3>
    @elseif($produtos == 123)
        HEHEHE
    @else
    <h2>False</h2>
    @endif
@endsection
