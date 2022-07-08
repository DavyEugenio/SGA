@extends('../layouts.app')

@section('content')
<h2>Adoções</h2>
<a href="{{route('funcionario.adocao.create')}}">Criar Adoções</a>
<table class="table">
    <thead>
        <tr>
            <th>Momento da solicitação</th>
            <th>Tutor</th>
            <th>Animal</th>
            <th>Status</th>
            <th>Data da apuração</th>
            <th>Apurador</th>
            <th>Operações</th>
        </tr>
    </thead>
    @foreach($adocoes as $adocao)
    <tr>
        <td>{{$adocao->datasolicitacao}}</td>
        <td>{{$adocao->tutor->id.' - '.$adocao->tutor->nome}}</td>
        <td>{{$adocao->animal->id.' - '.$adocao->animal->especie.' - '.$adocao->animal->raca}}</td>
        <td>{{$adocao->status}}</td>
        <td>@if($adocao->dataapuracao != null) {{$adocao->dataapuracao}} @else - @endif</td>
        <td>@if($adocao->funcionario_id != null){{$adocao->funcionario->id.' - '.$adocao->funcionario->nome}}@else - @endif</td>
        <td class="d-flex">
            <a class="btn btn-primary mx-1" href="{{route('funcionario.adocao.show', ['id' => $adocao->id])}}">Ver</a>
            @if($adocao->status != 'Cancelada')<a class="btn btn-primary mx-1" href="{{route('funcionario.adocao.edit', ['id' => $adocao->id])}}">Apurar</a>@endif

        </td>
    </tr>
    @endforeach
</table>
@endsection