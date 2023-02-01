<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pergunta;

class PerguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perguntas = Pergunta::all();
        return view('home', ['perguntas' => $perguntas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'pergunta'=> ['required'],
            'image' => ['nullable'],
        ]);

        /*
        $perguntas = new Pergunta;
        $perguntas->pergunta = $request->pergunta;


        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOrignalName() . strtotime("now") . "." . $extension);

            $request->image->move(public_path('img/posts'), $imageName);
            $perguntas->imagem = $imageName;
            $perguntas->save();
        }*/

        return redirect('/')->with('msg', 'Pergunta Enviada com Sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $perguntas = Pergunta::findOrFail($id);
        return view('post', ['pergunta' => $perguntas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
