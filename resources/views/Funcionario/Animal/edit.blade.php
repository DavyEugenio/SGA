@extends('../layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Edição de Animal</div>
            <div class="card-body">
                <form method="POST" action="{{route('funcionario.animal.update')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$animal->id}}">
                    <label class="col-md-4 col-form-label text-md-right" for="nome">Nome:</label>
                    <input class="form-control" type="text" name="nome" id="nome" value="{{$animal->nome}}">
                    <br>
                    <label class="col-md-4 col-form-label text-md-right" for="especie">Espécie:</label>
                    <input class="form-control" type="text" name="especie" id="especie" value="{{$animal->especie}}">
                    <br>
                    <label class="col-md-4 col-form-label text-md-right" for="raca">Raça:</label>
                    <input class="form-control" type="text" name="raca" id="raca" value="{{$animal->raca}}">
                    <br>
                    <label class="col-md-4 col-form-label text-md-right" for="estadosaude">Estado de Saúde:</label>
                    <input class="form-control" type="text" name="estadosaude" id="estadosaude" value="{{$animal->estadosaude}}">
                    <br>
                    <label class="col-md-4 col-form-label text-md-right" for="necessidadeespecial">Necessidade especial:</label>
                    <textarea class="form-control" type="text" name="necessidadeespecial" id="necessidadeespecial">{{$animal->necessidadeespecial}}</textarea>
                    <br>
                    <label class="col-md-4 col-form-label text-md-right" for="datanascimento">Data de Nascimento:</label>
                    <input class="form-control" type="date" name="datanascimento" id="datanascimento" value="{{$animal->datanascimento}}">
                    <br>
                    <label class="col-md-4 col-form-label text-md-right" for="datarecebimento">Data de Recebimento:</label>
                    <input class="form-control" type="date" name="datarecebimento" id="datarecebimento" value="{{$animal->datarecebimento}}">
                    <br>
                    <input class="btn btn-primary" type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection