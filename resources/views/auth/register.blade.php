<!doctype html>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <form method="POST" action="{{route('tutor.store')}}">
            @csrf
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" >
            <br>
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" id="cpf">
            <br>
            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email">
            <br>
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="endereco">
            <br>
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone">
            <br>
            <label for="datanascimento">Data de Nascimento:</label>
            <input type="date" name="datanascimento" id="datanascimento">
            <br>
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password">
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
