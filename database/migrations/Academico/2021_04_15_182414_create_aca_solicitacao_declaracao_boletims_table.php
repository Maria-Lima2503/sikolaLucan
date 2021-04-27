<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaSolicitacaoDeclaracaoBoletimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_solicitacao_declaracao_boletims', function (Blueprint $table) {
            $table->id('DEC_CODIGO');
            $table->string('DEC_NUMERO');
            $table->unsignedBigInteger('dec_codigo_solicitante');
            $table->date('DEC_DATA_SOLICITACAO');
            $table->string('DEC_OPERADOR');
            $table->string('DEC_ASSINATURA');
            $table->string('DEC_STATUS');
            $table->string('DEC_MOTIVO');
            $table->string('DEC_RECIBO');
            $table->date('DEC_EMISSAO');
            $table->unsignedBigInteger('DEC_FILIAL');
            $table->unsignedBigInteger('DEC_DOCUMENTO');
            $table->string('DEC_EMITIDO_POR');
            $table->date('DEC_ENTREGA');
            $table->string('DEC_ENTREGUE_POR');
            $table->date('DEC_DATA_AUTORIZACAO');
            $table->string('DEC_INSTITUICAO');
            $table->string('DEC_PARECER_ACADEMICO');
            $table->string('DEC_OBS');
            $table->unsignedBigInteger('DEC_ANO_LECTIVO');
            $table->unsignedBigInteger('DEC_ANO_CURRICULAR');
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
        Schema::dropIfExists('aca_solicitacao_declaracao_boletims');
    }
}
