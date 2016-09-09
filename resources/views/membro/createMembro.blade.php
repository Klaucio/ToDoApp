@extends('layouts.app')
@section('title', 'Registo de Membro')


  @section('content')
      <nav class="navbar navbar-inverse" >
        <div style="float: right">
          {{--<div class="navbar-header">--}}
              {{--<a class="navbar-brand" href="{{ URL::to('membros') }}">Membros...</a>--}}
          {{--</div>--}}
          <ul class="nav navbar-nav">
              <li><a href="{{ URL::to('membro/') }}">Ver Todos</a></li>
              <li><a href="{{ URL::to('membro/create') }}">Novo Membro</a>
          </ul>
         </div>
      </nav>

      <div class="w3-container w3-teal">
          <h2>Registo de Membro</h2>
      </div>
        {!! Form::model($membro,['action'=>'MembroController@store', 'class'=>'class="w3-container"' ]) !!}
        {!! Form::text('nome', '', ['class'=>'w3-input w3-animate-input','placeholder'=>'Nome']) !!}
        {!! Form::text('idade', '', ['class'=>'w3-input w3-animate-input','placeholder'=>'Idade']) !!}
        {!! Form::label('sexo1', 'Masculino') !!}
        {!! Form::radio('sexo', 'Masculino',['id' => 'radio1'])  !!}
        {!! Form::label('sexo2', 'Feminino') !!}
        {!! Form::radio('sexo', 'Feminino',['id' => 'radio2'])  !!}
        {!! Form::select('departamento', array(
                      'departamento',
                      'dmi'=>'DMI',
                      'rh'=>'RH',
                      'logistica'=>'Logistica'
                      ),null,['class'=>'w3-select']) !!}
        {!! Form::text('cargo', '', ['class'=>'w3-input w3-animate-input','placeholder'=>'Cargo']) !!}
        {!! Form::email('email', '', ['class'=>'w3-input w3-animate-input','placeholder'=>'Email']) !!}
        {!! Form::text('telefone', '', ['class'=>'w3-input w3-animate-input','placeholder'=>'Telefone']) !!}
        {!! Form::text('grau', '', ['class'=>'w3-input w3-animate-input','placeholder'=>'Grau']) !!}
        {!! Form::text('endereco', '', ['placeholder'=>'Endereco']) !!}

        {!! Form::submit('Submeter', ['class'=>'w3-btn w3-hover-green']) !!}
        {!! Form::close() !!}
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

            <script src="js/index.js"></script>

  @endsection
