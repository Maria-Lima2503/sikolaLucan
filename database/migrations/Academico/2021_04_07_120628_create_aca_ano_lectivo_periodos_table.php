<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaAnoLectivoPeriodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_ano_lectivo_periodo', function (Blueprint $table) {
            $table->id('PER_CODIGO');
            $table->string('PER_DESCRICAO');
            $table->unsignedBigInteger('PER_CODIGO_ANO_LECTIVO');
            $table->date('PER_INICIO');
            $table->date('PER_TERMINO');
            $table->date('PER_INICIO_MATRICULA');
            $table->date('PER_MATRICULA_TERMINO');
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
        Schema::dropIfExists('aca_ano_lectivo_periodo');
    }
}
