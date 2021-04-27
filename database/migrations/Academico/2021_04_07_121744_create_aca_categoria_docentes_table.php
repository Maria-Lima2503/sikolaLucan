<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaCategoriaDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_categoria_docentes', function (Blueprint $table) {
            $table->id('CAT_CODIGO');
            $table->string('CAT_DESCRICAO');
            $table->string('CAT_SIGLA');
            $table->string('CAT_ESTADO');
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
        Schema::dropIfExists('aca_categoria_docentes');
    }
}
