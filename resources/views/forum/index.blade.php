@extends('templates.base')
@section('title', 'Fóruns')
@section('h1', 'Fóruns')
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
  height: 100vh;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  overflow-y: auto;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
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

.forumMain:hover {
  -webkit-transition: 0.3s;
  transition: 0.3s;
  -webkit-transform: scale(1.01);
          transform: scale(1.01);
}

/* .forumMain:before {
  content: "";
  position: absolute;
  width: 120px;
  height: 120px;
  left: calc(50% - 60px);
  background-color: #e2e2e2;
  -webkit-box-shadow: 0px 0px 5px 0.1px #1fa8a6;
          box-shadow: 0px 0px 5px 0.1px #1fa8a6;
  border-radius: 50%;
  top: -70px;
  background-size: 100%;
} */

.tituloForumMain {
  margin-top: 0px;
  padding: 50px 20px 30px 20px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  height: 110px;
  font-size: 1.4rem;
  overflow:hidden;
  text-overflow:ellipsis;
  white-space:nowrap;
  color: #ececec;
  background-color: #41b8b6;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 56 28' width='56' height='28'%3E%3Cpath fill='%23ffffff' fill-opacity='0.05' d='M56 26v2h-7.75c2.3-1.27 4.94-2 7.75-2zm-26 2a2 2 0 1 0-4 0h-4.09A25.98 25.98 0 0 0 0 16v-2c.67 0 1.34.02 2 .07V14a2 2 0 0 0-2-2v-2a4 4 0 0 1 3.98 3.6 28.09 28.09 0 0 1 2.8-3.86A8 8 0 0 0 0 6V4a9.99 9.99 0 0 1 8.17 4.23c.94-.95 1.96-1.83 3.03-2.63A13.98 13.98 0 0 0 0 0h7.75c2 1.1 3.73 2.63 5.1 4.45 1.12-.72 2.3-1.37 3.53-1.93A20.1 20.1 0 0 0 14.28 0h2.7c.45.56.88 1.14 1.29 1.74 1.3-.48 2.63-.87 4-1.15-.11-.2-.23-.4-.36-.59H26v.07a28.4 28.4 0 0 1 4 0V0h4.09l-.37.59c1.38.28 2.72.67 4.01 1.15.4-.6.84-1.18 1.3-1.74h2.69a20.1 20.1 0 0 0-2.1 2.52c1.23.56 2.41 1.2 3.54 1.93A16.08 16.08 0 0 1 48.25 0H56c-4.58 0-8.65 2.2-11.2 5.6 1.07.8 2.09 1.68 3.03 2.63A9.99 9.99 0 0 1 56 4v2a8 8 0 0 0-6.77 3.74c1.03 1.2 1.97 2.5 2.79 3.86A4 4 0 0 1 56 10v2a2 2 0 0 0-2 2.07 28.4 28.4 0 0 1 2-.07v2c-9.2 0-17.3 4.78-21.91 12H30zM7.75 28H0v-2c2.81 0 5.46.73 7.75 2zM56 20v2c-5.6 0-10.65 2.3-14.28 6h-2.7c4.04-4.89 10.15-8 16.98-8zm-39.03 8h-2.69C10.65 24.3 5.6 22 0 22v-2c6.83 0 12.94 3.11 16.97 8zm15.01-.4a28.09 28.09 0 0 1 2.8-3.86 8 8 0 0 0-13.55 0c1.03 1.2 1.97 2.5 2.79 3.86a4 4 0 0 1 7.96 0zm14.29-11.86c1.3-.48 2.63-.87 4-1.15a25.99 25.99 0 0 0-44.55 0c1.38.28 2.72.67 4.01 1.15a21.98 21.98 0 0 1 36.54 0zm-5.43 2.71c1.13-.72 2.3-1.37 3.54-1.93a19.98 19.98 0 0 0-32.76 0c1.23.56 2.41 1.2 3.54 1.93a15.98 15.98 0 0 1 25.68 0zm-4.67 3.78c.94-.95 1.96-1.83 3.03-2.63a13.98 13.98 0 0 0-22.4 0c1.07.8 2.09 1.68 3.03 2.63a9.99 9.99 0 0 1 16.34 0z'%3E%3C/path%3E%3C/svg%3E");
}

