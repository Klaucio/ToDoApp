<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membros', function (Blueprint $table) {

            $table->increments('membro_id');
            $table->string('nome', 70);
            $table->integer('idade')->unsigned();
            $table->string('sexo', 10);
            $table->string('departamento', 25);
            $table->string('cargo', 25);
            $table->string('endereco', 100)->nullable();
            $table->string('email', 35)->nullable();
            $table->string('telefone', 15)->nullable();
            $table->string('grau', 45);
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
        Schema::drop('membros');
    }
}
