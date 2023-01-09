@extends('adminlte::page')

@section('title', 'Início')

@section('content_header')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h4>Início</h4>
        </div>
    </div>
</div>

@stop

@section('content')
    <section class="content_dashboard container-fluid">
        <div class="card bg-white p-3">
            <div class="jumbotron bg-light">
                <h1 class="display-4">Olá, Seja bem-vindo!</h1>
                <p class="lead">As opções de acesso estão liberadas de acordo com a permissão de cada usuário</p>
                <hr class="my-4 text-light">
                <p><i class="fas fa-exclamation-circle mx-2"></i>Em caso de solicitação para nova liberação, permissão ou acesso, contate o administrador geral.</p>
              </div>
        </div>

    </section>
@stop

@section('css')
    <link rel="stylesheet" href={{ asset('css/home.css') }}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>

@stop

@section('js')
    <script src={{ asset('js/util/chart.js') }}></script>
@stop
