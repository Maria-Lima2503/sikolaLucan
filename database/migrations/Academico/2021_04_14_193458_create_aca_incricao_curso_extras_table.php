<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaIncricaoCursoExtrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_incricao_curso_extras', function (Blueprint $table) {
            $table->id('CUR_INS_CODIGO');
            $table->unsignedBigInteger('CUR_INS_CODIGO_CURSO');
            $table->unsignedBigInteger('CUR_INS_CODIGO_INSCRITO');
            $table->date('CUR_INS_DATA');
            $table->string('CUR_INS_STATUS');
            $table->string('CUR_INS_INSCRITO_POR');
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
        Schema::dropIfExists('aca_incricao_curso_extras');
    }
}
