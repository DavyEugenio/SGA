<!doctype html>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        {{$user->nome.' '.$user->tipo}}
        <a href="{{route('tutor.edit')}}">Editar Usuário</a>
        <a href="{{route('tutor.remove')}}">Apagar Usuário</a>
        <form method="POST" action="{{route('logout')}}">
            @csrf
            <input type="submit" value="Sair">
        </form>
        <hr>
        <h2>Animais</h2>
        <a href="{{route('tutor.animal.index')}}">Animais Disponivis</a>
        <hr>
        <h2>Adoção</h2>
        <a href="{{route('tutor.adocao.index')}}">Listagem de Adoções</a>
    </body>
</html>
