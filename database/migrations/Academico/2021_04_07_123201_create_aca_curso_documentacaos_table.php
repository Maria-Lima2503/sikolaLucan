<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaCursoDocumentacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_curso_documentacaos', function (Blueprint $table) {
            $table->id('CUR_DOCUMENTO_CURSO');
            $table->string('CUR_DOC_DOCUMENTO');
            $table->integer('CUR_DOC_QUANTIDADE');
            $table->string('CUR_DOC_VERSAO');
            $table->unsignedBigInteger('CUR_DOC_CODIGO');
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
        Schema::dropIfExists('aca_curso_documentacaos');
    }
}
