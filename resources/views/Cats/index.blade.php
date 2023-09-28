@extends('base')
@section('conteudo')
    <a href="Cats/create">Adicionar</a>

    <p>nome raça tamanho cor peso</p>
    @foreach($CatCollection as $cat)
        <p>
            {{$cat->nome}} {{$cat->raca}} {{$cat->tamanho}} {{$cat->cor}} {{$cat->peso}}
            <a href="Cats/{{$cat->id}}/edit">editar </a> <a href="Cats/{{$cat->id}}">acessar </a>
        </p>
    @endforeach
    {{$CatCollection->links()}}
@endsection