<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\forum;
use App\Models\foruns_acessados;
use App\Models\foruns_favoritos;
use App\Models\mensagens;
use App\Models\novidades;
use App\Models\likes;

use App\Models\Usuario;

use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

//======== Classe usada como objetos de array para mensagens =======
class mensagensTotal
{
    public $id;
    public $id_usuario;
    public $id_forum;
    public $id_usuario_resposta;
    public $mensagem;
    public $imagem;
    public $data_envio;
    public $likes;
    public $name;
    public $username;
    public $email;
    public $description;
    public $image;
    public $id_like;
    public $usuarioResposta;
}

class ForumController extends Controller
{
    //======== Funcao que retorna fóruns para menu Lateral =======
    public function retornaForuns()
    {
        $user = Auth::user();

        //======== seleciona favoritos =======
        $favoritos = 
        DB::table('foruns_favoritos')
        ->orderBy('foruns_favoritos.id', 'desc')
        ->join('forum', 'foruns_favoritos.id_forum', '=', 'forum.id')
        ->where('id_usuario', $user->id)
        ->get();

        //======== seleciona recentes =======
        $recentes = 
        DB::table('foruns_acessados')
        ->orderBy('foruns_acessados.id', 'desc')
        ->join('forum', 'foruns_acessados.id_forum', '=', 'forum.id')
        ->where('id_usuario', $user->id)
        ->limit(3)
        ->get();

        //======== seleciona fóruns recentemente criados =======
        $novosForuns = forum::orderBy('id', 'desc')->limit(5)->get();
        return array($favoritos, $recentes, $novosForuns);
    }
    
     //======== Função que executa update de dados em fórum =======
     public function FunctionEditaForum($id, $tituloParametro, $parametro)
     {
         DB::table('forum')
         ->where('id', $id)
         ->limit(1)
         ->update(array($tituloParametro => $parametro));
     }

    //======== Rota de edição de usuários =======
    public function editaUsuario($id, $tituloParametro, $parametro)
    {
        DB::table('usuarios')
        ->where('id', $id)
        ->limit(1)
        ->update(array($tituloParametro => $parametro));
    }

    //======== Rota inicial de fóruns =======
    public function index()
    {
        $user = Auth::user();
        $foruns = forum::orderBy('id', 'desc')->get();

        list($favoritos, $recentes, $novosForuns) =  $this->retornaForuns();

        return view('forum.index', [
            'favoritos' => $favoritos,
            'novosForuns' => $novosForuns,
            'recentes' => $recentes,
            'foruns' => $foruns,'pagina' => 'forum'
        ]);
    }
    //======== Rota de fórum específico =======
    public function forum($forum)
    {
        //======== Seleciona dados do fórum do banco =======
        $forumAtualAdmin  = 
        DB::table('forum')
        ->where('id', $forum)
        ->where('id_criador', Auth::user()->id)
        ->get();
        
        //======== Seleciona mensagens do banco =======
        $mensagens = 
        DB::table('mensagens')
        ->orderBy('mensagens.id', 'asc')
        ->leftJoin('usuarios', 'mensagens.id_usuario', '=', 'usuarios.id')
        ->leftJoin('likes', function($join)
        {
            $join->on('mensagens.id', '=', 'likes.id_mensagem')
            ->where('likes.id_usuario', '=', Auth::user()->id);
        })
        ->select('likes.id as id_like', 'mensagens.id as mensagem_id', 'mensagens.*', 'usuarios.*')
        ->where('mensagens.id_forum', $forum)
        ->get();
        
        //======== Seleciona se é favorito do banco =======
        $favorito = 
        DB::table('foruns_favoritos')
        ->where('id_forum', $forum)
        ->where('id_usuario', Auth::user()->id)
        ->get();

        $mensagensTotal = array();
        $contador = 0;
        //======== Faz foreach de mensagens jogando dados para uma array de objetos =======
        foreach($mensagens as $mensagem){

            $likes = 
            DB::table('likes')
            ->where('likes.id_mensagem', $mensagem->mensagem_id)
            ->get();

           
            $mensagemAtual = new mensagensTotal();
            $mensagemAtual->id_usuario_resposta = $mensagem->id_usuario_resposta;
            $mensagemAtual->id = $mensagem->mensagem_id;
            $mensagemAtual->id_usuario = $mensagem->id_usuario;
            $mensagemAtual->id_forum = $mensagem->id_forum;
            $mensagemAtual->mensagem = $mensagem->mensagem;
            $mensagemAtual->imagem = $mensagem->imagem;
            $mensagemAtual->data_envio = $mensagem->data_envio;
            $mensagemAtual->likes = count($likes);

            $mensagemAtual->name = $mensagem->name;
            $mensagemAtual->username = $mensagem->username;
            $mensagemAtual->email = $mensagem->email;
            $mensagemAtual->description = $mensagem->description;
            $mensagemAtual->image = $mensagem->image;
            $mensagemAtual->id_like = $mensagem->id_like;

            //======== Se id_resposta não for nulo retornar nome do usuário da resposta =======
            if($mensagem->id_usuario_resposta !== ''){
                $mensagemResposta = 
                DB::table('mensagens')
                ->where('mensagens.id', $mensagem->id_usuario_resposta)
                ->join('usuarios', 'usuarios.id', '=', 'mensagens.id_usuario')
                ->get();
                }
    
                if(!$mensagemResposta->isEmpty()){
                    $mensagemAtual->usuarioResposta = $mensagemResposta[0]->name;
                }
    
            //======== Joga dados na array =======
            array_push($mensagensTotal, $mensagemAtual);
            $likes= '';
            $mensagemResposta = '';
            $contador = $contador + 1;
        }

        //======== Procura fóruns acessados =======
        $foruns_acessados_valores = 
        DB::table('foruns_acessados')
        ->where('id_forum', $forum)
        ->where('id_usuario', Auth::user()->id)
        ->get();

        if(!$foruns_acessados_valores->isEmpty()){
            //======== Apaga esse fórum de acessados =======
            DB::table('foruns_acessados')
            ->where('id_forum', $forum)
            ->where('id_usuario', Auth::user()->id)
            ->delete();
        }

        //======== Adiciona esse fórum aos recentes =======
        $foruns_acessados = new foruns_acessados();
        $foruns_acessados->id_usuario = Auth::user()->id;
        $foruns_acessados->id_forum = $forum;
        $foruns_acessados->save();

        list($favoritos, $recentes, $novosForuns) =  $this->retornaForuns();

        //======== Verifica se é administrador do fórum =======
        if($forumAtualAdmin->isEmpty()){
            $admin = 0;
        }else{
            $admin = 1;
        }
        return view('forum.forum', [
            'forum' => $forum,
            'favoritos' => $favoritos,
            'favorito' => $favorito,
            'novosForuns' => $novosForuns,
            'recentes' => $recentes,
            'mensagens' => $mensagensTotal,
            'pagina' => 'forum',
            'admin' => $admin
        ]);
    }

