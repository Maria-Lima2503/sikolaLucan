<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaAnoCurricularDocumentacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_ano_curricular_documentacao', function (Blueprint $table) {
            $table->id('DOC_ANO_CURRICULAR_ID');
            $table->unsignedBigInteger('DOC_DOCUMENTO_ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_ano_curricular_documentacao');
    }
}
