@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Cadastro</div>
            <div class="card-body">
                <form method="POST" action="{{route('tutor.store')}}">
                    @csrf
                    <label class="col-md-4 col-form-label text-md-right" for="nome">Nome:</label>
                    <input class="form-control" type="text"  name="nome" id="nome" required>
                    <br>
                    <label class="col-md-4 col-form-label text-md-right" for="cpf">CPF:</label>
                    <input class="form-control" type="text"  name="cpf" id="cpf" required>
                    <br>
                    <label class="col-md-4 col-form-label text-md-right" for="email">E-mail:</label>
                    <input class="form-control" type="text"  name="email" id="email" required>
                    <br>
                    <label class="col-md-4 col-form-label text-md-right" for="endereco">Endereço:</label>
                    <input class="form-control" type="text"  name="endereco" id="endereco" required>
                    <br>
                    <label class="col-md-4 col-form-label text-md-right" for="telefone">Telefone:</label>
                    <input class="form-control" type="text"  name="telefone" id="telefone" required>
                    <br>
                    <label class="col-md-4 col-form-label text-md-right" for="datanascimento">Data de Nascimento:</label>
                    <input class="form-control" type="date"  name="datanascimento" id="datanascimento" required>
                    <br>
                    <label class="col-md-4 col-form-label text-md-right" for="password">Senha:</label>
                    <input class="form-control" type="password"  name="password" id="password" required>
                    <br>
                    <input class="btn btn-primary" type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection