@extends('../layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Cadastro de Animal</div>
            <div class="card-body">
                <form method="POST" action="{{route('funcionario.animal.store')}}">
                    @csrf
                    <label class="col-md-4 col-form-label text-md-right" for="nome">Nome:</label>
                    <input class="form-control" type="text" name="nome" id="nome">
                    <br>
                    <label class="col-md-4 col-form-label text-md-right" for="especie">Espécie:</label>
                    <input class="form-control" type="text" name="especie" id="especie">
                    <br>
                    <label class="col-md-4 col-form-label text-md-right" for="raca">Raça:</label>
                    <input class="form-control" type="text" name="raca" id="raca">
                    <br>
                    <label class="col-md-4 col-form-label text-md-right" for="estadosaude">Estado de Saúde:</label>
                    <input class="form-control" type="text" name="estadosaude" id="estadosaude">
                    <br>
                    <label class="col-md-4 col-form-label text-md-right" for="necessidadeespecial">Necessidade especial:</label>
                    <textarea class="form-control" type="text" name="necessidadeespecial" id="necessidadeespecial"></textarea>
                    <br>
                    <label class="col-md-4 col-form-label text-md-right" for="datanascimento">Data de Nascimento:</label>
                    <input class="form-control" type="date" name="datanascimento" id="datanascimento">
                    <br>
                    <label class="col-md-4 col-form-label text-md-right" for="datarecebimento">Data de Recebimento:</label>
                    <input class="form-control" type="date" name="datarecebimento" id="datarecebimento">
                    <br>
                    <input class="btn btn-primary" type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection