@extends('templates.base')
@section('title', 'Galeria de Posts')
@section('h1', 'Galeria de Posts')

@push('styles')
    <style>
        .imagem{
            width:100%;
            border-radius:5px;
            border:solid 4px #d8d8ff;
        }
        .containerGeral{
            display:flex;
            align-items:center;
            justify-content:center;
            flex-wrap:wrap;
            
        }
        .containerDadosImagem:hover{
            transform:scale(1.03);
            transition:0.5s;
        }
        .containerDadosImagem{
            width:300px;
            margin:10px;
            padding:10px;
            background-color:#eeeeff;
            border-radius:10px;
            transition:0.5s;
            cursor:pointer;
        }
        .titulo{
            text-align:center;
        }
        .linkShow{
            text-decoration:none;
            color:black;
        }
        .descricao{
            color:#484848 !important;
            width:100%;
            max-width:100%;
            height:20px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow:ellipsis;
        }
    </style>
@endpush

@section('content')
    <!-- Botão que encaminha para a rota de inserir -->
    <a class="btn btn-primary" href="{{route('galeria.inserir')}}" role="button">Inserir Post</a>
    <div class="containerGeral">

    <!-- Foreach pasando por cada conjunto de dados retornado do banco -->
    @foreach($imagens as $imagem)
    <a class="linkShow" href="{{ route('galeria.show', $imagem) }}">
        <div class= "containerDadosImagem">
            <h5 class="titulo">{{$imagem->titulo}}</h5>
            <p class="descricao">{{$imagem->descricao}}</p>
            <img class="imagem" style="max-width:600px" src="{{asset('galeria/' . $imagem->imagem)}}"/>
        </div>
    </a>
    @endforeach
    <div>
@endsection