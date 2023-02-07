<?php

use App\Http\Controllers\PerguntaController;
use App\Http\Controllers\NotificacaoController;
use Illuminate\Support\Facades\Route;

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



