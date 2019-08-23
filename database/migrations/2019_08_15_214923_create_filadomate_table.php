<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiladomateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filadomate', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Local');
            $table->int('qtdepessoas');
            $table->string('administrador');
            $table->string('status');
            $table->string('nomeFila');
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
        Schema::dropIfExists('filadomate');
    }
}
