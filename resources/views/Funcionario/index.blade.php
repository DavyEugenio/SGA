@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4>Bem vindo, {{$user->nome}}!</h4>
            </div>
            <div class="card-body">
                <a href="{{route('funcionario.show')}}">Ver dados</a><br>
                <a href="{{route('funcionario.removelog')}}">Apagar Usuário</a><br>
                <hr>
                <h2>Usuários</h2>
                <a href="{{route('funcionario.user.list')}}">Listagem de usuários</a><br>
                <hr>
                <h2>Animais</h2>
                <a href="{{route('funcionario.animal.index')}}">Listagem de animais</a>
                <hr>
                <h2>Adoção</h2>
                <a href="{{route('funcionario.adocao.index')}}">Listagem de Adoções</a>
            </div>
        </div>
    </div>
</div>
@endsection