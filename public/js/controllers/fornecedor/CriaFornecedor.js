import { ApiData } from "../../services/ApiData.js";
import { Util } from "../../util/formatacao.js";

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
    // Limpando Cache de mensagens de erro.
    $(".msg-erro--nr_cnpj").innerHTML = '';
    $(".msg-erro--nm_fornecedor").innerHTML = '';

    const result = await ApiData.CreateData(dados);
    Util.ResultReturn(result)

    if (!result.errors)
        formulario.reset();

});
