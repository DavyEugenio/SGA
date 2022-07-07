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

<a href="{{route('tutor.adocao.store', ['animal_id' => $animal->id])}}">Solicitar Adoção</a>
@endsection