@extends('layout.principal')

@section('conteudo')

    @if (empty($produtos))
    <div class="alert alert-danger">Você não tem nenhum produto cadastrado.</div>

    @else
    <h1>Listagem de produtos com Laravel</h1>

    <table class="table table-bordered table-hover">

        @foreach ($produtos as $p)
        <tr class="table-{{ $p->quantidade <=1 ? 'danger' : ''}}"> 
            <td>{{$p->nome}}</td>
            <td>{{$p->valor}}</td>
            <td>{{$p->descricao}}</td>
            <td>{{$p->quantidade}}</td>
            <td><a href="/produtos/mostra/{{$p->id}}"><i class="material-icons">search</i></a></td>
        </tr>
        @endforeach

    </table>
    
    @endif

    <h4>
        <span class="badge badge-danger float-right">Um ou menos itens no estoque</span>
    </h4>
@stop