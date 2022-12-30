import { RouteApi } from "../../routes/RouteApi.js";

let formulario = $("#form");
formulario.addEventListener("submit", async (e) => {
    e.preventDefault();

    const dados = {
        nm_fornecedor: $("#nome").value,
        email: $("#email").value,
        telefone: $("#telefone").value,
        celular: $("#celular").value,
        whatsapp: $("#whatsapp").value,
        cep: $("#cep").value,
        logradouro: $("#logradouro").value,
        numero: $("#numero").value,
        bairro: $("#bairro").value,
        cidade: $("#cidade").value,
        uf: $("#uf").value,
        nr_cpf: $("#nr_cpf").value,
        nr_cnpj: $("#nr_cnpj").value,
        ins_estadual: $("#ins_estadual").value,
        ins_municipal: $("#ins_municipal").value,
        observacao: $("#observacao").value,
    }
    const result = await createFornecedor(dados);
    if (result.errors) {
        console.log(result.errors)
        Object.keys(result.errors).forEach(key => {
            // nome do campo console.log(key);
            // array de erros console.log(result.errors[key]);

            let li = $(`.msg-erro--${key}`);
            result.errors[key].forEach(item => {
                li.innerHTML = `<b>*${item}*</b>`;
            })

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Um problema inesperado ocorreu. Verifique as informações e tente novamente!'
            })
        });
    } else {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Registro realizado com sucesso!',
            showConfirmButton: false,
            timer: 1500
          })

        formulario.reset();
    }



})

const createFornecedor = async (dados) => {
    try {
        const data = await fetch(RouteApi.fornecedorURL, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(dados),
        })
        const response = data.json();
        return response;
    } catch (e) {
        return e
    }
}

function createErro(erro) {
    erro.forEach(item => {
        let li = document.createElement(li);
        li.innerHTML = item
        console.log(li)
    })
}

