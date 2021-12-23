<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::orderBy('id', 'asc')->get();

        return view('usuarios.index', ['usuarios' => $usuarios, 'pagina' => 'usuarios']);
    }

    public function create()
    {
        return view('usuarios.create', ['pagina' => 'usuarios']);
    }

    public function insert(Request $form)
    {
        $usuario = new Usuario();

        $usuario->name = $form->nome;
        $usuario->email = $form->email;
        $usuario->username = $form->usuario;
        $usuario->password = Hash::make($form->senha);

        $usuario->save();
        event(new Registered($usuario));
        
        Auth::login($usuario);

        return redirect()->route('verification.notice');
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
            'username' => ['required'],
            'password' => ['required'],
            ]);

            // Tenta o login
            if (Auth::attempt($credenciais, $form->lembrar))
            {
                session()->regenerate();


                return redirect()->route('home');
            }
            else
            {
            // Login deu errado (usuário ou senha inválidos)
            return redirect()->route('login')->with('erro', 'Usuário ou
            senha inválidos.');
            }
        }
        return view('usuarios.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    public function profile(Request $request){
        return view('profile.index', ['pagina' => 'profile']);
    }

    public function profileEdit(Usuario $user){
        return view('profile.edit', ['user' => $user, 'pagina' => 'profile']);
    }

    public function profilePassword(Usuario $user){
        return view('profile.password', ['user' => $user, 'pagina' => 'profile']);
    }

    public function profileUpdatePassword(Request $form){
        $user = Auth::user();
        if(Hash::check($form->password,$user->password)){
            if($form->novaSenha === $form->confirmarSenha){
                $user->password = Hash::make($form->novaSenha);
                $user->save();
            }
            else{
                return view('profile.password', ['alert' => 'danger','mensagem'=> "Você não confirmou sua senha corretamente",'user' => $user, 'pagina' => 'profile']);
            }
        }
        else{
            return view('profile.password', ['alert' => 'danger','mensagem'=> "Senha Atual Incorreta",'user' => $user, 'pagina' => 'profile']);
        }

        return view('profile.password', ['alert' => 'success', 'mensagem'=> "Senha Alterada",'user' => $user, 'pagina' => 'profile']);
    }
    public function profileUpdateProfile(Request $form){
        $user = Auth::user();
        $user->name = $form->nome;
        $user->email = $form->email;
        $user->save();
        

        return view('profile.index', ['pagina' => 'profile']);
    }
}
