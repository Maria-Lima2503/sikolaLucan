<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaCoordenacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_coordenacaos', function (Blueprint $table) {
            $table->id('COOR_CODIGO');
            $table->string('COOR_DESCRICAO');
            $table->string('COOR_SIGLA');
            $table->boolean('COOR_ESTADO');
            $table->string('COOR_ENSINO');
            $table->unsignedBigInteger('COOR_FILIAL');
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
        Schema::dropIfExists('aca_coordenacaos');
    }
}
