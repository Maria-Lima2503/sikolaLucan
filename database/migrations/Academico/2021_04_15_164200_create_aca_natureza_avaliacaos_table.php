<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaNaturezaAvaliacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_natureza_avaliacaos', function (Blueprint $table) {
            $table->id('AVA_CODIGO');
            $table->string('AVA_DESCRICAO');
            $table->string('AVA_ABREVIATURA');
            $table->string('AVA_AVALIACAO');
            $table->string('AVA_EPOCA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_natureza_avaliacaos');
    }
}
