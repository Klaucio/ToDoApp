<?php
/**
 * Created by PhpStorm.
 * User: claucio
 * Date: 9/6/16
 * Time: 3:53 AM
 */
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
                <li><a href="{{ URL::to('tarefa/') }}">Ver Todos</a></li>
                <li><a href="{{ URL::to('tarefa/create') }}">Nova tarefa</a>
            </ul>
        </div>
    </nav>

    <div class="w3-container w3-teal">
        <h2>Editar Tarefa</h2>
    </div>
<div class="container">


<!-- if there are creation errors, they will show here -->
{{--{{ HTML::ul($errors->all()) }}--}}

    {!!  Form::model($tarefa, array('route' => array('tarefa.update', $tarefa->tarefa_id), 'method' => 'PUT')) !!}

    <div class="form-group">
        {!! Form::label('name', 'Designação') !!}
{{--        {{ Form::text('name', null, array('class' => 'form-control')) }}--}}
        {!! Form::text('titulo', null, ['class'=>'w3-input w3-animate-input','placeholder'=>'Designação']) !!}

    </div>

    <div class="form-group">
        {!! Form::label('descricao', 'Descrição') !!}
        {!! Form::text('descricao', null, ['class'=>'w3-input w3-animate-input','placeholder'=>'Descrição']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('data_criacao', 'Nerd Level') !!}
        {!! Form::date('data_criacao','',['class'=>'form-control'] ) !!}
    </div>

    <div class="form-group">
        {!!  Form::label('data_real_entrega', 'Data Real Entrega')  !!}
        {!! Form::date('data_real_entrega','',['class'=>'form-control'] ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('', 'Data Entrega') !!}
        {!! Form::date('data_entrega_desejada','',['class'=>'form-control'] ) !!}
    </div>

    <div class="form-group">
        {!!  Form::label('nerd_level', 'Nerd Level')  !!}
        {!! Form::date('data_criacao','',['class'=>'form-control'] ) !!}
    </div>

    {!! Form::select('estado',array('0' => 'Escolha o estado', '1' => 'Activa', '2' => 'Cumprida', '3' => 'Pendente'), null, array('class' => 'form-control'))  !!}

    {!! Form::submit('Salvar', ['class'=>'w3-btn w3-hover-green']) !!}
    {!! Form::close() !!}

</div>
</body>
</html>