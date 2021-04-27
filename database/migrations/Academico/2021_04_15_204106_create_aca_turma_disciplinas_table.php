<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaTurmaDisciplinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_turma_disciplinas', function (Blueprint $table) {
            $table->id('TUR_DIS_CODIGO_TURMA');
            $table->unsignedBigInteger('TUR_DIS_CODIGO_DISCIPLINA');
            $table->unsignedBigInteger('TUR_DIS_CODIGO_DOCENTE');
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
        Schema::dropIfExists('aca_turma_disciplinas');
    }
}
