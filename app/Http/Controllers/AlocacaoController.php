<?php

namespace App\Http\Controllers;

use App\Models\membro;
use App\Models\membro_tarefa;
use App\Models\projecto;
use App\Models\tarefa;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class alocacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alocacao=membro_tarefa::all();
        return View('alocacao.alocacoes')->with('tarefas', $alocacao);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($tarefa_id)
    {
        //

        $projectos=projecto::pluck('designacao','projecto_id');
        $membros=membro::pluck('nome','membro_id');
        $alocacao=new membro_tarefa();
        $tarefa = tarefa::find($tarefa_id);

        // show the view and pass the nerd to it
//        return View('alocacao.createAlocacao')->with('alocacao', ['alocacao' => $alocacao ],['projectos'=>$projectos,
//            'membros'=>$membros,'tarefas'=>$tarefa]);

//
//        return View('alocacao.createAlocacao',['alocacao' => $alocacao ],['projectos'=>$projectos,
//            'membros'=>$membros,'tarefa'=>$tarefa]);
    }
    public function criar($tarefa_id)
    {
        //

        $projectos=projecto::pluck('designacao','projecto_id');
        $membros=membro::pluck('nome','membro_id');
        $alocacao=new membro_tarefa();
        $tarefa = tarefa::find($tarefa_id);

        // show the view and pass the nerd to it
//        return View('alocacao.createAlocacao')->with('alocacao', ['alocacao' => $alocacao ],['projectos'=>$projectos,
//            'membros'=>$membros,'tarefas'=>$tarefa]);

//
        return View('alocacao.createAlocacao',['alocacao' => $alocacao ],['projectos'=>$projectos,
            'membros'=>$membros,'tarefa'=>$tarefa]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$tarefa_id)
    {
        //
        dd($tarefa_id);
        $alocacao=membro_tarefa::create($request->all());
        $alocacao->save();
        \Session::flash('message', 'Alocação Criada Com sucesso!');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($tarefa_id)
    {
        //
//        $projectos=projecto::pluck('designacao','projecto_id');
        $membros=membro::pluck('nome','membro_id');
        $alocacao=new membro_tarefa();
//        $tarefa = tarefa::find($tarefa_id);
        $tarefa = DB::table('tarefas')->where('tarefa_id', $tarefa_id)->pluck('titulo','tarefa_id');
//        dd($membros);

        // show the view and pass the nerd to it
//        return View('alocacao.createAlocacao')->with('alocacao', ['alocacao' => $alocacao ],['projectos'=>$projectos,
//            'membros'=>$membros,'tarefas'=>$tarefa]);

//
        return View('alocacao.createAlocacao',['alocacao' => $alocacao ],[
            'membros'=>$membros,'tarefa'=>$tarefa]);
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
    }

}
