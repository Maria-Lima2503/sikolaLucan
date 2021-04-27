<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaInscricaoTransporteEscolarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_inscricao_transporte_escolars', function (Blueprint $table) {
            $table->id('TRANS_CODIGO');
            $table->unsignedBigInteger('TRANS_CODIGO_ENTIDADE');
            $table->unsignedBigInteger('TRANS_CODIGO_ANO_LECTIVO');
            $table->unsignedBigInteger('TRANS_CODIGO_ROTA');
            $table->date('TRANS_DATA_INSCRICAO');
            $table->string('TRANS_UTENTE_EQUIPAMENTO');
            $table->string('TRANS_UTENTE_NECESSIDADE');
            $table->string('TRANS_LOCAL_RECOLHA');
            $table->string('TRANS_STATUS');
            $table->string('TRANS_CREATED_BY');
            $table->timestamp('TRANS_CREATED_DATE');
            $table->string('TRANS_UPDATED_BY');
            $table->timestamp('TRANS_UPDATED_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_inscricao_transporte_escolars');
    }
}
