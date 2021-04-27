<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_docentes', function (Blueprint $table) {
            $table->id('DOC_CODIGO_FUNCIONARIO');
            $table->smallInteger('DOC_ESTADO');
            $table->string('DOC_CATEGORIA');
            $table->integer('DOC_FILIAL');
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
        Schema::dropIfExists('aca_docentes');
    }
}
