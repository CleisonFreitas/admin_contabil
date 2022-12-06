@extends('adminlte::page')

@section('title', 'Contas a pagar')

@section('content_header')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="form-group row align-items-center justify-content-between no-gutters pt-2">
                    <h4 class="text-navy">Conta a pagar</h4>
                    <button
                        class="btn bg-purple btn-outline-light mb-2"
                        id="novo-cadastro"
                        onclick="adicionarRegistro();"
                    >
                    <i class="fas fa-plus-circle mx-2"></i>
                        Novo Lançamento
                    </button>
                </div>

            </div>
        </div>

        <div class="card text-navy" id="table-card">
            <div class="card-header">
                <h4>Tabela de Despesas</h4>
            </div>
            <div class="card-body shadow bg-white text-purple ">
                <div class="form-group row justify-content-end">
                    <div class="col-6 col-md-3 col-lg-3">
                        <input type="date" name="vencimento-inicial" id="vencimento-inicial" class="form-control">
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                        <input type="date" name="vencimento-final" id="vencimento-inicial" class="form-control">
                    </div>

                    <div class="col-12 col-md-4 col-lg-4">
                        <input type="text" name="pesquisa" id="pesquisa" class="form-control" placeholder="Consultar por nome, fornecedor...">
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <button class="btn btn-outline-info btn-sm "><<</button>
                    <button class="btn btn-outline-info btn-sm">Anterior</button>
                    <button class="btn btn-info btn-sm mx-1">1</button>
                    <button class="btn btn-outline-info btn-sm">Próximo</button>
                    <button class="btn btn-outline-info btn-sm">>></button>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Lançamento</th>
                                <th>Vencimento</th>
                                <th>Fornecedor</th>
                                <th>Plano</th>
                                <th>Valor</th>
                                <th>Pago</th>
                                <th>Pendente</th>
                                <th>Ações</th>
                            </tr>
                            <tbody class="bg-light">
                                <tr class="table-tr"></tr>
                            </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        <div class="card card-invisible" id="content-card">
            <div class="card-header">
                <h4>Lançamento</h4>
            </div>
            <div class="card-body text-navy shadow">
                <form >
                    <div class="form-group row">
                        <div class="col-12 col-md-8 col-lg-8">
                            <label for="plano_contas">Plano de Contas</label>
                            <select name="plano_contas" id="plano_contas" class="custom-select">
                                <option value="1">plano 1</option>
                                <option value="2">plano 2</option>
                                <option value="3">plano 3</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-4 col-lg-4">
                            <label for="documento">Número do documento</label>
                            <input
                                type="text"
                                name="documento"
                                id="documento"
                                class="form-control pt-2"
                                required
                                placeholder="Digite o número do documento"
                            >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12 col-md-8 col-lg-8">
                            <label for="fornecedor">Fornecedor</label>
                            <select
                                name="fornecedor"
                                id="fornecedor"
                                class="custom-select">
                                <option>Escolher uma</option>
                                <option value="1">André Alimentos</option>
                                <option value="2">Anuda Comércio</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12 col-md-10 col-lg-10">
                            <label for="descricao">Descrição:</label>
                            <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição do pagamento">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12 col-md-3 com-lg-3">
                            <label for="vencimento">Vencimento</label>
                            <input type="date" name="vencimento" id="vencimento" class="form-control">
                        </div>
                        <div class="col-12 col-md-3 col-lg-3">
                            <label for="taxas">Desconto/Taxa</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-purple" id="taxas_label">R$</span>
                                </div>
                                <input
                                    type="text"
                                    name="taxas"
                                    class="form-control"
                                    placeholder="Somento números"
                                    aria-label="Somento números"
                                    aria-describedby="taxas_label"
                                >
                            </div>
                        </div>
                        <div class="col-12 col-md-3 col-lg-3">
                            <label for="juros">Juros/Multa</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-purple" id="juros_label">R$</span>
                                </div>
                                <input
                                    type="text"
                                    name="juros"
                                    class="form-control"
                                    placeholder="Somento números"
                                    aria-label="Somento números"
                                    aria-describedby="juros_label"
                                >
                            </div>
                        </div>
                        <div class="col-12 col-md-3 col-lg-3">
                            <label for="valor">Valor</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-purple" id="valor_label">R$</span>
                                </div>
                                <input
                                    type="text"
                                    name="valor"
                                    class="form-control"
                                    placeholder="Somento números"
                                    aria-label="Somento números"
                                    aria-describedby="valor_label"
                                >
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-8 col-md-8 col-lg-8">
                            <label for="recorrencia">Recorrente</label>
                            <select name="recorrencia" id="recorrencia" class="custom-select" onchange="handleChange();">
                                <option value="nao">Não</option>
                                <option value="diario">Diário</option>
                                <option value="semanal">Semanal</option>
                                <option value="mensal">Mensal</option>
                                <option value="anual">Anual</option>
                            </select>
                        </div>
                        <div class="col-4 col-md-2 col-lg-2 quantidade-hidden">
                            <label for="quantidade">Vezes</label>
                            <input type="number" name="quantidade" id="quantidade" class="form-control" value="0">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12 col-md-4 col-lg-4 pt-1">
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
    </div>
@stop
@section('css')
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <style>
        .quantidade-hidden {
            display:none;
        }
    </style>
@stop

@section('js')
<script src={{ asset('js/main.js') }}></script>
<script>
    let qtd = $("#quantidade").parentNode;
    let handleChange = () => {
        let recorrencia = $("#recorrencia");
        if(recorrencia.value !== 'nao'){
            qtd.classList.remove('quantidade-hidden')
        }else{
            qtd.classList.add('quantidade-hidden')
        }
    }
</script>

<script>
    let tabelaDate = [
        {
            "id": "26607",
            "lancamento": "26/11/2022",
            "vencimento": "26/11/2022",
            "fornecedor": "DRIKA INDUSTRIA E COMERCIO DE PRODUTOS PROMOCIONAIS EIRELI",
            "plano": "2.1.11 - PRESTADORES DE SERVIÇOS FIXOS",
            "valor": "150,00",
            "pago" : "80,00",
            "pendente": "70,00"
        }
    ];
  //  onload.AddColumn(tabelaDate)

/*     function AddColumn (tabelaDate) {
        console.log(tabelaDate)
        let inf = $(".table-tr");
        let dataTable = [];
        dataTable = tabelaDate.map((item) =>
            `<td>${item.id}</td>
            <td>${item.lancamento}</td>
            <td>${item.vencimento}</td>
            <td>${item.fornecedor}</td>
            <td>${item.plano}</td>
            <td>${item.valor}</td>
            <td>${item.pago}</td>
            <td>${item.pendente}</td>`
        );
        return console.log(dataTable)
    }; */
</script>
@endsection


