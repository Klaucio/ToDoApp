@extends('layouts.app')
<?php
/**
 * Created by PhpStorm.
 * User: claucio
 * Date: 9/5/16
 * Time: 4:55 PM
 */
?>
@section('title', 'Registo de Tarefas')


@section('content')

    <hgroup>
        <h1>Material Design Form</h1>
        <h3>By Josh Adamous</h3>
    </hgroup>
    <form>
        <div class="group">
            <input type="text"><span class="highlight"></span><span class="bar"></span>
            <label>Name</label>
        </div>
        <div class="group">
            <input type="email"><span class="highlight"></span><span class="bar"></span>
            <label>Email</label>
        </div>
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
