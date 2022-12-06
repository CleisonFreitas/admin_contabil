@extends('adminlte::page')

@section('title', 'Centro de Custo')

@section('content_header')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4>Centro de Custo</h4>
                <hr>
                <div class="form-group row pt-2">
                    <div class="col-12 col-md-3 col-lg-3">
                        <button class="btn btn-outline-info mb-2" id="novo-cadastro" onclick="adicionarRegistro();"><i class="fas fa-plus-circle mx-2"></i>Novo centro de custo</button>
                    </div>
                    <div class="col-12 col-md-8 col-lg-8">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-navy" id="search_label"><i class="fas fa-search text-white"></i></span>
                            </div>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Pesquisar por centro de custo..."
                                aria-label="Pesquisar por centro de custo..."
                                aria-describedby="search_label"
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-invisible" id="content-card">
            <div class="card-header">
                <h4>Cadastrar novo centro de custo</h4>
            </div>
            <div class="card-body bg-light shadow">
                <form action="#">
                    <div class="form-group row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <label for="centro">Novo centro de custo*</label>
                            <input
                                type="text"
                                name="nome"
                                id="centro"
                                class="form-control pt-2"
                                placeholder="Digite o nome do centro de custo"
                                required
                            >
                        </div>
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
@stop

@section('js')
    <script src={{ asset('js/main.js') }}></script>
@endsection


