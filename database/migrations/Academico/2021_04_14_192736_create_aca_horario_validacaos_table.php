<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaHorarioValidacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_horario_validacaos', function (Blueprint $table) {
            $table->id('HOR_DIA');
            $table->unsignedBigInteger('HOR_DOCENTE_ID');
            $table->unsignedBigInteger('HOR_INICIO');
            $table->unsignedBigInteger('HOR_TERMINO');
            $table->unsignedBigInteger('HOR_PERIODO_ID');
            $table->unsignedBigInteger('HOR_TURMA_ID');
            $table->unsignedBigInteger('HOR_DISCIPLINA_ID');
            $table->string('HOR_CREATED_BY');
            $table->timestamp('HOR_CREATED_DATE');
            $table->string('HOR_UPDATED_BY');
            $table->timestamp('HOR_UPDATED_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_horario_validacaos');
    }
}
