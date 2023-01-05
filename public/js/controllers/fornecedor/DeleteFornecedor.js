import { ListFornecedor } from "./ListFornecedor.js";

let tableContent = $("#tbody-content");

tableContent.addEventListener("click", async (e) => {
    let id = e.target;
    if (id.classList.contains("btnDelete")) {
        Swal.fire({
            title: 'Deseja realmente excluir esse registro?',
            text: "Não será possível reverter esse processo depois!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, excluir!'
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire(
                'Excluído!',
                'Registro excluído com sucesso!.',
                'success'
              )
            }
          })
        let tdtarget = $(`.data-id-${id.value}`);
        tdtarget.classList.add("fadeOut");

        setTimeout(function() {
            tdtarget.remove();
            ListFornecedor.UpdateData();
        },700);
    }
})

