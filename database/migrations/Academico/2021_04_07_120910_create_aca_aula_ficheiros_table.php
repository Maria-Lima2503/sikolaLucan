<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaAulaFicheirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_aula_ficheiros', function (Blueprint $table) {
            $table->id('FILE_ID');
            $table->unsignedBigInteger('FILE_AULA_ID');
            $table->longText('FILE_FILE');
            $table->boolean('FILE_STATUS');
            $table->string('FILE_DESIGNATION');
            $table->string('FILE_CREATED_BY');
            $table->timestamp('FILE_CREATED_DATE');
            $table->string('FILE_UPDATED_BY');
            $table->timestamp('FILE_UPDATED_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_aula_ficheiros');
    }
}
