<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/wtf-forms.css" rel="stylesheet">
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<style>
body{
    font-family: 'Outfit', sans-serif !important;
    position:relative;
  }
.erro{
    /* position:absolute;
    padding:20px;
    top: 0;
    left: 50%;

    transform: translate(-50%, -0%); */
    margin:10px;
    margin-top:20px;
}
.erroInterno {
    border-radius: 30px;
    background-color: #60c8c56b !important;}
.alert-danger {
    color: #126967;
    background-color: #f8d7da;
    border-color: transparent; */
}
.file-custom:before {
            content: "Buscar" !important;
            top:0 !important;
            right:0 !important;
            border-top-right-radius: 200px !important;
            border-bottom-right-radius: 200px !important;
            color:#4d9290 !important;
            background-color:#a5e1e0 !important;
            border:0 !important
            }
.linkHeader{
    height:100%;
    width:fit-content;
}
.linkForum{
  text-decoration:none;
}
.opcoesHeader {
  width: 450px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  height: 100%;
}

.opcoesHeader div {
  cursor:pointer;
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
.forumNavEsquerda img {
  width: 25px;
  height: 25px;
  margin-right: 15px;
  border-radius: 2px;
  background-color: #c9c9c9 !important;
}
.fundoNavEsquerda{
        overflow-y:auto;
        overflow-x:hidden;
        background-color:#d8d8d8;
        height:100vh;
        min-width:330px;
    }

.navEsquerda {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  max-height: 100vh;
  width: 300px;
  min-height:100vh;
  padding-top: 70px;
  background-color: #f7f7f7;
}
.navEsquerdaCategoria {
  padding: 10px 0px;
  padding-left: 20px;
  margin: 5px 0px 5px 0px;
  color: #ffffff;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  position: relative;
  padding-right: 40px;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 56 28' width='56' height='28'%3E%3Cpath fill='%23ffffff' fill-opacity='0.05' d='M56 26v2h-7.75c2.3-1.27 4.94-2 7.75-2zm-26 2a2 2 0 1 0-4 0h-4.09A25.98 25.98 0 0 0 0 16v-2c.67 0 1.34.02 2 .07V14a2 2 0 0 0-2-2v-2a4 4 0 0 1 3.98 3.6 28.09 28.09 0 0 1 2.8-3.86A8 8 0 0 0 0 6V4a9.99 9.99 0 0 1 8.17 4.23c.94-.95 1.96-1.83 3.03-2.63A13.98 13.98 0 0 0 0 0h7.75c2 1.1 3.73 2.63 5.1 4.45 1.12-.72 2.3-1.37 3.53-1.93A20.1 20.1 0 0 0 14.28 0h2.7c.45.56.88 1.14 1.29 1.74 1.3-.48 2.63-.87 4-1.15-.11-.2-.23-.4-.36-.59H26v.07a28.4 28.4 0 0 1 4 0V0h4.09l-.37.59c1.38.28 2.72.67 4.01 1.15.4-.6.84-1.18 1.3-1.74h2.69a20.1 20.1 0 0 0-2.1 2.52c1.23.56 2.41 1.2 3.54 1.93A16.08 16.08 0 0 1 48.25 0H56c-4.58 0-8.65 2.2-11.2 5.6 1.07.8 2.09 1.68 3.03 2.63A9.99 9.99 0 0 1 56 4v2a8 8 0 0 0-6.77 3.74c1.03 1.2 1.97 2.5 2.79 3.86A4 4 0 0 1 56 10v2a2 2 0 0 0-2 2.07 28.4 28.4 0 0 1 2-.07v2c-9.2 0-17.3 4.78-21.91 12H30zM7.75 28H0v-2c2.81 0 5.46.73 7.75 2zM56 20v2c-5.6 0-10.65 2.3-14.28 6h-2.7c4.04-4.89 10.15-8 16.98-8zm-39.03 8h-2.69C10.65 24.3 5.6 22 0 22v-2c6.83 0 12.94 3.11 16.97 8zm15.01-.4a28.09 28.09 0 0 1 2.8-3.86 8 8 0 0 0-13.55 0c1.03 1.2 1.97 2.5 2.79 3.86a4 4 0 0 1 7.96 0zm14.29-11.86c1.3-.48 2.63-.87 4-1.15a25.99 25.99 0 0 0-44.55 0c1.38.28 2.72.67 4.01 1.15a21.98 21.98 0 0 1 36.54 0zm-5.43 2.71c1.13-.72 2.3-1.37 3.54-1.93a19.98 19.98 0 0 0-32.76 0c1.23.56 2.41 1.2 3.54 1.93a15.98 15.98 0 0 1 25.68 0zm-4.67 3.78c.94-.95 1.96-1.83 3.03-2.63a13.98 13.98 0 0 0-22.4 0c1.07.8 2.09 1.68 3.03 2.63a9.99 9.99 0 0 1 16.34 0z'%3E%3C/path%3E%3C/svg%3E");
  background-color: #41b8b6;
}

.navEsquerdaCategoria:after {
  content: "";
  position: absolute;
  right: -20px;
  width: 25px;
  height: 100%;
  border-bottom-right-radius: 200px;
  border-top-right-radius: 200px;
  background-color: #41b8b6;
  z-index: 2;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 56 28' width='56' height='28'%3E%3Cpath fill='%23ffffff' fill-opacity='0.05' d='M56 26v2h-7.75c2.3-1.27 4.94-2 7.75-2zm-26 2a2 2 0 1 0-4 0h-4.09A25.98 25.98 0 0 0 0 16v-2c.67 0 1.34.02 2 .07V14a2 2 0 0 0-2-2v-2a4 4 0 0 1 3.98 3.6 28.09 28.09 0 0 1 2.8-3.86A8 8 0 0 0 0 6V4a9.99 9.99 0 0 1 8.17 4.23c.94-.95 1.96-1.83 3.03-2.63A13.98 13.98 0 0 0 0 0h7.75c2 1.1 3.73 2.63 5.1 4.45 1.12-.72 2.3-1.37 3.53-1.93A20.1 20.1 0 0 0 14.28 0h2.7c.45.56.88 1.14 1.29 1.74 1.3-.48 2.63-.87 4-1.15-.11-.2-.23-.4-.36-.59H26v.07a28.4 28.4 0 0 1 4 0V0h4.09l-.37.59c1.38.28 2.72.67 4.01 1.15.4-.6.84-1.18 1.3-1.74h2.69a20.1 20.1 0 0 0-2.1 2.52c1.23.56 2.41 1.2 3.54 1.93A16.08 16.08 0 0 1 48.25 0H56c-4.58 0-8.65 2.2-11.2 5.6 1.07.8 2.09 1.68 3.03 2.63A9.99 9.99 0 0 1 56 4v2a8 8 0 0 0-6.77 3.74c1.03 1.2 1.97 2.5 2.79 3.86A4 4 0 0 1 56 10v2a2 2 0 0 0-2 2.07 28.4 28.4 0 0 1 2-.07v2c-9.2 0-17.3 4.78-21.91 12H30zM7.75 28H0v-2c2.81 0 5.46.73 7.75 2zM56 20v2c-5.6 0-10.65 2.3-14.28 6h-2.7c4.04-4.89 10.15-8 16.98-8zm-39.03 8h-2.69C10.65 24.3 5.6 22 0 22v-2c6.83 0 12.94 3.11 16.97 8zm15.01-.4a28.09 28.09 0 0 1 2.8-3.86 8 8 0 0 0-13.55 0c1.03 1.2 1.97 2.5 2.79 3.86a4 4 0 0 1 7.96 0zm14.29-11.86c1.3-.48 2.63-.87 4-1.15a25.99 25.99 0 0 0-44.55 0c1.38.28 2.72.67 4.01 1.15a21.98 21.98 0 0 1 36.54 0zm-5.43 2.71c1.13-.72 2.3-1.37 3.54-1.93a19.98 19.98 0 0 0-32.76 0c1.23.56 2.41 1.2 3.54 1.93a15.98 15.98 0 0 1 25.68 0zm-4.67 3.78c.94-.95 1.96-1.83 3.03-2.63a13.98 13.98 0 0 0-22.4 0c1.07.8 2.09 1.68 3.03 2.63a9.99 9.99 0 0 1 16.34 0z'%3E%3C/path%3E%3C/svg%3E");
}

.iconeCategoria {
  width: 20px;
  margin-right: 5px;
}

.forumNavEsquerda {
  padding: 8px;
  margin: 4px 0px;
  padding-left: 20px;
  color: #6d6d6d;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-wrap: no-wrap;
      flex-wrap: no-wrap;
  background-color: #e7e7e7;
}

.forumNavEsquerda img {
  width: 30px;
  height: 30px;
  margin-right: 5px;
  border-radius: 50%;
  border:solid 2px #c9c9c9;
  background-color: #eeeeee;
}
.opcoesHeader {
  width: 330px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  height: 100%;
}
.tituloConteudo{
        width:calc(100% - 50px);
        font-size:1.9rem;
        margin-top:30px;
        color:#41b8b6;
        border-bottom:solid 1px #00000036;
        position:relative;
        padding-bottom: 15px;
    }
  .botaoLogin{
    transition:0.5s;
  }
  .botaoLogin:hover{
    transition:0.5s;
    background-color:#41b8b68c !important;
  }
  .excluirForumButton:hover{
    background-color:#ff494991 !important;
  }

  @media only screen and (max-width: 700px) {
    .fundoNavEsquerda{
      display: none;
    }
    .paiMain{
      width:100% !important;
    }
    .main{
      padding-top:90px !important;
    }
  }
  @media only screen and (max-width: 640px) {
    .opcoesHeader{
      position:absolute;
      width:100%;
      top:70px;
      height:40px;
      justify-content:flex-start;
      background-color: #ececec;

    }
    .opcoesHeader > a:first-child{
        margin-left:10px;
    }
    .opcoesHeader div{
      border:0 !important;
      margin-right:10px !important;
    }
    .main > .forumMain {
      margin-top:180px !important;
    }

    .main > .forumMain ~ .forumMain {
        margin-top:80px !important;
    }
  }
  @media only screen and (max-width: 450px) {
    
    .conteudoImagem > .imagemMensagem{
      width:70vw !important;
    }
    
  }

</style>
    <script>
      //---------------- Add nome de arquivo ao selecionar em input --------------
        function attNomeArquivo(){
            var str = $('#Arquivo').val().split('\\')[$('#Arquivo').val().split('\\').length - 1];
            if(str !== ''){
                document.styleSheets[0].addRule('.file > .file-custom:after','content: "'+str+'" !important;');
            }
        }
        //================== Validação e formulários =====================
        function validacaoCampos(e, erro){

            var inputs = $(e.target).find('input');
            var mensagemErro = '';
            for(let i = 0; i < inputs.length; i++){
                if($(inputs[i]).attr('id') !== undefined){
                    if($(inputs[i]).val() == ''){
                        mensagemErro = mensagemErro + `<div class="erroInterno alert alert-danger">Preencha Corretamente o campo ${$(inputs[i]).attr('id')}</div>` 
                    }
                }
            }
            if(mensagemErro != ''){
                e.preventDefault()
                $(erro).html('')
                $(erro).append(mensagemErro)
            }
        }
    </script>
</head>@stack('styles')
<body>
@if($pagina === 'forum')

  <!---------------------------- Menu Esquerda ------------------------------->
  
  <div class="fundoNavEsquerda">
  <div class="navEsquerda">

  <!-- ================== Menu favoritos ===================== -->

  @if (!$favoritos->isEmpty())
    <div class="navEsquerdaCategoria">
      Favoritos
    </div>
    <div class="filhosnavEsquerda">
      @foreach($favoritos as $favorito)
      <a class="linkForum" href="{{route('forum.forum', $favorito->id_forum) }}">
        <div class="forumNavEsquerda"> <img src="{{asset('forum/'.$favorito->imagem_forum)}}" />
          <div>{{$favorito->nome}}</div>
        </div>
      </a>
      @endforeach
    </div>
    @endif

    <!-- ================== Menu Recentes ===================== -->

    @if(!$recentes->isEmpty())
    <div class="navEsquerdaCategoria">
      Recentes
    </div>
    <div class="filhosnavEsquerda">
      @foreach($recentes as $recente)
      <a class="linkForum" href="{{route('forum.forum', $recente->id_forum) }}">
        <div class="forumNavEsquerda"> <img src="{{asset('forum/'.$recente->imagem_forum)}}" />
          <div>{{$recente->nome}}</div>
        </div>
      </a>
      @endforeach
    </div>
    @endif
    
    <!-- ================== Menu Novos fóruns ===================== -->

    @if (!$novosForuns->isEmpty())
    <div class="navEsquerdaCategoria">
      Novos Fóruns
    </div>
    <div class="filhosnavEsquerda">
      @foreach($novosForuns as $novoForum)
      <a class="linkForum" href="{{route('forum.forum', $novoForum) }}">
        <div class="forumNavEsquerda"> <img src="{{asset('forum/'.$novoForum->imagem_forum)}}" />
          <div>{{$novoForum->nome}}</div>
        </div>
      </a>
      @endforeach
    </div>
    @endif

  </div>
  </div>
@endif

@yield('content')

</body>

@stack('scripts')

</html>