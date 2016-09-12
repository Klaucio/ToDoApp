<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarefasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->increments('tarefa_id');
            $table->string('titulo', 100);
            $table->string('descricao', 255)->nullable();
            $table->Date('data_criacao', 255);
            $table->Date('data_entrega_desejada', 100);
            $table->Date('data_real_entrega', 255);
            $table->string('estado', 100);

            $table->integer('projecto_id')->unsigned();
            $table->foreign('projecto_id')->references('projecto_id')->on('projectos')
                ->onUpdate('cascade')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tarefas');
    }
}
