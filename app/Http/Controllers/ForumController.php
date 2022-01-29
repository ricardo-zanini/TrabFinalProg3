<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        //----------- Chama dados da Model -----------
       
        return view('forum.index', ['pagina' => 'galeria']);
    }
    public function forum()
    {
        //----------- Chama dados da Model -----------
       
        return view('forum.forum', ['pagina' => 'galeria']);
    }
    public function novidades()
    {
        //----------- Chama dados da Model -----------
       
        return view('forum.novidades', ['pagina' => 'galeria']);
    }
    public function novoForum()
    {
        //----------- Chama dados da Model -----------
       
        return view('forum.novoForum', ['pagina' => 'galeria']);
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
