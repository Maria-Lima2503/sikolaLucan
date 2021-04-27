<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaConfiguracaoHoraAulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_configuracao_hora_aulas', function (Blueprint $table) {
            $table->id('HORA_AULA_CODIGO');
            $table->unsignedBigInteger('HORA_AULA_CODIGO_FILIAL');
            $table->string('HORA_AULA_TURNO');
            $table->string('HORA_AULA_INICIO');
            $table->string('HORA_AULA_TERMINO');
            $table->double('HORA_AULA_DURACAO');
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
        Schema::dropIfExists('aca_configuracao_hora_aulas');
    }
}
