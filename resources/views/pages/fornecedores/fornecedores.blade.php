@extends('adminlte::page')

@section('title', 'Fornecedores')

@section('content_header')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-9 col-lg-9">
                        <h4>Fornecedores</h4>
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
            <div class="card-body" >
                <h4>Cadastro de Fornecedores</h4>
                <hr>
                <form id="form" class="form">
                    <ul class="nav nav-tabs mb-3 nav-filter" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link bg-navy active" onclick="changeGeral();" id="geral-tab" data-toggle="tab" data-target="#geral" type="button" role="tab" aria-controls="geral" aria-selected="true"><i class="fas fa-folder-open mx-1"></i>Geral</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" onclick="changeAddress();" id="address-tab" data-toggle="tab" data-target="#address" type="button" role="tab" aria-controls="address" aria-selected="false"><i class="fas fa-map-marked mx-1"></i>Endereço</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="geral" role="tabpanel" aria-labelledby="geral-tab">
                            <div class="row form-group">
                                <div class="col-4 col-md-2 col-lg-2">
                                    <label for="nome">ID</label>
                                    <input
                                        type="text"
                                        name="nm_fornecedor"
                                        id="id"
                                        value=""
                                        class="form-control input"
                                        readonly
                                    >
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-12 col-md-12 col-lg-12">
                                    <label for="nome">Nome*</label>
                                    <input
                                        type="text"
                                        name="nm_fornecedor"
                                        id="nome"
                                        value=""
                                        class="form-control input"
                                        placeholder="Digite seu nome completo"
                                    >
                                    <small class="text-danger msg-erro msg-erro--nm_fornecedor"></small>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-12 col-md-3 col-lg-3 pt-2">
                                    <label for="cnpj">CNPJ*</label>
                                    <input
                                        type="text"
                                        name="nr_cnpj"
                                        id="nr_cnpj"
                                        value=""
                                        class="form-control"
                                        placeholder="Coloque apenas digitos"
                                    >
                                    <small class="text-danger msg-erro msg-erro--nr_cnpj mb-0"></small>
                                </div>
                                <div class="col-12 col-md-3 col-lg-3 pt-2">
                                    <label for="cpf">CPF</label>
                                    <input
                                        type="text"
                                        name="nr_cpf"
                                        id="nr_cpf"
                                        value=""
                                        class="form-control"
                                        placeholder="Coloque apenas digitos"
                                    >
                                </div>
                                <div class="col-12 col-md-3 col-lg-3 pt-2">
                                    <label for="ins_estadual">Inscr.Estadual</label>
                                    <input
                                        type="text"
                                        name="ins_estadual"
                                        id="ins_estadual"
                                        value=""
                                        class="form-control"
                                        placeholder="Coloque apenas digitos"
                                    >
                                </div>
                                <div class="col-12 col-md-3 col-lg-3 pt-2">
                                    <label for="ins_municipal">Inscr.Municipal</label>
                                    <input
                                        type="text"
                                        name="ins_municipal"
                                        id="ins_municipal"
                                        value=""
                                        class="form-control"
                                        placeholder="Coloque apenas digitos"
                                    >
                                </div>
                            </div>

                            <h4 class=" pt-3">Contato*</h4>
                            <hr>
                            <div class="row form-group">
                                <div class="col-12 col-md-9 col-lg-9 pt-2">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-navy" id="email_label"><i class="fas fa-envelope-open-text text-white"></i></span>
                                        </div>
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="E-mail"
                                            aria-label="E-mail"
                                            id="email"
                                            value=""
                                            aria-describedby="email_label"
                                        >
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 col-lg-3 pt-2">
                                    <input
                                        type="text"
                                        name="observações"
                                        id="observacao"
                                        class="form-control"
                                        value=""
                                        placeholder="Observações"
                                    >
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-navy" id="telefone_label"><i class="fas fa-phone text-white"></i></span>
                                        </div>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="telefone"
                                            value=""
                                            placeholder="Telefone(Fixo)"
                                            aria-label="Telefone(Fixo)"
                                            aria-describedby="telefone_label"
                                        >
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-navy" id="celular_label"><i class="fas fa-mobile-alt text-white"></i></span>
                                        </div>
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Celular"
                                            id="celular"
                                            value=""
                                            aria-label="Celular"
                                            aria-describedby="celular_label"
                                        >
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-navy" id="whatsapp_label"><i class="fab fa-whatsapp"></i></span>
                                        </div>
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="WhatsApp"
                                            id="whatsapp"
                                            value=""
                                            aria-label="WhatsApp"
                                            aria-describedby="whatsapp_label"
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                            <div class="form-group row">
                                <div class="col-12 col-md-4 col-lg-4">
                                    <label for="cep">CEP*</label>
                                    <input type="text"
                                        name="cep"
                                        id="cep"
                                        value=""
                                        class="form-control"
                                        placeholder="Coloque apenas dígitos"
                                        onblur="BuscaCEP();">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12 col-md-10 col-lg-10">
                                    <label for="logradouro">Logradouro</label>
                                    <input
                                        type="text"
                                        name="logradouro"
                                        id="logradouro"
                                        value=""
                                        class="form-control"
                                        placeholder="Endereço/Localização"
                                    >
                                </div>
                                <div class="col-12 col-md-2 col-lg-2">
                                    <label for="numero">Número</label>
                                    <input
                                        type="text"
                                        name="numero"
                                        id="numero"
                                        value=""
                                        class="form-control"
                                        placeholder="Apenas números"
                                    >
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12 col-md-5 col-lg-5">
                                    <label for="bairro">Bairro</label>
                                    <input
                                        type="text"
                                        name="bairro"
                                        id="bairro"
                                        value=""
                                        class="form-control"
                                        placeholder="Digite o bairro"
                                    >
                                </div>
                                <div class="col-12 col-md-5 col-lg-5">
                                    <label for="cidade">Cidade</label>
                                    <input
                                        type="text"
                                        name="cidade"
                                        id="cidade"
                                        value=""
                                        class="form-control"
                                        placeholder="Digite a cidade"
                                    >
                                </div>
                                <div class="col-12 col-md-2 col-lg-2">
                                    <label for="uf">UF</label>
                                    <input
                                        type="text"
                                        name="uf"
                                        id="uf"
                                        value=""
                                        class="form-control"
                                        placeholder="UF"
                                    >
                                </div>
                            </div>
                        </div>
                      </div>


                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <button
                                type="submit"
                                class="btn bg-purple btn-outline-light">
                                <i class="fas fa-save mx-2"></i>
                                Salvar
                            </button>
                            <button
                                type="reset"
                                onclick="cancelarRegistro();"
                                class="btn bg-navy btn-outline-light">
                                <i class="fas fa-eraser mx-2"></i>
                                Cancelar
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <!-- Tabela de Fornecedores -->
        <div class="card" id="table-card">
            <div class="card-body" id="table-content">
                <h4>Lista de fornecedores cadastrados</h4>
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
<script src={{ asset('js/services/BuscaCep.js') }}></script>
<script src={{ asset('js/main.js') }}></script>
<script src={{ asset('js/controllers/fornecedor/CriaFornecedor.js') }} type="module"></script>
<script src={{ asset('js/controllers/fornecedor/ListFornecedor.js') }} type="module"></script>
<script src={{ asset('js/controllers/fornecedor/EditFornecedor.js') }} type="module"></script>
@stop
