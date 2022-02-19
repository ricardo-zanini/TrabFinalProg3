@extends('templates.base')
@section('title', 'Cadastro de usuário')
@push('styles')
    <style>
        body {
            min-height: 100vh;
            background-color: #41B8B6;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 2 1'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='0' x2='0' y1='0' y2='1'%3E%3Cstop offset='0' stop-color='%2341B8B6'/%3E%3Cstop offset='1' stop-color='%23CDFFFD'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='0' y1='0' x2='0' y2='1'%3E%3Cstop offset='0' stop-color='%2341B8B6' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%2341B8B6' stop-opacity='1'/%3E%3C/linearGradient%3E%3ClinearGradient id='c' gradientUnits='userSpaceOnUse' x1='0' y1='0' x2='2' y2='2'%3E%3Cstop offset='0' stop-color='%2341B8B6' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%2341B8B6' stop-opacity='1'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect x='0' y='0' fill='url(%23a)' width='2' height='1'/%3E%3Cg fill-opacity='0.5'%3E%3Cpolygon fill='url(%23b)' points='0 1 0 0 2 0'/%3E%3Cpolygon fill='url(%23c)' points='2 1 2 0 0 0'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            }

            .containerLogin {
            max-width: 500px;
            background-color: #ffffff60;
            min-height: 100vh;
            padding: 20px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
                -ms-flex-direction: column;
                    flex-direction: column;
            -webkit-box-align: center;
                -ms-flex-align: center;
                    align-items: center;
            }

            .form-group label {
            margin: 15px 15px 15px 0px;
            color: white;
            }

            .form-group .form-control {
            border: none !important;
            border-radius: 200px !important;
            color: #3d3d3d;
            padding-left: 20px;
            -webkit-box-shadow: 2px 2px 1px 0.2rem #41b8b63a !important;
                    box-shadow: 2px 2px 1px 0.2rem #41b8b63a !important;
            }

            .form-group input {
            height: 40px  !important;
            }

            .form-group textarea {
            height: 80px  !important;
            }

            .botaoLogin {
            margin-top: 50px;
            padding:10px;
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
            color: #41b8b6c2;
            }

            .linkLogin:hover {
            color: #187271c2;
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
            .file{
                width: 100%;
            }
            form{
                width:90%
            }
            .file-custom {
            border-radius: 200px !important;
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
@endpush

@section('content')
    <div class = "containerLogin">

    <!---------------------------- Form de Cadastro ------------------------------->

    <form method="post" onsubmit="validacaoCampos(event,'.erro')" action="{{ route('usuarios.gravar') }}"  enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            
            <label for="exampleInputEmail1"><img class = "iconLogin" src="{{asset('Imagens/email.svg')}}"/>Email</label>
            <input type="email" class="form-control" name='email' id="Email" aria-describedby="emailHelp" placeholder="Digite seu email">
            
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1"><img class = "iconLogin" src="{{asset('Imagens/lock2.svg')}}">Senha</label>
            <input type="password" class="form-control" name='password' id="Senha" placeholder="Digite uma Senha">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1"><img class = "iconLogin" src="{{asset('Imagens/lock2.svg')}}">Repetir Senha</label>
            <input type="password" class="form-control" name='repeatPassword' id="RepetirSenha" placeholder="Repetir senha">
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1"><img class = "iconLogin" src="{{asset('Imagens/user.svg')}}">Nome</label>
            <input type="text" class="form-control" name='name' id="Nome" placeholder="Digite seu Nome">
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1"><img class = "iconLogin" src="{{asset('Imagens/user.svg')}}">Nome de Usuário</label>
            <input type="text" class="form-control" name='username' id="Usuário" placeholder="Digite seu Nome de Usuário">
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1"><img class = "iconLogin" src="{{asset('Imagens/page.svg')}}">Descrição do Perfil</label>
            <textarea class="form-control" name='description' id="Descrição" rows="3" placeholder="Digite uma descição para você"></textarea>
            </div>
            <div><label class="file">
            <input onchange='attNomeArquivo()' name='imagem' type="file" id="Arquivo" aria-label="File browser example">
            <span class="file-custom"></span>
            </label></div>
        <button type="submit" class="btn btn-primary botaoLogin">Criar Perfil</button>
        <div class = "alinhamento"><a class = "linkLogin" href = "{{ route('login') }}">Já está Cadastrado?</a></div>
        </form>
        <div class="erro"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection