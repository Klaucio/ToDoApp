<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//
Route::get('/', function () {
    return view('welcome');

});
//Rotas de tarefas estao no seu controller
Route::resource('tarefa', 'TarefaController' );

//Rotas de membro estao no seu controller

Route::resource('membro','MembroController' );

//Rotas de projecto estao no seu controller

Route::resource('projecto','ProjectoController');

Auth::routes();

Route::get('/home', 'HomeController@index');
