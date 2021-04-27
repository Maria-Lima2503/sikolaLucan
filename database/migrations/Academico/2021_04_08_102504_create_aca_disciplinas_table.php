<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaDisciplinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_disciplinas', function (Blueprint $table) {
            $table->id('DIS_CODIGO');
            $table->string('DIS_DESCRICAO');
            $table->string('DIS_SIGLA');
            $table->boolean('DIS_STATUS');
            $table->unsignedBigInteger('DIS_FILIAL');
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
        Schema::dropIfExists('aca_disciplinas');
    }
}
