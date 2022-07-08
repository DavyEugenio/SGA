@extends('../layouts.app')

@section('content')
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
@if(count($animal->adocoes))
<h2>Adoções</h2>
<table class="table">
    <thead>
        <tr>
            <th>Momento da solicitação</th>
            <th>Tutor</th>
            <th>Status</th>
            <th>Data da apuração</th>
            <th>Apurador</th>
            <th>Operações</th>
        </tr>
    </thead>
    @foreach($animal->adocoes as $adocao)
    <tr>
        <td>{{$adocao->datasolicitacao}}</td>
        <td>{{$adocao->tutor->id.' - '.$adocao->tutor->nome}}</td>
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
@else
Sem solicitações de adoção
@endif
@endsection