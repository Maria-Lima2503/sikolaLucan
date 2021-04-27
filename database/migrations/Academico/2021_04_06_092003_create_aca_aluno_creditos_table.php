<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaAlunoCreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_aluno_credito', function (Blueprint $table) {
            $table->id('CRE_CODIGO');
            $table->unsignedBigInteger('CRE_CODIGO_ALUNO');
            $table->double('CRE_CREDITO');
            $table->date('CRE_CRE_DATA');
            $table->unsignedBigInteger('CRE_FATURA');
            $table->string('CRE_DESCRICAO');
            $table->unsignedBigInteger('CRE_CONTA_DESTINO');
            $table->string('CRE_MOVIMENTO');
            $table->unsignedBigInteger('CRE_CONTA_ORIGEM');
            $table->boolean('CRE_ADIAMENTO');
            $table->unsignedBigInteger('CRE_DOCUMENTO_ID');
            $table->string('CRE_LANCADOD_POR');
            $table->timestamp('CRE_DATA_LANCAMENTO');
            $table->unsignedBigInteger('CRE_ANO_LECTIVO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_aluno_credito');
    }
}
