@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="col-md-8">
                <a href="/filme/create" class="btn btn-success">Novo</a>
            </div>
            <br>
            <div class="row" >
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Título</th>
                            <th scope="col">Gênero</th>
                            <th scope="col">Diretor</th>
                            <th scope="col">Ano</th>
                            <th scope="col">Duração</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($filmes as $filme)
                        <tr>
                            <td>{{$filme->id}}</td>
                            <td>{{$filme->titulo}}</td>
                            <td>{{$filme->genero}}</td>
                            <td>{{$filme->diretor}}</td>
                            <td>{{$filme->ano}}</td>
                            <td>{{$filme->duracao}}</td>
                            <td>
                                <form action="{{ url('filme/'.$filme->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <a class="btn btn-primary" href="{{ url('filme/'.$filme->id.'/edit') }}">Editar</a>

                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i> Excluir
                                    </button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection
