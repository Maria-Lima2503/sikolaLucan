<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaMapaEntregaPautasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_mapa_entrega_pautas', function (Blueprint $table) {
            $table->id('PAU_CODIGO');
            $table->unsignedBigInteger('PAU_ANO_LECTIVO');
            $table->unsignedBigInteger('PAU_DOCENTE');
            $table->unsignedBigInteger('PAU_TURMA_PAU_DISCIPLINA');
            $table->dateTime('PAU_DATA_ENTREGA');
            $table->string('PAU_RECEBIDA_POR');
            $table->string('PAU_SISTEMA');
            $table->boolean('PAU_FISICA');
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
        Schema::dropIfExists('aca_mapa_entrega_pautas');
    }
}
