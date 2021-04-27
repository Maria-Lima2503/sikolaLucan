<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaProvasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_provas', function (Blueprint $table) {
            $table->id('PROV_CODIGO');
            $table->unsignedBigInteger('PROV_CODIGO_PERIODO');
            $table->unsignedBigInteger('PROV_CODIGO_AVALIACAO');
            $table->unsignedBigInteger('PROV_CODIGO_TURMA');
            $table->unsignedBigInteger('PROV_CODIGO_DISCIPLINA');
            $table->unsignedBigInteger('PROV_CODIGO_DOCENTE');
            $table->date('PROV_DATA_PROVA');
            $table->integer('PROV_STATUS');
            $table->string('PROV_CREATED_BY');
            $table->timestamp('PROV_CREATED_DATE');
            $table->string('PROV_UPDATED_BY');
            $table->timestamp('PROV_UPDATED_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_provas');
    }
}
