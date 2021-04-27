<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaSumariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_sumarios', function (Blueprint $table) {
            $table->id('SUM_CODIGO');
            $table->unsignedBigInteger('SUM_CODIGO_TURMA');
            $table->unsignedBigInteger('SUM_CODIGO_DISCIPLINA');
            $table->integer('SUM_DIA_SEMANA');
            $table->string('SUM_HORARIO');
            $table->date('SUM_DATA');
            $table->unsignedBigInteger('SUM_DOCENTE');
            $table->timestamp('SUM_DATA_LANCAMENTO');
            $table->string('SUM_DESCRICAO');
            $table->double('SUM_DURACAO');
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
        Schema::dropIfExists('aca_sumarios');
    }
}
