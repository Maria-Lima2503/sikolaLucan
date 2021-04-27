<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaHorarioDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_horario_docentes', function (Blueprint $table) {
            $table->id('HOR_CODIGO');
            $table->unsignedBigInteger('HOR_CODIGO_DOCENTE');
            $table->unsignedBigInteger('HOR_DIA_SEMANA');
            $table->unsignedBigInteger('HOR_INICIO');
            $table->unsignedBigInteger('HOR_TERMINO');
            $table->unsignedBigInteger('HOR_TEMPO');
            $table->unsignedBigInteger('HOR_DISCIPLINA');
            $table->unsignedBigInteger('HOR_TURMA');
            $table->unsignedBigInteger('HOR_REGIME');
            $table->date('HOR_EMISSAO');
            $table->date('HOR_VALIDADE');
            $table->double('HOR_DURACAO');
            $table->string('HOR_SALA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_horario_docentes');
    }
}
