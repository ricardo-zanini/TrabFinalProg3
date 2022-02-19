@extends('templates.base')
@section('title', 'Novo Fórum')
@section('h1', 'Novo Fórum')
@push('styles')
    <style>
    body {
    min-height: 100vh;
    min-width: 100vw;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
   
    color: white !important;
    }



    .paiMain {
    width: calc(100% - 300px);
    height: 100vh;
    -webkit-transform: translateZ(0);
            transform: translateZ(0);
    z-index: 1;
    }

    .main {
    background-color: #d8d8d8;
    width: 100%;
    padding-left: 20px;
    height: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    overflow-y: auto;
    position: relative;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    padding-top: 70px;
    padding-bottom: 80px;
    /* background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 56 28' width='56' height='28'%3E%3Cpath fill='%23000000' fill-opacity='0.07' d='M56 26v2h-7.75c2.3-1.27 4.94-2 7.75-2zm-26 2a2 2 0 1 0-4 0h-4.09A25.98 25.98 0 0 0 0 16v-2c.67 0 1.34.02 2 .07V14a2 2 0 0 0-2-2v-2a4 4 0 0 1 3.98 3.6 28.09 28.09 0 0 1 2.8-3.86A8 8 0 0 0 0 6V4a9.99 9.99 0 0 1 8.17 4.23c.94-.95 1.96-1.83 3.03-2.63A13.98 13.98 0 0 0 0 0h7.75c2 1.1 3.73 2.63 5.1 4.45 1.12-.72 2.3-1.37 3.53-1.93A20.1 20.1 0 0 0 14.28 0h2.7c.45.56.88 1.14 1.29 1.74 1.3-.48 2.63-.87 4-1.15-.11-.2-.23-.4-.36-.59H26v.07a28.4 28.4 0 0 1 4 0V0h4.09l-.37.59c1.38.28 2.72.67 4.01 1.15.4-.6.84-1.18 1.3-1.74h2.69a20.1 20.1 0 0 0-2.1 2.52c1.23.56 2.41 1.2 3.54 1.93A16.08 16.08 0 0 1 48.25 0H56c-4.58 0-8.65 2.2-11.2 5.6 1.07.8 2.09 1.68 3.03 2.63A9.99 9.99 0 0 1 56 4v2a8 8 0 0 0-6.77 3.74c1.03 1.2 1.97 2.5 2.79 3.86A4 4 0 0 1 56 10v2a2 2 0 0 0-2 2.07 28.4 28.4 0 0 1 2-.07v2c-9.2 0-17.3 4.78-21.91 12H30zM7.75 28H0v-2c2.81 0 5.46.73 7.75 2zM56 20v2c-5.6 0-10.65 2.3-14.28 6h-2.7c4.04-4.89 10.15-8 16.98-8zm-39.03 8h-2.69C10.65 24.3 5.6 22 0 22v-2c6.83 0 12.94 3.11 16.97 8zm15.01-.4a28.09 28.09 0 0 1 2.8-3.86 8 8 0 0 0-13.55 0c1.03 1.2 1.97 2.5 2.79 3.86a4 4 0 0 1 7.96 0zm14.29-11.86c1.3-.48 2.63-.87 4-1.15a25.99 25.99 0 0 0-44.55 0c1.38.28 2.72.67 4.01 1.15a21.98 21.98 0 0 1 36.54 0zm-5.43 2.71c1.13-.72 2.3-1.37 3.54-1.93a19.98 19.98 0 0 0-32.76 0c1.23.56 2.41 1.2 3.54 1.93a15.98 15.98 0 0 1 25.68 0zm-4.67 3.78c.94-.95 1.96-1.83 3.03-2.63a13.98 13.98 0 0 0-22.4 0c1.07.8 2.09 1.68 3.03 2.63a9.99 9.99 0 0 1 16.34 0z'%3E%3C/path%3E%3C/svg%3E"); */
    }

    .header {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    width: 100%;
    position: absolute;
    height: 70px;
    background-color: #f3f3f3;
    z-index: 5;
    }

    .logo {
    width: 40px;
    margin-left: 20px;
    }

    .containerLogo {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    color: #2e2e2e;
    }

    .tituloLogo {
    margin-left: 5px;
    }

    .opcoesHeader div {
    margin-right: 30px;
    color: #222222;
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    height: 100%;
    padding: 0 15px;
    border-bottom: solid 1px #037b79;
    }



    ::-webkit-scrollbar {
    width: 5px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
    background: #dadada;
    border-radius: 500px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
    background: #b8b8b8;
    border-radius: 500px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
    background: #e0e0e0;
    }

    .opcoesUser {
    position: absolute;
    right: 0;
    }

    .opcoesUser img {
    width: 20px;
    margin-right: 20px;
    }

    .navDireita {
    min-height: 100vh;
    width: 400px;
    background-color: #f1f1f1;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    padding: 20px;
    }

    .fotoUser {
    background-color: #ffffff;
    margin-top: 200px;
    width: 130px;
    height: 130px;
    border-radius: 50%;
    }

    .descricaoUser {
    margin-top: 30px;
    text-align: justify;
    color: #363636;
    }

    .nomeUser {
    margin-top: 30px;
    color: #1fa8a6;
    font-size: 1.5rem;
    }

    .botaoSair {
    border-radius: 2px !important;
    bottom: 0;
    margin-left: auto;
    margin-top: auto;
    }

    .usuario {
    height: -webkit-fit-content;
    height: -moz-fit-content;
    height: fit-content;
    margin: 10px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    }

    .usuario img {
    border-radius: 50%;
    width: 40px;
    height: 40px;
    border: none;
    background-color: white;
    }

    .usuario .nomeUsuario {
    margin-left: 10px;
    color: #363636;
    }

    .conteudoImagem {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    }

    .conteudoImagem img {
    max-width: 400px;
    max-height: 400px;
    border-radius: 10px;
    margin: 10px;
    background-color: rgba(255, 255, 255, 0.295);
    border: solid 5px rgba(255, 255, 255, 0.295);
    }

    .horarioEnvio {
    display: inline-block;
    margin: 0px 10px;
    color: #363636;
    font-size: 0.9rem;
    margin-left: auto;
    }

    .divisoria {
    height: 3px;
    padding: 0.5px;
    background-color: #00000036;
    width: calc(100% - 20px);
    margin: 10px 0px;
    }

    #mensagemUser {
    position: fixed;
    bottom: 10px;
    left: 50%;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
    width: calc(100% - 30px);
    border-radius: 200px;
    }

    .textoForum {
    text-align: justify;
    width: calc(100% - 30px);
    color: #5c5c5c;
    background-color: rgba(255, 255, 255, 0.295);
    padding: 10px;
    border-radius: 5px;
    margin: 10px;
    }

    .mensagemForum {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    margin-right: 10px;
    }

    .mensagemForum .horarioEnvio {
    margin-right: 20px;
    }

    .navDireita {
    position: relative;
    z-index: 2;
    }

    .navDireita:after {
    content: "";
    position: absolute;
    top: 20%;
    left: -25px;
    z-index: -1;
    width: 50px;
    height: 50px;
    background-color: #f1f1f1;
    -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
    }

    .containerLogin {
    width: calc(100% - 20px);
    margin: 0px auto;
    border-radius: 5px;
    padding: 20px;
    }

    .form-group {
    margin-top: 20px;
    }

    .form-group label {
    margin: 15px 15px 15px 0px;
    color: white;
    }

    .form-group input {
    border: none !important;
    border-radius: 200px !important;
    color: #3d3d3d;
    height: 40px !important;
    padding-left: 20px;
    -webkit-box-shadow: 2px 2px 1px 0.2rem #41b8b63a !important;
            box-shadow: 2px 2px 1px 0.2rem #41b8b63a !important;
    }

    .botaoLogin {
    margin-top: 30px;
    width: 100%;
    background-color: #41b8b6c2 !important;
    border: none !important;
    border-radius: 200px !important;
    margin-bottom: 15px !important;
    -webkit-box-shadow: 2px 2px 1px 0.2rem #41b8b63a !important;
            box-shadow: 2px 2px 1px 0.2rem #41b8b63a !important;
    }

    .linkLogin {
    text-decoration: none !important;
    color: #ffffff;
    }

    .linkLogin:hover {
    color: #cefffe;
    }

    .alinhamento {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    width: 100%;
    }

    .iconLogin {
    width: 26px;
    margin-right: 10px;
    margin-bottom: 4px;
    }

    .logoSite {
    width: 130px;
    -webkit-filter: contrast(0%) brightness(500%);
            filter: contrast(0%) brightness(500%);
    margin-bottom: 20px;
    position: relative;
    }

    .tituloPagina {
    padding: 10px 30px;
    margin: 30px;
    margin-bottom: 0px;
    margin-top: 30px;
    color: #ffffff;
    background-color: #41b8b6c2;
    border-radius: 200px;
    }

    .iconeUserHeader {
    width: 50px !important;
    height: 50px;
    border-radius: 50%;
    border: solid 2px white;
    }
    .file{
        width: 100%;
    }
    form{
        width:90%
    }
    .file-custom {
    border-radius: 200px !important;
    }

    .file-custom:before {
    content: "Buscar" !important;
    border-top-right-radius: 200px !important;
    border-bottom-right-radius: 200px !important;
    }

    .file-custom:after {
    content: "Escolha um arquivo" !important;
    }

    .file-custom {
    margin: 20px 0px;
    margin-bottom: 40px !important;
    border: none !important;
    color: #3d3d3d;
    -webkit-box-shadow: 2px 2px 1px 0.2rem #41b8b63a !important;
            box-shadow: 2px 2px 1px 0.2rem #41b8b63a !important;
    }
    </style>
    <link href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/wtf-forms.css" rel="stylesheet">
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous">
    </script>
    <script>
    function attNomeArquivo(){
       var str = $('#file').val().split('\\')[$('#file').val().split('\\').length - 1];
       if(str !== ''){
          document.styleSheets[0].addRule('.file > .file-custom:after','content: "'+str+'" !important;');
       }
    }
    </script>
