<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNovidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novidades', function (Blueprint $table) {
            $table->id();
            $table->string('mensagem', 2000);
            $table->string('imagem', 255);
            $table->integer('votacao_valor_um');
            $table->integer('votacao_valor_dois');
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
        Schema::dropIfExists('novidades');
    }
}
