@extends('base')
@section('conteudo')
    <form action="/Cats/{{$CatObject->id}}" method="POST">
        @method('put')
        @csrf
        <input name='nome' placeholder='Digite o nome do gato'
         value="{{empty(old('nome')) ? $CatObject->nome : old('nome')}}"/>
        <input name='raca' placeholder='Digite a raça do gato'
         value="{{empty(old('raca')) ? $CatObject->raca : old('raca')}}"/>
        @if($errors->has('raca'))
            <p>{{$errors->first('raca')}}</p>
        @endif
        <input name='cor' placeholder='Digite a cor do gato' 
        value="{{empty(old('cor')) ? $CatObject->cor : old('cor')}}"/>
        <input type='number' name='tamanho' placeholder='Digite o tamanho do gato'
         value="{{empty(old('tamanho')) ? $CatObject->tamanho : old('tamanho')}}"/>
        <input type='number' name='peso' placeholder='Digite o peso do gato'
         value="{{empty(old('peso')) ? $CatObject->peso : old('peso')}}"/>
        @if($errors->has('peso'))
            <p>{{$errors->first('peso')}}</p>
        @endif
        <input type='submit' value='enviar'/>
        <a href='/Cats'>voltar</a>


    </form>
@endsection