<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaHistoricoAlteracaoNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_historico_alteracao_notas', function (Blueprint $table) {
            $table->id('HIST_CODIGO');
            $table->unsignedBigInteger('HIST_CODIGO_NOTA');
            $table->decimal('HIST_NOTA');
            $table->string('HIST_UTILIZADOR');
            $table->timestamp('HIST_DATA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_historico_alteracao_notas');
    }
}
