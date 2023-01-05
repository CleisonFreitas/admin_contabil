import { RouteApi } from "../../routes/RouteApi.js";
import { ApiData } from "../../services/ApiData.js";

let contentBody = $("#tbody-content");

const UpdateData = async() => {
    contentBody.innerHTML = ``;
    const dados = await ApiData.FetchAllData(RouteApi.fornecedorURL);
    createTable(dados)
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

            let documento = `
            <td data-${item.id}-name='fornecedor'>${item.nm_fornecedor}</td>
            <td data-${item.id}-email='email'>${item.email}</td>
            <td data-${item.id}-telefone='telefone'>${item.telefone}</td>
            <td data-${item.id}-celular='celular'>${item.celular}</td>
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
(onload = () => {
    UpdateData();
})

export const ListFornecedor = {
    UpdateData
}
