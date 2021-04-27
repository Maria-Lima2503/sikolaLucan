<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaCalendarioExamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_calendario_exames', function (Blueprint $table) {
            $table->id('EXA_CODIGO');
            $table->unsignedBigInteger('EXA_PERIODO_ID');
            $table->unsignedBigInteger('EXA_AVALIACAO_ID');
            $table->unsignedBigInteger('EXA_DISCIPLINA_ID');
            $table->dateTime('EXA_DATA');
            $table->dateTime('EXA_INICIO');
            $table->dateTime('EXA_TERMINO');
            $table->string('EXA_TIPO');
            $table->boolean('EXA_STATUS');
            $table->longText('EXA_OBSERVACAO');
            $table->string('EXA_CREATED_BY');
            $table->timestamp('EXA_CREATED_DATE');
            $table->string('EXA_UPDATED_BY');
            $table->timestamp('EXA_UPDATED_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_calendario_exames');
    }
}
