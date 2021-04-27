<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaHorarioAulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_horario_aulas', function (Blueprint $table) {
            $table->id('AULA_CODIGO');
            $table->unsignedBigInteger('AULA_NRO');
            $table->string('AULA_HORARIO');
            $table->unsignedBigInteger('AULA_CODIGO_TURMA');
            $table->unsignedBigInteger('AULA_CODIGO_DISCIPLINA');
            $table->unsignedBigInteger('AULA_DOCENTE_ID');
            $table->date('AULA_DATA');
            $table->longText('AULA_SUMARIO');
            $table->string('AULA_INCLUSAO');
            $table->date('AULA_DATA_INCLUSAO');
            $table->string('AULA_ALTERACAO');
            $table->date('AULA_DATA_ALTERACAO');
            $table->unsignedBigInteger('AULA_FILIAL');
            $table->string('AULA_TIPO');
            $table->longText('AULA_TPC');
            $table->unsignedBigInteger('AULA_PERIODO_ID');
            $table->unsignedBigInteger('AULA_AVALIACAO_ID');
            $table->unsignedBigInteger('AULA_DIA');
            $table->unsignedBigInteger('AULA_HORA');
            $table->longText('AULA_OBSERVACOES');
            $table->unsignedBigInteger('AULA_LOCAL');
            $table->string('AULA_CREATED_BY');
            $table->timestamp('AULA_CREATED_DATE');
            $table->string('AULA_UPDATED_BY');
            $table->timestamp('AULA_UPDATED_DATE');
            $table->boolean('AULA_DELETED');
            $table->string('AULA_DELETED_BY');
            $table->timestamp('AULA_DELETED_DATE');
            $table->string('AULA_STATUS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_horario_aulas');
    }
}
