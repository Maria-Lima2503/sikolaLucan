<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaPlanoCurricularDisplinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_plano_curricular_displinas', function (Blueprint $table) {
            $table->id('DIS_PLAN_CODIGO');
            $table->unsignedBigInteger('DIS_PLAN_CODIGO_PLANO');
            $table->unsignedBigInteger('DIS_PLAN_CODIGO_PERIODO');
            $table->unsignedBigInteger('DIS_PLAN_CODIGO_DISCIPLINA');
            $table->string('DIS_PLAN_NIVEL');
            $table->decimal('DIS_PLAN_CARGA_HORARIA');
            $table->longText('DIS_PLAN_CONTEUDO_PROGRAMATICO');
            $table->boolean('DIS_PLAN_STATUS');
            $table->string('DIS_PLAN_TIPO');
            $table->unsignedBigInteger('DIS_PLAN_ANO_LECTIVO');
            $table->longText('DIS_PLAN_BIBLIOGRAFIA');
            $table->string('DIS_PLAN_METODOS_AVALIAVACAO');
            $table->longText('DIS_PLAN_OBJECTIVO');
            $table->string('DIS_PLAN_REQUISITOS');
            $table->double('DIS_PLAN_CREDITO');
            $table->string('DIS_PLAN_UNIDADE_CURRICULAR');
            $table->string('DIS_PLAN_TURNO');
            $table->boolean('DIS_PLAN_PROVA_GLOBAL');
            $table->integer('DIS_PLAN_ORDEM');
            $table->integer('DIS_PLAN_ORIENTACAO');
            $table->integer('DIS_PLAN_COLOR');
            $table->string('DIS_PLAN_DESIGNACAO');
            $table->boolean('DIS_PLAN_EXAME');
            $table->boolean('DIS_PLAN_RECURSO');
            $table->string('DIS_PLAN_BOLETIM');
            $table->string('DIS_PLAN_CREATED_BY');
            $table->timestamp('DIS_PLAN_CREATED_DATE');
            $table->string('DIS_PLAN_UPDATED_BY');
            $table->timestamp('DIS_PLAN_UPDATED_DATE');
            $table->integer('DIS_PLAN_TEORIA');
            $table->integer('DIS_PLAN_TEORIA_PRATICA');
            $table->integer('DIS_PLAN_NRO_TRABALHOS');
            $table->integer('DIS_PLAN_HORAS_SEMESTRAL');
            $table->integer('DIS_PLAN_PROCEDENTE');
            $table->integer('DIS_PLAN_ORIGEM');
            $table->string('DIS_PLAN_FAMILIA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_plano_curricular_displinas');
    }
}
