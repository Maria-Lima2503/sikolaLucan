<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaAnoLectivoCalendariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_ano_lectivo_calendario', function (Blueprint $table) {
            $table->id('CAL_CODIGO');
            $table->unsignedBigInteger('CAL_CODIGO_PERIODO');
            $table->date('CAL_INICIO');
            $table->date('CAL_TERMINO');
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
        Schema::dropIfExists('aca_ano_lectivo_calendario');
    }
}
