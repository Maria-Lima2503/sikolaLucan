<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaCartoesAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_cartoes_alunos', function (Blueprint $table) {
            $table->id('CART_CODIGO');
            $table->unsignedBigInteger('CART_CODIGO_ALUNO');
            $table->unsignedBigInteger('CART_ANO_LECTIVO');
            $table->date('CART_EMISSAO');
            $table->date('CART_VALIDADE');
            $table->string('CART_ESTADO');
            $table->boolean('CART_CODIGO_BARRAS');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_cartoes_alunos');
    }
}
