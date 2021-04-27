<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaNotaValidacaoPermissaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_nota_validacao_permissaos', function (Blueprint $table) {
            $table->id('VAL_PERM_UTILIZADOR');
            $table->unsignedBigInteger('VAL_PERM_CURSO');
            $table->boolean('VAL_PERM_AULA');
            $table->boolean('VAL_PERM_AVALIACAO');
            $table->string('VAL_PERM_CREATED_BY');
            $table->timestamp('VAL_PERM_CREATED_DATE');
            $table->string('VAL_PERM_UPDATED_BY');
            $table->timestamp('VAL_PERM_UPDATED_DATE');
            $table->boolean('VAL_PERM_STATUS');
            $table->string('VAL_PERM_DELETED_BY');
            $table->timestamp('VAL_PERM_DELETED_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aca_nota_validacao_permissaos');
    }
}