    //======== Grava dados editados de fórum =======
    public function editarForumGravar(Request $form)
    {
        $forum_selecionado = 
        DB::table('forum')
        ->where('id', $form->id_forum)
        ->where('id_criador', Auth::user()->id)
        ->get();
        //======== Verifica dados que estão vazios =======
        if(!$forum_selecionado->isEmpty()){
            if($form->file('imagem') != ''){
                $this->FunctionEditaForum($form->id_forum, 'imagem_forum', $form->file('imagem')->store('', 'imagensForum'));
            }
            if($form->filled('nome')){
                $this->FunctionEditaForum($form->id_forum, 'nome',  $form->nome);
            }
            if($form->filled('descricao')){
                $this->FunctionEditaForum($form->id_forum, 'descricao',  $form->descricao);
            }
            return redirect()->route('forum.forum', ['forum' => $form->id_forum]);
        }else{
            return redirect()->route('forum.index');
        }
    }
    //======== Rota de edição de fórum =======
    public function editarForum($forum)
    {
        $forum_selecionado = 
        DB::table('forum')
        ->where('id', $forum)
        ->where('id_criador', Auth::user()->id)
        ->get();

        list($favoritos, $recentes, $novosForuns) =  $this->retornaForuns();

        return view('forum.editarForum', [
            'forum' => $forum,
            'favoritos' => $favoritos,
            'novosForuns' => $novosForuns,
            'recentes' => $recentes,
            'pagina' => 'forum',
            'forumAtual' => $forum_selecionado[0]
        ]);
    }
    //======== Adiciona likes para mensagens =======
    public function likeComentario($mensagem, $forum)
    {
        
        $likesTable = 
            DB::table('likes')
            ->where('likes.id_mensagem', $mensagem)
            ->where('likes.id_usuario', Auth::user()->id)
            ->get();

        if($likesTable->isEmpty()){
            $likes = new likes();
            $likes->id_usuario = Auth::user()->id;
            $likes->id_mensagem = $mensagem;
            $likes->save();
        }
        else{
            DB::table('likes')
            ->where('likes.id_mensagem', $mensagem)
            ->where('likes.id_usuario', Auth::user()->id)
            ->delete();
        }
        return redirect()->route('forum.forum', ['forum' => $forum]);
       
    }
    //======== Rota para cadastro de fóruns =======
    public function novoForum()
    {
        list($favoritos, $recentes, $novosForuns) =  $this->retornaForuns();

        return view('forum.novoForum', [
            'favoritos' => $favoritos,
            'novosForuns' => $novosForuns,
            'recentes' => $recentes,
            'pagina' => 'forum'
        ]);
    }
    //======== Grava mensagens =======
    public function mensagemGravar(Request $form)
    {
        $mensagens = new mensagens();
        //======== Verifica se há dados nulos =======
        if(!$form->imagem == ''){
             $imagem = $form->file('imagem')->store('', 'imagensMensagens');
             $mensagens->imagem = $imagem;
        }
        if(!$form->mensagem == ''){
            $mensagens->mensagem = $form->mensagem;
        }
        if(!$form->id_resposta == ''){
            $mensagens->id_usuario_resposta = $form->id_resposta;
        }
        $mensagens->id_usuario = Auth::user()->id;
        $mensagens->id_forum = $form->idForum;
        $mensagens->numero_likes = 0;

        $mensagens->save();

        return redirect()->route('forum.forum', ['forum' => $form->idForum]);
    }
    //======== Rota para cadastro de fóruns favoritos =======
    public function favoritarForum($forum, foruns_favoritos $foruns_favoritos)
    {
        $favorito = 
        DB::table('foruns_favoritos')
        ->where('id_forum', $forum)
        ->where('id_usuario', Auth::user()->id)
        ->get();
        if($favorito->isEmpty()){
            $foruns_favoritos->id_forum = $forum;
            $foruns_favoritos->id_usuario = Auth::user()->id;

            $foruns_favoritos->save();
        }else{
            DB::table('foruns_favoritos')
            ->where('id_forum', $forum)
            ->where('id_usuario', Auth::user()->id)->delete();
        }

        return redirect()->route('forum.forum', ['forum' => $forum]);
    }
    //======== Rota para gravação de fórum no banco =======
    public function gravarForum(Request $form)
    {
        $forum = new forum();
        $imagem = $form->file('imagem')->store('', 'imagensForum');
        $forum->nome = $form->nome;
        $forum->descricao = $form->descricao;
        $forum->id_criador = Auth::user()->id;
        $forum->imagem_forum = $imagem;


        $forum->save();

        return redirect()->route('forum.index');
    }
    //======== Exclusão de fórum do banco (apenas se for admin do fórum) =======
    public function exclurForum($forum)
    {
        $forumAtual =
        DB::table('forum')
        ->where('id', $forum)
        ->where('id_criador', Auth::user()->id)
        ->get();

        if(!$forumAtual->isEmpty()){

            DB::table('forum')
            ->where('id', $forum)
            ->delete();

            DB::table('foruns_favoritos')
            ->where('id_forum', $forum)
            ->delete();

            DB::table('foruns_acessados')
            ->where('id_forum', $forum)
            ->delete();

            $mensagens = 
            DB::table('mensagens')
            ->where('id_forum', $forum)
            ->get();

            foreach($mensagens as $mensagem){
                DB::table('likes')
                ->where('id_mensagem', $mensagem->id)
                ->delete();
            }

            DB::table('mensagens')
                ->where('id_forum', $forum)
                ->delete();
        }

        return redirect()->route('forum.index');
    }
    //======== Rota para edição de usuário =======
    public function editarUsuarioForum()
    {
        //----------- Chama dados da Model -----------
        list($favoritos, $recentes, $novosForuns) =  $this->retornaForuns();

        return view('forum.editarUsuario', [
            'favoritos' => $favoritos,
            'novosForuns' => $novosForuns,
            'recentes' => $recentes,
            'pagina' => 'forum'
        ]);
    }
    //======== Update de dados de fórum no banco de dados =======
    public function usuarioForumUpdate(Request $form, Usuario $usuario)
    {
        //----------- Chama dados da Model -----------
        if($form->file('imagem') != ''){
             $this->editaUsuario(Auth::user()->id, 'image', $form->file('imagem')->store('', 'imagensUsuario'));
        }
        if($form->filled('name')){
             $this->editaUsuario(Auth::user()->id, 'name',  $form->name);
        }
        if($form->filled('email')){
             $this->editaUsuario(Auth::user()->id, 'email',  $form->email);
        }
        if($form->filled('username')){
             $this->editaUsuario(Auth::user()->id, 'username',  $form->username);
        }
        if($form->filled('password')){
            
             $this->editaUsuario(Auth::user()->id, 'password',  Hash::make($form->password));
        }
        if($form->filled('description')){
             $this->editaUsuario(Auth::user()->id, 'description',  $form->description);
        }

        return redirect()->route('forum.editarUsuario');
    }
}
