<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller
{

    //======== Rota criação de usuários =======
    public function create()
    {
        return view('usuarios.create', ['pagina' => 'usuarios']);
    }

    //======== Rota insert de usuários =======
    public function insert(Request $form)
    {
        if($form->password === $form->repeatPassword ){
            $usuario = new Usuario();
            $imagem = $form->file('imagem')->store('', 'imagensUsuario');
            $usuario->name = $form->name;
            $usuario->email = $form->email;
            $usuario->username = $form->username;
            $usuario->password = Hash::make($form->password);
            $usuario->description = $form->description;
            $usuario->image = $imagem;

            $usuario->save();
            event(new Registered($usuario));
            
            Auth::login($usuario);

            return redirect()->route('login');
        }else{
        return redirect()->route('usuarios.cadastro')->with('erro', 'Usuário ou
            senha inválidos.');
        }
    }

    // Ações de login
    public function login(Request $form)
    {
       // Está enviando o formulário
        if ($form->isMethod('POST'))
        {
            // Se um dos campos não for preenchidos, nem tenta o login e volta
            // para a página anterior
            $credenciais = $form->validate([
            'email' => ['required'],
            'password' => ['required'],
            ]);

            // Tenta o login
            if (Auth::attempt($credenciais, $form->lembrar))
            {
                session()->regenerate();


                return redirect()->route('forum.index');
            }
            else
            {
            // Login deu errado (usuário ou senha inválidos)
            return redirect()->route('login')->with('erro', 'Usuário ou
            senha inválidos.');
            }
        }
        return view('usuarios.login', ['pagina' => 'usuarios']);
    }
    //======== logout =======
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    //======== Rota de cadastro =======
    public function cadastro(){
        return view('usuarios.cadastro', ['pagina' => 'usuarios']);
    }
}
