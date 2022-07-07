@extends('../layouts.app')

@section('content')
<h2>Animais</h2>
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
        <td class="d-flex">
            <a class="btn btn-primary mx-1" href="{{route('funcionario.animal.show', ['id' => $animal->id])}}">Ver</a>
            <a class="btn btn-primary mx-1" href="{{route('funcionario.animal.edit', ['id' => $animal->id])}}">Alterar</a>
            <a class="btn btn-primary mx-1" href="{{route('funcionario.animal.remove', ['id' => $animal->id])}}">Excluir</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection