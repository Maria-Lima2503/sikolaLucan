<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaStatusEscolarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_status_escolars', function (Blueprint $table) {
            $table->id('EST_CODIGO');
            $table->unsignedBigInteger('EST_CODIGO_MOVIMENTO');
            $table->string('EST_DESCRICAO');
            $table->boolean('EST_STATUS');
            $table->boolean('EST_TAXA');
            $table->boolean('EST_MULTA');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_status_escolars');
    }
}
