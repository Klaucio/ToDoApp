<?php

namespace App\Http\Controllers;

use App\Models\projecto;
use App\Models\tarefa;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tarefas=tarefa::all();
        return View('tarefa.tarefas')->with('tarefas', $tarefas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //goes to db and brings the name and id of projectos
        $projectos=projecto::pluck('designacao','projecto_id');
        $tarefa=new tarefa();
        return View('tarefa.createTarefa',['tarefa' => $tarefa ],['projectos'=>$projectos]);
//        return View('tarefa.createTarefa');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $tarefa=tarefa::create($request->all());
            $tarefa->save();

            // redirect
            \Session::flash('message', 'Tarefa Criada Com sucesso!');
            return Redirect::to('tarefa/');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $tarefas = tarefa::find($id);

        // show the view and pass the nerd to it
        return View('tarefa.tarefaShow')
            ->with('tarefas', $tarefas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tarefa = tarefa::find($id);

        // show the edit form and pass the nerd
        return View('tarefa.editTarefa')->with('tarefa', $tarefa);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $rules = array(
            'nome'       => 'required',
            'sexo' => 'required',
            'cargo'       => 'required',
            'grau'      => 'required',
            'sexo' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('tarefa.membros/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $nerd = Nerd::find($id);
            $nerd->name       = Input::get('name');
            $nerd->email      = Input::get('email');
            $nerd->nerd_level = Input::get('nerd_level');
            $nerd->save();

            // redirect
            Session::flash('message', 'Successfully updated nerd!');
            return Redirect::to('tarefa.tarefas');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tarefa = tarefa::find($id);
        $tarefa->delete();

        // redirect
        Session::flash('message', ' Eliminado com sucesso!');
        return Redirect::to('tarefa.tarefas');
    }
}
