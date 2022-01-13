<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriaController extends Controller
{
    //------------ Controller de apresentação de Posts ---------------
    public function index()
    {
        //----------- Chama dados da Model -----------
        $imagens = Galeria::orderBy('id', 'desc')->get(); //Comeca por posts com id maior, ou seja, mais recentes
        return view('galeria.index', ['imagens' => $imagens, 'pagina' => 'galeria']);
    }
    //------------- Controller para cadasto dos dados pelo usuário -----------
    public function inserir()
    {
        return view('galeria.inserir', ['pagina' => 'galeria']);
    }
    //----------- Controller para gravação dos dados no banco -------------
    public function gravar(Request $form){
        $data = new Galeria();
        //------------ Gera o arquivo armazenado na pasta 'imagensGaleria' --------------
        $imagem = $form->file('imagem')->store('', 'imagensGaleria');
        $data->titulo = $form->titulo;
        $data->descricao = $form->descricao;
        $data->imagem = $imagem;
        //--------------- Salva dados no Banco -------------
        $data->save();

        return redirect()->route('galeria.index');
    }
    //---------- Controller de apresentação individual de detalhes de post--------
    public function show(Galeria $imagem)
    {
        return view('galeria.show', ['imagem' => $imagem, 'pagina' => 'galeria']);
    }

}
