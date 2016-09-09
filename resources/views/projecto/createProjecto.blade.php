<?php
use App\Models\membro;
?>
@extends('layouts.app')
@section('title', 'Registo de Membro')


@section('content')
    <nav class="navbar navbar-inverse" >
        <div style="float: right">
            {{--<div class="navbar-header">--}}
            {{--<a class="navbar-brand" href="{{ URL::to('membros') }}">Membros...</a>--}}
            {{--</div>--}}
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('projecto/') }}">Ver Todos</a></li>
                <li><a href="{{ URL::to('projecto/create') }}">Novo Projecto</a>
            </ul>
        </div>
    </nav>




    <div class="w3-container w3-teal">
        <h2>Registo de Membro</h2>
    </div>
    {!! Form::model($projecto,['action'=>'ProjectoController@store', 'class'=>'class="w3-container"' ]) !!}
    {!! Form::text('designacao', '', ['class'=>'w3-input w3-animate-input','placeholder'=>'Designacao']) !!}
{{--    {!! Form::text('departamento', '', ['class'=>'w3-input w3-animate-input','placeholder'=>'Departamento']) !!}--}}
    {!! Form::date('data_inicio','',['class'=>'form-control'] ) !!}
    {!! Form::select('membro_id',$membros,null,['class'=>'w3-select'] ) !!}
    {!! Form::hidden('estado', 'activo', array('id' => 'estado'))  !!}
    {!! Form::submit('Submeter', ['class'=>'w3-btn w3-hover-green']) !!}
    {!! Form::close() !!}
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

@endsection
