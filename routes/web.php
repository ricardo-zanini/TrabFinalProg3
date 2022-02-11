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

Route::get('/', function () {
    return view('home', ['pagina' => 'home']);
})->name('home');
// --------------------- Novas Rotas -------------------

Route::get('/foruns', [ForumController::class, 'index'])->middleware('auth')->name('forum.index');
Route::get('/foruns/forum/{forum}', [ForumController::class, 'forum'])->middleware('auth')->name('forum.forum');
Route::get('/foruns/favoritarForum/{forum}', [ForumController::class, 'favoritarForum'])->middleware('auth')->name('forum.favoritarForum');
Route::post('/foruns/likeComentario/{mensagem}', [ForumController::class, 'likeComentario'])->middleware('auth')->name('forum.likeComentario');

Route::get('/foruns/novidades', [ForumController::class, 'novidades'])->middleware('auth')->name('forum.novidades');
Route::get('/foruns/novoForum', [ForumController::class, 'novoForum'])->middleware('auth')->name('forum.novoForum');
Route::post('/forum/gravar', [ForumController::class, 'gravarForum'])->middleware('auth')->name('forum.gravar');
Route::post('/forum/mensagemGravar', [ForumController::class, 'mensagemGravar'])->middleware('auth')->name('forum.mensagemGravar');


Route::get('/usuario/cadastro', [UsuariosController::class, 'cadastro'])->name('usuarios.cadastro');

//-------------------------- Rotas de Galeria -------------------------------

// Rota inicial para apresentação de posts inseridos
Route::get('/galeriaindex', [GaleriaController::class, 'index'])->name('galeria.index');
// Rota para insercao de post na galeria
Route::get('/galeria/inserir', [GaleriaController::class, 'inserir'])->name('galeria.inserir');
// Gravação dos dados no banco recebidos do submit
Route::post('/galeria/gravar', [GaleriaController::class, 'gravar'])->name('galeria.gravar');
// Rota de apresentação de post especifico
Route::get('/galeria/show/{imagem}', [GaleriaController::class, 'show'])->name('galeria.show');

//----------------------------------------------------------------------------

Route::get('produtos', [ProdutosController::class, 'index'])->middleware('auth')->name('produtos');

Route::get('/produtos/inserir', [ProdutosController::class, 'create'])->name('produtos.inserir');

Route::post('/produtos/inserir', [ProdutosController::class, 'insert'])->name('produtos.gravar');

Route::get('/produtos/recortar/{prod}',[ProdutosController::class,'recortar'])->name('produtos.recortar');

Route::post('/produtos/recortar/{prod}',[ProdutosController::class,'updateRecortar'])->name('produtos.updateRecortar');

Route::get('/produtos/{prod}', [ProdutosController::class, 'show'])->name('produtos.show');

Route::get('/produtos/{prod}/editar', [ProdutosController::class, 'edit'])->name('produtos.edit');

Route::put('/produtos/{prod}/editar', [ProdutosController::class, 'update'])->name('produtos.update');

Route::get('/produtos/{prod}/apagar', [ProdutosController::class, 'remove'])->name('produtos.remove');

Route::delete('/produtos/{prod}/apagar', [ProdutosController::class, 'delete'])->name('produtos.delete');

Route::get('usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');

Route::prefix('usuarios')->group(function() {
    
    Route::get('/inserir', [UsuariosController::class, 'create'])->name('usuarios.inserir');
    Route::post('/inserir', [UsuariosController::class, 'insert'])->name('usuarios.gravar');

});

Route::get('/profile', [UsuariosController::class, 'profile'])->name('profile.index');
Route::get('/profile/edit', [UsuariosController::class, 'profileEdit'])->name('profile.edit');
Route::get('/profile/password', [UsuariosController::class, 'profilePassword'])->name('profile.password');
Route::put('/profile/updatePassword', [UsuariosController::class, 'profileUpdatePassword'])->name('profile.updatePassword');
Route::put('/profile/updateProfile', [UsuariosController::class, 'profileUpdateProfile'])->name('profile.updateProfile');

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

