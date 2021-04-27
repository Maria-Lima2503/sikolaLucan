<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaRegenteCadeirasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_regente_cadeiras', function (Blueprint $table) {
            $table->id('REG_CODIGO');
            $table->unsignedBigInteger('REG_DOCENTE');
            $table->unsignedBigInteger('REG_CADEIRA');
            $table->date('REG_INICIO');
            $table->date('REG_TERMINO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_regente_cadeiras');
    }
}
