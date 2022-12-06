@extends('adminlte::page')

@section('title', 'Plano de Contas')

@section('content_header')
<div class="container-fluid">
    <div class="card">
        <div class="card-body shadow">
            <h4 class="text-info bg-light pt-2 pb-2 px-2">Plano de Contas</h4>
            <hr>
            <div class="form-group row pt-2">
                <div class="col-12 col-md-3 col-lg-3">
                    <button class="btn btn-outline-info mb-2" id="novo-cadastro" onclick="adicionarRegistro();"><i class="fas fa-plus-circle mx-2"></i>Inserir novo registro</button>
                </div>
                <div class="col-12 col-md-8 col-lg-8">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-navy" id="search_label"><i class="fas fa-search text-white"></i></span>
                        </div>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Pesquisar por grupo/conta..."
                            aria-label="Pesquisar por grupo/conta..."
                            aria-describedby="search_label"
                            autofocus
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="container-fluid mb-3">
    <div class="card card-invisible" id="content-card">
        <div class="card-header">
            <h4>Plano de Contas</h4>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group row">
                    <div class="col-12 col-md-9 col-lg-9">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Descrição...">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12 col-md-4 col-lg-4">
                        <label for="tipo">Tipo</label>
                        <select
                            name="tipo"
                            id="tipo"
                            class="custom-select"
                            >
                                <option value="receitas">Receita</option>
                                <option value="despesa">Despesa</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4">
                        <label for="hierarquia">Hierarquia</label>
                        <select
                        name="hierarquia"
                        id="hierarquia"
                        class="custom-select"
                        onchange="HandleGrupo();"
                        >
                            <option value="grupo">Grupo</option>
                            <option value="conta">Conta</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row grupo-hidden " id="grupo">
                    <div class="col-12 col-md-4 col-lg-4">
                        <label for="pertence">Pertence à</label>
                        <select name="pertence" id="pertence" class="custom-select">
                            <option>Escolha um grupo</option>
                            <option value="#">Grupo 1</option>
                            <option value="#">Grupo 2</option>
                            <option value="#">Grupo 3</option>
                        </select>
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
@endsection
