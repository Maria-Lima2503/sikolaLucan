<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaCursoFormacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_curso_formacaos', function (Blueprint $table) {
            $table->id('FORM_CODIGO');
            $table->string('FORM_DESCRICAO');
            $table->unsignedBigInteger('FORM_GRAU_FORMACAO_ID');
            $table->string('FORM_SIGLA');
            $table->boolean('FORM_STATUS');
            $table->string('FORM_CREATED_BY');
            $table->timestamp('FORM_CREATED_DATE');
            $table->string('FORM_UPDATED_BY');
            $table->timestamp('FORM_UPDATED_DATE');
            $table->boolean('FORM_CURRICULAR');
            $table->boolean('FORM_CURTA_DURACAO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_curso_formacaos');
    }
}
