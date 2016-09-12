<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projectos', function (Blueprint $table) {
//            $table->increments('id');

            $table->increments('projecto_id');
            $table->string('designacao', 100);
            $table->Date('data_inicio', 255);
            $table->string('estado', 100);
            $table->integer('membro_id')->unsigned()->nullable();
            $table->foreign('membro_id')->references('membro_id')->on('membros')->
            onUpdate('cascade')->
            onDelete('set null');
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projectos');
    }
}
