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
  min-height:100vh;
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
  height: 1px;
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

.fileMensagem{
  display:none;
}
.containerNomeArquivo{
  display:flex;
  align-items:center;
  position:absolute;
  left:0px;
  top:-40px;
  color:black;
  width:100%;
}
.iconeImagemMensagem{
  width:20px !important;
  margin-right:10px;
  opacity:0.6;
}
.nomeArquivo{
  display:flex;
  align-items:center;
  background-color:#65c0be;
  border-radius:200px;
  color:white;
  padding:5px;
  padding-left:10px;
  transition:0.5s;
  max-width: 50%;
}
.nomeArquivo>span{
  max-width:300px;
  overflow:hidden;
  text-overflow:ellipsis;
  white-space:nowrap;
}
.iconeExcluirImagem{
  width:20px !important;
  margin-left:10px;
  opacity:0.6;
  filter:brightness(100%) invert(100%);
  cursor:pointer;
}
/*# sourceMappingURL=styleForum.css.map */
</style>
<script>
  function executaSelecaoImagem(){
    $('#fileMensagem').click()
  }

  function mostraValorImagem(){
    var valorImagem = $('#fileMensagem').val().split('\\')[$('#fileMensagem').val().split('\\').length - 1];
    $('.containerMensagemUser').prepend(`
      <div class="containerNomeArquivo">
        <div class="nomeArquivo">
          <img class="iconeImagemMensagem" src="{{asset('Imagens/clip.svg')}}" />
          <span>${valorImagem}</span>
          <img onclick="limpaImagem()" class="iconeExcluirImagem" src="{{asset('Imagens/excluir.svg')}}" />
        </div>
      </div>
      
     `)
  }
  function limpaImagem(){
    $('#fileMensagem').val('')
    $('.containerNomeArquivo').remove()
  }
  function validacaoMensagem(e){
    if($('#mensagemUser').val() === '' && $('#fileMensagem').val() === ''){
        e.preventDefault();
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
      <a class="linkForum linkHeader"href="{{route('forum.novidades') }}"><div>
       Novidades
      </div>
    </a>
      <div>
        Perfil
      </div>
      <a class="linkForum linkHeader" href="{{route('forum.index') }}"><div style="color: #00beba">
       Fóruns
      </div>
      </a>
    </div>
    <div class="opcoesUser">
    <a href="{{route('forum.favoritarForum', $forum) }}"><img src="@if (!$favorito->isEmpty()) ../../Imagens/coracaoPreenchido.svg @else ../../Imagens/coracao.svg @endif "/></a>
      
      <a href="{{route('forum.novoForum') }}"><img src="{{asset('Imagens/plus.svg')}}" /></a>
      <img class="iconeUserHeader" src="{{asset('usuario/' . Auth::user()->image)}}" />
    </div>
  </div>


    <!---------------------------- Menu Esquerda ------------------------------->
    <div class="fundoNavEsquerda">
  <div class="navEsquerda">
  @if (!$favoritos->isEmpty())
    <div class="navEsquerdaCategoria">
      Favoritos
    </div>
    <div class="filhosnavEsquerda">
      @foreach($favoritos as $favorito)
      <a class="linkForum" href="{{route('forum.forum', $favorito->id_forum) }}">
        <div class="forumNavEsquerda"> <img src="{{asset('Imagens/cat.svg')}}" />
          <div>Fórum teste {{$favorito->nome}}</div>
        </div>
      </a>
      @endforeach
    </div>
    @endif


    @if (!$recentes->isEmpty())
    <div class="navEsquerdaCategoria">
      Recentes
    </div>
    <div class="filhosnavEsquerda">
      @foreach($recentes as $recente)
      <div class="forumNavEsquerda"> <img src="{{asset('Imagens/cat.svg')}}" />
        <div>Fórum teste {{$recente->nome}}</div>
      </div>
      @endforeach
    </div>
    @endif


    @if (!$novosForuns->isEmpty())
    <div class="navEsquerdaCategoria">
      Novos Fóruns
    </div>
    <div class="filhosnavEsquerda">
      @foreach($novosForuns as $novoForum)
      <a class="linkForum" href="{{route('forum.forum', $novoForum) }}">
        <div class="forumNavEsquerda"> <img src="{{asset('Imagens/cat.svg')}}" />
          <div>Fórum teste {{$novoForum->nome}}</div>
        </div>
      </a>
      @endforeach
    </div>
    @endif


  </div>
  </div>
   <!---------------------------- Conteúdo Principal ------------------------------->

   <div class = "paiMain">
    <div class = "main">

      @foreach($mensagens as $mensagem)
      @if($mensagem->imagem == NULL)
          <div class = "usuario">
              <img src="{{asset('usuario/'. $mensagem->image)}}"/>
              <div class = "nomeUsuario">{{$mensagem->name}}</div>
          </div>
          <div class = "mensagemForum">
            <div class="textoForum">
              {{$mensagem->mensagem}}
            </div>
            <div class = "detalhesMensagem">
              <div class = "horarioEnvio">{{date_format(date_create($mensagem->data_envio),"d/m/Y - H:i:s")}}</div>
              <div class = "likesPai">
                <a href="{{route('forum.likeComentario', $mensagem->id)}}"><img class = "like" src = "{{asset('Imagens/like.svg')}}"/></a>
                <div class ="numeroLikes">{{$mensagem->numero_likes}}</div>
              </div>
            </div>
          </div>
          <div class="divisoria"></div>
      
      @elseif($mensagem->mensagem == NULL)
      <div class = "usuario">
              <img src="{{asset('usuario/'. $mensagem->image)}}"/>
              <div class = "nomeUsuario">{{$mensagem->name}}</div>
          </div>
          <div class="conteudoImagem">
            <img class = "imagemMensagem" src="{{asset('mensagens/'. $mensagem->imagem)}}"/>
            <div class = "detalhesMensagem">
              <div class = "horarioEnvio">{{date_format(date_create($mensagem->data_envio),"d/m/Y - H:i:s")}}</div>
              <div class = "likesPai">
              <a href="{{route('forum.likeComentario', $mensagem->id)}}"><img class = "like" src = "{{asset('Imagens/like.svg')}}"/></a>
                <div class ="numeroLikes">{{$mensagem->numero_likes}}</div>
              </div>
            </div>
        </div>
          <div class="divisoria"></div>
      @else
      <div class = "usuario">
              <img src="{{asset('usuario/'. $mensagem->image)}}"/>
              <div class = "nomeUsuario">{{$mensagem->name}}</div>
          </div>
          <div class="textoForum">
              {{$mensagem->mensagem}}
          </div>
          <div class="conteudoImagem">
            <img class = "imagemMensagem" src="{{asset('mensagens/'. $mensagem->imagem)}}"/>
            <div class = "detalhesMensagem">
              <div class = "horarioEnvio">{{date_format(date_create($mensagem->data_envio),"d/m/Y - H:i:s")}}</div>
              <div class = "likesPai">
              <a href="{{route('forum.likeComentario', $mensagem->id)}}"><img class = "like" src = "{{asset('Imagens/like.svg')}}"/></a>
                <div class ="numeroLikes">{{$mensagem->numero_likes}}</div>
              </div>
            </div>
        </div>
          <div class="divisoria"></div>
      @endif
      @endforeach

        <!---------------------------- Escrever mensagem ------------------------------->
        <form method="post" onsubmit="validacaoMensagem(event)" action="{{route('forum.mensagemGravar')}}" enctype="multipart/form-data">
          @csrf
            <div class = "containerMensagemUser">
              <input type="hidden" name="idForum" id="idForum" value="{{$forum}}"/>
              <input type="text" class="form-control" id="mensagemUser" aria-describedby="mensagem" name="mensagem" placeholder="Digite uma mensagem"/>
              <input onchange="mostraValorImagem()" class="fileMensagem" name='imagem' type="file" id="fileMensagem" aria-label="File browser example">
              <img style="cursor:pointer;" onclick="executaSelecaoImagem()" id="imagemFileMensagem" src = "{{asset('Imagens/clip.svg')}}"/>
              <button type = "submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection