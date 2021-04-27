<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaIncricaoActividadesExtrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_incricao_actividades_extras', function (Blueprint $table) {
            $table->id('ACT_INS_CODIGO');
            $table->unsignedBigInteger('ACT_INS_CODIGO_ACTIVIDADE');
            $table->unsignedBigInteger('ACT_INS_CODIGO_PARTICIPANTE');
            $table->date('ACT_INS_DATA_INSCRICAO');
            $table->string('ACT_INS_STATUS');
            $table->string('ACT_INS_CREATED_BY');
            $table->timestamp('ACT_INS_CREATED_DATE');
            $table->string('ACT_INS_UPDATED_BY');
            $table->timestamp('ACT_INS_UPDATED_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_incricao_actividades_extras');
    }
}
