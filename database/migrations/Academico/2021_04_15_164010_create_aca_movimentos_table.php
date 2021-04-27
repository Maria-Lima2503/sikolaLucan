<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaMovimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_movimentos', function (Blueprint $table) {
            $table->id('MOV_CODIGO');
            $table->string('MOV_DESCRICAO');
            $table->string('MOV_SIGLA');
            $table->boolean('MOV_STATUS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_movimentos');
    }
}
