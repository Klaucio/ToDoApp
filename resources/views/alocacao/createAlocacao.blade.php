<?php
/**
 * Created by PhpStorm.
 * User: claucio
 * Date: 9/11/16
 * Time: 12:43 PM
 */
?>
@extends('layouts.app')
@section('title', 'Registo de Alocação')


@section('content')
    <nav class="navbar navbar-inverse" >
        <div style="float: right">
            {{--<div class="navbar-header">--}}
            {{--<a class="navbar-brand" href="{{ URL::to('membros') }}">Membros...</a>--}}
            {{--</div>--}}
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('alocacao/') }}">Ver Todos</a></li>
                <li><a href="{{ URL::to('alocacao/create') }}">Nova Alocação</a>
            </ul>
        </div>
    </nav>

    <div class="w3-container w3-teal">
        <h2>Registo de Alocação</h2>
    </div>
    {{--array('route' => array('tarefa.update', $tarefa->tarefa_id)--}}
    {!! Form::model($alocacao,array('route' => array('alocacao.create', $tarefa->tarefa_id),['action'=>'AlocacaoController@store','class="w3-container"' ]) !!}
{{--    {!! Form::hidden('tarefa_id',$tarefa,null,['class'=>'w3-select'] ) !!}--}}
    {!! Form::select('membro_id',$membros,null,['class'=>'w3-select'] ) !!}
    {!! Form::submit('Submeter', ['class'=>'w3-btn w3-hover-green']) !!}
    {!! Form::close() !!}
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

@endsection
