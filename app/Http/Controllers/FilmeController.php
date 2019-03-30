<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FilmeModel;

class FilmeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filmes = FilmeModel::all();
        return view('lista',[
            'filmes' => $filmes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filme = new FilmeModel;
        $filme->titulo = $request->input('titulo');
        $filme->genero = $request->input('genero');
        $filme->diretor = $request->input('diretor');
        $filme->ano = $request->input('ano');
        $filme->duracao = $request->input('duracao');

        $filme->save();


        return redirect('/filme');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $filme = FilmeModel::find($id);
        printf($filme);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $filme = FilmeModel::find($id);
        
        $generos = ['Ação', 'Comédia', 'Suspense', 'Terror', 'Drama', 'Aventura'];

        return view('editar', [
            'id' => $id,
            'titulo' => $filme->titulo,
            'genero' => $filme->genero,
            'diretor' => $filme->diretor,
            'ano' => $filme->ano,
            'duracao' => $filme->duracao,
            'generos' => $generos
        ]);
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
        $filme = FilmeModel::find($id);

        $filme->update($request->all());
        return redirect('/filme');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filme = FilmeModel::find($id);
        $filme->delete();

        return redirect('/filme');
    }
}
