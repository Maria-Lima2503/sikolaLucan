<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaCursosExtraCurricularesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_cursos_extra_curriculares', function (Blueprint $table) {
            $table->id('CUR_CODIGO');
            $table->unsignedBigInteger('CUR_CODIGO_CURSO');
            $table->string('CUR_DESCRICAO');
            $table->date('CUR_INICIO');
            $table->date('CUR_TERMINO');
            $table->string('CUR_STATUS');
            $table->unsignedBigInteger('CUR_PROFESSOR');
            $table->string('CUR_HORARIO');
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
        Schema::dropIfExists('aca_cursos_extra_curriculares');
    }
}
