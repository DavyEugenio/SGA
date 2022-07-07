@extends('../layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header"><b>Bem vindo, {{$user->nome}}!</b></div>
            <div class="card-body">
                <a href="{{route('tutor.edit')}}">Editar Usuário</a>
                <a href="{{route('tutor.remove')}}">Apagar Usuário</a>
                <hr>
                <h2>Animais</h2>
                <a href="{{route('tutor.animal.index')}}">Animais Disponivis</a>
                <hr>
                <h2>Adoção</h2>
                <a href="{{route('tutor.adocao.index')}}">Listagem de Adoções</a>
            </div>
        </div>
    </div>
</div>
@endsection