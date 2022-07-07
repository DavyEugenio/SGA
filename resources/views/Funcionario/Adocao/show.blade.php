@extends('../layouts.app')

@section('content')
<h2>Tutor</h2>
{{$adocao->tutor->nome}}<br>
{{$adocao->tutor->email}}<br>
{{$adocao->tutor->endereco}}<br>
{{$adocao->tutor->telefone}}<br>
{{$adocao->tutor->datanascimento}}<br>
<hr>
<h2>Animal</h2>
Nome: {{$adocao->animal->nome}}<br>
Espécie: {{$adocao->animal->especie}}<br>
Raça: {{$adocao->animal->raca}}<br>
Adotado: @if($adocao->animal->statusadocao)sim @else nao @endif<br>
Estado de Saúde: {{$adocao->animal->estadosaude}}<br>
Necessidade Especial: {{$adocao->animal->necessidadeespecial}}<br>
Data de Nascimeto:{{$adocao->animal->datanascimento}}<br>
Data de Recebimento: {{$adocao->animal->datarecebimento}}<br>
<hr>
<h2>Adoção</h2>
Momento da solicitação: {{$adocao->datasolicitacao}}<br>
Tutor: {{$adocao->tutor->id.' - '.$adocao->tutor->nome}}<br>
Animal: {{$adocao->animal->id.' - '.$adocao->animal->especie.' - '.$adocao->animal->raca}}<br>
Status: {{$adocao->status}}<br>
Data da apuração: @if($adocao->dataapuracao != null) {{$adocao->dataapuracao}} @else - @endif<br>
Apurador: @if($adocao->funcionario_id != null){{$adocao->funcionario->id.' - '.$adocao->funcionario->nome}}@else - @endif<br>
@endsection