<!doctype html>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <form method="POST" action="{{route('funcionario.animal.update')}}">
            @csrf
            <input type="hidden" name="id" value="{{$animal->id}}">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="{{$animal->nome}}">
            <br>
            <label for="especie">Espécie:</label>
            <input type="text" name="especie" id="especie" value="{{$animal->especie}}">
            <br>
            <label for="raca">Raça:</label>
            <input type="text" name="raca" id="raca" value="{{$animal->raca}}">
            <br>
            <label for="estadosaude">Estado de Saúde:</label>
            <input type="text" name="estadosaude" id="estadosaude" value="{{$animal->estadosaude}}">
            <br>
            <label for="necessidadeespecial">Necessidade especial:</label>
            <textarea type="text" name="necessidadeespecial" id="necessidadeespecial">{{$animal->necessidadeespecial}}</textarea>
            <br>
            <label for="datanascimento">Data de Nascimento:</label>
            <input type="date" name="datanascimento" id="datanascimento" value="{{$animal->datanascimento}}">
            <br>
            <label for="datarecebimento">Data de Recebimento:</label>
            <input type="date" name="datarecebimento" id="datarecebimento" value="{{$animal->datarecebimento}}">
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
