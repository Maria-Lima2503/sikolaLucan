<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaFichaSaudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_ficha_saudes', function (Blueprint $table) {
            $table->id('SAU_CODIGO_ALUNO');
            $table->unsignedBigInteger('SAU_CODIGO_SEGURADORA');
            $table->string('SAU_PLANO_SAUDE');
            $table->string('SAU_NRO_APOLICE');
            $table->string('SAU_TOMADOR_SEGURO');
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
        Schema::dropIfExists('aca_ficha_saudes');
    }
}
