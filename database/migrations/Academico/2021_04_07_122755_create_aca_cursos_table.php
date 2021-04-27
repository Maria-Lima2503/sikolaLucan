<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_curso', function (Blueprint $table) {
            $table->id('CUR_CODIGO');
            $table->string('CUR_NOME');
            $table->string('CUR_ABREVIACAO');
            $table->smallInteger('CUR_INICIO');
            $table->smallInteger('CUR_TERMINO');
            $table->string('CUR_FORMACAO');
            $table->string('CUR_AREA_FORMACAO');
            $table->string('CUR_ESPECIFICACAO');
            $table->unsignedBigInteger('CUR_CODIGO_CURSO');
            $table->string('CUR_TEMPO');
            $table->integer('CUR_DURACAO');

            $table->boolean('CUR_STATUS');
            $table->unsignedBigInteger('CUR_CODIGO_FILIAL');
            $table->string('CUR_MODELO_PAUTA');

            $table->string('CUR_CREATED_BY');
            $table->timestamp('CUR_CREATED_DATE');
            $table->string('CUR_UPDATED_BY');
            $table->timestamp('CUR_UPDATED_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_curso');
    }
}
