@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h3>Clientes</h3>
                    <a href="{{ route('form_customers') }}" class="btn btn-primary form_customer"><i class="fas fa-plus"></i>&nbsp;Novo</a href="./form_customers">
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
<section class="content_dashboard container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="row form-group card-search">
                <div class="col-12 col-sm-6 col-lg-6 my-1">
                    <h4>Lista de Clientes</h4>
                </div>
                <div class="col-12 col-sm-3 col-lg-3">
                    <input type="text" name="pesquisar" id="" class="form-control" placeholder="Pesquise aqui...">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead class="text-secondary bg-secondary">
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Tipo</th>
                            <th>CPF/CNPJ</th>
                            <th>Cidade</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody data-tableData></tbody>
                </table>
            </div>
            <div class="display-pagination">
                <button class="btn btn-secondary btn-sm">Anterior</button>
                <button class="btn btn-outline-secondary btn-sm">1</button>
                <button class="btn btn-outline-secondary btn-sm">2</button>
                <button class="btn btn-outline-secondary btn-sm">3</button>
                <button class="btn btn-secondary btn-sm">Próximo</button>
            </div>
        </div>
        <div class="card-footer">
            <div class="row form-group">
                <div class="col">
                    <small class="text-secondary">Se preferir, utilize a barra de pesquisa</small>
                </div>
            </div>

        </div>
    </div>
</section>

@stop
@section('css')
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
@stop

@section('js')
    <script src={{ asset('js/views/clientes.js') }}></script>
@stop
