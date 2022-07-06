<!doctype html>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        @if($user->tipo == 'funcionario')
        <h2>Funcionário</h2>
        @else
        <h2>Tutor</h2>
        @endif
        {{$user->nome}}<br>
        {{$user->email}}<br>
        {{$user->endereco}}<br>
        {{$user->telefone}}<br>
        {{$user->datanascimento}}<br>
        @if($user->tipo == 'funcionario')
        {{$user->funcao}}<br>
        {{$user->dataingresso}}<br>
        @endif
    </body>
</html>
