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
                    <div class="row form-group">
                        <div class="col-12 col-sm-12 col-lg-12">
                            <label for="nome">Nome do grupo*</label>
                            <input
                                type="text"
                                name="name"
                                id="nm_grupo"
                                class="form-control border"
                                placeholder="Ex: Controle financeiro"
                            >
                            <button
                                type="button"
                                class="btn btn-outline-light bg-purple mt-2">
                                <i class="fas fa-plus-circle mx-1"></i>
                                Gravar
                            </button>
                        </div>
                    </div>
                </form>

                <div id="permissoes" class="mt-5">
                    <h4>Lista de permissões</h4>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-sm-4 col-lg-4">
                            <div class="card">
                                <div class="card-header bg-navy px-2 pt-3 py-2">
                                    <h5>Dashboard</h5>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <div class="checkbox">
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    data-toggle="toggle"
                                                    data-onstyle="primary"
                                                    data-offstyle="danger"
                                                    data-width="60">
                                                    Visualizar resultados
                                            </label>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-lg-4">
                            <div class="card">
                                <div class="card-header bg-navy px-2 pt-3 py-2">
                                    <h5>Fornecedores</h5>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <div class="checkbox">
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    data-toggle="toggle"
                                                    data-onstyle="primary"
                                                    data-offstyle="danger"
                                                    data-width="60">
                                                    Visualizar fornecedores
                                            </label>
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    data-toggle="toggle"
                                                    data-onstyle="primary"
                                                    data-offstyle="danger"
                                                    data-width="60">
                                                    Criar fornecedores
                                            </label>
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    data-toggle="toggle"
                                                    data-onstyle="primary"
                                                    data-offstyle="danger"
                                                    data-width="60">
                                                    Editar fornecedores
                                            </label>
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    data-toggle="toggle"
                                                    data-onstyle="primary"
                                                    data-offstyle="danger"
                                                    data-width="60">
                                                    Excluir fornecedores
                                            </label>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-lg-4">
                            <div class="card">
                                <div class="card-header bg-navy px-2 pt-3 py-2">
                                    <h5>Plano de contas</h5>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <div class="checkbox">
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    data-toggle="toggle"
                                                    data-onstyle="primary"
                                                    data-offstyle="danger"
                                                    data-width="60">
                                                    Visualizar plano de contas
                                            </label>
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    data-toggle="toggle"
                                                    data-onstyle="primary"
                                                    data-offstyle="danger"
                                                    data-width="60">
                                                    Criar plano de contas
                                            </label>
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    data-toggle="toggle"
                                                    data-onstyle="primary"
                                                    data-offstyle="danger"
                                                    data-width="60">
                                                    Editar plano de contas
                                            </label>
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    data-toggle="toggle"
                                                    data-onstyle="primary"
                                                    data-offstyle="danger"
                                                    data-width="60">
                                                    Excluir plano de contas
                                            </label>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-4 col-lg-4">
                            <div class="card">
                                <div class="card-header bg-navy px-2 pt-3 py-2">
                                    <h5>Centro de custo</h5>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <div class="checkbox">
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    data-toggle="toggle"
                                                    data-onstyle="primary"
                                                    data-offstyle="danger"
                                                    data-width="60">
                                                    Visualizar centro de custo
                                            </label>
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    data-toggle="toggle"
                                                    data-onstyle="primary"
                                                    data-offstyle="danger"
                                                    data-width="60">
                                                    Criar centro de custo
                                            </label>
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    data-toggle="toggle"
                                                    data-onstyle="primary"
                                                    data-offstyle="danger"
                                                    data-width="60">
                                                    Editar centro de custo
                                            </label>
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    data-toggle="toggle"
                                                    data-onstyle="primary"
                                                    data-offstyle="danger"
                                                    data-width="60">
                                                    Excluir centro de custo
                                            </label>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-lg-4">
                            <div class="card">
                                <div class="card-header bg-navy px-2 pt-3 py-2">
                                    <h5>Formas de pagamento</h5>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <div class="checkbox">
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    data-toggle="toggle"
                                                    data-onstyle="primary"
                                                    data-offstyle="danger"
                                                    data-width="60">
                                                    Visualizar forma de pagamento
                                            </label>
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    data-toggle="toggle"
                                                    data-onstyle="primary"
                                                    data-offstyle="danger"
                                                    data-width="60">
                                                    Criar forma de pagamento
                                            </label>
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    data-toggle="toggle"
                                                    data-onstyle="primary"
                                                    data-offstyle="danger"
                                                    data-width="60">
                                                    Editar forma de pagamento
                                            </label>
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    data-toggle="toggle"
                                                    data-onstyle="primary"
                                                    data-offstyle="danger"
                                                    data-width="60">
                                                    Excluir forma de pagamento
                                            </label>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-lg-4">
                            <div class="card">
                                <div class="card-header bg-navy px-2 pt-3 py-2">
                                    <h5>Contas à pagar</h5>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <div class="checkbox">
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    data-toggle="toggle"
                                                    data-onstyle="primary"
                                                    data-offstyle="danger"
                                                    data-width="60">
                                                    Visualizar conta à pagar
                                            </label>
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    data-toggle="toggle"
                                                    data-onstyle="primary"
                                                    data-offstyle="danger"
                                                    data-width="60">
                                                    Criar conta à pagar
                                            </label>
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    data-toggle="toggle"
                                                    data-onstyle="primary"
                                                    data-offstyle="danger"
                                                    data-width="60">
                                                    Editar conta à pagar
                                            </label>
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    data-toggle="toggle"
                                                    data-onstyle="primary"
                                                    data-offstyle="danger"
                                                    data-width="60">
                                                    Excluir conta à pagar
                                            </label>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@stop

@section('js')
    <script src={{ asset('js/main.js') }}></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
        var base_url = window.location.origin+`/api/fornecedor`;
        console.log(base_url)
    </script>
@stop
