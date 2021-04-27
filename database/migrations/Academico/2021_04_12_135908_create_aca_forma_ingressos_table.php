<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaFormaIngressosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_forma_ingressos', function (Blueprint $table) {
            $table->id('ING_CODIGO');
            $table->string('ING_DESCRICAO');
            $table->string('ING_SIGLA');
            $table->boolean('ING_STATUS');
            $table->string('ING_CREATED_BY');
            $table->timestamp('ING_CREATED_DATE');
            $table->string('ING_UPDATED_BY');
            $table->timestamp('ING_UPDATED_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_forma_ingressos');
    }
}
