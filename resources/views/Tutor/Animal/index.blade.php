@extends('../layouts.app')

@section('content')
<h2>Animais Disponiveis</h2>
<table class="table">
    <thead>
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
    </thead>
    <tbody>
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
                <a class="btn btn-primary" href="{{route('funcionario.animal.show', ['id' => $animal->id])}}">Ver</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection