<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pergunta;

class PerguntaController extends Controller
{

    public function index()
    {
        $perguntas = Pergunta::all();
        return view('home', ['perguntas' => $perguntas]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        /*Recursos por Desenvolver
            -Salvar Imagem
        */

        $perguntas = new Pergunta;
        $perguntas->pergunta = $request->pergunta;
        $perguntas->save();
        return redirect('/')->with('msg', 'Pergunta Enviada com Sucesso');
    }

    public function show($id)
    {
        $perguntas = Pergunta::findOrFail($id);
        return view('post', ['pergunta' => $perguntas]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
