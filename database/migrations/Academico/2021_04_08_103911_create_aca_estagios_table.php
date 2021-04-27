<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaEstagiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_estagios', function (Blueprint $table) {
            $table->id('EST_CODIGO');
            $table->unsignedBigInteger('EST_ANO_LECTIVO');
            $table->unsignedBigInteger('EST_CODIGO_FILIAL');
            $table->unsignedBigInteger('EST_ENTIDADE_ID');
            $table->string('EST_DESCRICAO');
            $table->unsignedBigInteger('EST_DOCENTE_RESPONSAVEL_ID');
            $table->unsignedBigInteger('EST_ANO_CURRICULAR_ID');
            $table->date('EST_INICIO');
            $table->date('EST_TERMINO');
            $table->boolean('EST_PAID');
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
        Schema::dropIfExists('aca_estagios');
    }
}
