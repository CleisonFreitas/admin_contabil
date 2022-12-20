@extends('adminlte::page')

@section('title', 'Gestão - Pronace')

@section('content_header')
<div class="container-fluid text-navy">
    <h1>Dashboard</h1>
</div>

@stop

@section('content')
    <section class="content_dashboard container-fluid">
        <div class="card">
            <div class="card-header text-purple">
                <h3>Resultados</h3>
            </div>
            <div class="card-body shadow">
                <div class="form-group row">

                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead class="bg-gradient-primary">
                                    <tr>
                                        <th>#</th>
                                        <th>Despesas</th>
                                        <th>Progresso</th>
                                        <th>%</th>
                                    </tr>
                                    <tbody class="text-navy">
                                        <tr>
                                            <td>1</td>
                                            <td>À Pagar</td>
                                            <td>
                                                <input
                                                    type="range"
                                                    class="form-control-range "
                                                    value="30"
                                                    min="0"
                                                    max="100"
                                                    disabled
                                                />
                                            </td>
                                            <td>
                                                <span
                                                    class="badge bg-purple">
                                                    30%
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Pago</td>
                                            <td>
                                                <input
                                                    type="range"
                                                    class="form-control-range "
                                                    value="40"
                                                    min="0"
                                                    max="100"
                                                    disabled
                                                />
                                            </td>
                                            <td>
                                                <span
                                                    class="badge bg-navy">
                                                    40%
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Em Atraso</td>
                                            <td>
                                                <input
                                                    type="range"
                                                    class="form-control-range "
                                                    value="30"
                                                    min="0"
                                                    max="100"
                                                    disabled
                                                />
                                            </td>
                                            <td>
                                                <span
                                                    class="badge bg-danger">
                                                    30%
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <canvas id="myChart" style="position: relative; height:30vh; width:80vw"></canvas>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="SecondChart" style="position: relative; height:30vh;"></canvas>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src={{ asset('js/util/chart.js') }}></script>
@stop
