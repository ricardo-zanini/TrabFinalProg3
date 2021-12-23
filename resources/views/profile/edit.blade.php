@extends('templates.base')
@section('title', 'Editar Produto')
@section('h1', 'Editar Usuário')

@section('content')
<style>
    h3{
        padding:10px;
    }
    span{
        PADDING-LEFT:20PX;
    }
    a{border-radius:200px !important;}
</style>
<div class="row">
    <div class="col-4">

        <form method="post" action="{{ route('profile.updateProfile', $user) }}">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="">
            </div>
            
            @if(isset($mensagem))
            <div class="alert alert-{{$alert}}" role="alert">{{$mensagem}}</div>
            @endif
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Gravar</button>
            </div>
        </form>

    </div>
</div>
@endsection