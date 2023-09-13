@extends('base')
@section('conteudo')
    <form action="/Cats" method="POST">
        @csrf
        <input name='nome' placeholder='Digite o nome do gato'/>
        <input name='raca' placeholder='Digite a raça do gato'/>
        <input name='cor' placeholder='Digite a cor do gato'/>
        <input type='number' name='tamanho' placeholder='Digite o tamanho do gato'/>
        <input type='number' name='peso' placeholder='Digite o peso do gato'/>

        <input type='submit' value='enviar'/>
        <a href='/Cats'>voltar</a>


    </form>
@endsection