.conteudoForum {
  margin-top: 30px;
  padding: 20px;
  color: #474747;
  height: 110px;
  overflow-y: auto;
  text-align: justify;
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

.navDireita {
  position: relative;
  z-index: 2;
}

.navDireita:after {
  content: "";
  position: absolute;
  top: 150px;
  left: -25px;
  z-index: -1;
  width: 50px;
  height: 50px;
  background-color: #f1f1f1;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}

.iconeUserHeader {
  width: 50px !important;
  height: 50px;
  border-radius: 50%;
  border: solid 2px white;
}

#mensagemUser {
  border-radius: 200px;
  border: none !important;
  border-radius: 200px !important;
  color: #3d3d3d;
  padding-left: 20px;
  -webkit-box-shadow: 2px 2px 1px 0.2rem #41b8b63a !important;
          box-shadow: 2px 2px 1px 0.2rem #41b8b63a !important;
}

.containerMensagemUser {
  position: fixed;
  top: 80px;
  left: 50%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  width: calc(100% - 30px);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  gap: 10px;
  z-index: 10;
}

.containerMensagemUser img {
  width: 30px;
}

.containerMensagemUser button {
  background-color: #41b8b6c2 !important;
  border: none !important;
  border-radius: 200px !important;
  -webkit-box-shadow: 2px 2px 1px 0.2rem #41b8b63a !important;
          box-shadow: 2px 2px 1px 0.2rem #41b8b63a !important;
}
/*# sourceMappingURL=style.css.map */body {
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



.forumMain {
  width: 300px;
  height: 300px;
  margin-top: 150px !important;
  background-color: #f3f3f3;
  position: relative;
  border-radius:10px;
  -webkit-box-shadow: 0px 0px 5px 0.1px #0000006b;
          box-shadow: 0px 0px 5px 0.1px #0000006b;
  margin: 10px;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.forumMain:hover {
  -webkit-transition: 0.3s;
  transition: 0.3s;
  -webkit-transform: scale(1.01);
          transform: scale(1.01);
}

/* .forumMain:before {
  content: "";
  position: absolute;
  width: 120px;
  height: 120px;
  left: calc(50% - 60px);
  background-color: #e2e2e2;
  -webkit-box-shadow: 0px 0px 5px 0.1px #1fa8a6;
          box-shadow: 0px 0px 5px 0.1px #1fa8a6;
  border-radius: 50%;
  top: -70px;
  background-size: 100%;
} */

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

.navDireita {
  position: relative;
  z-index: 2;
}

.navDireita:after {
  content: "";
  position: absolute;
  top: 150px;
  left: -25px;
  z-index: -1;
  width: 50px;
  height: 50px;
  background-color: #f1f1f1;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}

.iconeUserHeader {
  width: 50px !important;
  height: 50px;
  border-radius: 50%;
  border: solid 2px white;
}

#mensagemUser {
  border-radius: 200px;
  border: none !important;
  border-radius: 200px !important;
  color: #3d3d3d;
  padding-left: 20px;
  -webkit-box-shadow: 2px 2px 1px 0.2rem #41b8b63a !important;
          box-shadow: 2px 2px 1px 0.2rem #41b8b63a !important;
  margin-left: 10px;
}

.containerMensagemUser {
  position: fixed;
  top: 80px;
  left: 50%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  width: calc(100% - 30px);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  gap: 10px;
  z-index: 10;
}

.containerMensagemUser img {
  width: 30px;
}

.containerMensagemUser button {
  background-color: #41b8b6 !important;
  border: none !important;
  border-radius: 200px !important;
  -webkit-box-shadow: 2px 2px 1px 0.2rem #41b8b63a !important;
          box-shadow: 2px 2px 1px 0.2rem #41b8b63a !important;
}
@media only screen and (max-width: 640px) {
    
    .containerMensagemUser{
      top:120px !important;
    }

  }
  @media only screen and (max-width: 450px) {
    
    .conteudoImagem > .imagemMensagem{
      width:40vw !important;
    }
    
  }

/*# sourceMappingURL=style.css.map */
    </style>
    <script>
      // ================== Pefga cor em destaque de imagem =====================
        function averageColor(imageElement) {
 
 // Create the canvas element
 var canvas
     = document.createElement('canvas'),

     context
         = canvas.getContext &&
         canvas.getContext('2d'),
     imgData, width, height,
     length,
     rgb = { r: 0, g: 0, b: 0 },

     count = 0;

    height = canvas.height =
        imageElement.naturalHeight ||
        imageElement.offsetHeight ||
        imageElement.height;
    width = canvas.width =
        imageElement.naturalWidth ||
        imageElement.offsetWidth ||
        imageElement.width;

    context.drawImage(imageElement, 0, 0);

    imgData = context.getImageData(
                0, 0, width, height);

    length = imgData.data.length;

    for (var i = 0; i < length; i += 4) {

        rgb.r += imgData.data[i];

        rgb.g += imgData.data[i + 1];

        rgb.b += imgData.data[i + 2];

        count++;
    }

    rgb.r
        = Math.floor(rgb.r / count);

    rgb.g
        = Math.floor(rgb.g / count);

    rgb.b
        = Math.floor(rgb.b / count);

    return `rgb(${rgb.r},${rgb.g},${rgb.b})`;
    }
    function aleatorizaNumero(min, max) {
      return Math.floor(Math.random() * (max - min + 1) ) + min;
    }
      $(document).ready(function(){
        var foruns = $('.forumMain');
        for(let i = 0; i < foruns.length; i++){
          var id = $(foruns[i]).attr('id')
          console.log($(foruns[i]).attr('id'))
          var imagem = $(foruns[i]).attr('data-imagem')
          $($('style')[0]).append(`
          #${id}:before{
            content: "";
            position: absolute;
            width: 120px;
            height: 120px;
            left: calc(50% - 60px);
            background-color: #e2e2e2;
            -webkit-box-shadow: 0px 0px 5px 0.3px #0000006b;
                    box-shadow: 0px 0px 5px 0.3px #0000006b;
            border-radius: 50%;
            top: -70px;
            background-size: 100%;
            background-image: url("${imagem}");
            background-size:cover;
          }
          
          `)
        }
        //---------- Aleatoriza cores ----------
        

        var mains = $('.forumMain');
          for(let i = 0; i< mains.length; i++){
            let id = `${$(mains[i]).attr('id')}-imagem`;
            console.log(id)
            let cor = averageColor(document.getElementById(id))
              $(mains[i]).find('.tituloForumMain').css({'background-color':cor})
          }

      })
      // ================== Pesquisa em fóruns =====================
      function pesquisaForuns(elemento){
          var mains = $('.forumMain');
          for(let i = 0; i< mains.length; i++){
            if($(mains[i]).find('.tituloForumMain').text().toLowerCase().includes(elemento.val().toLowerCase())){
              $(mains[i]).css({'display':'block'})
            }
            else{
              $(mains[i]).css({'display':'none'})
            }
            console.log(elemento.val().toLowerCase())
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

  <!---------------------------- Conteúdo principal ------------------------------->
  <div class="paiMain">
    <div class="main">
      <!---------------------------- Buscar ------------------------------->

      <div class="containerMensagemUser">
        <input onkeyup="pesquisaForuns($('#mensagemUser'))" type="text" class="form-control" id="mensagemUser" aria-describedby="mensagem"
          placeholder="Procure por um fórum" />
       
      </div>
     

    <!---------------------------- Fóruns ------------------------------->

    @foreach($foruns as $forum)
    <div class="forumMain" id="forumId{{$forum->id}}" data-imagem="{{'forum/' . $forum->imagem_forum}}">
    <img id="forumId{{$forum->id}}-imagem" style="display:none;" src="{{'forum/' . $forum->imagem_forum}}"/>
    <a class="linkForum" href="{{route('forum.forum', $forum) }}">
        <h3 class="tituloForumMain">{{$forum->nome}}</h3>
        <div class="conteudoForum">
        {{$forum->descricao}}
        </div>
        </a>
    </div>
    @endforeach
     
    
    
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>

@endsection