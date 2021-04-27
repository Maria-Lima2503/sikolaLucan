<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaMapaAvaliacaoContinuasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_mapa_avaliacao_continuas', function (Blueprint $table) {
            $table->id('MAC_CODIGO');
            $table->unsignedBigInteger('MAC_CODIGO_ALUNO');
            $table->unsignedBigInteger('MAC_CODIGO_TURMA');
            $table->unsignedBigInteger('MAC_CODIGO_PERIODO_LECTIVO');
            $table->unsignedBigInteger('MAC_SEMANA_LECTIVA');
            $table->date('MAC_INICIO');
            $table->date('MAC_TERMINO');
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
        Schema::dropIfExists('aca_mapa_avaliacao_continuas');
    }
}
