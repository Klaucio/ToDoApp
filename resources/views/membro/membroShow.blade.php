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

<h1>Showing {{ $membro->nome }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $membro->nome }}</h2>
        <p>
            <strong>Nome:</strong> {{ $membro->nome }}<br>
            <strong>Sexo:</strong> {{ $membro->sexo }}
            <strong>Email:</strong> {{ $membro->email }}
            <strong>Telefone:</strong> {{ $membro->telefone }}

        </p>
    </div>

</div>
@endsection