@endpush

@section('content')


        <!---------------------------- Header ------------------------------->

        
    <div class="header">
        <div class="containerLogo">
        <a href="{{route('forum.index') }}"><img class="logo" src="{{asset('Imagens/cat.svg')}}" /></a>
        <span class="tituloLogo"></span>
        </div>
        <div class="opcoesHeader">
        <a class="linkForum linkHeader" href="{{route('forum.editarUsuario') }}">
        <div>
            Perfil
        </div>
        </a>
        <a class="linkForum linkHeader" href="{{route('forum.index') }}"><div style="color: #00beba">
        Fóruns
        </div>
        </a>
        </div>
        <div class="opcoesUser">
        <a href="{{route('forum.novoForum') }}"><img src="{{asset('Imagens/plus.svg')}}" /></a>
        <a href="{{route('logout') }}"><img src="{{asset('Imagens/logout.svg')}}" /></a>
        <img class="iconeUserHeader" src="{{asset('usuario/' . Auth::user()->image)}}" />
        </div>
    </div>

    <!---------------------------- Conteúdo Principal ------------------------------->

    <div class = "paiMain">
        <div class = "main">
        
        <!---------------------------- Form de criação ode forum ------------------------------->

        <div class = "containerLogin">
        <form method="post" action="{{route('forum.gravar')}}" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                <label for="nomeforum"><img class = "iconLogin" src="{{asset('Imagens/email.svg')}}"/>Nome do Fórum</label>
                <input type="text" name='nome' class="form-control" id="nomeforum" aria-describedby="emailHelp" placeholder="Exemplo: Meu Fórum sobre gatos">
                </div>
                <div class="form-group">
                <label for="detalhesForum"><img class = "iconLogin" src="{{asset('Imagens/page.svg')}}"/>Detalhes do Fórum</label>
                <input type="text" class="form-control" name='descricao' id="detalhesForum" aria-describedby="detalhesForum" placeholder="Exemplo: Esse é um fórum divertido sobre gatos">
                </div>
                <div class="form-group">
                    <label  style="margin-bottom:0px;" for="exampleInputEmail1"><img style = "width:20px" class = "iconLogin" src="{{asset('Imagens/imageIcon.svg')}}"/>Ícone</label>
                    <label class="file" style="margin-top:0px;">
                        <input onchange='attNomeArquivo()' name='imagem' type="file" id="file" aria-label="File browser example">
                        <span class="file-custom"></span>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary botaoLogin">Criar Fórum</button>
            </form>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
@endsection