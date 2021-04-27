<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaPautaValidacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_pauta_validacaos', function (Blueprint $table) {
            $table->id('PAU_VAL_TURMA');
            $table->unsignedBigInteger('PAU_VAL_DISCIPLINA');
            $table->date('PAU_VAL_DATA');
            $table->string('PAU_VAL_UTILIZADOR');
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
        Schema::dropIfExists('aca_pauta_validacaos');
    }
}
