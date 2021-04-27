<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaInscricaoCadeirasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_inscricao_cadeiras', function (Blueprint $table) {
            $table->id('INSC_CODIGO');
            $table->unsignedBigInteger('INSC_CODIGO_MATRICULA');
            $table->unsignedBigInteger('INSC_CODIGO_DISCIPLINA');
            $table->string('INSC_CODIGO_TURMA');
            $table->string('INSC_REGIME');
            $table->string('INSC_STATUS');
            $table->date('INSC_DATA_INSCRICAO');
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
        Schema::dropIfExists('aca_inscricao_cadeiras');
    }
}
