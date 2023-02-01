<?php

use App\Http\Controllers\PerguntaController;
use App\Http\Controllers\NotificacaoController;
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

Route::get('/',[PerguntaController::class,'index']);

Route::get('/escrever',function(){
    return view('write');
});

Route::get('/pesquisa', function(){
    return view('search');
});

Route::get('/meuperfil', function(){
    return view('profile');
});

Route::post('/perguntas',[PerguntaController::class, 'store']);
Route::get('/perguntas/{id}', [PerguntaController::class, 'show']);

Route::get('/notificacao', [NotificacaoController::class, 'index']);



