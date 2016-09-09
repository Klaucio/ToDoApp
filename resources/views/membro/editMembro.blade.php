@extends('layouts.app')
@section('title', 'Detalhes do Membro')

@section('content')
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('membros') }}">Membros...</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('membro/') }}">Ver Todos</a></li>
            <li><a href="{{ URL::to('membro/create') }}">Novo Membro</a>
        </ul>
    </nav>

    <h1>Edit {{ $nerd->name }}</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::model($nerd, array('route' => array('nerds.update', $nerd->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('nerd_level', 'Nerd Level') }}
        {{ Form::select('nerd_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the Nerd!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
@endsection