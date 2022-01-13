@extends('templates.base')
@section('title', 'Inserir Post')
@section('h1', 'Inserir Post')

@section('content')
    <!-- Formulário de insercao -->
    <form method="post" action="{{route('galeria.gravar')}}" enctype="multipart/form-data">
        <!-- Protecão contra envio de dados de formulários de páginas diferentes -->
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo">
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descricao</label>
            <input type="text" class="form-control" id="descricao" name="descricao">
        </div>
        <!-- Campo imagem -->
        <p>Foto: <input type="file" name="imagem"></p>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Gravar</button>
        </div>
    </form>
@endsection