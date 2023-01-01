@extends('adminlte::page')

@section('title', 'Gestão - Pronace')

@section('content_header')
<div class="container-fluid text-navy">
    <h1>Dashboard</h1>
</div>

@stop

@section('content')
    <section class="content_dashboard container-fluid">
        <div class="card mb-3">
            <div class="card-header text-purple">
                <h3>Resultados</h3>
            </div>
            <div class="card-body shadow">
                <div class="form-group row">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="SecondChart" ></canvas>
                            </div>
                        </div>
                    </div>
                </div>
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
