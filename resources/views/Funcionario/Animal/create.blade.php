<!doctype html>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <form method="POST" action="{{route('funcionario.animal.store')}}">
            @csrf
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" >
            <br>
            <label for="especie">Espécie:</label>
            <input type="text" name="especie" id="especie" >
            <br>
            <label for="raca">Raça:</label>
            <input type="text" name="raca" id="raca" >
            <br>
            <label for="estadosaude">Estado de Saúde:</label>
            <input type="text" name="estadosaude" id="estadosaude" >
            <br>
            <label for="necessidadeespecial">Necessidade especial:</label>
            <textarea type="text" name="necessidadeespecial" id="necessidadeespecial" ></textarea>
            <br>
            <label for="datanascimento">Data de Nascimento:</label>
            <input type="date" name="datanascimento" id="datanascimento">
            <br>
            <label for="datarecebimento">Data de Recebimento:</label>
            <input type="date" name="datarecebimento" id="datarecebimento">
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
