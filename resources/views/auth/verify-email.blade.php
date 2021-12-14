@extends('templates.base')
@section('title', 'Produtos')
@section('h1', 'Página de Produtos')

@section('content')
<div class="row">
    <div class="col">
        <p>Sejam bem-vindos à página de produtos</p>
            @if (Auth::user())
                @if (Auth::user()->admin == 1)
                <a class="btn btn-primary" href="{{route('produtos.inserir')}}" role="button">Email</a>
                @endif
            @else

            @endif
    </div>
</div>
<h1>Meus parabéns, você recebeu um email!!!</h1>

@endsection