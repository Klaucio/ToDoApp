<<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembroTarefasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membro_tarefas', function (Blueprint $table) {

            $table->integer('membro_id')->unsigned();
            $table->integer('tarefa_id')->unsigned();
            $table->primary(['membro_id','tarefa_id']);

            $table->foreign('membro_id')->references('membro_id')->on('membros')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('tarefa_id')->references('tarefa_id')->on('tarefas')
                ->onUpdate('cascade')
                ->onDelete('cascade');

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
        Schema::drop('membro_tarefas');
    }
}
