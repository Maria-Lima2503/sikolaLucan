<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaActividadesExtraCurricularesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_actividades_extra_curriculares', function (Blueprint $table) {
            $table->id('ACT_CODIGO');
            $table->bigInteger('ACT_CODIGO_RUBRICA');
            $table->string('ACT_DESCRICAO');
            $table->string('ACT_MODALIDADE',2);
            $table->date('ACT_INICIO');
            $table->date('ACT_TERMINO');
            $table->boolean('ACT_STATUS');
            $table->bigInteger('ACT_RESPONSAVEL');
            $table->bigInteger('ACT_ACT_PROFESSOR');
            $table->string('ACT_HORARIO');
            $table->string('ACT_LOCAL');
            $table->string('ACT_CREATED_BY');
            $table->timestamp('ACT_CREATED_DATE');
            $table->string('ACT_UPDATED_BY');
            $table->timestamp('ACT_UPDATED_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_actividades_extra_curriculares');
    }
}
