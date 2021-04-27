<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaNotaCfdImilImelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_nota_cfd_imil_imels', function (Blueprint $table) {
            $table->id('CA10_CODIGO_ALUNO');
            $table->unsignedBigInteger('CA10_DISCIPLINA');
            $table->string('CA10_INSCRICAO');
            $table->string('CA10_NOME');
            $table->decimal('CA10_CFD');
            $table->string('CA10_DISPLAY');
            $table->unsignedBigInteger('CA10_TURMA');
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
        Schema::dropIfExists('aca_nota_cfd_imil_imels');
    }
}
