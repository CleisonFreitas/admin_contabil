import { RouteApi } from "../../routes/RouteApi.js";
import { ApiData } from "../../services/ApiData.js";
import { Util } from "../../util/formatacao.js";

let contentBody = $("#tbody-content");
let pagination = $("#pagination");


pagination.addEventListener('change', async () => Paginator());

const Paginator = async() => {
    let term = $("#buscaConteudo").value;
    let page = $("#total_page").value;
    let per_page = $("#per_page").value;
    let sort = $("#classificacao").value;
    let order = $("#ordem").value;

    UpdateData(term, page, per_page, sort, order)

}

const UpdateData = async (term = "", page = 1, per_page = 10, sort = "id", order = 'desc') => {
    const dados = await ApiData.FetchAllData(RouteApi.planocontasURL + `?q=${term}&page=${page}&per_page=${per_page}&sort=${sort}&order=${order}`);
    createTable(dados)
}

function createTable(dados) {
    // Formulando tabela
    Util.Pagination(dados)

    if (dados.data.length > 0) {
        contentBody.innerHTML = ``;
        dados.data.forEach(item => {
            let owner = item.owner !== null ? item.owner.nome : "";
            let rows = document.createElement("tr");
            rows.className = `data-id-${item.id}`
            let columns = `
                <td data-${item.id}-id='id'>${item.id ?? ""}</td>
                <td data-${item.id}-name='nome'>${item.nome ?? ""}</td>
                <td data-${item.id}-tipo='tipo'>${item.tipo == 'G' ? 'Grupo' : 'Conta'}</td>
                <td data-${item.id}-owner='owner'>${owner ?? ""}</td>
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
            rows.innerHTML = columns;
            contentBody.appendChild(rows);

        })

    } else {
        contentBody.innerHTML = `
            <tr>
                <td colspan=5>Nenhum registro encontrado!</td>
            </tr>
        `;

    }
}

(onload = () => {
    UpdateData();
})

export const ListPlanoContas = {
    UpdateData
}
