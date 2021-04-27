<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaInscricaoAtlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_inscricao_atls', function (Blueprint $table) {
            $table->id('ATL_CODIGO');
            $table->unsignedBigInteger('ATL_CODIGO_ENTIDADE');
            $table->unsignedBigInteger('ATL_CODIGO_ANO_LECTIVO');
            $table->unsignedBigInteger('ATL_CODIGO_MODALIDADE');
            $table->date('ATL_DATA_INSCRICAO');
            $table->string('ATL_STATUS');
            $table->string('ATL_CREATED_BY');
            $table->timestamp('ATL_CRETAED_DATE');
            $table->string('ATL_UPDATED_BY');
            $table->timestamp('ATL_UPDATED_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_inscricao_atls');
    }
}
