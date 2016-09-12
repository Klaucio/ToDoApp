<?php

namespace App\Http\Controllers;

use App\Models\membro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


use App\Http\Requests;

class MembroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $membros=Membro::all();
        return View('membro.membros')->with('membros', $membros);

//        return view('forms.formMembro',$membros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $membro=new membro();
        return View('membro.createMembro', ['membro' => $membro ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
            return Redirect::to('membro/formMembro')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $input = Input::all();
            membro::create( $input );
            \Session::flash('message', 'Membro Criado Com sucesso!');
            return Redirect::to('membro/membros');
//            return redirect()->back();
//            return Redirect::route('membros')->with('message', 'Membro created');
        }

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
        $membro = membro::find($id);

        // show the view and pass the nerd to it
        return View('membro.membroShow')
            ->with('membros', $membro);
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
        $membro = membro::find($id);

        // show the edit form and pass the nerd
        return View('membro.editMembro')
            ->with('membros', $membro);

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
            return Redirect::to('membros/' . $id . '/edit')
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
            return Redirect::to('nerds');
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
        $membro = membro::find($id);
        $membro->delete();

        // redirect
        Session::flash('message', 'SMembro Eliminado com sucesso!');
        return Redirect::to('membro.membros');
    }
}
