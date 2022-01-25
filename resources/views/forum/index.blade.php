@extends('templates.base')
@section('title', 'Inserir Produto')
@section('h1', 'Inserir Produto')

@section('content')

  <!---------------------------- Header ------------------------------->

  <div class="header">
    <div class="containerLogo">
      <img class="logo" src="../../Imagens/cat.svg" />
      <span class="tituloLogo"></span>
    </div>
    <div class="opcoesHeader">
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
    <div class="opcoesUser">
      <img src="../../Imagens/plus.svg" />
      <img class="iconeUserHeader" src="../../Imagens/gato.jpg" />
    </div>
  </div>

  <!---------------------------- Menu Esquerda ------------------------------->

  <div class="navEsquerda">
    <div class="navEsquerdaCategoria">
      Favoritos
    </div>
    <div class="filhosnavEsquerda">
      <div class="forumNavEsquerda"> <img src="../../Imagens/cat.svg" />
        <div>Fórum teste</div>
      </div>
      <div class="forumNavEsquerda"> <img src="../../Imagens/cat.svg" />
        <div>Fórum teste</div>
      </div>
    </div>
    <div class="navEsquerdaCategoria">
      Recentes
    </div>
    <div class="filhosnavEsquerda">
      <div class="forumNavEsquerda"> <img src="../../Imagens/cat.svg" />
        <div>Fórum teste</div>
      </div>
      <div class="forumNavEsquerda"> <img src="../../Imagens/cat.svg" />
        <div>Fórum teste</div>
      </div>
    </div>
    <div class="navEsquerdaCategoria">
      Mais Acessados
    </div>
    <div class="filhosnavEsquerda">
      <div class="forumNavEsquerda"> <img src="../../Imagens/cat.svg" />
        <div>Fórum teste</div>
      </div>
      <div class="forumNavEsquerda"> <img src="../../Imagens/cat.svg" />
        <div>Fórum teste</div>
      </div>
    </div>
  </div>

  <!---------------------------- Conteúdo principal ------------------------------->
  <div class="paiMain">
    <div class="main">
      <!---------------------------- Buscar ------------------------------->

      <div class="containerMensagemUser">
        <input type="text" class="form-control" id="mensagemUser" aria-describedby="mensagem"
          placeholder="Procure por um fórum" />
        <button class="btn btn-primary">Buscar</button>
      </div>
      <div class="forumMain">

        <!---------------------------- Fóruns ------------------------------->

        <h3 class="tituloForumMain"> Um título de teste</h3>
        <div class="conteudoForum">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
          standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
          make a type specimen book. It has survived not only five centuries, but also the leap into electronic
          typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
          sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
          PageMaker including versions of Lorem Ipsum.
        </div>
      </div>
      <div class="forumMain">
        <h3 class="tituloForumMain"> Um título de teste</h3>
        <div class="conteudoForum">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
          standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
          make a type specimen book. It has survived not only five centuries, but also the leap into electronic
          typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
          sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
          PageMaker including versions of Lorem Ipsum.
        </div>
      </div>
      <div class="forumMain">
        <h3 class="tituloForumMain"> Um título de teste</h3>
        <div class="conteudoForum">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
          standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
          make a type specimen book. It has survived not only five centuries, but also the leap into electronic
          typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
          sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
          PageMaker including versions of Lorem Ipsum.
        </div>
      </div>
      <div class="forumMain">
        <h3 class="tituloForumMain"> Um título de teste</h3>
        <div class="conteudoForum">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
          standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
          make a type specimen book. It has survived not only five centuries, but also the leap into electronic
          typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
          sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
          PageMaker including versions of Lorem Ipsum.
        </div>
      </div>
      <div class="forumMain">
        <h3 class="tituloForumMain"> Um título de teste</h3>
        <div class="conteudoForum">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
          standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
          make a type specimen book. It has survived not only five centuries, but also the leap into electronic
          typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
          sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
          PageMaker including versions of Lorem Ipsum.
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>

@endsection