<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensagens', function (Blueprint $table) {
            $table->id();
            $table->integer('id_usuario');
            $table->integer('id_forum');
            $table->integer('id_usuario_resposta')->nullable();;
            $table->string('mensagem', 2000)->nullable();;
            $table->string('imagem', 255)->nullable();;
            $table->integer('numero_likes');
            $table->timestamp('data_envio')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensagens');
    }
}
