@extends('templates.base')
@section('title', 'Usuários')
@section('h1', 'Página de Usuários')

@section('content')
<div class="row">
    <div class="col">
        <p>Sejam bem-vindos à página de usuários</p>

    </div>
</div>

<div class="row">
    <table class="table">
        <tr>
            <th>ID</th>
            <th width="50%">Nome</th>
            <th>E-mail</th>
        </tr>

        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td 

            @if ($usuario->admin == 1)
                style='color:red;'
            @else
                
            @endif

          >{{ $usuario->name }}</td>
            <td>{{ $usuario->email }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection