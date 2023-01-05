import { RouteApi } from "../../routes/RouteApi.js";
import { ApiData } from "../../services/ApiData.js";

let contentBody = $("#tbody-content");

const UpdateData = async () => {
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
            contentTR.className = `data-id-${item.id}`
            let documento = `
            <td data-${item.id}-name='fornecedor'>${item.nm_fornecedor}</td>
            <td data-${item.id}-email='email'>${item.email}</td>
            <td data-${item.id}-telefone='telefone'>${item.telefone}</td>
            <td data-${item.id}-celular='celular'>${item.celular}</td>
            <td>
            <div class="btn-group">
                <div class="btn-group dropleft" role="group">
                    <button type="button"
                        class="btn btn-outline-light bg-navy dropdown-toggle dropdown-toggle-split"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        <i class="fas fa-cogs mx-2"></i>
                    </button>
                    <div class="dropdown-menu">
                        <button
                            class="dropdown-item btnEdit"
                            value=${item.id}>
                            <i class="fas fa-edit"></i>
                            Editar
                        </button>
                        <button
                            class="dropdown-item btnDelete"
                            value=${item.id}
                            >
                            <i class="fas fa-trash-alt"></i>
                            Remover
                        </button>
                    </div>
                </div>
            </div>


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
