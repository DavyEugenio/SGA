@extends('../layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Cadastro de Adoção</div>
            <div class="card-body">
                <form method="POST" action="{{route('funcionario.adocao.store')}}">
                    @csrf
                    <label class="col-md-4 col-form-label text-md-right" for="tutor_id">Tutor:</label>
                    <select class="form-control" name="tutor_id">
                        @foreach ($tutores as $user)
                        <option value="{{ $user->id }}" )>
                            {{ $user->id.' - '.$user->nome }}
                        </option>
                        @endforeach
                    </select>
                    <br>
                    <label class="col-md-4 col-form-label text-md-right" for="animal_id">Animal:</label>
                    <select class="form-control" name="animal_id">
                        @foreach ($animais as $animal)
                        <option value="{{ $animal->id }}" )>
                            {{ $animal->id.' - '.$animal->nome }}
                        </option>
                        @endforeach
                    </select>
                    <br>
                    <input class="btn btn-primary" type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection