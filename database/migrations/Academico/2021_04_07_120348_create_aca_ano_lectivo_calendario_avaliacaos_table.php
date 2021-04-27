<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaAnoLectivoCalendarioAvaliacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_ano_lectivo_calendario_avaliacao', function (Blueprint $table) {
            $table->id('CAL_AVA_CODIGO');
            $table->unsignedBigInteger('CAL_AVA_CODIGO_AVALIACAO');
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
        Schema::dropIfExists('aca_ano_lectivo_calendario_avaliacao');
    }
}
