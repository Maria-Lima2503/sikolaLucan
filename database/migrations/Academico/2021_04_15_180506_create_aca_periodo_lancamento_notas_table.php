<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaPeriodoLancamentoNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_periodo_lancamento_notas', function (Blueprint $table) {
            $table->id('PER_CODIGO');
            $table->unsignedBigInteger('PER_PERIODO_LECTIVO_ID');
            $table->dateTime('PER_PERIODO_INICIO');
            $table->dateTime('PER_PERIODO_TERMINO');
            $table->unsignedBigInteger('PER_EXAME_ID');
            $table->boolean('PER_PERIODO_EXTRA');
            $table->string('PER_CREATED_BY');
            $table->timestamp('PER_CREATED_DATE');
            $table->string('PER_UPDATED_BY');
            $table->timestamp('PER_UPDATED_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_periodo_lancamento_notas');
    }
}
