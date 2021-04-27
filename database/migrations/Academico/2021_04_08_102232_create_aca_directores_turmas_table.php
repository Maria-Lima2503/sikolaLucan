<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaDirectoresTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_directores_turmas', function (Blueprint $table) {
            $table->id('TUR_DIR_TURMA');
            $table->unsignedBigInteger('TUR_DIR_ANO');
            $table->unsignedBigInteger('TUR_DIR_DOCENTE');
            $table->boolean('TUR_DIR_STATUS');
            $table->string('TUR_DIR_CREATED_BY');
            $table->timestamp('TUR_DIR_CREATED_DATE');
            $table->string('TUR_DIR_UPDATED_BY');
            $table->timestamp('TUR_DIR_UPDATED_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_directores_turmas');
    }
}
