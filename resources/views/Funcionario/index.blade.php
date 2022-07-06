<!doctype html>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <h2>Usuarios</h2>
        <h3>{{$user->nome}}</h3>
        Algo
        <a href="{{route('funcionario.user.createf')}}">Criar Funcionário</a>
        <a href="{{route('funcionario.user.createt')}}">Criar Tutor</a>
        <a href="{{route('funcionario.user.list')}}">Listagem de usuários</a>
        <a href="{{route('funcionario.editlog')}}">Editar Usuário</a>
        <a href="{{route('funcionario.show')}}">Ver dados</a>
        <a href="{{route('funcionario.removelog')}}">Apagar Usuário</a>
        <form method="POST" action="{{route('logout')}}">
            @csrf
            <input type="submit" value="Sair">
        </form>
        <hr>
        <h2>Animais</h2>
        <a href="{{route('funcionario.animal.index')}}">Listagem de animais</a>
        <a href="{{route('funcionario.animal.create')}}">Criar Animal</a>
        <hr>
        <h2>Adoção</h2>
        <a href="{{route('funcionario.adocao.index')}}">Listagem de Adoções</a>
        <a href="{{route('funcionario.adocao.create')}}">Criar Adoções</a>
    </body>
</html>
