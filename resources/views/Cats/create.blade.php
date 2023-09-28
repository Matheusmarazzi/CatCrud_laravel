@extends('base')
@section('conteudo')
    <form action="/Cats" method="POST">
        @csrf
        <input name='nome' placeholder='Digite o nome do gato' value="{{old('nome')}}"/>
        <input name='raca' placeholder='Digite a raça do gato ' value="{{old('raca')}}"/>
        @if($errors->has('raca'))
            <p>{{$errors->first('raca')}}</p>
        @endif
        <input name='cor' placeholder='Digite a cor do gato' value="{{old('cor')}}"/>
        <input type='number' name='tamanho' placeholder='Digite o tamanho do gato' value="{{old('tamanho')}}"/>
        <input type='number' name='peso' placeholder='Digite o peso do gato' value="{{old('peso')}}"/>
        @if($errors->has('peso'))
            <p>{{$errors->first('peso')}}</p>
        @endif

        <input type='submit' value='enviar'/>
        <a href='/Cats'>voltar</a>


    </form>
@endsection