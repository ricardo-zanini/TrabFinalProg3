@extends('templates.base')
@section('title', 'Visualizar produto')

@section('content')
<h1>{{ $prod->nome }}</h1>
<p>Preço: R$ {{$prod->preco}}</p>
<p>Descrição do produto: {{ $prod->descricao }}</p>
<p><img style="max-width:600px" src="{{asset('img/' . $prod->imagem)}}"/></p>
<a class="btn btn-primary" href="{{route('produtos.recortar', $prod)}}" role="button">Recortar</a>
@endsection