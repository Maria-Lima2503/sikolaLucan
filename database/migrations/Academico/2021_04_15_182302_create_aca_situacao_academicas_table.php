<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaSituacaoAcademicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_situacao_academicas', function (Blueprint $table) {
            $table->id('SIT_CODIGO');
            $table->string('SIT_DESCRICAO');
            $table->string('SIT_SIGLA');
            $table->boolean('SIT_ESTADO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_situacao_academicas');
    }
}
