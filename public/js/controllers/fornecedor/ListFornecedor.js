import { RouteApi } from "../../routes/RouteApi.js";
import { ApiData } from "../../services/ApiData.js";

const dados = await ApiData.FetchAllData(RouteApi.fornecedorURL);
console.log(dados)

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

createTable(dados)
