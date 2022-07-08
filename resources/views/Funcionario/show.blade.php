@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card">
                        <div class="card-header">Seus Dados</div>
                        <div class="card-body">
                                {{$user->nome}}<br>
                                {{$user->email}}<br>
                                {{$user->endereco}}<br>
                                {{$user->telefone}}<br>
                                {{$user->datanascimento}}<br>
                                {{$user->funcao}}<br>
                                {{$user->dataingresso}}<br>
                                <a href="{{route('funcionario.editlog')}}">Editar Usuário</a>
                        </div>
                </div>
        </div>
</div>
@endsection