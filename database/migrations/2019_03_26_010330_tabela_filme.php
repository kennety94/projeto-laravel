<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaFilme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmes', function(Blueprint $tabela){
            $tabela->integer('id', true);
            $tabela->string('titulo', 100);
            $tabela->string('genero', 30);
            $tabela->string('diretor', 100);
            $tabela->string('ano', 4);
            $tabela->string('duracao', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('filmes');
    }
}
