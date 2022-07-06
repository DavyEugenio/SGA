<!doctype html>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <h2>Adoções</h2>
        <table>
            <tr>
                <th>Momento da solicitação</th>
                <th>Tutor</th>
                <th>Animal</th>
                <th>Status</th>
                <th>Data da apuração</th>
                <th>Apurador</th>
                <th>Operações</th>
            </tr>
            @foreach($adocoes as $adocao)
            <tr>
                <td>{{$adocao->datasolicitacao}}</td>
                <td>{{$adocao->tutor->id.' - '.$adocao->tutor->nome}}</td>
                <td>{{$adocao->animal->id.' - '.$adocao->animal->especie.' - '.$adocao->animal->raca}}</td>
                <td>{{$adocao->status}}</td>
                <td>@if($adocao->dataapuracao != null) {{$adocao->dataapuracao}} @else - @endif</td>
                <td>@if($adocao->funcionario_id != null){{$adocao->funcionario->id.' - '.$adocao->funcionario->nome}}@else - @endif</td>
                <td>
            <li>
                <a href="{{route('funcionario.adocao.show', ['id' => $adocao->id])}}">Ver</a>
                @if($adocao->status != 'Cancelada')<a href="{{route('funcionario.adocao.edit', ['id' => $adocao->id])}}">Apurar</a>@endif
            </li>
        </td>
    </tr>
    @endforeach
</table>
</body>
</html>
