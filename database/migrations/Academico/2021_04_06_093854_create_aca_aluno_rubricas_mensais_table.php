<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaAlunoRubricasMensaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_aluno_rubricas_mensais', function (Blueprint $table) {
            $table->id('ALU_RUBRICA_CODIGO_ALUNO');
            $table->unsignedBigInteger('ALU_RUBRICA_CODIGO_ANO');
            $table->unsignedBigInteger('ALU_RUBRICA_CODIGO_ITEM');
            $table->boolean('ALU_RUBRICA_STATUS');
            $table->string('ALU_RUBRICA_CREATED_BY');
            $table->timestamp('ALU_RUBRICA_CREATED_DATE');
            $table->string('ALU_RUBRICA_UPDATED_BY');
            $table->timestamp('ALU_RUBRICA_UPDATED_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_aluno_rubricas_mensais');
    }
}
