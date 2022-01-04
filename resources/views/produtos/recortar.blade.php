@extends('templates.base')

@push('styles')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css'></script>
@endpush
@push('scripts')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.js'></script>
    <script src="{{asset('JS/script.js')}}"></script>
@endpush

@section('title', 'Produtos')
@section('h1', 'Página de Produtos')

@section('content')
<form action="{{route('produtos.updateRecortar', $prod)}}" method="post" id="cortar">
    @csrf
    <input type="hidden"  name="img" id="img">
    <p>
        <input type="submit" value="Cortar" class="btn btn-primary">
    </p>
</form>

    <div>
        <img id='img-crop' src="{{asset('img/' . $prod->imagem)}}"/>
    </div>
@endsection
