<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_aluno', function (Blueprint $table) {
            $table->id('ALU_CODIGO');
            $table->string('ALU_INSCRICAO');
            $table->date('ALU_DATA_INSCRICAO');
            $table->boolean('ALU_ESTADO');
            $table->string('ALU_ENCARREGADO');
            $table->string('ALU_ENCARREGADO_TELEFONE');
            $table->string('ALU_ENCARREGADO_EMAIL');
            $table->string('ALU_ENCARREGADO_TEL_ALTERNATIVO');
            $table->string('ALU_ENC_PARENTESCO');
            $table->string('ALU_NOME_PAI');
            $table->string('ALU_NOME_MAE');
            $table->string('ALU_CADASTRO');
            $table->string('ALU_ENCARREGADO_IDENTIFICACAO');
            $table->string('ALU_DATA_READMISSAO');
            $table->string('ALU_PROVENIENCIA_NOME');
            $table->string('ALU_PROVENIENCIA_SAIDA');
            $table->string('ALU_PROVENIENCIA_SITUACAO');
            $table->string('ALU_PROVENIENCIA_CURSO');
            $table->string('ALU_PROVENIENCIA_CLASSE');
            $table->date('ALU_TERMINO');
            $table->string('ALU_NUMERO_MANUAL');
            $table->string('ALU_PASSWORD');
            $table->string('ALU_PORTAL_ALLOWED_BY');
            $table->dateTime('ALU_PORTAL_ALLOWED_DATE');
            $table->boolean('ALU_PORTAL_ACESSO_STATUS');
            $table->string('ALU_PORTAL_UPDATED_BY');
            $table->dateTime('ALU_PORTAL_UPDATED_DATE');
            $table->string('ALU_ENCARREGADO_PORTAL_PASSWORD');
            $table->boolean('ALU_ENCARREGADO_PORTAL_STATUS');
            $table->string('ALU_ENCARREGADO_PORTAL_ALLOWED_BY');
            $table->dateTime('ALU_ENCARREGADO_PORTAL_ALLOWED_DATE');
            $table->string('ALU_ENCARREGADO_PORTAL_UPDATED_BY');
            $table->dateTime('ALU_ENCARREGADO_PORTAL_UPDATED_DATE');
            $table->string('ALU_SHORTNAME');
            $table->boolean('ALU_EXTERNO');
            $table->string('ALU_DELETED_BY');
            $table->string('ALU_DELETED_DATE');
            $table->bigInteger('ALU_CADIDATURA_ID');
            $table->string('ALU_STUDENT_ID');
            $table->string('ALU_MOTIVO_REMOCAO');
            $table->string('ALU_ENCARREGADO_NIF');
            $table->string('ALU_MORADA_FATURACAO');
            $table->timestamp('ALU_CREATED_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_aluno');
    }
}
