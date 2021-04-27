<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosPalanquinhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos_palanquinhas', function (Blueprint $table) {
            $table->id();
            $table->string('NUMERO');
            $table->string('NOME_COMPLETO');
            $table->string('NICK_NAME');
            $table->string('DATA_NASCIMENTO');
            $table->string('IDADE');
            $table->string('DOCUMENTACAO');
            $table->string('PAI');
            $table->string('CONTACTO_PAI');
            $table->string('EMAIL_PAI');
            $table->string('MAE');
            $table->string('CONTACTO_MAE');
            $table->string('EMAIL_MAE');
            $table->integer('IDENTIFICACAO');
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
        Schema::dropIfExists('alunos_palanquinhas');
    }
}
