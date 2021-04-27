<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_horarios', function (Blueprint $table) {
            $table->id('HOR_CODIGO_TURMA');
            $table->unsignedBigInteger('HOR_INICIO');
            $table->unsignedBigInteger('HOR_TERMINO');
            $table->unsignedBigInteger('HOR_SEGUNDA');
            $table->unsignedBigInteger('HOR_TERCA');
            $table->unsignedBigInteger('HOR_QUARTA');
            $table->unsignedBigInteger('HOR_QUINTA');
            $table->unsignedBigInteger('HOR_SEXTA');
            $table->unsignedBigInteger('HOR_SABADO');
            $table->unsignedBigInteger('HOR_ANO_LECTIVO');
            $table->string('HOR_PERIODO');
            $table->unsignedBigInteger('HOR_CODIGO_FILIAL');
            $table->string('HOR_CREATED_BY');
            $table->timestamp('HOR_CREATED_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_horarios');
    }
}
