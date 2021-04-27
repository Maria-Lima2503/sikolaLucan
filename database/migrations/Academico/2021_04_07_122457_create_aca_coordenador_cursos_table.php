<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaCoordenadorCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_coordenador_cursos', function (Blueprint $table) {
            $table->id('COOR_CODIGO_CURSO');
            $table->unsignedBigInteger('COOR_CODIGO_DOCENTE');
            $table->unsignedBigInteger('COOR_ANO_LECTIVO');
            $table->boolean('COOR_ACTIVO');
            $table->string('COOR_CREATED_BY');
            $table->timestamp('COOR_CREATED_DATE');
            $table->string('COOR_UPDATED_BY');
            $table->timestamp('COOR_UPDATED_DATE');
            $table->string('COOR_DELETED_BY');
            $table->timestamp('COOR_DELETED_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_coordenador_cursos');
    }
}
