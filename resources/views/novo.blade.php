@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form method="post" action="/filme">
            {{ csrf_field() }}
            <h2>Pobreflix Filme</h2>
            <p>Título: <input class="form-control" type="text" name="titulo"></p>
            <p>Gênero: 
                <select class="form-control" name="genero">
                    <option>Ação</option>
                    <option>Comédia</option>
                    <option>Suspense</option>
                    <option>Terror</option>
                    <option>Drama</option>
                    <option>Aventura</option>
                </select>
            </p>
            <p>Diretor: <input class="form-control" type="text" name="diretor"></p>
            <p>Ano: <input class="form-control" type="text" name="ano"></p>
            <p>Duração: <input class="form-control" type="text" name="duracao"></p>

            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>
</div>
@endsection