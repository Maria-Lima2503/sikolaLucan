<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaDocentePreferenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_docente_preferencias', function (Blueprint $table) {
            $table->id('PREF_ANO_LECTIVO');
            $table->unsignedBigInteger('PREF_CODIGO_DOCENTE');
            $table->unsignedBigInteger('PREF_CODIGO_DISCIPLINA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_docente_preferencias');
    }
}
