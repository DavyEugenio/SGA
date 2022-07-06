<!doctype html>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <h2>Animal</h2>
        Nome: {{$animal->nome}}<br>
        Espécie: {{$animal->especie}}<br>
        Raça: {{$animal->raca}}<br>
        Adotado: @if($animal->statusadocao)sim @else nao @endif<br>
        Estado de Saúde: {{$animal->estadosaude}}<br>
        Necessidade Especial: {{$animal->necessidadeespecial}}<br>
        Data de Nascimeto:{{$animal->datanascimento}}<br>
        Data de Recebimento: {{$animal->datarecebimento}}<br>
        <hr>
        Operações:
        <br>
    <li>
        <a href="{{route('funcionario.animal.edit', ['id' => $animal->id])}}">Alterar</a>,
        <a href="{{route('funcionario.animal.remove', ['id' => $animal->id])}}">Excluir</a>,
    </li>
</body>
</html>