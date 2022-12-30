import { RouteApi } from "../../routes/RouteApi.js";

const ListaFornecedor = async () => {
    try {
        const data = await fetch(RouteApi.fornecedorURL);
        const response = await data.json();

        const dados = {
            data: response.data,
            page: response.page,
            last_item: response.last_item,
            per_page: response.per_page,
            total: response.total
        }
        return dados;
    } catch (erro) {
        return erro
    }
}

function createTable(dados) {
    // Formulando tabela
    let tableContent = $("#table-content");
    let tableAvisoFornecedor = document.createElement('h5');
    tableAvisoFornecedor.className = 'text-secondary text-center';
    tableAvisoFornecedor.innerHTML = 'Nenhum fornecedor encontrado';
    tableContent.appendChild(tableAvisoFornecedor);

    if (dados.data.length > 0) {
        tableContent.removeChild(tableAvisoFornecedor);
        dados.data.forEach(item => {
            let contentTR = document.createElement("tr");
            let contentBody = $("#tbody-content");
            let documento = `
            <td>${item.nm_fornecedor}</td>
            <td>${item.email}</td>
            <td>${item.telefone}</td>
            <td>${item.celular}</td>
            <td>
                <button
                    class='btn btn-outline-light btn-sm bg-purple buttonEdit'
                    value=${item.id}
                    >
                    Editar
                </button>
                <button
                    class='btn btn-outline-light btn-sm bg-navy'
                    onclick='ExcluirForn(${item.id})'>
                    Excluir
                </button>
            </td>
        `;
            contentTR.innerHTML = documento;
            contentBody.appendChild(contentTR);

        })

    }
}

createTable(await ListaFornecedor());


