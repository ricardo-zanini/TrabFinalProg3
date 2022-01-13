@extends('templates.base')
@section('title', 'Apresentação de Post')

@push('styles')
    <style>
        .imagem{
            border-radius:10px;
        }
        .containerImagem{
            border:solid 10px #e4e4e4;
            background-color:#e4e4e4;
            border-radius:10px;
            width:fit-content;
            height:fit-content;
        }
    </style>
@endpush
@section('content')
        <!-- Apresentação de dados de Post -->
        <div class= "containerDadosImagem">
            <h3 class="titulo">{{$imagem->titulo}}</h3>
            <p>{{$imagem->descricao}}</p>
            <div class="containerImagem"><img class="imagem" style="max-width:600px" src="{{asset('galeria/' . $imagem->imagem)}}"/></div>
        </div>
@endsection