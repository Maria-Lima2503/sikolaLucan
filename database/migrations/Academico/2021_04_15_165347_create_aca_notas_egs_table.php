<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaNotasEgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_notas_egs', function (Blueprint $table) {
            $table->id('NOT_CODIGO_ALUNO');
            $table->unsignedBigInteger('NOT_CODIGO_TURMA');
            $table->unsignedBigInteger('NOT_CODIGO_DISCIPLINA');
            $table->string('NOT_NUMERO_INSCRICAO');
            $table->string('NOT_NOME_COMPLETO');
            $table->decimal('NOT_PP1_1T');
            $table->decimal('NOT_PP2_1T');
            $table->decimal('NOT_TP1_1T');
            $table->decimal('NOT_TP2_1T');
            $table->decimal('NOT_MTP_1T');
            $table->decimal('NOT_MAC_1T');
            $table->decimal('NOT_MD_1T');
            $table->decimal('NOT_PP1_T2');
            $table->decimal('NOT_PP2_T2');
            $table->decimal('NOT_TP1_T2');
            $table->decimal('NOT_TP2_T2');
            $table->decimal('NOT_MTP_2T');
            $table->decimal('NOT_MAC_2T');
            $table->decimal('NOT_MD_2T');
            $table->decimal('NOT_PP1_T3');
            $table->decimal('NOT_PP2_T3');
            $table->decimal('NOT_TP1_T3');
            $table->decimal('NOT_TP2_T3');
            $table->decimal('NOT_MTP_T3');
            $table->decimal('NOT_MAC_3T');
            $table->decimal('NOT_MD_3T');
            $table->decimal('NOT_CAP');
            $table->decimal('NOT_CPE');
            $table->decimal('NOT_CF');
            $table->string('NOT_OBSERVACAO');
            $table->string('NOT_UTILIZADOR');
            $table->timestamp('NOT_DATA_LANCAMENTO');
            $table->string('NOT_STATUS_VALIDACAO');
            $table->decimal('NOT_CFD');
            $table->decimal('NOT_EXAME');
            $table->decimal('NOT_RECURSO');
            $table->decimal('NOT_CAA');
            $table->decimal('NOT_C10');
            $table->unsignedBigInteger('NOT_EN_VALIDACAO_ID');
            $table->unsignedBigInteger('NOT_EX_VALIDACAO_ID');
            $table->unsignedBigInteger('NOT_RC_VALIDACAO_ID');
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
        Schema::dropIfExists('aca_notas_egs');
    }
}
