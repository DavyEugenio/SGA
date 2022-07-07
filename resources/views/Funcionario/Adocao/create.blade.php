@extends('../layouts.app')

@section('content')
        <form method="POST" action="{{route('funcionario.adocao.store')}}">
            @csrf
            <label for="tutor_id">Tutor:</label>
            <select name="tutor_id">
                @foreach ($tutores as $user)
                <option value="{{ $user->id }}")>
                    {{ $user->id.' - '.$user->nome }}
                </option>
                @endforeach
            </select>
            <br>
            <label for="animal_id">Animal:</label>
            <select name="animal_id">
                @foreach ($animais as $animal)
                <option value="{{ $animal->id }}")>
                    {{ $animal->id.' - '.$animal->nome }}
                </option>
                @endforeach
            </select>
            <br>
            <input type="submit" value="Enviar">
        </form>
@endsection
