<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaPlanoCurricularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_plano_curriculars', function (Blueprint $table) {
            $table->id('PLAN_CODIGO');
            $table->unsignedBigInteger('PLAN_CODIGO_RAMO');
            $table->unsignedBigInteger('PLAN_ANO_CURRICULAR');
            $table->string('PLAN_DESCRICAO');
            $table->string('PLAN_TIPO');
            $table->integer('PLAN_IDADE');
            $table->string('PLAN_DATA');
            $table->string('PLAN_CREATED_BY');
            $table->timestamp('PLAN_CREATED_DATE');
            $table->string('PLAN_UPDATED_BY');
            $table->timestamp('PLAN_UPDATED_DATE');
            $table->boolean('PLAN_NOTA_ESTAGIO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_plano_curriculars');
    }
}
