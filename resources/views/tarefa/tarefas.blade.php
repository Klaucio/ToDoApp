@extends('layouts.app')
@section('title', 'Listagem de Membros')

@section('content')
    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ URL::to('tarefas/') }}">Tarefas...</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('tarefa/') }}">Ver Todos</a></li>
                <li><a href="{{ URL::to('tarefa/create') }}">Nova Tarefa</a>
            </ul>
        </nav>

        <h1>Listagem de Projectos</h1>

        <!-- will be used to show any messages -->
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <td>Designação</td>
                <td>Data Criação</td>
                <td>Data a Entregr</td>
                <td>Data Entrega</td>
                <td>Estado</td>
                <td>Detalhes</td>
            </tr>
            </thead>
            <tbody>
            @foreach($tarefas as $key => $value)
                <tr>
                    <td>{{ $value->titulo }}</td>
                    <td>{{ $value->data_criacao }}</td>
                    <td>{{ $value->data_real_entrega }}</td>
                    <td>{{ $value->data_entrega_desejada }}</td>
                    <td>{{ $value->estado }}</td>
                    <td>---------</td>

                    <!-- we will also add show, edit, and delete buttons -->
                    <td>

                        <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                        <!-- we will add this later since its a little more complicated than the other two buttons -->

                        <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                        <a class="btn btn-small btn-success" href="{{ URL::to('tarefa/' . $value->tarefa_id) }}">Detalhes </a>

                        <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                        <a class="btn btn-small btn-info" href="{{ URL::to('tarefa/' . $value->tarefa_id . '/edit') }}">Editar </a>
                        <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                        <a class="btn btn-small btn-info" href="{{ URL::to('alocacao/' . $value->tarefa_id . '/edit') }}">Alocar </a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection