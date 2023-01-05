import { RouteApi } from "../../routes/RouteApi.js";
import { ApiData } from "../../services/ApiData.js";
import { ListFornecedor } from "./ListFornecedor.js";

let tableContent = $("#tbody-content");

tableContent.addEventListener("click", async (e) => {
    let id = e.target;
    let nameDelete = $(`[data-${id.value}-name]`);
    if (id.classList.contains("btnDelete")) {
        Swal.fire({
            title: `Deseja realmente excluir </br> <b>${nameDelete.innerHTML}</b>`,
            text: 'Não será possível reverter esse processo depois!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#6f42c1!important',
            cancelButtonColor: '#001f3f',
            confirmButtonText: 'Sim, excluir!',
            cancelButtonText: 'Não, cancelar!'
        }).then(async (result) => {
            if (result.isConfirmed) {
                const deleted = await ApiData.DeleteData(RouteApi.fornecedorURL, id.value);
                if (!deleted.errors) {
                    let tdtarget = $(`.data-id-${id.value}`);
                    tdtarget.classList.add("fadeOut");

                    setTimeout(function () {
                        tdtarget.remove();
                        ListFornecedor.UpdateData();
                        Swal.fire(
                            'Excluído!',
                            'Registro excluído com sucesso!.',
                            'success'
                        )
                    }, 700);

                }else{
                    Swal.fire(
                        '...Oops!',
                        'Estamos como uma instabilidade no momento. Tente novamente!.',
                        'error'
                    )
                }

            }
        })

    }
})

