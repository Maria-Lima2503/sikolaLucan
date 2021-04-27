<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaMacAvaliacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_mac_avaliacoes', function (Blueprint $table) {
            $table->id('MAC_NOT_CODIGO_MAC');
            $table->unsignedBigInteger('MAC_NOT_CODIGO_DISCIPLINA');
            $table->date('MAC_DATA');
            $table->decimal('MAC_NOTA');
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
        Schema::dropIfExists('aca_mac_avaliacoes');
    }
}
