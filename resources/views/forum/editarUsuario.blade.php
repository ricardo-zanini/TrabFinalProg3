@extends('templates.base')
@section('title', 'Editar Usuário')
@section('h1', 'Editar Usuário')
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
    overflow-x: auto;
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
    margin-top: 60px;
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
    margin-top:15px !important;
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
    .divisoria {
        height: 1px;
        padding: 0.5px;
        background-color: #00000036;
        width:100%;
        margin: 10px 0px;
     }
    .fotoUsuarioPerfilContainer{
        padding-top:40px;
        display:flex;
        align-items:center;
        flex-wrap:wrap;
        background-size:100% 100%;
        background-position:100px 0px;
        background-repeat:no-repeat;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1006%26quot%3b)' fill='none'%3e%3cpath d='M1524.13 87.2C1412.45 88.59 1315.45 217.14 1096.37 216 877.28 214.86 800.88-85.77 668.6-102.63' stroke='rgba(65%2c 184%2c 182%2c 0.63)' stroke-width='2'%3e%3c/path%3e%3cpath d='M1652.39 289.68C1507.27 291.32 1385.46 455.43 1095.07 452.08 804.67 448.73 720.21-4.36 537.74-37.41' stroke='rgba(65%2c 184%2c 182%2c 0.63)' stroke-width='2'%3e%3c/path%3e%3cpath d='M1549.26 446.97C1443.58 441.18 1397.05 271.98 1174.02 250.97 950.99 229.96 916.71-25.88 798.78-42.62' stroke='rgba(65%2c 184%2c 182%2c 0.63)' stroke-width='2'%3e%3c/path%3e%3cpath d='M1541.78 256.39C1429.12 261.42 1353.69 458.05 1135.49 452.39 917.3 446.73 883.65-7.6 729.21-62.93' stroke='rgba(65%2c 184%2c 182%2c 0.63)' stroke-width='2'%3e%3c/path%3e%3cpath d='M1722.99 126.83C1618.83 131.78 1542.72 313.4 1349.07 311.63 1155.42 309.86 1105.63-42.52 975.15-75.09' stroke='rgba(65%2c 184%2c 182%2c 0.63)' stroke-width='2'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1006'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3c/defs%3e%3c/svg%3e");
    }
    .fotoUsuarioPerfil{
        width:200px;
        height:200px;
        border-radius:50%;
        background-image: url("{{asset('usuario/' . Auth::user()->image)}}");
        background-size:cover;
        margin-right:30px;
        border: solid 5px #c4c4c4;
        background-color: #c4c4c4;
    }
    .containerInfoUser{
        color:#3d3d3d;
        max-width:50%;
    }
    .nomeUsuarioPerfil{
        font-size:2rem;
        color:#41b8b6;
    }
    .descricaoUsuarioPerfil{
        font-size:0.9rem;
        color: #686868;
        text-align:justify;
    }
    .form-group .form-control {
            border: none !important;
            border-radius: 30px !important;
            color: #3d3d3d;
            padding-left: 20px;
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
      <div style="color: #00beba">
        Perfil
      </div>
      </a>
      <a class="linkForum linkHeader" href="{{route('forum.index') }}">
        <div>
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
        <div class="fotoUsuarioPerfilContainer">
            <div class="fotoUsuarioPerfil"></div>
            <div class="containerInfoUser">
                <div class="nomeUsuarioPerfil">{{Auth::user()->username}}</div>
                <div class="emailUsuarioPerfil"> {{Auth::user()->name}} / {{Auth::user()->email}}</div>
                <div class="divisoria"></div>
                <div class="descricaoUsuarioPerfil">{{Auth::user()->description}}</div>
            </div>
        </div>

        <div class="tituloConteudo">Edição de Perfil</div>

        <!-- ================== Form de edição ===================== -->
        <form method="post"  action="{{ route('usuarioForum.update') }}"  enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="email"><img class = "iconLogin" src="{{asset('Imagens/email.svg')}}"/>Email</label>
            <input type="email" class="form-control" name='email' id="Email" aria-describedby="emailHelp" value="{{Auth::user()->email}}" placeholder="Digite seu email">
        </div>
        <div class="form-group">
            <label for="name"><img class = "iconLogin" src="{{asset('Imagens/user.svg')}}">Nome</label>
            <input type="text" class="form-control" name='name' id="Nome" value="{{Auth::user()->name}}" placeholder="Digite seu Nome">
        </div>
        <div class="form-group">
            <label for="username"><img class = "iconLogin" src="{{asset('Imagens/user.svg')}}">Nome de Usuário</label>
            <input type="text" class="form-control" name='username' id="Usuário" value="{{Auth::user()->username}}" placeholder="Digite seu Nome de Usuário">
        </div>

        <div class="form-group">
            <label for="password"><img class = "iconLogin" src="{{asset('Imagens/lock2.svg')}}">Senha</label>
            <input type="password" class="form-control" name='password' id="Senha" placeholder="Digite uma Senha">
        </div>

        <div class="form-group">
            <label for="description"><img class = "iconLogin" src="{{asset('Imagens/page.svg')}}">Descrição do Perfil</label>
            <textarea class="form-control" name='description' id="Descrição" rows="3" placeholder="Digite uma descrição para você">{{Auth::user()->description}}</textarea>
        </div>

        <label style="margin-top:35px" for="iconLogin"><img class = "iconLogin"  src="{{asset('Imagens/photo.svg')}}">Imagem de Perfil</label>
        <div><label class="file">
            <input onchange='attNomeArquivo()' name='imagem' type="file" id="Arquivo" value="{{Auth::user()->image}}" aria-label="File browser example">
            <span class="file-custom"></span>
            </label>
        </div>

        <button type="submit" class="btn btn-primary botaoLogin">Aplicar Alterações</button>
        <div class="erro"></div>
        </form>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
@endsection