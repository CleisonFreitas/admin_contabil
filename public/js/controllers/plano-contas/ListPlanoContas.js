import { RouteApi } from "../../routes/RouteApi.js";
import { ApiData } from "../../services/ApiData.js";

let contentBody = $("#tbody-content");

const UpdateData = async () => {
    contentBody.innerHTML = ``;
    const dados = await ApiData.FetchAllData(RouteApi.planocontasURL);
    console.log(dados)
    createTable(dados)
}

function createTable(dados) {
    // Formulando tabela
    let tableContent = $("#table-content");
    let tableAlert = document.createElement('h5');
    tableAlert.className = 'text-secondary text-center';
    tableAlert.innerHTML = 'Nenhum registro encontrado';
    tableContent.appendChild(tableAlert);

    if (dados.data.length > 0) {
        tableContent.removeChild(tableAlert);
        dados.data.forEach(item => {
            let owner = item.owner !== null ? item.owner.nome : "";
            let contentTR = document.createElement("tr");
            contentTR.className = `data-id-${item.id}`
            let documento = `
            <td data-${item.id}-id='id'>${item.id ?? ""}</td>
            <td data-${item.id}-name='nome'>${item.nome ?? ""}</td>
            <td data-${item.id}-tipo='tipo'>${item.tipo == 'G' ? 'Grupo' : 'Conta'}</td>
            <td data-${item.id}-tipo='owner'>${owner ?? ""}</td>
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
