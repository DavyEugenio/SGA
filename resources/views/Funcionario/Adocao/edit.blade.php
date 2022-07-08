@extends('../layouts.app')

@section('content')
<h2>Tutor</h2>
{{$user->nome}}<br>
{{$user->email}}<br>
{{$user->endereco}}<br>
{{$user->telefone}}<br>
{{$user->datanascimento}}<br>
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
<form method="POST" action="{{route('funcionario.adocao.update')}}">
    @csrf
    <input type="hidden" name="id" value="{{$adocao->id}}">
    <label for="status">Status:</label>
        <select class="form-control" name="status" id="status" )>
            <option value="Aprovada" @if($adocao->status == 'Aprovada') selected @endif>Aprovar</option>
            <option value="Negada" @if($adocao->status == 'Negada') selected @endif>Negar</option>
            <option value="Cancelada" @if($adocao->status == 'Cancelada') selected @endif>Cancelar</option>
        </select>
        <br>
        <input class="btn btn-primary" type="submit" value="Enviar">
</form>
@endsection