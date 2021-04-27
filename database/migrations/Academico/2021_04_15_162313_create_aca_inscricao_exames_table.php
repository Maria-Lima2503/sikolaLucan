<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaInscricaoExamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_inscricao_exames', function (Blueprint $table) {
            $table->id('INSC_EXA_CODIGO');
            $table->unsignedBigInteger('INSC_EXA_CODIGO_MATRICULA');
            $table->unsignedBigInteger('INSC_EXA_CODIGO_EXAME');
            $table->string('INSC_EXA_STATUS');
            $table->unsignedBigInteger('INSC_EXA_DISCICPLINA');
            $table->date('INSC_EXA_DATA');
            $table->string('INSC_EXA_UTILIZADOR');
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
        Schema::dropIfExists('aca_inscricao_exames');
    }
}
