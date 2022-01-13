<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //------------ Migration para criação da tabela de galeria de posts --------------
        
        Schema::create('galerias', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 255);
            $table->string('imagem', 255);
            $table->string('descricao', 500);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galerias');
    }
}
