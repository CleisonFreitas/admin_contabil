@extends('adminlte::page')

@section('title', 'Forma de pagamento')

@section('content_header')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4>Forma de pagamento</h4>
                <hr>
                <div class="form-group row pt-2">
                    <div class="col-12 col-md-3 col-lg-3">
                        <button class="btn btn-outline-info mb-2" id="novo-cadastro" onclick="adicionarRegistro();"><i class="fas fa-plus-circle mx-2"></i>Nova forma de pagamento</button>
                    </div>
                    <div class="col-12 col-md-8 col-lg-8">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-navy" id="search_label"><i class="fas fa-search text-white"></i></span>
                            </div>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Pesquisar por forma de pagamento..."
                                aria-label="Pesquisar por forma de pagamento..."
                                aria-describedby="search_label"
                                autofocus
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-invisible" id="content-card">
            <div class="card-header">
                <h4>Cadastrar nova forma de pagamento</h4>
            </div>
            <div class="card-body bg-light shadow">
                <form action="#">
                    <div class="form-group row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <label for="forma_pagamento">Nova forma de pagamento*</label>
                            <input
                                type="text"
                                name="nome"
                                id="forma_pagamento"
                                class="form-control pt-2"
                                required
                                placeholder="Digite o nome da forma de pagamento"

                            >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12 col-md-3 col-lg-3">
                            <label for="tipo">Tipo</label>
                            <select
                                name="tipo"
                                id="tipo"
                                class="custom-select">
                                    <option value="dinheiro">Dinheiro</option>
                                    <option value="cartao">Cartão</option>
                                    <option value="outro">Outro</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-3 col-lg-3">
                            <label for="parcela">Parcela?</label>
                            <select
                                name="parcela"
                                id="parcela"
                                class="custom-select"
                                onchange="HandleFormaPagamento();">
                                    <option value="nao">Não</option>
                                    <option value="sim">Sim</option>
                            </select>
                        </div>
                        <div class="col-6 col-md-2 col-lg-2 qtd-hiden" id="qtd">
                            <label for="quantidade">Quantidade</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-navy" id="qtd_label">X</span>
                                </div>
                                <input
                                    type="number"
                                    class="form-control"
                                    placeholder="12"
                                    aria-label="12"
                                    aria-describedby="qtd_label"
                                >
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12 col-md-4 col-lg-4 pt-1">
                            <button
                                type="submit"
                                class="btn btn-outline-success">
                                <i class="fas fa-save mx-2"></i>
                                Salvar
                            </button>
                            <button
                                type="reset"
                                onclick="cancelarRegistro();"
                                class="btn btn-outline-danger">
                                <i class="fas fa-eraser mx-2"></i>
                                Cancelar
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@stop
@section('css')
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <style>
        .qtd-hiden {
            display:none;
        }
    </style>
@stop

@section('js')
    <script src={{ asset('js/main.js') }}></script>
    <script>
        let parcela = $('#parcela');
        let qtd = $('#qtd');
        const HandleFormaPagamento = () => {
            if(parcela.value == 'sim') {
                qtd.classList.remove('qtd-hiden');
            }else {
                qtd.classList.add('qtd-hiden');
            }
            return (
                qtd
            );
        }
    </script>
@endsection


