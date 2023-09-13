@extends('base')
@section('conteudo')
    <form action="/Cats/{{$CatObject->id}}" method="POST">
        @method('put')
        @csrf
        <input name='nome' placeholder='Digite o nome do gato' value="{{$CatObject->nome}}"/>
        <input name='raca' placeholder='Digite a raça do gato' value="{{$CatObject->raca}}"/>
        <input name='cor' placeholder='Digite a cor do gato' value="{{$CatObject->cor}}"/>
        <input type='number' name='tamanho' placeholder='Digite o tamanho do gato' value="{{$CatObject->tamanho}}"/>
        <input type='number' name='peso' placeholder='Digite o peso do gato' value="{{$CatObject->peso}}"/>
        <input type='submit' value='enviar'/>
        <a href='/Cats'>voltar</a>


    </form>
@endsection