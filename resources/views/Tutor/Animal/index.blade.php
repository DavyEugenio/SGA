@extends('../layouts.app')

@section('content')
<h2>Animais Disponiveis</h2>
<table>
    <tr>
        <th>Nome</th>
        <th>Espécie</th>
        <th>Raça</th>
        <th>Adotado</th>
        <th>Estado de Saúde</th>
        <th>Necessidade Especial</th>
        <th>Data de Nascimeto</th>
        <th>Data de Recebimento</th>
        <th>Operações</th>
    </tr>
    @foreach($animais as $animal)
    <tr>
        <td>{{$animal->nome}}</td>
        <td>{{$animal->especie}}</td>
        <td>{{$animal->raca}}</td>
        <td>@if($animal->statusadocao)sim @else nao @endif</td>
        <td>{{$animal->estadosaude}}</td>
        <td>{{$animal->necessidadeespecial}}</td>
        <td>{{$animal->datanascimento}}</td>
        <td>{{$animal->datarecebimento}}</td>
        <td>
            <li>
                <a href="{{route('funcionario.animal.show', ['id' => $animal->id])}}">Ver</a>
            </li>
        </td>
    </tr>
    @endforeach
</table>
@endsection