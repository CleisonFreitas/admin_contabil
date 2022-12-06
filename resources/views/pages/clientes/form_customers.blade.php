@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4>Fornecedores</h4>
                <hr>
                <div class="form-group row pt-2">
                    <div class="col-12 col-md-3 col-lg-3">
                        <button class="btn btn-outline-info mb-2"><i class="fas fa-plus-circle mx-2"></i>Cadastrar novo fornecedor</button>
                    </div>
                    <div class="col-12 col-md-8 col-lg-8">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-navy" id="search_label"><i class="fas fa-search text-white"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Pesquisar por fornecedor..." aria-label="Pesquisar por fornecedor..." aria-describedby="search_label">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('content')
    <div class="container-fluid text-secondary pb-3">
        <div class="card" >
            <div class="card-header">
                <h4>Cadastro de Fornecedores</h4>
            </div>
            <div class="card-body bg-light shadow">
                <form onsubmit="handleSubmit();" class="form">
                    <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link bg-navy active" id="geral-tab" data-toggle="tab" data-target="#geral" type="button" role="tab" aria-controls="geral" aria-selected="true"><i class="fas fa-folder-open mx-1"></i>Geral</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link bg-light " id="address-tab" data-toggle="tab" data-target="#address" type="button" role="tab" aria-controls="address" aria-selected="false"><i class="fas fa-map-marked mx-1"></i>Endereço</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="geral" role="tabpanel" aria-labelledby="geral-tab">
                            <div class="row form-group">
                                <div class="col-12 col-md-12 col-lg-12">
                                    <label for="nome">Nome*</label>
                                    <input type="text" name="nome" id="nome" class="form-control input" placeholder="Digite seu nome completo" required>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-12 col-md-3 col-lg-3 pt-2">
                                    <label for="cnpj">CNPJ</label>
                                    <input type="text" name="cnpj" id="cnpj" class="form-control" placeholder="Coloque apenas digitos">
                                </div>
                                <div class="col-12 col-md-3 col-lg-3 pt-2">
                                    <label for="cpf">CPF</label>
                                    <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Coloque apenas digitos">
                                </div>
                                <div class="col-12 col-md-3 col-lg-3 pt-2">
                                    <label for="ins_estadual">Inscr.Estadual</label>
                                    <input type="text" name="ins_estadual" id="ins_estadual" class="form-control" placeholder="Coloque apenas digitos">
                                </div>
                                <div class="col-12 col-md-3 col-lg-3 pt-2">
                                    <label for="ins_municipal">Inscr.Municipal</label>
                                    <input type="text" name="ins_municipal" id="ins_municipal" class="form-control" placeholder="Coloque apenas digitos">
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
                                        <input type="text" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="email_label">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 col-lg-3 pt-2">
                                    <input type="text" name="observações" id="" class="form-control" placeholder="Observações">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-navy" id="telefone_label"><i class="fas fa-phone text-white"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Telefone(Fixo)" aria-label="Telefone(Fixo)" aria-describedby="telefone_label">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-navy" id="celular_label"><i class="fas fa-mobile-alt text-white"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Celular" aria-label="Celular" aria-describedby="celular_label">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-navy" id="whatsapp_label"><i class="fab fa-whatsapp"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="WhatsApp" aria-label="WhatsApp" aria-describedby="whatsapp_label">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">...</div>
                      </div>


                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <button type="submit" class="btn btn-outline-success"><i class="fas fa-save"></i>&nbsp;Salvar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@stop
@section('css')
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
@stop

@section('js')
    <script src={{ asset('js/views/clientes.js') }}></script>
@stop
