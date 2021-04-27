<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaAlunoBolsasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_aluno_bolsa', function (Blueprint $table) {
            $table->id('BOL_ALU_CODIGO_BOLSA');
            $table->unsignedBigInteger('BOL_ALU_CODIGO_ALUNO');
            $table->date('BOL_ALU_INICIO');
            $table->date('BOL_ALU_TERMINO');
            $table->string('BOL_ALU_CREATED_BY');
            $table->timestamp('BOL_ALU_CREATED_DATE');
            $table->string('BOL_ALU_UPDATED_BY');
            $table->timestamp('BOL_ALU_UPDATED_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_aluno_bolsa');
    }
}
