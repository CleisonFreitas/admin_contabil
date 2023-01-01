@extends('adminlte::page')

@section('title', 'Grupo de usuários')

@section('content_header')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-9 col-lg-9">
                        <h4>Grupo de usuários</h4>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <button class="btn bg-purple btn-outline-light flex justify-self-end" id="novo-cadastro"><i class="fas fa-plus-circle mx-2"></i>Adicionar novo registro</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container-fluid text-secondary pb-3">
        <div class="card card-invisible" id="content-card">
            <div class="card-body" id="content-card">
                <h4>Cadastro de grupo de usuários</h4>
                <hr>
                <form id="form" class="form">
                </form>
            </div>
        </div>

        <!-- Tabela de Fornecedores -->
        <div class="card" id="table-card">
            <div class="card-body" id="table-content">
                <h4>Lista de grupos cadastrados</h4>
                <hr>
                <div class="form-group row">
                    <div class="col-12 col-sm-6 col-lg-6">
                        <input
                            type="text"
                            name=""
                            id="buscaConteudo"
                            class="form-control"
                            placeholder="Digite o nome do fornecedor..."
                        >
                    </div>
                    <div class="col-6 col-sm-3 col-lg-3">
                        <input
                            type="date"
                            name=""
                            id=""
                            class="form-control"
                        >
                    </div>
                    <div class="col-6 col-sm-3 col-lg-3">
                        <input
                            type="date"
                            name=""
                            id=""
                            class="form-control"
                        >
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover table-sm table-striped">
                        <thead class="text-purple">
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Cep</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-content">

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <style>
        .card-hide {
            display:none;
        }
    </style>
@stop

@section('js')
    <script src={{ asset('js/main.js') }}></script>
@stop
