@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
        <div class="form-box">
                <form action="/filme/{{ $id }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    
                    <h2>Pobreflix Filme</h2>
                    
                    <p>Título: <input class="form-control" type="text" name="titulo" value="{{ $titulo }}"></p>
                    <p>Gênero: 
                        <select class="form-control" name="genero">
                            @foreach($generos as $gen)
                                <option value="{{$gen}}"
                                {{($genero == $gen ? 'selected' : '')}}>{{$gen}}</option>
                            @endforeach
                        </select>
                    </p>
                    <p>Diretor: <input class="form-control" type="text" name="diretor" value="{{ $diretor }}"></p>
                    <p>Ano: <input class="form-control" type="text" name="ano" value="{{ $ano }}"></p>
                    <p>Duração: <input class="form-control" type="text" name="duracao" value="{{ $duracao }}"></p>

                    <input class="btn btn-primary" type="submit" value="Salvar">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection