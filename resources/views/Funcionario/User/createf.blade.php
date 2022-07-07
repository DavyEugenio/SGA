@extends('../layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Cadastro de Funcionários</div>
            <div class="card-body">
                <form method="POST" action="{{route('funcionario.user.storef')}}">
                    @csrf
                    <label class="col-md-4 col-form-label" for="nome">Nome:</label>
                    <input class="form-control" type="text" name="nome" id="nome">
                    <br>
                    <label class="col-md-4 col-form-label" for="cpf">CPF:</label>
                    <input class="form-control" type="text" name="cpf" id="cpf">
                    <br>
                    <label class="col-md-4 col-form-label" for="email">E-mail:</label>
                    <input class="form-control" type="text" name="email" id="email">
                    <br>
                    <label class="col-md-4 col-form-label" for="endereco">Endereço:</label>
                    <input class="form-control" type="text" name="endereco" id="endereco">
                    <br>
                    <label class="col-md-4 col-form-label" for="telefone">Telefone:</label>
                    <input class="form-control" type="text" name="telefone" id="telefone">
                    <br>
                    <label class="col-md-4 col-form-label" for="datanascimento">Data de Nascimento:</label>
                    <input class="form-control" type="date" name="datanascimento" id="datanascimento">
                    <br>
                    <label class="col-md-4 col-form-label" for="dataingresso">Data de Ingresso:</label>
                    <input class="form-control" type="date" name="dataingresso" id="dataingresso">
                    <br>
                    <label class="col-md-4 col-form-label" for="funcao">Função:</label>
                    <input class="form-control" type="text" name="funcao" id="funcao">
                    <br>
                    <label class="col-md-4 col-form-label" for="password">Senha:</label>
                    <input class="form-control" type="password" name="password" id="password">
                    <br>
                    <input class="btn btn-primary" type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection