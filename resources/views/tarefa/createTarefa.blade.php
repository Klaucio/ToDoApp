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
                {{--<li><a href="{{ URL::to('#') }}">Tarefas</a></li>--}}
                <li><a href="{{ URL::to('projecto/') }}">Ver Todos</a></li>
                <li><a href="{{ URL::to('projecto/create') }}">Nova tarefa</a>
            </ul>
        </div>
    </nav>




    <div class="w3-container w3-teal">
        <h2>Registo de Tarefa</h2>
    </div>
    {!! Form::model($tarefa,['action'=>'TarefaController@store', 'class'=>'class="w3-container"' ]) !!}
    {!! Form::select('projecto_id',$projectos,null,['class'=>'w3-select'] ) !!}
    {!! Form::text('titulo', '', ['class'=>'w3-input w3-animate-input','placeholder'=>'Designacao']) !!}
    {!! Form::text('descricao', '', ['class'=>'w3-input w3-animate-input','placeholder'=>'Descrição']) !!}
    {{--    {!! Form::text('departamento', '', ['class'=>'w3-input w3-animate-input','placeholder'=>'Departamento']) !!}--}}
    {!! Form::date('data_criacao','',['class'=>'form-control'] ) !!}
    {!! Form::date('data_real_entrega','',['class'=>'form-control'] ) !!}
    {!! Form::date('data_entrega_desejada','',['class'=>'form-control'] ) !!}
    {!! Form::hidden('estado', 'activo', array('id' => 'estado'))  !!}
    {!! Form::submit('Salvar', ['class'=>'w3-btn w3-hover-green']) !!}
    {!! Form::close() !!}
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

@endsection
