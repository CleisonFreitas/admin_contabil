@extends('adminlte::page')

@section('title', 'Plano de Contas')

@section('content_header')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-9 col-lg-9">
                    <h4>Plano de Contas</h4>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <button class="btn bg-purple btn-outline-light flex justify-self-end"
                        id="novo-cadastro">
                        <i class="fas fa-plus-circle mx-2"></i>Adicionar novo registro
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="container-fluid text-secondary pb-3">
    <div class="card card-invisible" id="content-card">
        <div class="card-body">
            <h4>Plano de Contas</h4>
            <hr>
            <form id="form" class="form">
                <div class="form-group row">
                    <div class="col-8 col-sm-3 col-lg-2">
                        <label for="id">ID</label>
                        <input
                            type="text"
                            name="id"
                            id="id"
                            class="form-control"
                            readonly
                        >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12 col-md-9 col-lg-9">
                        <label for="nome">Nome*</label>
                        <input
                            type="text"
                            name="nome"
                            id="nome"
                            class="form-control"
                            placeholder="Descrição...">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12 col-sm-6 col-lg-4">
                        <label for="tipo">Tipo</label>
                        <select
                            name="tipo"
                            id="hierarquia"
                            class="custom-select"
                            onchange="HandleGrupo();"
                        >
                            <option value="grupo">Grupo</option>
                            <option value="conta">Conta</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 grupo-hidden" id="grupo">
                        <label for="grupo">Grupo*</label>
                        <select name="grupo" id="grupo" class="custom-select">
                            <option>Escolha um grupo</option>
                            <option value="#">Grupo 1</option>
                            <option value="#">Grupo 2</option>
                            <option value="#">Grupo 3</option>
                        </select>
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
                            class="btn bg-navy btn-outline-light">
                            <i class="fas fa-eraser mx-2"></i>
                            Cancelar
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <!-- Plano de Contas -->
    <div class="card" id="table-card">
        <div class="card-body" id="table-content">
            <h4>Gerenciamento de contas</h4>

            <hr>

            <section id="pagination">
                <form class="form-inline">
                    <label class="sr-only"
                        for="buscaConteudo">
                        Pesquisa
                    </label>
                    <input type="text"
                        class="form-control mb-2 mr-sm-2"
                        id="buscaConteudo"
                        placeholder="Digite para pesquisar...">

                    <label
                        for="exibir"
                        class="mr-2 mb-2">Exibir:
                    </label>
                    <input
                        type="number"
                        class="form-control mb-2"
                        id="exibir"
                        value="10">

                    <label
                        for="classificacao"
                        class="mr-2 mt-2 mb-3 ml-2">Ordenar:
                    </label>
                    <select
                        name="classificacao"
                        id="classificacao"
                        class="custom-select mb-2">
                        <option value="id">#</option>
                        <option value="nome">Nome</option>
                        <option value="id">Data</option>
                    </select>
                    <select
                        name="ordem"
                        id="ordem"
                        class="custom-select mb-2">
                        <option value="asc">Crescente</option>
                        <option value="desc">Decrescente    </option>
                    </select>

                    <button
                        class="btn btn-outline-secondary btn-sm mb-2 mx-1">
                        <i class="fas fa-step-backward mx-1"></i>Anterior
                    </button>
                    <button
                        class="btn btn-outline-secondary btn-sm mb-2 mx-1">
                        Próximo<i class="fas fa-step-forward my-1"></i>
                    </button>
                  </form>

            </section>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="bg-purple ">
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Tipo</th>
                            <th>Pertence à</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody id="tbody-content"></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <style>
        .grupo-hidden {
            display:none;
        }
    </style>
@stop

@section('js')
    <script src={{ asset('js/main.js') }}></script>
    <script>
        let hierarquia = $("#hierarquia");
        let grupo = $("#grupo");
        const HandleGrupo = () => {
            if(hierarquia.value == 'conta'){
                grupo.classList.remove('grupo-hidden')
            }else{
                grupo.classList.add('grupo-hidden')
            }
            return(
                grupo
            );
        }
    </script>
    <script src={{ asset('js/controllers/plano-contas/ListPlanoContas.js') }} type="module"></script>
@endsection
