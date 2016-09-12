<?php

namespace App\Http\Controllers;

use App\Models\projecto;
use App\Models\membro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;




use App\Http\Requests;

class ProjectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projecto=projecto::all();
        $membros=membro::pluck('nome','membro_id');
        return View('projecto.projectos')->with('projectos', $projecto);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $membros=membro::pluck('nome','membro_id');
        $projecto=new projecto();
        return View('projecto.createProjecto',['membros' => $membros ],['projecto'=>$projecto]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $projecto=projecto::create($request->all());
            $projecto->save();
            \Session::flash('message', 'Projecto Criado Com sucesso!');
            return Redirect::to('projecto/');

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
        $projecto = projecto::find($id);

        // show the view and pass the nerd to it
        return View('projecto.projectoShow')
            ->with('projecto', $projecto);
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
        $projecto = projecto::find($id);

        // show the editprojecto form and pass the nerd
        return View('projecto.editProjecto')
            ->with('projectos', $projecto);
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
            return Redirect::to('membro.membros/' . $id . '/edit')
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
            return Redirect::to('projecto.projectos');
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
        $projecto = projecto::find($id);
        $projecto->delete();

        // redirect
        Session::flash('message', 'Projecto Eliminado com sucesso!');
        return Redirect::to('projecto.projectos');   //
    }
}
