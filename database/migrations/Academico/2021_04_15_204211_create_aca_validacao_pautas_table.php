<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaValidacaoPautasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_validacao_pautas', function (Blueprint $table) {
            $table->id('VAL_PAU_ID');
            $table->unsignedBigInteger('VAL_PAU_TURMA_ID');
            $table->unsignedBigInteger('VAL_PAU_DISCIPLINA_ID');
            $table->unsignedBigInteger('VAL_EPOCA_ID');
            $table->dateTime('VAL_PAU_DATA_VALIDACAO');
            $table->string('VAL_PAU_CREATED_BY');
            $table->timestamp('VAL_PAU_CREATED_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_validacao_pautas');
    }
}
