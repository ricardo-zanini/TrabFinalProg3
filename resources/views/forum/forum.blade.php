@extends('templates.base')
@section('title', 'Inserir Produto')
@section('h1', 'Inserir Produto')
@push('styles')
<style>
body{
  min-height: 100vh;
  min-width: 100vw;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  color: white !important;
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
  padding-top: 70px;
  background-color: #f7f7f7;
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
  border-bottom: solid 1px #037B79;
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
  width: 25px;
  height: 25px;
  margin-right: 5px;
  border-radius: 2px;
  background-color: #eeeeee;
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
  width: 30px;
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
  margin-top: 20vh;
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

.conteudoImagem .imagemMensagem {
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
}

.divisoria {
  height: 3px;
  padding: 0.5px;
  background-color: #00000036;
  width: calc(100% - 20px);
  margin: 10px 0px;
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
  bottom: 10px;
  left: 50%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  width: calc(100% - 30px);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  gap: 10px;
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

.textoForum {
  text-align: justify;
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
  width: calc(100% - 30px);
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

.numeroLikes {
  color: #1fa8a6;
  margin-right: 10px;
  display: inline-block;
}

.likesPai {
  display: inline-block;
  margin: 0px 10px;
  color: #363636;
  font-size: 0.9rem;
}

.detalhesMensagem {
  width: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.like {
  width: 20px;
  background-color: transparent;
  border: none;
  border-radius: 0px;
  margin: 0;
  margin-right: 10px;
}

.iconeUserHeader {
  width: 50px !important;
  height: 50px;
  border-radius: 50%;
  border: solid 2px white;
}

.mensagemResposta {
  position: relative;
  margin-left: 25px;
  margin-bottom: 10px;
}

.mensagemResposta:before {
  content: "";
  position: absolute;
  left: -25px;
  width: 20px;
  top: 0;
  bottom: 0;
  background-color: #1fa8a66c;
}
/*# sourceMappingURL=styleForum.css.map */
</style>
@endpush

@section('content')
    
    <!---------------------------- Header ------------------------------->
    
    <div class = "header">
        <div class = "containerLogo">
           <img class = "logo" src="{{asset('Imagens/cat.svg')}}"/>
           <span class = "tituloLogo"></span>
        </div>
        <div class = "opcoesHeader">
           <div>
             Novidades
           </div>
           <div>
            Perfil
          </div>
          <div>
            Fóruns
          </div>
        </div>
        <div class = "opcoesUser">
          <img src="{{asset('Imagens/star.svg')}}"/>
          <img src="{{asset('Imagens/plus.svg')}}"/>
          <img class="iconeUserHeader" src="{{asset('Imagens/gato.jpg')}}"/>
        </div>
    </div>

    <!---------------------------- Menu Esquerda ------------------------------->

   <div class = "navEsquerda">
       <div class = "navEsquerdaCategoria">
          Favoritos
       </div>
       <div class = "filhosnavEsquerda">
        <div class="forumNavEsquerda"> <img src="{{asset('Imagens/cat.svg')}}"/> <div>Fórum teste</div></div>
        <div class="forumNavEsquerda"> <img src="{{asset('Imagens/cat.svg')}}"/> <div>Fórum teste</div></div>
      </div>
       <div class = "navEsquerdaCategoria">
          Recentes
       </div>
       <div class = "filhosnavEsquerda">
          <div class="forumNavEsquerda"> <img src="{{asset('Imagens/cat.svg')}}"/> <div>Fórum teste</div></div>
          <div class="forumNavEsquerda"> <img src="{{asset('Imagens/cat.svg')}}"/> <div>Fórum teste</div></div>
       </div>
       <div class = "navEsquerdaCategoria">
          Mais Acessados
       </div>
       <div class = "filhosnavEsquerda">
        <div class="forumNavEsquerda"> <img src="{{asset('Imagens/cat.svg')}}"/> <div>Fórum teste</div></div>
        <div class="forumNavEsquerda"> <img src="{{asset('Imagens/cat.svg')}}"/> <div>Fórum teste</div></div>
      </div>
   </div>

   <!---------------------------- Conteúdo Principal ------------------------------->

   <div class = "paiMain">
    <div class = "main">

      <!---------------------------- Mensagem ------------------------------->
        <div class = "usuario">
            <img src="{{asset('Imagens/cat.svg')}}"/>
            <div class = "nomeUsuario">Meu Nome De usuário</div>
        </div>
        <div class="conteudoImagem">
            <img class = "imagemMensagem" src="{{asset('Imagens/gato.jpg')}}"/>
            <div class = "detalhesMensagem">
              <div class = "horarioEnvio">Hoje - 11:23</div>
              <div class = "likesPai"><img class = "like" src = "{{asset('Imagens/like.svg')}}"/><div class ="numeroLikes">99</div></div>
            </div>
        </div>

        <div class="divisoria"></div>

        <!---------------------------- Mensagem ------------------------------->

        <div class = "usuario">
            <img src="{{asset('Imagens/cat.svg')}}"/>
            <div class = "nomeUsuario">Meu Nome De usuário</div>
        </div>
        <div class="conteudoImagem">
            <img class = "imagemMensagem" src="{{asset('Imagens/gato.jpg')}}"/>
            <div class = "detalhesMensagem">
              <div class = "horarioEnvio">Hoje - 11:23</div>
              <div class = "likesPai"><img class = "like" src = "{{asset('Imagens/like.svg')}}"/><div class ="numeroLikes">99</div></div>
            </div>
        </div>

        <div class="divisoria"></div>

        <!---------------------------- Mensagem ------------------------------->

        <div class = "usuario">
            <img src="{{asset('Imagens/cat.svg')}}"/>
            <div class = "nomeUsuario">Meu Nome De usuário</div>
        </div>
        <div class="conteudoImagem">
            <img class = "imagemMensagem" src="{{asset('Imagens/gato.jpg')}}"/>
            <div class = "detalhesMensagem">
              <div class = "horarioEnvio">Hoje - 11:23</div>
              <div class = "likesPai"><img class = "like" src = "{{asset('Imagens/like.svg')}}"/><div class ="numeroLikes">99</div></div>
            </div>
        </div>
        <div class="divisoria"></div>

        <!---------------------------- Mensagem ------------------------------->

        <div class = "usuario">
            <img src="{{asset('Imagens/cat.svg')}}"/>
            <div class = "nomeUsuario">Meu Nome De usuário</div>
        </div>
        <div class = "mensagemForum">
        <div class="textoForum">
          <div class = "mensagemResposta">Resposta para <b>Usuario Teste</b></div>
            Meu nome é Yoshikage Kira. Tenho 33 anos. Minha casa fica na parte nordeste de Morioh, onde todas as casas estão, e eu não sou casado. Eu trabalho como funcionário das lojas de departamentos Kame Yu e chego em casa todos os dias às oito da noite, no máximo. Eu não fumo, mas ocasionalmente bebo. Estou na cama às 23 horas e me certifico de ter oito horas de sono, não importa o que aconteça. Depois de tomar um copo de leite morno e fazer cerca de vinte minutos de alongamentos antes de ir para a cama, geralmente não tenho problemas para dormir até de manhã. Assim como um bebê, eu acordo sem nenhum cansaço ou estresse pela manhã. Foi-me dito que não houve problemas no meu último check-up. Estou tentando explicar que sou uma pessoa que deseja viver uma vida muito tranquila. Eu cuido para não me incomodar com inimigos, como ganhar e perder, isso me faria perder o sono à noite. É assim que eu lido com a sociedade e sei que é isso que me traz felicidade. Embora, se eu fosse lutar, não perderia para ninguém.
        </div>
          <div class = "detalhesMensagem">
            <div class = "horarioEnvio">Hoje - 11:23</div>
            <div class = "likesPai"><img class = "like" src = "{{asset('Imagens/like.svg')}}"/><div class ="numeroLikes">99</div></div>
          </div>
        </div>
        <div class="divisoria"></div>

        <!---------------------------- Mensagem ------------------------------->

        <div class = "usuario">
          <img src="{{asset('Imagens/cat.svg')}}"/>
          <div class = "nomeUsuario">Meu Nome De usuário</div>
      </div>
      <div class = "mensagemForum">
      <div class="textoForum">
          Meu nome é Yoshikage Kira. Tenho 33 anos. Minha casa fica na parte nordeste de Morioh, onde todas as casas estão, e eu não sou casado. Eu trabalho como funcionário das lojas de departamentos Kame Yu e chego em casa todos os dias às oito da noite, no máximo. Eu não fumo, mas ocasionalmente bebo. Estou na cama às 23 horas e me certifico de ter oito horas de sono, não importa o que aconteça. Depois de tomar um copo de leite morno e fazer cerca de vinte minutos de alongamentos antes de ir para a cama, geralmente não tenho problemas para dormir até de manhã. Assim como um bebê, eu acordo sem nenhum cansaço ou estresse pela manhã. Foi-me dito que não houve problemas no meu último check-up. Estou tentando explicar que sou uma pessoa que deseja viver uma vida muito tranquila. Eu cuido para não me incomodar com inimigos, como ganhar e perder, isso me faria perder o sono à noite. É assim que eu lido com a sociedade e sei que é isso que me traz felicidade. Embora, se eu fosse lutar, não perderia para ninguém.
      </div>
        <div class = "detalhesMensagem">
          <div class = "horarioEnvio">Hoje - 11:23</div>
          <div class = "likesPai"><img class = "like" src = "{{asset('Imagens/like.svg')}}"/><div class ="numeroLikes">99</div></div>
        </div>
      </div>
      <div class="divisoria"></div>

        <!---------------------------- Escrever mensagem ------------------------------->

        <div class = "containerMensagemUser">
          <input type="text" class="form-control" id="mensagemUser" aria-describedby="mensagem" placeholder="Digite uma mensagem"/>
          <img src = "{{asset('Imagens/clip.svg')}}"/>
          <button class="btn btn-primary">Enviar</button>
        </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection