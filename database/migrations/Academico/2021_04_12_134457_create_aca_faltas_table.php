<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaFaltasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_faltas', function (Blueprint $table) {
            $table->id('FALTA_MATRICULA_ID');
            $table->unsignedBigInteger('FALTA_AULA_ID');
            $table->string('FALTA_STATUS');
            $table->string('FALTA_CREATED_BY');
            $table->timestamp('FALTA_CREATED_DATE');
            $table->string('FALTA_UPDATED_BY');
            $table->timestamp('FALTA_UPDATED_DATE');
            $table->string('FALTA_MAC');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_faltas');
    }
}
