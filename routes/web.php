<?php

use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\ForumController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//================== Rotas Para Fóruns e suas Configurações =====================
Route::get('/foruns', [ForumController::class, 'index'])->middleware('auth')->name('forum.index');
Route::get('/foruns/exclurForum/{forum}', [ForumController::class, 'exclurForum'])->middleware('auth')->name('forum.exclurForum');
Route::get('/foruns/editarForum/{forum}', [ForumController::class, 'editarForum'])->middleware('auth')->name('forum.editarForum');
Route::post('/foruns/editarForum', [ForumController::class, 'editarForumGravar'])->middleware('auth')->name('forum.editarForumGravar');
Route::get('/foruns/forum/{forum}', [ForumController::class, 'forum'])->middleware('auth')->name('forum.forum');
Route::get('/foruns/favoritarForum/{forum}', [ForumController::class, 'favoritarForum'])->middleware('auth')->name('forum.favoritarForum');
Route::get('/foruns/likeComentario/{mensagem}/{forum}', [ForumController::class, 'likeComentario'])->middleware('auth')->name('forum.likeComentario');
Route::get('/foruns/novoForum', [ForumController::class, 'novoForum'])->middleware('auth')->name('forum.novoForum');
Route::post('/forum/gravar', [ForumController::class, 'gravarForum'])->middleware('auth')->name('forum.gravar');
Route::post('/forum/mensagemGravar', [ForumController::class, 'mensagemGravar'])->middleware('auth')->name('forum.mensagemGravar');

//================== Rotas Para Usuário e suas configurações de perfil =====================
Route::get('/foruns/editarUsuarioForum', [ForumController::class, 'editarUsuarioForum'])->middleware('auth')->name('forum.editarUsuario');
Route::post('/foruns/editarUsuarioForum', [ForumController::class, 'usuarioForumUpdate'])->middleware('auth')->name('usuarioForum.update');
Route::get('/usuario/cadastro', [UsuariosController::class, 'cadastro'])->name('usuarios.cadastro');

//================= Rotas insert de usuários ==========================
Route::prefix('usuarios')->group(function() {
    Route::get('/inserir', [UsuariosController::class, 'create'])->name('usuarios.inserir');
    Route::post('/inserir', [UsuariosController::class, 'insert'])->name('usuarios.gravar');
});

//=============== Rotas de autenticação ===================
Route::get('/email/verify', function () {
    return view('auth.verify-email', ['pagina' => 'verify-email']);
   })->middleware('auth')->name('verification.notice');
   
Route::get('/email/verify/{id}/{hash}', function
(EmailVerificationRequest $request) {
$request->fulfill();
return redirect()->route('home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Email de verificação enviado');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');





Route::get('/login', [UsuariosController::class, 'login'])->name('login');
Route::post('/login', [UsuariosController::class, 'login']);

Route::get('/logout', [UsuariosController::class, 'logout'])->name('logout');

