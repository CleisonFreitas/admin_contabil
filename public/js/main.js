const $ = document.querySelector.bind(document);
let tabela = $("#table-card");
let contentHide = $('#content-card');
let newRegistro = $("#novo-cadastro");

const AdicionarRegistro = () => {
    contentHide.classList.toggle('card-invisible')
    tabela.classList.toggle('card-invisible')
    console.log(newRegistro.innerText);
    newRegistro.innerHTML =
        newRegistro.innerText == 'Adicionar novo registro' ? `<i class="fas fa-list mx-2"></i>Listagem de registros` : `<i class="fas fa-plus-circle mx-2"></i>Adicionar novo registro`;

};

const cancelarRegistro = () => {
    contentHide.classList.add('card-invisible')
    tabela.classList.remove('card-invisible')
}
newRegistro.addEventListener("click", AdicionarRegistro);

// Paginação
let paginacao = $("#pagination");

paginacao.innerHTML =
    `
    <form class="form-inline">
        <label class="sr-only"
            for="buscaConteudo">
            Pesquisa
        </label>
        <input type="text"
            class="form-control mb-2 mr-sm-2"
            id="buscaConteudo"
            name="q"
            value=""
            placeholder="Digite para pesquisar...">

        <label
            for="exibir"
            class="mr-2 mb-2">Exibir:
        </label>
        <input
            type="number"
            class="custom-select mb-2"
            id="per_page"
            value=10>

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
            <option value="desc">Decrescente</option>
            <option value="asc">Crescente</option>
        </select>

        <label
            for="pagina"
            class="mr-2 mt-2 mb-3 ml-3">Página:
        </label>
        <select
            name="pagina"
            id="total_page"
            class="custom-select mb-2 col-12 col-sm-3 col-lg-2">
        </select>

    </form>
`
