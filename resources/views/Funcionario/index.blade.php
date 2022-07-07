@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header"><b>Bem vindo, {{$user->nome}}!</b></div>
            <div class="card-body">
                <a href="{{route('funcionario.user.createf')}}">Criar Funcionário</a>
                <a href="{{route('funcionario.user.createt')}}">Criar Tutor</a>
                <a href="{{route('funcionario.user.list')}}">Listagem de usuários</a>
                <a href="{{route('funcionario.editlog')}}">Editar Usuário</a>
                <a href="{{route('funcionario.show')}}">Ver dados</a>
                <a href="{{route('funcionario.removelog')}}">Apagar Usuário</a>
                <hr>
                <h2>Animais</h2>
                <a href="{{route('funcionario.animal.index')}}">Listagem de animais</a>
                <a href="{{route('funcionario.animal.create')}}">Criar Animal</a>
                <hr>
                <h2>Adoção</h2>
                <a href="{{route('funcionario.adocao.index')}}">Listagem de Adoções</a>
                <a href="{{route('funcionario.adocao.create')}}">Criar Adoções</a>
            </div>
        </div>
    </div>
</div>
@endsection