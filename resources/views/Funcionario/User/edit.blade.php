@extends('../layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Edição de Usuários</div>
            <div class="card-body">
                <form method="POST" action="{{route('funcionario.user.update', ['id' => $user->id])}}">
                    @csrf
                    <label class="col-md-4 col-form-label for=" nome">Nome:</label>
                    <input class="form-control" type="text" name="nome" id="nome" value="{{$user->nome}}">
                    <br>
                    <label class="col-md-4 col-form-label for=" email">E-mail:</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{$user->email}}">
                    <br>
                    <label class="col-md-4 col-form-label for=" endereco">Endereço:</label>
                    <input class="form-control" type="text" name="endereco" id="endereco" value="{{$user->endereco}}">
                    <br>
                    <label class="col-md-4 col-form-label for=" telefone">Telefone:</label>
                    <input class="form-control" type="text" name="telefone" id="telefone" value="{{$user->telefone}}">
                    <br>
                    <label class="col-md-4 col-form-label for=" datanascimento">Data de Nascimento:</label>
                    <input class="form-control" type="date" name="datanascimento" id="datanascimento" value="{{$user->datanascimento}}">
                    <br>
                    @if($user->tipo == "funcionario")
                    <label class="col-md-4 col-form-label for=" dataingresso">Data de Ingresso:</label>
                    <input class="form-control" type="date" name="dataingresso" id="dataingresso" value="{{$user->dataingresso}}">
                    <br>
                    <label class="col-md-4 col-form-label for=" funcao">Função:</label>
                    <input class="form-control" type="text" name="funcao" id="funcao" value="{{$user->funcao}}">
                    <br>
                    @endif
                    <input class="btn btn-primary" type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection