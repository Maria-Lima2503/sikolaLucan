<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_matriculas', function (Blueprint $table) {
            $table->id('MAT_CODIGO');
            $table->unsignedBigInteger('MAT_CODIGO_ALUNO');
            $table->unsignedBigInteger('MAT_CODIGO_ANO');
            $table->unsignedBigInteger('MAT_CODIGO_PLANO_CURRICULAR');
            $table->unsignedBigInteger('MAT_CODIGO_STATUS');
            $table->date('MAT_DATA');
            $table->unsignedBigInteger('MAT_CODIGO_TURMA');
            $table->string('MAT_SITUACAO_INICIAL');
            $table->string('MAT_SITUACAO_FINAL');
            $table->unsignedBigInteger('MAT_CODIGO_FILIAL');
            $table->string('MAT_STATUS');
            $table->unsignedBigInteger('MAT_CODIGO_STATUS_ACTUAL');
            $table->date('MAT_DATA_PAGAMENTO');
            $table->string('MAT_OPCAO');
            $table->string('MAT_CREATED_BY');
            $table->timestamp('MAT_CREATED_DATE');
            $table->string('MAT_REGISTED_BY');
            $table->timestamp('MAT_REGISTED_DATE');
            $table->string('MAT_TRANSFERRED_BY');
            $table->timestamp('MAT_TRANSFERRED_DATE');
            $table->string('MAT_CANCELLED_BY');
            $table->timestamp('MAT_CACELLED_DATE');
            $table->string('MAT_REACTIVED_BY');
            $table->timestamp('MAT_REACTIVED_DATE');
            $table->string('MAT_UPDATE_BY');
            $table->timestamp('MAT_LAST_UPDATE_DATE');
            $table->string('MAT_ACTIVATION_BY');
            $table->timestamp('MAT_ACTIVATION_DATE');
            $table->unsignedBigInteger('MAT_CODIGO_FATURA');
            $table->smallInteger('MAT_ISENCAO_MATRICULA');
            $table->smallInteger('MAT_BOLSA_MENSALIDADE');
            $table->smallInteger('MAT_CADEIRANTE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_matriculas');
    }
}
