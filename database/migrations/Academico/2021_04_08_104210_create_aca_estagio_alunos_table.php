<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaEstagioAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_estagio_alunos', function (Blueprint $table) {
            $table->id('EST_CODIGO_ESTAGIO');
            $table->unsignedBigInteger('EST_CODIGO_ALUNO');
            $table->decimal('EST_NOTA_TEORIA');
            $table->decimal('EST_NOTA_PRATICA');
            $table->decimal('EST_NOTA_FINAL');
            $table->string('EST_NOTES');
            $table->unsignedBigInteger('EST_PAYMENT_ID');
            $table->string('EST_CREATED_BY');
            $table->timestamp('EST_CREATED_DATE');
            $table->string('EST_UPDATED_BY');
            $table->timestamp('EST_UPDATED_DATE');
            $table->string('EST_DELETED_BY');
            $table->timestamp('EST_DELETED_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_estagio_alunos');
    }
}
