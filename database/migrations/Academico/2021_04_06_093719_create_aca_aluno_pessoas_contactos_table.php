<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaAlunoPessoasContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_aluno_pessoas_contacto', function (Blueprint $table) {
            $table->id('ALU_CONT_CODIGO_ALUNO');
            $table->string('ALU_CONT_NOME');
            $table->string('ALU_CONT_TELEFONE');
            $table->string('ALU_CONT_GRAU');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_aluno_pessoas_contacto');
    }
}
