<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaAnoLectivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_ano_lectivo', function (Blueprint $table) {
            $table->id('ANO_CODIGO');
            $table->string('ANO_ANO_LECTIVO')->unique();
            $table->string('ANO_DESCRICAO')->nullable();
            $table->date('ANO_INICIO');
            $table->date('ANO_TERMINO');
            $table->date('ANO_INICIO_MATRICULA');
            $table->date('ANO_TERMINO_MATRICULA');
            $table->boolean('ANO_STATUS')->default(false);
            $table->string('ANO_NIVEL')->nullable();
            $table->string('ANO_TAXA_INSCRICAO')->nullable();
            $table->string('ANO_MULTA_MATRICULA')->nullable();
            $table->unsignedBigInteger('ANO_CODIGO_FILIAL')->nullable();
            $table->integer('ANO_DURACAO_MESES');
            $table->bigInteger('ANO_DIA_COBRANCA')->nullable();
            $table->string('ANO_MODO_COBRANCA')->nullable();
            $table->integer('ANO_INICIO_COBRANCA')->nullable();
            $table->integer('ANO_TERMINO_COBRANCA')->nullable();
            $table->integer('ANO_ANO_CIVIL_INICIO')->nullable();
            $table->integer('ANO_ANO_CIVIL_TERMINO')->nullable();
            $table->integer('ANO_ANO_ECONOMICO')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_ano_lectivo');
    }
}
