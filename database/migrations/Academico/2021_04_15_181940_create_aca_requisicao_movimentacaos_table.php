<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaRequisicaoMovimentacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_requisicao_movimentacaos', function (Blueprint $table) {
            $table->id('SOL_CODIGO');
            $table->string('SOL_TIPO');
            $table->integer('SOL_NUMERACAO');
            $table->date('SOL_DATA');
            $table->unsignedBigInteger('SOL_STUDENT_ID');
            $table->string('SOL_MOTIVO');
            $table->string('SOL_STATUS');
            $table->date('SOL_DATA_DEFERIMENTO');
            $table->string('SOL_MOTIVO_DEFERIMENTO');
            $table->string('SOL_ASSINATURA_DEFERIMENTO');
            $table->string('SOL_SOLICITANTE');
            $table->unsignedBigInteger('SOL_FILIAL');
            $table->unsignedBigInteger('SOL_ANO_LECTIVO');
            $table->unsignedBigInteger('SOL_COURSE_ID');
            $table->string('SOL_INSTITUICAO');
            $table->unsignedBigInteger('SOL_FINANCIAL_DOCUMENT_ID');
            $table->string('SOL_PARECE_PEDAGOGIA');
            $table->boolean('SOL_URGENTE');
            $table->string('SOL_CREATED_BY');
            $table->timestamp('SOL_CREATED_DATE');
            $table->string('SOL_UPDATED_BY');
            $table->timestamp('SOL_UPDATED_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_requisicao_movimentacaos');
    }
}
