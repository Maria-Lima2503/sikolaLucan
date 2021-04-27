<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaAnoLectivoCalendarioPausasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_ano_lectivo_calendario_pausa', function (Blueprint $table) {
            $table->id('CAL_PAU_CODIGO');
            $table->string('CAL_PAU_DESCRICAO');
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
        Schema::dropIfExists('aca_ano_lectivo_calendario_pausa');
    }
}
