<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doador', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome',150);
            $table->date('data_nascimento');
            $table->string('email')->nullable;
            $table->text('endereco');
            $table->text('cidade');
            $table->text('estado');
            $table->string('cep',10);
            $table->string('rg',12);
            $table->string('cpf',15);
            $table->string('telefone',14);
            $table->text('tipo_sangue');
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
        Schema::dropIfExists('doador');
    }
}
