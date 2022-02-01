<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\forum;
use App\Models\foruns_acessados;
use App\Models\foruns_favoritos;
use App\Models\mensagens;
use App\Models\novidades;

use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ForumController extends Controller
{
    public function retornaForuns()
    {
        $user = Auth::user();
        
        $favoritos = 
        DB::table('foruns_favoritos')
        ->orderBy('foruns_favoritos.id', 'desc')
        ->join('forum', 'foruns_favoritos.id_forum', '=', 'forum.id')
        ->where('id_usuario', $user->id)
        ->get();
        
        $recentes = 
        DB::table('foruns_acessados')
        ->orderBy('foruns_acessados.id', 'desc')
        ->join('forum', 'foruns_acessados.id_forum', '=', 'forum.id')
        ->where('id_usuario', $user->id)
        ->limit(3)
        ->get();

        $novosForuns = forum::orderBy('id', 'desc')->limit(5)->get();
        return array($favoritos, $recentes, $novosForuns);
    }
    
    public function index()
    {
        //----------- Chama dados da Model -----------
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
    public function forum(forum $forumAtual)
    {
        
        $mensagens = 
        DB::table('mensagens')
        ->orderBy('mensagens.id', 'asc')
        ->join('usuarios', 'mensagens.id_usuario', '=', 'usuarios.id')
        ->where('mensagens.id_forum', $forumAtual->id)
        ->get();


        list($favoritos, $recentes, $novosForuns) =  $this->retornaForuns();

        return view('forum.forum', [
            'favoritos' => $favoritos,
            'novosForuns' => $novosForuns,
            'recentes' => $recentes,
            'mensagens' => $mensagens,
            'pagina' => 'forum'
        ]);
    }
    public function novidades()
    {
        //----------- Chama dados da Model -----------
       
        return view('forum.novidades', ['pagina' => 'forum']);
    }
    public function novoForum()
    {
        //----------- Chama dados da Model -----------
        list($favoritos, $recentes, $novosForuns) =  $this->retornaForuns();

        return view('forum.novoForum', [
            'favoritos' => $favoritos,
            'novosForuns' => $novosForuns,
            'recentes' => $recentes,
            'pagina' => 'forum'
        ]);
    }
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
}
