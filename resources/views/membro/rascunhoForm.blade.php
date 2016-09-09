@extends('layouts.app')
@section('title', 'Registo de Membro')


@section('content')
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('membros') }}">Membros...</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('membro/') }}">Ver Todos</a></li>
            <li><a href="{{ URL::to('membro/create') }}">Novo Membro</a>
        </ul>
    </nav>

    <hgroup>
        <h3>Registo de Membro</h3>
    </hgroup>
    {!! Form::model($membro,['action'=>'MembroController@store']) !!}
    {!! Form::text('make', '', ['class'=>'w3-input w3-animate-input','placeholder'=>'Nome']) !!}
    {!! Form::text('make', '', ['class'=>'w3-input w3-animate-input','placeholder'=>'Data de Nascimento']) !!}

    {!! Form::text('make', '', ['class'=>'w3-input w3-animate-input','placeholder'=>'Cargo']) !!}
    {!! Form::email('email', '', ['class'=>'w3-input w3-animate-input','placeholder'=>'Email']) !!}
    {!! Form::text('make', '', ['class'=>'w3-input w3-animate-input','placeholder'=>'Telefone']) !!}
    {!! Form::text('make', '', ['class'=>'w3-input w3-animate-input','placeholder'=>'Grau']) !!}


    {!!       Form::selectMonth('month') !!}
    {!!       Form::selectRange('number', 1, 31) !!}
    {!!  Form::selectYear('year', 2013, 2015)  !!}
    {!! Form::text('make', '', ['placeholder'=>'Endereco']) !!}
    {!! Form::close() !!}
    <form>
        <div class="group">
            <input type="text"><span class="highlight"></span><span class="bar"></span>
            <label>Name</label>
        </div>
        <div class="group">
            <input type="email"><span class="highlight"></span><span class="bar"></span>
            <label>Email</label>
        </div>
        <div class="group">
            <select class="w3-select" name="option">
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
            </select>
        </div>
        <div class="group">
            <p><button class="w3-btn w3-teal">Register</button></p>
        </div>
        <div>
            <input class="w3-input w3-animate-input" type="text" style="width:30%">
            Try It Yourself »
        </div>
        <input class="w3-radio" type="radio" name="gender" value="male" checked>
        <label class="w3-validate">Male</label>

        <input class="w3-radio" type="radio" name="gender" value="female">
        <label class="w3-validate">Female</label>

        <input class="w3-radio" type="radio" name="gender" value="" disabled>
        <label class="w3-validate">Don't know (Disabled)</label>

        <div class="w3-container w3-teal">
            <h2>Input Form</h2>
        </div>

        <form class="w3-container">
            <label class="w3-label w3-text-teal"><b>First Name</b></label>
            <input class="w3-input w3-border w3-light-grey" type="text">

            <label class="w3-label w3-text-teal"><b>Last Name</b></label>
            <input class="w3-input w3-border w3-light-grey" type="text">

            <button class="w3-btn w3-blue-grey">Register</button>
        </form>
        Try It Yourself »



        <button type="button" class="button buttonBlue">Subscribe
            <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
        </button>
    </form>
    {{--<footer><a href="http://www.polymer-project.org/" target="_blank"><img src="https://www.polymer-project.org/images/logos/p-logo.svg"></a>--}}
    {{--<p>You Gotta Love <a href="http://www.polymer-project.org/" target="_blank">Google</a></p>--}}
    {{--</footer>--}}
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

@endsection
