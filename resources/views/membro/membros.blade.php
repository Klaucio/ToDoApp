@extends('layouts.app')
@section('title', 'Listagem de Membros')

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

    <h1>Listagem de Membros</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>Nome</td>
            <td>Sexo</td>
            <td>Email</td>
            <td>Telefone</td>
            <td>Cargo</td>
        </tr>
        </thead>
        <tbody>
        @foreach($membros as $key => $value)
            <tr>
                <td>{{ $value->nome }}</td>
                <td>{{ $value->sexo }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->telefone }}</td>
                <td>{{ $value->cargo }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->

                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('membro/' . $value->id) }}">Detalhes </a>

                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('membro/' . $value->id . '/edit') }}">Editar </a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
@endsection