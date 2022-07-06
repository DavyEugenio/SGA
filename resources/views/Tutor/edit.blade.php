<!doctype html>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <form method="POST" action="{{route('tutor.update')}}">
            @csrf
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="{{$user->nome}}">
            <br>
            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email" value="{{$user->email}}">
            <br>
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="endereco" value="{{$user->endereco}}">
            <br>
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone" value="{{$user->telefone}}">
            <br>
            <label for="datanascimento">Data de Nascimento:</label>
            <input type="date" name="datanascimento" id="datanascimento" value="{{$user->datanascimento}}">
            <br>
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" required>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
