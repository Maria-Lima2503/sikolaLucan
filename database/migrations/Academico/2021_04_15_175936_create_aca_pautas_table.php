<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaPautasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_pautas', function (Blueprint $table) {
            $table->id('PAU_CODIGO_ALUNO');
            $table->unsignedBigInteger('PAU_CODIGO_TURMA');
            $table->unsignedBigInteger('PAU_CODIGO_DISCIPLINA');
            $table->string('PAU_NUMERO_INSCRICAO');
            $table->string('PAU_NOME_ALUNO');
            $table->decimal('PRIMEIRA_PROVA');
            $table->decimal('SEGUNDA_PROVA');
            $table->decimal('TERCEIRA_PROVA');
            $table->decimal('QUARTA_PROVA');
            $table->decimal('FREQUENCIA');
            $table->decimal('MEDIA');
            $table->decimal('EXAME');
            $table->decimal('EXAME_ORAL');
            $table->decimal('RECURSO');
            $table->decimal('RECURSO_ORAL');
            $table->decimal('EXAME_ESPECIAL');
            $table->decimal('EXAME_ESPECIAL_ORAL');
            $table->decimal('NOTA_FINAL');
            $table->string('EXTENSO');
            $table->decimal('MELHORIA');
            $table->string('SITUACAO');
            $table->boolean('PAU_STATUS');
            $table->string('PAU_UTILIZADOR');
            $table->date('PAU_DATA_LANCAMENTO');
            $table->string('PAU_REGIME');
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
        Schema::dropIfExists('aca_pautas');
    }
}
