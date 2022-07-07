@extends('layouts.app')

@section('content')
        <h2>Funcionário</h2>
        {{$user->nome}}<br>
        {{$user->email}}<br>
        {{$user->endereco}}<br>
        {{$user->telefone}}<br>
        {{$user->datanascimento}}<br>
        {{$user->funcao}}<br>
        {{$user->dataingresso}}<br>
@endsection
