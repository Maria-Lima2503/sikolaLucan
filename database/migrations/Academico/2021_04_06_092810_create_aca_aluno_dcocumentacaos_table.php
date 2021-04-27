<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaAlunoDcocumentacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_aluno_documentacao', function (Blueprint $table) {
            $table->id('DOC_DOCUMENTO');
            $table->unsignedBigInteger('DOC_ALUNO');
            $table->string('DOC_SCANNER');
            $table->string('DOC_PATH');
            $table->string('DOC_EXTENSAO');
            $table->string('DOC_CONTEUDO');
            $table->boolean('DOC_STATUS');
            $table->integer('DOC_QUANTIDADE');
            $table->unsignedBigInteger('DOC_ANO_LECTIVO');
            $table->string('DOC_CREATED_BY');
            $table->timestamp('DOC_CREATED_DATE');
            $table->string('DOC_UPDATED_BY');
            $table->timestamp('DOC_UPDATED_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_aluno_documentacao');
    }
}
