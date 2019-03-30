<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FilmeModel extends Model
{
    protected $table = 'filmes';
    protected $primaryKey = 'id';
    protected $fillable =[
        'titulo', 'genero', 'diretor', 'ano', 'duracao'
    ];

    public $timestamps = false;
}
