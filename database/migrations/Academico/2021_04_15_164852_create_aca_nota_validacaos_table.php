<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaNotaValidacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_nota_validacaos', function (Blueprint $table) {
            $table->id('VAL_UTILIZADOR');
            $table->date('VAL_INICIO');
            $table->date('VAL_TERMINO');
            $table->string('VAL_STATUS');
            $table->string('VAL_CREATED');
            $table->timestamp('VAL_CREATED_DATE');
            $table->string('VAL_UPDATED');
            $table->timestamp('VAL_UPDATED_DATE');
            $table->string('VAL_CANCELED');
            $table->timestamp('VAL_CANCELED_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_nota_validacaos');
    }
}
