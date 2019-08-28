<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fila', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('Local');
            $table->integer('qtdepessoas');
            $table->string('administrador');
            $table->string('status');
            $table->string('nomeFila');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fila');
    }
}
