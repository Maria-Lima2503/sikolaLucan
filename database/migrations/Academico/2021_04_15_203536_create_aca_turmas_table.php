<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_turmas', function (Blueprint $table) {
            $table->id('TUR_CODIGO');
            $table->unsignedBigInteger('TUR_CODIGO_PLANO_CURRICULAR');
            $table->string('TUR_NOME');
            $table->string('TUR_ABREVIATURA');
            $table->integer('TUR_LOTACAO');
            $table->string('TUR_SALA');
            $table->boolean('TUR_STATUS');
            $table->string('TUR_TURNO');
            $table->string('TUR_TIPO');
            $table->unsignedBigInteger('TUR_CODIGO_FILIAL');
            $table->integer('TUR_ANOS_FROM');
            $table->integer('TUR_MESES_FROM');
            $table->integer('TUR_DIAS_FROM');
            $table->integer('TUR_ANOS_UNTIL');
            $table->integer('TUR_MESES_UNTIL');
            $table->integer('TUR_DIAS_UNTIL');
            $table->string('TUR_LOCALIZACAO');
            $table->unsignedBigInteger('TUR_DIRECTOR');
            $table->string('TUR_ANO_LECTIVO');
            $table->string('TUR_CREATED_BY');
            $table->timestamp('TUR_CREATED_DATE');
            $table->string('TUR_UPDATED_BY');
            $table->timestamp('TUR_UPDATED_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_turmas');
    }
}
