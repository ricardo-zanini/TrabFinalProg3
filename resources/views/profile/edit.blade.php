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
    <h3>Usuário: </h3>
    <span>{{ Auth::user()->username }}</span>
    <HR/>
    <h3>Email: </h3>
    <span>{{ Auth::user()->email }}</span>
    <HR/>
    <h3>Nome: </h3>
    <span>{{ Auth::user()->name }}</span>
    <HR/>
    @if (Auth::user()->name == 1) <h3>Usuário Administrador</h3><hr/>@endif
    <a href="{{route('profile.edit')}}" type="button" class="btn btn-primary">Alterar informações</a>
    <a href="{{route('profile.password')}}" type="button" class="btn btn-primary">Alterar Senha</a>
@endsection