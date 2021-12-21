@extends('templates.base')
@section('title', 'Editar useruto')
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

        <form method="post" action="{{ route('profile.updatePassword', $user) }}">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="password" class="form-label">Senha Atual</label>
                <input type="password" class="form-control" id="senhaAtual" name="password" value="">
            </div>

            <div class="mb-3">
                <label for="novaSenha" class="form-label">Nova Senha</label>
                <input type="password" class="form-control" id="novaSenha" name="novaSenha" value="">
            </div>

            <div class="mb-3">
                <label for="confirmarSenha" class="form-label">Confirmar Senha</label>
                <input type="password" class="form-control" id="confirmarSenha" name="confirmarSenha" value="">
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