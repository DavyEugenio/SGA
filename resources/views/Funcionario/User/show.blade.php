@extends('../layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">@if($user->tipo == 'funcionario') Funcionário @else Tutor @endif</div>
            <div class="card-body">
                {{$user->nome}}<br>
                {{$user->email}}<br>
                {{$user->endereco}}<br>
                {{$user->telefone}}<br>
                {{$user->datanascimento}}<br>
                @if($user->tipo == 'funcionario')
                {{$user->funcao}}<br>
                {{$user->dataingresso}}<br>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection