<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTintasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tintas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('marca');
            $table->string('cor');
            $table->string('tipo');
            $table->integer('preço');
            $table->integer('validade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tintas');
    }
}
