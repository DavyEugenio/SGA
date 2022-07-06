<!doctype html>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <h2>Funcionários</h2>
        <table>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Data de Nascimento</th>
                <th>Data de Ingresso</th>
                <th>Função</th>
                <th>Operações</th>
            </tr>
            @foreach($funcionarios as $func)
            <tr>
                <td>{{$func->nome}}</td>
                <td>{{$func->email}}</td>
                <td>{{$func->endereco}}</td>
                <td>{{$func->telefone}}</td>
                <td>{{$func->datanascimento}}</td>
                <td>{{$func->dataingresso}}</td>
                <td>{{$func->funcao}}</td>
                <td>
            <li>
                <a href="{{route('funcionario.user.show', ['id' => $func->id])}}">Ver</a>,
                <a href="{{route('funcionario.user.edit', ['id' => $func->id])}}">Alterar</a>,
                <a href="{{route('funcionario.user.remove', ['id' => $func->id])}}">Excluir</a>,
            </li>
        </td>
    </tr>
    @endforeach
</table>
<h2>Tutores</h2>
<table>
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Endereço</th>
        <th>Telefone</th>
        <th>Data de Nascimento</th>
        <th>Operações</th>
    </tr>
    @foreach($tutores as $tutor)
    <tr>
        <td>{{$tutor->nome}}</td>
        <td>{{$tutor->email}}</td>
        <td>{{$tutor->endereco}}</td>
        <td>{{$tutor->telefone}}</td>
        <td>{{$tutor->datanascimento}}</td>
        <td>
            <li>
                <a href="{{route('funcionario.user.show', ['id' => $tutor->id])}}">Ver</a>,
                <a href="{{route('funcionario.user.edit', ['id' => $tutor->id])}}">Alterar</a>,
                <a href="{{route('funcionario.user.remove', ['id' => $tutor->id])}}">Excluir</a>,
            </li>
        </td>
    </tr>
    @endforeach
</table>
</body>
</html>

