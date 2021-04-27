<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaCursoGrauAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_curso_grau_academicos', function (Blueprint $table) {
            $table->id('GRAU_CODIGO');
            $table->string('GRAU_DESCRICAO');
            $table->string('GRAU_SIGLA');
            $table->boolean('GRAU_STATUS');
            $table->string('GRAU_COORDENACAO');
            $table->string('GRAU_CREATED_BY');
            $table->timestamp('GRAU_CREATED_DATE');
            $table->string('GRAU_UPDATED_BY');
            $table->timestamp('GRAU_UPDATED_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_curso_grau_academicos');
    }
}
