<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_notas', function (Blueprint $table) {
            $table->id('NOT_CODIGO');
            $table->unsignedBigInteger('NOT_CODIGO_PROVA');
            $table->unsignedBigInteger('NOT_CODIGO_ALUNO');
            $table->unsignedBigInteger('NOT_CODIGO_TURMA');
            $table->decimal('NOT_NOTA');
            $table->dateTime('NOT_DATA_LANCAMENTO');
            $table->string('NOT_UTILIZADOR');
            $table->string('NOT_STATUS');
            $table->string('NOT_VALIDACAO_CONFIRMACAO');
            $table->dateTime('NOT_DATA_VALIDACAO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_notas');
    }
}
