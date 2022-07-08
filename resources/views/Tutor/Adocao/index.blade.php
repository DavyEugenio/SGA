@extends('../layouts.app')

@section('content')
<h2>Solicitações de Adoções</h2>
<table class="table">
    <thead>
        <tr>
            <th>Momento da solicitação</th>
            <th>Tutor</th>
            <th>Animal</th>
            <th>Status</th>
            <th>Data da apuração</th>
            <th>Apurador</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        @foreach($adocoes as $adocao)
        <tr>
            <td>{{$adocao->datasolicitacao}}</td>
            <td>{{$adocao->tutor->id.' - '.$adocao->tutor->nome}}</td>
            <td>{{$adocao->animal->id.' - '.$adocao->animal->especie.' - '.$adocao->animal->raca}}</td>
            <td>{{$adocao->status}}</td>
            <td>@if($adocao->dataapuracao != null) {{$adocao->dataapuracao}} @else - @endif</td>
            <td>@if($adocao->funcionario_id != null){{$adocao->funcionario->id.' - '.$adocao->funcionario->nome}}@else - @endif</td>
            <td>@if($adocao->status == "Em espera")<a href="{{route('tutor.adocao.cancel', ['id' => $adocao->id])}}">Cancelar</a>@else - @endif</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection